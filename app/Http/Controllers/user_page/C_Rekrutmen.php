<?php

namespace App\Http\Controllers\user_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Akun                               as Akun;
use App\Models\rekrutmen\M_DataDiri                 as DataDiri;
use App\Models\rekrutmen\M_Pendidikan_Formal        as Pendidikan_Formal;
use App\Models\rekrutmen\M_Pendidikan_Non_Formal    as Pendidikan_Non_Formal;
use App\Models\rekrutmen\M_Uplod_File               as Uplod_File;
use App\Models\rekrutmen\M_Lowongan_Kerja           as Lowongan_Kerja;
use App\Models\rekrutmen\M_Data_Orang_Tua           as Data_Orang_Tua;
use App\Models\rekrutmen\M_Aply_Lowongan            as Aply_Lowongan;

class C_Rekrutmen extends Controller
{
    //
    public function index()
    {
        
        if(!isset($_COOKIE['date-cookie-storage-user']) && !isset($_COOKIE['cookie-storage-user'])){
            return redirect('login-user');
        }else{
            $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage-user']));
            $date_now = date('d-m-Y');
            $today_time = strtotime($date_now);
            $expire_time = strtotime($expired);

                if ($today_time >= $expire_time) {
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
                        }else{
                            unset($_COOKIE['cookie-storage-user']);    
                            setcookie('cookie-storage-user', null, -1, '/'); 
                            
                            unset($_COOKIE['date-cookie-storage-user']);    
                            $logout_unset_cookie = setcookie('date-cookie-storage-user', null, -1, '/'); 

                            if($logout_unset_cookie){
                                
                                return redirect('login-user');
                            } 
                        }
                }else{
                    $login_akun_cookie = Akun::where('token', $_COOKIE['cookie-storage-user'])->first();
                        if (isset($login_akun_cookie)) {
                            $rekrutment_id_akun = $login_akun_cookie->id;
                            $data['rekrutment_nik_akun'] = $login_akun_cookie->nik;
                            $data['rekrutment_email_akun'] = $login_akun_cookie->email;
                            
                            // ========================== query data diri ===========================

                            $data['rekrutment_data_diri'] = DataDiri::where('id_akun', $rekrutment_id_akun)->first();

                            // ========================== query data pendidikan formal ===========================

                            $data['rekrutment_pendidikan_formal'] = Pendidikan_Formal::where('id_akun', $rekrutment_id_akun)->get();

                            // ========================== query data pendidikan non formal ===========================

                            $data['rekrutment_pendidikan_non_formal'] = Pendidikan_Non_Formal::where('id_akun', $rekrutment_id_akun)->get();

                            // ========================== query data lowomgam kerja ==================================

                            $data['rekrutment_lowongan_kerja'] = Lowongan_Kerja::with('perusahaan')->orderBy('id', 'DESC')->get();
                            
                            // ========================== query upload file ==========================================


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
                            
                            // ========================== query data orang tua ==========================================

                            $data['rekrutment_data_orang_tua']      = Data_Orang_Tua::where('id_akun', $rekrutment_id_akun)
                                                                                    ->where('hubungan', 'AYAH')
                                                                                    ->first();

                            $data['rekrutment_data_ibu']            = Data_Orang_Tua::where('id_akun', $rekrutment_id_akun)
                                                                                    ->where('hubungan', 'IBU')
                                                                                    ->first();

                            $data['rekrutment_data_wali']           = Data_Orang_Tua::where('id_akun', $rekrutment_id_akun)
                                                                                    ->where('hubungan', 'WALI')
                                                                                    ->first();

                            $data['rekrutment_Aply_Lowongan'] = Aply_Lowongan::where('id_akun', $rekrutment_id_akun)
                                                                                    // ->where('status', 'Buka')
                                                                                    ->first();
                            
                            return view('user.rekrutmen.rekrutmen', $data);
                                                                    // echo $rekrutment_lowongan_kerja->perusahaan->id;
                        }else{
                            unset($_COOKIE['date-cookie-storage-user']);    
                            setcookie('date-cookie-storage-user', null, -1, '/'); 

                            unset($_COOKIE['cookie-storage-user']);    
                            $logout_unset_cookie = setcookie('cookie-storage-user', null, -1, '/'); 
                                if($logout_unset_cookie){
                                    return redirect('login-user');
                                } 
                        }
                }

            
        }
        
    }

    
}
