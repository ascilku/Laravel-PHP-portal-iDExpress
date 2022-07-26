<?php

namespace App\Http\Controllers\user_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Crypt;
use PDF;

use App\Models\M_Akun                               as Akun;
use App\Models\rekrutmen\M_DataDiri                 as DataDiri;
use App\Models\rekrutmen\M_Pendidikan_Formal        as Pendidikan_Formal;
use App\Models\rekrutmen\M_Pendidikan_Non_Formal    as Pendidikan_Non_Formal;
use App\Models\rekrutmen\M_Uplod_File               as Uplod_File;
use App\Models\rekrutmen\M_Lowongan_Kerja           as Lowongan_Kerja;
use App\Models\rekrutmen\M_Data_Orang_Tua           as Data_Orang_Tua;
use App\Models\rekrutmen\M_Aply_Lowongan            as Aply_Lowongan;

class C_CV extends Controller
{
    //
    public function index()
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
                        $insertData_cookie = Akun::where('token', $_COOKIE['cookie-storage-user'])->first();
                            if ($insertData_cookie) {
                                $id_akun = $insertData_cookie->id;
                            
                                $rekrutment_Aply_Lowongan = Aply_Lowongan::with('lowongan_kerja')->where('id_akun', $id_akun)->where('status', 'Buka')->first();
                                        if($rekrutment_Aply_Lowongan){
                                            $rekrutment_data_diri = Akun::with('data_diri')->with('data_orang_tua')->with('pendidikan_formal')->with('pendidikan_non_formal')->with('file_pribadi')->where('token', $_COOKIE['cookie-storage-user'])->first();

                                                if (isset($rekrutment_data_diri)) {
                                                    return view('user.rekrutmen.item-data-diri.cv',[
                                                        'rekrutment_data_diri'              => $rekrutment_data_diri,
                                                        'rekrutment_Aply_Lowongan'          => $rekrutment_Aply_Lowongan,
                                                    ]);
                                                    
                                                }
                                        }else{
                                            Session::flash('alert-peringatan', 'Anda Belum Aply Lowongan Apapun.');
                                            return redirect('rekrutmen');
                                        }
                            }
                    }
        }
        
    }

    public function cv(Request $request)
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
        
                        $id = Crypt::decrypt($request->id);
                        $insertData_cookie = Akun::where('id', $id)->first();
                            if ($insertData_cookie) {

                                $contxt = stream_context_create([
                                        'ssl' => [
                                        'verify_peer' =>false,
                                        'verify_peer_name' => false,
                                        'allow_self_signed' => true
                                        ]
                                ]);
                        
                                $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
                                $pdf->getDomPDF()->setHttpContext($contxt);


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

    public function cvExel(Request $request)
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
        
                        $id = Crypt::decrypt($request->id);
                        $insertData_cookie = Akun::where('id', $id)->first();
                            if ($insertData_cookie) {

                                $contxt = stream_context_create([
                                        'ssl' => [
                                        'verify_peer' =>false,
                                        'verify_peer_name' => false,
                                        'allow_self_signed' => true
                                        ]
                                ]);
                        
                                $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
                                $pdf->getDomPDF()->setHttpContext($contxt);


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

                                    // $pdf->loadview('user.rekrutmen.item-data-diri.cv', $data);
                                    // return $pdf->stream('Kontrak Umum.pdf');

                                    return view('admin.tema-satu.home.karyawan.pdf.cv-user', $data);
                                                    
                                                
                            }
                    }
        }
    }
}
