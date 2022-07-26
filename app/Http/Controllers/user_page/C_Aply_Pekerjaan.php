<?php

namespace App\Http\Controllers\user_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Crypt;
use Session;

use App\Models\M_Akun                               as Akun;
use App\Models\rekrutmen\M_DataDiri                 as DataDiri;
use App\Models\rekrutmen\M_Pendidikan_Formal        as Pendidikan_Formal;
use App\Models\rekrutmen\M_Pendidikan_Non_Formal    as Pendidikan_Non_Formal;
use App\Models\rekrutmen\M_Uplod_File               as Uplod_File;
use App\Models\rekrutmen\M_Lowongan_Kerja           as Lowongan_Kerja;
use App\Models\rekrutmen\M_Data_Orang_Tua           as Data_Orang_Tua;
use App\Models\rekrutmen\M_Aply_Lowongan            as Aply_Lowongan;

class C_Aply_Pekerjaan extends Controller
{
    //
    public function aplyPekerjaan($id,$id_perusahaan)
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

                        $insertData_cookie = Akun::where('token', $_COOKIE['cookie-storage-user'])->first();
                            if ($insertData_cookie) {
                                $id_akun = $insertData_cookie->id;

                                    $cv_Aply_Lowongan = Aply_Lowongan::where('id_akun', $id_akun)->first();
                                    
                                    // if ($cv_Aply_Lowongan->status == 'Buka') {
                                    //     Session::flash('alert-peringatan', 'Hanya di Perbolehkan 1 Kali Aply Lowongan dalam Satu Kali Proses Rekrutmen.');
                                    //     return redirect('rekrutmen?halaman=lowongan');
                                    // }else{

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
                                                $course_id = Crypt::decrypt($id); 
                                                $id_perusahaan = Crypt::decrypt($id_perusahaan); 

                                                $Aply_Lowongan_ = Aply_Lowongan::where('id_akun', $id_akun)->first();

                                                    if (!isset($Aply_Lowongan_)) {
                                                            $insertData_data_aply_lowongan = new Aply_Lowongan();
                                                                    $insertData_data_aply_lowongan->id_akun               = $id_akun;
                                                                    $insertData_data_aply_lowongan->id_perusahaan         = $id_perusahaan;
                                                                    $insertData_data_aply_lowongan->id_lowongan_kerja     = $course_id;
                                                                    $insertData_data_aply_lowongan->keterangan            = "Terimah Kasih Sudah Aply Pekerjaan, Silahkan Pantau Informasi Pemanggilan atau Kelulusan di Website Ini Atau Email Ini.!!";
                                                            $insertData_data_aply_lowongan->save();

                                                            

                                                            Session::flash('alert-success', 'Aply Lowongan.');
                                                            return redirect('rekrutmen/?halaman=lowongan');
                                                    }else{

                                                    

                                                
                                                        if ($Aply_Lowongan_->status == "Buka") {
                                                            Session::flash('alert-peringatan', '..! Hanya Boleh Melakukan 1 Apply Lowongan.');
                                                            return redirect('rekrutmen/?halaman=lowongan');
                                                        }elseif ($Aply_Lowongan_->status == "Expired") {

                                                            $insertData_data_aply_lowongan = new Aply_Lowongan();
                                                                    $insertData_data_aply_lowongan->id_akun               = $id_akun;
                                                                    $insertData_data_aply_lowongan->id_perusahaan         = $id_perusahaan;
                                                                    $insertData_data_aply_lowongan->id_lowongan_kerja     = $course_id;
                                                                    $insertData_data_aply_lowongan->keterangan            = "Terimah Kasih Sudah Aply Pekerjaan, Silahkan Pantau Informasi Pemanggilan atau Kelulusan di Website Ini Atau Email Ini.!!";
                                                            $insertData_data_aply_lowongan->save();

                                                            

                                                            Session::flash('alert-success', 'Aply Lowongan.');
                                                            return redirect('rekrutmen/?halaman=lowongan');
                                                        }
                                                    }
                                            }else{
                                                Session::flash('alert-peringatan', 'Anda Harus Mengisi Data di Item Data Diri.');
                                                return redirect('rekrutmen/?halaman=lowongan');
                                            }
                                    // }
                                
                            }
                        
                    }
        }
        
    }

    public function createPesan(Request $request)
    {
        

        $createAkunAkses_Aply_Lowongan                = Aply_Lowongan::find($request->input('data_id_aply'));
            $createAkunAkses_Aply_Lowongan->keterangan     = $request->input('pesan');
        $createAkunAkses_Aply_Lowongan->save();

        Session::flash('alert-success', 'Kirim Pesan.');
        return redirect('dashboard-panel/lowongan-pekerjaan');
    }

    public function createStatus(Request $request)
    {
        $course_id = Crypt::decrypt($request->input('id')); 
        $createAkunAkses_Aply_Lowongan                = Aply_Lowongan::find($course_id);
            $createAkunAkses_Aply_Lowongan->status     = 'Expired';
        $createAkunAkses_Aply_Lowongan->save();

        Session::flash('alert-success-karyawan', 'Berhasil Mengubah Status.');
        return redirect('dashboard-panel/lowongan-pekerjaan');
    }
}
