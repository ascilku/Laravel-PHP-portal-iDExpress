
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
                            <a href="{{route('Insentif-kurir', 'new')}}" class="nav-link <?php  echo ($key=='new' ? 'active' : '');?> "><span class="badge bg-info ms-auto icon-login " class="">New</span> Insentif</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('Insentif-kurir', 'history')}}" class="nav-link <?php  echo ($key=='history' ? 'active' : '');?> "><span class="badge bg-danger ms-auto icon-login " class="">History</span> Insentif</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('Insentif-kurir', 'orang')}}" class="nav-link <?php  echo ($key=='orang' ? 'active' : '');?> ">Orang Insentif</a>
                        </li>

                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                        <?php if ($key == 'new'): ?>
                            <div class="tab-pane active show" id="tidak">
                                @include('admin.tema-satu.home.karyawan.tab-insentif.kurir.kurir')
                            </div>
                        <?php elseif ($key == 'history'): ?>
                            <div class="tab-pane active show" id="habis">
                            @include('admin.tema-satu.home.karyawan.tab-insentif.kurir.history-kpi')
                            </div>
                        <?php elseif ($key == 'orang'): ?>
                            <div class="tab-pane active show" id="habis">
                            @include('admin.tema-satu.home.karyawan.tab-insentif.kurir.orang-intensif-kurir')
                            </div>
                        <?php endif ?>
                        

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
   