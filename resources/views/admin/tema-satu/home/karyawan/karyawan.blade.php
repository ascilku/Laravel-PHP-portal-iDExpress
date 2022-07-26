@include('admin.tema-satu.header')
@include('admin.tema-satu.menu')
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
                            
                                
                                    
                                <div class="col-xl-12 col-md-12">
                                    
                                <?php if (Session::get('alert-success-karyawan')): ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan')}}
                                    </div>
                                <?php endif ?>

                                    <div class="card">
                                        <ul class="nav nav-tabs" data-bs-toggle="tabs">

                                            <li class="nav-item">
                                                <a href="#karyawan" class="nav-link active" data-bs-toggle="tab">Karyawan</a>
                                            </li>

                                            <!-- <li class="nav-item">
                                                <a href="#assets-karyawan" class="nav-link" data-bs-toggle="tab">Assets Karyawan</a>
                                            </li> -->

                                            <!-- <li class="nav-item ms-auto">
                                                <a href="#tabs-settings-7" class="nav-link" title="Settings" data-bs-toggle="tab">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
                                                </a>
                                            </li> -->

                                        </ul>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                
                                                
                                                















                                            <div class="card ">
                                                <ul class="nav nav-tabs  " data-bs-toggle="tabs ">

                                                    <li class="nav-item ">
                                                        <a href="{{route('karyawan-aktif', 'aktif')}}" class="nav-link <?php  echo ($key=='aktif' ? 'active' : '');?> "><span class="badge bg-info ms-auto icon-login " class="">Aktif</span>  Karyawan</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="{{route('karyawan-aktif', 'semua')}}" class="nav-link <?php  echo ($key=='semua' ? 'active' : '');?>" ><span class="badge bg-success ms-auto icon-login">Semua</span> Karyawan</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="{{route('karyawan-aktif', 'resign')}}" class="nav-link <?php  echo ($key=='resign' ? 'active' : '');?>" ><span class="badge bg-warning ms-auto icon-login">Resign</span> Karyawan</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="{{route('karyawan-aktif', 'non-aktif')}}" class="nav-link <?php  echo ($key=='non-aktif' ? 'active' : '');?>" ><span class="badge bg-danger ms-auto icon-login">Non Aktif</span> Karyawan</a>
                                                    </li>
                                                </ul>

                                                <div class="card-body">
                                                    <div class="tab-content">

                                                        <?php if ($key == 'aktif'): ?>
                                                            <div class="tab-pane active show" id="aktif">
                                                                @include('admin.tema-satu.home.karyawan.tabel-karyawan.aktif-karyawan')
                                                            </div>
                                                        <?php elseif ($key == 'semua'): ?>
                                                            <div class="tab-pane active show" id="aktif">
                                                            @include('admin.tema-satu.home.karyawan.tabel-karyawan.semua-karyawan')
                                                        </div>
                                                        <?php elseif ($key == 'resign'): ?>
                                                            <div class="tab-pane active show" id="aktif">
                                                            @include('admin.tema-satu.home.karyawan.tabel-karyawan.resign-karyawan')
                                                        </div>
                                                        <?php elseif ($key == 'non-aktif'): ?>
                                                            <div class="tab-pane active show" id="aktif">
                                                            @include('admin.tema-satu.home.karyawan.tabel-karyawan.non-karyawan')
                                                        </div>
                                                        <?php endif ?>
                                                        

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
        </div>
    </div>
@include('admin.tema-satu.footer')

            