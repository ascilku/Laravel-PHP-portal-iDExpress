<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Riw_Jabatan extends Controller
{
    // if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
    //     return redirect('login-dashboard');
    // }else{
    //     $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage']));
    //     $date_now = date('d-m-Y');
    //         if ($date_now >= $expired) {

    //             $akun  = Akun::where('token', $_COOKIE['cookie-storage'])
    //                             ->update([
    //                                 'token'           => null
    //                             ]);

    //                 if ($akun) {
    //                     unset($_COOKIE['cookie-storage']);    
    //                     setcookie('cookie-storage', null, -1, '/'); 
                        
    //                     unset($_COOKIE['date-cookie-storage']);    
    //                     $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 

    //                     if($logout_unset_cookie){
                            
    //                         return redirect('login-dashboard');
    //                     } 
    //                 }else{
    //                     $perusahaan  = Perusahaan::where('token', $_COOKIE['cookie-storage'])
    //                             ->update([
    //                                 'token'           => null
    //                             ]);

    //                             if ($perusahaan) {
    //                                 unset($_COOKIE['cookie-storage']);    
    //                                 setcookie('cookie-storage', null, -1, '/'); 
                                    
    //                                 unset($_COOKIE['date-cookie-storage']);    
    //                                 $logout_unset_cookie = setcookie('date-cookie-storage', null, -1, '/'); 
        
    //                                 if($logout_unset_cookie){
                                        
    //                                     return redirect('login-dashboard');
    //                                 } 
    //                             }
    //                 }
    //         }else{

    //         }
    // }
}
