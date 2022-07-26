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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Kontrak Kerja</title>
    <link href="public/dist/css/tabler.min.css" rel="stylesheet"/>
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

        .kk {
            text-align: justify;
        }

        @page: last-child {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <!-- Define header and footer blocks before your content -->
    <!--<header>-->
        
        
    <!--    <table style="width: 100%;">-->
    <!--        <tr>-->
    <!--            <td style="width: 40%;"></td>-->
    <!--            <td class="mid">-->
                    
    <!--                <img src="https://portal.indokaisa.com/public/file/rekrutment/profil/{{$dahboard_akun_cookie->perusahaan->data_perusahaan->foto}}" alt="" style="width: 150px; height: 150px;">-->
    <!--            </td>-->
    <!--            <td class="mid" style="width: 40%;"></td>-->
    <!--        </tr>-->
    <!--    </table>-->
        
        
    <!--    <h3 style="padding: 0; margin: 0;">PT HEROISME INDOKAISA TRIASA</h3>-->
    <!--    <p class="mid" style="font-size: 14px;margin-top: -2px;">Jalan Gunung Latimojong No. 78 A, Kel. Lariang Bangi, Kecamatan Makassar, Kota Makassar, Provinsi Sulawesi Selatan. Email :heroismeindokaisatriasa@gmail.com Telp. 0411 3633882</p>-->
    <!--    <hr style="border: solid 2px #000; margin-top: -10px;">-->
    <!--</header>-->
    
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

         <table style="width: 100%;" border="1">
            <tr>
                <!-- <td style="width: 40%;"></td> -->
                <td class="mid" style="width: 40%;" colspan="2" >
                    <h3 style="padding: 0; margin-top: 5;">{{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}</h3>
                    <p class="mid" style="font-size: 14px;margin-top: -15px;">{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->alamat))}}, Kelurahan. {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kelurahan))}}, Kecamatan {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kecamatan))}}, Kota {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kabupaten))}}, Provinsi {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->provinsi))}}. Email : {{$dahboard_akun_cookie->perusahaan->email}} Telp. {{$dahboard_akun_cookie->perusahaan->no_hp}}</p>
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
    <main  style="margin-top: 0px;">
        <div style="page-break-after: always; page-break-after: never;">
            <h5 class="mid" style="border-bottom: solid 1px #333; text-align: center; width: 45%; margin: 0 auto; margin-top: 0px; margin-bottom: -10px;">PERJANJIAN KERJA WAKTU TERTENTU</h5>
            <p class="mid" style="margin-top: 10px;">Nomor : {{$dahboard_cek_kontrak->kontrak->no_kontrak}}/{{$kata}}/{{$jenis}}/{{$dahboard_cek_kontrak->kontrak->bulan}}/{{$dahboard_cek_kontrak->kontrak->tahun}}</p>
            <p>Perjanjian Kerja ini dibuat dan ditandatangani di Makassar, pada hari ini tanggal <b>{{tanggal_indo($dahboard_cek_kontrak->kontrak->tanggal_awal)}}</b>, oleh
                dan diantara ;
            </p>
            <table>
                <tr>
                    <td class="top" style="text-align: start;">1.</td>
                    <td class="kk">
                        <span class="bold"><b>PT {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->nama))}}</b></span> suatu perseroan terbatas yang didirikan berdasarkan hukum di Indonesia, berkedudukan di <b>{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->alamat))}}, Kelurahan. {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kelurahan))}}, Kecamatan {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kecamatan))}}, Kota {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->kabupaten))}}, Provinsi {{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->provinsi))}}</b>, dalam hal ini diwakili oleh <b>{{ucwords(strtolower($dahboard_akun_cookie->perusahaan->data_perusahaan->nama_pemilik))}}</b> selaku <span class="bold hitam">General Manager</span> , untuk selanjutnya disebut <span style="font-weight: bold; font-size: 13px;">"PIHAK PERTAMA".</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">2.</td>
                    <td class="kk"><b>{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->nama_lengkap))}}</b> perorangan, dari dan karenanya bertindak untuk dan atas nama diri sendiri, <b>{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->alamat_ktp))}}, Kel.{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->kelurahan_ktp))}}, Kec.{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->kecamatan_ktp))}}, Kab.{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->kabupaten_ktp))}}, Kot.{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->kota_ktp))}}, Prov.{{ucwords(strtolower($dahboard_cek_kontrak->kontrak->akun->data_diri->provinsi_ktp))}}</b>, Pemegang Kartu Tanda Penduduk (KTP) <b>{{$dahboard_cek_kontrak->kontrak->akun->data_diri->nik}}</b> untuk selanjutnya disebut “PEKERJA/<span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span>”.</td>
                </tr>
            </table>
            <p class="indent">Para pihak dalam kedudukan mereka sebagaimana tersebut di atas terlebih dahulu menerangkan</p>
            <table class="indent">
                <tr>
                    <td class="no" style="text-align: start;" >-</td>
                    <td class="kk">
                        Bahwa sehubungan kondisi dan volume pekerjaan yang ada di perusahaan <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> tersebut, maka diperlukan tambahan tenaga kerja;.
                    </td>
                </tr>
                <!--<tr>-->
                <!--    <td></td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--    <td></td>-->
                <!--</tr>-->
                <tr>
                    <td class="no" style="text-align: start;">-</td>
                    <td class="kk">Bahwa <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> menyatakan menerima <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> untuk bekerja di perusahaan <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> sebagai karyawan;</td>
                </tr>
                <!--<tr>-->
                <!--    <td></td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--    <td></td>-->
                <!--</tr>-->
                <tr>
                    <td class="no" style="text-align: start;">-</td>
                    <td class="kk"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> menyatakan bersedia bekerja sebagai karyawan di perusahaan <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> tersebut dengan itikad baik ;</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="no" style="text-align: start;">-</td>
                    <td class="kk"><span style="font-weight: bold; font-size: 13px;">PARA PIHAK</span> berlandaskan itikad baik dengan ini sepakat untuk saling mengikatkan diri dalam perjanjian ini dengan ketentuan-ketentuan dan syarat-syarat sebagaimana diatur dalam pasal-pasal di bawah ini.</td>
                </tr>
                <!--<tr>-->
                <!--    <td class="no" style="text-align: start;">-</td>-->
                <!--    <td class="kk">-</td>-->
                <!--</tr>-->
            </table>

            <div class="footer ">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}. SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span></td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div>


            <h5 class="mid">PASAL 1</h5>
            <h5 class="mid" style="margin-top: -15; margin-bottom: 20px;">PENEMPATAN,TUGAS dan TANGGUNG JAWAB</h5>
            <table style="margin-top: -15px;">
                <tr>
                    <td class="top" style="text-align: start;">1.</td>
                    <td class="kk"><span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> memperkerjakan <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> di unit perusahaan <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span>
                    <b>PT {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}</b> , Penempatan <b> {{strtoupper($dahboard_cek_kontrak->penempatan_wilayah_riw->penempatan->alokasi)}}</b> Sebagai <b>{{strtoupper($dahboard_cek_kontrak->riw_jabatan_gaji->jabatan->nama_jabatan)}}</b>.
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">2.</td>
                    <td class="kk"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> wajib melaksanakan pekerjaan yang menjadi tugas dan tanggungjawab dengan baik, sesuai dengan Jobs Description, dimana <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> berhak sewaktu waktu untuk mengubah, menambah, mengganti dan merubah Jobs Description sesuai dengan kebutuhan perusahaan</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">3.</td>
                    <td class="kk"><span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> berhak dan berwenang untuk menempatkan dan memindahkan <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> pada pekerjaan dan atau ke bagian / unit lain yang menurut pertimbangan <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> sesuai dengan kepentingan perusahaan.</td>
                </tr>
            </table>



            <br>
            <!-- PASAL 2 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; padding-top: 0px;">PASAL 2</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto">MASA BERLAKU PERJANJIAN</h5>
            <p class="mid">Perjanjian kerja ini berlaku sejak ditandatangani dan akan berakhir pada tanggal </p>
            <h5 class="mid" style="width: 48%; margin:-15 auto; padding-top: 10px;">({{tanggal_indo($dahboard_cek_kontrak->kontrak->tanggal_akhir)}})</h5>
            <br>
            <!-- PASAL 3 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; margin-top: 20px; padding-top: 10px;">PASAL 3</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">UPAH</h5>

            <table style="margin-top: 0px; margin-bottom: 0;">
                <tr>
                    <td class="top" style="text-align: start;">1.</td>
                    <td class="kk">Selama berlakunya perjanjian ini, <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> akan menerima upah berupa uang dari <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> dalam jumlah sebagaimana yang telah disepakati oleh <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> dan <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> dengan tata cara yang diatur yang berdasarkan jumlah hari kehadiran Kerja.
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">2.</td>
                    <td class="kk">Upah sebagaimana tersebut dalam ayat (1) pasal ini, akan dibayarkan oleh <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> kepada <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> Maksimal tanggal 8 Awal Bulan menurut tata cara pembayaran yang berlaku dan ditetapkan oleh <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span>.</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">3.</td>
                    <td class="kk">Apabila <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> mengundurkan diri /berhenti kerja, baik karena perjanjian ini berakhir tidak diperpanjang atau karena melakukan pelanggaran berat yang dilakukan oleh <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span>, maka pembayaran upah terakhir akan diberikan oleh <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> setelah dilakukannya pemeriksaan inventori terakhir pada saat /waktu dimana <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> bekerja pada saat itu.</td>
                </tr>
            </table>

            <div class="footer ">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}. SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span></td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div>
            
            <!-- PASAL 4 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; padding-top: 20px;">PASAL 4</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">HAK DAN KEWAJIBAN</h5>

            <table style="margin-top: 15px; margin-bottom: 0;">
                <tr>
                    <td class="top" style="text-align: start;">1.</td>
                    <td class="kk"><span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> wajib membayar kepada <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> upah berupa uang dalam jumlah, waktu dan cara sebagaimana tersebut pada pasal 3 (tiga) Perjanjian ini.
                    </td>
                </tr>
                <tr>
                    <td class="top" style="text-align: start;">2.</td>
                    <td><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> berhak menerima gaji dari <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> sebagai berikut:.</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <table>
                            <tr>
                                <td>a.</td>
                                <td>Gaji Pokok</td>
                                <td>:</td>
                                <td> <b> Rp <?= number_format($dahboard_cek_kontrak->riw_jabatan_gaji->gaji->nominal_gaji, 2, ',', '.'); ?></b></td>
                            </tr>

                            <tr>
                                <td>b.</td>
                                <td>Tunjangan Jabatan</td>
                                <td>:</td>
                                
                                <?php if (!isset($dahboard_cek_kontrak->rwy_tunjangan_pkwt)): ?>
                                    <td><b>Berdasarkan Keputusan Direksi</b></td>
                                <?php else: ?>
                                    <td><b> Rp <?= number_format($dahboard_cek_kontrak->rwy_tunjangan_pkwt->tunj_jabatan, 2, ',', '.'); ?></b></td>
                                <?php endif ?>
                                
                            </tr>

                            <tr>
                                <td>c.</td>
                                <td>Tunjangan Kendaraan</td>
                                <td>:</td>
                                <?php if (!isset($dahboard_cek_kontrak->rwy_tunjangan_pkwt)): ?>
                                    <td><b>Berdasarkan Keputusan Direksi</b></td>
                                <?php else: ?>
                                    <td><b> Rp <?= number_format($dahboard_cek_kontrak->rwy_tunjangan_pkwt->tunj_kendaraan, 2, ',', '.'); ?></b></td>
                                <?php endif ?>
                            </tr>

                            <tr>
                                <td>c.</td>
                                <td>Tunjangan Lainnya</td>
                                <td>:</td>
                                <?php if (!isset($dahboard_cek_kontrak->rwy_tunjangan_pkwt)): ?>
                                    <td><b>Berdasarkan Keputusan Direksi</b></td>
                                <?php else: ?>
                                    <td><b> Rp <?= number_format($dahboard_cek_kontrak->rwy_tunjangan_pkwt->pendapatan_lain, 2, ',', '.'); ?></b></td>
                                <?php endif ?>
                            </tr>
                            
                        </table>
                        
                        
                    </td>
                    
                </tr>
                
                <tr>
                    <td></td>
                    <td class="indent ">Dengan ditanda tangani PKWT ini, apabila ada perbedaan dengan dokumen lain yang disepakati sebelum tanggal PKWT ini, maka yang berlaku adalah yang tertuang dalam PKWT ini </td>
                </tr>
                <tr>
                    <td class="top">3.</td>
                    <td class="indent "><span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> akan melakukan pemotongan iuran BPJS Ketenagakerjaan 2%, dan BPJS Kesehatan 1% kepada <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> setelah 1 (satu) bulan masa kerja </td>
                </tr>
                <tr>
                    <td class="top">4.</td>
                    <td class="indent "><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> bersedia mengganti kehilangan paket apabila sengaja atau tidak sengaja yang menjadi tanggung jawabnya denga simulasi sebagai berikut : </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <table>
                            <tr>
                                <td>(1) </td>
                                <td>Jika Tidak Menggunakan Asuransi </td>
                                <!-- <td>:</td> -->
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>a. 10 kali harga ongkos kirim paket dari mitra ID Express</td>
                                            <!-- <td>:</td> -->
                                        </tr>
                                        <tr>
                                            <td>b. 10 kali harga ongkos kirim paket Pihak Pertama</td>
                                            <!-- <td>:</td> -->
                                        </tr>
                                        <tr>
                                            <td>Total kerugian point a x b dengan total 100 kali lipat dari harga ongkos kirim atau nilai barang yang mana lebih rendah dan maksimal.</td>
                                            <!-- <td>:</td> -->
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td>(2) </td>
                                <td>Jika Menggunakan Asuransi </td>
                                <!-- <td>:</td> -->
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>a. Harga Paket yang digantikan sesuai dengan jumlah kerugian dari Customer</td>
                                            <!-- <td>:</td> -->
                                        </tr>
                                        <tr>
                                            <td>b. 10 Kali Harga Ongkos Kirim paket dari Mitra ID Express/td>
                                            <!-- <td>:</td> -->
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        
                    </td>
                </tr>
                <tr>
                    <td class="top">5.</td>
                    <td class="indent kk"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> bersedia mengganti kerusakan paket baik disengaja maupun tidak sengaja apabila paket yang menjadi tanggung jawabnya rusak pada saat pengantaran dan sesuai dengan tingkat kerugian yang dialami Customer</td>
                </tr>
                <tr>
                    <td class="top">6.</td>
                    <td class="indent kk"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> wajib mengembalikan seluruh sarana dan prasarana kerja milik <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> dalam keadaan baik serta menyelesaikan seluruh tanggung jawab yang diemban <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> kepada  <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> saat berakhirnya hubungan kerja akibat berakhirnya kontrak atau pemutusan hubungan kerja</td>
                </tr>
                <tr>
                    <td class="top">7.</td>
                    <td class="indent kk">Selama berlakunya perjanjian kerja ini,  <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA </span> berhak untuk sewaktu-waktu melakukan evaluasi atau penilaian terhadap hasil kinerja  <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> serta menentukan dan atau mengambil tindakan sesuai dengan pedoman dan atau tata cara yang diatur di dalam ketentuan /peraturan perusahaan mengenai penilaian kinerja <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span></td>
                </tr>
            </table>

            <div class="footer ">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}. SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span></td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div>

            <!-- <p style="color: #fff; margin-bottom: 15px;">ssd</p> -->
            <!-- <p style="color: #fff;">ssd</p> -->
          



            <!-- PASAL 5 -->
            <br>
            <h5 class="mid" style="width: 48%; margin:0 auto; margin-top: 0px; padding-top: 0px;">PASAL 5</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 10px;">CUTI</h5>

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class="indent "><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> berhak atas cuti tahunan 12 (dua belas) hari Kerja setelah memiliki masa Kerja 12 (dua belas) bulan berturut-turut </td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class="indent ">Tata cara pengambilan cuti tahunan disesuaikan dengan Policy & Procedure Perusahaan </td>
                </tr>
            </table>

            <!-- PASAL 6 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; margin-top: 10px; padding-top: 0px;">PASAL 6</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">PELATIHAN</h5>

            

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class=indent><span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> akan memberikan pelatihan kerja kepada <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> sesuai dengan kebutuhan pekerjaan</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class=indent>Jenis pelatihan kerja yang akan diterima <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> akan ditentukan sesuai dengan peraturan perusahaan yang berlaku</td>
                </tr>
            </table>
            <!-- PASAL 7 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; margin-top: 20px; padding-top: 0px;">PASAL 7</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">KEWAJIBAN dan LARANGAN-LARANGAN BAGI <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span></h5>

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class="indent kk"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> wajib mentaati semua Peraturan Perusahaan yang berlaku dan ditetapkan oleh Perusahaan beserta perubahan-perubahannya</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class="indent kk"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> wajib dengan sebaik-baiknya melakukan pekerjaan yang menjadi tugas dan tanggung-jawabnya</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class="indent kk"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> wajib dengan sebaik-baiknya melakukan pekerjaan yang menjadi tugas dan tanggung-jawabnya</td>
                </tr>
                <tr>
                    <td class="top">3.</td>
                    <td class="indent kk"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> dilarang keras membawa keluar area Perusahaan barang-barang milik perusahaan sekecil apapun, kecuali ada ijin tertulis dari Perusahaan. Dimana pelanggaran terhadap ketentuan ini dapat dikenakan tingkat pemutusan hubungan kerja</td>
                </tr>
                <tr>
                    <td class="top">4.</td>
                    <td class="indent kk"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> wajib hadir ditempat kerja tepat waktu yang sudah ditentukan oleh <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="top">5.</td>
                    <td class="indent kk"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> dilarang mengikatkan diri dengan instansi lain contohnya baik sebagai Karyawan tetap, Karyawan tidak tetap (kontrak, maupun karyawan harian lepas);</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <br>
            <!-- PASAL 8 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; padding-top: 10px;">PASAL 8</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">KETIDAK-HADIRAN DAN PEMBAYARAN UPAH</h5>

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class="indent kk">Apabila dari <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> tidak masuk kerja tanpa dapat menunjukkan Surat Keterangan Sakit dari dokter yang disahkan oleh dokter , maka upahnya akan dipotong sesuai dengan jumlah hari ketidak-hadiran <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> </td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class="indent kk">Apabila <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> tidak absen ”Masuk” dan ”Pulang” , maka <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> akan terhitung tidak hadir kecuali ada izin tertulis dari atasan yang dibuktikan dengan Approval yang sudah ditentukan oleh <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> </td>
                </tr>
                <tr>
                    <td class="top">3.</td>
                    <td class="indent kk">Dalam hal <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> tidak masuk kerja karena sakit yang berkepanjangan, maka pembayaran upahnya dilakukan sesuai dengan ketentuan yang berlaku dalam Pasal 93 ayat (3) Undang-undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan </td>
                </tr>
            </table>
            <!-- PASAL 9 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; padding-top: 20px;">PASAL 9</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">MERUMAHKAN KARYAWAN</h5>

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class="indent kk"><span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> berhak untuk merumahkan <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> dan menentukan periode dan jangka waktunya dalam kondisi apabila dianggap perlu.</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class="indent kk">Selama masa dirumahkan, <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> dibebaskan dari membayar gaji dan kewajiban-kewajiban kepada <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span>. Besaran gaji yang tidak dibayarkan akan dihitung secara proporsional sesuai jumlah hari kerja bulan berjalan. Sebagai gantinya <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> akan membayarkan tunjangan dirumahkan sebesar Rp.20.000/hari (dua puluh ribu per hari) dan maksimal Rp.250.000 (dua ratus lima puluh ribu rupiah) per periode ketetapan dirumahkan tersebut</td>
                </tr>
            </table>


            <!-- PASAL 10 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; margin-top: 20px; padding-top: -10px;">PASAL 10</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">BERAKHIRNYA HUBUNGAN KERJA</h5>
            <div class="footer ">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}. SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span></td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div>

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class="indent kk">Perjanjian ini berlaku terus sampai saat berakhirnya jangka waktu yang telah ditentukan sebagaimana tersebut dalam Pasal 2 (dua) perjanjian ini, dan kedua belah pihak sepakat untuk tidak menuntut ganti rugi dalam bentuk apapun dikarenakan akibat dari habisnya masa berlaku perjanjian ini.</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class="indent kk">Hubungan kerja antara <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> dengan <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> dapat berakhir apabila terjadi hal sebagaimana yang diatur dalam pasal 4 ayat 7, <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> menilai bahwa <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> tidak cakap dan atau tidak dapat memenuhi target /criteria penilaian hasil kerja sesuai dengan yang disepakati bersama.</td>
                </tr>
                
                <tr>
                    <td class="top">3.</td>
                    <td class="indent kk">Hubungan kerja antara <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> dengan <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> berakhir apabila <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> melakukan pelanggaran berat sebagaimana diatur dalam ketentuan / Peraturan Perusahaan dan atau melanggar larangan-larangan sebagaimana tercantum pada pasal 7 (Tujuh) di dalam perjanjian ini</td>
                </tr>

                <tr>
                    <td class="top">4.</td>
                    <td class="indent kk">Berakhirnya hubungan kerja yang ditunjukkan oleh pasal 2 (dua) dan 3 (tiga) di dalam pasal ini, membebaskan <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> untuk membayar Upah Sisa Masa kontrak dan atau kompensasi dalam bentuk apapun juga</td>
                </tr>
                <tr style="padding-top: 40px;">
                    <td class="top">5.</td>
                    <td class="indent kk">Apabila mengundurkan diri tidak sesuai prosedur ( tidak sesuai dengan UU no.13/03 pasal 162 ayat 3a. atau kurang dari 30 hari surat pengajuan pengunduran dirinya) dan tidak mengembalikan Atribut dan Inventaris perusahaan yang diberikan sesuai jadwal yang sudah ditentukan oleh <span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span>, maka sisa gaji tidak akan dibayarkan dan akan menjadi hak perusahaan</td>
                </tr>

            </table>
            <br>
            <!-- <p style="color: #fff;">ssd</p> -->
            


            <!-- PASAL 11 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; padding-top: 10px;">PASAL 11</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">PERSELISIHAN</h5>

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class="indent kk">Apabila terjadi perselisihan sehubungan dengan penafsiran dan/atau pelaksanaan Perjanjian ini Para Pihak akan menyelesaikannya secara musyawarah untuk mufakat</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class="indent kk">Apabila penyelesaian secara musyawarah tidak tercapai, maka untuk menyelesaikannya kedua belah pihak sepakat menyelesaikannya berdasarkan hukum ketenagakerjaan yang berlaku di Indonesia, maka dengan ini para pihak sepakat dan setuju untuk memilih tempat kedudukan hukum (domisili) pada kantor Panitera Pengadilan Negeri Makassar</td>
                </tr>
            </table>
            <br>
            <!-- PASAL 12 -->
            <h5 class="mid" style="width: 48%; margin:0 auto; padding-top: 5px;">PASAL 12</h5>
            <h5 class="mid" style="width: 78%; margin:0 auto; margin-bottom: 20px;">PENUTUP</h5>

            <table>
                <tr>
                    <td class="top">1.</td>
                    <td class="indent kk"><span style="font-weight: bold; font-size: 13px;">PIHAK PERTAMA</span> dan <span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span> sepakat, bahwa apa yang telah diatur dalam Perjanjian ini akan dilaksanakan dengan penuh rasa tanggung-jawab. Apabila ada hal-hal yang belum diatur dalam perjanjian ini maka akan diatur di kemudian hari sesuai kesepakatan kedua belah pihak</td>
                </tr>
                <tr>
                    <td class="top">2.</td>
                    <td class="indent kk">Perjanjian Kerja Waktu Tertentu ini dibuat dan ditandatangani oleh kedua belah pihak dalam keadaan sehat jasmani dan rohani tanpa adanya paksaan ataupun tekanan dari pihak manapun. Perjanjian ini dibuat dalam 1 (satu) rangkap dan bermeterai cukup dan dan copy soft file diberikan pada pihak ke dua untuk kepentingan pengarsipan pribadi</td>
                </tr>
            </table>

            <div class="footer ">
                <table style="border: 1px solid black;border-collapse: collapse;">
                    <tr style="border: 1px solid black;border-collapse: collapse;">
                        <td class="top" style="border: 1px solid black;border-collapse: collapse; padding:5px" rowspan="2">Kontrak kerja ini dicetak oleh system PT {{strtoupper($dahboard_akun_cookie->perusahaan->nama)}}. SAH walaupun tanpa dibubuhi tanda tangan dan stempel basah</td>
                        <td class="top" style="border: 1px solid black; border-collapse: collapse;" rowspan="2"><span style="font-weight: bold; font-size: 13px;">PIHAK KEDUA</span></td>
                    </tr>
                    <tr class="top" style="border: 1px solid black;border-collapse: collapse;">
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <br>
        <div>
            <table class="indent" style="width: 100%; page-break-before: never;">
                <tr>
                    <td style="width: 50%;">PIHAK PERTAMA</td>
                    <td></td>
                    <td style="width: 50%; text-align: center;">PIHAK KEDUA</td>
                </tr>
                <tr style="margin-top: 20px;">
                    <td style="padding: 30px 0">
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
        </div>
    </main>
</body>

</html>
