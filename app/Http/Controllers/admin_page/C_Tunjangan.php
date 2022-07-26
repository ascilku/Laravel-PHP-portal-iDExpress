<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\M_Kontrak as Kontrak;
use App\Models\admin\M_Pkwt as Pkwt;
use App\Models\admin\M_Jabatan_Gaji             as Jabatan_Gaji;
use App\Models\admin\M_Karyawan                 as Karyawan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Tunjangan                as Tunjangan;
use App\Models\admin\M_Riw_Tunjangan            as Riw_Tunjangan;
use App\Models\M_Perusahaan                     as Perusahaan;

use Session;
use PDF;
use Crypt;

class C_Tunjangan extends Controller
{
    //
    public function tunjangan(Request $request)
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

                        if (!isset($request->id)) {
                                
                        }else{
                                            
                            
                            
                            $data['tunjangan_lihat'] = Tunjangan::
                                                                    with([
                                                                        'akun' => function($query){
                                                                                    return $query->with('data_diri');
                                                                                }])->where('id_akun', $request->id)->orderBy('id', 'desc')->get();
                                                                                
                                                                                $data['tunjangan_id'] = Tunjangan::where('id_akun', $request->id)->orderBy('id', 'desc')->first();

                            $data['tunjangan_lihat_rwt'] = Riw_Tunjangan::
                                                                    with([
                                                                        'akun' => function($query){
                                                                                    return $query->with('data_diri');
                                                                                }])->where('id_akun', $request->id)->orderBy('id', 'desc')->get();
                                                                                
                                                                                $data['tunjangan_id'] = Riw_Tunjangan::where('id_akun', $request->id)->orderBy('id', 'desc')->first();
                        }

                                                                        
                                                                        

                        # code...
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
                                            ->with('tunjangan')
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
                        
                        return view('admin.tema-satu.home.karyawan.tab-tunjangan.menu-tunjangan' , $data);
                    }
        }
    }

    public function createTunjangan(Request $request)
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
        
                        if (!isset($request->id)) {
                            // Riw_Tunjangan

                            

                            $deleteJabatanGaji = Riw_Tunjangan::where('id_akun', $request->input('id_tunjangan_akun'))->orderBy('id','desc')->first(); 

                            if(isset($deleteJabatanGaji)){
                                
                            
                                $createTunjangan = Riw_Tunjangan::find($deleteJabatanGaji->id);
                                    $createTunjangan->tunj_jabatan          = str_replace(".", "", $request->input('tunj-jabatan'));
                                    $createTunjangan->tunj_kendaraan        = str_replace(".", "", $request->input('tunj-kendaraan'));
                                    $createTunjangan->pendapatan_lain       = str_replace(".", "", $request->input('tunj-lain'));
                                $createTunjangan->save();
                            
                                $createTunjangan = Tunjangan::find($request->input('id_tunjangan'));
                                    $createTunjangan->tunj_jabatan          = str_replace(".", "", $request->input('tunj-jabatan'));
                                    $createTunjangan->tunj_kendaraan        = str_replace(".", "", $request->input('tunj-kendaraan'));
                                    $createTunjangan->pendapatan_lain       = str_replace(".", "", $request->input('tunj-lain'));
                                $createTunjangan->save();

                                    if ($createTunjangan) {
                                        Session::flash('alert-success-karyawan', 'Berhasil Edit Tunjangan.');
                                        return redirect('dashboard-panel/tunjangan');
                                    }
                            }
                        }else{

                            
                            $login_Riw_Tunjangan = Tunjangan::where('id_akun', $request->input('id'))->first();
                            if($login_Riw_Tunjangan){
                                $createRiw_Tunjangan = new Riw_Tunjangan();
                                    $createRiw_Tunjangan->id_akun               = $request->input('id');
                                    $createRiw_Tunjangan->tunj_jabatan          = str_replace(".", "", $request->input('tunj-jabatan'));
                                    $createRiw_Tunjangan->tunj_kendaraan        = str_replace(".", "", $request->input('tunj-kendaraan'));
                                    $createRiw_Tunjangan->pendapatan_lain       = str_replace(".", "", $request->input('tunj-lain'));
                                $createRiw_Tunjangan->save();

                                if ($createRiw_Tunjangan) {
                                    $deleteTunjangan = Tunjangan::where('id_akun', $request->input('id')); 
                                    $deleteTunjangan->delete();

                                    if ($deleteTunjangan) {
                                        $createTunjangan = new Tunjangan();
                                            $createTunjangan->id_akun               = $request->input('id');
                                            $createTunjangan->tunj_jabatan          = str_replace(".", "", $request->input('tunj-jabatan'));
                                            $createTunjangan->tunj_kendaraan        = str_replace(".", "", $request->input('tunj-kendaraan'));
                                            $createTunjangan->pendapatan_lain       = str_replace(".", "", $request->input('tunj-lain'));
                                        $createTunjangan->save();
            
                                            if ($createTunjangan) {
                                                Session::flash('alert-success-karyawan', 'Berhasil Tambah Tunjangan.');
                                                return redirect('dashboard-panel/tunjangan');
                                            }
                                    }
                                }
                            }else{
                                $createRiw_Tunjangan = new Riw_Tunjangan();
                                    $createRiw_Tunjangan->id_akun               = $request->input('id');
                                    $createRiw_Tunjangan->tunj_jabatan          = str_replace(".", "", $request->input('tunj-jabatan'));
                                    $createRiw_Tunjangan->tunj_kendaraan        = str_replace(".", "", $request->input('tunj-kendaraan'));
                                    $createRiw_Tunjangan->pendapatan_lain       = str_replace(".", "", $request->input('tunj-lain'));
                                $createRiw_Tunjangan->save();

                                $createTunjangan = new Tunjangan();
                                    $createTunjangan->id_akun               = $request->input('id');
                                    $createTunjangan->tunj_jabatan          = str_replace(".", "", $request->input('tunj-jabatan'));
                                    $createTunjangan->tunj_kendaraan        = str_replace(".", "", $request->input('tunj-kendaraan'));
                                    $createTunjangan->pendapatan_lain       = str_replace(".", "", $request->input('tunj-lain'));
                                $createTunjangan->save();

                                    if ($createTunjangan) {
                                        Session::flash('alert-success-karyawan', 'Berhasil Tambah Tunjangan.');
                                        return redirect('dashboard-panel/tunjangan');
                                    }
                            }
                            
                            
                        }
                    }
        }      
    }
    
    public function hapusTunjangan(Request $request)
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
                        $course_id = Crypt::decrypt($request->input('id')); 
                        $id_akun = Crypt::decrypt($request->input('id_akun')); 
                        $course_status = Crypt::decrypt($request->input('status')); 

                        $deleteRiw_Tunjangan = Riw_Tunjangan::where('id_akun', $id_akun)->orderBy('id','desc')->first(); 

                        if(isset($deleteRiw_Tunjangan)){


                            $post = Riw_Tunjangan::find($deleteRiw_Tunjangan->id); 
                            $post->delete();

                            $hapusTunjangan = Tunjangan::find($course_id);
                            $hapusTunjangan->delete();
    
                            
    
                            if ($hapusTunjangan) {
                                Session::flash('alert-success-karyawan', 'Berhasil Hapus Tunjangan.');
                                return redirect('dashboard-panel/tunjangan');
                            }
                        }else{

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
                        $post = Riw_Tunjangan::find($jabatan_id); 
                        $post->delete();
                        Session::flash('alert-success-karyawan', 'Berhasil Delete Tunjangan.');
                        return redirect("dashboard-panel/tunjangan?id=$jabatan_id_akun");
                    }
        }
    }

}
