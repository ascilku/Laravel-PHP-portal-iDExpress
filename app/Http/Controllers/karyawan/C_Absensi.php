<?php

namespace App\Http\Controllers\karyawan;

use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Absensi                  as Absensi;

use App\Models\rekrutmen\M_DataDiri                 as DataDiri;
use App\Models\rekrutmen\M_Data_Orang_Tua           as Data_Orang_Tua;
use App\Models\rekrutmen\M_Uplod_File               as Uplod_File;
use App\Models\rekrutmen\M_Pendidikan_Formal        as Pendidikan_Formal;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Create_Absensi;

use Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Absensi extends Controller
{
    //


    public function absensiData($key){
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
                                            
        $aplyPekerjaan_data_diri = DataDiri::where('id_akun', $id_akun)->first();

        // ========================== query data orang tua ==========================================

        $rekrutment_data_orang_tua      = Data_Orang_Tua::where('id_akun', $id_akun)
                                                                ->first();

        // ========================== query upload file ==========================================

        $rekrutment_ktp                 = Uplod_File::where('id_akun', $id_akun)
                                                                ->first();
                                                                
        // ========================== query data pendidikan formal ===========================

        $rekrutment_pendidikan_formal = Pendidikan_Formal::where('id_akun', $id_akun)->first();


            if ($aplyPekerjaan_data_diri && $rekrutment_data_orang_tua && $rekrutment_ktp && $rekrutment_pendidikan_formal) {
                $data['key'] = $key;

            

                        if ($key == 'new') {  
                            
                        
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
                                ])->orderBy('tanggal','desc')->where('id_akun', $id_akun)->get();
                    
                        }
                    

                return view('admin.tema-satu.home.karyawan.tab-absensi-perkaryawan.menu-absensi', $data);
            }else{
                Session::flash('alert-peringatan', 'Harap Mengisi Lengkap Data karyawannya.');
                return redirect('dashboard-panel');
            }
    }

}
