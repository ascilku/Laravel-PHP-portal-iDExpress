<div class="container-xl">

<!-- Page title -->

<?php if (session()->has('alert-peringatan')): ?>
<div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
<?php endif ?>

<?php if (Session::get('alert-success-karyawan_')): ?>
<div class="alert alert-danger alert-dismissible">
<strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan_')}}
</div>
<?php endif ?>

<!-- ======================== Modal Tambah Data Karyawan Exel ============================== -->
<div class="modal modal-blur fade" id="modal-create-absensi-exel" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Upload Data Absensi Bulan Ini</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('create-absensi-exel')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
            <div class="modal-body">

                  <div class="mb-3">
                      <label class="form-label required">Create Exel Absensi Bulan Ini</label>
                      <input type="file" class="form-control" id="file" name="file" placeholder="No WhatsApp Aktif..." required>
                      <span id="file_error" class="text-danger font-size-info-alert"></span>
                  </div>
             
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                  Cancel
                </a>
                <button type="submit" class="btn btn-primary ms-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    Create new Absensi
                </button>
            </div>
      </form>
  </div>
</div>
</div>


<?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>   
  <div class="page-header d-print-none">
      <div class="row align-items-center">
          <div class="col-xl-12 col-md-12 col-sm-12 ">
              <div class="row">
                      <div class="page-header d-print-none">

                              <div class="row align-items-center">
                                  <div class="col-xl-12 col-md-12 col-sm-12 ">
                                      <div class="row">
                      
                                              <div class="col-xl-12 col-md-12 col-sm-12  col-12 center-foto">
                                                      <a href="" class="btn btn-icon" aria-label="Twitter">
                                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 17 15 14" /></svg>
                                                      </a>
                                                      <a href="#" class="btn  btn-icon view_data" aria-label="Twitter" data-flashdata="{{$dahboard_akun_cookie->id_perusahaan}}" >
                                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="16" height="16" rx="2" /><line x1="9" y1="12" x2="15" y2="12" /><line x1="12" y1="9" x2="12" y2="15" /></svg>
                                                      </a>
                                                      <a href="#" class="btn  btn-icon view_data_exel_absensi" aria-label="Twitter" data-flashdata="{{$dahboard_akun_cookie->id_perusahaan}}">
                                                          <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                                          <!-- Download SVG icon from http://tabler-icons.io/i/square-plus -->
                                                          <!-- Download SVG icon from http://tabler-icons.io/i/file -->
                                                          <!-- Download SVG icon from http://tabler-icons.io/i/files -->
                                                          <!-- Download SVG icon from http://tabler-icons.io/i/file-upload -->
                                                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 11 15 14" /></svg>
                                                      </a>
                                                      <a href="{{ asset('') }}/../../file/exel/absensi.xlsx" class="btn  btn-icon" aria-label="Twitter">
                                                          Template Exel 
                                                      </a>
                                              </div>
                                      </div>  
                                  </div>
                              </div>
                      </div>
              </div>
          </div>
      </div>
  </div>
<?php endif ?>  
</div>



<div class="page-body">
<div class="container-xl">
  <div class="row row-cards">
      

    <div class="col-12">
      <div class="card font-size-cv-">
        <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered padding-top padding-bottom" cellspacing="0" width="100%">
                      <thead>
                              <tr>
                                    <th>Profile Pegawai</th>
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

                        

                          <?php if (isset($dahboard_karyawan_kpi)): ?>
                              <?php foreach ($dahboard_karyawan_kpi as $key_dahboard_karyawan): ?>
                                  
                                <?php

                                    
                                    
                                    $dateTanggal = $key_dahboard_karyawan->tanggal;
                                    $dateTanggalPerbanding = $deleteJabatanGaji->tanggal;
                                


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
                                    $akhir       = date('Y-m-d') ; 
                                    
                                    
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
                                            <td data-label="Name" >
                                                <div class="d-flex py-1 align-items-center">
                                                    <?php if (isset($key_dahboard_karyawan->foto)): ?>
                                                        <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$key_dahboard_karyawan->foto}})"></span>
                                                    <?php else: ?>
                                                        <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/profil.png)"></span>
                                                    <?php endif ?>
                                                    <div class="flex-fill">
                                                            <?php if (isset($key_dahboard_karyawan->nama_lengkap)): ?>
                                                                <div class="font-weight-medium">{{$key_dahboard_karyawan->nama_lengkap}}</div>
                                                                <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan->nip}}</a></div>
                                                            <?php else: ?>
                                                                <div class="font-weight-medium">Tidak Ada</div>
                                                                <div class="text-muted"><a href="#" class="text-reset">IDE-Tidak Ada</a></div>
                                                            <?php endif ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-label="Title" >
                                                        <?php if ($key_dahboard_karyawan->nama_jabatan): ?>
                                                            <div class="text-muted">    
                                                            <div class="text-muted">{{$tampil_jabatan}}
                                                        <?php else: ?>
                                                            <div class="text-muted">    
                                                                <span class="badge bg-warning me-1">Tidak Ada Jabatan</span>
                                                            </div>
                                                        <?php endif ?>
                                                    </div>
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
                                            <td>{{$key_dahboard_karyawan->kehadiran}}
                                                
                                            </td>
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

                                            <td data-label="Title" >
                                                    <?php if ($dateTanggal == $dateTanggalPerbanding): ?>
                                                        <span class="badge bg-success ms-auto icon-login " class="">{{$dateTanggal}}</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-danger ms-auto icon-login " class="">{{$dateTanggal}}</span>
                                                    <?php endif ?>
                                                <!-- <span class="badge bg-success ms-auto icon-login " class="">{{$key_dahboard_karyawan->tanggal}}</span> -->
                                                                
                                                
                                            </td>
                                            <!-- <td data-label="Title" >
                                                <div>TH_PWX01</div>
                                                
                                            </td> -->
                                            
                                            
                                        </tr>
                                    <?php else: ?>
                                    <?php endif ?>
                              <?php endforeach ?>
                          <?php else: ?>
                                  <tr>
                                      <td colspan='11' class="center-"> Tidak Ada Data Laporan Gaji </td>
                                  </tr>
                          <?php endif ?>
                          

                      </tbody>
              </table>
        </div>
      </div>
    </div>
    
  </div>
</div>
</div>


