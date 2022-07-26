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

    <?php if (!isset($dahboard_akun_cookie->data_perusahaan)): ?>
        <?php if (!isset($dahboard_akun_cookie->perusahaan->data_perusahaan)): ?>
          <link rel="icon" href="{{ asset('') }}file/profil-dashboard/profil.png" type="image/x-icon">
        <?php else: ?>
          <link rel="icon" href="{{ asset('') }}file/profil-dashboard/{{$dahboard_akun_cookie->perusahaan->data_perusahaan->foto}}" type="image/x-icon">
        <?php endif ?>

    <?php else: ?>
      <link rel="icon" href="{{ asset('') }}file/profil-dashboard/{{$dahboard_akun_cookie->data_perusahaan->foto}}" type="image/x-icon">
    <?php endif ?>
    
    <title>Dashboard.</title>
    <!-- CSS files -->
    <link href="{{ asset('') }}dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/demo.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}css-consume/style.css" rel="stylesheet"/>

    
    
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet"/> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('') }}sweetalert/sweetalert2.all.min.js"></script>
    <script src="{{ asset('') }}ckeditor/ckeditor.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

  
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script>
  $('#myModal').modal('show');
</script>

  </head>
  <body class="antialiased">
    <div class="wrapper">
      <header class="navbar navbar-expand-md navbar-light d-print-none font-size-info-alert">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="{{route('dashboard_panel')}}">

              <!-- <?php if (!isset($dahboard_akun_cookie->perusahaan)): ?>
                  IT Admin Super
              <?php else: ?>
                  Mitra {{$dahboard_akun_cookie->perusahaan->nama}}
              <?php endif ?> -->

              <?php if ($dahboard_akun_cookie->akses->akses == 'IT Support'): ?>
                Staft IT {{$dahboard_akun_cookie->perusahaan->nama}}
              <?php elseif ($dahboard_akun_cookie->akses->akses == 'IT Admin'): ?>
                  IT Admin Super
              <?php elseif ($dahboard_akun_cookie->akses->akses == 'Admin'): ?>
                HRD {{$dahboard_akun_cookie->perusahaan->nama}}
              <?php elseif ($dahboard_akun_cookie->akses->akses == 'Admin Super'): ?>
                PT {{$dahboard_akun_cookie->nama}}
              <?php elseif ($dahboard_akun_cookie->akses->akses == 'Karyawan'): ?>
                Karyawan {{$dahboard_akun_cookie->perusahaan->nama}}
              <?php else: ?>
              <?php endif ?>
              
              <!-- <img src="{{ asset('') }}static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">-->
            </a> 
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <!-- <div class="nav-item d-none d-md-flex me-3">
              <div class="btn-list">
                <a href="https://github.com/tabler/tabler" class="btn btn-outline-white" target="_blank" rel="noreferrer">
                 <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                  Source code
                </a>
                <a href="https://github.com/sponsors/codecalm" class="btn btn-outline-white" target="_blank" rel="noreferrer">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                  Sponsor
                </a>
              </div>
            </div> -->
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <!-- <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                <span class="badge bg-red"></span>
              </a> -->
              
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                  </div>
                </div>
              </div>
            </div>
            <div class="nav-item dropdown ">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0  dropdown-toggle" data-bs-toggle="dropdown" aria-label="Open user menu">
                  <?php if (!isset($dahboard_akun_cookie->data_diri->foto)): ?>
                        <?php if (!isset($dahboard_akun_cookie->data_perusahaan->foto)): ?>
                          <span class="avatar avatar-sm" style="background-image: url({{ asset('') }}file/profil-dashboard/profil.png)"></span>
                        <?php else: ?> 
                          <span class="avatar avatar-sm" style="background-image: url({{ asset('') }}file/profil-dashboard/{{$dahboard_akun_cookie->data_perusahaan->foto}})"></span>
                        <?php endif ?> 
                  <?php else: ?> 

                    <span class="avatar avatar-sm" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$dahboard_akun_cookie->data_diri->foto}})"></span>
                         <!-- <span class="avatar avatar-sm" style="background-image: url({{ asset('') }}file/profil-dashboard/profil.png)"></span> -->
                  <?php endif ?> 
                
                <div class="d-none d-xl-block ps-2 ">
                  <div>
                      
                      <?php if ($dahboard_akun_cookie->akses->akses != "Karyawan"): ?>
                              <?php if ($dahboard_akun_cookie->akses->akses == 'IT Support'): ?>
                                  IT Admin Support
                              <?php elseif ($dahboard_akun_cookie->akses->akses == 'IT Admin'): ?>
                                  IT Admin Super
                              <?php elseif ($dahboard_akun_cookie->akses->akses == 'Admin'): ?>
                                Admin / HR
                              <?php elseif ($dahboard_akun_cookie->akses->akses == 'Admin Super'): ?>
                                Admin Super
                              <?php else: ?>
                              
                              <?php endif ?>
                          
                      <?php else: ?>
                            {{$dahboard_akun_cookie->data_diri->nama_lengkap}}
                      <?php endif ?>
                      
                  </div>
                  <div class="mt-1 small text-muted ">
                      <?php if ($dahboard_akun_cookie->akses->akses != "Karyawan"): ?>
                          <?php if ($dahboard_akun_cookie->akses->akses == 'IT Support'): ?>
                            {{$dahboard_akun_cookie->nik}}
                          <?php elseif ($dahboard_akun_cookie->akses->akses == 'IT Admin'): ?>
                              IT Admin Super
                          <?php elseif ($dahboard_akun_cookie->akses->akses == 'Admin'): ?>
                            {{$dahboard_akun_cookie->nik}}
                          <?php elseif ($dahboard_akun_cookie->akses->akses == 'Admin Super'): ?>
                            Akun Perusahaan
                          <?php else: ?>
                              
                          <?php endif ?>
                          
                      <?php else: ?>
                        
                          {{$dahboard_akun_cookie->nik}}
                      <?php endif ?>
                        
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#detail_profil">Profile</a>
             
                  <?php if ($dahboard_akun_cookie->akses->akses != "Admin Super"): ?>
                    
                    <a href="{{ asset('') }}dashboard-panel/?halaman=data-orang-tua" class="dropdown-item">Orang Tua</a>
                    <a href="{{ asset('') }}dashboard-panel/?halaman=data-pendidikan-formal" class="dropdown-item">Pendidikan Formal</a>
                    <a href="{{ asset('') }}dashboard-panel/?halaman=data-pendidikan-non-formal" class="dropdown-item">Pendidikan Non Formal</a>
                    <a href="{{ asset('') }}dashboard-panel/?halaman=data-file-data-diri" class="dropdown-item">File Data Diri</a>
                    
                    <div class="dropdown-divider"></div>
                    
                    <?php endif ?>
                    <a href="{{ asset('') }}dashboard-panel/?halaman=reset-password" class="dropdown-item">Ubah Password</a>
                    <a href="{{ asset('login-logout') }}" class="dropdown-item alert-logout">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </header>

      
