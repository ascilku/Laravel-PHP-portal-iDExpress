<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use Session;
use Crypt;
use File;
use Illuminate\Support\Facades\Mail;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Create_Karyawan;

use App\Models\M_Akses              as Akses;

use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Karyawan                 as Karyawan;
use App\Models\admin\M_Jabatan                  as Jabatan;
use App\Models\admin\M_Gaji                     as Gaji;
use App\Models\admin\M_Jabatan_Gaji             as Jabatan_Gaji;
use App\Models\admin\M_Riw_Penempatan_Wilayah   as Riw_Penempatan_Wilayah;
use App\Models\admin\M_Penempatan               as Penempatan;
use App\Models\rekrutmen\M_DataDiri             as DataDiri;
use App\Models\admin\M_Data_Karyawan            as Data_Karyawan;

use App\Models\rekrutmen\M_Lowongan_Kerja       as Lowongan_Kerja;

class C_Karyawan extends Controller
{

    public function karyawan()
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
                                        
                        $data['dahboard_akun_cookie'] = Akun::where('token', $_COOKIE['cookie-storage'])
                                                                                                                    ->with([
                                                                                                                        'perusahaan' => function($query){
                                                                                                                            return $query->with('data_perusahaan');
                                                                                                                        }

                                                                                                                    ])
                                                                                                                    ->with('akses')->with('data_diri')->with('perusahaan')
                                                                                                                ->first();

