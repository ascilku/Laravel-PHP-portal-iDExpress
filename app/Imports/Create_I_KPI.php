<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use App\Models\admin\M_I_KPI                    as KPI;
use App\Models\M_Akun                           as Akun;
use App\Models\M_Perusahaan                     as Perusahaan;
use App\Models\admin\M_Orang_KPI                as Orang_KPI;

use Session;

use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Create_I_KPI implements WithHeadingRow, WithCalculatedFormulas, ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
        foreach ($collection as $data) {
            // echo $data;
            $date_ = date('Y-m-01');
            $nik_kpi = $data['nik'];



            $Orang_KPI = Orang_KPI::with('akun')->whereHas('akun', 
                    function($query) use ($nik_kpi){
                        $query->where('nik', $nik_kpi);  
            })->first();

            if (isset($Orang_KPI)) {
                $create_karyawan_akun                = new KPI();

                    $create_karyawan_akun->id_akun             = $Orang_KPI->akun->id;
                    
                   if ($data['hijau'] == '') {
                       $create_karyawan_akun->hujau                  = 0;
                   }else {
                       $create_karyawan_akun->hujau                  = $data['hijau'];
                   } 

                   if ($data['merah'] == '') { 
                       $create_karyawan_akun->merah                  = 0;
                   }else {
                       $create_karyawan_akun->merah                  = $data['merah'];
                   }

                    
                    $create_karyawan_akun->date_kpi                  = $date_;
                $create_karyawan_akun->save();

                           
                    
            }else{
                
            }

            














            //  $regist_email = Akun::where('nik', $data['nik'])->first();
            //          if (isset($regist_email)) {
            //              $create_karyawan_akun                = new KPI();

            //                  $create_karyawan_akun->id_akun             = $regist_email->id;
                             
            //                 if ($data['hijau'] == '') {
            //                     $create_karyawan_akun->hujau                  = 0;
            //                 }else {
            //                     $create_karyawan_akun->hujau                  = $data['hijau'];
            //                 }

            //                 if ($data['merah'] == '') { 
            //                     $create_karyawan_akun->merah                  = 0;
            //                 }else {
            //                     $create_karyawan_akun->merah                  = $data['merah'];
            //                 }

                             
            //                  $create_karyawan_akun->tanggal                  = $date_;
            //              $create_karyawan_akun->save();

            //                         //  if (isset($create_karyawan_karyawan)) {

            //                         //      Session::flash('alert-success-karyawan', "Berhasil Input Insentif Tanggal Ini $date_");
            //                         //      return redirect('dashboard-panel/Insentif/KPI');
            //                         //  }
                             
            //          }    
         

        }
    }
}
