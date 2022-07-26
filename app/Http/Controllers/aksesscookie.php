if(!isset($_COOKIE['date-cookie-storage-user']) && !isset($_COOKIE['cookie-storage-user'])){
            
            return redirect('login-user');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage-user']));
            $date_now = date('d-m-Y');
                if ($date_now >= $expired) {

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
                    
                }
        }