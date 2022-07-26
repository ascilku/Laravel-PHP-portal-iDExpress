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

                        <!-- <li class="nav-item ">
                            <a href="#" class="nav-link active " ></a>
                        </li> -->
                        

                        <?php if ($key == 'new' || $key == 'new-kehadiran' || $key == 'history-kehadiran'): ?>
                            <li class="nav-item ">
                            <a href="{{route('absensi', 'new')}}" class="nav-link <?php  echo ($key=='new' ? 'active' : '');?> ">Absensi</a>
                        </li>
                        <?php elseif ($key == 'history'): ?>
                            <li class="nav-item ">
                            <a href="{{route('absensi', 'history')}}" class="nav-link <?php  echo ($key=='history' ? 'active' : '');?> ">Absensi</a>
                        </li>
                        <?php endif ?>



                        <li class="nav-item ">
                            <a href="{{route('kehadiran-absensi', 'new-kehadiran')}}" class="nav-link <?php  echo ($key=='new-kehadiran' || $key=='history-kehadiran' ? 'active' : '');?> ">Kehadiran</a>
                        
                            <!-- <a class="dropdown-item" href="{{route('kehadiran-absensi', 'new')}}" >Kehadiran</a> -->
                        </li>

                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                            

                            <?php if ($key == 'new' || $key == 'history'): ?>
                                <div class="tab-pane active show" id="tidak">
                                    @include('admin.tema-satu.home.karyawan.tab-absensi.tab-absensi')
                                </div>
                            <?php elseif ($key == 'new-kehadiran' || $key == 'history-kehadiran'): ?>
                                <div class="tab-pane active show" id="tidak">
                                    @include('admin.tema-satu.home.karyawan.tab-kehadiran.tab-kehadiran')
                                </div>
                            <?php endif ?>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.tema-satu.footer')