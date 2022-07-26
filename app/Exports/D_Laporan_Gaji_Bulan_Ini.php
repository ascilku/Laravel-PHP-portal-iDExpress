<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\FromCollection;

use DB;

use App\Models\admin\M_Absensi                  as Absensi;

class D_Laporan_Gaji_Bulan_Ini implements FromView
{

    public function view(): View
    {
        $data['dahboard_kpi'] = Absensi::orderBy('tanggal','desc')->first();
        $data_dahboard_kpi = $data['dahboard_kpi']->tanggal;

  
            return view('admin.tema-satu.home.karyawan.dokumentasi.laporan-gaji', [
                'data' => 
                            DB::table('absensi')
                                        // ->select('akun.nik AS nip', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' ,'jabatan.*', 'gaji.*',
                                        ->select('karyawan.tanggal_join AS tanggal_masuk','akun.nik AS nip','absensi.tanggal AS tgl_absen', 'absensi.*', 'akun.*' , 'data_diri.*' ,  'jabatan_gaji.*' ,   'jabatan.*' , 'gaji.*' , 'tunjangan.*' , 'insentif_kurir.*' , 'insentif_kpi.*' , 'orang_kpi.*'  , 'rp_kpi.*' ,

                                        // ->select( 'jabatan_gaji.*' ,   'jabatan.*', 'gaji.*',
                                        DB::raw("SUM(CASE WHEN jam_masuk != '' AND jam_pulang != 0 THEN 1 ELSE 0 END) AS kehadiran"),
                                        DB::raw("SUM(CASE WHEN ket_masuk = 'Missing' OR ket_pulang = 'Missing' THEN 1 ELSE 0 END) AS alpha"),
                                        DB::raw("SUM(CASE WHEN status_approv = 'Pengganti' THEN 1 ELSE 0 END) AS libur_nasional"),
                                        DB::raw("SUM(CASE WHEN status_approv = 'Annual le' THEN 1 ELSE 0 END) AS cuti")
                                    )
                                    ->join('akun', function ($join) {
                                        $join->on('absensi.id_akun', '=', 'akun.id')
                                        ->join('data_diri', function ($join) {
                                            $join->on('akun.id', '=', 'data_diri.id_akun');
                                        })
                                        ->leftJoin('jabatan_gaji', function ($join) {
                                            $join->on('akun.id', '=', 'jabatan_gaji.id_akun')
                                            ->leftJoin('jabatan', function ($join) {
                                                $join->on('jabatan_gaji.id_jabatan', '=', 'jabatan.id');
                                                // $join->on('jabatan_gaji.id_jabatan', '=', DB::raw('(SELECT id FROM jabatan WHERE jabatan_gaji.id_jabatan = jabatan.id LIMIT 1)'));
                                            })
                                            ->leftJoin('gaji', function ($join) {
                                                $join->on('jabatan_gaji.id_gaji', '=', 'gaji.id');
                                            })
                                            // ->leftJoin('jabatan.id', '=', DB::raw('(SELECT id FROM jabatan WHERE jabatan_gaji.id_jabatan = jabatan.id LIMIT 1)'))
                                            ;
                                        });
                                    })->leftjoin('insentif_kpi', function($join){
                                        $join->on('akun.id', '=', 'insentif_kpi.id_akun');
                                    })
                                    ->leftjoin('tunjangan', function($join){
                                                        $join->on('akun.id', '=', 'tunjangan.id_akun');
                                                    })
                                    ->leftjoin('insentif_kurir', function($join){
                                        $join->on('akun.id', '=', 'insentif_kurir.id_akun');
                                    })
                                    ->leftjoin('orang_kpi', function ($join) {
                                        $join->on('akun.id', '=', 'orang_kpi.id_akun')
                                        ->join('rp_kpi', function ($join) {
                                            $join->on('orang_kpi.id_rp_kpi', '=', 'rp_kpi.id');
                                        });
                                    })

                                    ->leftjoin('karyawan', function($join){
                                        $join->on('akun.id', '=', 'karyawan.id_akun');
                                    })
                                    // ->leftjoin('insentif_kpi', function($join){
                                    //     $join->on('akun.id', '=', 'insentif_kpi.id_akun');
                                    // })
                                    // ->where('jabatan_gaji.id', \DB::raw("(select max(`id`) from jabatan_gaji)"))
                                    // ->where('jabatan_gaji.id',  DB::raw('(SELECT id FROM jabatan_gaji LIMIT 1)'))
                                    // ->orderBy('jabatan_gaji.created_at', 'desc')
                                    ->groupBy('absensi.id_akun')
                                    ->groupBy('tanggal')
                                    ->where('tanggal', $data_dahboard_kpi)->get()
            ]);
        
    }
}