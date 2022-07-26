<?php if (session()->has('alert-peringatan')): ?>
    <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
<?php endif ?>

<?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>

<div class="container-xl">

<!-- ======================== Modal detail lowongan ============================== -->


<div class="modal modal-blur fade" id="detail-lowongan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Karyawan</h5>
                    <a href="{{route('karyawan-aktif', 'semua')}}">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
                </div>
                    <div class="modal-body">








                   
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-2">
                                        <button class="accordion-button collapsed bg-dark text-white " type="button" data-bs-toggle="collapse" data-bs-target='#id_lowongan' aria-expanded="false">
                                            <div class=" width-font-full">
                                                <h4 class="font-color-small-hover" ><b><span id="judullowongan_lihat"></span></b></h4>
                                                
                                            </div>
                                        </button>
                                </h2>
                          
                                <?php 
                                    $gambar = "<span id='gambar'></span>"; 
                                ?>
                                        <div class="accordion-body pt-3">
                                            <div class="col-sm-12 col-lg-12">
                                                <div class="card card-sm">
                                                    <a href="#" class="d-block">
                                                        <img src="{{ asset('') }}file/rekrutment/lowongan-kerja/<?php  echo $gambar; ?>" class="card-img-top">
                                                    </a>
                                                    
                                                    <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <div>Waktu Buka  <label class="font-color-small-lowongan"><span id="tgl_bukalowongan_lihat"></span></label> s/d <label class="font-color-small-lowongan"> <span id="tgl_tutuplowongan_lihat"></span></label></div>
                                                                    <div><span id="deskripsilowongan_lihat"></span></div>

                                                                    

                                                                    
                                                                                

                                                                    <div class="text-muted hight-top">
                                                                                        <a href="#" class="btn btn-outline-warning">
                                                                                            TUTUP
                                                                                        </a>
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
    
<!-- ======================== Modal detail lowongan ============================== -->

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_lowongan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Yakin Mau Hapus Lowongan.?</div>
            <div>Mengahapus Lowongan, berarti juga menghapus semua data berkaitan lowongan tersebut dari database.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="btn-hapus_lowongan" data-bs-dismiss="modal">Ya, Hapus Data Lowongan</button>
        </div>
        </div>
    </div>
