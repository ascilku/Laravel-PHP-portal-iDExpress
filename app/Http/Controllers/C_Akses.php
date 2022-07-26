<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;

use App\Models\M_Perusahaan         as Perusahaan;
use App\Models\M_Akun               as Akun;
use App\Models\M_Akses              as Akses;

use Illuminate\Support\Facades\Storage;
use Cookie;
class C_Akses extends Controller
{

//======================================================================
//======================== login query account =========================
//======================================================================

    public function loginQuery(Request $request)
    {

        $this->validate($request, [
                // 'email'     => 'required|email|max:35',
                'nik'       => 'required|max:17',
                'password'  => 'required|max:20'
            ]
        );


        $credentials = $request->only([
                                        'nik', 
                                        'password',
                                        'setuju'
                                    ]);
            
            if(isset($credentials['setuju']) == 'yes' ){
                $login_nik = $credentials['nik'];
               
                //======================================================================
                //====================== query perusahaan account ======================
                //======================================================================

                $login_perusahaan = Perusahaan::where('nik', $login_nik)->first();
                if($login_perusahaan){
                    $login_status = $login_perusahaan->status;
                    if($login_status == 'aktif'){
                        if(Hash::check($credentials['password'], $login_perusahaan->password)){
                            $login_id = $login_perusahaan->id;
                            $login_token = $login_perusahaan->token;
                            $login_nama = $login_perusahaan->nama;
                            if ($login_token) {
                                if(isset($_COOKIE['cookie-storage'])){
                                    if($login_token == $_COOKIE['cookie-storage']){
                                        return redirect('dashboard-panel');
                                    }   
                                }else{
                                    Session::flash('alert-login', 'you have entered in another driver.!! Please log out first.');
                                    return redirect('/login-dashboard');
                                }
                            }else{
                                $login_randomToken='';
                                $login_id_token = Hash::make($login_nik);
                                $login_randomToken = $login_nama."_".$login_id_token;

                                    if($login_randomToken == ''){
                                        Session::flash('alert-login', 'No Reload Script.');
                                        return redirect('/login-dashboard');
                                    }else{
                                        $login_perusahaan_update_token = Perusahaan::where('id',$login_id)
                                                                        ->update([
                                                                        'token'   => $login_randomToken
                                                                        ]);
                                            if($login_perusahaan_update_token){
                                                Session::flash('alert-token', $login_randomToken); 
                                                $request->session()->flash('alert-login-berhasil', 'Login Success Akun.');
                                                return redirect('/login-dashboard');
                                            }else{     
                                                unset($_COOKIE['cookie-storage']);    
                                                $logout_unset_cookie = setcookie('cookie-storage', null, -1, '/'); 
                                                    if($logout_unset_cookie){
                                                        $request->session()->flash('alert-login-berhasil-user', 'Missing Or Cookie.');
                                                        return redirect('/login-dashboard');
                                                    }
                                            }                       
                                    }
                            }
                        }else{
                            Session::flash('alert-login', 'Your Password Is Wrong.');
                            return redirect('/login-dashboard');
                        }
                    }else{
                        Session::flash('alert-login', 'This Company Account Is Not Active.');
                        return redirect('/login-dashboard');
                    }
                }else{
                    // $login_status = $login_perusahaan->status;
                    // if($login_status == 'aktif'){
                       
                    // }else{
                    //     // Session::flash('alert-login', 'Akun Anda Tidak Bisa Login Karna Akun Perusahaan di Non Aktifkan.!! Silahkan Hubungi Pihak Kami.');
                    //     // return redirect('/login-dashboard');
                    //     echo "tidak aktif";
                    // }
                    
            //======================================================================
            //====================== query Akun account ============================
            //======================================================================

                    $login_karyawan = Akun::where('nik', $login_nik)->first();
                        if($login_karyawan){

                            $login_id_akses = $login_karyawan->id_akses;
                            $login_status_karyawan = $login_karyawan->status;
                            $login_status_id_perusahaan = $login_karyawan->id_perusahaan;

                            

                                $login_akses = Akses::find($login_id_akses);
                                    if ($login_akses->akses == 'User') {
                                        Session::flash('alert-login', 'Akun Anda Tidak Terdaftar Sebagai Karyawan.!!');
                                        return redirect('/login-dashboard');
                                    }else{
                                        if ($login_status_karyawan == 'aktif') {
                                            if(Hash::check($credentials['password'], $login_karyawan->password)){
                                                $login_id_akun = $login_karyawan->id;
                                                $login_token = $login_karyawan->token;

                                                if ($login_token) {
                                                    if(isset($_COOKIE['cookie-storage'])){
                                                        if($login_token == $_COOKIE['cookie-storage']){
                                                            return redirect('dashboard-panel');
                                                        }   
                                                    }else{
                                                        Session::flash('alert-login', 'Anda Sudah Login di Driver Lain.!! Silahkan Lakukan Reset Login.');
                                                        return redirect('/login-dashboard');
                                                    }
                                                    
                                                }else{
                                                    $login_randomToken='';
                                                    $login_id_token = Hash::make($login_nik);
                                                    $login_randomToken = $login_akses->akses."_".$login_id_token;
                    
                                                        if($login_randomToken == ''){
                                                            Session::flash('alert-login', 'No Reload Script.');
                                                            return redirect('/login-dashboard');
                                                        }else{
                                                            $login_perusahaan_update_token = Akun::where('id',$login_id_akun)
                                                                                            ->update([
                                                                                            'token'   => $login_randomToken
                                                                                            ]);
                                                                if($login_perusahaan_update_token){
                                                                    Session::flash('alert-token', $login_randomToken); 
                                                                    $request->session()->flash('alert-login-berhasil', 'Login Success Akun.');
                                                                    return redirect('/login-dashboard');
                                                                    
                                                                }else{     
                                                                    unset($_COOKIE['cookie-storage']);    
                                                                    $logout_unset_cookie = setcookie('cookie-storage', null, -1, '/'); 
                                                                        if($logout_unset_cookie){
                                                                            $request->session()->flash('alert-login-berhasil-user', 'Missing Or Cookie.');
                                                                            return redirect('/login-dashboard');
                                                                        }
                                                                }                       
                                                        }
                                                }
                                            }else{
                                                Session::flash('alert-login', 'Your Password Is Wrong.');
                                                return redirect('/login-dashboard');
                                            } 
                                        }else{
                                            Session::flash('alert-login', 'Akun Anda Sudah di Non Aktifkan.!!');
                                            return redirect('/login-dashboard');
                                        }
                                    }
                        }else{
                            Session::flash('alert-login', 'You Dont Have Access ID Nik.');
                            return redirect('/login-dashboard');
                        }
                    
                    
                }
            }else{
                Session::flash('alert-login', 'ceklist yes thats me on this device.');
                return redirect('/login-dashboard');
            }

        

    }

//======================================================================
//============================ view regist =============================
//======================================================================


public function regist_perusahaan()
{    
    return view('admin.tema-satu.login.regist');
}

public function registPerusahaanCreate(Request $request)
{    
    $this->validate($request, [
        'nik'           => 'required|string|max:30',
        'nama'           => 'required|string|max:100',
        'email'         => 'required|string|email|max:50',
        'nomor'         => 'required|string|max:15',
    ]);

    $regist_rekrutmen_setuju    = $request->input('setuju');
    $regist_rekrutmen_nik       = $request->input('nik');
    $regist_rekrutmen_nama      = $request->input('nama');
    $regist_rekrutmen_email     = $request->input('email');
    $nomor_                     = $request->input('nomor');
    
    $regist_rekrutmen_nomor = ltrim($nomor_, '0');
    
    if ($regist_rekrutmen_setuju == 'yes') {
        $regist_nik = Perusahaan::where('nik', $regist_rekrutmen_nik)->first();

            if ($regist_nik) {
                Session::flash('alert-peringatan', 'Nik Sudah Tedaftar di Tabel Perusahaan.!! Silahkan Login.');
                return redirect('/regist-perusahaan');
            }else{
                $regist_email = Perusahaan::where('email', $regist_rekrutmen_email)->orwhere('no_hp', $regist_rekrutmen_nomor)->first();
                    if ($regist_email) {
                        Session::flash('alert-peringatan', 'Email Atau Nomor Sudah Tedaftar  di Tabel Perusahaan.!! Silahkan Login.');
                        return redirect('/login-dashboard');
                    }else{

                        $akun_ = Akun::where('nik', $regist_rekrutmen_nik)->first();

                            if ($akun_) {
                                Session::flash('alert-peringatan', 'Nik Sudah Tedaftar di Tabel Akun.!! Silahkan Login.');
                                return redirect('/regist-perusahaan');
                            }else{
                                $regist_email = Akun::where('email', $regist_rekrutmen_email)->orwhere('no_hp', $regist_rekrutmen_nomor)->first();
                                if ($regist_email) {
                                    Session::flash('alert-peringatan', 'Email Atau Nomor Sudah Tedaftar  di Tabel Akun.!! Silahkan Login.');
                                    return redirect('/login-dashboard');
                                }else{
                                    $verifikasiEmail_randomPassword = "Perusahaan"."_".rand(1000,99999);

                                    $data = array(
                                        'nik'               => $regist_rekrutmen_nik,
                                        'password'          => $verifikasiEmail_randomPassword
                                    );

                                    Mail::send('pesan-email-perusahaan', $data, function($message) use ($regist_rekrutmen_email){
                                        $message->to($regist_rekrutmen_email, 'Pesan Akun')->subject('Pesan Verifikasi Akun');
                                        $message->from('itpthitcelebes24@gmail.com', 'Staff IT PT Heroisme Indokaisa Triasa (HIT) Group');
                                        });

                                    if(Mail::failures()){
                                        Session::flash('alert-peringatan', 'Tidak Berhasil di Upload.!! Coba Daftar Ulang.');
                                        return redirect('/regist-user');
                                    }else{
                                        $akes = "Admin Super";
                                        $regist_Akses_ = Akses::where('akses', $akes)->first();
                                        if (!isset($regist_Akses_)) {
                                                $regist_Akses = new Akses();
                                                    $regist_Akses->akses                = $akes;
                                                $regist_Akses->save();

                                                    if ($regist_Akses) {

                                                        $regist_Akun = new Perusahaan();
                                                            $regist_Akun->id_akses              = $regist_Akses->id;
                                                            $regist_Akun->nama                  = $regist_rekrutmen_nama;
                                                            $regist_Akun->nik                   = $regist_rekrutmen_nik;
                                                            $regist_Akun->password              = Hash::make($verifikasiEmail_randomPassword);
                                                            $regist_Akun->show_pass             = $verifikasiEmail_randomPassword;
                                                            $regist_Akun->email                 = $regist_rekrutmen_email;
                                                            $regist_Akun->no_hp                 = $regist_rekrutmen_nomor;
                                                            $regist_Akun->status                = 'tidak';
                                                        $regist_Akun->save();

                                                            if ($regist_Akun) {
                                                                $request->session()->flash('alert-regist-berhasil-perusahaan', 'Regist Data Akun.!! Silahkan Cek Email Anda Untuk Lihat Password');
                                                                return redirect('/regist-perusahaan');
                                                            }
                                                    }else{
                                                        Session::flash('alert-peringatan', 'Akses Tidak di Muat.!! Coba Daftar Ulang.');
                                                        return redirect('/regist-perusahaan');
                                                    }
                                        }else{
                                            
                                            $regist_Akun = new Perusahaan();
                                                            $regist_Akun->id_akses              = $regist_Akses_->id;
                                                            $regist_Akun->nama                  = $regist_rekrutmen_nama;
                                                            $regist_Akun->nik                   = $regist_rekrutmen_nik;
                                                            $regist_Akun->password              = Hash::make($verifikasiEmail_randomPassword);
                                                            $regist_Akun->show_pass             = $verifikasiEmail_randomPassword;
                                                            $regist_Akun->email                 = $regist_rekrutmen_email;
                                                            $regist_Akun->no_hp                 = $regist_rekrutmen_nomor;
                                                            $regist_Akun->status                = 'tidak';
                                                        $regist_Akun->save();

                                                            if ($regist_Akun) {
                                                                $request->session()->flash('alert-regist-berhasil-perusahaan', 'Regist Data Akun.!! Silahkan Cek Email Anda Untuk Lihat Password');
                                                                return redirect('/regist-perusahaan');
                                                            }
                                        }
                                    }
                                }
                            }

                        
                    }
            }                          
    }else{
        Session::flash('alert-login', 'ceklist yes thats me on this device.');
        return redirect('/regist-perusahaan');
    }

    
}

//======================================================================
//======================== view login ==================================
//======================================================================

public function login()
{
    // if(!isset($_COOKIE['cookie-storage'])){
    //     return view('admin.tema-satu.login.login');
    // }else{

    if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
        return view('admin.tema-satu.login.login');
    }else{    
        $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage'])); 
        $date_now = date('d-m-Y');

        $today_time = strtotime($date_now);
        $expire_time = strtotime($expired);

        if ($today_time >= $expire_time) {

            // echo "expired jalan";

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
            $login_perusahaan_cookie = Perusahaan::where('token', $_COOKIE['cookie-storage'])->first();
                if ($login_perusahaan_cookie) {
                    return redirect('dashboard-panel');
                }else{ 
                    $login_akun_cookie = Akun::where('token', $_COOKIE['cookie-storage'])->first();
                            if (isset($login_akun_cookie)) {
                                // return view('admin.tema-satu.dashboard');
                                return redirect('dashboard-panel');
                                // dd(session()->get('alert-login-berhasil'));
                            
                            }else{
                                unset($_COOKIE['date-cookie-storage']);    
                                $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/');

                                unset($_COOKIE['cookie-storage']);    
                                $logout_unset_cookie = setcookie('cookie-storage', null, -1, '/');

                                    if($logout_unset_cookie){
                                        Session::flash('alert-login-berhasil-user', 'Missing Or Cookie.');
                                        return redirect('/login-dashboard');
                                    }
                            }
                }

        }

    }
    
}

