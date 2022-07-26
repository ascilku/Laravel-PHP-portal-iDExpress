@include('admin.tema-satu.header')
@include('admin.tema-satu.menu')
<?php if (session()->has('alert-peringatan')): ?>
      <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
<?php endif ?>
    <div class="py-4">
        <div class="container-xl">
           <div class="row align-items-center">
                <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="container-xl">
                                <!-- Page title -->
                                <!-- <div class="page-header d-print-none">
                                    <div class="row align-items-center">
                                        <div class="col font-color-small">
                                            <h2 class="page-title ">
                                            Managemen Karyawan
                                            </h2>
                                        </div>
                                    </div>
                                </div> -->
                            
                                <?php if (Session::get('alert-success-karyawan')): ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan')}}
                                    </div>
                                <?php endif ?>
                                    
                                <div class="col-xl-12 col-md-12">
                                    <div class="card">
                                        <ul class="nav nav-tabs" data-bs-toggle="tabs">

                                            

                                            <li class="nav-item">
                                                <a href="#assets-karyawan" class="nav-link active" data-bs-toggle="tab">Lowongan</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#orang" class="nav-link " data-bs-toggle="tab">Orang Terdaftar</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#akun" class="nav-link " data-bs-toggle="tab">Akun Terdaftar</a>
                                            </li>

                                        </ul>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                
                                                

                                                <div class="tab-pane active show" id="assets-karyawan">
                                                    @include('admin.tema-satu.home.karyawan.tabel-lowongan.tab-lowongan.lowongan-tab')
                                                </div>

                                                <div class="tab-pane" id="orang">
                                                    @include('admin.tema-satu.home.karyawan.tabel-lowongan.tab-lowongan.orang-lowongan-tab')
                                                </div>

                                                <div class="tab-pane" id="akun">
                                                    @include('admin.tema-satu.home.karyawan.tabel-lowongan.tab-lowongan.akun-terdaftar-tab')
                                                </div>

                                                

                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.tema-satu.footer')
            