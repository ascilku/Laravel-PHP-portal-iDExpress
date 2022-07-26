<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\M_Karyawan                 as Karyawan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Data_Karyawan            as Data_Karyawan;
use App\Models\admin\M_Riw_Penempatan_Wilayah   as Riw_Penempatan_Wilayah;
use App\Models\M_Akses;
use App\Models\rekrutmen\M_Aply_Lowongan        as Aply_Lowongan;

use Session;
use Crypt;

use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\Mail;

class C_Master_Karyawan extends Controller
{
    //

    public function statusKepegawaian(Request $request)
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
      
                        $statusKepegawaian_id               = Crypt::decrypt($request->input('id'));
                        $statusKepegawaian_id_akun          = Crypt::decrypt($request->input('id_akun'));
                        $statusKepegawaian_status           = Crypt::decrypt($request->input('status'));
                        $statusKepegawaian_key              = Crypt::decrypt($request->input('key'));

                            if ($statusKepegawaian_status == 'Aktif') {
                                if ($statusKepegawaian_key == 'Resign') {
                                    $data = $statusKepegawaian_key;

                                    $statusKepegawaian_karyawan                             = Karyawan::find($statusKepegawaian_id);
                                    $statusKepegawaian_karyawan->status_data               = $data;
                                    $statusKepegawaian_karyawan->save();

                                    $statusKepegawaian_akun                             = Akun::find($statusKepegawaian_id_akun);
                                    $statusKepegawaian_akun->status               = 'tidak';
                                    $statusKepegawaian_akun->save();

                                    Session::flash('alert-success-karyawan', 'Resign Karyawan Berhasil.');
                                    return redirect("dashboard-panel/karyawan/resign");
                                    
                                }else if($statusKepegawaian_key == 'Tidak Aktif'){
                                    $data = $statusKepegawaian_key;
                                    $statusKepegawaian_karyawan                             = Karyawan::find($statusKepegawaian_id);
                                    $statusKepegawaian_karyawan->status_data               = $data;
                                    $statusKepegawaian_karyawan->save();

                                    $statusKepegawaian_akun                             = Akun::find($statusKepegawaian_id_akun);
                                    $statusKepegawaian_akun->status               = 'tidak';
                                    $statusKepegawaian_akun->save();

                                    Session::flash('alert-success-karyawan', 'Berhasil Non Aktifkan Karyawan.');
                                    return redirect('dashboard-panel/karyawan/non-aktif');
                                }else if($statusKepegawaian_key == 'Hapus'){
                                    $post = Akun::find($statusKepegawaian_id); 
                                    $post->delete();
                                    Session::flash('alert-success-karyawan', 'Berhasil Delete Karyawan.');
                                    return redirect('dashboard-panel/karyawan/aktif');
                                }

                            
                            }
                            else if($statusKepegawaian_status == 'Semua'){
                                if($statusKepegawaian_key == 'Hapus'){
                                    $post = Akun::find($statusKepegawaian_id); 
                                    $post->delete();
                                    Session::flash('alert-success-karyawan', 'Berhasil Delete Karyawan.');
                                    return redirect('dashboard-panel/karyawan/semua');
                                }
                            }else if($statusKepegawaian_status == 'Resign'){
                                if($statusKepegawaian_key == 'Aktif'){
                                    $data = $statusKepegawaian_key;

                                    $statusKepegawaian_karyawan                             = Karyawan::find($statusKepegawaian_id);
                                    $statusKepegawaian_karyawan->status_data               = $statusKepegawaian_key;
                                    $statusKepegawaian_karyawan->save();

                                    $statusKepegawaian_akun                             = Akun::find($statusKepegawaian_id_akun);
                                    $statusKepegawaian_akun->status               = 'aktif';
                                    $statusKepegawaian_akun->save();

                                    Session::flash('alert-success-karyawan', 'Aktif Karyawan Berhasil.');
                                    return redirect('dashboard-panel/karyawan/aktif');
                                }else{
                                    $post = Akun::find($statusKepegawaian_id_akun); 
                                    $post->delete();
                                    Session::flash('alert-success-karyawan', 'Berhasil Delete Karyawan.');
                                    return redirect('dashboard-panel/karyawan/resign');
                                }
                            }else if($statusKepegawaian_status == 'Non'){
                                if($statusKepegawaian_key == 'Aktif'){
                                    $data = $statusKepegawaian_key;

                                    $statusKepegawaian_karyawan                             = Karyawan::find($statusKepegawaian_id);
                                    $statusKepegawaian_karyawan->status_data               = $statusKepegawaian_key;
                                    $statusKepegawaian_karyawan->save();

                                    $statusKepegawaian_akun                             = Akun::find($statusKepegawaian_id_akun);
                                    $statusKepegawaian_akun->status               = 'aktif';
                                    $statusKepegawaian_akun->save();

                                    Session::flash('alert-success-karyawan', 'Berhasil Aktif Karyawan.');
                                    return redirect('dashboard-panel/karyawan/aktif');
                                }else if($statusKepegawaian_key == 'Resign'){
                                    $data = $statusKepegawaian_key;

                                    $statusKepegawaian_karyawan                             = Karyawan::find($statusKepegawaian_id);
                                    $statusKepegawaian_karyawan->status_data               = $data;
                                    $statusKepegawaian_karyawan->save();

                                    $statusKepegawaian_akun                             = Akun::find($statusKepegawaian_id_akun);
                                    $statusKepegawaian_akun->status               = 'tidak';
                                    $statusKepegawaian_akun->save();

                                    Session::flash('alert-success-karyawan', 'Resign Karyawan Berhasil.');
                                    return redirect('dashboard-panel/karyawan/resign');
                                }else{
                                    $post = Akun::find($statusKepegawaian_id_akun); 
                                    $post->delete();
                                    Session::flash('alert-success-karyawan', 'Berhasil Delete Karyawan.');
                                    return redirect('dashboard-panel/karyawan/non-aktif');
                                }
                            }
                    }
        }
         
    }

    public function statusAkun(Request $request)
    {    
                    $type = Akun::find($request->id_status);

                    $type->update([
                        'status' => $request->name,
                    ]);
    }
    // $request->data_id
    public function detailKaryawan(Request $request)
    {    
        // $type = Akun::find($request->data_id);

        // $type->update([
        //     'nik' => "11",
        // ]);
        
                    $detail_karyawan = Akun::where('id',$request->data_id)->first();
                    // return view('admin.tema-satu.dashboard', $data);
                    // return view('admin.tema-satu.dashboard', $detail_karyawan);
                                    

    }

    public function createKaryawanRecruitment(Request $request)
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
                                        
                        $data['dahboard_akun_cookie'] = Akun::where('token', $_COOKIE['cookie-storage'])->first();

                        $createKaryawanRecruitment_nik                  = $request->input('nik');
                        $createKaryawanRecruitment_id                   = $request->input('id_akun');
                        $createKaryawanRecruitment_id_akses             = $request->input('id_akses');
                        $createKaryawanRecruitment_id_perusahaan        = $request->input('id_perusahaan');
                        $createKaryawanRecruitment_dingtalk             = $request->input('dingtalk');
                        $createKaryawanRecruitment_no_rek               = $request->input('no_rek');
                        $createKaryawanRecruitment_bank                 = $request->input('bank');
                        $createKaryawanRecruitment_kode                 = $request->input('kode');

                        
                        $Akun                = Akun::where('nik', $createKaryawanRecruitment_nik)->orderBy('id', 'DESC')->first();

                            if (!isset($Akun)) {
                                $createKaryawanRecruitment_Akses                = M_Akses::where('akses', 'Karyawan')->orderBy('id', 'DESC')->first();
                                $verifikasiEmail_randomPassword = "Karyawan"."_".rand(1000,99999);
                                
                                
                                

                                    if (!isset($createKaryawanRecruitment_Akses)) {

                                        $Seeder_AkunIT_Akses                = new M_Akses();
                                            $Seeder_AkunIT_Akses->akses     = 'Karyawan';
                                        $Seeder_AkunIT_Akses->save();

                                        $statusKepegawaian_akun                        = Akun::find($createKaryawanRecruitment_id);
                                            $statusKepegawaian_akun->id_akses          = $Seeder_AkunIT_Akses->id;
                                            $statusKepegawaian_akun->id_perusahaan     = $data['dahboard_akun_cookie']->id_perusahaan;
                                            $statusKepegawaian_akun->nik               = $createKaryawanRecruitment_nik;
                                            $statusKepegawaian_akun->password          = Hash::make($verifikasiEmail_randomPassword);
                                            $statusKepegawaian_akun->show_pass         = $verifikasiEmail_randomPassword;
                                        $statusKepegawaian_akun->save();

                                    }else{
                                        $statusKepegawaian_akun                             = Akun::find($createKaryawanRecruitment_id);
                                            $statusKepegawaian_akun->id_akses               = $createKaryawanRecruitment_Akses->id;
                                            $statusKepegawaian_akun->id_perusahaan          = $data['dahboard_akun_cookie']->id_perusahaan;
                                            $statusKepegawaian_akun->nik                    = $createKaryawanRecruitment_nik;
                                            $statusKepegawaian_akun->password               = Hash::make($verifikasiEmail_randomPassword);
                                            $statusKepegawaian_akun->show_pass              = $verifikasiEmail_randomPassword;
                                        $statusKepegawaian_akun->save();

                                    }

                                        

                                        $santri = Aply_Lowongan::where('id_akun', $createKaryawanRecruitment_id)
                                                            ->update([
                                                                'status' => "Tidak",
                                                            ]);

                                        $createKaryawanRecruitment_Karyawan = new Karyawan();
                                            $createKaryawanRecruitment_Karyawan->id_akun         = $createKaryawanRecruitment_id;
                                            $createKaryawanRecruitment_Karyawan->status_data         = 'Aktif';
                                            $createKaryawanRecruitment_Karyawan->tanggal_join        = date('Y-m-d');
                                        $createKaryawanRecruitment_Karyawan->save();

                                        $createKaryawanRecruitment_Data_Karyawan = new Data_Karyawan();
                                            $createKaryawanRecruitment_Data_Karyawan->id_akun               = $createKaryawanRecruitment_id;
                                            $createKaryawanRecruitment_Data_Karyawan->dingtalk              = $createKaryawanRecruitment_dingtalk;
                                            $createKaryawanRecruitment_Data_Karyawan->norek                 = $createKaryawanRecruitment_no_rek;
                                            $createKaryawanRecruitment_Data_Karyawan->bank                  = $createKaryawanRecruitment_bank;
                                            $createKaryawanRecruitment_Data_Karyawan->kode_bank             = $createKaryawanRecruitment_kode;
                                        $createKaryawanRecruitment_Data_Karyawan->save();

                                        $email_ = $statusKepegawaian_akun->email;
                                        $data = array(
                                            'nik'               => $createKaryawanRecruitment_nik,
                                            'password'          => $verifikasiEmail_randomPassword
                                        );
                                        
                                        Mail::send('pesan-email-perusahaan', $data, function($message) use ($email_){
                                        $message->to($email_, 'Pesan Akun')->subject('Pesan Verifikasi Akun');
                                        $message->from('itpthitcelebes24@gmail.com', 'Staff HRD PT Indokaisa Triasa Group (ID EXPRESS)');
                                        });


                                            
                                            Session::flash('alert-success-karyawan', 'Berhasil Menambahkan Dari User Ke Karyawan.!!');
                                            return redirect('dashboard-panel/karyawan/aktif');
                            }else{
                                Session::flash('alert-peringatan', 'Nik Sudah Ada.!!');
                                return redirect('dashboard-panel/lowongan-pekerjaan');
                            }
                    }
        }
    }
}
