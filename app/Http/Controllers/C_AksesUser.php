<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;


use App\Models\M_Perusahaan as Perusahaan;
use App\Models\M_Akses      as Akses;
use App\Models\M_Akun       as Akun;

use Illuminate\Support\Facades\Storage;
use Cookie;
class C_AksesUser extends Controller
{

//======================================================================
//======================== view login ==================================
//======================================================================

    public function login_user()
    {
        if(!isset($_COOKIE['date-cookie-storage-user']) && !isset($_COOKIE['cookie-storage-user'])){
            return view('user.rekrutmen.login.login');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage-user']));
            $date_now = date('d-m-Y');
            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);

                if ($today_time >= $expire_time) {
                    $akun  = Akun::where('token', $_COOKIE['cookie-storage-user'])
                                    ->update([
                                        'token'           => null
                                    ]);
                        if ($akun) {
                            unset($_COOKIE['cookie-storage-user']);    
                            setcookie('cookie-storage-user', null, -1, '/'); 
                            
                            unset($_COOKIE['date-cookie-storage-user']);    
                            $logout_unset_cookie = setcookie('date-cookie-storage-user', null, -1, '/'); 

                            if($logout_unset_cookie){
                                
                                return redirect('login-user');
                            } 
                        }else{
                            unset($_COOKIE['cookie-storage-user']);    
                            setcookie('cookie-storage-user', null, -1, '/'); 
                            
                            unset($_COOKIE['date-cookie-storage-user']);    
                            $logout_unset_cookie = setcookie('date-cookie-storage-user', null, -1, '/'); 

                            if($logout_unset_cookie){
                                
                                return redirect('login-user');
                            } 
                        }
                }else{
                    $login_akun_cookie = Akun::where('token', $_COOKIE['cookie-storage-user'])->first();
                        if ($login_akun_cookie) {
                            return redirect('rekrutmen');
                        }else{     

                            unset($_COOKIE['date-cookie-storage-user']);    
                            setcookie('date-cookie-storage-user', null, -1, '/'); 


                            unset($_COOKIE['cookie-storage-user']);    
                            $logout_unset_cookie = setcookie('cookie-storage-user', null, -1, '/'); 

                                if($logout_unset_cookie){
                                    Session::flash('alert-login-berhasil-user', 'Missing Or Cookie.');
                                    return redirect('/login-user');
                                }
                        } 
                }
                
        }
        
    }

    public function resetLogin(Request $request)
    {
        $email_reset    = $request->input('email_reset');
    
        
                $login_karyawan = Akun::where('email', $email_reset)->first();
    
                if($login_karyawan){
                    Akun::where('email', $email_reset)
                                    ->update([
                                        'token'           => null
                                    ]);
                    Session::flash('alert-login-reset', 'Berhasil reset login.!');
                    return redirect('/login-user');
                }else{
                    Session::flash('alert-peringatan', 'Email Tidak Ada.');
                    return redirect('/login-user');
                }
            
    
        
    }

