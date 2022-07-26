@include('admin.tema-satu.header')
@include('admin.tema-satu.menu')
    <div class="py-4">
        <div class="container-xl">
            <div class="col-xl-12 col-md-12">
            <?php if (Session::get('alert-success-karyawan')): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan')}}
                    </div>
                <?php endif ?>
                <div class="card">
                    <ul class="nav nav-tabs" data-bs-toggle="tabs">

                        <li class="nav-item">
                            <a href="#master-jabatan" class="nav-link active" data-bs-toggle="tab">Master Jabatan</a>
                        </li>

                        <li class="nav-item">
                            <a href="#tidak-jabatan" class="nav-link " data-bs-toggle="tab">Tidak Ada Jabatan</a>
                        </li>

                        <li class="nav-item">
                            <a href="#jabatan_" class="nav-link " data-bs-toggle="tab">Jabatan</a>
                        </li>

                        <li class="nav-item">
                            <a href="#gaji_" class="nav-link" data-bs-toggle="tab">Gaji</a>
                        </li>

                       


                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="master-jabatan">
                                 @include('admin.tema-satu.home.karyawan.tab-jabatan.tabel-jabatan.jabatan_gaji') 
                            </div>
                            
                            <div class="tab-pane " id="tidak-jabatan">
                                @include('admin.tema-satu.home.karyawan.tab-jabatan.tabel-jabatan.tidak-jabatan-gaji')
                            </div>
                            
                            <div class="tab-pane " id="jabatan_">
                                @include('admin.tema-satu.home.karyawan.tab-jabatan.tabel-jabatan.jabatan')
                            </div>

                            <div class="tab-pane" id="gaji_">
                                @include('admin.tema-satu.home.karyawan.tab-jabatan.tabel-jabatan.gaji')
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.tema-satu.footer')