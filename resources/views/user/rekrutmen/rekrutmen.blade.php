@include('user.rekrutmen.menu-main.header')
          <div class="page-wrapper">
                <div class="top-footer">
                    <div class="container-xl">
                        <!-- Page title -->
                        <div class="page-header d-print-none">
                            <div class="row align-items-center">
                              
                                <div class="col">
                                    <h2 class="page-title">
                                      Selamat Datang di Rekrutmen
                                    </h2>
                                    <small>PT Heroisme Indokaisa Triasa (HIT) Group</small>   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-body">
                        <div class="container-xl">
                            <div class="row">

                                @include('user.rekrutmen.menu-main.menu')
                              
                                <div class="col-sm-8 col-lg-9 top-rekrutment posisi-">
                                

                                      <?php if (isset($rekrutment_Aply_Lowongan->status) == 'Buka'): ?>
                                        <div class="alert alert-danger alert-dismissible">
                                            <strong class="alert-login-success font-color-small-">Info! </strong> {{$rekrutment_Aply_Lowongan->keterangan}}
                                        </div>
                                      <?php else: ?>
                                        <div class="alert alert-danger alert-dismissible">
                                            <strong class="alert-login-success font-color-small-">Info! </strong> Silahkan Melengkapi Data Anda Dengan Benar dan Teliti. Informasi Pemanggilan atau Kelulusan Semua Ada Di website ini, Silahkan Pantau Website Ini Terus
                                        </div>
                                      <?php endif ?>
                                    <div>
                                          <!-- ====================== logic untuk memilih halaman =================== -->
                                            <?php 
                                                if(isset($_GET['halaman'])){
                                                      $halaman = $_GET['halaman'];
                                            ?>  

                                                <?php
                                                    switch($halaman){
                                                              case 'home':
                                                ?> 
                            
                                                        <!-- ====================== Menampilkan Menu Halaman Item Header =================== -->

                                                                @include('user.rekrutmen.item-header.home')
                                                          <?php break; ?>
                                                          
                                                          <?php 
                                                                case 'lowongan':
                                                          ?>
                                                                @include('user.rekrutmen.item-header.lowongan')
                                                          <?php       
                                                                break;
                                                          ?>
                                                        <!-- ====================== Menampilkan Menu Halaman Item Data Diri================== -->

                                                          <?php 
                                                                case 'data-diri':
                                                          ?>
                                                          @include('user.rekrutmen.item-data-diri.data-diri')
                                                          <?php       
                                                                break;      
                                                          ?>
                                                        <!-- ====================== Menampilkan Menu Halaman Item Data Diri================== -->

                                                          <?php 
                                                            case 'data-orang-tua':
                                                          ?>
                                                          @include('user.rekrutmen.item-data-diri.data-orang-tua')
                                                          <?php       
                                                                break;      
                                                          ?>
                                                        <!-- ====================== Menampilkan Menu Halaman Item pendidikan formal================== -->

                                                          <?php 
                                                            case 'data-pendidikan-formal':
                                                          ?>
                                                          @include('user.rekrutmen.item-data-diri.pendidikan-formal')
                                                          <?php       
                                                                break;      
                                                          ?>
                                                        <!-- ====================== Menampilkan Menu Halaman Item pendidikan formal================== -->

                                                          <?php 
                                                            case 'data-pendidikan-non-formal':
                                                          ?>
                                                          @include('user.rekrutmen.item-data-diri.pendidikan-non-formal')
                                                          <?php       
                                                                break;      
                                                          ?>
                                                        <!-- ====================== Menampilkan Menu Halaman Item File Data Diri================== -->

                                                          <?php 
                                                            case 'data-file-data-diri':
                                                          ?>
                                                          @include('user.rekrutmen.item-data-diri.file-data-diri')
                                                          <?php       
                                                                break;      
                                                          ?>

                                                          
                                                <?php } ?>  
                                            <?php }else{ ?> 
                                                @include('user.rekrutmen.item-header.home')
                                            <?php } ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@include('user.rekrutmen.menu-main.footer')