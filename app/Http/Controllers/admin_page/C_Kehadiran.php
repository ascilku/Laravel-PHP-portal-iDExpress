<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use App\Models\rekrutmen\M_DataDiri                 as DataDiri;
use App\Models\rekrutmen\M_Data_Orang_Tua           as Data_Orang_Tua;
use App\Models\rekrutmen\M_Pendidikan_Formal        as Pendidikan_Formal;
use App\Models\rekrutmen\M_Uplod_File               as Uplod_File;

use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Absensi                  as Absensi;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Create_Absensi;

use DB;



class C_Kehadiran extends Controller
{
    //
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
            $data['dahboard_kpi'] = Absensi::orderBy('tanggal','desc')->first();
            $hasilnya = array();
            
            if ($key == 'new-kehadiran') {
                # code...
                // $data['dahboard_kpi'] = Absensi::orderBy('tanggal','desc')->distinct()->select('tanggal')->get();
                // $data['dahboard_kpi'] = Absensi::orderBy('tanggal','desc')->distinct()->count('tanggal');
                
                if (isset($data['dahboard_kpi'])) {
                    $data_dahboard_kpi = $data['dahboard_kpi']->tanggal;
                    // foreach ($data_dahboard_kpi as $key_dahboard_kpi) {
                    //     $a = $key_dahboard_kpi->tanggal;
                    //     $hasilnya[] = $a;
                        
                    // }
                    // $hasilnya[1];
                    // $data1 = [
                    //     $hasilnya[0],
                    //     $hasilnya[1]
                    // ];

                    // echo $data1[1];

                    // echo $data['dahboard_akun_cookie'] = Absensi::with('akun')
                    //                                                 ->selectRaw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a",
                    //                                                 )
                    //                                                 ->get();

                    // echo $data['dahboard_karyawan_kpi'] = DB::table('absensi')                                                
                    //                             ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,
                    //                                         DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a"),
                    //                                         DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                    //                                         DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                    //                                         DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                    //                                     )
                    //                             ->join('akun', function ($join) {
                    //                                 $join->on('absensi.id_akun', '=', 'akun.id')
                    //                                 ->join('data_diri', function ($join) {
                    //                                     $join->on('akun.id', '=', 'data_diri.id_akun');
                    //                                 })
                    //                                 ->join('jabatan_gaji', function ($join) {
                    //                                     $join->on('akun.id', '=', 'jabatan_gaji.id_akun')
                    //                                     ->join('jabatan', function ($join) {
                    //                                         $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id')
                    //                                         ;
                    //                                     });
                                                        
                    //                                 });
                    //                             })
                                                
                    //                             ->where('tanggal', $data_dahboard_kpi)->orderBy('jabatan_gaji.id', 'ASC')->get();



                    //  $data['dahboard_karyawan_kpi'] = DB::table('absensi')                                                
                    //                             // ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' 
                    //                             ->select(  'jabatan_gaji.*' ,   'jabatan.*' 
                    //                                         // DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a"),
                    //                                         // DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                    //                                         // DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                    //                                         // DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                    //                                     )
                    //                             ->join('akun', function ($join) {
                    //                                 $join->on('absensi.id_akun', '=', 'akun.id')
                    //                                 ->join('data_diri', function ($join) {
                    //                                     $join->on('akun.id', '=', 'data_diri.id_akun');
                    //                                 })
                    //                                 ->join('jabatan_gaji', function ($join) {
                    //                                     $join->on('akun.id', '=', 'jabatan_gaji.id_akun')
                    //                                     ->join('jabatan', function ($join) {
                    //                                         $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id')
                                                            
                    //                                         ;
                    //                                     })
                    //                                     // ->where('jabatan_gaji.id_jabatan', '=', "12")
                                                        
                    //                                     ;
                                                        
                    //                                 });
                    //                             })
                                                
                    //                             // ->where('tanggal', $data_dahboard_kpi)
                    //                             ->orderBy('jabatan_gaji.id', 'ASC')->where('jabatan_gaji.id_jabatan', \DB::raw("(SELECT MAX('id_jabatan') FROM jabatan_gaji)"))
                    //                             ->get();

                                                // ->where('jabatan_gaji.id_jabatan', \DB::raw("(SELECT MAX('id_jabatan') FROM jabatan_gaji)"))

                                                // ->select('absensi.jam_masuk AS tag_name')
                                                // ->get();
                                                // ->where('jabatan_gaji.id', '1')->orderBy('jabatan_gaji.id', 'desc')->limit(1)->get();

                                                        // $data['dahboard_kpi'] = Absensi::orderBy('tanggal','desc')->first();
                                                        // if (isset($data['dahboard_kpi'])) {
                                                        // $date_perbandingan = $data['dahboard_kpi']->tanggal;

                                                        $data['dahboard_karyawan_kpi'] = DB::table('absensi')
                                                                            ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,'jabatan.*', 'gaji.*', 'riw_penempatan_wilayah.*', 'penempatan.*',
                                                                          
                                                                            // ->select( 'jabatan_gaji.*' ,   'jabatan.*', 'gaji.*',
                                                                            DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS kehadiran"),
                                                                            DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                                                                            DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                                                                            DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                                                                        )
                                                                        ->join('akun', function ($join) {
                                                                            $join->on('absensi.id_akun', '=', 'akun.id')
                                                                            ->join('data_diri', function ($join) {
                                                                                $join->on('akun.id', '=', 'data_diri.id_akun');
                                                                            })
                                                                            ->leftJoin('jabatan_gaji', function ($join) {
                                                                                $join->on('akun.id', '=', 'jabatan_gaji.id_akun')
                                                                                ->leftJoin('jabatan', function ($join) {
                                                                                    $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');
                                                                                    // $join->on('jabatan_gaji.id_jabatan', '=', DB::raw('(SELECT id FROM jabatan WHERE jabatan_gaji.id_jabatan = jabatan.id LIMIT 1)'));
                                                                                })
                                                                                ->leftJoin('gaji', function ($join) {
                                                                                    $join->on('jabatan_gaji.id_gaji', '=', 'gaji.id');
                                                                                })
                                                                                // ->leftJoin('jabatan.id', '=', DB::raw('(SELECT id FROM jabatan WHERE jabatan_gaji.id_jabatan = jabatan.id LIMIT 1)'))
                                                                                ;
                                                                            })
                                                                            ->leftJoin('riw_penempatan_wilayah' , function($query){
                                                                                // return $query->with('penempatan');
                                                                                $query->on('akun.id', '=', 'riw_penempatan_wilayah.id_akun')
                                                                                ->leftJoin('penempatan', function ($join) {
                                                                                    $join->on('riw_penempatan_wilayah.id_penempatan', '=', 'penempatan.id');
                                                                                    // $join->on('jabatan_gaji.id_jabatan', '=', DB::raw('(SELECT id FROM jabatan WHERE jabatan_gaji.id_jabatan = jabatan.id LIMIT 1)'));
                                                                                });
                                                                            }
                                                                            );
                                                                        })
                                                                        // ->where('jabatan_gaji.id', \DB::raw("(select max(`id`) from jabatan_gaji)"))
                                                                        // ->where('jabatan_gaji.id',  DB::raw('(SELECT id FROM jabatan_gaji LIMIT 1)'))
                                                                        // ->orderBy('jabatan_gaji.created_at', 'desc')
                                                                        ->groupBy('absensi.id_akun')
                                                                        ->where('tanggal', $data_dahboard_kpi)->get();

                                                                    // }
                    
                    // echo DB::table('absensi')
                    // ->select('absensi.*',DB::raw('COUNT(tanggal) as count'))
                    // ->groupBy('tanggal')
                    // ->orderBy('tanggal')
                    // ->get();










                    // echo $date_perbandingan = $data['dahboard_kpi']->tanggal;

                    // echo $data['dahboard_karyawan_kpi'] = Absensi::orderBy('id_akun')->count('id_akun');

                    // $data = DB::table('absensi')
                    //     ->select('absensi.*',DB::raw('COUNT(jam_masuk) as count'))
                    //     ->groupBy('jam_masuk')
                    //     ->orderBy('count')
                    //     ->get();

                    // $data = DB::table('absensi')
                    //                             ->join('akun', 'akun.id', '=', 'absensi.id_akun')
                    //                             ->join('follows', 'follows.user_id', '=', 'users.id')
                    //                             ->selectRaw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a")
                    //                             ->groupBy('id_akun')
                    //                             ->get();

                    // echo $data = DB::table('absensi')
                                                
                    //                             ->select('*',DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a"))
                    //                             // ->join('follows', 'follows.user_id', '=', 'users.id')
                    //                             // ->selectRaw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a")
                    //                             ->join('akun', 'absensi.id_akun', '=', 'akun.id')
                    //                             // ->join('data_diri', 'data_diri.id_akun', '=', 'akun.id')
                    //                             ->join('data_diri', 'akun.id', '=', 'data_diri.id_akun')

                    //                             // ->leftJoin('akun', function($join){
                    //                             //     $join->on('absensi.id_akun', '=', 'akun.id');
                                            
                    //                             // })
                    //                             ->groupBy('id_akun')
                    //                             ->get();

                    // echo $data['dahboard_karyawan_kpi'] = DB::table('absensi')
                                                
                    //                             ->select('*',DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a"))
                    //                             // ->join('follows', 'follows.user_id', '=', 'users.id')
                    //                             // ->selectRaw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a")
                    //                             // ->join('akun', 'absensi.id_akun', '=', 'akun.id')
                    //                             // ->join('data_diri', 'data_diri.id_akun', '=', 'akun.id')

                    //                             ->join('akun', function ($join) {
                    //                                 $join->on('absensi.id_akun', '=', 'akun.id')
                    //                                 ->join('data_diri', function ($join) {
                    //                                     $join->on('akun.id', '=', 'data_diri.id_akun');
                    //                                 });
                    //                             })

                    //                             // ->leftJoin('akun', function($join){
                    //                             //     $join->on('absensi.id_akun', '=', 'akun.id');
                                            
                    //                             // })
                    //                             // ->groupBy('id_akun')
                    //                             ->get();

                    
                                                // ->where('tanggal', $date_perbandingan)->get();

                        // echo $users = DB::table('akun')
                        //                         ->joinSub($data, 'latest_posts', function ($join) {
                        //                             $join->on('akun.id', '=', 'latest_posts.id_akun');
                        //                         })->get();

                        // foreach ($data as $key) {
                        //     echo $key->sum_a;
                        // }
                
                    // $data['dahboard_karyawan_kpi'] = Absensi::with([
                    //         'akun' => function($query){
                    //             return $query->with('data_diri')
                    //                         ->with('data_karyawan')
                    //                         ->with('data_orang_tua')
                    //                         ->with('pendidikan_formal')
                    //                         ->with('pendidikan_non_formal')
                    //                         ->with('file_pribadi')
                    //                         ->with(['orang_kpi' => function($query){
                    //                             return $query->with('rpkpi');
                    //                         }])
                    //                         ->with([
                    //                             'jabatan_gaji' => function($query){
                    //                                 return $query->with('jabatan')
                    //                                 ->with('gaji');
                    //                             }
                    //                         ])
                    //                         ->with(['riw_penempatan_wilayah' => function($query){
                    //                             return $query->with('penempatan');
                    //                         }
                    //                         ]);
                    //         }
                    //         ])->groupBy('id_akun')->where('tanggal', $date_perbandingan)->get();
                }
              
            }else{
                // echo $data['dahboard_karyawan_kpi'] = DB::table('absensi')                                                
                //                                 ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,
                //                                             DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a"),
                //                                             DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                //                                             DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                //                                             DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                //                                         )
                //                                 ->join('akun', function ($join) {
                //                                     $join->on('absensi.id_akun', '=', 'akun.id')
                //                                     ->join('data_diri', function ($join) {
                //                                         $join->on('akun.id', '=', 'data_diri.id_akun');
                //                                     })
                //                                     ->join('jabatan_gaji', function ($join) {
                //                                         $join->on('akun.id', '=', 'jabatan_gaji.id_akun')
                //                                         ->join('jabatan', function ($join) {
                //                                             $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');
                //                                         });
                                                        
                //                                     });
                //                                 })
                //                                 ->where('tanggal', $data_dahboard_kpi)->get();

                // ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,
                //                                             DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a"),
                //                                             DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                //                                             DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                //                                             DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                //                                         )

                // $data['dahboard_karyawan_kpi'] =  DB::table('absensi')
                //     ->select('akun.nik AS nip','absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,  
                //                                                                                                             DB::raw('COUNT(tanggal) as count'), 
                //                                                                                                             DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a"),
                //                                                                                                             DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                //                                                                                                             DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                //                                                                                                             DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                //                                                                                                         )
                //     ->join('akun', function ($join) {
                //         $join->on('absensi.id_akun', '=', 'akun.id')
                //         ->join('data_diri', function ($join) {
                //             $join->on('akun.id', '=', 'data_diri.id_akun');
                //         })
                //         ->join('jabatan_gaji', function ($join) {
                //             $join->on('akun.id', '=', 'jabatan_gaji.id_akun')
                //             ->join('jabatan', function ($join) {
                //                 $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');
                //             });
                            
                //         });
                //     })  
                //     ->groupBy('tanggal')
                //     ->orderBy('tanggal')
                //     ->orderBy('tanggal','desc')->get();

                // $data['dahboard_karyawan_kpi'] = DB::table('absensi')->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*', 'gaji.*',
                //                                                             DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a"),
                //                                                             DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                //                                                             DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                //                                                             DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                //                                                         )
                //                                                         ->join('akun', function ($join) {
                //                                                             $join->on('absensi.id_akun', '=', 'akun.id')
                //                                                             ->join('data_diri', function ($join) {
                //                                                                 $join->on('akun.id', '=', 'data_diri.id_akun');
                //                                                             })
                //                                                             ->join('jabatan_gaji', function ($join) {
                //                                                                 $join->on('akun.id', '=', 'jabatan_gaji.id_akun')
                //                                                                 ->join('jabatan', function ($join) {
                //                                                                     $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');
                //                                                                 })->join('gaji', function ($join) {
                //                                                                     $join->on('jabatan_gaji.id_jabatan', '=', 'gaji.id');
                //                                                                 })
                //                                                                 // ->where('jabatan_gaji.id_jabatan', '=', "12")
                                                                                
                //                                                                 ;
                                                                                
                //                                                             });
                //                                                         })
                //                                                         ->where('jabatan_gaji.id', \DB::raw("(select max(`id`) from jabatan_gaji)"))
                //                                                         ->orderBy('jabatan_gaji.id_jabatan', 'ASC')
                //                                                         ->get();


                // $data['dahboard_karyawan_kpi'] = DB::table('absensi')->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*', 'gaji.*',
                //                                                             DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a"),
                //                                                             DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                //                                                             DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                //                                                             DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                //                                                         )
                //                                                         ->join('akun', function ($join) {
                //                                                             $join->on('absensi.id_akun', '=', 'akun.id')
                //                                                             ->join('data_diri', function ($join) {
                //                                                                 $join->on('akun.id', '=', 'data_diri.id_akun');
                //                                                             })
                //                                                             ->join('jabatan_gaji', function ($join) {
                //                                                                 $join->on('akun.id', '=', 'jabatan_gaji.id_akun')
                //                                                                 ->join('jabatan', function ($join) {
                //                                                                     $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');
                //                                                                 })->join('gaji', function ($join) {
                //                                                                     $join->on('jabatan_gaji.id_jabatan', '=', 'gaji.id');
                //                                                                 })
                //                                                                 // ->where('jabatan_gaji.id_jabatan', '=', "12")
                                                                                
                //                                                                 ;
                                                                                
                //                                                             });
                //                                                         })
                //                                                         ->where('jabatan_gaji.id', \DB::raw("(select max(`id`) from jabatan_gaji)"))
                //                                                         ->orderBy('jabatan_gaji.id_jabatan', 'ASC')
                //                                                         ->groupBy('tanggal')
                //                                                         ->get();

                $data['dahboard_karyawan_kpi'] = DB::table('absensi')
                                                                            ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,'jabatan.*', 'gaji.*', 'riw_penempatan_wilayah.*','penempatan.*',
                                                                          
                                                                            // ->select( 'jabatan_gaji.*' ,   'jabatan.*', 'gaji.*',
                                                                            DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS kehadiran"),
                                                                            DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                                                                            DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                                                                            DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                                                                        )
                                                                        ->join('akun', function ($join) {
                                                                            $join->on('absensi.id_akun', '=', 'akun.id')
                                                                            ->join('data_diri', function ($join) {
                                                                                $join->on('akun.id', '=', 'data_diri.id_akun');
                                                                            })
                                                                            ->leftJoin('jabatan_gaji', function ($join) {
                                                                                $join->on('akun.id', '=', 'jabatan_gaji.id_akun')
                                                                                ->leftJoin('jabatan', function ($join) {
                                                                                    $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');
                                                                                    // $join->on('jabatan_gaji.id_jabatan', '=', DB::raw('(SELECT id FROM jabatan WHERE jabatan_gaji.id_jabatan = jabatan.id LIMIT 1)'));
                                                                                })
                                                                                ->leftJoin('gaji', function ($join) {
                                                                                    $join->on('jabatan_gaji.id_gaji', '=', 'gaji.id');
                                                                                })
                                                                                // ->leftJoin('jabatan.id', '=', DB::raw('(SELECT id FROM jabatan WHERE jabatan_gaji.id_jabatan = jabatan.id LIMIT 1)'))
                                                                                ;
                                                                            })
                                                                            ->leftJoin('riw_penempatan_wilayah' , function($query){
                                                                                // return $query->with('penempatan');
                                                                                $query->on('akun.id', '=', 'riw_penempatan_wilayah.id_akun')
                                                                                ->leftJoin('penempatan', function ($join) {
                                                                                    $join->on('riw_penempatan_wilayah.id_penempatan', '=', 'penempatan.id');
                                                                                    // $join->on('jabatan_gaji.id_jabatan', '=', DB::raw('(SELECT id FROM jabatan WHERE jabatan_gaji.id_jabatan = jabatan.id LIMIT 1)'));
                                                                                });
                                                                            }
                                                                            );
                                                                        })
                                                                        // ->where('jabatan_gaji.id', \DB::raw("(select max(`id`) from jabatan_gaji)"))
                                                                        // ->where('jabatan_gaji.id',  DB::raw('(SELECT id FROM jabatan_gaji LIMIT 1)'))
                                                                        ->orderBy('tanggal', 'desc')
                                                                        ->groupBy('absensi.id_akun')
                                                                        ->groupBy('tanggal')
                                                                        ->get();
                                                                        
                                                                        $data['deleteJabatanGaji'] = Absensi::orderBy('tanggal','desc')->first(); 
                                                                        // echo $data['deleteJabatanGaji']->tanggal;
        
            }

            return view('admin.tema-satu.home.karyawan.tab-absensi.menu-absensi', $data);
    }

    public function kehadiran()
    {
        $data_cookie = Akun::where('token', $_COOKIE['cookie-storage'])->first();
        
        $aplyPekerjaan_data_diri        = DataDiri::where('id_akun', $data_cookie->id)->first();

        $rekrutment_data_orang_tua      = Data_Orang_Tua::where('id_akun', $data_cookie->id)->first();

        $rekrutment_pendidikan_formal   = Pendidikan_Formal::where('id_akun', $data_cookie->id)->first();

        $rekrutment_ktp                 = Uplod_File::where('id_akun', $data_cookie->id)->first();

        if ($aplyPekerjaan_data_diri->foto) {
            if ($rekrutment_data_orang_tua) {
                if ($rekrutment_pendidikan_formal) {
                    if ($rekrutment_ktp) {
                        echo "dfd";
                    }else{
                        Session::flash('alert-peringatan', 'Silahkan Lengkapi File Data Diri Anda.');
                        return redirect('dashboard-panel');
                    }
                }else{
                    Session::flash('alert-peringatan', 'Silahkan Lengkapi Pendidikan Formal Anda.');
                    return redirect('dashboard-panel');
                }
            }else{
                Session::flash('alert-peringatan', 'Silahkan Lengkapi Data Orang Tua Anda.');
                return redirect('dashboard-panel');
            }
        }else{
            Session::flash('alert-peringatan', 'Silahkan Lengkapi Foto Profil Anda.');
            return redirect('dashboard-panel');
        }
                                                
        

        // echo "sds";
    }
}
