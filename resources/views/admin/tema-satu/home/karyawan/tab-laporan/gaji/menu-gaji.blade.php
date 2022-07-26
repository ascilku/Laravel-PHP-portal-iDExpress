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

                        <li class="nav-item ">
                            <a href="#" class="nav-link active " >Laporan Gaji</a>
                        </li>

                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tidak">
                                @include('admin.tema-satu.home.karyawan.tab-laporan.gaji.tab-gaji')
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.tema-satu.footer')