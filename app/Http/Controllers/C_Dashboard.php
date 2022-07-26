<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Karyawan                 as Karyawan;
use App\Models\admin\M_Jabatan                  as Jabatan;
use App\Models\admin\M_Gaji                     as Gaji;
use App\Models\admin\M_Jabatan_Gaji             as Jabatan_Gaji;
use App\Models\admin\M_Riw_Penempatan_Wilayah   as Riw_Penempatan_Wilayah;

use App\Models\rekrutmen\M_DataDiri                 as DataDiri;
use App\Models\rekrutmen\M_Pendidikan_Formal        as Pendidikan_Formal;
use App\Models\rekrutmen\M_Pendidikan_Non_Formal    as Pendidikan_Non_Formal;
use App\Models\rekrutmen\M_Uplod_File               as Uplod_File;
use App\Models\rekrutmen\M_Data_Orang_Tua           as Data_Orang_Tua;
use App\Models\rekrutmen\M_Aply_Lowongan            as Aply_Lowongan;

use App\Models\rekrutmen\M_Lowongan_Kerja       as Lowongan_Kerja;

use Illuminate\Support\Facades\Storage;
use Cookie;

class C_Dashboard extends Controller
{

//======================================================================
//======================== Get View Dashboard ==========================
//======================================================================
    
