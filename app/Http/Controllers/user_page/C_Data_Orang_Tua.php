<?php

namespace App\Http\Controllers\user_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

use App\Models\M_Akun as Akun;
use App\Models\rekrutmen\M_Data_Orang_Tua as Data_Orang_Tua;

class C_Data_Orang_Tua extends Controller
{
    //
    public function insertData(Request $request)
    {
        $this->validate($request, [
                'hubungan'          => 'required|max:5',
                'nama_lengkap'      => 'required|max:50',
                'tempat_lahir'      => 'required|max:50',
                'tanggal_lahir'     => 'required|max:15',
                'agama'             => 'required|max:30',
                'alamat_ktp'        => 'required|max:100',
                'provinsi_ktp'      => 'required|max:100',
                'kota_ktp'          => 'required|max:50',

                'kota_ktp'          => 'required|max:50',
                'kabupaten_ktp'     => 'required|max:50',
                'kecamatan_ktp'     => 'required|max:50',
                'kelurahan_ktp'     => 'required|max:50',
                'no_hp'             => 'required|max:15',

            ]
        );  

        // $insertData_cookie_data_diri        = $request->input('cookie_data_diri');
        $insertData_hubungan                = $request->input('hubungan');
        $insertData_nama_lengkap            = $request->input('nama_lengkap');

        $insertData_tempat_lahir            = $request->input('tempat_lahir');
        $insertData_tanggal_lahir           = $request->input('tanggal_lahir');
        $insertData_agama                   = $request->input('agama');
        $insertData_alamat_ktp              = $request->input('alamat_ktp');
        $insertData_provinsi_ktp            = $request->input('provinsi_ktp');
        $insertData_kota_ktp                = $request->input('kota_ktp');
        $insertData_kabupaten_ktp           = $request->input('kabupaten_ktp');
        $insertData_kecamatan_ktp           = $request->input('kecamatan_ktp');
        $insertData_kelurahan_ktp           = $request->input('kelurahan_ktp');
        $insertData_no_hp                   = $request->input('no_hp');

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

                                $insertData_data_orang_tua = new Data_Orang_Tua();
                                    $insertData_data_orang_tua->id_akun               = $id_akun;
                                    $insertData_data_orang_tua->hubungan              = $insertData_hubungan;
                                    $insertData_data_orang_tua->nama_lengkap          = $insertData_nama_lengkap;
                                    $insertData_data_orang_tua->tempat_lahir          = $insertData_tempat_lahir;
                                    $insertData_data_orang_tua->tanggal_lahir         = $insertData_tanggal_lahir;
                                    $insertData_data_orang_tua->agama                 = $insertData_agama;
                                    $insertData_data_orang_tua->alamat_ktp            =$insertData_alamat_ktp;
                                    $insertData_data_orang_tua->provinsi_ktp          =$insertData_provinsi_ktp;
                                    $insertData_data_orang_tua->kota_ktp              =$insertData_kota_ktp;
                                    $insertData_data_orang_tua->kabupaten_ktp         =$insertData_kabupaten_ktp;
                                    $insertData_data_orang_tua->kecamatan_ktp         =$insertData_kecamatan_ktp;
                                    $insertData_data_orang_tua->kelurahan_ktp         =$insertData_kelurahan_ktp;
                                    $insertData_data_orang_tua->no_hp                 = $insertData_no_hp;
                                $insertData_data_orang_tua->save();

                                Session::flash('alert-success', 'Upload Data Orang Tua.');
                                return redirect('rekrutmen/?halaman=data-orang-tua');
                            }

                    }
        }
    }

    
}