</div>
            
        </div>
        
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">

                <div class="page-header d-print-none">
                        <div class="row align-items-center">
                            <div class="col">
                                    <h2 class="page-title">
                                        Data Lowongan Pekerjaan
                                    </h2>
                            </div>
                        </div>
                </div>

                <?php if ($dahboard_akun_cookie->akses->akses == 'Admin'): ?>
                    <div class="col-xl-8">
                        <div class="card font-size-cv-">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Perusahaan</th>
                                        <th>Judul</th>
                                        <th>Tanggal Buka</th>
                                        <th>Tanggal Tutup</th>
                                        <th>Status</th>
                                        <th class="w-1"></th>
                                        <th class="w-1"></th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                            <tbody>
                                <?php if (count($dahboard_Lowongan_Kerja) > 0): ?>
                                
                                    <?php foreach ($dahboard_Lowongan_Kerja as $key_dahboard_Lowongan_Kerja): ?>
                                        <?php 
                                            date_default_timezone_set('Asia/Jakarta');
                                            $tgl_buka = $key_dahboard_Lowongan_Kerja->tgl_buka;
                                            $tgl_tutup = $key_dahboard_Lowongan_Kerja->tgl_tutup;
                                            $status = $key_dahboard_Lowongan_Kerja->status;
                                            $tgl_tetap = date('Y-m-d');
                                        ?>
                                        
                                        
                                            <tr>
                                                <td data-label="Title" >
                                                        <div class="text-muted">    
                                                            {{$key_dahboard_Lowongan_Kerja->perusahaan->nama}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <div class="text-muted">    
                                                            {{$key_dahboard_Lowongan_Kerja->judul}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <!-- <div class="text-muted">    
                                                            <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                        </div> -->
                                                        <div class="text-muted">    
                                                            {{$key_dahboard_Lowongan_Kerja->tgl_buka}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <!-- <div class="text-muted">    
                                                            <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                        </div> -->
                                                        <div class="text-muted">    
                                                            {{$key_dahboard_Lowongan_Kerja->tgl_tutup}}
                                                        </div>
                                                </td>
                                                <td>
                                                    <?php if ($tgl_tetap < $tgl_buka): ?>
                                                        <small class="font-color-small container">Coming</small>
                                                    <?php elseif ($tgl_tetap <= $tgl_tutup): ?>
                                                        <small class="font-color-small-info container">Buka</small>  
                                                    <?php else: ?>     
                                                        <small class="font-color-small- container">Tutup</small>                
                                                    <?php endif ?>
                                                </td>
                                                <?php if ($dahboard_akun_cookie->akses->akses == 'Admin'): ?>
                                                    <td>  
                                                            <!-- <a href="#" class="view_lihat_lowongan" 
                                                                                                data-idlowongan="{{$key_dahboard_Lowongan_Kerja->id}}"
                                                                                                data-judul="{{$key_dahboard_Lowongan_Kerja->judul}}"
                                                                                                data-deskripsi="{{$key_dahboard_Lowongan_Kerja->deskripsi}}"
                                                                                                data-tgl_buka="{{$key_dahboard_Lowongan_Kerja->tgl_buka}}"
                                                                                                data-tgl_tutup="{{$key_dahboard_Lowongan_Kerja->tgl_tutup}}"
                                                                                                data-gambar="{{$key_dahboard_Lowongan_Kerja->nama_file}}"
                                                                                            > -->
                                                            <a href="{{ asset('') }}file/rekrutment/lowongan-kerja/{{$key_dahboard_Lowongan_Kerja->nama_file}}" target="_blank">
                                                                <span class="badge bg-success me-1 center-foto ">
                                                                    <div class="ringht-jabatan">
                                                                        <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                    </div>
                                                                </span>
                                                            </a>
                                                    </td>

                                                    <td>  
                                                            <a class="hapus_lowongan" data-bs-toggle="modal" data-bs-target="#model_hapus_lowongan"  href="{{route('hapus-lowongan')}}?id={{Crypt::encrypt($key_dahboard_Lowongan_Kerja->id)}}">
                                                                <span class="badge bg-danger me-1 center-foto ">
                                                                    <div class="ringht-jabatan">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                    </div>
                                                                </span>
                                                            </a>
                                                    </td>

                                                    <td>
                                                        <a href="#" class="view_edit_lowongan" 
                                                                                            data-idlowongan="{{$key_dahboard_Lowongan_Kerja->id}}"
                                                                                            data-judul="{{$key_dahboard_Lowongan_Kerja->judul}}"
                                                                                            data-deskripsi="{{$key_dahboard_Lowongan_Kerja->deskripsi}}"
                                                                                            data-tgl_buka="{{$key_dahboard_Lowongan_Kerja->tgl_buka}}"
                                                                                            data-tgl_tutup="{{$key_dahboard_Lowongan_Kerja->tgl_tutup}}"
                                                                                        >
                                                            <span class="badge bg-warning me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                                </div>
                                                            </span>
                                                        </a>
                                                    </td>
                                                <?php else: ?>
                                                <?php endif ?>
                                            </tr>
                                        
                                    <?php endforeach ?>
                                <?php else: ?>
                                        <tr>
                                            <td colspan='8' class="center-"> Tidak Ada Data </td>
                                        </tr>
                                <?php endif ?>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-4 font-size-cv-">
                        
                            <div class="card ">
                                <div class="container">
                                        <form  action="{{route('create-lowongan')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="row">
                                            <input type="hidden" class="form-control" name="id" id="idlowongan">
                                                    
                                                <div class="mb-3 hight-top-">
                                                    <label class="form-label required">Judul Lowongan</label>
                                                    <input type="text" class="form-control" name="judul_lowongan" id="judullowongan" placeholder="Judul Lowongan Maksimal 5 Kata" onkeyup="this.value = this.value.toUpperCase()" required>
                                                    <span id="name_error" class="text-danger font-size-info-alert"></span>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label required">Deskripsi Lowongan</label>
                                                    <textarea class="form-control" id="deskripsilowongan" name="deskripsi_owongan" placeholder="Deskripsi Lowongan" required></textarea>
                                                    <span id="alamat_ktp_error" class="text-danger font-size-info-alert"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                                            <div class="row">
                                                            <div class="col-xl-6 col-md-6 col-sm-6">
                                                                <label class="form-label required">Tanggal Buka</label>
                                                                <input type="date" class="form-control" name="tanggal_buka" id="tgl_bukalowongan" placeholder="Tanggal Buka..."  required>
                                                            </div>
                                                            <div class="col-xl-6 col-md-6 col-sm-6">
                                                                <label class="form-label required">Tanggal Tutup</label>
                                                                <input type="date" class="form-control" name="tanggal_tutup" id="tgl_tutuplowongan" placeholder="Tanggal Tututp..." required>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-md-12 col-sm-12">
                                                                    <label class="form-label required">Gambar Lowongan</label>
                                                                    <input type="file" class="form-control" id="preview_gambar" name="gambar_lowongan" required>
                                                                </div>
                                                                <div class="col-xl-6 col-md-12 col-sm-12">
                                                                
                                                                    <span class="form-check-label font-color-small font-size-info" >Info.!! Foto Harus bertype JPG / PNG dan gambar tidak boleh lebih besar dari 1MB</span>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="bottom-top-jabatan">
                                                    <button type="submit"  class="btn btn-warning active w-100">
                                                        Create Lowongan
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                </div>
                            </div>

                        

                        
                    </div>
                <?php else: ?>
                    <div class="col-xl-12">
                        <div class="card font-size-cv-">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Perusahaan</th>
                                    <th>Judul</th>
                                    <th>Tanggal Buka</th>
                                    <th>Tanggal Tutup</th>
                                    <th>Status</th>
                                    <th class="w-1"></th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($dahboard_Lowongan_Kerja) > 0): ?>
                                
                                    <?php foreach ($dahboard_Lowongan_Kerja as $key_dahboard_Lowongan_Kerja): ?>
                                        <?php 
                                            date_default_timezone_set('Asia/Jakarta');
                                            $tgl_buka = $key_dahboard_Lowongan_Kerja->tgl_buka;
                                            $tgl_tutup = $key_dahboard_Lowongan_Kerja->tgl_tutup;
                                            $status = $key_dahboard_Lowongan_Kerja->status;
                                            $tgl_tetap = date('Y-m-d');
                                        ?>
                                        
                                        
                                            <tr>
                                                <td data-label="Title" >
                                                        <div class="text-muted">    
                                                            {{$key_dahboard_Lowongan_Kerja->perusahaan->nama}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <div class="text-muted">    
                                                            {{$key_dahboard_Lowongan_Kerja->judul}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <!-- <div class="text-muted">    
                                                            <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                        </div> -->
                                                        <div class="text-muted">    
                                                            {{$key_dahboard_Lowongan_Kerja->tgl_buka}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <!-- <div class="text-muted">    
                                                            <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                        </div> -->
                                                        <div class="text-muted">    
                                                            {{$key_dahboard_Lowongan_Kerja->tgl_tutup}}
                                                        </div>
                                                </td>
                                                <td>
                                                    <?php if ($tgl_tetap < $tgl_buka): ?>
                                                        <small class="font-color-small container">Coming</small>
                                                    <?php elseif ($tgl_tetap <= $tgl_tutup): ?>
                                                        <small class="font-color-small-info container">Buka</small>  
                                                    <?php else: ?>     
                                                        <small class="font-color-small- container">Tutup</small>                
                                                    <?php endif ?>
                                                </td>
                                                <td>  
                                                        <!-- <a href="#" class="view_lihat_lowongan" 
                                                                                            data-idlowongan="{{$key_dahboard_Lowongan_Kerja->id}}"
                                                                                            data-judul="{{$key_dahboard_Lowongan_Kerja->judul}}"
                                                                                            data-deskripsi="{{$key_dahboard_Lowongan_Kerja->deskripsi}}"
                                                                                            data-tgl_buka="{{$key_dahboard_Lowongan_Kerja->tgl_buka}}"
                                                                                            data-tgl_tutup="{{$key_dahboard_Lowongan_Kerja->tgl_tutup}}"
                                                                                            data-gambar="{{$key_dahboard_Lowongan_Kerja->nama_file}}"
                                                                                        > -->
                                                        <a href="{{ asset('') }}file/rekrutment/lowongan-kerja/{{$key_dahboard_Lowongan_Kerja->nama_file}}" target="_blank">
                                                            <span class="badge bg-success me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td>
                                                <td>  
                                                        <a class="hapus_lowongan" data-bs-toggle="modal" data-bs-target="#model_hapus_lowongan"  href="{{route('hapus-lowongan')}}?id={{Crypt::encrypt($key_dahboard_Lowongan_Kerja->id)}}">
                                                            <span class="badge bg-danger me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td>
                                            </tr>
                                        
                                    <?php endforeach ?>
                                <?php else: ?>
                                        <tr>
                                            <td colspan='7' class="center-"> Tidak Ada Data </td>
                                        </tr>
                                <?php endif ?>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
          </div>
        </div>