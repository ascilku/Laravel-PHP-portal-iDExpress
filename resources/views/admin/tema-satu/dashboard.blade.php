@include('admin.tema-satu.header')
@include('admin.tema-satu.menu')



<!-- ======================== Data Perusahaan ============================== -->
<?php if ($dahboard_akun_cookie->akses->akses == 'Admin Super'): ?>     
  
<?php else: ?>

    <?php if (!isset($dahboard_akun_cookie->data_diri)): ?>
        <?php if ($dahboard_akun_cookie->akses->akses == "Admin Super"): ?>
    
            <div class="modal modal-blur fade" id="data_perusahaan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Data Anda</h5>
                        </div>
                        <form action="{{route('create-data-perusahaan')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="modal-body">
                                    <input type="hidden" class="form-control" id="data_id" name="id_akun" placeholder="Your report name">
                                    <input type="hidden" class="form-control" id="id_akses" name="id_akses" placeholder="Your report name">
                                        <div class="card-body  text-center">
                                            {{-- <span class="avatar avatar-xl mb-3 avatar-rounded" id="gambar_nodin" style="background-image: url(./static/avatars/000m.jpg)"></span> --}}
                                            <img src="{{ asset('') }}static/avatars/profil.png" id="gambar_nodin" class="avatar avatar-xl mb-3 avatar-rounded" style="width: 150px; height: 150px;" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                                            <label class="form-label required">Logo Perusahaan</label>
                                                            <input type="file" class="form-control" id="preview_gambar" name="foto_profil" required>
                                                        </div>
                                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                                        
                                                            <span class="form-check-label font-color-small font-size-info" >Harus bertype JPG / PNG dan gambar tidak boleh lebih besar dari 1MB</span>
                                                        
                                                        </div>
                                                    </div>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required" >Nama Perusahaan</label>
                                            <input type="text" disabled class="form-control nama" name="dingtalk" id="data_id"  placeholder="Your report Akun Dingtalk" value="{{$dahboard_akun_cookie->nama}}">
                                        </div>

                                        

                                        <div class="mb-3">
                                            <label class="form-label required" >Nama Pemilik Perusahaan</label>
                                            <input type="text" class="form-control nama" name="nama_pemilik" id="data_id"  placeholder="Your report Nomor Rekening" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required">Alamat (Jalan) Perusahaan</label>
                                            <textarea class="form-control" name="alamat" placeholder="Alamat (Jalan) Penempatan" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required" >Provinsi Perusahaan</label>
                                            <input type="text" class="form-control nama" name="provinsi" id="data_id"  placeholder="Your report Provinsi Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required" >Kota Perusahaan</label>
                                            <input type="text" class="form-control nama" name="kota" id="data_id"  placeholder="Your report Kota Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required" >Kabupaten Perusahaan</label>
                                            <input type="text" class="form-control nama" name="kabupaten" id="data_id"  placeholder="Your report Kabupaten Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required" >Kelurahan Perusahaan</label>
                                            <input type="text" class="form-control nama" name="kelurahan" id="data_id"  placeholder="Your report Kelurahan Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required" >Kecamatan Perusahaan</label>
                                            <input type="text" class="form-control nama" name="kecamatan" id="data_id"  placeholder="Your report kecamatan Penempatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>
                                    
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                        Simpan
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php else: ?>
        <?php endif ?>
    <?php else: ?>
    <?php endif ?>
                          
<?php endif ?>


            <?php if (session()->has('alert-peringatan')): ?>
                <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
            <?php endif ?>

            <?php if (session()->has('alert-success')): ?>
                <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
            <?php endif ?>
                        
        <div class="py-4">
        
            <div class="container-xl">
                    <?php if ($dahboard_akun_cookie->akses->akses != "Admin Super"): ?>
                            <div class="alert alert-warning alert-dismissible">
                                <strong class="alert-login-success">Warning! </strong> Perubahan dan penghapusan data yang tidak bisa di lakukan dari anda itu bisa di ajukan langsung ke HRD untuk perubahan dan penghapusan data.!!
                            </div>
                    <?php endif ?>
                <div class="row align-items-center ">
                        <div class="col-xl-12 col-md-12 col-sm-12">
                                <?php if (Session::get('alert-success-karyawan_')): ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan_')}}
                                    </div>
                                <?php endif ?>
                                <?php if (session()->has('alert-peringatan')): ?>
                                    <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
                                <?php endif ?>
                                <div >
                                    <!-- ====================== logic untuk memilih halaman =================== -->
                                        <?php 
                                            if(isset($_GET['halaman'])){
                                                $halaman = $_GET['halaman'];
                                        ?>  

                                                        <?php
                                                            switch($halaman){
                                                                case 'data-diri':
                                                        ?> 
                                    
                                                                <!-- ====================== Menampilkan Menu Halaman Item Header =================== -->

                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.data-diri')
                                                                <?php       
                                                                        break;      
                                                                ?>
                                                                <!-- ====================== Menampilkan Menu Halaman Item Data Diri================== -->

                                                                <?php 
                                                                    case 'data-orang-tua':
                                                                ?>
                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.data-orang-tua')
                                                                <?php       
                                                                        break;      
                                                                ?>
                                                                <!-- ====================== Menampilkan Menu Halaman Item pendidikan formal================== -->

                                                                <?php 
                                                                    case 'data-pendidikan-formal':
                                                                ?>
                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.pendidikan-formal')
                                                                <?php       
                                                                        break;      
                                                                ?>
                                                                <!-- ====================== Menampilkan Menu Halaman Item pendidikan formal================== -->

                                                                <?php 
                                                                    case 'data-pendidikan-non-formal':
                                                                ?>
                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.pendidikan-non-formal')
                                                                <?php       
                                                                        break;      
                                                                ?>
                                                                <!-- ====================== Menampilkan Menu Halaman Item File Data Diri================== -->

                                                                <?php 
                                                                    case 'data-file-data-diri':
                                                                ?>
                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.file-data-diri')
                                                                <?php       
                                                                        break;      
                                                                ?>

<?php 
                                                                    case 'reset-password':
                                                                ?>
                                                                @include('admin.tema-satu.home.karyawan.menu-karyawan.reset-password')
                                                                <?php       
                                                                        break;      
                                                                ?>

                                                                
                                                        <?php } ?>  
                                                    <?php }?>  
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </div>



    
@include('admin.tema-satu.footer')


