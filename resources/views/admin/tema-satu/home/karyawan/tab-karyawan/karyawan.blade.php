            <div class="col-xl-12 col-md-12 col-sm-12 "  >
                <div class="card ">
                    <ul class="nav nav-tabs  " data-bs-toggle="tabs ">

                        <li class="nav-item ">
                            <a href="#aktif" class="nav-link active " data-bs-toggle="tab"><span class="badge bg-info ms-auto icon-login " class="">Aktif</span>  Karyawan</a>
                        </li>

                        <li class="nav-item">
                            <a href="#semua" class="nav-link " data-bs-toggle="tab"><span class="badge bg-success ms-auto icon-login">Semua</span> Karyawan</a>
                        </li>

                        <li class="nav-item">
                            <a href="#resign" class="nav-link " data-bs-toggle="tab"><span class="badge bg-warning ms-auto icon-login">Resign</span> Karyawan</a>
                        </li>

                        <li class="nav-item">
                            <a href="#non" class="nav-link " data-bs-toggle="tab"><span class="badge bg-danger ms-auto icon-login">Non Aktif</span> Karyawan</a>
                        </li>

                        

                    </ul>
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="tab-pane active show" id="aktif">
                                @include('admin.tema-satu.home.karyawan.tabel-karyawan.aktif-karyawan')
                            </div>
                            
                            <div class="tab-pane " id="semua">
                                @include('admin.tema-satu.home.karyawan.tabel-karyawan.semua-karyawan')
                            </div>

                            <div class="tab-pane" id="resign">
                                 @include('admin.tema-satu.home.karyawan.tabel-karyawan.resign-karyawan')
                            </div>

                            <div class="tab-pane" id="non">
                                 @include('admin.tema-satu.home.karyawan.tabel-karyawan.non-karyawan')
                            </div>

                        </div>
                    </div>
                </div>
            </div>