<?php

namespace App\Http\Controllers\admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\M_Kontrak as Kontrak;
use App\Models\admin\M_Pkwt as Pkwt;
use App\Models\admin\M_Jabatan_Gaji             as Jabatan_Gaji;
use App\Models\admin\M_Karyawan                 as Karyawan;
use App\Models\M_Akun                           as Akun;
use App\Models\M_Perusahaan                     as Perusahaan;

use App\Models\admin\M_Tunjangan                as Tunjangan;

use Session;
use PDF;
use Crypt;

class C_Kontrak extends Controller
{
    //

    public function kontrak($key, Request $request)
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

                        if (!isset($request->id)) {
                                
                        }else{
                            $data['id_req_akun'] = $request->id;   
                            $data['nama_req_akun'] = $request->nama;           
                            $data['dahboard_kontrak'] = Kontrak::
                                                                        with([
                                                                            'akun' => function($query){
                                                                                return $query->with('data_diri');
                                                                            }])
                                                                            ->with([
                                                                                'pkwt' => function($query){
                                                                                    return $query->with('rwy_tunjangan_pkwt')
                                                                                                ->with([
                                                                                                    'riw_jabatan_gaji' => function($query){
                                                                                                        return $query->with('jabatan')
                                                                                                                        ->with('gaji');
                                                                                                    }
                                                                                                ])
                                                                                                ->with([
                                                                                                    'penempatan_wilayah_riw' => function($query){
                                                                                                        return $query->with('penempatan');
                                                                                                    }
                                                                                                ]);
                                                                                }
                                                                            ])
                                                                            ->where('id_akun', $request->id)->orderBy('id', 'desc')->get();

                            $data['dahboard_kontrak_id'] = Kontrak::where('id_akun', $request->id)->orderBy('id', 'desc')->first();

                            $data['dahboard_tunjangan_id'] = Tunjangan::where('id_akun', $request->id)->orderBy('id', 'desc')->first();
                            
                        }

                       $data['dahboard_cek_karyawan_kontrak_aktif'] = Karyawan::with([
                                                                        'akun' => function($query){
                                                                            return $query->with('data_diri')
                                                                                        ->with('data_orang_tua')
                                                                                        ->with('pendidikan_formal')
                                                                                        ->with('pendidikan_non_formal')
                                                                                        ->with('file_pribadi')
                                                                                        ->with([
                                                                                            'riw_jabatan_gaji' => function($query){
                                                                                                return $query->with('jabatan');
                                                                                            }
                                                                                        ])
                                                                                        ->with([
                                                                                            'kontrak' => function($query){
                                                                                                return $query->with([
                                                                                                    'pkwt' => function($query){
                                                                                                        return $query->with('rwy_tunjangan_pkwt')
                                                                                                                    ->with([
                                                                                                                        'riw_jabatan_gaji' => function($query){
                                                                                                                            return $query->with('jabatan')
                                                                                                                                            ->with('gaji');
                                                                                                                        }
                                                                                                                    ])
                                                                                                                    ->with([
                                                                                                                        'penempatan_wilayah_riw' => function($query){
                                                                                                                            return $query->with('penempatan');
                                                                                                                        }
                                                                                                                    ]);
                                                                                                    }
                                                                                                ]);
                                                                                            }
                                                                                        ])
                                                                                        ->with('kontrak_semua')
                                                                                        ->with('riw_penempatan_wilayah');
                                                                        }
                                                                    ],
                                                                    )
                                                                    ->get();
                                                                                                        // ->where('status_data', 'Aktif')->get();
                                                                
                      

                        // $data['dahboard_karyawan'] = Karyawan::with([
                        //     'akun' => function($query){
                        //         return $query->with('data_diri')
                        //                     ->with('data_karyawan')
                        //                     ->with('data_orang_tua')
                        //                     ->with('pendidikan_formal')
                        //                     ->with('pendidikan_non_formal')
                        //                     ->with('file_pribadi')
                        //                     ->with([
                        //                         'jabatan_gaji' => function($query){
                        //                             return $query->with('jabatan')
                        //                             ->with('gaji');
                        //                         }
                        //                     ])
                        //                     ->with(['riw_penempatan_wilayah' => function($query){
                        //                         return $query->with('penempatan');
                        //                     }
                        //                     ]); 
                        //     }
                        // ])->whereHas('akun', 
                        //                     function($query) use ($id_perusahaan_){
                        //                         $query->where('id_perusahaan', $id_perusahaan_);  
                        //                     })->get();
                                            
