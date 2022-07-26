<?php

namespace App\Imports;

use App\Models\M_Akses                          as Akses;
use App\Models\M_Akun                           as Akun;
use App\Models\admin\M_Gaji                     as Gaji;
use App\Models\admin\M_Karyawan                 as Karyawan;
use App\Models\admin\M_Riw_Penempatan_Wilayah   as Riw_Penempatan_Wilayah;
use App\Models\admin\M_Data_Karyawan            as Data_Karyawan;
use App\Models\rekrutmen\M_DataDiri             as DataDiri;
use App\Models\M_Perusahaan                     as Perusahaan;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;


use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Create_Karyawan implements WithHeadingRow, WithCalculatedFormulas, ToCollection
{
    public $id;
    public $id_perusahaan;

    public function __construct($value1, $value2)
    {
        $this->id               = $value1;
        $this->id_perusahaan    = $value2;
    }

    public function collection(Collection $collection)
    {

        foreach ($collection as $data) {
            $verifikasiEmail_randomPassword = "Karyawan"."_".rand(1000,99999);
            // $verifikasiEmail_randomPassword = "Karyawan"."_".'12345';

            $tanggal_join = intval($data['tanggal_join']);
            $tanggal_lahir = intval($data['tanggal_lahir']);

            $regist_email_perusahaan = Perusahaan::where('nik', $data['id_karyawan'])->orwhere('email', $data['email'])->first();
                if (!isset($regist_email_perusahaan)) 
                {
                    $regist_email = Akun::where('nik', $data['id_karyawan'])->orwhere('email', $data['email'])->first();
                            if (!isset($regist_email) && $data['email'] != '') {
                                
                                $create_karyawan_akun                = new Akun();

                                    $create_karyawan_akun->id_akses             = $this->id;
                                    $create_karyawan_akun->id_perusahaan        = $this->id_perusahaan;
                                    $create_karyawan_akun->nik                  = $data['id_karyawan'];
                                    $create_karyawan_akun->password             = Hash::make($verifikasiEmail_randomPassword);
                                    $create_karyawan_akun->show_pass            = $verifikasiEmail_randomPassword;
                                    $create_karyawan_akun->email                = $data['email'];
                                    $create_karyawan_akun->no_hp                = $data['no_telepon'];

                                        if ($data['status'] == 'Aktif') {
                                            $create_karyawan_akun->status               = 'aktif';
                                        }else if ($data['status'] == 'Resign' || $data['status'] == 'Tidak Aktif') {
                                            $create_karyawan_akun->status               = 'tidak';
                                        }
                                    
                                $create_karyawan_akun->save();

                                   

                                        $create_karyawan_karyawan                = new Karyawan();
                                            $create_karyawan_karyawan->id_akun              = $create_karyawan_akun->id;
                                            $create_karyawan_karyawan->status_data   = $data['status'];
                                            $create_karyawan_karyawan->tanggal_join   = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($tanggal_join)->format('Y-m-d');
                                        $create_karyawan_karyawan->save();

                                        $create_karyawan_dataDiri                           = new DataDiri();
                                            $create_karyawan_dataDiri->id_akun              = $create_karyawan_akun->id;
                                            $create_karyawan_dataDiri->nama_lengkap         = strtoupper($data['nama_lengkap']);
                                            $create_karyawan_dataDiri->nama_panggilan       = strtoupper($data['nama_panggilan']);
                                            $create_karyawan_dataDiri->tempat_lahir         = strtoupper($data['tempat_lahir']);
                                            $create_karyawan_dataDiri->tanggal_lahir        = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($tanggal_lahir)->format('Y-m-d');
                                            $create_karyawan_dataDiri->nik                  = $data['nik'];
                                            $create_karyawan_dataDiri->email	            = $data['email'];
                                            $create_karyawan_dataDiri->agama                = $data['agama'];
                                            $create_karyawan_dataDiri->jenis_kelamin        = $data['jenis_kelamin'];
                                            $create_karyawan_dataDiri->status_perkawinan    = $data['status_perkawinan'];
                                            $create_karyawan_dataDiri->tinggi_badan         = $data['tinggi_badan'];
                                            $create_karyawan_dataDiri->berat_badan          = $data['berat_badan'];
                                            $create_karyawan_dataDiri->golongan_darah       = $data['golongan_darah'];
                                            $create_karyawan_dataDiri->suku                 = strtoupper($data['suku']);
                                            $create_karyawan_dataDiri->total_saudara        = $data['total_saudara'];
                                            $create_karyawan_dataDiri->alamat_ktp           = strtoupper($data['alamat_ktp']);
                                            $create_karyawan_dataDiri->provinsi_ktp         = strtoupper($data['provinsi_ktp']);
                                            $create_karyawan_dataDiri->kota_ktp             = strtoupper($data['kota_ktp']);
                                            $create_karyawan_dataDiri->kabupaten_ktp        = strtoupper($data['kabupaten_ktp']);
                                            $create_karyawan_dataDiri->kecamatan_ktp        = strtoupper($data['kecamatan_ktp']);
                                            $create_karyawan_dataDiri->kelurahan_ktp        = strtoupper($data['kelurahan_ktp']);
                                            $create_karyawan_dataDiri->pos_ktp              = $data['kode_pos'];
                                            $create_karyawan_dataDiri->alamat_domisili      = strtoupper($data['alamat_domisili']);
                                            $create_karyawan_dataDiri->provinsi_domisili    = strtoupper($data['provinsi_domisili']);
                                            $create_karyawan_dataDiri->kota_domisili        = strtoupper($data['kota_domisili']);
                                            $create_karyawan_dataDiri->kabupaten_domisili   = strtoupper($data['kabupaten_domisili']);
                                            $create_karyawan_dataDiri->kecamatan_domisili   = strtoupper($data['kecamatan_domisili']);
                                            $create_karyawan_dataDiri->kelurahan_domisili   = strtoupper($data['kelurahan_domisili']);
                                            $create_karyawan_dataDiri->instagram            = $data['instagram'];

                                            $create_karyawan_dataDiri->facebook             = $data['facebook'];
                                            $create_karyawan_dataDiri->linkedin             = $data['linkedin'];
                                            $create_karyawan_dataDiri->twitter              = $data['twitter'];

                                            $create_karyawan_dataDiri->nomor_whatsapp       = $data['nomor_whatsapp'];
                                            $create_karyawan_dataDiri->nomor_hp             = $data['no_telepon'];
                                            $create_karyawan_dataDiri->cerita_diri          = strtoupper($data['cerita_diri']);
                                        $create_karyawan_dataDiri->save();

                                        // $create_riw_penempatan_wilayah                      = new Riw_Penempatan_Wilayah();
                                        //     $create_riw_penempatan_wilayah->id_akun         = $create_karyawan_akun->id;
                                        //     $create_riw_penempatan_wilayah->alamat          = $data['alamat_penempatan'];
                                        //     $create_riw_penempatan_wilayah->provinsi        = $data['provinsi_penempatan'];
                                        //     $create_riw_penempatan_wilayah->kota            = $data['kota_penempatan'];
                                        //     $create_riw_penempatan_wilayah->kabupaten       = $data['kabupaten_penempatan'];
                                        //     $create_riw_penempatan_wilayah->kelurahan       = $data['kelurahan_penempatan'];
                                        //     $create_riw_penempatan_wilayah->kecamatan       = $data['kecamatan_penempatan'];
                                        //     $create_riw_penempatan_wilayah->alokasi         = $data['penempatan_th'];
                                        //     $create_riw_penempatan_wilayah->kode_alokasi    = $data['kode_th'];
                                        // $create_riw_penempatan_wilayah->save();

                                        $create_data_karyawan                               = new Data_Karyawan();
                                            $create_data_karyawan->id_akun                  = $create_karyawan_akun->id;
                                            $create_data_karyawan->dingtalk                 = $data['dingtalk'];
                                            $create_data_karyawan->norek                    = $data['norek'];
                                            $create_data_karyawan->bank                     = strtoupper($data['bank']);
                                            $create_data_karyawan->kode_bank                = $data['kode_bank'];
                                        $create_data_karyawan->save();
                                        $email = $data['email'];

                                        // ini untuk mengirim email per karyawan

                                        // $data = array(
                                        //     'nik'               => $data['id_karyawan'],
                                        //     'password'          => $verifikasiEmail_randomPassword
                                        // );
                                        
                                        // Mail::send('pesan-email-perusahaan', $data, function($message) use ($email){
                                        // $message->to($email, 'Pesan Akun')->subject('Pesan Verifikasi Akun');
                                        // $message->from('itpthitcelebes24@gmail.com', 'Staff HRD PT Indokaisa Triasa Group (ID EXPRESS)');
                                        // });

                                            
                                    
                            }else{
                                
                            }
                }else{

                }

        }
    }

    // public function func_akses()
    // {
    
    // }
}