//======================================================================
//======================== login query account =========================
//======================================================================

    public function loginQuery(Request $request)
    {

        $this->validate($request, [
                'nik'     => 'required|string|max:16',
                'password'  => 'required|string|max:18'
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

                $login_Akun = Akun::with('akses')->where('nik', $login_nik)->first();

                if($login_Akun){
                    $login_akses = $login_Akun->akses->akses;
                    if($login_akses == 'User'){
                        if(Hash::check($credentials['password'], $login_Akun->password)){
                            $login_id = $login_Akun->id;
                            $login_token = $login_Akun->token;
                            if ($login_token) {
                                if(isset($_COOKIE['cookie-storage-user'])){
                                    if($login_token == $_COOKIE['cookie-storage-user']){
                                        return redirect('rekrutmen');
                                    }else{
                                        Session::flash('alert-login', 'Akun Yang Anda Masukkan Tidak Sama Dengan Disistem Cookie.');
                                        return redirect('/login-user');
                                    } 
                                }else{
                                    Session::flash('alert-login', 'Anda Sudah Login di Driver Lain.!! Mohon Reset Login Untuk Bisa Login Disini.');
                                    return redirect('/login-user');
                                }
                                
                            }else{
                                $login_randomToken='';
                                $login_id_token = Hash::make($login_nik);
                                $login_randomToken = $login_akses."_".$login_id_token;

                                    if($login_randomToken == ''){
                                        Session::flash('alert-login', 'No Reload Script.');
                                        return redirect('/login-user');
                                    }else{
                                        $login_akun_update_token = Akun::where('id',$login_id)
                                                                        ->update([
                                                                        'token'   => $login_randomToken
                                                                        ]);
                                            if($login_akun_update_token){
                                                Session::flash('alert-token-user', $login_randomToken); 
                                                $request->session()->flash('alert-login-berhasil-user', 'Login Success Akun.');
                                                return redirect('/login-user');
                                                
                                            }else{     
                                                unset($_COOKIE['cookie-storage-user']);    
                                                $logout_unset_cookie = setcookie('cookie-storage-user', null, -1, '/'); 
                                                    if($logout_unset_cookie){
                                                        $request->session()->flash('alert-login-berhasil-user', 'Missing Or Cookie.');
                                                        return redirect('/login-user');
                                                    }
                                            }                       
                                    }
                            }
                        }else{
                            Session::flash('alert-login', 'Your Password Is Wrong.');
                            return redirect('/login-user');
                        }
                    }else{
                        Session::flash('alert-login', 'Nik Sudah di Pake.');
                        return redirect('/login-user');
                    }
                }else{
                    Session::flash('alert-login', 'Nik Tidak Terdaftar.');
                    return redirect('/login-user');
                }
            }else{
                Session::flash('alert-login', 'ceklist yes thats me on this device.');
                return redirect('/login-user');
            }

    }


//======================================================================
//============================ logout ==================================
//======================================================================

    public function logout()
    {
        if(!isset($_COOKIE['date-cookie-storage-user']) && !isset($_COOKIE['cookie-storage-user'])){
            return redirect('login-user');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage-user']));
            $date_now = date('d-m-Y');
            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);

                if ($today_time >= $expire_time) {
                    $akun  = Akun::where('token', $_COOKIE['cookie-storage-user'])
                                    ->update([
                                        'token'           => null
                                    ]);
                        if ($akun) {
                            unset($_COOKIE['cookie-storage-user']);    
                            setcookie('cookie-storage-user', null, -1, '/'); 
                            
                            unset($_COOKIE['date-cookie-storage-user']);    
                            $logout_unset_cookie = setcookie('date-cookie-storage-user', null, -1, '/'); 

                            if($logout_unset_cookie){
                                
                                return redirect('login-user');
                            } 
                        }else{
                            unset($_COOKIE['cookie-storage-user']);    
                            setcookie('cookie-storage-user', null, -1, '/'); 
                            
                            unset($_COOKIE['date-cookie-storage-user']);    
                            $logout_unset_cookie = setcookie('date-cookie-storage-user', null, -1, '/'); 

                            if($logout_unset_cookie){
                                
                                return redirect('login-user');
                            } 
                        }
                }else{
                    $logout_unset_akun = Akun::where('token', $_COOKIE['cookie-storage-user'])
                                            ->update([
                                                        'token'   => null
                                                    ]);
        
                            if($logout_unset_akun){
                                unset($_COOKIE['date-cookie-storage-user']);    
                                $logout_unset_cookie = setcookie('date-cookie-storage-user', null, -1, '/'); 


                                unset($_COOKIE['cookie-storage-user']);    
                                $logout_unset_cookie = setcookie('cookie-storage-user', null, -1, '/'); 
                                    if($logout_unset_cookie){
                                        return redirect('login-user');
                                    }
                                    
                            }else{
                                return redirect('rekrutmen');
                            }
                }
        }
    }

//======================================================================
//============================ view regist =============================
//======================================================================


    public function regist_user()
    {    
        return view('user.rekrutmen.login.regist');
    }

