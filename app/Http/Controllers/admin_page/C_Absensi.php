<?php

namespace App\Http\Controllers\admin_page;

use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Absensi                  as Absensi;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Create_Absensi;

use Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Absensi extends Controller
{
    //


    public function absensiData($key){
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


                if ($key == 'new') {  
                    $id_akun = $data['dahboard_akun_cookie']->id;
                   
                    $data['dahboard_kpi'] = Absensi::orderBy('tanggal','desc')->where('id_akun', $id_akun)->first();

                    if (isset($data['dahboard_kpi'])) {

                    

                        $date_perbandingan = $data['dahboard_kpi']->tanggal;
                        
                    
                        $data['dahboard_karyawan_kpi'] = Absensi::with([
                                'akun' => function($query){
                                    return $query->with('data_diri')
                                                ->with('data_karyawan')
                                                ->with('data_orang_tua')
                                                ->with('pendidikan_formal')
                                                ->with('pendidikan_non_formal')
                                                ->with('file_pribadi')
                                                ->with(['orang_kpi' => function($query){
                                                    return $query->with('rpkpi');
                                                }])
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
                                ])->where('tanggal', $date_perbandingan)->where('id_akun', $id_akun)->get();
                    }
                
                }else{
                    $data['dahboard_karyawan_kpi'] = Absensi::with([
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
                        ])->orderBy('tanggal','desc')->get();
            
                }
            

        return view('admin.tema-satu.home.karyawan.tab-absensi.menu-absensi', $data);
    }



    public function index($key)
    {
        $data['key'] = $key;

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

            if ($key == 'new') {  
                # code...
                $data['dahboard_kpi'] = Absensi::orderBy('tanggal','desc')->first();

                if (isset($data['dahboard_kpi'])) {

                

                    $date_perbandingan = $data['dahboard_kpi']->tanggal;
                
                    $data['dahboard_karyawan_kpi'] = Absensi::with([
                            'akun' => function($query){
                                return $query->with('data_diri')
                                            ->with('data_karyawan')
                                            ->with('data_orang_tua')
                                            ->with('pendidikan_formal')
                                            ->with('pendidikan_non_formal')
                                            ->with('file_pribadi')
                                            ->with(['orang_kpi' => function($query){
                                                return $query->with('rpkpi');
                                            }])
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
                            ])->where('tanggal', $date_perbandingan)->get();
                }
              
            }else{
                $data['dahboard_karyawan_kpi'] = Absensi::with([
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
                    ])->orderBy('tanggal','desc')->get();
        
            }

        return view('admin.tema-satu.home.karyawan.tab-absensi.menu-absensi', $data);
    }

    public function createExelAbsensi(Request $request)
    {
        if(!isset($_COOKIE['date-cookie-storage']) && !isset($_COOKIE['cookie-storage'])){
            return redirect('login-dashboard');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage'])); 
            $date_now = date('d-m-Y');

            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);

            $id = 1;
            $createKaryawanAktif_id_perusahaan = 1;
            

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
                        // Excel::import(new Create_KPI(),request()->file('file'));

                        // $exelKaryawanAktif = Excel::import(new Create_I_KPI(),request()->file('file'));

                        $date_ = date('01 F Y');
                        $exelKaryawanAktif = Excel::import(new Create_Absensi,$request->file('file'));

                        if (isset($exelKaryawanAktif)) {

                            Session::flash('alert-success-karyawan', "Berhasil Input Absensi Tanggal Ini $date_");
                            return redirect('dashboard-panel/absensi/new');
                        }
                                

                    }
            }
        
    }
}
