<div class="col-xl-12 col-md-4">
                <div class="card">
                    <ul class="nav nav-tabs" data-bs-toggle="tabs">

                        <li class="nav-item">
                            <a href="#master-jabatan" class="nav-link active" data-bs-toggle="tab">Jabatan</a>
                        </li>

                        <li class="nav-item">
                            <a href="#master-penempatan" class="nav-link " data-bs-toggle="tab">Penempatan</a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="#jabatan_" class="nav-link " data-bs-toggle="tab">Kontrak</a>
                        </li>

                        <li class="nav-item">
                            <a href="#gaji_" class="nav-link" data-bs-toggle="tab">Gaji</a>
                        </li> -->

                       


                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="master-jabatan">
                                 @include('admin.tema-satu.home.karyawan.tab-karyawan.tab-jabatan.menu-jabatan') 
                            </div>
                            
                            <div class="tab-pane " id="master-penempatan">
                                @include('admin.tema-satu.home.karyawan.tabel-assets.tidak-jabatan-gaji')
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>