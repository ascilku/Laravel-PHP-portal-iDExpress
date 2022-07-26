<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Akun                           as Akun;
use App\Models\rekrutmen\M_Lowongan_Kerja       as Lowongan_Kerja;
use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\rekrutmen\M_Aply_Lowongan        as Aply_Lowongan;

use Session;
use Crypt;
use File;

class C_Lowongan_pekerjaan extends Controller
{
    public function LowonganPekerjaan()
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


                                            
                            // echo "fhf";
                            $dahboard_akun_cookie_ = Perusahaan::where('token', $_COOKIE['cookie-storage'])->first();
                            if (isset($dahboard_akun_cookie_)) {
                                $data['dahboard_akun_cookie'] = Perusahaan::where('token', $_COOKIE['cookie-storage'])->with('akses')->with('data_perusahaan')->first();
                            }else{
                                $data['dahboard_akun_cookie'] = Akun::where('token', $_COOKIE['cookie-storage'])
                                    ->with([
                                        'perusahaan' => function($query){
                                            return $query->with('data_perusahaan');
                                        }

                                    ])
                                    ->with('akses')->with('data_diri')->with('perusahaan')
                                ->first();

                            }
                            
                            // $data['akun_dashboard'] = Akun::where('token', $_COOKIE['cookie-storage'])->with('akses')->with('data_diri')->with('perusahaan')->first();
                            $data['dahboard_Lowongan_Kerja'] = Lowongan_Kerja::with('perusahaan')->orderBy('id', 'DESC')->get();
                            
                            $data['dahboard_akun_lowongan'] = Akun::with('akses')->with('data_diri')
                                                                                ->with('data_orang_tua')
                                                                                ->with('pendidikan_formal')
                                                                                ->whereHas('akses', 
                                                                                    function($query){
                                                                                        $query->where('akses', 'User');  
                                                                                    })
                                                                                ->get();

                            // $data['dahboard_orang_lowongan'] = Akun::with('akses')->with('data_diri')
                            //                                                         ->with([
                            //                                                             'aply_lowongan' => function($query){
                            //                                                                 return $query->with('lowongan_kerja');
                            //                                                             }

                            //                                                         ])
                            //                                                         ->whereHas('akses', 
                            //                                                         function($query){
                            //                                                             $query->where('akses', 'User');  
                            //                                                         })
                            //                                                         ->whereHas('aply_lowongan_', 
                            //                                                         function($query){
                            //                                                             $query->where('status', 'Buka');  
                            //                                                         })
                            //                                                         ->orderBy('id', 'DESC')
                            //                                                         ->get();

                            
                            $data['dahboard_orang_lowongan'] = Aply_Lowongan::with([
                                                                                        'akun' => function($query){
                                                                                            return $query->with('akses')
                                                                                                        ->with('data_diri');
                                                                                        }

                                                                                    ])
                                                                                    ->with('lowongan_kerja')
                                                                                    // ->whereHas('akses', 
                                                                                    // function($query){
                                                                                    //     $query->where('akses', 'User');  
                                                                                    // })
                                                                                    // ->whereHas('aply_lowongan_', 
                                                                                    // function($query){
                                                                                    //     $query->where('status', 'Buka');  
                                                                                    // })
                                                                                    ->orderBy('id', 'DESC')
                                                                                    ->where('status', 'Buka')
                                                                                    ->orWhere('status', 'Expired')
                                                                                    ->get();

