<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Akun                           as Akun;
use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\admin\M_Karyawan                 as Karyawan;
use App\Models\admin\M_I_KPI                    as KPI;
use App\Models\admin\M_RP_KPI                   as RP_KPI;
use App\Models\admin\M_Orang_KPI                as Orang_KPI;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Create_I_KPI;

use Session;

class C_Insentif_KPI extends Controller
{
    //
    public function index($key)
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

                            $data['dahboard_kpi'] = KPI::orderBy('date_kpi','desc')->first();

                                if (isset($data['dahboard_kpi'])) {

                                

                                    $date_perbandingan = $data['dahboard_kpi']->date_kpi;
                                
                                    $data['dahboard_karyawan_kpi'] = KPI::with([
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
                                            ])->where('date_kpi', $date_perbandingan)->orderBy('date_kpi','desc')->get();

                                // $data['dahboard_karyawan_kpi'] = KPI::
                                // with(['orang_kpi' => function($query){
                                //     return $query->with('rpkpi')->
                                //     with(['akun' => function($query){
                                //         return $query->with([
                                //             'jabatan_gaji' => function($query){
                                //                 return $query->with('jabatan')
                                //                 ->with('gaji');
                                //             }
                                //         ])
                                //         ;
                                //     }]);
                                // }])
                                // // ->where('date_kpi', $date_perbandingan)->orderBy('date_kpi','desc')
                                // ->get();
                                }
                                
                        }else{
                            $data['dahboard_karyawan_kpi'] = KPI::with([
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
                                ])->orderBy('date_kpi','desc')->get();
                    
                        }

                        $data['dahboard_Orang_KPI'] = Orang_KPI::with([
                            'akun' => function($query){
                                return $query->with('data_diri');
                            }
                        ])->whereHas('akun', 
                                function($query) use ($id_perusahaan_){
                                    $query->where('id_perusahaan', $id_perusahaan_);  
                        })->get();

                        $data['dahboard_karyawan'] = Karyawan::with([
                                                'akun' => function($query){
                                                    return $query->with('data_diri')
                                                    ->with('riw_penempatan_wilayah')
                                                    ->with(['orang_kpi' => function($query){
                                                        return $query->with('rpkpi');
                                                    }]);
                                                }
                                            ])->whereHas('akun', 
                                                    function($query) use ($id_perusahaan_){
                                                        $query->where('id_perusahaan', $id_perusahaan_);  
                                            })->get();

                        $data['dahboard_dana_insentif'] = RP_KPI::get();

                        // $data['dahboard_karyawan'] = Karyawan::with([tanggal
                        //     'akun' => function($query){
                        //         return $query->with('data_diri')
                        //                     ->with('data_karyawan')
                        //                     ->with('data_orang_tua')
                        //                     ->with('pendidikan_formal')
                        //                     ->with('pendidikan_non_formal')
                        //                     ->with('file_pribadi')
                        //                     ->with([
                        //                         'jabatan_gaji' => function($query){
                        //                             return $query->with('jabatan')
                        //                             ->with('gaji');
                        //                         }
                        //                     ])
                        //                     ->with(['riw_penempatan_wilayah' => function($query){
                        //                         return $query->with('penempatan');
                        //                     }
                        //                     ]);
                        //     }
                        // ])->whereHas('akun', 
                        //                     function($query) use ($id_perusahaan_){
                        //                         $query->where('id_perusahaan', $id_perusahaan_);  
                        //                     })->get();


                        return view('admin.tema-satu.home.karyawan.tab-insentif.kpi.menu-insentif', $data);
                    }
        }

    }

    public function createExelKPI(Request $request)
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
                        $exelKaryawanAktif = Excel::import(new Create_I_KPI,$request->file('file'));

                        if (isset($exelKaryawanAktif)) {
                            

                            Session::flash('alert-success-karyawan', "Berhasil Input Insentif Tanggal Ini $date_");
                            return redirect('dashboard-panel/Insentif-kpi/new');
                        }
                                

                    }
            }
        
    }

    public function createDanaKPI(Request $request)
    {

        $inserRP_KPI = new RP_KPI();
            // $inserRP_KPI->nominal_gaji         = str_replace(".", "", $insertGaji_nominal_gaji);
            $inserRP_KPI->rp_merah         = str_replace(".", "", $request->input('dana_merah'));
            $inserRP_KPI->rp_hujau         = str_replace(".", "", $request->input('dana_hijau'));
        $inserRP_KPI->save();

            if ($inserRP_KPI) {
                Session::flash('alert-success-karyawan', 'Berhasil Tambah Dana KPI.');
                return redirect('dashboard-panel/Insentif-kpi/dana');
            }
    }

    public function createOrangKpi(Request $request)
    {

        $inserOrang_KPI = new Orang_KPI();
            // $inserRP_KPI->nominal_gaji         = str_replace(".", "", $insertGaji_nominal_gaji);
            $inserOrang_KPI->id_akun         = $request->input('karyawan_oran_kpi');
            $inserOrang_KPI->id_rp_kpi	         = $request->input('rp_oran_kpi');
        $inserOrang_KPI->save();

        if ($inserOrang_KPI) {
            Session::flash('alert-success-karyawan', 'Berhasil Tambah Orang Nerima KPI.');
            return redirect('dashboard-panel/Insentif-kpi/orang');
        }
    }
}
