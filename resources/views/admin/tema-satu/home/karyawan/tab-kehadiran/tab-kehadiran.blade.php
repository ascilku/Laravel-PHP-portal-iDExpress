
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
                            <a href="{{route('kehadiran-absensi', 'new-kehadiran')}}" class="nav-link <?php  echo ($key=='new-kehadiran' ? 'active' : '');?> "><span class="badge bg-info ms-auto icon-login " class="">New</span> Kehadiran</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('kehadiran-absensi', 'history-kehadiran')}}" class="nav-link <?php  echo ($key=='history-kehadiran' ? 'active' : '');?> "><span class="badge bg-danger ms-auto icon-login " class="">History</span> Kehadiran</a>
                        </li>

                    </ul>
                    <div class="card-body">
                        <div class="tab-content">

                            <?php if ($key == 'new-kehadiran'): ?>
                                <div class="tab-pane active show" id="tidak">
                                    @include('admin.tema-satu.home.karyawan.tab-kehadiran.kehadiran')
                                </div>
                            <?php elseif ($key == 'history-kehadiran'): ?>
                                <div class="tab-pane active show" id="habis">
                                    @include('admin.tema-satu.home.karyawan.tab-kehadiran.hostory-kehadiran')
                                </div>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->