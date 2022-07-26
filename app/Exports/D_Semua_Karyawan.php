<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Karyawan                 as Karyawan;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class D_Semua_Karyawan implements FromView
{

    public function __construct(string $keyword)
    {
        $this->key = $keyword;
    }

    public function view(): View
    {
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

        if($this->key == "semua-karyawan"){
            return view('admin.tema-satu.home.karyawan.dokumentasi.file-semua-karyawan', [
                'data' => Karyawan::with([
                    'akun' => function($query){
                        return $query->with('data_diri')
                                    ->with('data_orang_tua')
                                    ->with('data_karyawan')
                                    ->with('karpkwtyawan')
                                    ->with('pendidikan_formal')
                                    ->with('pendidikan_non_formal')
                                    ->with('file_pribadi')
                                    ->with([
                                        'jabatan_gaji' => function($query){
                                            return $query->with('jabatan')->with('gaji');
                                        }
                                    ])
                                    ->with('kontrak')
                                    ->with(['riw_penempatan_wilayah' => function($query){
                                        return $query->with('penempatan');
                                    }
                                    ]);
                    }
                ],
                )
                ->whereHas('akun', 
                function($query) use ($id_perusahaan_){
                    $query->where('id_perusahaan', $id_perusahaan_);  
                })
                ->orderBy('id','desc')->get()
            ]);
        }else{
            return view('admin.tema-satu.home.karyawan.dokumentasi.file-semua-karyawan', [
                'data' => Karyawan::with([
                    'akun' => function($query){
                        return $query->with('data_diri')
                                    ->with('data_orang_tua')
                                    ->with('data_karyawan')
                                    ->with('karpkwtyawan')
                                    ->with('pendidikan_formal')
                                    ->with('pendidikan_non_formal')
                                    ->with('file_pribadi')
                                    ->with([
                                        'jabatan_gaji' => function($query){
                                            return $query->with('jabatan')->with('gaji');
                                        }
                                    ])
                                    ->with('kontrak')
                                    ->with(['riw_penempatan_wilayah' => function($query){
                                        return $query->with('penempatan');
                                    }
                                    ]);
                    }
                ],
                )->where('status_data', $this->key)
                ->whereHas('akun', 
                function($query) use ($id_perusahaan_){
                    $query->where('id_perusahaan', $id_perusahaan_);  
                })
                ->orderBy('id','desc')->get()
            ]);
        }
    }
}