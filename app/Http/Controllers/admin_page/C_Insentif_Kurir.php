<?php

namespace App\Http\Controllers\admin_page;

use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_I_Kurir                  as Kurir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Create_I_Kurir;

use Session;

class C_Insentif_Kurir extends Controller
{
    public function index($key)
    {
       $data['key'] = $key;

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

                    if ($key == 'new') {
                        $id_perusahaan_;

                        $data['dahboard_kurir'] = Kurir::orderBy('date','desc')->first();
                            if(isset($data['dahboard_kurir'])){

                           

                                $date_perbandingan = $data['dahboard_kurir']->date;

                                $data['dahboard_karyawan_Kurir'] = Kurir::with(['akun' => function($query){
                                                                            return $query->with('data_diri')
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
                                                                        ])
                                                                        ->where('date', $date_perbandingan)->orderBy('date','desc')->get();
                            }
                    }else{
                        $data['dahboard_karyawan_Kurir'] = Kurir::with(['akun' => function($query){
                                                                        return $query->with('data_diri')
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
                                                                    ])
                                                                    ->orderBy('date','desc')->get();
                    }

                    $data['dahboard_Orang_KPI'] = Kurir::with([
                        'akun' => function($query){
                            return $query->with('data_diri');
                        }
                    ])->whereHas('akun', 
                            function($query) use ($id_perusahaan_){
                                $query->where('id_perusahaan', $id_perusahaan_);  
                    })->distinct()->get('id_akun');


                    return view('admin.tema-satu.home.karyawan.tab-insentif.kurir.menu-insentif', $data);
    }

    public function createExelKurir(Request $request)
    {
       
                        // Excel::import(new Create_KPI(),request()->file('file'));

                        // $exelKaryawanAktif = Excel::import(new Create_I_KPI(),request()->file('file'));
                        $date_ = date('01 F Y');
                        $exelKaryawanAktif = Excel::import(new Create_I_Kurir,$request->file('file'));

                        if (isset($exelKaryawanAktif)) {

                            Session::flash('alert-success-karyawan', "Berhasil Input Insentif Kurir Tanggal Ini $date_");
                            return redirect('dashboard-panel/Insentif-kurir/new');
                        }
        
    }
}