<!-- ======================== Detail Profile ============================== -->
<?php if ($dahboard_akun_cookie->akses->akses == 'Admin Super'): ?>     
    <?php if (!isset($dahboard_akun_cookie->data_perusahaan)): ?>
          <div class="modal modal-blur fade" id="update_data_perusahaan" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Update Data Perusahaan</h5>
                          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                      </div>
                      <form action="{{route('create-data-perusahaan')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                              <div class="modal-body">
                                  <input type="hidden" class="form-control" id="data_id" name="id_akun_perusahaan" placeholder="Your report name" value="{{$dahboard_akun_cookie->id}}">
                                      <div class="card-body  text-center">
                                          {{-- <span class="avatar avatar-xl mb-3 avatar-rounded" id="gambar_nodin" style="background-image: url(./static/avatars/000m.jpg)"></span> --}}
                                          <img src="{{ asset('') }}file/profil-dashboard/profil.png" id="gambar_nodin_perusahaan" class="avatar avatar-xl mb-3 avatar-rounded" style="width: 150px; height: 150px;" />
                                      </div>
                                      <div class="mb-3">
                                          <div class="row">
                                                  <div class="col-xl-12 col-md-12 col-sm-12">
                                                  <div class="row">
                                                      <div class="col-xl-12 col-md-12 col-sm-12">
                                                          <label class="form-label required">Logo Perusahaan</label>
                                                          <input type="file" class="form-control" id="preview_gambar_perusahaan" name="foto_profil" required>
                                                      </div>
                                                      <div class="col-xl-12 col-md-12 col-sm-12">
                                                      
                                                          <span class="form-check-label font-color-small font-size-info" >Harus bertype JPG / PNG dan gambar tidak boleh lebih besar dari 1MB</span>
                                                      
                                                      </div>
                                                  </div>
                                                  </div>
                                          </div>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label required" >Nama Perusahaan</label>
                                          <input type="text" class="form-control nama" name="nama_perusahaan" id="data_id"  placeholder="Your report Akun Dingtalk" value="{{$dahboard_akun_cookie->nama}}">
                                      </div>

                                      

                                      <div class="mb-3">
                                          <label class="form-label required" >Nama Pemilik Perusahaan</label>
                                          <input type="text" class="form-control nama" name="nama_pemilik" id="data_id"  placeholder="Your report Nomor Rekening" required>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label required">Alamat (Jalan) Perusahaan</label>
                                          <textarea class="form-control" name="alamat" placeholder="Alamat (Jalan) Penempatan" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label required" >Provinsi Perusahaan</label>
                                          <input type="text" class="form-control nama" name="provinsi" id="data_id"  placeholder="Your report Provinsi Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label required" >Kota Perusahaan</label>
                                          <input type="text" class="form-control nama" name="kota" id="data_id"  placeholder="Your report Kota Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label required" >Kabupaten Perusahaan</label>
                                          <input type="text" class="form-control nama" name="kabupaten" id="data_id"  placeholder="Your report Kabupaten Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label required" >Kelurahan Perusahaan</label>
                                          <input type="text" class="form-control nama" name="kelurahan" id="data_id"  placeholder="Your report Kelurahan Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label required" >Kecamatan Perusahaan</label>
                                          <input type="text" class="form-control nama" name="kecamatan" id="data_id"  placeholder="Your report kecamatan Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                      </div>
                                  
                                  
                                  
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary ms-auto">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                      Simpan
                                      
                                  </button>
                              </div>
                      </form>
                  </div>
              </div>
          </div>
    <?php else: ?>
      <div class="modal modal-blur fade" id="detail_profil" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Profile Perusahaan</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                
                      <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                  </div>
                  <form action="{{route('create-data-perusahaan')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                          <div class="modal-body">
                              <input type="hidden" class="form-control" id="data_id" name="id_perusahaan" placeholder="Your report name" value="{{$dahboard_akun_cookie->data_perusahaan->id}}">
                              <input type="hidden" class="form-control" id="data_id" name="gambar" placeholder="Your report name" value="{{$dahboard_akun_cookie->data_perusahaan->foto}}">
                              <input type="hidden" class="form-control" id="data_id" name="id" placeholder="Your report name" value="{{$dahboard_akun_cookie->id}}">
                                  <div class="card-body  text-center">
                                      {{-- <span class="avatar avatar-xl mb-3 avatar-rounded" id="gambar_nodin" style="background-image: url(./static/avatars/000m.jpg)"></span> --}}
                                      <img src="{{ asset('') }}file/profil-dashboard/{{$dahboard_akun_cookie->data_perusahaan->foto}}" id="gambar_nodin" class="avatar avatar-xl mb-3 avatar-rounded" style="width: 150px; height: 150px;" />
                                  </div>
                                  <div class="mb-3">
                                      <div class="row">
                                              <div class="col-xl-12 col-md-12 col-sm-12">
                                              <div class="row">
                                                  <div class="col-xl-12 col-md-12 col-sm-12">
                                                      <label class="form-label">Logo Perusahaann </label>
                                                      <input type="file" class="form-control" id="preview_gambar" name="foto_profil">
                                                  </div>
                                                  <div class="col-xl-12 col-md-12 col-sm-12">
                                                  
                                                      <span class="form-check-label font-color-small font-size-info" >Harus bertype JPG / PNG dan gambar tidak boleh lebih besar dari 1MB</span>
                                                  
                                                  </div>
                                              </div>
                                              </div>
                                      </div>
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label required" >Nama Perusahaan</label>
                                      <input type="text" class="form-control nama" name="nama_perusahaan" id="data_id"  placeholder="Your report Akun Dingtalk" value="{{$dahboard_akun_cookie->nama}}">
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label required" >No NPWP / NIK KTP</label>
                                      <input type="text" class="form-control nama" name="no_npwp" id="data_id"  placeholder="Your report Nomor Rekening" value="{{$dahboard_akun_cookie->nik}}" required>
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label required" >Nomor Telepon/HP</label>
                                      <input type="text" class="form-control nama" name="no_telepon" id="data_id"  placeholder="Your report Nomor Rekening" value="{{$dahboard_akun_cookie->no_hp}}" required>
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label required" >Email</label>
                                      <input type="text" class="form-control nama" name="email" id="data_id"  placeholder="Your report Nomor Rekening" value="{{$dahboard_akun_cookie->email}}" required>
                                  </div>

                                  <hr>

                                  <div class="mb-3">
                                      <label class="form-label required" >Nama Pemilik Perusahaan</label>
                                      <input type="text" class="form-control nama" name="nama_pemilik" id="data_id"  placeholder="Your report Nomor Rekening" value="{{$dahboard_akun_cookie->data_perusahaan->nama_pemilik}}" required>
                                  </div>

                                  

                                  <div class="mb-3">
                                      <label class="form-label required">Alamat (Jalan) Perusahaan</label>
                                      <textarea class="form-control" name="alamat" placeholder="Alamat (Jalan) Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>{{$dahboard_akun_cookie->data_perusahaan->alamat}}</textarea>
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label required" >Provinsi Perusahaan</label>
                                      <input type="text" class="form-control nama" value="{{$dahboard_akun_cookie->data_perusahaan->provinsi}}" name="provinsi" id="data_id"  placeholder="Your report Provinsi Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label required" >Kota Perusahaan</label>
                                      <input type="text" class="form-control nama" value="{{$dahboard_akun_cookie->data_perusahaan->kota}}" name="kota" id="data_id"  placeholder="Your report Kota Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label required" >Kabupaten Perusahaan</label>
                                      <input type="text" class="form-control nama" value="{{$dahboard_akun_cookie->data_perusahaan->kabupaten}}" name="kabupaten" id="data_id"  placeholder="Your report Kabupaten Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label required" >Kelurahan Perusahaan</label>
                                      <input type="text" class="form-control nama" value="{{$dahboard_akun_cookie->data_perusahaan->kelurahan}}" name="kelurahan" id="data_id"  placeholder="Your report Kelurahan Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label required" >Kecamatan Perusahaan</label>
                                      <input type="text" class="form-control nama" value="{{$dahboard_akun_cookie->data_perusahaan->kecamatan}}" name="kecamatan" id="data_id"  placeholder="Your report kecamatan Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                  </div>
                              
                              
                              
                          </div>
                          <div class="modal-footer">
                              <!-- <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                              Cancel
                              </a> -->
                              <button type="submit" class="btn btn-primary ms-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                    Simpan
                              </button>
                          </div>
                  </form>
              </div>
          </div>
      </div>
    <?php endif ?>  