                        return view('admin.tema-satu.home.karyawan.tab-kontrak.master-kontrak ', $data);
                    }
        }
    }

    public function createKontrak(Request $request)
    {
        // $this->validate($request, [
        //     'nominal_gaji'          => 'required|string|max:50',

        //     ]
        // ); 
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

       
                        $createKontrak_id_akun          = $request->input('id_akun'); echo "<br>";
                        $createKontrak_mulai            = $request->input('mulai');
                        $createKontrak_akhir            = $request->input('akhir');
                        $createKontrak_jenis            = $request->input('jenis');
                        $createKontrak_bulan            = $request->input('bulan');
                        $createKontrak_tahun            = $request->input('tahun');
                        $createKontrak_nomor_kontrak    = $request->input('nomor_kontrak');

                        $createKontrak_tunjangan            = $request->input('tunjangan');

                        // $createKontrak_Jabatan_Gaji = Jabatan_Gaji::where('id_akun', $createKontrak_id_akun)->first();
                        //     if ($createKontrak_Jabatan_Gaji) {

                                // $no_surat = Kontrak::orderBy('id', 'DESC')->first();
                                //     if (!isset($no_surat)) {
                                //         $no_surat                   = 1;
                                //         $createKontrak_no_kontrak   = str_pad($no_surat, 4, 0, STR_PAD_LEFT);
                                        
                                //     }else{
                                //         if ($createKontrak_jenis == "PKKF") {
                                //             $no_surat_pkkf = Kontrak::where('jenis', 'PKKF')->orderBy('id', 'DESC')->first();

                                //                 if (!isset($no_surat_pkkf)) {
                                //                     $no_surat                   = 1;
                                //                     $createKontrak_no_kontrak   = str_pad($no_surat, 4, 0, STR_PAD_LEFT);
                                                    
                                //                 }else{
                                //                     $no_kontrak   = $no_surat_pkkf->no_kontrak;
                                //                     $nomor                      = $no_kontrak+1;
                                //                     $createKontrak_no_kontrak   = str_pad($nomor, 4, 0, STR_PAD_LEFT);
                                //                 }
                                //         }else{

                                //             $no_kontrak   = $no_surat->no_kontrak;
                                //             $nomor                      = $no_kontrak+1;
                                //             $createKontrak_no_kontrak   = str_pad($nomor, 4, 0, STR_PAD_LEFT);
                                //         }
                                //     }

                                    // echo "create";

                                    $data['dahboard_akun_kontrak'] = Akun::with('riw_tunjangan')
                                                               ->with('riw_jabatan_gaji')
                                                               ->with('penempatan_wilayah')
                                                               ->where('id', $createKontrak_id_akun)->first();

                                
                                        if(!isset($data['dahboard_akun_kontrak']->riw_tunjangan->id)){
                                            $id_tunjangan_      = null;
                                        }else{
                                            if (!isset($createKontrak_tunjangan)) {
                                                $id_tunjangan_      = null;
                                            }else{
                                                $id_tunjangan_      = $data['dahboard_akun_kontrak']->riw_tunjangan->id;
                                            }
                                        }
                                
                                $id_jabatan_gaji_   = $data['dahboard_akun_kontrak']->riw_jabatan_gaji->id;
                                $id_penempatan_     = $data['dahboard_akun_kontrak']->penempatan_wilayah->id;


                                $createKontrak_kontrak = new Kontrak();
                                    $createKontrak_kontrak->id_akun         = $createKontrak_id_akun;
                                    $createKontrak_kontrak->tanggal_awal    = $createKontrak_mulai;
                                    $createKontrak_kontrak->tanggal_akhir   = $createKontrak_akhir;
                                    $createKontrak_kontrak->no_kontrak      = $createKontrak_nomor_kontrak;
                                    $createKontrak_kontrak->jenis           = $createKontrak_jenis;
                                    $createKontrak_kontrak->bulan           = $createKontrak_bulan;
                                    $createKontrak_kontrak->tahun           = $createKontrak_tahun;
                                $createKontrak_kontrak->save();

                                    if ($createKontrak_kontrak) { 

                                        $createKontrak_Pkwt = new Pkwt();
                                            $createKontrak_Pkwt->id_kontrak                     = $createKontrak_kontrak->id;
                                            $createKontrak_Pkwt->id_tunjangan                   = $id_tunjangan_;
                                            $createKontrak_Pkwt->id_jabatan_gaji                = $id_jabatan_gaji_;
                                            $createKontrak_Pkwt->id_riw_penempatan_wilayah      = $id_penempatan_;
                                        $createKontrak_Pkwt->save();

                                        Session::flash('alert-success-karyawan', 'Berhasil Buat Kontrak.');
                                        return redirect('dashboard-panel/kontrak/semua-kontrak');
                                    }
                            // }else{

                            //         Session::flash('alert-peringatan', '.!!  Tidak Punya Jabatan.');
                            //         return redirect('dashboard-panel/?halaman=assets-karyawan');

                            // }
                    }
        }
    }

    public function printKontrak(Request $request)
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
                                        

                        $course_id = $request->input('id_'); 

                        $data['dahboard_cek_kontrak']               = Pkwt::with([
                                                                                    'kontrak' => function($query){
                                                                                        return $query->with(['akun' => function($query){
                                                                                            return $query->with('data_diri');
                                                                                        }
                                                                                        ]);
                                                                                                // ->with('gaji');
                                                                                    }
                                                                                ])->with(['penempatan_wilayah_riw' => function($query){
                                                                                                return $query->with('penempatan');
                                                                                            }
                                                                                ])->with(['riw_jabatan_gaji' => function($query){
                                                                                        return $query->with('jabatan')->with('gaji');
                                                                                    }
                                                                                ])->with('rwy_tunjangan_pkwt')
                                                                    ->where('id', $course_id)->first();
                                                                    
                        $data['dahboard_akun_cookie'] = Akun::where('token', $_COOKIE['cookie-storage'])
                                                ->with([
                                                    'perusahaan' => function($query){
                                                        return $query->with('data_perusahaan');
                                                    }

                                                ])
                                            ->first();

                        $jenis_kontrak = $data['dahboard_cek_kontrak']->kontrak->jenis;

                        // echo $data['dahboard_cek_kontrak']               = Karyawan::with([
                        //     'akun' => function($query){
                        //         return $query->with('data_diri')
                        //                     ->with('kontrak')
                        //                     ->with('data_orang_tua')
                        //                     ->with('tunjangan')
                        //                     ->with('pendidikan_formal')
                        //                     ->with('pendidikan_non_formal')
                        //                     ->with('file_pribadi')
                        //                     ->with([
                        //                         'jabatan_gaji' => function($query){
                        //                             return $query->with('jabatan')
                        //                                     ->with('gaji');
                        //                         }
                        //                     ])
                                            
                        //                     ->with(['riw_penempatan_wilayah' => function($query){
                        //                         return $query->with('penempatan');
                        //                     }
                        //                     ]);
                        //     }
                        // ],
                        // )->where('id_akun', $course_id)->first();

                        // $data['dahboard_cek_kontrak']               = Kontrak::
                        
                        //                                                             with([
                        //                                                                 'akun' => function($query){
                        //                                                                     return $query->with('data_diri')
                        //                                                                                 ->with('data_orang_tua')
                        //                                                                                 ->with('tunjangan')
                        //                                                                                 ->with('pendidikan_formal')
                        //                                                                                 ->with('pendidikan_non_formal')
                        //                                                                                 ->with('file_pribadi')
                        //                                                                                 ->with([
                        //                                                                                     'jabatan_gaji' => function($query){
                        //                                                                                         return $query->with('jabatan')
                        //                                                                                                 ->with('gaji');
                        //                                                                                     }
                        //                                                                                 ])
                                                                                                        
                                                                                                        
                                                                                                        
                        //                                                                                 ->with(['riw_penempatan_wilayah' => function($query){
                        //                                                                                     return $query->with('penempatan');
                        //                                                                                 }
                        //                                                                                 ]);
                        //                                                                 }
                        //                                                             ],
                        //                                                             )->with([
                        //                                                                 'pkwt' => function($query){
                        //                                                                     return $query->with('tunjangan_pkwt')
                        //                                                                                 ->with([
                        //                                                                                     'jabatan_gaji_pkwt' => function($query){
                        //                                                                                         return $query->with('jabatan')
                        //                                                                                                      ->with('gaji');
                        //                                                                                     }
                        //                                                                                 ])
                        //                                                                                 ->with([
                        //                                                                                     'riw_penempatan_wilayah_pkwt' => function($query){
                        //                                                                                         return $query->with('penempatan');
                        //                                                                                     }
                        //                                                                                 ]);
                        //                                                                 }
                        //                                                             ])
                        //                                                             ->where('id', $course_id)->first();
                        // ->with([
                        //     'kontrak' => function($query){
                        //         return $query->with([
                        //             'pkwt' => function($query){
                        //                 return $query->with('tunjangan_pkwt')
                        //                             ->with([
                        //                                 'jabatan_gaji_pkwt' => function($query){
                        //                                     return $query->with('jabatan')
                        //                                                  ->with('gaji');
                        //                                 }
                        //                             ])
                        //                             ->with([
                        //                                 'riw_penempatan_wilayah_pkwt' => function($query){
                        //                                     return $query->with('penempatan');
                        //                                 }
                        //                             ]);
                        //             }
                        //         ]);
                        //     }
                        // ])

                        // return json_encode($data['dahboard_cek_kontrak']);

                        

                        $pdf = app('dompdf.wrapper');

                        $contxt = stream_context_create([
                                'ssl' => [
                                'verify_peer' =>false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                                ]
                        ]);

                        $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
                        $pdf->getDomPDF()->setHttpContext($contxt);

                            if ($jenis_kontrak == 'PKWT I') {
                                $data['jenis'] = "PKWT";
                                $pdf->loadview('admin.tema-satu.home.karyawan.pdf.kontrak-umum', $data);
                                return $pdf->stream('Kontrak Umum.pdf');
                            }else if ($jenis_kontrak == 'PKWT II'){
                                $data['jenis'] = "PKWT";
                                $pdf->loadview('admin.tema-satu.home.karyawan.pdf.kontrak', $data);
                                return $pdf->stream('Kontrak.pdf');
                            }else if ($jenis_kontrak == 'PKWT III'){
                                $data['jenis'] = "PKWT";
                                $pdf->loadview('admin.tema-satu.home.karyawan.pdf.kurir-kontrak', $data);
                                $data['jenis'] = "PKWT";
                                return $pdf->stream('Kontrak Kurir.pdf');
                            }else if ($jenis_kontrak == 'PKKF'){
                                $data['jenis'] = "PKKF";
                                $pdf->loadview('admin.tema-satu.home.karyawan.pdf.kurir-freelance', $data);
                                return $pdf->stream('Kontrak Freelance.pdf');
                            }
                    }
        }
    }

    public function editKontrak(Request $request)
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
                                        
                        $createKontrak_id_kontrak       = $request->input('id_kontrak');
                        $createKontrak_jenis            = $request->input('jenis');
                        $createKontrak_mulai            = $request->input('mulai');
                        $createKontrak_akhir            = $request->input('akhir');

                        $createKontrak_kontrak = Kontrak::find($createKontrak_id_kontrak);
                            $createKontrak_kontrak->tanggal_awal    = $createKontrak_mulai;
                            $createKontrak_kontrak->tanggal_akhir   = $createKontrak_akhir;
                            if (isset($createKontrak_jenis)) {
                                $createKontrak_kontrak->jenis           = $createKontrak_jenis;
                            }else{
                                
                            }
                            

                        $createKontrak_kontrak->save();

                            if ($createKontrak_kontrak) {

                                Session::flash('alert-success-karyawan', 'Berhasil Edit Kontrak.');
                                return redirect('dashboard-panel/kontrak/semua-kontrak');
                            }
                    }
        }
    }


        
}