//======================================================================
//============================ input regist ============================
//======================================================================

    public function regist_rekrutmen(Request $request)
    {    
        $this->validate($request, [
            'nik'           => 'required|string|max:16',
            'nomor'         => 'required|string|max:13',
            'email'         => 'required|string|email|max:50'
        ]);

        $regist_rekrutmen_setuju    = $request->input('setuju');
        $regist_rekrutmen_nik       = $request->input('nik');
        $regist_rekrutmen_nomor     = $request->input('nomor');
        $regist_rekrutmen_email     = $request->input('email');

        
        
        if ($regist_rekrutmen_setuju == 'yes') {
            $regist_nik = Akun::where('nik', $regist_rekrutmen_nik)->first();

                if ($regist_nik) {
                    Session::flash('alert-peringatan', 'Nik Sudah Tedaftar.');
                    return redirect('/regist-user');
                }else{
                    $regist_email = Akun::where('email', $regist_rekrutmen_email)->first();
                        if ($regist_email) {
                            Session::flash('alert-peringatan', 'Email Sudah Tedaftar.!! Silahkan Login.');
                            return redirect('/regist-user');
                        }else{
                            
                            $verifikasiEmail_randomPassword = "User"."_".rand(1000,99999);

                            $data = array(
                                'nik'               => $regist_rekrutmen_nik,
                                'password'          => $verifikasiEmail_randomPassword
                            );
                            
                            $dataEmail = Mail::send('pesan-email-rekrutmen', $data, function($message) use ($regist_rekrutmen_email){
                            $message->to($regist_rekrutmen_email, 'Pesan Akun')->subject('Pesan Verifikasi Akun');
                            $message->from('itpthitcelebes24@gmail.com', 'Staff HRD PT Indokaisa Triasa Group (ID EXPRESS)');
                            });

                            if(Mail::failures()){
                                Session::flash('alert-peringatan', 'Tidak Berhasil di Upload.!! Coba Daftar Ulang.');
                                return redirect('/regist-user');
                            }else{
                                $akes = "User";

                                $akes_query = Akses::where('akses', $akes)->first();
                                    if ($akes_query) {
                                        $regist_Akun = new Akun();
                                            $regist_Akun->id_akses           = $akes_query->id;
                                            $regist_Akun->nik                = $regist_rekrutmen_nik;
                                            $regist_Akun->email              = $regist_rekrutmen_email;
                                            $regist_Akun->no_hp              = $regist_rekrutmen_nomor;

                                            $regist_Akun->password           = Hash::make($verifikasiEmail_randomPassword);
                                            $regist_Akun->show_pass          = $verifikasiEmail_randomPassword;
                                        $regist_Akun->save();

                                            if ($regist_Akun) {
                                                $request->session()->flash('alert-regist-berhasil-user', 'Regist Data Akun.!! Silahkan Cek Email Anda Selama 1 x 24 jam Untuk Lihat Password');
                                                return redirect('/regist-user');
                                            }
                                    }else{
            
                                        $regist_Akses = new Akses();
                                            $regist_Akses->akses                = $akes;
                                        $regist_Akses->save();

                                            if ($regist_Akses) {

                                                $regist_Akun = new Akun();
                                                    $regist_Akun->id_akses           = $regist_Akses->id;
                                                    $regist_Akun->nik                = $regist_rekrutmen_nik;
                                                    $regist_Akun->email              = $regist_rekrutmen_email;
                                                    $regist_Akun->no_hp              = $regist_rekrutmen_nomor;

                                                    $regist_Akun->password           = Hash::make($verifikasiEmail_randomPassword);
                                                    $regist_Akun->show_pass          = $verifikasiEmail_randomPassword;
                                                $regist_Akun->save();

                                                    if ($regist_Akun) {
                                                        $request->session()->flash('alert-regist-berhasil-user', 'Regist Data Akun.!! Silahkan Cek Email Anda Selama 1 x 24 jam Untuk Lihat Password');
                                                        return redirect('/regist-user');
                                                    }
                                            }else{
                                                Session::flash('alert-peringatan', 'Akses Tidak di Muat.!! Coba Daftar Ulang.');
                                                return redirect('/regist-user');
                                            }
                                            
                                    }
                            }

                            
                        }
                }



            
                                      
        }else{
            Session::flash('alert-login', 'ceklist yes thats me on this device.');
            return redirect('/regist-user');
        }

       
    }
    
}
     