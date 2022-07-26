<?php

namespace App\Http\Controllers\user_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Crypt;
use Session;
use App\Models\M_Akun                           as Akun;

class C_User extends Controller
{
    //
    public function index()
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
                        }
                }else{
                    return view('user.rekruitmet');
                }
        }
        
    }

    public function hapusAkun(Request $request)
    {
        $course_id = Crypt::decrypt($request->id); 

        $akun = Akun::find($course_id); 
        $akun->delete();

        Session::flash('alert-success-karyawan', 'Berhasil Delete Akun.');
        return redirect('dashboard-panel/lowongan-pekerjaan');
    }
}
