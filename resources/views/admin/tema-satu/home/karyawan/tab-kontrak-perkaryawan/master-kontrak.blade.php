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

                

                        <li class="nav-item">
                            <a href="{{route('kontrak-diri', 'new')}}" class="nav-link <?php  echo ($key=='new' ? 'active' : '');?> "><span class="badge bg-success ms-auto icon-login " class="">Ada</span>  Kontrak</a>
                            </li>

                    </ul>
                    <div class="card-body">
                        <div class="tab-content">

                        <?php if ($key == 'new'): ?>
                            <div class="tab-pane active show" id="tidak">
                                @include('admin.tema-satu.home.karyawan.tab-kontrak-perkaryawan.tabel-kontrak.semua-kontrak')
                            </div>
                        <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.tema-satu.footer')