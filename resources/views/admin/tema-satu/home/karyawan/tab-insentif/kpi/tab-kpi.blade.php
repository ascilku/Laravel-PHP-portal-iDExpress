
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
                            <a href="{{route('Insentif-kpi', 'new')}}" class="nav-link <?php  echo ($key=='new' ? 'active' : '');?> "><span class="badge bg-info ms-auto icon-login " class="">New</span> Insentif</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('Insentif-kpi', 'history')}}" class="nav-link <?php  echo ($key=='history' ? 'active' : '');?> "><span class="badge bg-danger ms-auto icon-login " class="">History</span> Insentif</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('Insentif-kpi', 'orang')}}" class="nav-link <?php  echo ($key=='orang' ? 'active' : '');?> ">Orang Insentif</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('Insentif-kpi', 'dana')}}" class="nav-link <?php  echo ($key=='dana' ? 'active' : '');?> ">dana Insentif</a>
                        </li>

                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                        <?php if ($key == 'new'): ?>
                            <div class="tab-pane active show" id="tidak">
                                @include('admin.tema-satu.home.karyawan.tab-insentif.kpi.kpi')
                            </div>
                        <?php elseif ($key == 'history'): ?>
                            <div class="tab-pane active show" id="habis">
                            @include('admin.tema-satu.home.karyawan.tab-insentif.kpi.history-kpi')
                            </div>
                        <?php elseif ($key == 'orang'): ?>
                            <div class="tab-pane active show" id="habis">
                            @include('admin.tema-satu.home.karyawan.tab-insentif.kpi.orang-intensif-kpi')
                            </div>
                        <?php elseif ($key == 'dana'): ?>
                            <div class="tab-pane active show" id="habis">
                            @include('admin.tema-satu.home.karyawan.tab-insentif.kpi.dana-insentif')
                            </div>
                        <?php endif ?>
                        

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
   