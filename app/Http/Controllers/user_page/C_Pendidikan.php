<?php

namespace App\Http\Controllers\user_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Session;

use App\Models\rekrutmen\M_DataDiri                 as DataDiri;
use App\Models\rekrutmen\M_Pendidikan_Formal        as Pendidikan_Formal;
use App\Models\rekrutmen\M_Pendidikan_Non_Formal    as Pendidikan_Non_Formal;
use App\Models\rekrutmen\M_Uplod_File               as Uplod_File;
use App\Models\M_Akun                               as Akun;

class C_Pendidikan extends Controller
{

//======================================================================
//======================== pendidikan formal ===========================
//======================================================================

    public function insertPendidikanFormal(Request $request)
    {
        $this->validate($request, [
                            'pendidikan'                => 'required|max:10',
                            'gelar'                     => 'required|max:20',
                            'nama_sekolah'              => 'required|max:255',
                            'akreditasi_universitas'    => 'required|max:10',
                            'jurusan'                   => 'required|max:100',
                            'akreditasi_jurusan'        => 'required|max:10',
                            'mulai_tanggal'             => 'required|max:20',
                            'akhir_tanggal'             => 'required|max:20',
                            'ipk'                       => 'required|max:10',
                            'no_ijazah'                 => 'required|max:255'
                
                        ]); 
        
        echo $insertPendidikanFormal_pendidikan              = $request->input('pendidikan');
        $insertPendidikanFormal_gelar                   = $request->input('gelar'); 
        $insertPendidikanFormal_nama_sekolah            = $request->input('nama_sekolah');
        $insertPendidikanFormal_akreditasi_universitas  = $request->input('akreditasi_universitas');
        $insertPendidikanFormal_jurusan                 = $request->input('jurusan');
        $insertPendidikanFormal_akreditasi_jurusan      = $request->input('akreditasi_jurusan');
        $insertPendidikanFormal_mulai_tanggal           = $request->input('mulai_tanggal');
        $insertPendidikanFormal_akhir_tanggal           = $request->input('akhir_tanggal');
        $insertPendidikanFormal_ipk                     = $request->input('ipk');
        $insertPendidikanFormal_no_ijazah               = $request->input('no_ijazah');
        $insertPendidikanFormal_ijazah                  = $request->file('ijazah');
        $insertPendidikanFormal_transkrip               = $request->file('transkrip');
        $insertPendidikanFormal_getSize_ijazah          = $insertPendidikanFormal_ijazah->getSize(); // 1000000 byte == 1 MB
        $insertPendidikanFormal_fileGambar_ijazah       = $insertPendidikanFormal_ijazah->getClientOriginalExtension();
        $insertPendidikanFormal_getSize_transkrip       = $insertPendidikanFormal_transkrip->getSize(); // 1000000 byte == 1 MB
        $insertPendidikanFormal_fileGambar_transkrip    = $insertPendidikanFormal_transkrip->getClientOriginalExtension();

        // if(!isset($_COOKIE['date-cookie-storage-user']) && !isset($_COOKIE['cookie-storage-user'])){
            
        //     return redirect('login-user');
        // }else{
        //     $expired = date('d-m-Y', strtotime($_COOKIE['date-cookie-storage-user']));
        //     $date_now = date('d-m-Y');
        //     $today_time = strtotime($date_now);
        //     $expire_time = strtotime($expired);

        //             if ($today_time >= $expire_time) {

        //                 $akun  = Akun::where('token', $_COOKIE['cookie-storage-user'])
        //                                 ->update([
        //                                     'token'           => null
        //                                 ]);
        //                         if ($akun) {
        //                             unset($_COOKIE['cookie-storage-user']);    
        //                             setcookie('cookie-storage-user', null, -1, '/'); 
                                    
        //                             unset($_COOKIE['date-cookie-storage-user']);    
        //                             $logout_unset_cookie = setcookie('date-cookie-storage-user', null, -1, '/'); 

        //                             if($logout_unset_cookie){
        //                                 return redirect('login-user');
        //                             } 
        //                         }else{
        //                             unset($_COOKIE['cookie-storage-user']);    
        //                             setcookie('cookie-storage-user', null, -1, '/'); 
                                    
        //                             unset($_COOKIE['date-cookie-storage-user']);    
        //                             $logout_unset_cookie = setcookie('date-cookie-storage-user', null, -1, '/'); 

        //                             if($logout_unset_cookie){    
        //                                 return redirect('login-user');
        //                             } 
        //                         }
        //             }else{
        //                 if($insertPendidikanFormal_fileGambar_ijazah == "pdf" && $insertPendidikanFormal_fileGambar_transkrip == "pdf"){
        //                     if($insertPendidikanFormal_getSize_ijazah <= 1000000 && $insertPendidikanFormal_getSize_transkrip <= 1000000){ // 1000000 byte == 1 MB
        //                         $daftar_fileGambarijazah = 'file_pendidikan_formal_ijazah_'.time().'.'.$insertPendidikanFormal_ijazah->getClientOriginalExtension();
        //                         $namaFolderGamabarijazah_ = 'file/rekrutment/pendidikan-formal/ijazah/';
        //                         $insertPendidikanFormal_ijazah->move($namaFolderGamabarijazah_,$daftar_fileGambarijazah);
        //                         $daftar_fileGambartranskrip = 'file_pendidikan_formal_transkrip_'.time().'.'.$insertPendidikanFormal_transkrip->getClientOriginalExtension();
        //                         $namaFolderGamabartranskrip_ = 'file/rekrutment/pendidikan-formal/transkrip/';
        //                         $insertPendidikanFormal_transkrip->move($namaFolderGamabartranskrip_,$daftar_fileGambartranskrip);
        //                         $insertPendidikanFormal_cookie = Akun::where('token', $_COOKIE['cookie-storage-user'])->first();
        //                             if ($insertPendidikanFormal_cookie) {
        //                                 $id_akun = $insertPendidikanFormal_cookie->id;
        //                                 $insertPendidikanFormal_Pendidikan_Formal = new Pendidikan_Formal();
        //                                             $insertPendidikanFormal_Pendidikan_Formal->id_akun               = $id_akun;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->pendidikan            = $insertPendidikanFormal_pendidikan;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->gelar                 = $insertPendidikanFormal_gelar;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->nama_univ             = $insertPendidikanFormal_nama_sekolah;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->akredi_univ           = $insertPendidikanFormal_akreditasi_universitas;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->jurusan               = $insertPendidikanFormal_jurusan;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->akredi_jur            = $insertPendidikanFormal_akreditasi_jurusan;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->mulai_studi           = $insertPendidikanFormal_mulai_tanggal;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->akhir_studi           = $insertPendidikanFormal_akhir_tanggal;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->nilai                 = $insertPendidikanFormal_ipk;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->no_ijazah             = $insertPendidikanFormal_no_ijazah;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->ijazah                = $daftar_fileGambarijazah;
        //                                             $insertPendidikanFormal_Pendidikan_Formal->transkrip             = $daftar_fileGambartranskrip;
        //                                 $insertPendidikanFormal_Pendidikan_Formal->save();
        //                                 Session::flash('alert-success', 'Berhasil Upload Data Pendidikan Formal.');
        //                                 return redirect('rekrutmen/?halaman=data-pendidikan-formal');
        //                             }
                
        //                     }else{
        //                         Session::flash('alert-peringatan', 'File harus Lebih Kecil Dari 1 MB.');
        //                         return redirect('rekrutmen/?halaman=data-pendidikan-formal');
        //                     }
        //                 }else{
        //                     Session::flash('alert-peringatan', 'File harus pertype PDF.');
        //                     return redirect('rekrutmen/?halaman=data-pendidikan-formal');
        //                 }
        //             }
        // }
    }