                            return view('admin.tema-satu.home.karyawan.tabel-lowongan.tabel-lowongan', $data);
                        }
        }
    }

    public function createLowongan(Request $request)
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

                                        
                        $id          = $request->input('id');
                        $createLowongan_judul_lowongan          = $request->input('judul_lowongan');
                        $createLowongan_deskripsi_owongan       = $request->input('deskripsi_owongan');
                        $createLowongan_tanggal_buka            = $request->input('tanggal_buka');
                        $createLowongan_tanggal_tutup           = $request->input('tanggal_tutup');
                        $createLowongan_gambar_lowongan         = $request->file('gambar_lowongan');

                        $createLowongan_cookie = Akun::where('token', $_COOKIE['cookie-storage'])->first();
                            if ($createLowongan_cookie) {

                                if ($id) {
                                    $edit_Lowongan_Kerja = Lowongan_Kerja::where('id', $id)->first();

                                    

                                    $insertPendidikanFormal_getSize_foto_profil          = $createLowongan_gambar_lowongan->getSize(); // 1000000 byte == 1 MB
                                        $insertPendidikanFormal_fileGambar_foto_profil       = $createLowongan_gambar_lowongan->getClientOriginalExtension();

                                        if($insertPendidikanFormal_fileGambar_foto_profil == "jpg" || $insertPendidikanFormal_fileGambar_foto_profil == "png" || $insertPendidikanFormal_fileGambar_foto_profil == "jpeg"){

                                            if($insertPendidikanFormal_getSize_foto_profil <= 1000000){ // 1000000 byte == 1 MB

                                                


                                                $daftar_fileGambarfoto_profil = 'lowongan_'.time().'.'.$createLowongan_gambar_lowongan->getClientOriginalExtension();
                                                $namaFolderGamabarfoto_profil = 'file/rekrutment/lowongan-kerja';
                                                $createLowongan_gambar_lowongan->move($namaFolderGamabarfoto_profil,$daftar_fileGambarfoto_profil);
                                                

                                                $createLowongan_Lowongan_Kerja = Lowongan_Kerja::find($id);
                                                        $createLowongan_Lowongan_Kerja->judul                   = $createLowongan_judul_lowongan;
                                                        $createLowongan_Lowongan_Kerja->deskripsi               = $createLowongan_deskripsi_owongan;
                                                        $createLowongan_Lowongan_Kerja->tgl_buka                = $createLowongan_tanggal_buka;
                                                        $createLowongan_Lowongan_Kerja->tgl_tutup               = $createLowongan_tanggal_tutup;
                                                        $createLowongan_Lowongan_Kerja->nama_file               = $daftar_fileGambarfoto_profil;
                                                        $createLowongan_Lowongan_Kerja->status                  = "Buka";
                                                $createLowongan_Lowongan_Kerja->save();

                                                File::delete('file/rekrutment/lowongan-kerja/'.$edit_Lowongan_Kerja->nama_file);

                                                Session::flash('alert-success', 'Upload Edit Lowongan.');
                                                return redirect('dashboard-panel/lowongan-pekerjaan');
                                            }else{
                                                Session::flash('alert-peringatan', 'File harus Lebih Kecil Dari 1 MB.');
                                                return redirect('dashboard-panel/lowongan-pekerjaan');
                                            }

                                        }else{
                                            Session::flash('alert-peringatan', 'File harus pertype jpg, jpeg atau png.');
                                            return redirect('dashboard-panel/lowongan-pekerjaan');
                                        }

                                }else{

                                    $id_akun = $createLowongan_cookie->id;
                                    $id_perusahaan = $createLowongan_cookie->id_perusahaan;
                                    $insertPendidikanFormal_getSize_foto_profil          = $createLowongan_gambar_lowongan->getSize(); // 1000000 byte == 1 MB
                                        $insertPendidikanFormal_fileGambar_foto_profil       = $createLowongan_gambar_lowongan->getClientOriginalExtension();

                                        if($insertPendidikanFormal_fileGambar_foto_profil == "jpg" || $insertPendidikanFormal_fileGambar_foto_profil == "png" || $insertPendidikanFormal_fileGambar_foto_profil == "jpeg"){

                                            if($insertPendidikanFormal_getSize_foto_profil <= 1000000){ // 1000000 byte == 1 MB
                                                $daftar_fileGambarfoto_profil = 'lowongan_'.time().'.'.$createLowongan_gambar_lowongan->getClientOriginalExtension();
                                                $namaFolderGamabarfoto_profil = 'file/rekrutment/lowongan-kerja';
                                                $createLowongan_gambar_lowongan->move($namaFolderGamabarfoto_profil,$daftar_fileGambarfoto_profil);
                                                
                                                $no_surat = Lowongan_Kerja::orderBy('id', 'DESC')->limit(1)->first();
                                                
                                                    if (!isset($no_surat)) {
                                                        $no_surat                   = 1;
                                                        $createKontrak_no_kontrak   = str_pad($no_surat, 4, 0, STR_PAD_LEFT);
                                                        
                                                    }else{
                                                        $sub_kalimat = substr($no_surat->id_lowongan,1);
                                                        $no_kontrak   = $sub_kalimat;
                                                        $nomor                      = $no_kontrak+1;
                                                        $createKontrak_no_kontrak   = str_pad($nomor, 4, 0, STR_PAD_LEFT);
                                                    }

                                                $createLowongan_Lowongan_Kerja = new Lowongan_Kerja();
                                                        $createLowongan_Lowongan_Kerja->id_akun                 = $id_akun;
                                                        $createLowongan_Lowongan_Kerja->id_perusahaan           = $id_perusahaan;
                                                        $createLowongan_Lowongan_Kerja->id_lowongan             = "L".$createKontrak_no_kontrak;
                                                        $createLowongan_Lowongan_Kerja->judul                   = $createLowongan_judul_lowongan;
                                                        $createLowongan_Lowongan_Kerja->deskripsi               = $createLowongan_deskripsi_owongan;
                                                        $createLowongan_Lowongan_Kerja->tgl_buka                = $createLowongan_tanggal_buka;
                                                        $createLowongan_Lowongan_Kerja->tgl_tutup               = $createLowongan_tanggal_tutup;
                                                        $createLowongan_Lowongan_Kerja->nama_file               = $daftar_fileGambarfoto_profil;
                                                        $createLowongan_Lowongan_Kerja->status                  = "Buka";
                                                $createLowongan_Lowongan_Kerja->save();

                                                Session::flash('alert-success', 'Upload Lowongan.');
                                                return redirect('dashboard-panel/lowongan-pekerjaan');
                                            }else{
                                                Session::flash('alert-peringatan', 'File harus Lebih Kecil Dari 1 MB.');
                                                return redirect('dashboard-panel/lowongan-pekerjaan');
                                            }

                                        }else{
                                            Session::flash('alert-peringatan', 'File harus pertype jpg, jpeg atau png.');
                                            return redirect('dashboard-panel/lowongan-pekerjaan');
                                        }
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
        }
    }

    public function hapusLowongan(Request $request)
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
                                        
                        $course_id = Crypt::decrypt($request->input('id')); 

                        $hapusLowongan_Gaji = Lowongan_Kerja::find($course_id);
                        $hapusLowongan_Gaji->delete();
                        $hapusLowongan_Gaji->nama_file;
                            if ($hapusLowongan_Gaji) {

                                File::delete('file/rekrutment/lowongan-kerja/'.$hapusLowongan_Gaji->nama_file);
                                
                                Session::flash('alert-success-karyawan', 'Berhasil Delete Lowongan.');
                                return redirect('dashboard-panel/lowongan-pekerjaan');

                            }
                    }
        }
    }

    public function hapusUser(Request $request)
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
                                        
                        $course_id = $request->input('id'); 

                        $hapusLowongan_Gaji = Aply_Lowongan::find($course_id);
                        $hapusLowongan_Gaji->delete();
                            if ($hapusLowongan_Gaji) {
                                
                                Session::flash('alert-success-karyawan', 'Berhasil Delete.');
                                return redirect('dashboard-panel/lowongan-pekerjaan');

                            }
                    }
        }
    }

    public function cv(Request $request)
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
        
                        $id = Crypt::decrypt($request->id);
                        $insertData_cookie = Akun::where('id', $id)->first();
                            if ($insertData_cookie) {

                                


                                $id_akun = $insertData_cookie->id;
                            
                                $data['rekrutment_Aply_Lowongan'] = Aply_Lowongan::with('lowongan_kerja')->where('id_akun', $id_akun)->where('status', 'Buka')->first();
                                    
                                    $data['rekrutment_data_diri'] = Akun::with('data_diri')
                                                                    ->with('data_orang_tua')
                                                                    ->with('pendidikan_formal')
                                                                    ->with('pendidikan_non_formal')
                                                                    ->with('file_pribadi')
                                                                    ->where('id', $id_akun)->first();

                                        
                                    // $pdf->loadview('user.rekrutmen.item-data-diri.cv', $data);
                                    // return $pdf->stream('CV'.$data['rekrutment_data_diri']->data_diri->nama_lengkap.'.pdf');

                                    return view('user.rekrutmen.item-data-diri.cv', $data);
                                                    
                                                
                            }
                    }
        }
    }
}
