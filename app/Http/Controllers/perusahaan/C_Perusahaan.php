<?php

namespace App\Http\Controllers\perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Perusahaan                 as Perusahaan;
use App\Models\admin\M_Data_Perusahaan      as Data_Perusahaan;
use App\Models\M_Akun                       as Akun;

use Session;
use Crypt;
use File;

class C_Perusahaan extends Controller
{
    //
    public function createDataPerusahaan(Request $request){

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
                        $id                             = $request->input('id');
                        $id_perusahaan                  = $request->input('id_perusahaan');
                        $id_akun_perusahaan                  = $request->input('id_akun_perusahaan');

                        $nama_perusahaan                = $request->input('nama_perusahaan');
                        $no_npwp                        = $request->input('no_npwp');
                        // $no_telepon                     = $request->input('no_telepon');

                        $nomor_                     = $request->input('no_telepon');
    
                        $no_telepon = ltrim($nomor_, '0');

                        $email                          = $request->input('email');

                        $nama_pemilik                   = $request->input('nama_pemilik');
                        $alamat                         = $request->input('alamat');
                        $provinsi                       = $request->input('provinsi');

                        $kota                           = $request->input('kota');
                        $kabupaten                      = $request->input('kabupaten');
                        $kelurahan                      = $request->input('kelurahan');
                        $kecamatan                      = $request->input('kecamatan');
                        


                        $insertData_foto_profil             = $request->file('foto_profil');

                        if (!isset($id_perusahaan)) {
                            if ($insertData_foto_profil != "") {
                                $insertPendidikanFormal_getSize_foto_profil         = $insertData_foto_profil->getSize(); // 1000000 byte == 1 MB
                                $insertPendidikanFormal_fileGambar_foto_profil      = $insertData_foto_profil->getClientOriginalExtension();

                                if($insertPendidikanFormal_fileGambar_foto_profil == "jpg" || $insertPendidikanFormal_fileGambar_foto_profil == "jpeg" || $insertPendidikanFormal_fileGambar_foto_profil == "png"){

                                    if($insertPendidikanFormal_getSize_foto_profil <= 1000000){ // 1000000 byte == 1 MB
                                        $daftar_fileGambarfoto_profil = 'profil_file_'.time().'.'.$insertData_foto_profil->getClientOriginalExtension();
                                        $namaFolderGamabarfoto_profil = 'file/profil-dashboard';
                                        $insertData_foto_profil->move($namaFolderGamabarfoto_profil,$daftar_fileGambarfoto_profil);
                                        $login_perusahaan_cookie = Perusahaan::where('token', $_COOKIE['cookie-storage'])->first();

                            
                                        
                                        $insertData_Data_Perusahaan = new Data_Perusahaan();
                                            $insertData_Data_Perusahaan->id_perusahaan                  = $login_perusahaan_cookie->id;
                                            $insertData_Data_Perusahaan->nama_pemilik                   = $nama_pemilik;
                                            $insertData_Data_Perusahaan->foto                           = $daftar_fileGambarfoto_profil;
                                            $insertData_Data_Perusahaan->alamat                         = $alamat;
                                            $insertData_Data_Perusahaan->provinsi                       = $provinsi;
                                            $insertData_Data_Perusahaan->kota                           = $kota;
                                            $insertData_Data_Perusahaan->kabupaten                      = $kabupaten;
                                            $insertData_Data_Perusahaan->kecamatan                      = $kecamatan;
                                            $insertData_Data_Perusahaan->kelurahan                      = $kelurahan;
                                        $insertData_Data_Perusahaan->save();

                                        $insertData_Data_Akun = Perusahaan::find($id_akun_perusahaan);
                                            $insertData_Data_Akun->nama                             = $nama_perusahaan;
                                        $insertData_Data_Akun->save();

                                            if ($insertData_Data_Perusahaan) {
                                                Session::flash('alert-success', 'Berhasil Update Data Perusahaan.');
                                                return redirect('dashboard-panel');
                                            }

                                    }else{
                                        Session::flash('alert-peringatan', 'File harus Lebih Kecil Dari 1 MB.');
                                        return redirect('dashboard-panel');
                                    }
                                }else{
                                    Session::flash('alert-peringatan', 'File harus pertype jpg dan png.');
                                    return redirect('dashboard-panel');
                                }
                            }
                        }else{
                            if ($insertData_foto_profil != "") {
                                $insertPendidikanFormal_getSize_foto_profil         = $insertData_foto_profil->getSize(); // 1000000 byte == 1 MB
                                $insertPendidikanFormal_fileGambar_foto_profil      = $insertData_foto_profil->getClientOriginalExtension();

                                if($insertPendidikanFormal_fileGambar_foto_profil == "jpg" || $insertPendidikanFormal_fileGambar_foto_profil == "jpeg" || $insertPendidikanFormal_fileGambar_foto_profil == "png"){

                                    if($insertPendidikanFormal_getSize_foto_profil <= 1000000){ // 1000000 byte == 1 MB
                                        
                                        $daftar_fileGambarfoto_profil = 'profil_file_'.time().'.'.$insertData_foto_profil->getClientOriginalExtension();
                                        $namaFolderGamabarfoto_profil = 'file/profil-dashboard';
                                        $insertData_foto_profil->move($namaFolderGamabarfoto_profil,$daftar_fileGambarfoto_profil);
                                        $login_perusahaan_cookie = Perusahaan::where('token', $_COOKIE['cookie-storage'])->first();

                                        $insertData_Data_Perusahaan = Data_Perusahaan::find($id_perusahaan);
                                            $insertData_Data_Perusahaan->nama_pemilik                   = $nama_pemilik;
                                            $insertData_Data_Perusahaan->foto                           = $daftar_fileGambarfoto_profil;
                                            $insertData_Data_Perusahaan->alamat                         = $alamat;
                                            $insertData_Data_Perusahaan->provinsi                       = $provinsi;
                                            $insertData_Data_Perusahaan->kota                           = $kota;
                                            $insertData_Data_Perusahaan->kabupaten                      = $kabupaten;
                                            $insertData_Data_Perusahaan->kecamatan                      = $kecamatan;
                                            $insertData_Data_Perusahaan->kelurahan                      = $kelurahan;
                                        $insertData_Data_Perusahaan->save();

                                        $insertData_Data_Akun = Perusahaan::find($id);
                                            $insertData_Data_Akun->nama                   = $nama_perusahaan;
                                            $insertData_Data_Akun->nik                           = $no_npwp;
                                            $insertData_Data_Akun->email                         = $email;
                                            $insertData_Data_Akun->no_hp                       = $no_telepon;
                                        $insertData_Data_Akun->save();

                                            if ($insertData_Data_Perusahaan) {
                                                File::delete('file/profil-dashboard/'.$request->input('gambar'));
                                                Session::flash('alert-success', 'Berhasil Update Data Perusahaan.');
                                                return redirect('dashboard-panel');
                                            }

                                    }else{
                                        Session::flash('alert-peringatan', 'File harus Lebih Kecil Dari 1 MB.');
                                        return redirect('dashboard-panel');
                                    }
                                }else{
                                    Session::flash('alert-peringatan', 'File harus pertype jpg dan png.');
                                    return redirect('dashboard-panel');
                                }
                            }else{
                                $insertData_Data_Perusahaan = Data_Perusahaan::find($id_perusahaan);
                                    $insertData_Data_Perusahaan->nama_pemilik                   = $nama_pemilik;
                                    $insertData_Data_Perusahaan->alamat                         = $alamat;
                                    $insertData_Data_Perusahaan->provinsi                       = $provinsi;
                                    $insertData_Data_Perusahaan->kota                           = $kota;
                                    $insertData_Data_Perusahaan->kabupaten                      = $kabupaten;
                                    $insertData_Data_Perusahaan->kecamatan                      = $kecamatan;
                                    $insertData_Data_Perusahaan->kelurahan                      = $kelurahan;
                                $insertData_Data_Perusahaan->save();

                                $insertData_Data_Akun = Perusahaan::find($id);
                                    $insertData_Data_Akun->nama                   = $nama_perusahaan;
                                    $insertData_Data_Akun->nik                           = $no_npwp;
                                    $insertData_Data_Akun->email                         = $email;
                                    $insertData_Data_Akun->no_hp                       = $no_telepon;
                                $insertData_Data_Akun->save();

                                if ($insertData_Data_Perusahaan) {
                                    Session::flash('alert-success', 'Berhasil Update Data Perusahaan.');
                                    return redirect('dashboard-panel');
                                }
                            }
                        }
                    }
        }

    }

    public function statusPerusahaan(Request $request)
    {    
                    $type = Perusahaan::find($request->id_status);

                    $type->update([
                        'status' => $request->name,
                    ]);
    }

    public function perusahaan()
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
                            
                        $data['dahboard_perusahaan'] = Perusahaan::get();
                        $data['dahboard_perusahaan_tidak'] = Perusahaan::where('status', 'tidak')->get();
                        $data['dahboard_perusahaan_aktif'] = Perusahaan::where('status', 'aktif')->get();

                        return view('admin.tema-satu.home.perusahaan.tab-perusahaan.tab-menu-perusahaan.tab-menu', $data);
                    }
        }
    }
}
