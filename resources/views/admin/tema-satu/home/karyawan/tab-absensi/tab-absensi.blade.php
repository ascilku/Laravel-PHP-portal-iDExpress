
    <!-- <div class="py-4"> -->
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
                            <a href="{{route('absensi', 'new')}}" class="nav-link <?php  echo ($key=='new' ? 'active' : '');?> "><span class="badge bg-info ms-auto icon-login " class="">New</span> Absensi</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('absensi', 'history')}}" class="nav-link <?php  echo ($key=='history' ? 'active' : '');?> "><span class="badge bg-danger ms-auto icon-login " class="">History</span> Absensi</a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="{{route('absensi', 'history')}}" class="nav-link <?php  echo ($key=='history' ? 'active' : '');?> ">Orang Tidak Absensi</a>
                        </li> -->

                    </ul>
                    <div class="card-body">
                        <div class="tab-content">

                            <?php if ($key == 'new'): ?>
                                <div class="tab-pane active show" id="tidak">
                                    @include('admin.tema-satu.home.karyawan.tab-absensi.absensi')
                                </div>
                            <?php elseif ($key == 'history'): ?>
                                <div class="tab-pane active show" id="habis">
                                    @include('admin.tema-satu.home.karyawan.tab-absensi.history-absensi')
                                </div>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->