<?php else: ?>
  
    <?php if (!isset($dahboard_akun_cookie->data_diri)): ?> 
          <?php if ($dahboard_akun_cookie->akses->akses == 'IT Admin'): ?>
          <?php else: ?>
              <div class="modal modal-blur fade" id="update_data_saya" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title">Profile Saya</h5>
                              <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        
                              <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                          </div>
                          <form action="{{route('create-data-karyawan')}}" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  <div class="modal-body">
                                        <div class="card-body  text-center">
                                              {{-- <span class="avatar avatar-xl mb-3 avatar-rounded" id="gambar_nodin" style="background-image: url(./static/avatars/000m.jpg)"></span> --}}
                                              <?php if (!isset($dahboard_akun_cookie->data_diri->foto)): ?>
                                                  <!-- <link rel="icon" href="{{ asset('') }}file/profil-dashboard/profil.png" type="image/x-icon"> -->
                                                      <img src="{{ asset('') }}file/profil-dashboard/profil.png" id="gambar_nodin" class="avatar avatar-xl mb-3 avatar-rounded" style="width: 150px; height: 150px;" />
                                              <?php else: ?>
                                                      <img src="{{ asset('') }}file/rekrutment/profil/{{$dahboard_akun_cookie->data_diri->foto}}" id="gambar_nodin" class="avatar avatar-xl mb-3 avatar-rounded" style="width: 150px; height: 150px;" />
                                              <?php endif ?>
                                          </div>
                                          <div class="mb-3">
                                              <div class="row">
                                                      <div class="col-xl-12 col-md-12 col-sm-12">
                                                      <div class="row">
                                                          <div class="col-xl-12 col-md-12 col-sm-12">
                                                              <label class="form-label">Input Foto Anda</label>
                                                              <input type="file" class="form-control" id="preview_gambar" name="foto_profil" required>
                                                          </div>
                                                          <div class="col-xl-12 col-md-12 col-sm-12">
                                                          
                                                              <span class="form-check-label font-color-small font-size-info" >Harus bertype JPG / PNG dan gambar tidak boleh lebih besar dari 1MB</span>
                                                          
                                                          </div>
                                                      </div>
                                                      </div>
                                              </div>
                                          </div>

                                        
                                          






                                          <div class="mb-3">
                                            <label class="form-label required">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." onkeyup="this.value = this.value.toUpperCase()" required>
                                            <span id="name_error" class="text-danger font-size-info-alert"></span>
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label required">Nama Panggilan</label>
                                            <input type="text" class="form-control" id="nama_panggil" name="nama_panggil" placeholder="Nama Panggilan..." onkeyup="this.value = this.value.toUpperCase()"  required>
                                            <span id="panggil_error" class="text-danger font-size-info-alert"></span>
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label required">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir"  name="tempat_lahir" placeholder="Tempat Lahir..." onkeyup="this.value = this.value.toUpperCase()" required>
                                            <span id="tempat_error" class="text-danger font-size-info-alert"></span>
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label required">Tanggal Lahir</label>
                                            <input type="date" class="form-control"  id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir..." required>
                                            <span id="tanggal_error" class="text-danger font-size-info-alert"></span>
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label required">Nik</label>
                                            <input type="text" class="form-control"  id="nik" name="nik" placeholder="NIK..." value="" required>
                                            <span id="nik_error" class="text-danger font-size-info-alert"></span>
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label required">Email Aktif</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Aktif..." value="{{$dahboard_akun_cookie->email}}" readonly>
                                            <span id="email_error" class="text-danger font-size-info-alert"></span>
                                          </div>

                                          <div class="mb-3">
                                          <label class="form-label required">Agama</label>
                                          <div >
                                            <select class="form-select" name="agama">
                                              <option  selected hidden></option>
                                              <option value="ISLAM">              ISLAM</option>
                                              <option value="KRISTEN PROTESTAN">  KRISTEN PROTESTAN</option>
                                              <option value="KRISTEN KATHOLIK">   KRISTEN KATHOLIK</option>
                                              <option value="HINDU">              HINDU</option>
                                              <option value="BUDHA">              BUDHA</option>
                                              <option value="KONG HU CHU">        KONG HU CHU</option>
                                            </select>
                                          </div>
                                        </div>

                                        <div class="mb-3">
                                          <label class="form-label required">Jenis Kelamin</label>
                                          <div >
                                            <select class="form-select" name="jenis_kelamin">
                                              <option selected hidden></option>
                                              <option value="LAKI-LAKI">LAKI-LAKI</option>
                                              <option value="PEREMPUAN">PEREMPUAN</option>
                                            </select>
                                          </div>
                                        </div>

                                        <div class="mb-3">
                                          <label class="form-label required">Status Kawin</label>
                                          <div >
                                            <select class="form-select" name="status_kawin">
                                              <option selected hidden></option>
                                              <option value="SUDAH KAWIN">  SUDAH KAWIN</option>
                                              <option value="BELUM KAWIN">  BELUM KAWIN</option>
                                              <option value="JANDA">        JANDA</option>
                                              <option value="DUDA">         DUDA</option>
                                            </select>
                                          </div>
                                        </div>

                                        <div class="mb-3">
                                          <label class="form-label">No BPJS (tidak wajib di isi)</label>
                                          <input type="number" class="form-control" name="no_bpjs" placeholder="No BPJS..." >
                                        </div>

                                        <div class="row">
                                          <div class="col-xl-12 col-md-12 col-sm-12">
                                              <div class="row">
                                                <div class="col-xl-6 col-md-6 col-sm-6">
                                                    <label class="form-label required">Tinggi Badan</label>
                                                    <input type="number" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan..."  required>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-sm-6">
                                                    <label class="form-label required">Berat Badan</label>
                                                    <input type="number" class="form-control" name="berat_badan" placeholder="Berat Badan..."  required>
                                                </div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="mb-3">
                                          <label class="form-label required">Golongan Darah</label>
                                          <div >
                                            <select class="form-select" name="golongan_darah">
                                              <option selected hidden></option>
                                              <option value="A">    A</option>
                                              <option value="B">    B</option>
                                              <option value="AB">   AB</option>
                                              <option value="O">    O</option>
                                            </select>
                                          </div>
                                        </div>

                                        <div class="mb-3">
                                          <label class="form-label required">Suku</label>
                                          <input type="text" class="form-control" name="suku" placeholder="Suku..." onkeyup="this.value = this.value.toUpperCase()"  required>
                                        </div>

                                        <div class="mb-3">
                                          <label class="form-label required">Total Bersaudara</label>
                                          <input type="number" class="form-control" name="total_saudara" placeholder="Total Bersaudara..."  required>
                                        </div>

                                        <div class="mb-3">
                                          <label class="form-label required">Alamat (Jalan) Sesuai KTP</label>
                                          <textarea class="form-control" name="alamat_ktp" placeholder="Alamat (Jalan) Sesuai KTP" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                        </div>
                                    
                                        <div class="mb-3">
                                          <label class="form-label required">Provinsi Sesuai KTP</label>
                                          <input type="text" class="form-control" name="provinsi_ktp" placeholder="Provinsi Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>
                                    
                                        <div class="mb-3">
                                          <label class="form-label required">Kota Sesuai KTP</label>
                                          <input type="text" class="form-control" name="kota_ktp" placeholder="Kota Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                          <label class="form-label required">Kabupaten Sesuai KTP</label>
                                          <input type="text" class="form-control" name="kabupaten_ktp" placeholder="Kabupaten Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()"  required>
                                        </div>
                                    
                                        <div class="mb-3">
                                          <label class="form-label required">Kecamatan Sesuai KTP</label>
                                          <input type="text" class="form-control" name="kecamatan_ktp" placeholder="Kecamatan Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()"  required>
                                        </div>
                                    
                                        <div class="mb-3">
                                          <label class="form-label required">Kelurahan / Desa Sesuai KTP</label>
                                          <input type="text" class="form-control" name="kelurahan_ktp" placeholder="Kelurahan / Desa Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()"  required>
                                        </div>
                                    
                                        <div class="mb-3">
                                          <label class="form-label required">Kode Pos Sesuai KTP</label>
                                          <input type="number" class="form-control" name="kode_pos_ktp" placeholder="Kode Pos Sesuai KTP..."  required>
                                        </div>

                                        <div class="mb-3">
                                        <label class="form-label required">Alamat Domisili</label>
                                        <textarea class="form-control" name="alamat_domisili" placeholder="Alamat Domisili" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                        
                                      </div>

                                      <div class="mb-3">
                                        {{-- <label class="form-check"> --}}
                                            {{-- <input type="checkbox" class="form-check-input" name="setuju"  value="yes" onclick="myFunction()"/> --}}
                                            <span class="form-check-label font-color-small" >Info.!! Tulis kembali jika alamat domisili sama dengan alamat KTP</span>
                                        {{-- </label> --}}
                                      </div>

                                      
                                  
                                      <div class="mb-3">
                                        <label class="form-label required">Provinsi Domisili</label>
                                        <input type="text" class="form-control" id="provinsi_domisili" name="provinsi_domisili" placeholder="Provinsi Domisili..." onkeyup="this.value = this.value.toUpperCase()"  required>
                                      </div>
                                  
                                      <div class="mb-3">
                                        <label class="form-label required">Kota Domisili</label>
                                        <input type="text" class="form-control" name="kota_domisili" placeholder="Kota Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      </div>
                                      
                                      <div class="mb-3">
                                        <label class="form-label required">Kabupaten Domisili</label>
                                        <input type="text" class="form-control" name="kabupaten_domisili" placeholder="Kabupaten Domisili..." onkeyup="this.value = this.value.toUpperCase()"  required>
                                      </div>
                                  
                                      <div class="mb-3">
                                        <label class="form-label required">Kecamatan Domisili</label>
                                        <input type="text" class="form-control" name="kecamatan_domisili" placeholder="Kecamatan Domisili..." onkeyup="this.value = this.value.toUpperCase()"  required>
                                      </div>
                                  
                                      <div class="mb-3">
                                        <label class="form-label required">Kelurahan / Desa Domisili</label>
                                        <input type="text" class="form-control" name="kelurahan_domisili" placeholder="Kelurahan / Desa Domisili..." onkeyup="this.value = this.value.toUpperCase()"  required>
                                      </div>
                                  
                                  
                                      <div class="mb-3">
                                        <label class="form-label">Instagram (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="instagram" placeholder="instagram..." >
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label">Facebook (tidak wajib di isi)</label>
                                          <input type="text" class="form-control" name="fb" placeholder="facebook..." >
                                        </div>

                                        <div class="mb-3">
                                          <label class="form-label">LinkedIn (tidak wajib di isi)</label>
                                          <input type="text" class="form-control" name="linkedin" placeholder="linkedin..." >
                                        </div>

                                        <div class="mb-3">
                                          <label class="form-label">Twitter (tidak wajib di isi)</label>
                                          <input type="text" class="form-control" name="twitter" placeholder="twitter..." >
                                        </div>
                                  
                                      <div class="mb-3">
                                        <label class="form-label required">Nomor WhatsApp</label>
                                        <input type="number" class="form-control" name="no_wa" placeholder="Nomor WhatsApp..."  required>
                                      </div>
                                  
                                      <div class="mb-3">
                                        <label class="form-label required">Nomor HP</label>
                                        <input type="number" class="form-control" name="no_hp" placeholder="Nomor HP..." value="{{$dahboard_akun_cookie->no_hp}}"  required>
                                      </div>
                                  
                                      <div class="mb-3">
                                        <label class="form-label required">Ceritakan Tentang Diri Anda</label>
                                        <textarea class="form-control" name="cerita_diri" placeholder="Ceritakan Tentang Diri Anda" onkeyup="this.value = this.value.toUpperCase()" required> </textarea>
                                      </div>

                                      
                                      
                                      
                                  </div>
                                  <div class="modal-footer">
                                      <!-- <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                      Cancel
                                      </a> -->
                                      <button type="submit" class="btn btn-primary ms-auto">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                            Simpan
                                      </button>
                                  </div>
                          </form>
                      </div>
                  </div>
              </div>
          <?php endif ?>
    <?php else: ?>
        <div class="modal modal-blur fade" id="detail_profil" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Profile Saya</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <form action="{{route('create-data-karyawan')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <input type="hidden" class="form-control" id="data_id" name="id_data_diri" placeholder="Your report name" value="{{$dahboard_akun_cookie->data_diri->id}}">
                                <input type="hidden" class="form-control" id="data_id" name="gambar" placeholder="Your report name" value="{{$dahboard_akun_cookie->data_diri->foto}}">
                                    <div class="card-body  text-center">
                                        {{-- <span class="avatar avatar-xl mb-3 avatar-rounded" id="gambar_nodin" style="background-image: url(./static/avatars/000m.jpg)"></span> --}}
                                        <?php if (!isset($dahboard_akun_cookie->data_diri->foto)): ?>
                                            <!-- <link rel="icon" href="{{ asset('') }}file/profil-dashboard/profil.png" type="image/x-icon"> -->
                                                <img src="{{ asset('') }}file/profil-dashboard/profil.png" id="gambar_nodin" class="avatar avatar-xl mb-3 avatar-rounded" style="width: 150px; height: 150px;" />
                                        <?php else: ?>
                                                <img src="{{ asset('') }}file/rekrutment/profil/{{$dahboard_akun_cookie->data_diri->foto}}" id="gambar_nodin" class="avatar avatar-xl mb-3 avatar-rounded" style="width: 150px; height: 150px;" />
                                        <?php endif ?>
                                     </div>
                                    <div class="mb-3">
                                        <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                                        <label class="form-label">Input Foto Anda</label>
                                                        <input type="file" class="form-control" id="preview_gambar" name="foto_profil">
                                                    </div>
                                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                                    
                                                        <span class="form-check-label font-color-small font-size-info" >Harus bertype JPG / PNG dan gambar tidak boleh lebih besar dari 1MB</span>
                                                    
                                                    </div>
                                                </div>
                                                </div>
                                        </div>
                                    </div>

                                   
                                    






                                    <div class="mb-3">
                                      <label class="form-label required">Nama Lengkap</label>
                                      <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->nama_lengkap}}" required>
                                      <span id="name_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Nama Panggilan</label>
                                      <input type="text" class="form-control" id="nama_panggil" name="nama_panggil" placeholder="Nama Panggilan..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->nama_panggilan}}" required>
                                      <span id="panggil_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Tempat Lahir</label>
                                      <input type="text" class="form-control" id="tempat_lahir" value="{{$dahboard_akun_cookie->data_diri->tempat_lahir}}" name="tempat_lahir" placeholder="Tempat Lahir..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="tempat_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Tanggal Lahir</label>
                                      <input type="date" class="form-control" value="{{$dahboard_akun_cookie->data_diri->tanggal_lahir}}" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir..." required>
                                      <span id="tanggal_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Nik</label>
                                      <input type="text" class="form-control" value="{{$dahboard_akun_cookie->data_diri->nik}}" id="nik" name="nik" placeholder="NIK..." value="" readonly>
                                      <span id="nik_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Email Aktif</label>
                                      <input type="email" class="form-control" value="{{$dahboard_akun_cookie->data_diri->email}}" id="email" name="email" placeholder="Email Aktif..." value="" readonly>
                                      <span id="email_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                    <label class="form-label required">Agama</label>
                                    <div >
                                      <select class="form-select" name="agama">
                                        <option value="{{$dahboard_akun_cookie->data_diri->agama}}"  selected hidden>{{$dahboard_akun_cookie->data_diri->agama}}</option>
                                        <option value="ISLAM">              ISLAM</option>
                                        <option value="KRISTEN PROTESTAN">  KRISTEN PROTESTAN</option>
                                        <option value="KRISTEN KATHOLIK">   KRISTEN KATHOLIK</option>
                                        <option value="HINDU">              HINDU</option>
                                        <option value="BUDHA">              BUDHA</option>
                                        <option value="KONG HU CHU">        KONG HU CHU</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Jenis Kelamin</label>
                                    <div >
                                      <select class="form-select" name="jenis_kelamin">
                                        <option value="{{$dahboard_akun_cookie->data_diri->jenis_kelamin}}"  selected hidden>{{$dahboard_akun_cookie->data_diri->jenis_kelamin}}</option>
                                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                                        <option value="PEREMPUAN">PEREMPUAN</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Status Kawin</label>
                                    <div >
                                      <select class="form-select" name="status_kawin">
                                        <option value="{{$dahboard_akun_cookie->data_diri->status_perkawinan}}"  selected hidden>{{$dahboard_akun_cookie->data_diri->status_perkawinan}}</option>
                                        <option value="SUDAH KAWIN">  SUDAH KAWIN</option>
                                        <option value="BELUM KAWIN">  BELUM KAWIN</option>
                                        <option value="JANDA">        JANDA</option>
                                        <option value="DUDA">         DUDA</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">No BPJS (tidak wajib di isi)</label>
                                    <input type="number" class="form-control" name="no_bpjs" placeholder="No BPJS..." value="{{$dahboard_akun_cookie->data_diri->no_bpjs}}">
                                  </div>

                                  <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                        <div class="row">
                                          <div class="col-xl-6 col-md-6 col-sm-6">
                                              <label class="form-label required">Tinggi Badan</label>
                                              <input type="number" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan..." value="{{$dahboard_akun_cookie->data_diri->tinggi_badan}}" required>
                                          </div>
                                          <div class="col-xl-6 col-md-6 col-sm-6">
                                              <label class="form-label required">Berat Badan</label>
                                              <input type="number" class="form-control" name="berat_badan" placeholder="Berat Badan..." value="{{$dahboard_akun_cookie->data_diri->berat_badan}}" required>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Golongan Darah</label>
                                    <div >
                                      <select class="form-select" name="golongan_darah">
                                        <option value="{{$dahboard_akun_cookie->data_diri->golongan_darah}}"  selected hidden>{{$dahboard_akun_cookie->data_diri->golongan_darah}}</option>
                                        <option value="A">    A</option>
                                        <option value="B">    B</option>
                                        <option value="AB">   AB</option>
                                        <option value="O">    O</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Suku</label>
                                    <input type="text" class="form-control" name="suku" placeholder="Suku..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->suku}}" required>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Total Bersaudara</label>
                                    <input type="number" class="form-control" name="total_saudara" placeholder="Total Bersaudara..." value="{{$dahboard_akun_cookie->data_diri->total_saudara}}" required>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Alamat (Jalan) Sesuai KTP</label>
                                    <textarea class="form-control" name="alamat_ktp" placeholder="Alamat (Jalan) Sesuai KTP" onkeyup="this.value = this.value.toUpperCase()" required>{{$dahboard_akun_cookie->data_diri->alamat_ktp}}</textarea>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Provinsi Sesuai KTP</label>
                                    <input type="text" class="form-control" name="provinsi_ktp" placeholder="Provinsi Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->provinsi_ktp}}" required>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Kota Sesuai KTP</label>
                                    <input type="text" class="form-control" name="kota_ktp" placeholder="Kota Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->kota_ktp}}" required>
                                  </div>
                                  
                                  <div class="mb-3">
                                    <label class="form-label required">Kabupaten Sesuai KTP</label>
                                    <input type="text" class="form-control" name="kabupaten_ktp" placeholder="Kabupaten Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->kabupaten_ktp}}" required>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Kecamatan Sesuai KTP</label>
                                    <input type="text" class="form-control" name="kecamatan_ktp" placeholder="Kecamatan Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->kecamatan_ktp}}" required>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Kelurahan / Desa Sesuai KTP</label>
                                    <input type="text" class="form-control" name="kelurahan_ktp" placeholder="Kelurahan / Desa Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->kelurahan_ktp}}" required>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Kode Pos Sesuai KTP</label>
                                    <input type="number" class="form-control" name="kode_pos_ktp" placeholder="Kode Pos Sesuai KTP..." value="{{$dahboard_akun_cookie->data_diri->pos_ktp}}" required>
                                  </div>

                                  <div class="mb-3">
                                  <label class="form-label required">Alamat Domisili</label>
                                  <textarea class="form-control" name="alamat_domisili" placeholder="Alamat Domisili" onkeyup="this.value = this.value.toUpperCase()" required>{{$dahboard_akun_cookie->data_diri->alamat_domisili}}</textarea>
                                  
                                </div>

                                <div class="mb-3">
                                  {{-- <label class="form-check"> --}}
                                      {{-- <input type="checkbox" class="form-check-input" name="setuju"  value="yes" onclick="myFunction()"/> --}}
                                      <span class="form-check-label font-color-small" >Info.!! Tulis kembali jika alamat domisili sama dengan alamat KTP</span>
                                  {{-- </label> --}}
                                </div>

                                
                            
                                <div class="mb-3">
                                  <label class="form-label required">Provinsi Domisili</label>
                                  <input type="text" class="form-control" id="provinsi_domisili" name="provinsi_domisili" placeholder="Provinsi Domisili..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->provinsi_domisili}}" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kota Domisili</label>
                                  <input type="text" class="form-control" name="kota_domisili" placeholder="Kota Domisili..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->kota_domisili}}" required>
                                </div>
                                
                                <div class="mb-3">
                                  <label class="form-label required">Kabupaten Domisili</label>
                                  <input type="text" class="form-control" name="kabupaten_domisili" placeholder="Kabupaten Domisili..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->kabupaten_domisili}}" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kecamatan Domisili</label>
                                  <input type="text" class="form-control" name="kecamatan_domisili" placeholder="Kecamatan Domisili..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->kecamatan_domisili}}" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kelurahan / Desa Domisili</label>
                                  <input type="text" class="form-control" name="kelurahan_domisili" placeholder="Kelurahan / Desa Domisili..." onkeyup="this.value = this.value.toUpperCase()" value="{{$dahboard_akun_cookie->data_diri->kelurahan_domisili}}" required>
                                </div>
                            
                            
                                <div class="mb-3">
                                  <label class="form-label">Instagram (tidak wajib di isi)</label>
                                  <input type="text" class="form-control" name="instagram" placeholder="instagram..." value="{{$dahboard_akun_cookie->data_diri->instagram}}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Facebook (tidak wajib di isi)</label>
                                    <input type="text" class="form-control" name="fb" placeholder="facebook..." value="{{$dahboard_akun_cookie->data_diri->facebook}}">
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">LinkedIn (tidak wajib di isi)</label>
                                    <input type="text" class="form-control" name="linkedin" placeholder="linkedin..." value="{{$dahboard_akun_cookie->data_diri->linkedin}}">
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">Twitter (tidak wajib di isi)</label>
                                    <input type="text" class="form-control" name="twitter" placeholder="twitter..." value="{{$dahboard_akun_cookie->data_diri->twitter}}">
                                  </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Nomor WhatsApp</label>
                                  <input type="number" class="form-control" name="no_wa" placeholder="Nomor WhatsApp..." value="{{$dahboard_akun_cookie->data_diri->nomor_whatsapp}}" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Nomor HP</label>
                                  <input type="number" class="form-control" name="no_hp" placeholder="Nomor HP..." value="{{$dahboard_akun_cookie->data_diri->nomor_hp}}" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Ceritakan Tentang Diri Anda</label>
                                  <textarea class="form-control" name="cerita_diri" placeholder="Ceritakan Tentang Diri Anda" onkeyup="this.value = this.value.toUpperCase()" required>{{$dahboard_akun_cookie->data_diri->cerita_diri}}</textarea>
                                </div>

                                
                                
                                
                            </div>
                            <div class="modal-footer">
                                <!-- <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                Cancel
                                </a> -->
                                <button type="submit" class="btn btn-primary ms-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                      Simpan
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif ?>             
<?php endif ?>
      