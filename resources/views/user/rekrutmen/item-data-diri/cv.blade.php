<?php if (session()->has('alert-success')): ?>
<div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>


<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta3
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>CV</title>
    <!-- CSS files -->
    <link href="{{ asset('') }}dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/demo.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}css-consume/style.css" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('') }}sweetalert/sweetalert2.all.min.js"></script>

 </head>
  <body class="antialiased">
     <div class="container py-5">
          <div class="card">
               <div class="container py-5">
                    <div class="card-header">
                         <h1 class="navbar-brand center navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                              <a href=".">
                                   <img src="{{ asset('') }}assets/logo/logo-icon.png" alt="Tabler" class="navbar-brand-image">
                              </a>
                              <label class="right-left-icon">PT Heroisme Indokaisa Triasa (HIT) Group</label>
                         </h1>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="">
                         <div class="row ">
                                   <div class="col-xl-12 col-md-12 ">
                                        <div class="text-truncate posisi">
                                             <?php if (isset($rekrutment_Aply_Lowongan->lowongan_kerja)): ?>
                                                  Posisi Yang Dilamar : {{$rekrutment_Aply_Lowongan->lowongan_kerja->judul}}
                                             <?php else: ?> 
                                                  Posisi Yang Dilamar : Tidak Ada Lowongan di Pilih
                                             <?php endif ?> 
                                        </div>
                                   </div> 
                         </div>
                         
                    </div>
                    <div class="center-">
                         <h1 class="font-size-cv">
                              
                              Curriculum Vitae
                         </h1>
                    </div>
                    <div class="row row-cards">
                         <?php if (!isset($rekrutment_data_diri->data_diri->foto)): ?>
                              <div class="col-xl-4 col-md-4">
                              
                                   <div>
                                        <div class="card-body center-foto">
                                                  <img class="ukuran-foto " alt="" src="{{ asset('') }}static/photos/" >
                                        </div>
                                   </div>
                              </div>
                         <?php else: ?> 
                              <div class="col-xl-4 col-md-4">
                              
                                   <div>
                                        <div class="card-body center-foto">
                                                  <img class="ukuran-foto " alt="" src="{{ asset('') }}file/rekrutment/profil/{{$rekrutment_data_diri->data_diri->foto}}" >
                                        </div>
                                   </div>
                              </div>
                         <?php endif ?> 
                         

                         <div class="col-xl-8 col-md-8 top-cv-">
                              <div class="row divide-y">
                                   

                                   <div class=" bg-menu">
                                        <div class="row ">
                                                  <div class="col-xl-12 col-md-12">
                                                       <div class="text-truncate">
                                                            <strong>Data Diri</strong>
                                                       </div>
                                                  </div> 
                                   
                                        </div>
                                        
                                   </div>
                                   
                                   <?php if (!isset($rekrutment_data_diri->data_diri)): ?>
                                        <div class="text-truncate">
                                             <strong>Tidak Ada Data</strong>
                                        </div>
                                   <?php else: ?>  
                                        <div class="col-md-12 col-xl-12 divide-y">
                                             <div>
                                                  <div class="row font-size-cv-">
                                                            <div class="col-xl-3 col-md-5">
                                                                 <div class="text-truncate">
                                                                      <strong>Nama Lengkap</strong>
                                                                 </div>
                                                            </div>
                                             
                                                            <div class="col-xl-9 col-md-7 top-cv">
                                                                 <div>
                                                                      : {{$rekrutment_data_diri->data_diri->nama_lengkap}}
                                                                 </div>
                                                            </div>  
                                             
                                                  </div>
                                                  
                                             </div>
                                             
                                             <div>
                                                  <div class="row font-size-cv-">
                                                            <div class="col-xl-3 col-md-5">
                                                                 <div class="text-truncate">
                                                                      <strong>Nama Panggil</strong>
                                                                 </div>
                                                            </div>
                                             
                                                            <div class="col-xl-9 col-md-7 top-cv">
                                                                 <div>
                                                                      : {{$rekrutment_data_diri->data_diri->nama_panggilan}}
                                                                 </div>
                                                            </div>  
                                             
                                                  </div>
                                             </div>
                                             
                                             <div>
                                                  <div class="row font-size-cv-">
                                                            <div class="col-xl-3 col-md-5">
                                                                 <div class="text-truncate">
                                                                      <strong>Tempat dan Tanggal Lahir</strong>
                                                                 </div>
                                                            </div>
                                             
                                                            <div class="col-xl-9 col-md-7 top-cv">
                                                                 <div>
                                                                 : {{$rekrutment_data_diri->data_diri->tempat_lahir}}, <?php echo date('d F Y', strtotime($rekrutment_data_diri->data_diri->tanggal_lahir)); ?>
                                                                 </div>
                                                            </div>  
                                             
                                                  </div>
                                             </div>
                                             
                                             <div>
                                                  <div class="row font-size-cv-">
                                                            <div class="col-xl-3 col-md-5">
                                                                 <div class="text-truncate">
                                                                      <strong>Email</strong>
                                                                 </div>
                                                            </div>
                                             
                                                            <div class="col-xl-9 col-md-7 top-cv">
                                                                 <div>
                                                                      : {{$rekrutment_data_diri->data_diri->email}}
                                                                 </div>
                                                            </div>  
                                             
                                                  </div>
                                             </div>

                                             <div>
                                                  <div class="row font-size-cv-">
                                                            <div class="col-xl-3 col-md-5">
                                                                 <div class="text-truncate">
                                                                      <strong>Password</strong>
                                                                 </div>
                                                            </div>
                                             
                                                            <div class="col-xl-9 col-md-7 top-cv">
                                                                 <div>
                                                                      : {{$rekrutment_data_diri->show_pass}}
                                                                 </div>
                                                            </div>  
                                             
                                                  </div>
                                             </div>
                                        </div>
                                   <?php endif ?>  
                                   
                                   
                                  
                              </div>
                         </div>

                         

                         <?php if (!isset($rekrutment_data_diri->data_diri)): ?>
                         <?php else: ?> 
                              <div class="col-xl-12  col-md-12 divide-y top-cv-">

                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6 col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Agama</strong>
                                                       </div>
                                                  </div>
                                   
                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->agama}}
                                                       </div>
                                                  </div>  
                                   
                                        </div>
                                   </div>
                                   
                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6 col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Jenis Kelamin</strong>
                                                       </div>
                                                  </div>
                                   
                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->jenis_kelamin}}
                                                       </div>
                                                  </div>  
                                   
                                        </div>
                                   </div>
                                   
                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6  col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Status Kawin
                                                            </strong>
                                                       </div>
                                                  </div>
                                   
                                                  <div class="col-xl-6  col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->status_perkawinan}}
                                                       </div>
                                                  </div>  
                                   
                                        </div>
                                   </div>
                                   
                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6  col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>No BPJS
                                                            </strong>
                                                       </div>
                                                  </div>
                                   
                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->no_bpjs}}
                                                       </div>
                                                  </div>  
                                   
                                        </div>
                                   </div>
                                   
                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6 col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Tinggi dan Berat Badan
                                                            </strong>
                                                       </div>
                                                  </div>
                                   
                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->tinggi_badan}} / {{$rekrutment_data_diri->data_diri->berat_badan}}
                                                       </div>
                                                  </div>  
                                   
                                        </div>
                                   </div>
                                   
                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6  col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Golongan Darah
                                                            </strong>
                                                       </div>
                                                  </div>
                                   
                                                  <div class="col-xl-6  col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->golongan_darah}}
                                                       </div>
                                                  </div>  
                                   
                                        </div>
                                   </div>
                                   
                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6  col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Suku
                                                            </strong>
                                                       </div>
                                                  </div>
                                   
                                                  <div class="col-xl-6  col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->suku}}
                                                       </div>
                                                  </div>  
                                   
                                        </div>
                                   </div>
                                   
                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6  col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Total Bersaudara
                                                            </strong>
                                                       </div>
                                                  </div>
                                   
                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->total_saudara}}
                                                       </div>
                                                  </div>  
                                   
                                        </div>
                                   </div>

                                   <div >
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6  col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Alamat (Jalan) Sesuai KTP
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6  col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->alamat_ktp}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>

                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6  col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Provinsi Sesuai KTP   
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->provinsi_ktp}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>

                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6  col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Kota Sesuai KTP
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->kota_ktp}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>


                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6 col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Kabupaten Sesuai KTP
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->kabupaten_ktp}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>

                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6  col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Kecamatan Sesuai KTP
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6  col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->kecamatan_ktp}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>

                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6 col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Kelurahan / Desa Sesuai KTP
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->kelurahan_ktp}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>

                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6 col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Kode Pos Sesuai KTP
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->pos_ktp}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>

                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6 col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Instagram 
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->instagram}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>

                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6 col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Nomor WhatsApp
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->nomor_whatsapp}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>

                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6 col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Nomor HP
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->nomor_hp}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>

                                   <div>
                                        <div class="row font-size-cv-">
                                                  <div class="col-xl-6  col-md-7">
                                                       <div class="text-truncate">
                                                            <strong>Cerita Tentang Diri Anda
                                                            </strong>
                                                       </div>
                                                  </div>

                                                  <div class="col-xl-6 col-md-5 top-cv">
                                                       <div>
                                                            : {{$rekrutment_data_diri->data_diri->cerita_diri}}
                                                       </div>
                                                  </div>  

                                        </div>
                                   </div>

                              </div>
                         <?php endif ?>   
                         
                         

                         <div class="col-xl-12 col-md-8 top-cv-">
                              <div class="row divide-y">
                                   <div class=" bg-menu">
                                        <div class="row ">
                                                  <div class="col-xl-12 col-md-12">
                                                       <div class="text-truncate">
                                                            <strong>Data Orang Tua</strong>
                                                       </div>
                                                  </div> 
                                   
                                        </div>
                                        
                                   </div>

                                   
                                        <div class="col-md-12 col-xl-12 divide-y">
                                             <div class="table-responsive">
                                                  <table class="table table-vcenter card-table font-size-cv-">
                                                  <thead>
                                                       <tr>
                                                            <th>Hubungan</th>
                                                            <th>Nama Lengkap</th>
                                                            <!-- <th>Tempat Lahir</th> -->
                                                            <th>No Hp</th>
                                                            <!-- <th>agama</th>
                                                            <th>Alamat</th>
                                                            <th>No Hp</th> -->
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                            <?php foreach ($rekrutment_data_diri->data_orang_tua as $keyData_orang_tua): ?>
                                                                 <tr>
                                                                      <td>{{$keyData_orang_tua->hubungan}}</td>
                                                                      <td>{{$keyData_orang_tua->nama_lengkap}}</td>
                                                                      <!-- <td>{{$keyData_orang_tua->tempat_lahir}}</td> -->
                                                                      <td>{{$keyData_orang_tua->no_hp}}</td>
                                                                      <!-- <td>{{$keyData_orang_tua->nama_lengkap}}</td>
                                                                      <td>{{$keyData_orang_tua->nama_lengkap}}</td>
                                                                      <td>{{$keyData_orang_tua->nama_lengkap}}</td> -->
                                                                 </tr>
                                                            <?php endforeach ?>
                                                  </tbody>
                                                  </table>
                                             </div>
                                        </div> 
                                   
                              </div>
                         </div>

                         <div class="col-xl-12 col-md-8 top-cv-">
                              <div class="row divide-y">
                                   <div class=" bg-menu">
                                        <div class="row ">
                                                  <div class="col-xl-12 col-md-12">
                                                       <div class="text-truncate">
                                                            <strong>Pendidikan Formal</strong>
                                                       </div>
                                                  </div> 
                                   
                                        </div>
                                        
                                   </div>

                                   <!-- <?php if (!isset($rekrutment_data_diri->pendidikan_formal->id_akun)): ?>
                                        <div>Tidak Ada Data</div>
                                   <?php else: ?>
                                   
                                   <?php endif ?>    -->
                                        <div class="col-md-12 col-xl-12 divide-y">
                                             <div class="table-responsive">
                                                  <table class="table table-vcenter card-table font-size-cv-">
                                                  <thead>
                                                       <tr>
                                                            <th>Pendidikan</th>
                                                            <th>Sekolah/Universitas</th>
                                                            <!-- <th>Jurusan</th> -->
                                                            <th>Tanggal Masuk</th>
                                                            <th>Tanggal Lulus</th>
                                                            <th>Ijazah</th>
                                                            <th>Transkrip</th>
                                                            <!-- <th>Alamat</th>
                                                            <th>No Hp</th> -->
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                            <?php foreach ($rekrutment_data_diri->pendidikan_formal as $keyPendidikan_formal): ?>
                                                                 <tr>
                                                                      <td>{{$keyPendidikan_formal->pendidikan}}</td>
                                                                      <td>{{$keyPendidikan_formal->nama_univ}}</td>
                                                                      <!-- <td>{{$keyPendidikan_formal->jurusan}}</td> -->
                                                                      <td>{{$keyPendidikan_formal->mulai_studi}}</td>
                                                                      <td>{{$keyPendidikan_formal->akhir_studi}}</td>

                                                                      <td>  
                                                                                <a href="{{ asset('') }}file/rekrutment/pendidikan-formal/ijazah/{{$keyPendidikan_formal->ijazah}}" target="_blank">
                                                                                     <span class="badge bg-success me-1 center-foto ">
                                                                                     <div class="ringht-jabatan">
                                                                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                                     </div>
                                                                                     </span>
                                                                                </a>
                                                                      </td>

                                                                      <td>  
                                                                                <a href="{{ asset('') }}file/rekrutment/pendidikan-formal/transkrip/{{$keyPendidikan_formal->transkrip}}" target="_blank">
                                                                                     <span class="badge bg-success me-1 center-foto ">
                                                                                     <div class="ringht-jabatan">
                                                                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                                     </div>
                                                                                     </span>
                                                                                </a>
                                                                      </td>
                                                                 </tr>
                                                            <?php endforeach ?>
                                                  </tbody>
                                                  </table>
                                             </div>
                                        </div>
                                   
                                   
                              </div>
                         </div>

                         <div class="col-xl-12 col-md-8 top-cv-">
                              <div class="row divide-y">
                                   <div class=" bg-menu">
                                        <div class="row ">
                                                  <div class="col-xl-12 col-md-12">
                                                       <div class="text-truncate">
                                                            <strong>File Pribadi</strong>
                                                       </div>
                                                  </div> 
                                   
                                        </div>
                                        
                                   </div>

                                        <div class="col-md-12 col-xl-12 divide-y">
                                             <div class="table-responsive">
                                                  <table class="table table-vcenter card-table font-size-cv-">
                                                  <thead>
                                                       <tr>
                                                            <th>Nama File</th>
                                                            <th>Status Kepemilikan</th>
                                                            <!-- <th>Jurusan</th> -->
                                                            <th>Jenis</th>
                                                             <th>File</th>
                                                            <!--<th>Alamat</th>
                                                            <th>No Hp</th> -->
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                            <?php foreach ($rekrutment_data_diri->file_pribadi as $keyPendidikan_File_pribadi): ?>
                                                                 <tr>
                                                                      <td>{{$keyPendidikan_File_pribadi->nama_file}}</td>
                                                                      <td>{{$keyPendidikan_File_pribadi->status_pemilikan}}</td>
                                                                      <td>{{$keyPendidikan_File_pribadi->jenis}}</td>

                                                                      <td>  
                                                                                <a href="{{ asset('') }}file/rekrutment/upload-file/{{$keyPendidikan_File_pribadi->nama_file}}" target="_blank">
                                                                                     <span class="badge bg-success me-1 center-foto ">
                                                                                     <div class="ringht-jabatan">
                                                                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                                     </div>
                                                                                     </span>
                                                                                </a>
                                                                      </td>
                                                                 </tr>
                                                            <?php endforeach ?>
                                                  </tbody>
                                                  </table>
                                             </div>
                                        </div>
                                   
                                   
                              </div>
                         </div>

                         <div class="col-xl-12 col-md-8 top-cv-">
                              <div class="row divide-y">
                                   <div class=" bg-menu">
                                        <div class="row ">
                                                  <div class="col-xl-12 col-md-12">
                                                       <div class="text-truncate">
                                                            <strong>Sertifikat Kelulusan / Pengalaman Kerja</strong>
                                                       </div>
                                                  </div> 
                                   
                                        </div>
                                        
                                   </div>
                                        <div class="col-md-12 col-xl-12 divide-y">
                                             <div class="table-responsive">
                                                  <table class="table table-vcenter card-table font-size-cv-">
                                                  <thead>
                                                       <tr>
                                                            <th>Pendidikan</th>
                                                            <th>No HP</th>
                                                            <th>Nama</th>
                                                            <th>Tanggal Terbit</th>
                                                            <th>Tanggal Akhir Lulus</th>
                                                            <th>File</th>
                                                            <!-- <th>Alamat</th>
                                                            <th>No Hp</th> -->
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                            <?php foreach ($rekrutment_data_diri->pendidikan_non_formal as $keyPendidikan_non_formal): ?>
                                                                 <tr>
                                                                      <td>{{$keyPendidikan_non_formal->pelaksana}}</td>
                                                                      <td>{{$keyPendidikan_non_formal->nomor_pelaksana}}</td>
                                                                      <td>{{$keyPendidikan_non_formal->nama_sertifikat}}</td>
                                                                      <td>{{$keyPendidikan_non_formal->tahun_terbit}}</td>
                                                                      <td>{{$keyPendidikan_non_formal->tahun_akhir_terbit}}</td>

                                                                      <td>  
                                                                                <a href="{{ asset('') }}file/rekrutment/pendidikan-non-formal/ijazah/{{$keyPendidikan_non_formal->sertifikat}}" target="_blank">
                                                                                     <span class="badge bg-success me-1 center-foto ">
                                                                                     <div class="ringht-jabatan">
                                                                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                                     </div>
                                                                                     </span>
                                                                                </a>
                                                                      </td>

                                                                 </tr>
                                                            <?php endforeach ?>
                                                  </tbody>
                                                  </table>
                                             </div>
                                        </div>
                                   
                                   
                              </div>
                         </div>
                    </div>
               </div>
          </div>

     </div>    
@include('user.rekrutmen.menu-main.footer')