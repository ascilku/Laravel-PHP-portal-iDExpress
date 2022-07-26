@include('admin.tema-satu.header')
@include('admin.tema-satu.menu')
    <div class="py-4">
        <div class="container-xl">
            <div class="col-xl-12 col-md-12 col-sm-12 "  >
                <div class="card ">
                    <ul class="nav nav-tabs  " data-bs-toggle="tabs ">

                        <li class="nav-item ">
                            <a href="#aktif-perusahaan" class="nav-link active " data-bs-toggle="tab"><span class="badge bg-info ms-auto icon-login " class="">Aktif</span> </a>
                        </li>

                        <li class="nav-item">
                            <a href="#tidak-perusahaan" class="nav-link " data-bs-toggle="tab"><span class="badge bg-danger ms-auto icon-login">Tidak Aktif</span></a>
                        </li>

                        

                    </ul>
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="tab-pane active show" id="aktif-perusahaan">
                                @include('admin.tema-satu.home.perusahaan.tabel-perusahaan.aktif')
                            </div>
                            
                            <div class="tab-pane " id="tidak-perusahaan">
                                @include('admin.tema-satu.home.perusahaan.tabel-perusahaan.tidak')
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.tema-satu.footer')