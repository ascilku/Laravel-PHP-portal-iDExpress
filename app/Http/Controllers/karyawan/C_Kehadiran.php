<?php

namespace App\Http\Controllers\karyawan;

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
                $id_akun = $data['dahboard_akun_cookie']->id;
            }
            $data['dahboard_kpi'] = Absensi::orderBy('tanggal','desc')->first();
            $hasilnya = array();
            
            if ($key == 'new-kehadiran') {
                # code...
                // $data['dahboard_kpi'] = Absensi::orderBy('tanggal','desc')->distinct()->select('tanggal')->get();
                // $data['dahboard_kpi'] = Absensi::orderBy('tanggal','desc')->distinct()->count('tanggal');
                
                if (isset($data['dahboard_kpi'])) {
                    $data_dahboard_kpi = $data['dahboard_kpi']->tanggal;
                  

       

                    $data['dahboard_karyawan_kpi'] = DB::table('absensi')
                                        ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,'jabatan.*', 'gaji.*',
                                        
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
                                            })
                                            ->leftJoin('gaji', function ($join) {
                                                $join->on('jabatan_gaji.id_gaji', '=', 'gaji.id');
                                            })
                                            ;
                                        });
                                    })
                                    ->groupBy('absensi.id_akun')
                                    ->where('tanggal', $data_dahboard_kpi)->where('absensi.id_akun', $id_akun)->get();
                }
              
            }else{
             

                $data['dahboard_karyawan_kpi'] = DB::table('absensi')
                                                                            ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,'jabatan.*', 'gaji.*',
                                                                          
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
                                                                                    $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');   })
                                                                                ->leftJoin('gaji', function ($join) {
                                                                                    $join->on('jabatan_gaji.id_gaji', '=', 'gaji.id');
                                                                                });
                                                                            });
                                                                        })
                                                                        ->groupBy('absensi.id_akun')
                                                                        ->groupBy('tanggal')
                                                                        ->where('absensi.id_akun', $id_akun)
                                                                        ->get();
                                                                        
        
            }

            return view('admin.tema-satu.home.karyawan.tab-absensi-perkaryawan.menu-absensi', $data);
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
