<?php

namespace App\Http\Controllers\user_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

use App\Models\rekrutmen\M_DataDiri as DataDiri;
use App\Models\M_Akun               as Akun;

class C_DataDiri extends Controller
{

//======================================================================
//========================== Insert data diri ==========================
//======================================================================

    public function insertData(Request $request)
    {
        $this->validate($request, [
                'nama_lengkap'          => 'required|string|max:50',
                'nama_panggil'          => 'required|string|max:50',
                'tempat_lahir'          => 'required|string|max:50',
                'nik'                   => 'required|string|max:20',
                'tanggal_lahir'         => 'required|string|max:15',
                'email'                 => 'required|string|email|max:50',
                'agama'                 => 'required|string|max:50',
                'jenis_kelamin'         => 'required|string|max:50',
                'status_kawin'          => 'required|string|max:50',
                'tinggi_badan'          => 'required|string|max:50',
                'berat_badan'           => 'required|string|max:50',
                'golongan_darah'        => 'required|string|max:50',
                'suku'                  => 'required|string|max:50',
                'total_saudara'         => 'required|string|max:50',
                'alamat_ktp'            => 'required|string|max:150',
                'provinsi_ktp'          => 'required|string|max:50',
                'kota_ktp'              => 'required|string|max:50',
                'kabupaten_ktp'         => 'required|string|max:50',
                'kecamatan_ktp'         => 'required|string|max:50',
                'kelurahan_ktp'         => 'required|string|max:50',
                'kode_pos_ktp'          => 'required|string|max:50',
                'alamat_domisili'       => 'required|string|max:100',
                'provinsi_domisili'     => 'required|string|max:50',
                'kota_domisili'         => 'required|string|max:50',
                'kabupaten_domisili'    => 'required|string|max:50',
                'kecamatan_domisili'    => 'required|string|max:50',
                'kelurahan_domisili'    => 'required|string|max:50',
                'no_wa'                 => 'required|string|max:50',
                'no_hp'                 => 'required|string|max:50',
                'cerita_diri'           => 'required|string|max:150',

            ]
        );  

        $insertData_cookie_data_diri        = $request->input('cookie_data_diri');
        
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

        $insertData_no_wa                   = $request->input('no_wa');
        $insertData_no_hp                   = $request->input('no_hp');
        $insertData_cerita_diri             = $request->input('cerita_diri');
        $insertData_foto_profil             = $request->file('foto_profil');

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

                                if ($insertData_foto_profil != "") {

                                    $insertPendidikanFormal_getSize_foto_profil          = $insertData_foto_profil->getSize(); // 1000000 byte == 1 MB
                                    $insertPendidikanFormal_fileGambar_foto_profil       = $insertData_foto_profil->getClientOriginalExtension();

                                    if($insertPendidikanFormal_fileGambar_foto_profil == "jpg" || $insertPendidikanFormal_fileGambar_foto_profil == "png" || $insertPendidikanFormal_fileGambar_foto_profil == "jpeg"){

                                        if($insertPendidikanFormal_getSize_foto_profil <= 1000000){ // 1000000 byte == 1 MB
                                            
                                            $daftar_fileGambarfoto_profil = 'profil_file_'.time().'.'.$insertData_foto_profil->getClientOriginalExtension();
                                            $namaFolderGamabarfoto_profil = 'file/rekrutment/profil/';
                                            $insertData_foto_profil->move($namaFolderGamabarfoto_profil,$daftar_fileGambarfoto_profil);

                                                $insertData_DataDiri = new DataDiri();
                                                    $insertData_DataDiri->id_akun               = $id_akun;
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
                            
                                                Session::flash('alert-success', 'Upload Data Diri.');
                                                return redirect('rekrutmen/?halaman=data-diri');
                                                // return redirect('rekrutmen');

                                                // if ($insertData_cookie_data_diri != "") {
                                                    
                                                // }else{
                                                        
                                                // }

                                        
                                        }else{
                                            Session::flash('alert-peringatan', 'File harus Lebih Kecil Dari 1 MB.');
                                            return redirect('rekrutmen/?halaman=data-diri');
                                        }
                                    }else{
                                        Session::flash('alert-peringatan', 'File harus pertype jpg, png dan jpeg.');
                                        return redirect('rekrutmen/?halaman=data-diri');
                                    }
                                }else{
                                    $postDataKaryawan_perusahaan_  = DataDiri::where('id_akun', $id_akun)
                                                                    ->update([
                                                                        // 'foto'                  => $daftar_fileGambarfoto_profil,
                                                                        'nama_lengkap'          => $insertData_nama_lengkap,
                                                                        'nama_panggilan'        => $insertData_nama_panggil,
                                                                        'tempat_lahir'          => $insertData_tempat_lahir,
                                                                        'tanggal_lahir'         => $insertData_tanggal_lahir,
                                                                        'nik'                   => $insertData_nik,
                                                                        'email'                 => $insertData_email,
                                                                        'agama'                 => $insertData_agama,
                                                                        'jenis_kelamin'         => $insertData_jenis_kelamin,
                                                                        'status_perkawinan'     => $insertData_status_kawin,
                                                                        'no_bpjs'               => $insertData_no_bpjs,
                                                                        'tinggi_badan'          => $insertData_tinggi_badan,
                                                                        'berat_badan'           => $insertData_berat_badan,
                                                                        'golongan_darah'        => $insertData_golongan_darah,
                                                                        'suku'                  => $insertData_suku,
                                                                        'total_saudara'         => $insertData_total_saudara,
                                                                        'alamat_ktp'            => $insertData_alamat_ktp,
                                                                        'provinsi_ktp'          => $insertData_provinsi_ktp,
                                                                        'kota_ktp'              => $insertData_kota_ktp,
                                                                        'kabupaten_ktp'         => $insertData_kabupaten_ktp,
                                                                        'kecamatan_ktp'         => $insertData_kecamatan_ktp,
                                                                        'kelurahan_ktp'         => $insertData_kelurahan_ktp,
                                                                        'pos_ktp'               => $insertData_kode_pos_ktp,
                                                                        'alamat_domisili'       => $insertData_alamat_domisili,
                                                                        'provinsi_domisili'     => $insertData_provinsi_domisili,
                                                                        'kota_domisili'         => $insertData_kota_domisili,
                                                                        'kabupaten_domisili'    => $insertData_kabupaten_domisili,
                                                                        'kecamatan_domisili'    => $insertData_kecamatan_domisili,
                                                                        'kelurahan_domisili'    => $insertData_kelurahan_domisili,
                                                                        'instagram'             => $insertData_instagram,

                                                                        'facebook'             => $insertData_fb,
                                                                        'linkedin'             => $insertData_linkedin,
                                                                        'twitter'             => $insertData_twitter,

                                                                        'nomor_whatsapp'        => $insertData_no_wa,
                                                                        'nomor_hp'              => $insertData_no_hp,
                                                                        'cerita_diri'           => $insertData_cerita_diri
                                                                    ]);
                                                                    
                                    Session::flash('alert-success', 'Berhasil Edit Data.');
                                    return redirect('rekrutmen/?halaman=data-diri');
                                }
                            } 
                    }
        }








    }
}
