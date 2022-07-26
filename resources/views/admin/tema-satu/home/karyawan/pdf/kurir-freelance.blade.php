<?php
    function tanggal_indo($tanggal)
    {
        $bulan = array (1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
        $split = explode('-', $tanggal);
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrak Kerja</title>
    <style>
        /** Define the margins of your page **/
        @page {
            margin-left: 96px;
            margin-right: 96px;
            margin-top: 140px;
            margin-bottom: 90px;
            position: relative;
        }

        @page: last-child {
            margin-bottom: 0px;
        }

        header {
            position: fixed;
            top: -130px;
            left: 0px;
            right: 0px;
            /* height: 350px; */
            /* margin-bottom: 200px; */

            /** Extra personal styles **/
            /* background-color: #03a9f4; */
            /* color: white; */
            text-align: center;
            line-height: 20px;
        }

        .footer table {
            position: absolute;
            bottom: -180px;
            height: 150px;
            text-align: center;
            padding: 10px;
        }


        .footer td {
            text-align: center;
        }

        .mid {
            text-align: center;
        }

        .top {
            vertical-align: top;
        }

        .indent {
            margin-left: 20px;
        }

        p {
            font-size: 15px;
        }

        td {
            font-size: 15px;
        }

        .kiri_kanan {
            text-align: justify;
        }

        @page: last-child {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <!-- Define header and footer blocks before your content -->
    <header>

        
        <!-- <table style="width: 100%;">
            <tr>
                <td style="width: 40%;"></td>
                <td class="mid"><img class="center" src="https://ik.imagekit.io/cumme/hit_nqKyzCY6M.png" width="60px" alt="Logo"></td>
                <td class="mid"><img class="center" src="https://portal.indokaisa.com/assets/logo/{{$dahboard_akun_cookie->perusahaan->data_perusahaan->foto}}" width="50px" alt="Logo"></td>
                <td class="mid" style="width: 40%;"></td>
            </tr>
        </table>
        
        <h3 style="padding: 0; margin-top: 5;">{{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}</h3>
        <p class="mid" style="font-size: 14px;margin-top: -15px;">{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->alamat))}}, Kel. {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kelurahan))}}, Kecamatan {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kecamatan))}}, Kota {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kabupaten))}}, Provinsi {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->provinsi))}}. Email :{{$dahboard_akun_cookie->perusahaan->email}} Telp. {{$dahboard_akun_cookie->perusahaan->no_hp}}</p>
        <hr style="border: solid 2px #000; margin-top: -10px;"><hr style="border: solid 2px #000; margin-top: -10px;">
         -->

        <table style="width: 100%; margin-top: 0%" border="1">
            <tr>
                <!-- <td style="width: 40%;"></td> -->
                <td class="mid" style="width: 40%;" colspan="2" >
                    <h3 style="padding: 0; margin-top: 5;">{{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}</h3>
                    <p class="mid" style="font-size: 14px;margin-top: -15px;">{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->alamat))}}, Kel.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kelurahan))}}, Kec.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kecamatan))}}, Kot.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kabupaten))}}, Prov.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->provinsi))}}.</p>
                    <p class="mid" style="font-size: 14px;margin-top: -15px;">Email : {{$dahboard_akun_cookie->perusahaan->email}} Telp. {{$dahboard_akun_cookie->perusahaan->no_hp}}</p>
                </td>

                <td class="mid"><img src="https://ik.imagekit.io/cumme/hit_nqKyzCY6M.png" width="60px" >
                </td>
                <!-- <td class="mid"><img class="center" src="https://portal.indokaisa.com/assets/logo/{{$dahboard_akun_cookie->perusahaan->data_perusahaan->foto}}" width="50px" alt="Logo"></td> -->
                
            </tr>
        </table>
        
        <!-- <hr style="border: solid 2px #000; margin-top: -10px;"><hr style="border: solid 2px #000; margin-top: -10px;"> -->
                
        
        
    </header>
    <?php
        $data = strtoupper($dahboard_akun_cookie->perusahaan->nama);
        $jumlah = "1";
        $kata = implode(" ", array_slice(explode(" ", $data), 0, $jumlah));
    ?>
    <!-- Wrap the content of your PDF inside a main tag -->
    <main>
        <div style="page-break-after: always; page-break-after: never;">
            <h5 class="mid" style="border-bottom: solid 1px #333; text-align: center; width: 45%; margin: 0 auto; margin-top: -15px; margin-bottom: -10px;">PERJANJIAN KERJA KURIR FREELANCE</h5>
            <p class="mid" style="margin-top: 10px;">Nomor : {{$dahboard_cek_kontrak->kontrak->no_kontrak}}/{{$kata}}/{{$jenis}}/{{$dahboard_cek_kontrak->kontrak->bulan}}/{{$dahboard_cek_kontrak->kontrak->tahun}}</p>
           
            <p>Yang bertanda tangan dibawah ini :</p>
            <table style="width: 100%;">
                <tr>
                    <td class="top" style="text-align: start; font-weight: bold; font-size: 14px; width: 100px;">Nama</td>
                    <td style="width: 10px;">:</td>
                    <td class="kiri_kanan">
                        <span class="bold" style="text-align: start; font-weight: bold; font-size: 14px;">{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->nama_pemilik))}}</span>
                    </td>
                </tr>
                <tr>
                    <td class=" top" style="text-align: start; font-weight: bold; font-size: 14px;">Alamat
                    </td>
                    <td style="width: 10px;">:</td>
                    <td class="kiri_kanan"><span style="font-weight: bold; font-size: 14px;">{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->alamat))}}, Kel.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kelurahan))}}, Kec.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kecamatan))}}, Kot.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kabupaten))}}, Prov.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->provinsi))}}.</span></td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start; font-weight: bold; font-size: 14px;">Jabatan</td>
                    <td style="width: 10px;">:</td>
                    <td class="kiri_kanan"><span style="font-weight: bold; font-size: 14px;">General Manager</span></td>
                </tr>
            </table>
            <p class="kiri_kanan">Dalam hal ini bertindak untuk dan atas nama <b>PT {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->nama))}}</b> berkedudukan di kota Makassar dan berkantor di <b>{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->alamat))}}, Kel.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kelurahan))}}, Kec.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kecamatan))}}, Kot.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kabupaten))}}, Prov.{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->provinsi))}}</b>, Selanjutnya disebut <b>PIHAK PERTAMA</b>.</p>
            <table style="width: 100%;">
                <tr>
                    <td class="top" style="text-align: start; font-weight: bold; font-size: 14px; width: 100px;">NIK</td>
                    <td style="width: 10px;">:</td>
                    <td class="kiri_kanan">
                        <span class="bold" style="text-align: start; font-weight: bold; font-size: 14px;"><b>{{$dahboard_cek_kontrak->kontrak->akun->data_diri->nik}}</b></span>
                    </td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start; font-weight: bold; font-size: 14px;">Nama</td>
                    <td style="width: 10px;">:</td>
                    <td class="kiri_kanan"><span style="font-weight: bold; font-size: 14px;">{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->nama_lengkap))}}</span></td>
                </tr>
                <tr>
                    <td class=" top" style="text-align: start; font-weight: bold; font-size: 14px;">Alamat
                    </td>
                    <td style="width: 10px;">:</td>
                    <td class="kiri_kanan"><span style="font-weight: bold; font-size: 14px;"><b>{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->alamat_ktp))}}, Kel.{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->kelurahan_ktp))}}, Kec.{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->kecamatan_ktp))}}, Kab.{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->kabupaten_ktp))}}, Kot.{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->kota_ktp))}}, Prov.{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->provinsi_ktp))}}</b></span>.</td>
                </tr>
            </table>
            
            <p>Dalam hal ini bertindak dan atas namanya sendiri, yang selanjutnya disebut <b>PIHAK KEDUA</b>.</p>
            <p>Pada tanggal <b>{{tanggal_indo($dahboard_cek_kontrak->kontrak->tanggal_awal)}}</b> dengan memilih dan mengambil tempat di <b>PT {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->nama))}}</b> , <b>PIHAK PERTAMA</b> dan <b>PIHAK KEDUA</b> setuju dan sepakat untuk mengikatkan diri dalam Perjanjian Kerja dengan itikad baik dan ketentuan-ketentuan berikut</p>
            
            <h5 class="mid">PASAL 1</h5>
            <h5 class="mid" style="margin-top: -15; margin-bottom: 40px;">PENEMPATAN,TUGAS dan TANGGUNG JAWAB</h5>
           
            <table style="margin-top: -20px;">
                <tr>
                    <td class="top" style="text-align: start;">1.</td>
                    <td class="kiri_kanan"><span style="font-weight: bold; font-size: 13px;"><b>PIHAK PERTAMA</b></span> memperkerjakan <span style="font-weight: bold; font-size: 13px;"><b>PIHAK KEDUA</b></span> di unit perusahaan <span style="font-weight: bold; font-size: 13px;"><b>PIHAK PERTAMA</b></span>
                    <b>PT {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->nama))}}</b> , Penempatan <b> {{strtoupper($dahboard_cek_kontrak->penempatan_wilayah_riw->penempatan->alokasi)}}</b> Sebagai <b>{{strtoupper($dahboard_cek_kontrak->riw_jabatan_gaji->jabatan->nama_jabatan)}}</b>.
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">2.</td>
                    <td class="kiri_kanan"><span style="font-weight: bold; font-size: 13px;"><b>PIHAK KEDUA</b></span> wajib melaksanakan pekerjaan yang menjadi tugas dan tanggungjawab dengan baik, sesuai dengan Jobs Description, dimana <span style="font-weight: bold; font-size: 13px;"><b>PIHAK PERTAMA</b></span> berhak sewaktu waktu untuk mengubah, menambah, mengganti dan merubah Jobs Description sesuai dengan kebutuhan perusahaan</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">3.</td>
                    <td class="kiri_kanan"><span style="font-weight: bold; font-size: 13px;"><b>PIHAK PERTAMA</b></span> berhak dan berwenang untuk menempatkan dan memindahkan <span style="font-weight: bold; font-size: 13px;"><b>PIHAK KEDUA</b></span> pada pekerjaan dan atau ke bagian / unit lain yang menurut pertimbangan <span style="font-weight: bold; font-size: 13px;"><b>PIHAK PERTAMA</b></span> sesuai dengan kepentingan perusahaan.</td>
                </tr>
            </table>

            <div class="footer">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT. {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}. SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span>
                        <!-- <img src="https://ik.imagekit.io/cumme/hit_nqKyzCY6M.png" width="40px" > -->
                
                        </td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div>
            
            <br>
            <!-- PASAL 2 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; padding-top: 5px;">PASAL 2</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto">MASA BERLAKU PERJANJIAN</h5>
            <p class="mid">Perjanjian kerja ini berlaku Sejak Tertanggal surat ini sampai dengan</p>
            <h5 class="mid" style="width: 48%; margin:-20 auto; padding-top: 20px;">({{tanggal_indo($dahboard_cek_kontrak->kontrak->tanggal_akhir)}})</h5>

            

            <br>
            <br>
            <br>
            <br>
            <br>
            <!-- PASAL 3 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; margin-top: 10px; padding-top: 2px;">PASAL 3</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">WAKTU, JAM KERJA dan UPAH</h5>
            <p><b>PIHAK PERTAMA</b> menyerahkan suatu pekerjaan untuk dikerjakan oleh <b>PIHAK KEDUA</b> dengan waktu kerja tertentu : </p>
            <table style="margin-top: 5px; margin-bottom: 0;">
                <tr>
                    <td class="top" style="text-align: start;">1.</td>
                    <td class="kiri_kanan"><b>PIHAK KEDUA</b> tunduk pada peraturan dan sistem kerja yang berlaku pada perusahaan <b>PIHAK PERTAMA</b> </td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">2.</td>
                    <td class="kiri_kanan"><b>PIHAK KEDUA</b> wajib melakukan Absensi sesuai jadwal yang ditentukan oleh <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">3.</td>
                    <td class="kiri_kanan"><b>PIHAK PERTAMA</b> berhak menentukan Jadwal Kerja dan bersedia memberikan upah kepada <b>PIHAK KEDUA</b> berdasarkan kehadiran kerja PIHAK KEDUA dengan Rincian sebagai berikut:</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <table>
                            <tr>
                                <td>(1.)</td>
                                <td>Upah</td>
                                <td>:</td>
                                <td>Rp 80.000,-/ Hari</td>
                            </tr>
                            <tr>
                                <td>(2.)</td>
                                <td>Tunjangan BBM</td>
                                <td>:</td>
                                <td>Rp 50.000,-/ Minggu(Dengan bukti Nota Print Asli)</td>
                            </tr>
                            <tr>
                                <td>(3.)</td>
                                <td>Tunjangan Kendaraan</td>
                                <td>:</td>
                                <td>Rp 150.000,-/ Bulan(Min.10HK)</td>
                            </tr>
                            <tr>
                                <td>(4.)</td>
                                <td>Tunjangan Pulsa & Paket Data</td>
                                <td>:</td>
                                <td>Rp 50.000,- Bulan(Dngan bukti nota Print Asli)</td>
                            </tr>
                            <tr>
                                <td>(5.)</td>
                                <td>Insentif Pick Up</td>
                                <td>:</td>
                                <td>berdasarkan keputusan Direksi</td>
                            </tr>
                            <tr>
                                <td>(6.)</td>
                                <td>Insentif Antaran</td>
                                <td>:</td>
                                <td>berdasarkan keputusan Direksi</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">4.</td>
                    <td class="kiri_kanan">Apabila <b>PIHAK KEDUA</b> tidak hadir dengan alasan apapun maka berlaku asas No Work No Pay.</td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">5.</td>
                    <td class="kiri_kanan">Apabila <b>PIHAK KEDUA</b> tidak absen ”Masuk” dan ”Pulang” , maka <b>PIHAK KEDUA</b> akan terhitung tidak hadir oleh <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">6.</td>
                    <td class="kiri_kanan">Selama berlakunya perjanjian ini, <b>PIHAK KEDUA</b> akan menerima upah berupa uang dari <b>PIHAK PERTAMA</b> dalam jumlah sebagaimana yang telah disepakati oleh <b>PIHAK PERTAMA</b> dan <b>PIHAK KEDUA</b> dengan tata cara yang diatur berdasarkan jumlah hari kehadiran Kerja.</td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">7.</td>
                    <td class="kiri_kanan">Upah sebagaimana tersebut dalam ayat (1) pasal ini, akan dibayarkan oleh <b>PIHAK PERTAMA</b> kepada <b>PIHAK KEDUA</b> Maksimal tanggal 8 setiap Awal Bulan menurut tata cara pembayaran yang berlaku dan ditetapkan oleh <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">8.</td>
                    <td class="kiri_kanan">Jumlah Hari kerja <b>PIHAK KEDUA</b> Minimal 10 Hari Kerja dan Maksimal 21 Hari Kerja dalam 1 Bulan dimana hari kerja tersebut ditentukan oleh <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">9.</td>
                    <td class="kiri_kanan">Apabila <b>PIHAK KEDUA</b> mengundurkan diri /berhenti kerja, baik karena perjanjian ini berakhir tidak diperpanjang atau karena melakukan pelanggaran berat yang dilakukan oleh <b>PIHAK KEDUA</b>, maka pembayaran upah terakhir akan diberikan oleh <b>PIHAK PERTAMA</b> setelah dilakukannya pemeriksaan inventori terakhir pada saat /waktu dimana <b>PIHAK KEDUA</b> bekerja pada saat itu.</td>
                </tr>
            </table>
            <br>
            <table>

            </table>

            <div class="footer">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT. {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}. SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span>
                        <!-- <img src="https://ik.imagekit.io/cumme/hit_nqKyzCY6M.png" width="40px" > -->
                
                        </td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div>

            <!-- PASAL 4 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; padding-top: 0px;">PASAL 4</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">HAK DAN KEWAJIBAN</h5>



            <table style="margin-top: 15px; margin-bottom: 0;">
                <tr>
                    <td class="top" style="text-align: start;">1.</td>
                    <td class="kiri_kanan"><span style="font-size: 14px;"><b>PIHAK PERTAMA</b> wajib membayar kepada <b>PIHAK KEDUA</b> upah berupa uang dalam jumlah, waktu dan cara sebagaimana tersebut pada pasal 3 (tiga) Perjanjian ini.</td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">2.</td>
                    <td class="kiri_kanan"><span style="font-size: 14px;"><b>PIHAK KEDUA</b> wajib mengembalikan seluruh sarana dan prasarana kerja milik <b>PIHAK PERTAMA</b> dalam keadaan baik serta menyelesaikan seluruh tanggung jawab yang diemban <b>PIHAK KEDUA</b> kepada <b>PIHAK PERTAMA</b> saat berakhirnya hubungan kerja ini</td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">3.</td>
                    <td class="kiri_kanan"><span style="font-size: 14px;"><b>PIHAK KEDUA</b> wajib menitipkan Identitas KTP Asli sebagai jaminan kepada <b>PIHAK PERTAMA</b> sebelum melakukan penjemputan dam pengantaran Paket dan <b>PIHAK PERTAMA</b> akan mengembalikan kepada <b>PIHAK KEDUA</b> setelah selesai melakukan tugas dan tanggung jawabnya pada hari tersebut</td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">4.</td>
                    <td class="kiri_kanan"><span style="font-size: 14px;"><b>PIHAK KEDUA</b> wajib mengembalikan Atribut <b>PIHAK PERTAMA</b> setelah selesai melakukan tugas dan tanggung jawabnya pada hari tersebut.</td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">5.</td>
                    <td class="kiri_kanan"><span style="font-size: 14px;"><b>PIHAK KEDUA</b> bersedia mengganti kehilangan paket apabila sengaja atau tidak sengaja menghilangkan Paket yang menjadi tanggung jawabnya dengan simulasi sebagai berikut :</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 10px;">a.</td>
                                <td>Jika Tidak Menggunakan Asuransi</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>1.</td>
                                            <td>10 Kali Harga Ongkos Kirim paket dari Mitra ID Express</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>10 kali Harga Ongkos Kirim paket <b>PIHAK PERTAMA</b></span> </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Total Kerugian point a x b dengan total 100 Kali lipat dari Harga Ongkos Kirim atau Nilai Barang yang mana lebih Rendah dan Maksimal.</td>
                            </tr>
                            <tr>
                                <td style="width: 20%; padding-right: 10px;">b.</td>
                                <td>Jika Menggunakan Asuransi</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <table>
                                        <tr>
                                            <td style="width: 20%; padding-right: 10px;">1.</td>
                                            <td>Harga Paket yang digantikan sesuai dengan jumlah kerugian dari Customer.</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>10 Kali Harga Ongkos Kirim paket dari Mitra ID Express.</span> </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>


            <!-- <div class="footer">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT. . SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;"><b>PIHAK KEDUA</b></span></td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div> -->

            <!-- PASAL 5 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; margin-top: 10px; padding-top: 0px;">PASAL 5</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">PELATIHAN</h5>

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class=indent><b>PIHAK PERTAMA</b> akan memberikan pelatihan kerja kepada <b>PIHAK KEDUA</b> sesuai dengan kebutuhan pekerjaan.</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class=indent>Jenis pelatihan kerja yang akan diterima <b>PIHAK KEDUA</b> akan ditentukan sesuai dengan peraturan perusahaan yang berlaku dan wajib mengikutinya</td>
                </tr>
            </table>

            <!-- PASAL 6 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; margin-top: 20px; padding-top: 0px;">PASAL 6</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">BERAKHIRNYA HUBUNGAN KERJA</h5>

            <p>Setiap waktu hubungan kerja antara <b>PIHAK PERTAMA</b> dengan <b>PIHAK KEDUA</b> dapat diakhiri bilamana <b>PIHAK KEDUA</b> melakukan pelanggaran berat seperti di bawah ini:</p>
            <div class="footer">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT. {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}. SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span>
                        <!-- <img src="https://ik.imagekit.io/cumme/hit_nqKyzCY6M.png" width="40px" > -->
                
                        </td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div>

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class=indent><b>PIHAK KEDUA</b> tidak mengikuti jadwal kerja yang ditetapkan oleh <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class=indent>Melakukan pencurian, penggelapan dan atau perbuatan melawan hukum lainnya.</td>
                </tr>
                <tr>
                    <td class="top">3.</td>
                    <td class=indent>Melakukan penganiayaan terhadap rekan kerja dan anggota keluarganya.</td>
                </tr>
                <tr>
                    <td class="top">4.</td>
                    <td class=indent>Berkelahi dengan sesama pekerja.</td>
                </tr>
                <tr>
                    <td class="top">5.</td>
                    <td class=indent>Merusak dengan sengaja atau karena kecerobohannya yang menimbulkan kerugian bagi <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top">6.</td>
                    <td class=indent>Menghasut dan atau mengajak rekan kerja dalam bentuk apapun juga yang berakibat turunnya produktivitas perusahaan sehingga menimbulkan kerugian baik materiil maupun imateriil bagi <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top">7.</td>
                    <td class=indent>Memberikan keterangan palsu, atau melakukan perbuatan lain yang menimbulkan kericuhan di lingkungan perusahaan milik <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top">8.</td>
                    <td class=indent>Mabuk, berjudi, menggunakan obat terlarang dilingkungan kerja.</td>
                </tr>
                <tr>
                    <td class="top">9.</td>
                    <td class=indent>Menghina dan atau mencemarkan nama baik <b>PIHAK PERTAMA</b> dan atau mitra bisnisnya dan atau pekerja lainnya beserta keluarganya.</td>
                </tr>
                <tr>
                    <td class="top">10.</td>
                    <td class=indent>Membantah dan atau menolak perintah atau instruksi dari <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top">11.</td>
                    <td class=indent>Menyalahgunakan jabatannya yang dapat menimbulkan kerugian pada <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top">12.</td>
                    <td class=indent>Melakukan pelanggaran lainnya yang dapat dikategorikan sebagai pelanggaran berat menurut peraturan yang berlaku di Republik Indonesia.</td>
                </tr>
                <tr>
                    <td class="top">13.</td>
                    <td class=indent>Tidak masuk kerja selama waktu yang sudah ditetapkan oleh <b>PIHAK PERTAMA</b> maksimal 2 Hari berturut-turut tanpa informasi yang jelas dan tidak dapat dipertanggung jawabkan oleh <b>PIHAK KEDUA</b> atau Mangkir maks 3 hari dari jadwal yang ditetapkan dalam periode 30 hari.</td>
                </tr>
                <tr>
                    <td class="top">14.</td>
                    <td class=indent>Hubungan kerja antara <b>PIHAK PERTAMA</b> dengan <b>PIHAK KEDUA</b> dapat berakhir apabila terjadi hal sebagaimana yang diatur dalam pasal 4 ayat 6, <b>PIHAK PERTAMA</b> menilai bahwa <b>PIHAK KEDUA</b> tidak cakap dan atau tidak dapat memenuhi target /criteria penilaian hasil kerja sesuai dengan yang ditetapkan oleh <b>PIHAK PERTAMA</b>.</td>
                </tr>
                <tr>
                    <td class="top">15.</td>
                    <td class=indent>Berakhirnya hubungan kerja yang ditunjukkan oleh Pasal 2 dan 6 di dalam pasal ini, membebaskan <b>PIHAK PERTAMA</b> untuk membayar Upah Sisa Masa perjanjian dan atau kompensasi dalam bentuk apapun juga.</td>
                </tr>
            </table>
            <!-- PASAL 7 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; margin-top: 0px; padding-top: 20px;">PASAL 7</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">PERSELISIHAN</h5>

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class="indent kiri_kanan">Apabila terjadi perselisihan sehubungan dengan penafsiran dan/atau pelaksanaan Perjanjian ini Para Pihak akan menyelesaikannya secara musyawarah untuk mufakat.</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class="indent kiri_kanan">Apabila penyelesaian secara musyawarah tidak tercapai, maka untuk menyelesaikannya kedua belah pihak sepakat menyelesaikannya berdasarkan hukum ketenagakerjaan yang berlaku di Indonesia, maka dengan ini para pihak sepakat dan setuju untuk memilih tempat kedudukan hukum (domisili) pada kantor Panitera Pengadilan Negeri Makassar</td>
                </tr>
            </table>

            <div class="footer">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT. {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}. SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span>
                        <!-- <img src="https://ik.imagekit.io/cumme/hit_nqKyzCY6M.png" width="40px" > -->
                
                        </td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div>
            <br>
            
            <!-- PASAL 8 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; margin-top: 10px; padding-top: 10px;">PASAL 8</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">PENUTUP</h5>

            <table style="margin-bottom: -35px; ">
                <tr>
                    <td class="top">1.</td>
                    <td class="indent kiri_kanan"><b>PIHAK PERTAMA</b> dan <b>PIHAK KEDUA</b> sepakat, bahwa apa yang telah diatur dalam Perjanjian ini akan dilaksanakan dengan penuh rasa tanggung-jawab. Apabila ada hal-hal yang belum diatur dalam perjanjian ini maka akan diatur dikemudian hari sesuai kesepakatan kedua belah pihak.</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class="indent kiri_kanan">Perjanjian Kerja Waktu Tertentu ini dibuat dan ditandatangani oleh kedua belah pihak dalam keadaan sehat jasmani dan rohani tanpa adanya paksaan ataupun tekanan dari pihak manapun. Perjanjian ini dibuat dalam 1 (satu) rangkap dan bermeterai cukup dan copy soft file diberikan pada pihak ke dua untuk kepentingan pengarsipan pribadi.</td>
                </tr>

            </table>

            

            <br>
            <p style="color: #fff; margin-bottom: 0px;">ssd</p>
            <!-- <p style="color: #fff;">ssd</p> -->
            <br>


        </div>
        <div  style="margin-top: 10px;">
            <table class="indent" style="width: 100%; page-break-before: never; margin-top: 10px;">
                <tr>
                    <td style="width: 50%;"><b>PIHAK PERTAMA</b></td>
                    <td></td>
                    <td style="width: 50%; text-align: center;"><b>PIHAK KEDUA</b></td>
                </tr>
                <tr style="margin-top: 0px;">
                    <td style="padding: 30px 0;">
                        <!-- <img width="140px" src="https://ik.imagekit.io/cumme/ttd_Z7TD0iokP.png?updatedAt=1629548395033" alt="" srcset=""> -->
                    </td>
                    <td></td>
                    <!-- <td style="font-size: 10px;">Materai 10000</td> -->
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="font-weight: bold; border-bottom: 1px solid #333;">{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->nama_pemilik))}}</span></td>
                    <td></td>
                    <td style="text-align: center;"><span style="font-weight: bold; border-bottom: 1px solid #333;">{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->nama_lengkap))}}</span></td>
                </tr>
            </table>
            <div class="footer">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT. {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}. SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span>
                        <!-- <img src="https://ik.imagekit.io/cumme/hit_nqKyzCY6M.png" width="40px" > -->
                
                        </td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>