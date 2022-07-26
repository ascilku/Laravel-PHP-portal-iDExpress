<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Absensi                  as Absensi;

use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Session;

class Create_Absensi implements WithHeadingRow, WithCalculatedFormulas, ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
        foreach ($collection as $data) {

        //    echo $collection;
             
            $date_ = date('Y-m-01');
            $data['nik'];
            $akun_ = Akun::where('nik', $data['nik'])->first();
            $dateAbsen = $data['tanggal_absen']; 
            
            $result = preg_replace("/[^0-9-]/", "", $dateAbsen);

            $dataUpload = date('Y-m-d', strtotime($result)); echo "<br>";

            // echo $dateNik   = $akun_->id;

            // echo \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($data['tanggal_absen'])->format('Y-m-d');
            // echo    date('Y-m-d', strtotime($dateAbsen));


            // echo substr($data['ket_approval'], 0 ,9); echo "<br>";

          


            if(isset($akun_)){
                $dateNik   = $akun_->id; 

                $pertimbangan_Absensi = Absensi::where('tanggal_absen', $dataUpload)->where('id_akun', $dateNik)->first();

                if (!isset($pertimbangan_Absensi)) {
                 
                        $create_karyawan_akun                = new Absensi();

                            $create_karyawan_akun->id_akun             = $akun_->id;
                            $create_karyawan_akun->tanggal_absen       = $dataUpload;
                            if($data['ket_approval'] != ''){
                                $create_karyawan_akun->jam_masuk           = "08:00";
                                //  date('H:i:s');
                                $create_karyawan_akun->ket_masuk           = "Normal";
                                $create_karyawan_akun->jam_pulang          = "17:30";
                                $create_karyawan_akun->ket_pulang          = "Normal";
                            }else{
                                $create_karyawan_akun->jam_masuk           = $data['in'];
                                //  date('H:i:s');
                                $create_karyawan_akun->ket_masuk           = $data['ket_in'];
                                $create_karyawan_akun->jam_pulang          = $data['out'];
                                $create_karyawan_akun->ket_pulang          = $data['ket_out'];
                            }
                            

                            $create_karyawan_akun->status_approv           = substr($data['ket_approval'], 0 ,9);
                            $create_karyawan_akun->tanggal                 = $date_;
                        $create_karyawan_akun->save();
                    
                }else{
                    
                }
            }else{
            
            }
        }
    }
}




// foreach ($collection as $data) {
            
//     $date_ = date('Y-m-01');

//     $akun_ = Akun::where('nik', $data['nik'])->first();

//     if(isset($akun_)){
//         $create_karyawan_akun                = new Absensi();

//             $create_karyawan_akun->id_akun             = $akun_->id;
//             $create_karyawan_akun->tanggal_absen       = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($data['tanggal_absen'])->format('Y-m-d');
//             $create_karyawan_akun->jam_masuk           = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($data['in'])->format('H:i');
//             $create_karyawan_akun->ket_masuk           = $data['ket_in'];
//             $create_karyawan_akun->jam_pulang          = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($data['out'])->format('H:i');
//             $create_karyawan_akun->ket_pulang          = $data['ket_out'];
//             $create_karyawan_akun->status              = $data['ket_approval'];
//             $create_karyawan_akun->tanggal             = $date_;
//         $create_karyawan_akun->save();
//     }
// }