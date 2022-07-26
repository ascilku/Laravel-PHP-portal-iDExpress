<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Karyawan                 as Karyawan;

use App\Models\admin\M_Jabatan                  as Jabatan;
use App\Models\admin\M_Gaji                     as Gaji;
use App\Models\admin\M_Jabatan_Gaji             as Jabatan_Gaji;
use App\Models\admin\M_Riw_Jabatan_Gaji         as Riw_Jabatan_Gaji;
use App\Models\admin\M_Riw_Penempatan_Wilayah   as Riw_Penempatan_Wilayah;
use App\Models\admin\M_Penempatan               as Penempatan;
use App\Models\rekrutmen\M_DataDiri             as DataDiri;
use App\Models\admin\M_Data_Karyawan            as Data_Karyawan;

use App\Models\rekrutmen\M_Lowongan_Kerja       as Lowongan_Kerja;

use Session;
use Crypt;


class C_Jabatan_Gaji extends Controller
{
    //
    public function jabatanKaryawan($key, Request $request)
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
                                        
                        $dahboard_akun_cookie_ = Perusahaan::where('token', $_COOKIE['cookie-storage'])->first();
                        if (isset($dahboard_akun_cookie_)) {
                            $data['dahboard_akun_cookie'] = Perusahaan::where('token', $_COOKIE['cookie-storage'])->with('akses')->with('data_perusahaan')->first();
                            $id_perusahaan_ = $data['dahboard_akun_cookie']->id;
                        }else{
                            $data['key'] = $key;
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

                        if (!isset($request->id)) {
                                
                        }else{
                                            
                            $data['dahboard_jabatan_'] = Riw_Jabatan_Gaji::
                                                                        with([
                                                                            'akun' => function($query){
                                                                                return $query->with('data_diri');
                                                                            }])
                                                                        ->with('jabatan')->with('gaji')->where('id_akun', $request->id)->orderBy('id', 'desc')->get();

                            // $data['dahboard_jabatan_Riw'] = Riw_Jabatan_Gaji::
                            //                                             with([
                            //                                                 'akun' => function($query){
                            //                                                     return $query->with('data_diri');
                            //                                                 }])
                            //                                             ->with('jabatan')->with('gaji')->where('id_akun', $request->id)->orderBy('id', 'desc')->get();



                            $data['dahboard_jabatan_id'] = Riw_Jabatan_Gaji::with('jabatan')->with('gaji')->where('id_akun', $request->id)->orderBy('id', 'desc')->first();
                            
                        }

                            $data['dahboard_cek_karyawan_kontrak_aktif'] = Karyawan::with([
                                'akun' => function($query){
                                    return $query->with('data_diri')
                                                ->with('data_orang_tua')
                                                ->with('pendidikan_formal')
                                                ->with('pendidikan_non_formal')
                                                ->with('file_pribadi')
                                                ->with([
                                                    'jabatan_gaji' => function($query){
                                                        return $query->with('jabatan');
                                                    }
                                                ])
                                                ->with('kontrak')
                                                ->with('kontrak_semua')
                                                ->with('riw_penempatan_wilayah');
                                }
                            ],
                            )
                            ->where('status_data', 'Aktif')->get();

                            $data['dahboard_jabatan'] = Jabatan::get();
                            $data['dahboard_gaji'] = Gaji::get();

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
                                                ->with('riw_penempatan_wilayah');
                                }
                            ])->whereHas('akun', 
                                                function($query) use ($id_perusahaan_){
                                                    $query->where('id_perusahaan', $id_perusahaan_);  
                                                })->get();
                            return view('admin.tema-satu.home.karyawan.tab-jabatan.menu-jabatan ', $data);
                        }
        }
        
    }

    public function insertJabatanGaji(Request $request)
    {
        //  $this->validate($request, [
        //         'jabatan'          => 'required|string|max:50',
        //         'gaji'          => 'required|string|max:50',

        //     ]
        // );  

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
                    
                        $insertJabatanGaji_jabatan_         = $request->input('jabatan_');
                        $insertJabatanGaji_gaji             = $request->input('gaji_');
                        $insertJabatanGaji_karyawan_        = $request->input('karyawan_');
                        

                        $login_perusahaan_cookie = Jabatan_Gaji::where('id_akun', $insertJabatanGaji_karyawan_)->first();
                            if ($login_perusahaan_cookie){

                                $pindahRiwayatJabatanGaji = new Riw_Jabatan_Gaji();
                                    $pindahRiwayatJabatanGaji->id_akun            = $insertJabatanGaji_karyawan_;
                                    $pindahRiwayatJabatanGaji->id_jabatan         = $insertJabatanGaji_jabatan_;
                                    $pindahRiwayatJabatanGaji->id_gaji            = $insertJabatanGaji_gaji;
                                    $pindahRiwayatJabatanGaji->tanggal_jabatan    = date('Y-m-d');
                                $pindahRiwayatJabatanGaji->save();

                                //     if ($pindahRiwayatJabatanGaji) {

                                        $deleteJabatanGaji = Jabatan_Gaji::where('id_akun', $insertJabatanGaji_karyawan_); 
                                        $deleteJabatanGaji->delete();

                                        if ($deleteJabatanGaji) {
                                            $insertJabatanGaji_Jabatan_Gaji = new Jabatan_Gaji();
                                                $insertJabatanGaji_Jabatan_Gaji->id_akun            = $insertJabatanGaji_karyawan_;
                                                $insertJabatanGaji_Jabatan_Gaji->id_jabatan         = $insertJabatanGaji_jabatan_;
                                                $insertJabatanGaji_Jabatan_Gaji->id_gaji            = $insertJabatanGaji_gaji;
                                                $insertJabatanGaji_Jabatan_Gaji->tanggal_jabatan    = date('Y-m-d');
                                            $insertJabatanGaji_Jabatan_Gaji->save();
                
                                                if ($insertJabatanGaji_Jabatan_Gaji) {
                                                    Session::flash('alert-success-karyawan', 'Berhasil Tambah Master Jabatan.');
                                                    return redirect('dashboard-panel/jabatan-karyawan/master-jabatan');
                                                }
                                        }

                                    // }
                            }else{

                                $pindahRiwayatJabatanGaji = new Riw_Jabatan_Gaji();
                                    $pindahRiwayatJabatanGaji->id_akun            = $insertJabatanGaji_karyawan_;
                                    $pindahRiwayatJabatanGaji->id_jabatan         = $insertJabatanGaji_jabatan_;
                                    $pindahRiwayatJabatanGaji->id_gaji            = $insertJabatanGaji_gaji;
                                    $pindahRiwayatJabatanGaji->tanggal_jabatan    = date('Y-m-d');
                                $pindahRiwayatJabatanGaji->save();

                                $insertJabatanGaji_Jabatan_Gaji = new Jabatan_Gaji();
                                    $insertJabatanGaji_Jabatan_Gaji->id_akun            = $insertJabatanGaji_karyawan_;
                                    $insertJabatanGaji_Jabatan_Gaji->id_jabatan         = $insertJabatanGaji_jabatan_;
                                    $insertJabatanGaji_Jabatan_Gaji->id_gaji            = $insertJabatanGaji_gaji;
                                    $insertJabatanGaji_Jabatan_Gaji->tanggal_jabatan    = date('Y-m-d');
                                $insertJabatanGaji_Jabatan_Gaji->save();
    
                                    if ($insertJabatanGaji_Jabatan_Gaji) {
                                        Session::flash('alert-success-karyawan', 'Berhasil Tambah Master Jabatan.');
                                        return redirect('dashboard-panel/jabatan-karyawan/master-jabatan');
                                    }
                            }

                            
                    }
        }
    }

    public function hapus_jabatan(Request $request)
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
                        $jabatan_id               = Crypt::decrypt($request->input('id'));
                        $jabatan_id_akun               = Crypt::decrypt($request->input('id_akun'));
                        
                        $deleteJabatanGaji = Riw_Jabatan_Gaji::where('id_akun', $jabatan_id_akun)->orderBy('id','desc')->first(); 

                            if(isset($deleteJabatanGaji)){
                                $deleteJabatanGaji = Riw_Jabatan_Gaji::where('id', $deleteJabatanGaji->id); 
                                        $deleteJabatanGaji->delete();

                                $post = Jabatan_Gaji::find($jabatan_id); 
                                $post->delete();
                                Session::flash('alert-success-karyawan', 'Berhasil Delete Jabatan dan Gaji.');
                                return redirect('dashboard-panel/jabatan-karyawan/master-jabatan');
                            }

                        

                        

                    }
        }
    }

    public function hapus_per_jabatan(Request $request)
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
                        $jabatan_id               = Crypt::decrypt($request->input('id'));
                        $jabatan_id_akun               = Crypt::decrypt($request->input('id_akun'));
                        $post = Riw_Jabatan_Gaji::find($jabatan_id); 
                        $post->delete();
                        Session::flash('alert-success-karyawan', 'Berhasil Delete Jabatan dan Gaji.');
                        return redirect("dashboard-panel/jabatan-karyawan/master-jabatan?id=$jabatan_id_akun");
                    }
        }
    }

    
}
