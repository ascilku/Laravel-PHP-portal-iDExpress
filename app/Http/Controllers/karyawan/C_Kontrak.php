<?php

namespace App\Http\Controllers\karyawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Karyawan                 as Karyawan;
use App\Models\admin\M_Kontrak                  as Kontrak;

use App\Models\rekrutmen\M_DataDiri                 as DataDiri;
use App\Models\rekrutmen\M_Data_Orang_Tua           as Data_Orang_Tua;
use App\Models\rekrutmen\M_Uplod_File               as Uplod_File;
use App\Models\rekrutmen\M_Pendidikan_Formal        as Pendidikan_Formal;

use App\Models\admin\M_Tunjangan                as Tunjangan;

use Session;

class C_Kontrak extends Controller
{
    public function kontrak($key, Request $request)
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

                       

                            $data['dahboard_akun_cookie'] = Akun::where('token', $_COOKIE['cookie-storage'])
                                                                                                                        ->with([
                                                                                                                            'perusahaan' => function($query){
                                                                                                                                return $query->with('data_perusahaan');
                                                                                                                            }

                                                                                                                        ])
                                                                                                                        ->with('akses')->with('data_diri')->with('perusahaan')
                                                                                                                    ->first();
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
                               

                     

                                    $data['dahboard_kontrak'] = Kontrak::
                                                                            with([
                                                                                'akun' => function($query){
                                                                                    return $query->with('data_diri');
                                                                                }])
                                                                                ->with([
                                                                                    'pkwt' => function($query){
                                                                                        return $query->with('rwy_tunjangan_pkwt')
                                                                                                    ->with([
                                                                                                        'riw_jabatan_gaji' => function($query){
                                                                                                            return $query->with('jabatan')
                                                                                                                            ->with('gaji');
                                                                                                        }
                                                                                                    ])
                                                                                                    ->with([
                                                                                                        'penempatan_wilayah_riw' => function($query){
                                                                                                            return $query->with('penempatan');
                                                                                                        }
                                                                                                    ]);
                                                                                    }
                                                                                ])
                                                                                ->where('id_akun', $id_akun)->orderBy('id', 'desc')->get();
                                                                                                                    // ->where('status_data', 'Aktif')->get();
                                                                            
                                    $data['dahboard_kontrak_id'] = Kontrak::where('id_akun', $id_akun)->orderBy('id', 'desc')->first();

                                
                                                        
                                    return view('admin.tema-satu.home.karyawan.tab-kontrak-perkaryawan.master-kontrak ', $data);
                                }else{
                                    Session::flash('alert-peringatan', 'Harap Mengisi Lengkap Data karyawannya.');
                                    return redirect('dashboard-panel');
                                }
                        
                    }
        }
    }
}