    public function index()
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
                        $login_perusahaan_cookie = Perusahaan::where('token', $_COOKIE['cookie-storage'])->first();
                            if (isset($login_perusahaan_cookie)) {
                                $data['dahboard_akun_cookie'] = Perusahaan::where('token', $_COOKIE['cookie-storage'])->with('akses')->with('data_perusahaan')->first();
                                return view('admin.tema-satu.dashboard', $data);
                                                // $data['dahboard_karyawan'] = Karyawan::with([
                                                //                                                 'akun' => function($query){
                                                //                                                     return $query->with('data_diri')
                                                //                                                                 ->with('data_orang_tua')
                                                //                                                                 ->with('pendidikan_formal')
                                                //                                                                 ->with('pendidikan_non_formal')
                                                //                                                                 ->with('file_pribadi')
                                                //                                                                 ->with([
                                                //                                                                     'jabatan_gaji' => function($query){
                                                //                                                                         return $query->with('jabatan')
                                                //                                                                         ->with('gaji');
                                                //                                                                     }
                                                //                                                                 ])
                                                //                                                                 ->with('riw_penempatan_wilayah');
                                                //                                                 }
                                                //                                             ],
                                                //                                             )
                                                //                                             ->get();
                                

                                                // $data['dahboard_karyawan_aktif'] = Karyawan::with([
                                                //                                     'akun' => function($query){
                                                //                                         return $query->with('data_diri')
                                                //                                                     ->with('data_orang_tua')
                                                //                                                     ->with('pendidikan_formal')
                                                //                                                     ->with('pendidikan_non_formal')
                                                //                                                     ->with('file_pribadi')
                                                //                                                     ->with([
                                                //                                                         'jabatan_gaji' => function($query){
                                                //                                                             return $query->with('jabatan');
                                                //                                                         }
                                                //                                                     ])
                                                //                                                     ->with('kontrak')
                                                //                                                     ->with('riw_penempatan_wilayah');
                                                //                                     }
                                                //                                 ],
                                                //                                 )->where('status_data', 'Aktif')
                                                //                                 ->get();


                                                // $data['dahboard_karyawan_resign'] = Karyawan::with([
                                                //                                     'akun' => function($query){
                                                //                                         return $query->with('data_diri')
                                                //                                                     ->with('data_orang_tua')
                                                //                                                     ->with('pendidikan_formal')
                                                //                                                     ->with('pendidikan_non_formal')
                                                //                                                     ->with('file_pribadi')
                                                //                                                     ->with([
                                                //                                                         'jabatan_gaji' => function($query){
                                                //                                                             return $query->with('jabatan');
                                                //                                                         }
                                                //                                                     ])
                                                //                                                     ->with('riw_penempatan_wilayah');
                                                //                                     }
                                                //                                 ],
                                                //                                 )->where('status_data', 'Resign')
                                                //                                 ->get();

                                                // $data['dahboard_karyawan_non'] = Karyawan::with([
                                                //                                     'akun' => function($query){
                                                //                                         return $query->with('data_diri')
                                                //                                                     ->with('data_orang_tua')
                                                //                                                     ->with('pendidikan_formal')
                                                //                                                     ->with('pendidikan_non_formal')
                                                //                                                     ->with('file_pribadi')
                                                //                                                     ->with([
                                                //                                                         'jabatan_gaji' => function($query){
                                                //                                                             return $query->with('jabatan');
                                                //                                                         }
                                                //                                                     ])
                                                //                                                     ->with('riw_penempatan_wilayah');
                                                //                                     }
                                                //                                 ],
                                                //                                 )->where('status_data', 'Tidak Aktif')
                                                //                                 ->get();
                                                


                                                // $data['dahboard_jabatan'] = Jabatan::get();
                                                // $data['dahboard_gaji'] = Gaji::get();

                                                // $data['dahboard_Jabatan_Gaji'] = Jabatan_Gaji::with('jabatan')->with('gaji')->
                                                //                         with([
                                                //                             'akun' => function($query){
                                                //                                 return $query->with('data_diri');
                                                //                             }
                                                //                         ])
                                                //                 ->get();

                                                //============================== kontrak ===============================

                                                // $data['dahboard_cek_karyawan_kontrak'] = Karyawan::with([
                                                //                                     'akun' => function($query){
                                                //                                         return $query->with('data_diri')
                                                //                                                     ->with('data_orang_tua')
                                                //                                                     ->with('pendidikan_formal')
                                                //                                                     ->with('pendidikan_non_formal')
                                                //                                                     ->with('file_pribadi')
                                                //                                                     ->with([
                                                //                                                         'jabatan_gaji' => function($query){
                                                //                                                             return $query->with('jabatan');
                                                //                                                         }
                                                //                                                     ])
                                                //                                                     ->with('kontrak')
                                                //                                                     ->with('riw_penempatan_wilayah');
                                                //                                     }
                                                //                                 ],
                                                //                                 )
                                                //                                 ->get();

                                                



                                                // $data['dahboard_perusahaan'] = Perusahaan::get();

                                                // $data['dahboard_perusahaan_tidak'] = Perusahaan::where('status', 'tidak')->get();
                                                // $data['dahboard_perusahaan_aktif'] = Perusahaan::where('status', 'aktif')->get();



                                                // $data['dahboard_Lowongan_Kerja'] = Lowongan_Kerja::with('perusahaan')->orderBy('id', 'DESC')->get();
                                                
                                                // $data['dahboard_orang_lowongan'] = Akun::with('akses')->with('data_diri')
                                                //                                 ->with([
                                                //                                     'aply_lowongan_' => function($query){
                                                //                                         return $query->with('lowongan_kerja');
                                                //                                     }

                                                //                                 ])
                                                //                                 ->whereHas('akses', 
                                                //                                 function($query){
                                                //                                     $query->where('akses', 'User');  
                                                //                                 })
                                                //                                 ->whereHas('aply_lowongan_', 
                                                //                                 function($query){
                                                //                                     $query->where('status', 'Buka');  
                                                //                                 })
                                                //                                 ->orderBy('id', 'DESC')
                                                //                                 ->get();
                                                                                
                                
                            
                            }else{
                                $login_akun_cookie = Akun::where('token', $_COOKIE['cookie-storage'])->first();

                                    if (isset($login_akun_cookie)) {
                        
                                        $data['akun_dashboard'] = Akun::where('token', $_COOKIE['cookie-storage'])->with('akses')->with('data_diri')->with('perusahaan')->first();
                                        
                                            if (!isset($data['akun_dashboard']->perusahaan->id)) {
                                                $data['dahboard_karyawan'] = Karyawan::with(
                                                [
                                                            'akun' => function($query){
                                                                return $query->with('data_diri')
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
                                                                            ->with('riw_penempatan_wilayah');
                                                            }
                                                ])->get();
                                                                                        
                                                
                                                $data['dahboard_karyawan_aktif'] = Karyawan::with(
                                                [
                                                    'akun' => function($query){
                                                        return $query->with('data_diri')
                                                                    ->with('data_orang_tua')
                                                                    ->with('pendidikan_formal')
                                                                    ->with('pendidikan_non_formal')
                                                                    ->with('file_pribadi')
                                                                    ->with([
                                                                        'jabatan_gaji' => function($query){
                                                                            return $query->with('jabatan');
                                                                        }
                                                                    ])
                                                                    ->with('kontrak')
                                                                    ->with('riw_penempatan_wilayah');
                                                    }
                                                ],
                                                )->where('status_data', 'Aktif')
                                                ->get();
                        
                        
                                                $data['dahboard_karyawan_resign'] = Karyawan::with(
                                                [
                                                    'akun' => function($query){
                                                        return $query->with('data_diri')
                                                                    ->with('data_orang_tua')
                                                                    ->with('pendidikan_formal')
                                                                    ->with('pendidikan_non_formal')
                                                                    ->with('file_pribadi')
                                                                    ->with([
                                                                        'jabatan_gaji' => function($query){
                                                                            return $query->with('jabatan');
                                                                        }
                                                                    ])
                                                                    ->with('riw_penempatan_wilayah');
                                                    }
                                                ],
                                                )->where('status_data', 'Resign')
                                                ->get();
                        
                                                $data['dahboard_karyawan_non'] = Karyawan::with(
                                                                        [
                                                                                            'akun' => function($query){
                                                                                                return $query->with('data_diri')
                                                                                                            ->with('data_orang_tua')
                                                                                                            ->with('pendidikan_formal')
                                                                                                            ->with('pendidikan_non_formal')
                                                                                                            ->with('file_pribadi')
                                                                                                            ->with([
                                                                                                                'jabatan_gaji' => function($query){
                                                                                                                    return $query->with('jabatan');
                                                                                                                }
                                                                                                            ])
                                                                                                            ->with('riw_penempatan_wilayah');
                                                                                            }
                                                                                        ],
                                                                                        )->where('status_data', 'Tidak Aktif')
                                                                                        ->get();
                                                                                        
                                            
                                                
                                                $data['dahboard_jabatan'] = Jabatan::get();
                                                $data['dahboard_gaji'] = Gaji::get();
                                                $data['dahboard_Jabatan_Gaji'] = Jabatan_Gaji::with('jabatan')->with('gaji')->
                                                                                with([
                                                                                    'akun' => function($query){
                                                                                        return $query->with('data_diri');
                                                                                    }
                                                                                ])
                                                                        ->get();
                                                $data['dahboard_akun_cookie'] = Akun::where('token', $_COOKIE['cookie-storage'])->first();
                        
                                                //============================== kontrak ===============================
                        
                                                $data['dahboard_cek_karyawan_kontrak'] = Karyawan::with([
                                                                                            'akun' => function($query){
                                                                                                return $query->with('data_diri')
                                                                                                            ->with('data_orang_tua')
                                                                                                            ->with('pendidikan_formal')
                                                                                                            ->with('pendidikan_non_formal')
                                                                                                            ->with('file_pribadi')
                                                                                                            ->with([
                                                                                                                'jabatan_gaji' => function($query){
                                                                                                                    return $query->with('jabatan');
                                                                                                                }
                                                                                                            ])
                                                                                                            ->with('kontrak')
                                                                                                            ->with('riw_penempatan_wilayah');
                                                                                            }
                                                                                        ],
                                                                                        )
                                                                                        ->get();
                        
                                                $data['dahboard_cek_karyawan_kontrak_aktif'] = Karyawan::with([
                                                                                            'akun' => function($query){
                                                                                                return $query->with('data_diri')
                                                                                                            ->with('data_orang_tua')
                                                                                                            ->with('pendidikan_formal')
                                                                                                            ->with('pendidikan_non_formal')
                                                                                                            ->with('file_pribadi')
                                                                                                            ->with([
                                                                                                                'jabatan_gaji' => function($query){
                                                                                                                    return $query->with('jabatan');
                                                                                                                }
                                                                                                            ])
                                                                                                            ->with('kontrak')
                                                                                                            ->with('kontrak_semua')
                                                                                                            ->with('riw_penempatan_wilayah');
                                                                                            }
                                                                                        ],
                                                                                        )
                                                                                        ->where('status_data', 'Aktif')->get();
                                                
                                        
                                              
                                                $data['dahboard_perusahaan'] = Perusahaan::get();

                                                $data['dahboard_perusahaan_tidak'] = Perusahaan::where('status', 'tidak')->get();
                                                $data['dahboard_perusahaan_aktif'] = Perusahaan::where('status', 'aktif')->get();
                        
                        
                        
                                                
                                                $data['dahboard_orang_lowongan'] = Akun::with('akses')->with('data_diri')
                                                                                        ->with([
                                                                                            'aply_lowongan_' => function($query){
                                                                                                return $query->with('lowongan_kerja');
                                                                                            }
                        
                                                                                        ])
                                                                                        ->whereHas('akses', 
                                                                                        function($query){
                                                                                            $query->where('akses', 'User');  
                                                                                        })
                                                                                        ->whereHas('aply_lowongan_', 
                                                                                        function($query){
                                                                                            $query->where('status', 'Buka');  
                                                                                        })
                                                                                        ->orderBy('id', 'DESC')
                                                                                        ->get();
                                                                                        
                                                return view('admin.tema-satu.dashboard', $data);
                                              
                                            }else{
                                                $id_perusahaan_ = $data['akun_dashboard']->perusahaan->id;

                                                $data['dahboard_akun_cookie'] = Akun::where('token', $_COOKIE['cookie-storage'])->first();

                                                $rekrutment_id_akun = $data['dahboard_akun_cookie']->id;
                                            
                                                $data['rekrutment_data_orang_tua']      = Data_Orang_Tua::where('id_akun', $rekrutment_id_akun)
                                                                                    ->where('hubungan', 'AYAH')
                                                                                    ->first();

                                                $data['rekrutment_data_ibu']            = Data_Orang_Tua::where('id_akun', $rekrutment_id_akun)
                                                                                                        ->where('hubungan', 'IBU')
                                                                                                        ->first();

                                                $data['rekrutment_data_wali']           = Data_Orang_Tua::where('id_akun', $rekrutment_id_akun)
                                                                                                        ->where('hubungan', 'WALI')
                                                                                                        ->first();

                                                // ========================== query data pendidikan formal ===========================

                                                $data['rekrutment_pendidikan_formal'] = Pendidikan_Formal::where('id_akun', $rekrutment_id_akun)->get();

                                                // ========================== query data diri ===========================

                                                $data['rekrutment_ktp']                 = Uplod_File::where('id_akun', $rekrutment_id_akun)
                                                                                                ->where('jenis', 'KTP')
                                                                                                ->first();

                                                $data['rekrutment_skck']                = Uplod_File::where('id_akun', $rekrutment_id_akun)
                                                                                                ->where('jenis', 'SKCK')
                                                                                                ->first();

                                                $data['rekrutment_kk']                  = Uplod_File::where('id_akun', $rekrutment_id_akun)
                                                                                                ->where('jenis', 'KARTU KELUARGA')
                                                                                                ->first();

                                                $data['rekrutment_sim']                 = Uplod_File::where('id_akun', $rekrutment_id_akun)
                                                                                                ->where('jenis', 'SIM')
                                                                                                ->first();

                                                $data['rekrutment_stnk']                = Uplod_File::where('id_akun', $rekrutment_id_akun)
                                                                                                ->where('jenis', 'STNK')
                                                                                                ->first();

                                                $data['rekrutment_foto_motor']          = Uplod_File::where('id_akun', $rekrutment_id_akun)
                                                                                                ->where('jenis', 'FOTO MOTOR')
                                                                                                ->first();

                                                $data['rekrutment_kesehatan']           = Uplod_File::where('id_akun', $rekrutment_id_akun)
                                                                                                ->where('jenis', 'BPJS KESEHATAN')
                                                                                                ->first();
                                                
                                                // ========================== query data pendidikan non formal ===========================

                                                $data['rekrutment_pendidikan_non_formal'] = Pendidikan_Non_Formal::where('id_akun', $rekrutment_id_akun)->get();



                                                // $data['dahboard_karyawan'] = Karyawan::with([
                                                //     'akun' => function($query){
                                                //         return $query->with('data_diri')
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
                                                //                     ->with('riw_penempatan_wilayah');
                                                //     }
                                                // ],
                                                // )
                                                // ->whereHas('akun', 
                                                // function($query) use ($id_perusahaan_){
                                                //     $query->where('id_perusahaan', $id_perusahaan_);  
                                                // })
                                                // ->get();

                                                // $data['dahboard_karyawan_resign'] = Karyawan::with([
                                                //                                             'akun' => function($query){
                                                //                                                 return $query->with('data_diri')
                                                //                                                             ->with('data_orang_tua')
                                                //                                                             ->with('pendidikan_formal')
                                                //                                                             ->with('pendidikan_non_formal')
                                                //                                                             ->with('file_pribadi')
                                                //                                                             ->with([
                                                //                                                                 'jabatan_gaji' => function($query){
                                                //                                                                     return $query->with('jabatan');
                                                //                                                                 }
                                                //                                                             ])
                                                //                                                             ->with('riw_penempatan_wilayah');
                                                //                                             }
                                                //                                         ],
                                                //                                         )->where('status_data', 'Resign')
                                                //                                         ->whereHas('akun', 
                                                //                                         function($query) use ($id_perusahaan_){
                                                //                                             $query->where('id_perusahaan', $id_perusahaan_);  
                                                //                                         })
                                                //                                         ->get();
                        
                                                // $data['dahboard_karyawan_non'] = Karyawan::with([
                                                //                                             'akun' => function($query){
                                                //                                                 return $query->with('data_diri')
                                                //                                                             ->with('data_orang_tua')
                                                //                                                             ->with('pendidikan_formal')
                                                //                                                             ->with('pendidikan_non_formal')
                                                //                                                             ->with('file_pribadi')
                                                //                                                             ->with([
                                                //                                                                 'jabatan_gaji' => function($query){
                                                //                                                                     return $query->with('jabatan');
                                                //                                                                 }
                                                //                                                             ])
                                                //                                                             ->with('riw_penempatan_wilayah');
                                                //                                             }
                                                //                                         ],
                                                //                                         )->where('status_data', 'Tidak Aktif')
                                                //                                         ->whereHas('akun', 
                                                //                                         function($query) use ($id_perusahaan_){
                                                //                                             $query->where('id_perusahaan', $id_perusahaan_);  
                                                //                                         })
                                                //                                         ->get();
                                                                                        
                        
                                                
                                                // $data['dahboard_jabatan'] = Jabatan::get();
                                                // $data['dahboard_gaji'] = Gaji::get();
                                                // $data['dahboard_Lowongan_Kerja'] = Lowongan_Kerja::with('perusahaan')->where('id_perusahaan', $id_perusahaan_)->orderBy('id', 'DESC')->get();
 
                                                // $data['dahboard_Jabatan_Gaji'] = Jabatan_Gaji::with('jabatan')->with('gaji')->
                                                //                                 with([
                                                //                                     'akun' => function($query){
                                                //                                         return $query->with('data_diri');
                                                //                                     }
                                                //                                 ])
                                                //                         ->get();

                                                
                        
                                                //============================== kontrak ===============================
                        
                                                // $data['dahboard_orang_lowongan'] = Akun::with('akses')->with('data_diri')
                                                //                                         ->with([
                                                //                                             'aply_lowongan_' => function($query){
                                                //                                                 return $query->with('lowongan_kerja');
                                                //                                             }
                        
                                                //                                         ])
                                                //                                         ->whereHas('akses', 
                                                //                                         function($query){
                                                //                                             $query->where('akses', 'User');  
                                                //                                         })
                                                //                                         ->whereHas('aply_lowongan_', 
                                                //                                         function($query) use ($id_perusahaan_){
                                                //                                             $query->where('id_perusahaan', $id_perusahaan_);  
                                                //                                         })
                                                //                                         // ->whereHas('aply_lowongan_', 
                                                //                                         // function($query) use ($id_perusahaan_){
                                                //                                         //     $query->where('status', 'Buka');  
                                                //                                         // })
                                                //                                         ->orderBy('id', 'DESC')
                                                //                                         ->get();
                        
                        
                                                //============================== kontrak ===============================
                        
                                                // $data['dahboard_cek_karyawan_kontrak'] = Karyawan::with([
                                                //                                             'akun' => function($query){
                                                //                                                 return $query->with('data_diri')
                                                //                                                             ->with('data_orang_tua')
                                                //                                                             ->with('pendidikan_formal')
                                                //                                                             ->with('pendidikan_non_formal')
                                                //                                                             ->with('file_pribadi')
                                                //                                                             ->with([
                                                //                                                                 'jabatan_gaji' => function($query){
                                                //                                                                     return $query->with('jabatan');
                                                //                                                                 }
                                                //                                                             ])
                                                //                                                             ->with('kontrak')
                                                //                                                             ->with('riw_penempatan_wilayah');
                                                //                                             }
                                                //                                         ],
                                                //                                         )
                                                //                                         ->whereHas('akun', 
                                                //                                         function($query) use ($id_perusahaan_){
                                                //                                             $query->where('id_perusahaan', $id_perusahaan_);  
                                                //                                         })
                                                //                                         ->get();
                        
                                                // $data['dahboard_cek_karyawan_kontrak_aktif'] = Karyawan::with([
                                                //                                             'akun' => function($query){
                                                //                                                 return $query->with('data_diri')
                                                //                                                             ->with('data_orang_tua')
                                                //                                                             ->with('pendidikan_formal')
                                                //                                                             ->with('pendidikan_non_formal')
                                                //                                                             ->with('file_pribadi')
                                                //                                                             ->with([
                                                //                                                                 'jabatan_gaji' => function($query){
                                                //                                                                     return $query->with('jabatan');
                                                //                                                                 }
                                                //                                                             ])
                                                //                                                             ->with('kontrak')
                                                //                                                             ->with('kontrak_semua')
                                                //                                                             ->with('riw_penempatan_wilayah');
                                                //                                             }
                                                //                                         ],
                                                //                                         )
                                                //                                         ->whereHas('akun', 
                                                //                                         function($query) use ($id_perusahaan_){
                                                //                                             $query->where('id_perusahaan', $id_perusahaan_);  
                                                //                                         })
                                                //                                         ->where('status_data', 'Aktif')->get();
                                                
                        
                                                return view('admin.tema-satu.dashboard', $data);
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
                                // 
                            }
                    }
        }
        
    }
}