                        return view('admin.tema-satu.home.karyawan.karyawan', $data);
                    }
        }
    }

    public function createDataKaryawan(Request $request){

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

                        $akun  = Akun::where('token', $_COOKIE['cookie-storage'])->first();
                                        
                        $id_data_diri                  = $request->input('id_data_diri');

                        $insertData_nama_lengkap            = $request->input('nama_lengkap');
                        $insertData_nama_panggil            = $request->input('nama_panggil');
                        $insertData_tempat_lahir            = $request->input('tempat_lahir');
                        $insertData_tanggal_lahir           = $request->input('tanggal_lahir');
                        $insertData_nik                     = $request->input('nik');
                        $insertData_email                   = $request->input('email');
                        $insertData_agama                   = $request->input('agama');
                        $insertData_jenis_kelamin           = $request->input('jenis_kelamin');
                        $insertData_status_kawin            = $request->input('status_kawin');
                        $insertData_no_bpjs                 = $request->input('no_bpjs');
                        $insertData_tinggi_badan            = $request->input('tinggi_badan');
                        $insertData_berat_badan             = $request->input('berat_badan');
                        $insertData_golongan_darah          = $request->input('golongan_darah');
                        $insertData_suku                    = $request->input('suku');
                        $insertData_total_saudara           = $request->input('total_saudara');
                        $insertData_alamat_ktp              = $request->input('alamat_ktp');
                        $insertData_provinsi_ktp            = $request->input('provinsi_ktp');
                        $insertData_kota_ktp                = $request->input('kota_ktp');
                        $insertData_kabupaten_ktp           = $request->input('kabupaten_ktp');
                        $insertData_kecamatan_ktp           = $request->input('kecamatan_ktp');
                        $insertData_kelurahan_ktp           = $request->input('kelurahan_ktp');
                        $insertData_kode_pos_ktp            = $request->input('kode_pos_ktp');
                        $insertData_alamat_domisili         = $request->input('alamat_domisili');
                        $insertData_provinsi_domisili       = $request->input('provinsi_domisili');
                        $insertData_kota_domisili           = $request->input('kota_domisili');
                        $insertData_kabupaten_domisili      = $request->input('kabupaten_domisili');
                        $insertData_kecamatan_domisili      = $request->input('kecamatan_domisili');
                        $insertData_kelurahan_domisili      = $request->input('kelurahan_domisili');
                        $insertData_instagram               = $request->input('instagram');

                        $insertData_fb                      = $request->input('fb');
                        $insertData_linkedin                = $request->input('linkedin');
                        $insertData_twitter                 = $request->input('twitter');

                        // $insertData_no_wa                   = $request->input('no_wa');
                        // $insertData_no_hp                   = $request->input('no_hp');

                        $nomor_wa                     = $request->input('no_wa');
                        $insertData_no_wa = ltrim($nomor_wa, '0');

                        $nomor_hp                     = $request->input('no_hp');
                        $insertData_no_hp = ltrim($nomor_hp, '0'); 

                        
                        
                        $insertData_cerita_diri             = $request->input('cerita_diri');
                        


                        $insertData_foto_profil             = $request->file('foto_profil');

                        if ($insertData_foto_profil != "") {

                            $insertPendidikanFormal_getSize_foto_profil          = $insertData_foto_profil->getSize(); // 1000000 byte == 1 MB
                            $insertPendidikanFormal_fileGambar_foto_profil       = $insertData_foto_profil->getClientOriginalExtension();

                            if($insertPendidikanFormal_fileGambar_foto_profil == "jpg" || $insertPendidikanFormal_fileGambar_foto_profil == "jpeg" || $insertPendidikanFormal_fileGambar_foto_profil == "png"){

                                if($insertPendidikanFormal_getSize_foto_profil <= 1000000){ // 1000000 byte == 1 MB
                                    
                                    $daftar_fileGambarfoto_profil = 'profil_file_'.time().'.'.$insertData_foto_profil->getClientOriginalExtension();
                                    $namaFolderGamabarfoto_profil = 'file/rekrutment/profil';
                                    $insertData_foto_profil->move($namaFolderGamabarfoto_profil,$daftar_fileGambarfoto_profil);

                                    if (!isset($id_data_diri)) {
                                        $insertData_DataDiri = new DataDiri();
                                    }else{
                                        
                                        $akun_dataDiri  = DataDiri::where('id', $id_data_diri)->first();
                                        File::delete('file/rekrutment/profil/'.$akun_dataDiri->foto);
                                        $insertData_DataDiri = DataDiri::find($id_data_diri);
                                    }

                                            if (!isset($id_data_diri)) {
                                                $insertData_DataDiri->id_akun                  = $akun->id;
                                            }else{
                                                
                                            }
                                        
                                            $insertData_DataDiri->foto                  = $daftar_fileGambarfoto_profil;
                                            $insertData_DataDiri->nama_lengkap          = $insertData_nama_lengkap;
                                            $insertData_DataDiri->nama_panggilan        = $insertData_nama_panggil;
                                            $insertData_DataDiri->tempat_lahir          = $insertData_tempat_lahir;
                                            $insertData_DataDiri->nik                   = $insertData_nik;
                                            $insertData_DataDiri->tanggal_lahir         = $insertData_tanggal_lahir;
                                            $insertData_DataDiri->email                 = $insertData_email;
                                            $insertData_DataDiri->agama                 = $insertData_agama;
                                            $insertData_DataDiri->jenis_kelamin         = $insertData_jenis_kelamin;
                                            $insertData_DataDiri->status_perkawinan     = $insertData_status_kawin;
                    
                                                if ($insertData_no_bpjs != "") {
                                                    $insertData_DataDiri->no_bpjs       = $insertData_no_bpjs;
                                                }else{
                                                    $insertData_DataDiri->no_bpjs       = null;
                                                }
                                            
                    
                                            $insertData_DataDiri->tinggi_badan          = $insertData_tinggi_badan;
                                            $insertData_DataDiri->berat_badan           = $insertData_berat_badan;
                                            $insertData_DataDiri->golongan_darah        = $insertData_golongan_darah;
                                            $insertData_DataDiri->suku                  = $insertData_suku;
                                            $insertData_DataDiri->total_saudara         = $insertData_total_saudara;
                                            $insertData_DataDiri->alamat_ktp            = $insertData_alamat_ktp;
                                            $insertData_DataDiri->provinsi_ktp          = $insertData_provinsi_ktp;
                                            $insertData_DataDiri->kota_ktp              = $insertData_kota_ktp;
                                            $insertData_DataDiri->kabupaten_ktp         = $insertData_kabupaten_ktp;
                                            $insertData_DataDiri->kecamatan_ktp         = $insertData_kecamatan_ktp;
                                            $insertData_DataDiri->kelurahan_ktp         = $insertData_kelurahan_ktp;
                                            $insertData_DataDiri->pos_ktp               = $insertData_kode_pos_ktp;
                                            $insertData_DataDiri->alamat_domisili       = $insertData_alamat_domisili;
                                            $insertData_DataDiri->provinsi_domisili     = $insertData_provinsi_domisili;
                                            $insertData_DataDiri->kota_domisili         = $insertData_kota_domisili;
                                            $insertData_DataDiri->kabupaten_domisili    = $insertData_kabupaten_domisili;
                                            $insertData_DataDiri->kecamatan_domisili    = $insertData_kecamatan_domisili;
                                            $insertData_DataDiri->kelurahan_domisili    = $insertData_kelurahan_domisili;
                    
                                                if ($insertData_instagram != "") {
                                                    $insertData_DataDiri->instagram         = $insertData_instagram;
                                                }else{
                                                    $insertData_DataDiri->instagram         = null;
                                                }

                                                if ($insertData_fb != "") {
                                                    $insertData_DataDiri->facebook         = $insertData_fb;
                                                }else{
                                                    $insertData_DataDiri->facebook         = null;
                                                }

                                                if ($insertData_linkedin != "") {
                                                    $insertData_DataDiri->linkedin         = $insertData_linkedin;
                                                }else{
                                                    $insertData_DataDiri->linkedin         = null;
                                                }

                                                if ($insertData_twitter != "") {
                                                    $insertData_DataDiri->twitter         = $insertData_twitter;
                                                }else{
                                                    $insertData_DataDiri->twitter         = null;
                                                }

                                                
                    
                                            $insertData_DataDiri->nomor_whatsapp        = $insertData_no_wa;
                                            $insertData_DataDiri->nomor_hp              = $insertData_no_hp;
                                            $insertData_DataDiri->cerita_diri           = $insertData_cerita_diri;
                                        $insertData_DataDiri->save();
                    
                                        Session::flash('alert-success', 'Update Profile.');
                                        return redirect('dashboard-panel');
                                        // return redirect('rekrutmen');

                                        // if ($insertData_cookie_data_diri != "") {
                                            
                                        // }else{
                                                
                                        // }

                                
                                }else{
                                    Session::flash('alert-peringatan', 'File harus Lebih Kecil Dari 1 MB.');
                                    return redirect('dashboard-panel');
                                }
                            }else{
                                Session::flash('alert-peringatan', 'File harus pertype jpg, jpeg, png.');
                                return redirect('dashboard-panel');
                            }
                        }else{
                            // $insertData_DataDiri = DataDiri::find($id_data_diri);

                            if (!isset($id_data_diri)) {
                                $insertData_DataDiri = new DataDiri();
                            }else{
                                $insertData_DataDiri = DataDiri::find($id_data_diri);
                            }

                                    if (!isset($id_data_diri)) {
                                        $insertData_DataDiri->id_akun                  = $akun->id;
                                    }else{
                                        
                                    }
                                $insertData_DataDiri->nama_lengkap          = $insertData_nama_lengkap;
                                $insertData_DataDiri->nama_panggilan        = $insertData_nama_panggil;
                                $insertData_DataDiri->tempat_lahir          = $insertData_tempat_lahir;
                                $insertData_DataDiri->nik                   = $insertData_nik;
                                $insertData_DataDiri->tanggal_lahir         = $insertData_tanggal_lahir;
                                $insertData_DataDiri->email                 = $insertData_email;
                                $insertData_DataDiri->agama                 = $insertData_agama;
                                $insertData_DataDiri->jenis_kelamin         = $insertData_jenis_kelamin;
                                $insertData_DataDiri->status_perkawinan     = $insertData_status_kawin;

                                    if ($insertData_no_bpjs != "") {
                                        $insertData_DataDiri->no_bpjs       = $insertData_no_bpjs;
                                    }else{
                                        $insertData_DataDiri->no_bpjs       = null;
                                    }
                                

                                $insertData_DataDiri->tinggi_badan          = $insertData_tinggi_badan;
                                $insertData_DataDiri->berat_badan           = $insertData_berat_badan;
                                $insertData_DataDiri->golongan_darah        = $insertData_golongan_darah;
                                $insertData_DataDiri->suku                  = $insertData_suku;
                                $insertData_DataDiri->total_saudara         = $insertData_total_saudara;
                                $insertData_DataDiri->alamat_ktp            = $insertData_alamat_ktp;
                                $insertData_DataDiri->provinsi_ktp          = $insertData_provinsi_ktp;
                                $insertData_DataDiri->kota_ktp              = $insertData_kota_ktp;
                                $insertData_DataDiri->kabupaten_ktp         = $insertData_kabupaten_ktp;
                                $insertData_DataDiri->kecamatan_ktp         = $insertData_kecamatan_ktp;
                                $insertData_DataDiri->kelurahan_ktp         = $insertData_kelurahan_ktp;
                                $insertData_DataDiri->pos_ktp               = $insertData_kode_pos_ktp;
                                $insertData_DataDiri->alamat_domisili       = $insertData_alamat_domisili;
                                $insertData_DataDiri->provinsi_domisili     = $insertData_provinsi_domisili;
                                $insertData_DataDiri->kota_domisili         = $insertData_kota_domisili;
                                $insertData_DataDiri->kabupaten_domisili    = $insertData_kabupaten_domisili;
                                $insertData_DataDiri->kecamatan_domisili    = $insertData_kecamatan_domisili;
                                $insertData_DataDiri->kelurahan_domisili    = $insertData_kelurahan_domisili;

                                    if ($insertData_instagram != "") {
                                        $insertData_DataDiri->instagram         = $insertData_instagram;
                                    }else{
                                        $insertData_DataDiri->instagram         = null;
                                    }

                                    if ($insertData_fb != "") {
                                        $insertData_DataDiri->facebook         = $insertData_fb;
                                    }else{
                                        $insertData_DataDiri->facebook         = null;
                                    }

                                    if ($insertData_linkedin != "") {
                                        $insertData_DataDiri->linkedin         = $insertData_linkedin;
                                    }else{
                                        $insertData_DataDiri->linkedin         = null;
                                    }

                                    if ($insertData_twitter != "") {
                                        $insertData_DataDiri->twitter         = $insertData_twitter;
                                    }else{
                                        $insertData_DataDiri->twitter         = null;
                                    }

                                    

                                $insertData_DataDiri->nomor_whatsapp        = $insertData_no_wa;
                                $insertData_DataDiri->nomor_hp              = $insertData_no_hp;
                                $insertData_DataDiri->cerita_diri           = $insertData_cerita_diri;
                            $insertData_DataDiri->save();

                            Session::flash('alert-success', 'Update Profile.');
                            return redirect('dashboard-panel');
                        }
                    }
        }

        
    }

    // menu karyawan
    public function karyawanAktif($key, Request $request)
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
                                            
                            $dahboard_akun_cookie_ = Perusahaan::where('token', $_COOKIE['cookie-storage'])->first();
                            if (isset($dahboard_akun_cookie_)) {
                                $data['dahboard_akun_cookie'] = Perusahaan::where('token', $_COOKIE['cookie-storage'])->with('akses')->with('data_perusahaan')->first();
                                $id_perusahaan_ = $data['dahboard_akun_cookie']->id;

                                // echo $data['dahboard_akun_cookie']->akun;
                            }else{
                            
                                    $data['dahboard_akun_cookie'] = Akun::where('token', $_COOKIE['cookie-storage'])
                                                                                                                        ->with([
                                                                                                                            'perusahaan' => function($query){
                                                                                                                                return $query->with('data_perusahaan');
                                                                                                                            }

                                                                                                                        ])
                                                                                                                        ->with('akses')->with('data_diri')->with('perusahaan')
                                                                                                                    ->first();
                                        // echo $data['dahboard_akun_cookie']->perusahaan->data_perusahaan->foto;
                                    $id_perusahaan_ = $data['dahboard_akun_cookie']->perusahaan->id;
                            }

                            // $course_id = Crypt::decrypt($request->id);
                            if (!isset($request->id)) {
                                
                            }else{
                                $id_akun_ = $request->id;
                                $data['dahboard_karyawan_detail'] = Karyawan::with([
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
                                ])->whereHas('akun', 
                                                    function($query) use ($id_perusahaan_, $id_akun_){
                                                        $query->where('id_perusahaan', $id_perusahaan_)
                                                            ->where('id', $id_akun_);  
                                                    })->first();
                            }

                            // $dd = $data['dahboard_karyawan_detail']->akun->data_orang_tua;
                            // foreach ($dd as $key) {
                            //     echo $key->id;
                            // }


                                $data['key'] = $key;
                            

                                        if ($key == 'semua') {
                                            $data['dahboard_karyawan'] = Karyawan::with([
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
                                            ])->whereHas('akun', 
                                                                function($query) use ($id_perusahaan_){
                                                                    $query->where('id_perusahaan', $id_perusahaan_);  
                                                                })->orderBy('id','desc')->get();
                                        }else if ($key == 'aktif') {
                                            $data['dahboard_karyawan_aktif'] = Karyawan::with([
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
                                                                ->with(['riw_penempatan_wilayah' => function($query){
                                                                    return $query->with('penempatan');
                                                                }
                                                                ]);
                                                }
                                            ],
                                            )->where('status_data', 'Aktif')
                                            ->whereHas('akun', 
                                            function($query) use ($id_perusahaan_){
                                                $query->where('id_perusahaan', $id_perusahaan_);  
                                            })
                                            ->orderBy('id','desc')->get();
                                            // ->orderBy('id','desc')->paginate(10);
                                            
                                        }else if ($key == 'resign') {

                                            $data['dahboard_karyawan_resign'] = Karyawan::with([
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
                                                                ->with(['riw_penempatan_wilayah' => function($query){
                                                                    return $query->with('penempatan');
                                                                }
                                                                ]);
                                                }
                                            ],
                                            )->where('status_data', 'Resign')
                                            ->whereHas('akun', 
                                            function($query) use ($id_perusahaan_){
                                                $query->where('id_perusahaan', $id_perusahaan_);  
                                            })
                                            ->orderBy('id','desc')->paginate(10);


                                        }else if ($key == 'non-aktif') {
                                            $data['dahboard_karyawan_non'] = Karyawan::with([
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
                                                                ->with(['riw_penempatan_wilayah' => function($query){
                                                                    return $query->with('penempatan');
                                                                }
                                                                ]);
                                                }
                                            ],
                                            )->where('status_data', 'Tidak Aktif')
                                            ->whereHas('akun', 
                                            function($query) use ($id_perusahaan_){
                                                $query->where('id_perusahaan', $id_perusahaan_);  
                                            })
                                            ->orderBy('id','desc')->paginate(10);
                                        }

                                        return view('admin.tema-satu.home.karyawan.karyawan', $data);
            
                    }
        }

        // return view('admin.tema-satu.home.karyawan.tabel-karyawan.aktif-karyawan', $data);
        // return view('admin.tema-satu.home.karyawan.tab-karyawan.karyawan', $data);
    }

    public function createKaryawanAktifExel(Request $request)
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
                        $createKaryawanAktif_id_perusahaan                   = $request->input('id_perusahaan');

                        if(!isset($createKaryawanAktif_id_perusahaan)){
                                Session::flash('alert-peringatan', 'Tidak Berhasil Tambah Karyawan.!!.');
                                return redirect('dashboard-panel/karyawan/semua');
                        }else{

                       
        
                            $regist_Akses_ = Akses::where('akses', "Karyawan")->first();
                                if (!isset($regist_Akses_)) {
                                    $create_karyawan_akses                = new Akses();
                                        $create_karyawan_akses->akses     = 'Karyawan';
                                    $create_karyawan_akses->save();

                                    $id = $create_karyawan_akses->id;
                                }else{
                                    $id = $regist_Akses_->id;
                                }
                                
                                    $exelKaryawanAktif = Excel::import(new Create_Karyawan($id, $createKaryawanAktif_id_perusahaan),request()->file('file'));

                                    if ($exelKaryawanAktif) {
                                        Session::flash('alert-success-karyawan_', 'Berhasil Creat Data Exel Karyawan.');
                                        return redirect('dashboard-panel/karyawan/semua');
                                    }
                        }
                            
                    }
            }
        
    }

    public function createKaryawanAktif(Request $request)
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
                                        
                                    
                        $createKaryawanAktif_id_perusahaan              = $request->input('id_perusahaan');
                        $createKaryawanAktif_nik                        = $request->input('nik');
                        $createKaryawanAktif_email                      = $request->input('email');
                        $createKaryawanAktif_no_wa                      = ltrim($request->input('no_wa'), '0');

                        $regist_nik = Perusahaan::where('nik', $createKaryawanAktif_nik)->first();
                        $verifikasiEmail_randomPassword = "Karyawan"."_".rand(1000,99999);

                            if ($regist_nik) {
                                Session::flash('alert-peringatan', 'Nik Sudah Tedaftar di Tabel Perusahaan.!!');
                                return redirect('/dashboard-panel/karyawan/semua');
                            }else{
                                    $regist_email = Perusahaan::where('email', $createKaryawanAktif_email)->first();
                                        if ($regist_email) 
                                        {
                                            Session::flash('alert-peringatan', 'Email Sudah Terdaftar di Tabel Perusahaan.!!');
                                            return redirect('/dashboard-panel/karyawan/semua');
                                        }else{

                                            $regist_nik_akun = Akun::where('nik', $createKaryawanAktif_nik)->first();

                                                if ($regist_nik_akun) {
                                                    Session::flash('alert-peringatan', 'Nik Sudah Tedaftar di Tabel Akun.!!');
                                                    return redirect('/dashboard-panel/karyawan/semua');
                                                }else{
                                                    $regist_email = Akun::where('email', $createKaryawanAktif_email)->first();
                                                        if ($regist_email) {
                                                            Session::flash('alert-peringatan', 'Email Sudah Terdaftar di Tabel Akun.!!');
                                                            return redirect('/dashboard-panel/karyawan/semua');
                                                        }else{
                                                            $regist_Akses_ = Akses::where('akses', "Karyawan")->first();
                                                            if (!isset($regist_Akses_)) {
                                                                $createKaryawanAktif_akses = new Akses();
                                                                    $createKaryawanAktif_akses->akses   = "Karyawan";
                                                                $createKaryawanAktif_akses->save();

                                                                    if ($createKaryawanAktif_akses) {
                                                                        
                                                                        $createKaryawanAktif_akun = new Akun();
                                                                                        $createKaryawanAktif_akun->id_akses         = $createKaryawanAktif_akses->id;
                                                                                        $createKaryawanAktif_akun->id_perusahaan    = $createKaryawanAktif_id_perusahaan;
                                                                                        $createKaryawanAktif_akun->nik              = $createKaryawanAktif_nik;
                                                                                        $createKaryawanAktif_akun->password         = Hash::make($verifikasiEmail_randomPassword);
                                                                                        $createKaryawanAktif_akun->show_pass        = $verifikasiEmail_randomPassword;
                                                                                        $createKaryawanAktif_akun->email            = $createKaryawanAktif_email;
                                                                                        $createKaryawanAktif_akun->no_hp            = $createKaryawanAktif_no_wa;

                                                                                        if ($request->input('status_resign') == 'Aktif') {
                                                                                            $createKaryawanAktif_akun->status               = 'aktif';
                                                                                        }else if ($request->input('status_resign') == 'Resign' || $request->input('status_resign') == 'Tidak Aktif') {
                                                                                            $createKaryawanAktif_akun->status           = "tidak";
                                                                                        }

                                                                                        
                                                                        $createKaryawanAktif_akun->save();

                                                                            if ($createKaryawanAktif_akun) {
                                                                                $data = array(
                                                                                    'nik'               => $createKaryawanAktif_nik,
                                                                                    'password'          => $verifikasiEmail_randomPassword
                                                                                );
                                                                                
                                                                                Mail::send('pesan-email-perusahaan', $data, function($message) use ($createKaryawanAktif_email){
                                                                                $message->to($createKaryawanAktif_email, 'Pesan Akun')->subject('Pesan Verifikasi Akun');
                                                                                $message->from('itpthitcelebes24@gmail.com', 'Staff HRD PT Indokaisa Triasa Group (ID EXPRESS)');
                                                                                });

                                                                                $createKaryawanAktif_karyawan = new Karyawan();
                                                                                                        $createKaryawanAktif_karyawan->id_akun   = $createKaryawanAktif_akun->id;
                                                                                                        $createKaryawanAktif_karyawan->status_data   = $request->input('status_resign');
                                                                                                        $createKaryawanAktif_karyawan->tanggal_join   = $request->input('tanggal_join');
                                                                                $createKaryawanAktif_karyawan->save();


                                                                                $create_karyawan_dataDiri                           = new DataDiri();
                                                                                    $create_karyawan_dataDiri->id_akun              = $createKaryawanAktif_akun->id;
                                                                                    $create_karyawan_dataDiri->nama_lengkap         = strtoupper($request->input('nama_lengkap'));
                                                                                    $create_karyawan_dataDiri->nama_panggilan       = strtoupper($request->input('nama_panggil'));
                                                                                    $create_karyawan_dataDiri->tempat_lahir         = strtoupper($request->input('tempat_lahir'));
                                                                                    $create_karyawan_dataDiri->tanggal_lahir        = $request->input('tanggal_lahir');
                                                                                    $create_karyawan_dataDiri->nik                  = $request->input('nik_ktp');
                                                                                    $create_karyawan_dataDiri->email	            = $request->input('tanggal_join'); // email bpjs
                                                                                    $create_karyawan_dataDiri->agama                = $request->input('agama');
                                                                                    $create_karyawan_dataDiri->jenis_kelamin        = $request->input('jenis_kelamin');
                                                                                    $create_karyawan_dataDiri->status_perkawinan    = $request->input('status_kawin');
                                                                                    $create_karyawan_dataDiri->tinggi_badan         = $request->input('tinggi_badan');
                                                                                    $create_karyawan_dataDiri->berat_badan          = $request->input('berat_badan');
                                                                                    $create_karyawan_dataDiri->golongan_darah       = $request->input('golongan_darah');
                                                                                    $create_karyawan_dataDiri->suku                 = strtoupper($request->input('suku'));
                                                                                    $create_karyawan_dataDiri->total_saudara        = $request->input('total_saudara');
                                                                                    $create_karyawan_dataDiri->alamat_ktp           = strtoupper($request->input('alamat_ktp'));
                                                                                    $create_karyawan_dataDiri->provinsi_ktp         = strtoupper($request->input('provinsi_ktp'));
                                                                                    $create_karyawan_dataDiri->kota_ktp             = strtoupper($request->input('kota_ktp'));
                                                                                    $create_karyawan_dataDiri->kabupaten_ktp        = strtoupper($request->input('kabupaten_ktp'));
                                                                                    $create_karyawan_dataDiri->kecamatan_ktp        = strtoupper($request->input('kecamatan_ktp'));
                                                                                    $create_karyawan_dataDiri->kelurahan_ktp        = strtoupper($request->input('kelurahan_ktp'));
                                                                                    $create_karyawan_dataDiri->pos_ktp              = $request->input('kode_pos_ktp');
                                                                                    $create_karyawan_dataDiri->alamat_domisili      = strtoupper($request->input('alamat_domisili'));
                                                                                    $create_karyawan_dataDiri->provinsi_domisili    = strtoupper($request->input('provinsi_domisili'));
                                                                                    $create_karyawan_dataDiri->kota_domisili        = strtoupper($request->input('kota_domisili'));
                                                                                    $create_karyawan_dataDiri->kabupaten_domisili   = strtoupper($request->input('kabupaten_domisili'));
                                                                                    $create_karyawan_dataDiri->kecamatan_domisili   = strtoupper($request->input('kecamatan_domisili'));
                                                                                    $create_karyawan_dataDiri->kelurahan_domisili   = strtoupper($request->input('kelurahan_domisili'));
                                                                                    $create_karyawan_dataDiri->instagram            = $request->input('instagram');

                                                                                    $create_karyawan_dataDiri->facebook             = $request->input('fb');
                                                                                    $create_karyawan_dataDiri->linkedin             = $request->input('linkedin');
                                                                                    $create_karyawan_dataDiri->twitter              = $request->input('twitter');

                                                                                    $create_karyawan_dataDiri->nomor_whatsapp       =  ltrim($request->input('no_wa'), '0');
                                                                                    
                                                                                    $create_karyawan_dataDiri->nomor_hp             = ltrim($request->input('no_telepon'), '0');
                                                                                    $create_karyawan_dataDiri->cerita_diri          = strtoupper($request->input('cerita_diri'));
                                                                                $create_karyawan_dataDiri->save();

                                                                                $create_data_karyawan                               = new Data_Karyawan();
                                                                                    $create_data_karyawan->id_akun                  = $createKaryawanAktif_akun->id;
                                                                                    $create_data_karyawan->dingtalk                 = $request->input('dingtalk');
                                                                                    $create_data_karyawan->norek                    = $request->input('norek');
                                                                                    $create_data_karyawan->bank                     = strtoupper($request->input('bank'));
                                                                                    $create_data_karyawan->kode_bank                = $request->input('kode_bank');
                                                                                $create_data_karyawan->save();

                                                                                    if ($createKaryawanAktif_karyawan) {
                                                                                        Session::flash('alert-success-karyawan', 'Berhasil Tambah Karyawan Atas Nama '.$request->input('nama_lengkap'));
                                                                                        return redirect('dashboard-panel/karyawan/semua');
                                                                                    }
                                                                            }
                                                                                
                                                                    }
                                                            }else{
                                                                $createKaryawanAktif_akun = new Akun();
                                                                                $createKaryawanAktif_akun->id_akses         = $regist_Akses_->id;
                                                                                $createKaryawanAktif_akun->id_perusahaan    = $createKaryawanAktif_id_perusahaan;
                                                                                $createKaryawanAktif_akun->nik              = $createKaryawanAktif_nik;
                                                                                $createKaryawanAktif_akun->password         = Hash::make($verifikasiEmail_randomPassword);
                                                                                $createKaryawanAktif_akun->show_pass        = $verifikasiEmail_randomPassword;
                                                                                $createKaryawanAktif_akun->email            = $createKaryawanAktif_email;
                                                                                $createKaryawanAktif_akun->no_hp            = $createKaryawanAktif_no_wa;

                                                                                if ($request->input('status_resign') == 'Aktif') {
                                                                                    $createKaryawanAktif_akun->status               = 'aktif';
                                                                                }else if ($request->input('status_resign') == 'Resign' || $request->input('status_resign') == 'Tidak Aktif') {
                                                                                    $createKaryawanAktif_akun->status           = "tidak";
                                                                                }

                                                                                
                                                                $createKaryawanAktif_akun->save();

                                                                            if ($createKaryawanAktif_akun) {
                                                                                $data = array(
                                                                                    'nik'               => $createKaryawanAktif_nik,
                                                                                    'password'          => $verifikasiEmail_randomPassword
                                                                                );
                                                                                
                                                                                Mail::send('pesan-email-perusahaan', $data, function($message) use ($createKaryawanAktif_email){
                                                                                $message->to($createKaryawanAktif_email, 'Pesan Akun')->subject('Pesan Verifikasi Akun');
                                                                                $message->from('itpthitcelebes24@gmail.com', 'Staff HRD PT Indokaisa Triasa Group (ID EXPRESS)');
                                                                                });

                                                                                $createKaryawanAktif_karyawan = new Karyawan();
                                                                                                        $createKaryawanAktif_karyawan->id_akun   = $createKaryawanAktif_akun->id;
                                                                                                        $createKaryawanAktif_karyawan->status_data   = $request->input('status_resign');
                                                                                                        $createKaryawanAktif_karyawan->tanggal_join   = $request->input('tanggal_join');
                                                                                $createKaryawanAktif_karyawan->save();


                                                                                $create_karyawan_dataDiri                           = new DataDiri();
                                                                                    $create_karyawan_dataDiri->id_akun              = $createKaryawanAktif_akun->id;
                                                                                    $create_karyawan_dataDiri->nama_lengkap         = strtoupper($request->input('nama_lengkap'));
                                                                                    $create_karyawan_dataDiri->nama_panggilan       = strtoupper($request->input('nama_panggil'));
                                                                                    $create_karyawan_dataDiri->tempat_lahir         = strtoupper($request->input('tempat_lahir'));
                                                                                    $create_karyawan_dataDiri->tanggal_lahir        = $request->input('tanggal_lahir');
                                                                                    $create_karyawan_dataDiri->nik                  = $request->input('nik_ktp');
                                                                                    $create_karyawan_dataDiri->email	            = $request->input('tanggal_join'); // email bpjs
                                                                                    $create_karyawan_dataDiri->agama                = $request->input('agama');
                                                                                    $create_karyawan_dataDiri->jenis_kelamin        = $request->input('jenis_kelamin');
                                                                                    $create_karyawan_dataDiri->status_perkawinan    = $request->input('status_kawin');
                                                                                    $create_karyawan_dataDiri->tinggi_badan         = $request->input('tinggi_badan');
                                                                                    $create_karyawan_dataDiri->berat_badan          = $request->input('berat_badan');
                                                                                    $create_karyawan_dataDiri->golongan_darah       = $request->input('golongan_darah');
                                                                                    $create_karyawan_dataDiri->suku                 = strtoupper($request->input('suku'));
                                                                                    $create_karyawan_dataDiri->total_saudara        = $request->input('total_saudara');
                                                                                    $create_karyawan_dataDiri->alamat_ktp           = strtoupper($request->input('alamat_ktp'));
                                                                                    $create_karyawan_dataDiri->provinsi_ktp         = strtoupper($request->input('provinsi_ktp'));
                                                                                    $create_karyawan_dataDiri->kota_ktp             = strtoupper($request->input('kota_ktp'));
                                                                                    $create_karyawan_dataDiri->kabupaten_ktp        = strtoupper($request->input('kabupaten_ktp'));
                                                                                    $create_karyawan_dataDiri->kecamatan_ktp        = strtoupper($request->input('kecamatan_ktp'));
                                                                                    $create_karyawan_dataDiri->kelurahan_ktp        = strtoupper($request->input('kelurahan_ktp'));
                                                                                    $create_karyawan_dataDiri->pos_ktp              = $request->input('kode_pos_ktp');
                                                                                    $create_karyawan_dataDiri->alamat_domisili      = strtoupper($request->input('alamat_domisili'));
                                                                                    $create_karyawan_dataDiri->provinsi_domisili    = strtoupper($request->input('provinsi_domisili'));
                                                                                    $create_karyawan_dataDiri->kota_domisili        = strtoupper($request->input('kota_domisili'));
                                                                                    $create_karyawan_dataDiri->kabupaten_domisili   = strtoupper($request->input('kabupaten_domisili'));
                                                                                    $create_karyawan_dataDiri->kecamatan_domisili   = strtoupper($request->input('kecamatan_domisili'));
                                                                                    $create_karyawan_dataDiri->kelurahan_domisili   = strtoupper($request->input('kelurahan_domisili'));
                                                                                    $create_karyawan_dataDiri->instagram            = $request->input('instagram');

                                                                                    $create_karyawan_dataDiri->facebook             = $request->input('fb');
                                                                                    $create_karyawan_dataDiri->linkedin             = $request->input('linkedin');
                                                                                    $create_karyawan_dataDiri->twitter              = $request->input('twitter');

                                                                                    $create_karyawan_dataDiri->nomor_whatsapp       = $request->input('no_wa');
                                                                                    $create_karyawan_dataDiri->nomor_hp             = $request->input('no_telepon');       
                                                                                    $create_karyawan_dataDiri->cerita_diri          = strtoupper($request->input('cerita_diri'));
                                                                                $create_karyawan_dataDiri->save();

                                                                                $create_data_karyawan                               = new Data_Karyawan();
                                                                                    $create_data_karyawan->id_akun                  = $createKaryawanAktif_akun->id;
                                                                                    $create_data_karyawan->dingtalk                 = $request->input('dingtalk');
                                                                                    $create_data_karyawan->norek                    = $request->input('norek');
                                                                                    $create_data_karyawan->bank                     = strtoupper($request->input('bank'));
                                                                                    $create_data_karyawan->kode_bank                = $request->input('kode_bank');
                                                                                $create_data_karyawan->save();

                                                                                    if ($createKaryawanAktif_karyawan) {
                                                                                        Session::flash('alert-success-karyawan', 'Berhasil Tambah Karyawan Atas Nama '.$request->input('nama_lengkap'));
                                                                                        return redirect('dashboard-panel/karyawan/semua');
                                                                                    }
                                                                            }
                                                            }

                                                                        // if ($regist_Akses) {}
                                                        }
                                                }
                                        }
                            }
                    }
        }
    }

    

    
    
    
}
