<div class="col-xl-12 col-md-12 col-sm-12 "  >
                <div class="card ">
                    <ul class="nav nav-tabs  " data-bs-toggle="tabs ">

                        <li class="nav-item ">
                            <a href="#tidak" class="nav-link active " data-bs-toggle="tab"><span class="badge bg-danger ms-auto icon-login " class="">Tidak Ada</span>  Kontrak</a>
                        </li>

                        <li class="nav-item">
                            <a href="#semua" class="nav-link " data-bs-toggle="tab"><span class="badge bg-info ms-auto icon-login " class="">Semua</span>  Kontrak</a>
                         </li>

                        <li class="nav-item">
                            <a href="#aktif" class="nav-link " data-bs-toggle="tab"><span class="badge bg-success ms-auto icon-login " class="">Aktif</span>  Kontrak</a>
                         </li>

                        <li class="nav-item">
                            <a href="#deadline" class="nav-link " data-bs-toggle="tab"><span class="badge bg-warning ms-auto icon-login">Deadline</span> Kontrak</a>
                        </li>

                        <li class="nav-item">
                            <a href="#habis" class="nav-link " data-bs-toggle="tab"><span class="badge bg-danger ms-auto icon-login">Habis Masa</span> Kontrak</a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="tab-pane active show" id="tidak">
                                @include('admin.tema-satu.home.karyawan.tabel-assets.tidak-kontrak')
                            </div>

                            <div class="tab-pane" id="semua">
                                @include('admin.tema-satu.home.karyawan.tabel-assets.semua-kontrak')
                            </div>

                            <div class="tab-pane" id="aktif">
                                @include('admin.tema-satu.home.karyawan.tabel-assets.aktif-kontrak')
                            </div>

                            <div class="tab-pane" id="deadline">
                                @include('admin.tema-satu.home.karyawan.tabel-assets.deadline-kontrak')
                            </div>

                            <div class="tab-pane" id="habis">
                                @include('admin.tema-satu.home.karyawan.tabel-assets.habis-kontrak')
                            </div>
                            
                         


                        </div>
                    </div>
                </div>
            </div>