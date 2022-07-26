<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Absensi                  as Absensi;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Create_Absensi;
use DB;
class C_Lapo_Gaji extends Controller
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
            
            if ($key == 'new') {
                # code...

                if (isset($data['dahboard_kpi'])) {

                    $data_dahboard_kpi = $data['dahboard_kpi']->tanggal;

                
                    // echo  $data['dahboard_karyawan_kpi'] = DB::table('absensi')                                                
                    //                             ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' , 'gaji.*' ,
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
                    //                                         $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');
                    //                                     })
                    //                                     ->join('gaji', function ($join) {
                    //                                         $join->on('jabatan_gaji.id_gaji', '=', 'gaji.id');
                    //                                     });
                                                        
                    //                                 });
                    //                             })
                    //                             // ->select('absensi.jam_masuk AS tag_name')
                    //                             // ->get(); ->orderBy('jabatan_gaji.id', 'desc')
                    //                             ->where('tanggal', $data_dahboard_kpi)->orderBy('jabatan_gaji.id', 'ASC')->get();


                    //    $data['dahboard_karyawan_kpi'] = DB::table('absensi')                                                
                    //                             ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' , 'gaji.*' ,
                    //                             // ->select('jabatan_gaji.*' ,   'jabatan.*' , 'gaji.*' ,
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
                    //                                         $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');
                    //                                     })
                    //                                     ->join('gaji', function ($join) {
                    //                                         $join->on('jabatan_gaji.id_gaji', '=', 'gaji.id');
                    //                                     });
                                                        
                    //                                 });
                    //                             })->orderBy('jabatan_gaji.id', 'DESC')
                    //                             // ->select('absensi.jam_masuk AS tag_name')
                    //                             // ->get(); ->orderBy('jabatan_gaji.id', 'desc')
                    //                             ->where('tanggal', $data_dahboard_kpi)->orderBy('gaji.id', 'desc')->get();


                    $data['dahboard_karyawan_kpi'] = DB::table('absensi')
                                                                            // ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,'jabatan.*', 'gaji.*',
                                                                            ->select('karyawan.tanggal_join AS tanggal_masuk','akun.nik AS nip','absensi.tanggal AS tgl_absen', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' , 'gaji.*' , 'tunjangan.*' , 'insentif_kurir.*' , 'insentif_kpi.*' , 'orang_kpi.*'  , 'rp_kpi.*' ,
                  
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
                                                                            });
                                                                        })->leftjoin('insentif_kpi', function($join){
                                                                            $join->on('akun.id', '=', 'insentif_kpi.id_akun');
                                                                        })
                                                                        ->leftjoin('tunjangan', function($join){
                                                                                            $join->on('akun.id', '=', 'tunjangan.id_akun');
                                                                                        })
                                                                        ->leftjoin('insentif_kurir', function($join){
                                                                            $join->on('akun.id', '=', 'insentif_kurir.id_akun');
                                                                        })
                                                                        ->leftjoin('orang_kpi', function ($join) {
                                                                            $join->on('akun.id', '=', 'orang_kpi.id_akun')
                                                                            ->join('rp_kpi', function ($join) {
                                                                                $join->on('orang_kpi.id_rp_kpi', '=', 'rp_kpi.id');
                                                                            });
                                                                        })

                                                                        ->leftjoin('karyawan', function($join){
                                                                            $join->on('akun.id', '=', 'karyawan.id_akun');
                                                                        })
                                                                        // ->leftjoin('insentif_kpi', function($join){
                                                                        //     $join->on('akun.id', '=', 'insentif_kpi.id_akun');
                                                                        // })
                                                                        // ->where('jabatan_gaji.id', \DB::raw("(select max(`id`) from jabatan_gaji)"))
                                                                        // ->where('jabatan_gaji.id',  DB::raw('(SELECT id FROM jabatan_gaji LIMIT 1)'))
                                                                        // ->orderBy('jabatan_gaji.created_at', 'desc')
                                                                        ->groupBy('absensi.id_akun')
                                                                        ->groupBy('tanggal')
                                                                        ->where('tanggal', $data_dahboard_kpi)->get();
                                                                        
                                                                        $data['deleteJabatanGaji'] = Absensi::orderBy('tanggal','desc')->first(); 
                    //  echo $data['dahboard_karyawan_kpi'] = DB::table('absensi')
                    //     ->select('akun.nik AS nip','absensi.tanggal AS tgl_absen', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' , 'gaji.*' , 'tunjangan.*' , 'insentif_kurir.*' , 'insentif_kpi.*' , 'orang_kpi.*'  , 'rp_kpi.*' 
                    //     // ->select( 'orang_kpi.*' , 'rp_kpi.*' 
                    //     // , 'insentif_kurir.*' , 'insentif_kpi.*' 
                    //     ,
                    //             DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS sum_a"),
                    //             DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                    //             DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                    //             DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                    //         )

                    //         ->join('akun', function ($join) {
                    //             $join->on('absensi.id_akun', '=', 'akun.id')
                                
                    //             ->leftjoin('insentif_kurir', function($join){
                    //                 $join->on('akun.id', '=', 'insentif_kurir.id_akun');
                    //             })
                    //             ->leftjoin('insentif_kpi', function($join){
                    //                 $join->on('akun.id', '=', 'insentif_kpi.id_akun');
                    //             })
                    //             ->join('data_diri', function ($join) {
                    //                 $join->on('akun.id', '=', 'data_diri.id_akun');
                    //             })

                                
                                
                    //             ->join('jabatan_gaji', function ($join) {
                    //                 $join->on('akun.id', '=', 'jabatan_gaji.id_akun')
                    //                 ->join('jabatan', function ($join) {
                    //                     $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');
                    //                 })
                    //                 ->join('gaji', function ($join) {
                    //                     $join->on('jabatan_gaji.id_gaji', '=', 'gaji.id');
                    //                 });
                    //             })

                    //             ->join('tunjangan', function($join){
                    //                 $join->on('akun.id', '=', 'tunjangan.id_akun');
                    //             })

                    //             ->join('orang_kpi', function ($join) {
                    //                 $join->on('akun.id', '=', 'orang_kpi.id_akun')
                    //                 ->join('rp_kpi', function ($join) {
                    //                     $join->on('orang_kpi.id_rp_kpi', '=', 'rp_kpi.id');
                    //                 });
                    //             })
                                
                    //             ;
                    //         })

                    //         // ->where('jabatan_gaji.id', \DB::raw("(select max(`id`) from jabatan_gaji)"))
                    //         // ->where('tunjangan.created_at', \DB::raw("(select max(`created_at`) from tunjangan)"))
                    //         // ->where('insentif_kurir.created_at', \DB::raw("(select max(`created_at`) from insentif_kurir)"))
                    //         // ->where('insentif_kpi.created_at', \DB::raw("(select max(`created_at`) from insentif_kpi)"))

                    //         // ->orderBy('jabatan_gaji.id_jabatan', 'desc')
                            
                    //         ->groupBy('absensi.id_akun')
                    //         ->groupBy('absensi.tanggal')
                    //         ->where('absensi.tanggal', $data_dahboard_kpi)->get();

                }
              
            }else{
                // $data['dahboard_karyawan_kpi'] = Absensi::with([
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
                //     ])->orderBy('tanggal','desc')->get();

                $data['dahboard_karyawan_kpi'] = DB::table('absensi')
                                                                        // ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,'jabatan.*', 'gaji.*',
                                                                        ->select('karyawan.tanggal_join AS tanggal_masuk','akun.nik AS nip','absensi.tanggal AS tgl_absen', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' , 'gaji.*' , 'tunjangan.*' , 'insentif_kurir.*' , 'insentif_kpi.*' , 'orang_kpi.*'  , 'rp_kpi.*' ,

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
                                                                        });
                                                                    })->leftjoin('insentif_kpi', function($join){
                                                                        $join->on('akun.id', '=', 'insentif_kpi.id_akun');
                                                                    })
                                                                    ->leftjoin('tunjangan', function($join){
                                                                                        $join->on('akun.id', '=', 'tunjangan.id_akun');
                                                                                    })
                                                                    ->leftjoin('insentif_kurir', function($join){
                                                                        $join->on('akun.id', '=', 'insentif_kurir.id_akun');
                                                                    })
                                                                    ->leftjoin('orang_kpi', function ($join) {
                                                                        $join->on('akun.id', '=', 'orang_kpi.id_akun')
                                                                        ->join('rp_kpi', function ($join) {
                                                                            $join->on('orang_kpi.id_rp_kpi', '=', 'rp_kpi.id');
                                                                        });
                                                                    })

                                                                    ->leftjoin('karyawan', function($join){
                                                                        $join->on('akun.id', '=', 'karyawan.id_akun');
                                                                    })
                                                                    // ->leftjoin('insentif_kpi', function($join){
                                                                    //     $join->on('akun.id', '=', 'insentif_kpi.id_akun');
                                                                    // })
                                                                    // ->where('jabatan_gaji.id', \DB::raw("(select max(`id`) from jabatan_gaji)"))
                                                                    // ->where('jabatan_gaji.id',  DB::raw('(SELECT id FROM jabatan_gaji LIMIT 1)'))
                                                                    // ->orderBy('jabatan_gaji.created_at', 'desc')
                                                                    ->groupBy('absensi.id_akun')
                                                                    ->groupBy('tanggal')
                                                                    ->where('tanggal', $data_dahboard_kpi)->get();
            
                $data['deleteJabatanGaji'] = Absensi::orderBy('tanggal','desc')->first(); 

        
            }

        return view('admin.tema-satu.home.karyawan.tab-laporan.gaji.menu-gaji', $data);
    }
}
