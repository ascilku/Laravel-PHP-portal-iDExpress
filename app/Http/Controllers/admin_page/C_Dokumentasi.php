<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\M_Akun                           as Akun;

use App\Exports\D_Semua_Karyawan;
use App\Exports\D_Laporan_Gaji_Bulan_Ini;

use Maatwebsite\Excel\Facades\Excel;

class C_Dokumentasi extends Controller
{
    public function index()
    {
        $dahboard_akun_cookie_ = Perusahaan::where('token', $_COOKIE['cookie-storage'])->first();
            if (isset($dahboard_akun_cookie_)) {
                $data['dahboard_akun_cookie'] = Perusahaan::where('token', $_COOKIE['cookie-storage'])->with('akses')->with('data_perusahaan')->first();
                $id_perusahaan_ = $data['dahboard_akun_cookie']->id;
            }else{   

                $data['dahboard_akun_cookie'] = Akun::where('token', $_COOKIE['cookie-storage'])
                                                                                                            ->with([
                                                                                                                'perusahaan' => function($query){
                                                                                                                    return $query->with('data_perusahaan');
                                                                                                                }

                                                                                                            ])
                                                                                                            ->with('akses')->with('data_diri')->with('perusahaan')
                                                                                                        ->first();
                $id_perusahaan_ = $data['dahboard_akun_cookie']->perusahaan->id;


            }
        return view('admin.tema-satu.home.karyawan.dokumentasi.dokumentasi', $data);
    }

    public function downloadDokumentasi($key)
    {
        // echo $key;
        return Excel::download(new D_Semua_Karyawan($key), 'Data Karyawan.xlsx');
        // $exelKaryawanAktif = Excel::import(new Create_Absensi,$request->file('file'));
    }

    public function downloadDokumentasiLaporanGaji($key)
    {
        // echo $key;
        return Excel::download(new D_Laporan_Gaji_Bulan_Ini, 'Data Laporan Gaji.xlsx');
        // $exelKaryawanAktif = Excel::import(new Create_Absensi,$request->file('file'));
    }

}
