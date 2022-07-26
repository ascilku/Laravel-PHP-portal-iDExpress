<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;


use Session;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Create_Karyawan;

use App\Models\M_Akses              as Akses;

use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Karyawan                 as Karyawan;
use App\Models\admin\M_Jabatan                  as Jabatan;
use App\Models\admin\M_Gaji                     as Gaji;
use App\Models\admin\M_Jabatan_Gaji             as Jabatan_Gaji;
use App\Models\admin\M_Riw_Penempatan_Wilayah   as Riw_Penempatan_Wilayah;
use App\Models\admin\M_Penempatan_Wilayah       as Penempatan_Wilayah;
use App\Models\admin\M_Penempatan               as Penempatan;

use App\Models\rekrutmen\M_Lowongan_Kerja       as Lowongan_Kerja;

use Crypt;

class C_Penempatan extends Controller
{
    //

    public function penempatanKaryawan($key, Request $request)
    {   
        if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
            return redirect('login-dashboard');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage'])); 
            $date_now = date('d-m-Y');

            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);

                    if ($today_time >= $expire_time) {

                        $akun  = Akun::where('token', $_COOKIE['cookie-storage'])
                                        ->update([
                                            'token'           => null
                                        ]);
                        
                            if ($akun) {
                                unset($_COOKIE['cookie-storage']);    
                                setcookie('cookie-storage', null, -1, '/'); 
                                
                                unset($_COOKIE['date-cookie-storage']);    
                                $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                if($logout_unset_cookie){
                                    
                                    return redirect('login-dashboard');
                                } 
                            }else{
                                $perusahaan  = Perusahaan::where('token', $_COOKIE['cookie-storage'])
                                        ->update([
                                            'token'           => null
                                        ]);
                        
                                        if ($perusahaan) {
                                            unset($_COOKIE['cookie-storage']);    
                                            setcookie('cookie-storage', null, -1, '/'); 
                                            
                                            unset($_COOKIE['date-cookie-storage']);    
                                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                            if($logout_unset_cookie){
                                                
                                                return redirect('login-dashboard');
                                            } 
                                        }else{
                                            unset($_COOKIE['cookie-storage']);    
                                            setcookie('cookie-storage', null, -1, '/'); 
                                            
                                            unset($_COOKIE['date-cookie-storage']);    
                                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                            if($logout_unset_cookie){
                                                
                                                return redirect('login-dashboard');
                                            } 
                                        }
                            }
                    }else{


                        $data['key'] = $key;
                        $data['penempatan'] = Penempatan::get();
                        $dahboard_akun_cookie_ = Perusahaan::where('token', $_COOKIE['cookie-storage'])->first();
                        if (isset($dahboard_akun_cookie_)) {
                            $data['dahboard_akun_cookie'] = Perusahaan::where('token', $_COOKIE['cookie-storage'])->with('akses')->with('data_perusahaan')->first();
                            $id_perusahaan_ = $data['dahboard_akun_cookie']->id;
                        }else{

                                $data['dahboard_akun_cookie'] = Akun::where('token', $_COOKIE['cookie-storage'])
                                                                                                                            ->with([
                                                                                                                                'perusahaan' => function($query){
                                                                                                                                    return $query->with('data_perusahaan');
                                                                                                                                }

                                                                                                                            ])
                                                                                                                            ->with('akses')->with('data_diri')->with('perusahaan')
                                                                                                                        ->first();

                                $id_perusahaan_ = $data['dahboard_akun_cookie']->perusahaan->id;
                        }

                       $data['dahboard_karyawan'] = Karyawan::with([
                            'akun' => function($query){
                                return $query->with('data_diri')
                                            ->with('data_karyawan')
                                            ->with('data_orang_tua')
                                            ->with('pendidikan_formal')
                                            ->with('pendidikan_non_formal')
                                            ->with('file_pribadi')
                                            ->with([
                                                'jabatan_gaji' => function($query){
                                                    return $query->with('jabatan')
                                                    ->with('gaji');
                                                }
                                            ])
                                            ->with(['riw_penempatan_wilayah' => function($query){
                                                return $query->with('penempatan');
                                            }
                                            ]);
                            }
                        ])->whereHas('akun', 
                                            function($query) use ($id_perusahaan_){
                                                $query->where('id_perusahaan', $id_perusahaan_);  
                                            })->get();
                            
                        if (!isset($request->id)) {
                                
                        }else{
                                            
                            // $data['dahboard_penempatan'] = Riw_Penempatan_Wilayah::
                            //                                             with([
                            //                                                 'akun' => function($query){
                            //                                                     return $query->with('data_diri');
                            //                                                 }])
                            //                                             ->with('penempatan')->where('id_akun', $request->id)->orderBy('id', 'desc')->get();
                            
                            // $data['dahboard_penempatan_id'] = Riw_Penempatan_Wilayah::with('penempatan')->where('id_akun', $request->id)->orderBy('id', 'desc')->first();

                            $data['dahboard_penempatan'] = Penempatan_Wilayah::
                                                                        with([
                                                                            'akun' => function($query){
                                                                                return $query->with('data_diri');
                                                                            }])
                                                                        ->with('penempatan')->where('id_akun', $request->id)->orderBy('id', 'desc')->get();
                            
                            $data['dahboard_penempatan_id'] = Penempatan_Wilayah::with('penempatan')->where('id_akun', $request->id)->orderBy('id', 'desc')->first();
                            
                        }
                                 
                        return view('admin.tema-satu.home.karyawan.tab-penempatan.menu-penempatan ', $data);
                    }
        }
    }

    public function createPenempatan(Request $request)
    {
        if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
            return redirect('login-dashboard');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage'])); 
            $date_now = date('d-m-Y');

            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);

                    if ($today_time >= $expire_time) {

                        $akun  = Akun::where('token', $_COOKIE['cookie-storage'])
                                        ->update([
                                            'token'           => null
                                        ]);
                        
                            if ($akun) {
                                unset($_COOKIE['cookie-storage']);    
                                setcookie('cookie-storage', null, -1, '/'); 
                                
                                unset($_COOKIE['date-cookie-storage']);    
                                $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                if($logout_unset_cookie){
                                    
                                    return redirect('login-dashboard');
                                } 
                            }else{
                                $perusahaan  = Perusahaan::where('token', $_COOKIE['cookie-storage'])
                                        ->update([
                                            'token'           => null
                                        ]);
                        
                                        if ($perusahaan) {
                                            unset($_COOKIE['cookie-storage']);    
                                            setcookie('cookie-storage', null, -1, '/'); 
                                            
                                            unset($_COOKIE['date-cookie-storage']);    
                                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                            if($logout_unset_cookie){
                                                
                                                return redirect('login-dashboard');
                                            } 
                                        }else{
                                            unset($_COOKIE['cookie-storage']);    
                                            setcookie('cookie-storage', null, -1, '/'); 
                                            
                                            unset($_COOKIE['date-cookie-storage']);    
                                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                            if($logout_unset_cookie){
                                                
                                                return redirect('login-dashboard');
                                            } 
                                        }
                            }
                    }else{


                        $id                             = $request->input('id');
                        $alamat_penempatan              = $request->input('alamat_penempatan');
                        $prov_penempatan                = $request->input('prov_penempatan');
                        $kota_penempatan                = $request->input('kota_penempatan');
                        $kabupaten_penempatan           = $request->input('kabupaten_penempatan');
                        $kecamatan_penempatan           = $request->input('kecamatan_penempatan');
                        $kelurahan_penempatan           = $request->input('kelurahan_penempatan');
                        $penempatan                     = $request->input('penempatan');
                        $kode_penempatan                = $request->input('kode_penempatan');
                        $jenis                          = $request->input('jenis');
                        
                        if (!isset($id)) {
                            $insertPenempatan = new Penempatan();
                        }else{
                            $insertPenempatan = Penempatan::find($id);
                        }

                        
                            $insertPenempatan->alamat               = $alamat_penempatan;
                            $insertPenempatan->provinsi             = $prov_penempatan;
                            $insertPenempatan->kota                 = $kota_penempatan;
                            $insertPenempatan->kabupaten            = $kabupaten_penempatan;
                            $insertPenempatan->kelurahan            = $kelurahan_penempatan;
                            $insertPenempatan->kecamatan            = $kecamatan_penempatan;
                            $insertPenempatan->alokasi              = $penempatan;
                            $insertPenempatan->kode_alokasi         = $kode_penempatan;
                            $insertPenempatan->status_th            = $jenis;
                        $insertPenempatan->save();

                                if ($insertPenempatan) {
                                    Session::flash('alert-success-karyawan', 'Berhasil Penempatan.');
                                    return redirect('dashboard-panel/penempatan-karyawan/master-penempatan');
                                }
                    }
        }
    }

    public function insertRiwPenempatan(Request $request)
    {
        if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
            return redirect('login-dashboard');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage'])); 
            $date_now = date('d-m-Y');

            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);

                    if ($today_time >= $expire_time) {

                        $akun  = Akun::where('token', $_COOKIE['cookie-storage'])
                                        ->update([
                                            'token'           => null
                                        ]);
                        
                            if ($akun) {
                                unset($_COOKIE['cookie-storage']);    
                                setcookie('cookie-storage', null, -1, '/'); 
                                
                                unset($_COOKIE['date-cookie-storage']);    
                                $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                if($logout_unset_cookie){
                                    
                                    return redirect('login-dashboard');
                                } 
                            }else{
                                $perusahaan  = Perusahaan::where('token', $_COOKIE['cookie-storage'])
                                        ->update([
                                            'token'           => null
                                        ]);
                        
                                        if ($perusahaan) {
                                            unset($_COOKIE['cookie-storage']);    
                                            setcookie('cookie-storage', null, -1, '/'); 
                                            
                                            unset($_COOKIE['date-cookie-storage']);    
                                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                            if($logout_unset_cookie){
                                                
                                                return redirect('login-dashboard');
                                            } 
                                        }else{
                                            unset($_COOKIE['cookie-storage']);    
                                            setcookie('cookie-storage', null, -1, '/'); 
                                            
                                            unset($_COOKIE['date-cookie-storage']);    
                                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                            if($logout_unset_cookie){
                                                
                                                return redirect('login-dashboard');
                                            } 
                                        }
                            }
                    }else{
                        $karyawan_                              = $request->input('karyawan_');
                        $jabatan_                      = $request->input('jabatan_');

                        $queryPenempatan = Riw_Penempatan_Wilayah::where('id_akun', $karyawan_)->first();

                            if(isset($queryPenempatan)){
                                $deletePenempatan = Riw_Penempatan_Wilayah::where('id_akun', $karyawan_); 
                                $deletePenempatan->delete();

                                if(isset($deletePenempatan)){
                                    $insertPenempatan = new Riw_Penempatan_Wilayah();
                                        $insertPenempatan->id_akun               = $karyawan_;
                                        $insertPenempatan->id_penempatan             = $jabatan_;
                                    $insertPenempatan->save();
                                }
                            }else{
                                $insertPenempatan = new Riw_Penempatan_Wilayah();
                                    $insertPenempatan->id_akun               = $karyawan_;
                                    $insertPenempatan->id_penempatan             = $jabatan_;
                                $insertPenempatan->save();
                            }

                        

                        $insertPenempatan_wilayah = new Penempatan_Wilayah();
                            $insertPenempatan_wilayah->id_akun               = $karyawan_;
                            $insertPenempatan_wilayah->id_penempatan             = $jabatan_;
                        $insertPenempatan_wilayah->save();

                                if ($insertPenempatan) {
                                    Session::flash('alert-success-karyawan', 'Berhasil Penempatan.');
                                    return redirect('dashboard-panel/penempatan-karyawan/master-penempatan');
                                } 
                    }
        }
    }

    public function hapusPenempatan(Request $request)
    {
        if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
            return redirect('login-dashboard');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage'])); 
            $date_now = date('d-m-Y');

            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);

                    if ($today_time >= $expire_time) {

                        $akun  = Akun::where('token', $_COOKIE['cookie-storage'])
                                        ->update([
                                            'token'           => null
                                        ]);
                        
                            if ($akun) {
                                unset($_COOKIE['cookie-storage']);    
                                setcookie('cookie-storage', null, -1, '/'); 
                                
                                unset($_COOKIE['date-cookie-storage']);    
                                $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                if($logout_unset_cookie){
                                    
                                    return redirect('login-dashboard');
                                } 
                            }else{
                                $perusahaan  = Perusahaan::where('token', $_COOKIE['cookie-storage'])
                                        ->update([
                                            'token'           => null
                                        ]);
                        
                                        if ($perusahaan) {
                                            unset($_COOKIE['cookie-storage']);    
                                            setcookie('cookie-storage', null, -1, '/'); 
                                            
                                            unset($_COOKIE['date-cookie-storage']);    
                                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                            if($logout_unset_cookie){
                                                
                                                return redirect('login-dashboard');
                                            } 
                                        }else{
                                            unset($_COOKIE['cookie-storage']);    
                                            setcookie('cookie-storage', null, -1, '/'); 
                                            
                                            unset($_COOKIE['date-cookie-storage']);    
                                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                            if($logout_unset_cookie){
                                                
                                                return redirect('login-dashboard');
                                            } 
                                        }
                            }
                    }else{
                        $penempatan_id               = Crypt::decrypt($request->input('id'));
                        $id_akun               = Crypt::decrypt($request->input('id_akun'));

                        $deleteJabatanGaji = Penempatan_Wilayah::where('id_akun', $id_akun)->orderBy('id','desc')->first(); 

                            if(isset($deleteJabatanGaji)){

                                $post_ = Penempatan_Wilayah::find($deleteJabatanGaji->id); 
                                $post_->delete();

                                $post = Riw_Penempatan_Wilayah::find($penempatan_id); 
                                $post->delete();
                                Session::flash('alert-success-karyawan', 'Berhasil Delete Penempatan.');
                                return redirect('dashboard-panel/penempatan-karyawan/master-penempatan');
                            }
                        
                        
                        
                    }
        }
    }

    public function hapusPerPenempatan(Request $request)
    {
        if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
            return redirect('login-dashboard');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage'])); 
            $date_now = date('d-m-Y');

            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);

                    if ($today_time >= $expire_time) {

                        $akun  = Akun::where('token', $_COOKIE['cookie-storage'])
                                        ->update([
                                            'token'           => null
                                        ]);
                        
                            if ($akun) {
                                unset($_COOKIE['cookie-storage']);    
                                setcookie('cookie-storage', null, -1, '/'); 
                                
                                unset($_COOKIE['date-cookie-storage']);    
                                $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                if($logout_unset_cookie){
                                    
                                    return redirect('login-dashboard');
                                } 
                            }else{
                                $perusahaan  = Perusahaan::where('token', $_COOKIE['cookie-storage'])
                                        ->update([
                                            'token'           => null
                                        ]);
                        
                                        if ($perusahaan) {
                                            unset($_COOKIE['cookie-storage']);    
                                            setcookie('cookie-storage', null, -1, '/'); 
                                            
                                            unset($_COOKIE['date-cookie-storage']);    
                                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                            if($logout_unset_cookie){
                                                
                                                return redirect('login-dashboard');
                                            } 
                                        }else{
                                            unset($_COOKIE['cookie-storage']);    
                                            setcookie('cookie-storage', null, -1, '/'); 
                                            
                                            unset($_COOKIE['date-cookie-storage']);    
                                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
                        
                                            if($logout_unset_cookie){
                                                
                                                return redirect('login-dashboard');
                                            } 
                                        }
                            }
                    }else{
                        $penempatan_id               = Crypt::decrypt($request->input('id'));
                        $penempatan_id_akun               = Crypt::decrypt($request->input('id_akun'));
                        $post = Penempatan_Wilayah::find($penempatan_id); 
                        $post->delete();
                        Session::flash('alert-success-karyawan', 'Berhasil Delete Penempatan.');
                        return redirect("dashboard-panel/penempatan-karyawan/master-penempatan?id=$penempatan_id_akun");
                    }
        }
    }
}
