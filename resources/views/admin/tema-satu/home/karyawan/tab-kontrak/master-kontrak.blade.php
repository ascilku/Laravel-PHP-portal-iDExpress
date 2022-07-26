@include('admin.tema-satu.header')
@include('admin.tema-satu.menu')
<?php
function getRomawi($bln){
                switch ($bln){
                    case 1: 
                        return "I";
                        break;
                    case 2:
                        return "II";
                        break;
                    case 3:
                        return "III";
                        break;
                    case 4:
                        return "IV";
                        break;
                    case 5:
                        return "V";
                        break;
                    case 6:
                        return "VI";
                        break;
                    case 7:
                        return "VII";
                        break;
                    case 8:
                        return "VIII";
                        break;
                    case 9:
                        return "IX";
                        break;
                    case 10:
                        return "X";
                        break;
                    case 11:
                        return "XI";
                        break;
                    case 12:
                        return "XII";
                        break;
                }
}
?>
    <div class="py-4">
        <div class="container-xl">
            <div class="col-xl-12 col-md-12 col-sm-12 "  >
                <?php if (Session::get('alert-success-karyawan')): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan')}}
                    </div>
                <?php endif ?>
                <div class="card ">
                    <ul class="nav nav-tabs  " data-bs-toggle="tabs ">

                        <li class="nav-item ">
                            <a href="{{route('kontrak', 'tidak-kontrak')}}" class="nav-link <?php  echo ($key=='tidak-kontrak' ? 'active' : '');?> "><span class="badge bg-danger ms-auto icon-login " class="">Tidak Ada</span>  Kontrak</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('kontrak', 'semua-kontrak')}}" class="nav-link <?php  echo ($key=='semua-kontrak' ? 'active' : '');?> "><span class="badge bg-info ms-auto icon-login " class="">Semua</span>  Kontrak</a>
                            </li>

                        <li class="nav-item">
                            <a href="{{route('kontrak', 'aktif-kontrak')}}" class="nav-link <?php  echo ($key=='aktif-kontrak' ? 'active' : '');?> "><span class="badge bg-success ms-auto icon-login " class="">Aktif</span>  Kontrak</a>
                            </li>

                        <li class="nav-item">
                            <a href="{{route('kontrak', 'deadline-kontrak')}}" class="nav-link <?php  echo ($key=='deadline-kontrak' ? 'active' : '');?> "><span class="badge bg-warning ms-auto icon-login">Deadline</span> Kontrak</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('kontrak', 'habis-kontrak')}}" class="nav-link <?php  echo ($key=='habis-kontrak' ? 'active' : '');?> "><span class="badge bg-danger ms-auto icon-login">Habis Masa</span> Kontrak</a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="tab-content">

                        <?php if ($key == 'tidak-kontrak'): ?>
                            <div class="tab-pane active show" id="tidak">
                                @include('admin.tema-satu.home.karyawan.tab-kontrak.tabel-kontrak.tidak-kontrak')
                            </div>
                        <?php elseif ($key == 'semua-kontrak'): ?>
                            <div class="tab-pane active show" id="semua">
                                @include('admin.tema-satu.home.karyawan.tab-kontrak.tabel-kontrak.semua-kontrak')
                            </div>
                        <?php elseif ($key == 'aktif-kontrak'): ?>
                            <div class="tab-pane active show" id="aktif">
                                @include('admin.tema-satu.home.karyawan.tab-kontrak.tabel-kontrak.aktif-kontrak')
                            </div>
                        <?php elseif ($key == 'deadline-kontrak'): ?>
                            <div class="tab-pane active show" id="deadline">
                                @include('admin.tema-satu.home.karyawan.tab-kontrak.tabel-kontrak.deadline-kontrak')
                            </div>
                        <?php elseif ($key == 'habis-kontrak'): ?>
                            <div class="tab-pane active show" id="habis">
                                @include('admin.tema-satu.home.karyawan.tab-kontrak.tabel-kontrak.habis-kontrak')
                            </div>
                        <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.tema-satu.footer')