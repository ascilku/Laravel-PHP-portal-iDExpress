    <table>
        <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIK Pegawai</th>
                    <th>Jabatan</th>

                    <!-- <th>Rincian Kehadiran</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan</th> -->

                    <th>Kehadiran</th> 
                    <th>Alpa</th> 
                    <th>Libur Nasional</th> 
                    <th>Cuti</th> 
                    <th>Gapok</th> 
                    <th>Gapok Harian</th> 
                    <th>Tunj Jabatan</th> 
                    <th>Tunj Kendaraan</th> 
                    <th>Tunj Lain</th> 

                    <th>Insen Delivery</th> 
                    <th>Insen PickUp</th> 
                    <th>Insen KPI</th> 
                    <th>THP</th> 
                    <th>Potongan Lain</th> 
                    <th>Kehadiran</th> 
                    <th>BPJS Kerja</th> 
                    <th>BPJS Kesehatan</th> 
                    <th>Total Potongan</th> 
                    <th>Total Gaji</th> 
                    <th>Tanggal Upload</th> 

                    <!-- <th>Masuk</th>
                    <th>Alpa</th>
                    <th>Cuti</th>
                    <th>Libur Nasional</th> -->
                    
                </tr>
        </thead>
        <tbody>



                <?php foreach ($data as $key_dahboard_karyawan): ?>
                    
                <?php

                    
                    
                    $dateTanggal = $key_dahboard_karyawan->tanggal;
                


                    $expired = date('m-Y', strtotime($key_dahboard_karyawan->tgl_absen)); 
                    $date_now = date('m-Y');

                    $today_time = strtotime($date_now);
                    $expire_time = strtotime($expired);


                    

                    

                    $tampil_jabatan = $key_dahboard_karyawan->nama_jabatan;
                    $jumlah_kehadiran = $key_dahboard_karyawan->kehadiran;

                    if($tampil_jabatan == "COURIER FREELANCE"){
                        if($jumlah_kehadiran > "21"){
                            $tampil_kehadiran = 21;
                        }else{
                            $tampil_kehadiran = $jumlah_kehadiran;
                        }
                    }else{
                        $tampil_kehadiran = $jumlah_kehadiran;
                    }
                    

                    
                    

                        
                    $awal          = date('Y-m-d', strtotime($key_dahboard_karyawan->tanggal_masuk)); 
                    $akhir       = date('Y-m-d'); 
                    
                    
                    $date_awal         = new DateTime($awal);
                    $date_akhir      = new DateTime($akhir);
                    
                    $deadlain           = $date_awal->diff($date_akhir);
                    $deadline_          = $deadlain->format('%R%a');

                    // if($tampil_jabatan == "COURIER FREELANCE" || $tampil_jabatan == "COURIER CONTRACT"){
                    //     if($jumlah_kehadiran < "10"){
                    //         // $total_tunjangan_kendaraan = $key_dahboard_karyawan->tunj_kendaraan;
                    //         $total_tunjangan_kendaraan = 0;
                    //     } else {
                    //         $total_tunjangan_kendaraan = "150.000";
                    //     }
                    // } else {
                    //     $total_tunjangan_kendaraan = "0";
                    // }

                    $total_tunjangan_kendaraan = $key_dahboard_karyawan->tunj_kendaraan;

                    if($tampil_jabatan == "COURIER FREELANCE"){

                        $totalKPI = 0;

                        $total_gajiPerhari = number_format($key_dahboard_karyawan->nominal_gaji / 21,0,',',''); //benar

                        $total_gaji_ = $key_dahboard_karyawan->nominal_gaji; //benar

                        $totalAlpha = $key_dahboard_karyawan->alpha * $total_gajiPerhari;

                        $total_gaji = $total_gaji_ - $totalAlpha;



                        

                        $thp = $tampil_kehadiran * $total_gaji / 21 + $key_dahboard_karyawan->i_delivery + $key_dahboard_karyawan->i_pickup + $total_tunjangan_kendaraan;

                        $ketenagakerjaan = number_format($total_gaji * 2 / 100, 0, ",", "");
                        $kesehatann = number_format($total_gaji * 1 / 100, 0, ",", "");

                        $totalPotongan =  $kesehatann + $ketenagakerjaan;

                        $totalGaji = $thp - $totalPotongan;

                    } else {

                        $hijau = $key_dahboard_karyawan->hujau;
                        $merah = $key_dahboard_karyawan->merah;

                        $rp_danaHijau = $key_dahboard_karyawan->rp_hujau;
                        $rp_danaMerah = $key_dahboard_karyawan->rp_merah;

                        $jum_hijau = $hijau * $rp_danaHijau;
                        $jum_merah = $merah * $rp_danaMerah;

                        $totalKPI_ = $jum_hijau - $jum_merah;

                        if($totalKPI_ <= 0){
                            $ket = "Mines";
                            $totalKPI = 0;
                        }else{
                            $ket = "Positif";
                            $totalKPI = $totalKPI_;
                        }

                        $total_gajiPerhari = number_format($key_dahboard_karyawan->nominal_gaji / 25,0,',','');

                        if ($deadline_ <= 30) {
                            if ($tampil_jabatan == "COORDINATOR VIRTUAL TH") {
                                $total_gaji_ = $key_dahboard_karyawan->nominal_gaji;

                                $totalAlpha = $key_dahboard_karyawan->alpha * $total_gajiPerhari;

                                $total_gaji = $total_gaji_ - $totalAlpha;

                                $thp = $total_gaji + $totalKPI + $key_dahboard_karyawan->i_delivery + $key_dahboard_karyawan->i_pickup + $key_dahboard_karyawan->tunj_jabatan + $total_tunjangan_kendaraan + $key_dahboard_karyawan->pendapatan_lain;

                                $ketenagakerjaan = number_format($total_gaji * 2 / 100, 0, ",", "");
                                $kesehatann = number_format($total_gaji * 1 / 100, 0, ",", "");

                                $totalPotongan =  $kesehatann + $ketenagakerjaan;

                                $totalGaji = $thp - $totalPotongan;

                            } else {
                                
                                $total_gaji = $key_dahboard_karyawan->nominal_gaji;

                                $ketenagakerjaan = number_format($total_gaji * 2 / 100, 0, ",", "");
                                $kesehatann = number_format($total_gaji * 1 / 100, 0, ",", "");
                                $totalPotongan =  $kesehatann + $ketenagakerjaan;

                                $gaji = $deadline_ * $total_gajiPerhari;

                                $thp = $gaji + $totalKPI + $key_dahboard_karyawan->i_delivery + $key_dahboard_karyawan->i_pickup + $key_dahboard_karyawan->tunj_jabatan + $total_tunjangan_kendaraan + $key_dahboard_karyawan->pendapatan_lain;

                                $totalAlpha = $key_dahboard_karyawan->alpha * $total_gajiPerhari;

                                $total = $thp - $totalAlpha;

                                $totalGaji = $total - $totalPotongan;
                            }
                        } else {
                            
                            $total_gaji_ = $key_dahboard_karyawan->nominal_gaji;
                            
                            $totalAlpha = $key_dahboard_karyawan->alpha * $total_gajiPerhari;

                            $total_gaji = $total_gaji_ - $totalAlpha;

                            $thp = $total_gaji + $totalKPI + $key_dahboard_karyawan->i_delivery + $key_dahboard_karyawan->i_pickup + $key_dahboard_karyawan->tunj_jabatan + $total_tunjangan_kendaraan + $key_dahboard_karyawan->pendapatan_lain;

                            $ketenagakerjaan = number_format($total_gaji * 2 / 100, 0, ",", "");
                            $kesehatann = number_format($total_gaji * 1 / 100, 0, ",", "");

                            $totalPotongan =  $kesehatann + $ketenagakerjaan;

                            $totalGaji = $thp - $totalPotongan;

                            

                        }
                    }



                    
                    
                    


                ?>

                    <?php if ($today_time == $expire_time): ?>
                        <tr>
                            <td>{{$key_dahboard_karyawan->nama_lengkap}}</td>
                            <td>{{$key_dahboard_karyawan->nip}}</td>
                            <td>
                                <?php if ($key_dahboard_karyawan->nama_jabatan): ?>
                                    {{$tampil_jabatan}}
                                <?php else: ?>
                                    Tidak Ada Jabatan
                                <?php endif ?>
                                
                            </td>
                            <!-- <td><a href="">lihat</a></td>
                            <td><a href="">lihat</a></td>
                            <td><a href="">lihat</a></td> -->
                            
                            <!-- <td data-label="Title" >
                                {{$key_dahboard_karyawan->kehadiran}}
                                                
                                
                            </td>
                            <td>{{$key_dahboard_karyawan->alpha}}</td>
                            <td>{{$key_dahboard_karyawan->cuti}}</td>
                            <td>{{$key_dahboard_karyawan->libur_nasional}}</td> -->
                            <td>{{$tampil_kehadiran}}</td>
                            <td>{{$key_dahboard_karyawan->alpha}}</td>
                            <td>{{$key_dahboard_karyawan->libur_nasional}}</td>
                            <td>{{$key_dahboard_karyawan->cuti}}</td>
                            <td>Rp{{number_format($key_dahboard_karyawan->nominal_gaji,0,',',',')}}</td>
                            <td>Rp{{number_format($total_gajiPerhari,0,',',',')}}</td>
                            <?php if (isset($key_dahboard_karyawan->tunj_jabatan)): ?>
                                <td>Rp{{$key_dahboard_karyawan->tunj_jabatan}}</td>
                            <?php else: ?>
                                <td>Rp0</td>
                            <?php endif ?>
                            
                            <?php if (isset($key_dahboard_karyawan->tunj_kendaraan)): ?>
                                <td>Rp{{$key_dahboard_karyawan->tunj_kendaraan}}</td>
                            <?php else: ?>
                                <td>Rp0</td>
                            <?php endif ?>
                            <!-- <td>Rp{{$total_tunjangan_kendaraan}}</td> -->

                            <?php if (isset($key_dahboard_karyawan->pendapatan_lain)): ?>
                                <td>Rp{{$key_dahboard_karyawan->pendapatan_lain}}</td>
                            <?php else: ?>
                                <td>Rp0</td>
                            <?php endif ?>

                            <?php if (isset($key_dahboard_karyawan->i_delivery)): ?>
                                <td>Rp{{$key_dahboard_karyawan->i_delivery}}</td>
                            <?php else: ?>
                                <td>Rp0</td>
                            <?php endif ?>

                            <?php if (isset($key_dahboard_karyawan->i_pickup)): ?>
                                <td>Rp{{$key_dahboard_karyawan->i_pickup}}</td>
                            <?php else: ?>
                                <td>Rp0</td>
                            <?php endif ?>
                            
                            
                            <td>Rp{{number_format($totalKPI, 0, ",", ",")}}</td>
                            <td>Rp{{number_format($thp, 0, ",", ",")}}</td>

                            <td></td>
                            <td>{{$key_dahboard_karyawan->kehadiran}}</td>
                            <td>Rp{{number_format($ketenagakerjaan, 0, ",", ",")}}</td>
                            <td>Rp{{number_format($kesehatann, 0, ",", ",")}}</td>
                            <td>Rp{{number_format($totalPotongan, 0, ",", ",")}}</td>

                            <td>

                                <?php if ($totalGaji <= 0): ?>
                                    Rp 0
                                <?php else: ?>
                                    Rp{{number_format($totalGaji, 0, ",", ".")}}
                                <?php endif ?>
                                
                            


                            </td>

                            <td>{{$dateTanggal}}</td>
                            <!-- <td data-label="Title" >
                                <div>TH_PWX01</div>
                                
                            </td> -->
                            
                            
                        </tr>
                    <?php else: ?>
                    <?php endif ?>
                <?php endforeach ?>
           
            

        </tbody>
    </table>