    public function insertPendidikanNonFormal(Request $request)
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


                        $this->validate($request, [
                                                    'pelaksana'    => 'required|max:100',

                                                ]
                                        );  

                        $insertPendidikanFormal_pelaksana               = $request->input('pelaksana');
                        $insertPendidikanFormal_nomor                   = $request->input('nomor'); 
                        $insertPendidikanFormal_nama_ijazah             = $request->input('nama_ijazah');
                        $insertPendidikanFormal_kode                    = $request->input('kode');
                        $insertPendidikanFormal_nama_pemimpin           = $request->input('nama_pemimpin');
                        $insertPendidikanFormal_terbit                  = $request->input('terbit');
                        $insertPendidikanFormal_berlaku                 = $request->input('berlaku');
                        $insertPendidikanFormal_ijazah                  = $request->file('ijazah');

                        $insertPendidikanFormal_getSize_ijazah          = $insertPendidikanFormal_ijazah->getSize(); // 1000000 byte == 1 MB
                        $insertPendidikanFormal_fileGambar_ijazah       = $insertPendidikanFormal_ijazah->getClientOriginalExtension();

                        if($insertPendidikanFormal_fileGambar_ijazah == "pdf"){
                            if($insertPendidikanFormal_getSize_ijazah <= 1000000){ // 1000000 byte == 1 MB
                                
                                $daftar_fileGambarijazah = 'file_pendidikan_non_formal_ijazah_'.time().'.'.$insertPendidikanFormal_ijazah->getClientOriginalExtension();
                                $namaFolderGamabarijazah_ = 'file/rekrutment/pendidikan-non-formal/ijazah/';
                                $insertPendidikanFormal_ijazah->move($namaFolderGamabarijazah_,$daftar_fileGambarijazah);

                                $insertPendidikanFormal_cookie = Akun::where('token', $_COOKIE['cookie-storage-user'])->first();
                                    if ($insertPendidikanFormal_cookie) {
                                        $id_akun = $insertPendidikanFormal_cookie->id;
                                        $insertPendidikanFormal_Pendidikan_Non_Formal = new Pendidikan_Non_Formal();
                                                    $insertPendidikanFormal_Pendidikan_Non_Formal->id_akun                  = $id_akun;
                                                    $insertPendidikanFormal_Pendidikan_Non_Formal->pelaksana                = $insertPendidikanFormal_pelaksana;
                                                    $insertPendidikanFormal_Pendidikan_Non_Formal->nomor_pelaksana          = $insertPendidikanFormal_nomor;
                                                    $insertPendidikanFormal_Pendidikan_Non_Formal->nama_sertifikat          = $insertPendidikanFormal_nama_ijazah;
                                                    $insertPendidikanFormal_Pendidikan_Non_Formal->kode_sertifikat          = $insertPendidikanFormal_kode;
                                                    $insertPendidikanFormal_Pendidikan_Non_Formal->nama_pemimpin            = $insertPendidikanFormal_nama_pemimpin;
                                                    $insertPendidikanFormal_Pendidikan_Non_Formal->tahun_terbit             = $insertPendidikanFormal_terbit;
                                                    $insertPendidikanFormal_Pendidikan_Non_Formal->tahun_akhir_terbit       = $insertPendidikanFormal_berlaku;
                                                    $insertPendidikanFormal_Pendidikan_Non_Formal->sertifikat               = $daftar_fileGambarijazah;
                                                    
                                        $insertPendidikanFormal_Pendidikan_Non_Formal->save();
                                        Session::flash('alert-success', 'Berhasil Upload Data Pendidikan Formal.');
                                        return redirect('rekrutmen/?halaman=data-pendidikan-non-formal');
                                    }

                            }else{
                                Session::flash('alert-peringatan', 'File harus Lebih Kecil Dari 1 MB.');
                                return redirect('rekrutmen/?halaman=data-pendidikan-non-formal');
                            }
                        }else{
                            Session::flash('alert-peringatan', 'File harus pertype PDF.');
                            return redirect('rekrutmen/?halaman=data-pendidikan-non-formal');
                        }
                    }
        }

        
    }

    public function insertUploadFilePribadi(Request $request)
    {
        // $this->validate($request, [
        //                             'pelaksana'    => 'required|max:50',

        //                           ]
        //                 );  

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

                        $insertPendidikanFormal_pelaksana               = $request->input('file');
                        $insertPendidikanFormal_ijazah                  = $request->file('ijazah');

                        $insertPendidikanFormal_getSize_ijazah          = $insertPendidikanFormal_ijazah->getSize(); // 1000000 byte == 1 MB
                        $insertPendidikanFormal_fileGambar_ijazah       = $insertPendidikanFormal_ijazah->getClientOriginalExtension();

                        if($insertPendidikanFormal_fileGambar_ijazah == "pdf"){
                            if($insertPendidikanFormal_getSize_ijazah <= 1000000){ // 1000000 byte == 1 MB
                                
                                $daftar_fileGambarijazah = $insertPendidikanFormal_pelaksana.'_file_'.time().'.'.$insertPendidikanFormal_ijazah->getClientOriginalExtension();
                                $namaFolderGamabarijazah_ = 'file/rekrutment/upload-file/';
                                $insertPendidikanFormal_ijazah->move($namaFolderGamabarijazah_,$daftar_fileGambarijazah);

                                $insertPendidikanFormal_cookie = Akun::where('token', $_COOKIE['cookie-storage-user'])->first();
                                    if ($insertPendidikanFormal_cookie) {
                                        $id_akun = $insertPendidikanFormal_cookie->id;
                                        $insertPendidikanFormal_Pendidikan_Uplod_File = new Uplod_File();
                                                    $insertPendidikanFormal_Pendidikan_Uplod_File->id_akun                  = $id_akun;
                                                    $insertPendidikanFormal_Pendidikan_Uplod_File->nama_file                = $daftar_fileGambarijazah;
                                                    $insertPendidikanFormal_Pendidikan_Uplod_File->status_pemilikan         = "Sendiri";
                                                    $insertPendidikanFormal_Pendidikan_Uplod_File->jenis                    = $insertPendidikanFormal_pelaksana;
                                                    
                                        $insertPendidikanFormal_Pendidikan_Uplod_File->save();
                                        Session::flash('alert-success', 'Berhasil Upload Data Pendidikan Formal.');
                                        return redirect('rekrutmen/?halaman=data-file-data-diri');
                                    }

                            }else{
                                Session::flash('alert-peringatan', 'File harus Lebih Kecil Dari 1 MB.');
                                return redirect('rekrutmen/?halaman=data-file-data-diri');
                            }
                        }else{
                            Session::flash('alert-peringatan', 'File harus pertype PDF.');
                            return redirect('rekrutmen/?halaman=data-file-data-diri');
                        }
                    }
        }

        
    }
}
