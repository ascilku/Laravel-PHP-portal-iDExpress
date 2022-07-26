////hapus cokie
        //============================================
        // echo $_COOKIE['cookieName'];
        // unset($_COOKIE['cookieName']);    
        // setcookie('cookieName', null, -1, '/'); 
        // return true;      
        //============================================





        if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
            return redirect('login-dashboard');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage']));
            $date_now = date('d-m-Y');
             
            $kadaluarsa = strtotime($expired);
            $sekarang = strtotime($date_now);

                if ($sekarang >= $kadaluarsa) {

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
                        }
                }else{
                }
        }