public function resetLogin(Request $request)
{
    $email_reset    = $request->input('email_reset');

    $login_perusahaan = Perusahaan::where('email', $email_reset)->first();
        if($login_perusahaan){
            Perusahaan::where('email', $email_reset)
                                ->update([
                                    'token'           => null
                                ]);
            Session::flash('alert-login-reset', 'Berhasil reset login.!');
            return redirect('/login-dashboard');

        }else{
            $login_karyawan = Akun::where('email', $email_reset)->first();

            if($login_karyawan){
                Akun::where('email', $email_reset)
                                ->update([
                                    'token'           => null
                                ]);
                Session::flash('alert-login-reset', 'Berhasil reset login.!');
                return redirect('/login-dashboard');
            }else{
                Session::flash('alert-peringatan', 'Nik Tidak Ada.');
                return redirect('/login-dashboard');
            }
        }

    
}

public function logout()
{
    if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
        return redirect('login-dashboard');
    }else{
        $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage']));
        $date_now = date('d-m-Y');
            if ($date_now >= $expired) {

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
                                }
                    }
            }else{
                $logout_unset_perusahaan = Perusahaan::where('token', $_COOKIE['cookie-storage'])
                                                    ->update([
                                                                'token'   => null
                                                            ]);
                
                if($logout_unset_perusahaan){
                    unset($_COOKIE['cookie-storage']);    
                    $logout_unset_cookie = setcookie('cookie-storage', null, -1, '/'); 

                    unset($_COOKIE['date-cookie-storage']);    
                    $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 

                        if($logout_unset_cookie){
                            return redirect('login-dashboard');
                        }
                        
                }else {
                    $logout_unset_akun = Akun::where('token', $_COOKIE['cookie-storage'])
                                                    ->update([
                                                                'token'   => null
                                                            ]);

                        if($logout_unset_akun){
                            unset($_COOKIE['cookie-storage']);    
                            $logout_unset_cookie = setcookie('cookie-storage', null, -1, '/'); 

                            unset($_COOKIE['date-cookie-storage']);    
                            $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 

                                if($logout_unset_cookie){
                                    return redirect('login-dashboard');
                                }
                                
                        }else{
                            return redirect('dashboard-panel');
                        }
                
                }
            }
    }
}

public function ubahPassword(Request $request)
{
    $id_akun    = $request->input('id_akun');
    $nik_pegawai    = $request->input('nik_pegawai');
    $password    = $request->input('password');
    $confirm_password    = $request->input('confirm_password');

            $login_karyawan = Akun::where('nik', $nik_pegawai)->first();

            if($login_karyawan){
                if($password == $confirm_password){
                    Akun::where('id', $id_akun)
                                ->update([
                                    'password'           => Hash::make($password),
                                    'show_pass'           => $password,
                                ]);

                    Session::flash('alert-success', 'Berhasil Ubah Password.!');
                    return redirect('/dashboard-panel/?halaman=reset-password');
                }else{
                    Session::flash('alert-peringatan', 'Password Tidak Sesuai Sama Confirm Password.');
                    return redirect('/dashboard-panel/?halaman=reset-password');
                }
                
                
            }else{
                Session::flash('alert-peringatan', 'Nik Tidak Terdaftar.');
                return redirect('/dashboard-panel/?halaman=reset-password');
            }
}
    
}
     