<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use File;
use Crypt;

use App\Models\rekrutmen\M_Uplod_File               as Uplod_File;
use App\Models\M_Akun                               as Akun;

class C_File_Pribadi extends Controller
{
    //
    public function insertUploadFilePribadi(Request $request)
    {
        // $this->validate($request, [
        //                             'pelaksana'    => 'required|max:50',

        //                           ]
        //                 );  

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
                                        
                        $insertPendidikanFormal_pelaksana               = $request->input('file');
                        $insertPendidikanFormal_ijazah                  = $request->file('ijazah');

                        $insertPendidikanFormal_getSize_ijazah          = $insertPendidikanFormal_ijazah->getSize(); // 1000000 byte == 1 MB
                        $insertPendidikanFormal_fileGambar_ijazah       = $insertPendidikanFormal_ijazah->getClientOriginalExtension();

                        if($insertPendidikanFormal_fileGambar_ijazah == "pdf"){
                            if($insertPendidikanFormal_getSize_ijazah <= 1000000){ // 1000000 byte == 1 MB
                                
                                $daftar_fileGambarijazah = $insertPendidikanFormal_pelaksana.'_file_'.time().'.'.$insertPendidikanFormal_ijazah->getClientOriginalExtension();
                                $namaFolderGamabarijazah_ = 'file/rekrutment/upload-file/';
                                $insertPendidikanFormal_ijazah->move($namaFolderGamabarijazah_,$daftar_fileGambarijazah);

                                $insertPendidikanFormal_cookie = Akun::where('token', $_COOKIE['cookie-storage'])->first();
                                    if ($insertPendidikanFormal_cookie) {
                                        $id_akun = $insertPendidikanFormal_cookie->id;
                                        $insertPendidikanFormal_Pendidikan_Uplod_File = new Uplod_File();
                                                    $insertPendidikanFormal_Pendidikan_Uplod_File->id_akun                  = $id_akun;
                                                    $insertPendidikanFormal_Pendidikan_Uplod_File->nama_file                = $daftar_fileGambarijazah;
                                                    $insertPendidikanFormal_Pendidikan_Uplod_File->status_pemilikan         = "Sendiri";
                                                    $insertPendidikanFormal_Pendidikan_Uplod_File->jenis                    = $insertPendidikanFormal_pelaksana;
                                                    
                                        $insertPendidikanFormal_Pendidikan_Uplod_File->save();
                                        Session::flash('alert-success', 'Berhasil Upload Data Pendidikan Formal.');
                                        return redirect('dashboard-panel/?halaman=data-file-data-diri');
                                    }

                            }else{
                                Session::flash('alert-peringatan', 'File harus Lebih Kecil Dari 1 MB.');
                                return redirect('dashboard-panel/?halaman=data-file-data-diri');
                            }
                        }else{
                            Session::flash('alert-peringatan', 'File harus pertype PDF.');
                            return redirect('dashboard-panel/?halaman=data-file-data-diri');
                        }
                    }
        }

        
    }

    public function hapusRiwayat(Request $request)
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
                                        
                        $course_id = Crypt::decrypt($request->id); 

                        $Uplod_File = Uplod_File::where('id', $course_id)->first();
                    
                        // echo $Uplod_File->nama_file;
                        

                        $Uplod_File = Uplod_File::find($course_id);
                        $Uplod_File->delete();
                            if ($Uplod_File) {

                                File::delete('file/rekrutment/upload-file/'.$Uplod_File->nama_file);

                                Session::flash('alert-success', ' Delete Riwayat Data File Diri.');
                                return redirect('dashboard-panel/?halaman=data-file-data-diri');
                                
                            }
                    }
        }
        
        
    }
}
