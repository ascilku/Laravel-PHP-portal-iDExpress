<?php

namespace App\Http\Controllers\it_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Akses;
use App\Models\M_Akun                           as Akun;
use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\admin\M_Data_Karyawan            as Data_Karyawan;
use App\Models\admin\M_Karyawan                 as Karyawan;

use Hash;
use Session;
use Illuminate\Support\Facades\Mail;

class C_Akses_ItAdmin extends Controller
{
    //
    public function aksesITAdmin()
    {
        return view('admin.tema-satu.home.it-admin.makassar-papua');
        // , $data
    }
    
    public function createAkunAkses(Request $request)
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
                        $createAkunAkses_Akun_                     = Akun::where('nik', $request->input('nik'))->orWhere('email', $request->input('email'))->first();
                            if ($createAkunAkses_Akun_) {
                                Session::flash('alert-peringatan', '.!!  Nik dan Email Sudah Ada');
                                return redirect('dashboard-panel');
                            }else{
                                $verifikasiEmail_randomPassword = "ITSupport".$request->input('mitra')."_".rand(1000,99999);
                                $email = $request->input('email');

                                    $data = array(
                                        'nik'               => $request->input('nik'),
                                        'password'          => $verifikasiEmail_randomPassword
                                    );
                                    
                                    Mail::send('pesan-email-rekrutmen', $data, function($message) use ($email){
                                    $message->to($email, 'Pesan Akun')->subject('Pesan Verifikasi Akun');
                                    $message->from('itpthitcelebes24@gmail.com', 'Staff IT PT Heroisme Indokaisa Triasa (HIT) Group');
                                    });

                                    if(Mail::failures()){
                                        Session::flash('alert-peringatan', 'Tidak Berhasil di Upload.!! Coba Daftar Ulang.');
                                        return redirect('/regist-user');
                                    }else{

                                        $createAkunAksesAkses_ = M_Akses::where('akses', $request->input('akses'))->first();
                                        if (!isset($createAkunAksesAkses_)) {
                                                $createAkunAkses_Akses                = new M_Akses();
                                                    $createAkunAkses_Akses->akses     = $request->input('akses');;
                                                $createAkunAkses_Akses->save();

                                                    if ($createAkunAkses_Akses) {
                                                        $createAkunAkses_Akun                     = new Akun();
                                                            $createAkunAkses_Akun->id_akses       = $createAkunAkses_Akses->id;
                                                            $createAkunAkses_Akun->id_perusahaan  = $request->input('mitra');
                                                            $createAkunAkses_Akun->nik            = $request->input('nik');
                                                            $createAkunAkses_Akun->password       = Hash::make($verifikasiEmail_randomPassword);
                                                            $createAkunAkses_Akun->show_pass      = $verifikasiEmail_randomPassword;
                                                            $createAkunAkses_Akun->email          = $request->input('email');
                                                            $createAkunAkses_Akun->no_hp          = $request->input('no_hp');
                                                            $createAkunAkses_Akun->status         = 'aktif';
                                                        $createAkunAkses_Akun->save();

                                                        if ($createAkunAkses_Akun) {
                                                            Session::flash('alert-success-karyawan', '.!!  Berhasil Buat Akun Akses '.$createAkunAkses_Akses->akses.'.!! Silahkan cek email yang didaftar selama 24 jam untuk melihat nik dan password untuk bisa login');
                                                            return redirect('dashboard-panel');
                                                        }
                                                    }
                                        }else{
                                            $createAkunAkses_Akun                     = new Akun();
                                                $createAkunAkses_Akun->id_akses       = $createAkunAksesAkses_->id;
                                                $createAkunAkses_Akun->id_perusahaan  = $request->input('mitra');
                                                $createAkunAkses_Akun->nik            = $request->input('nik');
                                                $createAkunAkses_Akun->password       = Hash::make($verifikasiEmail_randomPassword);
                                                $createAkunAkses_Akun->show_pass      = $verifikasiEmail_randomPassword;
                                                $createAkunAkses_Akun->email          = $request->input('email');
                                                $createAkunAkses_Akun->no_hp          = $request->input('no_hp');
                                                $createAkunAkses_Akun->status         = 'aktif';
                                            $createAkunAkses_Akun->save();

                                            if ($createAkunAkses_Akun) {
                                                Session::flash('alert-success-karyawan', '.!!  Berhasil Buat Akun Akses '.$createAkunAksesAkses_->akses.'.!! Silahkan cek email yang didaftar selama 24 jam untuk melihat nik dan password untuk bisa login');
                                                return redirect('dashboard-panel');
                                            }
                                        }
                                    }
                            }
                    }
        }

        
    }

    public function createAkunAksesAkun(Request $request)
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
                        $createAkunAksesAkun_ = Perusahaan::where('email', $request->input('email'))->first();
                            if ($createAkunAksesAkun_) {
                                Session::flash('alert-peringatan', '.!!  Email Ini Sudah Terdaftar Sebagai Email Perusahaan.');
                                return redirect('dashboard-panel');
                            }else{
                                $createAkunAksesAkun_nik = Perusahaan::where('nik', $request->input('nik'))->first();

                                if ($createAkunAksesAkun_nik) {
                                    Session::flash('alert-peringatan', '.!!  Nik Ini Sudah Terdaftar Sebagai Nik Perusahaan.');
                                    return redirect('dashboard-panel');
                                }else{
                                        $createAkunAksesAkun_ = Akun::where('email', $request->input('email'))->first();
                                            if ($createAkunAksesAkun_) {
                                                Session::flash('alert-peringatan', '.!!  Email Sudah Ada.');
                                                return redirect('dashboard-panel');
                                            }else{
                                                $createAkunAksesAkun_nik = Akun::where('nik', $request->input('nik'))->first();

                                                if ($createAkunAksesAkun_nik) {
                                                    Session::flash('alert-peringatan', '.!!  Nik Sudah Ada.');
                                                    return redirect('dashboard-panel');
                                                }else{

                                                    $createAkunAksesAkun = Akun::where('token', $_COOKIE['cookie-storage'])->first();
                                                    
                                                        if (isset($createAkunAksesAkun)) {
                                                            
                                                            $verifikasiEmail_randomPassword = $request->input('akses').'24'."_".rand(1000,99999);
                                                            $email = $request->input('email');

                                                                $data = array(
                                                                    'nik'               => $request->input('nik'),
                                                                    'password'          => $verifikasiEmail_randomPassword
                                                                );
                                                                
                                                                Mail::send('pesan-email-rekrutmen', $data, function($message) use ($email){
                                                                $message->to($email, 'Pesan Akun')->subject('Pesan Verifikasi Akun');
                                                                $message->from('itpthitcelebes24@gmail.com', 'Staff IT PT Heroisme Indokaisa Triasa (HIT) Group');
                                                                });

                                                                
                                                                    $createAkunAksesAkses_ = M_Akses::where('akses', $request->input('akses'))->first();
                                                                        if (!isset($createAkunAksesAkses_)) {

                                                                            $createAkunAkses_Akses                = new M_Akses();
                                                                                $createAkunAkses_Akses->akses     = $request->input('akses');
                                                                            $createAkunAkses_Akses->save();
                                                                    
                                                                                if ($createAkunAkses_Akses) {
                                                                                    $createAkunAkses_Akun                     = new Akun();
                                                                                        $createAkunAkses_Akun->id_akses       = $createAkunAkses_Akses->id;
                                                                                        $createAkunAkses_Akun->id_perusahaan  = $createAkunAksesAkun->id_perusahaan;
                                                                                        $createAkunAkses_Akun->nik            = $request->input('nik');
                                                                                        $createAkunAkses_Akun->password       = Hash::make($verifikasiEmail_randomPassword);
                                                                                        $createAkunAkses_Akun->show_pass      = $verifikasiEmail_randomPassword;
                                                                                        $createAkunAkses_Akun->email          = $request->input('email');
                                                                                        $createAkunAkses_Akun->no_hp          = ltrim($request->input('no_hp'), '0');
                                                                                        $createAkunAkses_Akun->status         = 'aktif';
                                                                                    $createAkunAkses_Akun->save();

                                                                                    $createKaryawanAktif_karyawan = new Karyawan();
                                                                                                            $createKaryawanAktif_karyawan->id_akun   = $createAkunAkses_Akun->id;
                                                                                                            $createKaryawanAktif_karyawan->status_data   = $request->input('status_resign');
                                                                                                            $createKaryawanAktif_karyawan->tanggal_join   = $request->input('tanggal_join');
                                                                                    $createKaryawanAktif_karyawan->save();

                                                                                    $create_data_karyawan                               = new Data_Karyawan();
                                                                                        $create_data_karyawan->id_akun                  = $createAkunAkses_Akun->id;
                                                                                        $create_data_karyawan->dingtalk                 = $request->input('dingtalk');
                                                                                        $create_data_karyawan->norek                    = $request->input('norek');
                                                                                        $create_data_karyawan->bank                     = strtoupper($request->input('bank'));
                                                                                        $create_data_karyawan->kode_bank                = $request->input('kode_bank');
                                                                                    $create_data_karyawan->save();
                                                                    
                                                                                    
                                                                                    if ($createAkunAkses_Akun) {
                                                                                        Session::flash('alert-success-karyawan_', '.!!  Berhasil Buat Akun Akses '.$createAkunAkses_Akses->akses);
                                                                                        return redirect('dashboard-panel');
                                                                                    }
                                                                                }
                                                                        }else{
                                                                                $createAkunAkses_Akun                     = new Akun();
                                                                                    $createAkunAkses_Akun->id_akses       = $createAkunAksesAkses_->id;
                                                                                    $createAkunAkses_Akun->id_perusahaan  = $createAkunAksesAkun->id_perusahaan;
                                                                                    $createAkunAkses_Akun->nik            = $request->input('nik');
                                                                                    $createAkunAkses_Akun->password       = Hash::make($verifikasiEmail_randomPassword);
                                                                                    $createAkunAkses_Akun->show_pass      = $verifikasiEmail_randomPassword;
                                                                                    $createAkunAkses_Akun->email          = $request->input('email');
                                                                                    $createAkunAkses_Akun->no_hp          = ltrim($request->input('no_hp'), '0');
                                                                                    $createAkunAkses_Akun->status         = 'aktif';
                                                                                $createAkunAkses_Akun->save();

                                                                                $createKaryawanAktif_karyawan = new Karyawan();
                                                                                                        $createKaryawanAktif_karyawan->id_akun   = $createAkunAkses_Akun->id;
                                                                                                        $createKaryawanAktif_karyawan->status_data   = $request->input('status_resign');
                                                                                                        $createKaryawanAktif_karyawan->tanggal_join   = $request->input('tanggal_join');
                                                                                $createKaryawanAktif_karyawan->save();

                                                                                $create_data_karyawan                               = new Data_Karyawan();
                                                                                    $create_data_karyawan->id_akun                  = $createAkunAkses_Akun->id;
                                                                                    $create_data_karyawan->dingtalk                 = $request->input('dingtalk');
                                                                                    $create_data_karyawan->norek                    = $request->input('norek');
                                                                                    $create_data_karyawan->bank                     = strtoupper($request->input('bank'));
                                                                                    $create_data_karyawan->kode_bank                = $request->input('kode_bank');
                                                                                $create_data_karyawan->save();
                                                                
                                                                                if ($createAkunAkses_Akun) {
                                                                                    Session::flash('alert-success-karyawan_', '.!!  Berhasil Buat Akun Akses '.$createAkunAksesAkses_->akses);
                                                                                    return redirect('dashboard-panel');
                                                                                }
                                                                        }
                                                                
                                                        }else{
                                                            $createAkunAksesPerusahaan = Perusahaan::where('token', $_COOKIE['cookie-storage'])->first();
                                                                if ($createAkunAksesPerusahaan) {
                                                                    
                                                                    // $createAkunAksesAkun_p = Akun::where('nik', $request->input('nik'))->first();
                                                                    
                                                                        $verifikasiEmail_randomPassword = "ITSupport".$request->input('mitra')."_".rand(1000,99999);
                                                                        $email = $request->input('email');

                                                                            $data = array(
                                                                                'nik'               => $request->input('nik'),
                                                                                'password'          => $verifikasiEmail_randomPassword
                                                                            );
                                                                            
                                                                            Mail::send('pesan-email-rekrutmen', $data, function($message) use ($email){
                                                                            $message->to($email, 'Pesan Akun')->subject('Pesan Verifikasi Akun');
                                                                            $message->from('itpthitcelebes24@gmail.com', 'Staff IT PT Heroisme Indokaisa Triasa (HIT) Group');
                                                                            });

                                                                            if(Mail::failures()){
                                                                                Session::flash('alert-peringatan', 'Tidak Berhasil di Upload.!! Coba Daftar Ulang.');
                                                                                return redirect('/regist-user');
                                                                            }else{
                                                                                    $createAkunAksesAkses_ = M_Akses::where('akses', $request->input('akses'))->first();
                                                                                    if (!isset($createAkunAksesAkses_)) {
                                                                                        $createAkunAkses_Akses                = new M_Akses();
                                                                                            $createAkunAkses_Akses->akses     = $request->input('akses');
                                                                                        $createAkunAkses_Akses->save();
                                                                                
                                                                                            if ($createAkunAkses_Akses) {
                                                                                                $createAkunAkses_Akun                     = new Akun();
                                                                                                    $createAkunAkses_Akun->id_akses       = $createAkunAkses_Akses->id;
                                                                                                    $createAkunAkses_Akun->id_perusahaan  = $createAkunAksesPerusahaan->id;
                                                                                                    $createAkunAkses_Akun->nik            = $request->input('nik');
                                                                                                    $createAkunAkses_Akun->password       = Hash::make($verifikasiEmail_randomPassword);
                                                                                                    $createAkunAkses_Akun->show_pass      = $verifikasiEmail_randomPassword;
                                                                                                    $createAkunAkses_Akun->email          = $request->input('email');
                                                                                                    $createAkunAkses_Akun->no_hp          = ltrim($request->input('no_hp'), '0');
                                                                                                    $createAkunAkses_Akun->status         = 'aktif';
                                                                                                $createAkunAkses_Akun->save();

                                                                                                $createKaryawanAktif_karyawan = new Karyawan();
                                                                                                                        $createKaryawanAktif_karyawan->id_akun   = $createAkunAkses_Akun->id;
                                                                                                                        $createKaryawanAktif_karyawan->status_data   = $request->input('status_resign');
                                                                                                                        $createKaryawanAktif_karyawan->tanggal_join   = $request->input('tanggal_join');
                                                                                                $createKaryawanAktif_karyawan->save();

                                                                                                $create_data_karyawan                               = new Data_Karyawan();
                                                                                                    $create_data_karyawan->id_akun                  = $createAkunAkses_Akun->id;
                                                                                                    $create_data_karyawan->dingtalk                 = $request->input('dingtalk');
                                                                                                    $create_data_karyawan->norek                    = $request->input('norek');
                                                                                                    $create_data_karyawan->bank                     = strtoupper($request->input('bank'));
                                                                                                    $create_data_karyawan->kode_bank                = $request->input('kode_bank');
                                                                                                $create_data_karyawan->save();
                                                                                
                                                                                                if ($createAkunAkses_Akun) {
                                                                                                    Session::flash('alert-success-karyawan_', '.!!  Berhasil Buat Akun Akses '.$createAkunAkses_Akses->akses.'.!! Silahkan cek email yang didaftar selama 24 jam untuk melihat nik dan password untuk bisa login');
                                                                                                    return redirect('dashboard-panel');
                                                                                                }
                                                                                            }
                                                                                    }else{
                                                                                            $createAkunAkses_Akun                     = new Akun();
                                                                                                $createAkunAkses_Akun->id_akses       = $createAkunAksesAkses_->id;
                                                                                                $createAkunAkses_Akun->id_perusahaan  = $createAkunAksesPerusahaan->id;
                                                                                                $createAkunAkses_Akun->nik            = $request->input('nik');
                                                                                                $createAkunAkses_Akun->password       = Hash::make($verifikasiEmail_randomPassword);
                                                                                                $createAkunAkses_Akun->show_pass      = $verifikasiEmail_randomPassword;
                                                                                                $createAkunAkses_Akun->email          = $request->input('email');
                                                                                                $createAkunAkses_Akun->no_hp          = ltrim($request->input('no_hp'), '0');
                                                                                                $createAkunAkses_Akun->status         = 'aktif';
                                                                                            $createAkunAkses_Akun->save();

                                                                                            $createKaryawanAktif_karyawan = new Karyawan();
                                                                                                                    $createKaryawanAktif_karyawan->id_akun   = $createAkunAkses_Akun->id;
                                                                                                                    $createKaryawanAktif_karyawan->status_data   = $request->input('status_resign');
                                                                                                                    $createKaryawanAktif_karyawan->tanggal_join   = $request->input('tanggal_join');
                                                                                            $createKaryawanAktif_karyawan->save();

                                                                                            $create_data_karyawan                               = new Data_Karyawan();
                                                                                                $create_data_karyawan->id_akun                  = $createAkunAkses_Akun->id;
                                                                                                $create_data_karyawan->dingtalk                 = $request->input('dingtalk');
                                                                                                $create_data_karyawan->norek                    = $request->input('norek');
                                                                                                $create_data_karyawan->bank                     = strtoupper($request->input('bank'));
                                                                                                $create_data_karyawan->kode_bank                = $request->input('kode_bank');
                                                                                            $create_data_karyawan->save();
                                                                            
                                                                                            if ($createAkunAkses_Akun) {
                                                                                                Session::flash('alert-success-karyawan_', '.!!  Berhasil Buat Akun Akses '.$createAkunAksesAkses_->akses.'.!! Silahkan cek email yang didaftar selama 24 jam untuk melihat nik dan password untuk bisa login');
                                                                                                return redirect('dashboard-panel');
                                                                                            }
                                                                                    }
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

                                                        
                                                }
                                            } 
                                }
                            }
                    }
        }
    }
}
