<?php if (session()->has('alert-peringatan')): ?>
    <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
<?php endif ?>

<?php if (session()->has('alert-success-karyawan')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>

<div class="container-xl">

<!-- ======================== Model Expired Users ======================== -->
<div class="modal modal-blur fade" id="model_expired" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Yakin Mau Status Non Aktif / Expired Users.?</div>
            <div>Status Non Aktif / Expired Users otomatis akan memindahkan status Buka jadi Status Non Aktif / Expired Users.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="btn-expired" data-bs-dismiss="modal">Ya, Non Aktifkan Akun</button>
        </div>
        </div>
    </div>
</div>


<!-- ======================== Modal tambah karyawan ============================== -->
<div class="modal modal-blur fade" id="tambah-karyawan_" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Alihkan Data Jadi Karyawan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('create-karyawan-recruitment')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                      <div class="modal-body">
                            <input type="hidden" class="form-control" id="data_id_tambah_k" name="id_akun" placeholder="Your report name">
                            <input type="hidden" class="form-control" id="id_akses_tambah_k" name="id_akses" placeholder="Your report name">
                            
                                <!-- <div class="mb-3">
                                    <label class="form-label required">Status Kepegawaian</label>
                                    <div >
                                      <select class="form-select" name="status_kepegawaian">
                                        <option value="Kontrak">            Kontrak</option>
                                        <option value="Tetap">              Tetap</option>
                                        <option value="Kurir Even">         Kurir Even</option>
                                        <option value="Kurir Freelance">    Kurir Freelance</option>
                                        <option value="Outshorcing">        Outshorcing</option>
                                      </select>
                                    </div>
                                  </div> -->

                                <div class="mb-3">

                                    <label class="form-label required" >NIK Karyawan</label>
                                    <input type="text" class="form-control nama" name="nik"   placeholder="Nik Karyawan" required>
                                </div>
                                
                                <hr>

                                <div class="mb-3">

                                    <label class="form-label required" >Dingtalk</label>
                                    <input type="text" class="form-control nama" name="dingtalk" id="data_id"  placeholder="Your report Akun Dingtalk" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label required" >Nomor Rekening</label>
                                    <input type="text" class="form-control nama" name="no_rek" id="data_id"  placeholder="Your report Nomor Rekening" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label required"  >Nama Bank</label>
                                    <input type="text" class="form-control nama" name="bank" id="data_id"  placeholder="Your report name bank"  onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label required" >Kode Bank</label>
                                    <input type="text" class="form-control nama" name="kode" id="data_id"  placeholder="Your report kode bank" required>
                                </div>

                                <hr>

                                
                            
                            
                      </div>
                      <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Create new Karyawan
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
<!-- ======================== Modal tambah karyawan ============================== -->

<!-- ======================== Modal pesan ============================== -->
<div class="modal modal-blur fade" id="pesan" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Buat Pesan Pemanggilan Calon User</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('create-pesan')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                      <div class="modal-body">
                            <input type="hidden" class="form-control" id="data_id_aply" name="data_id_aply" placeholder="Your report name">
                            
                            
                                <div class="mb-3">
                                    <label class="form-label required">Tulis Pesan</label>
                                    <textarea class="form-control" name="pesan" placeholder="Tulis Pesan"  required></textarea>
                                </div>
                            
                            
                            
                      </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                        Cancel
                                    </a>
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                        Send Pesan
                                    </button>
                                </div>
                </form>
            </div>
        </div>
    </div>
<!-- ======================== Modal pesan ============================== -->

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_orang_user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Yakin Mau Hapus Lowongan.?</div>
            <div>Mengahapus Lowongan, berarti juga menghapus semua data berkaitan lowongan tersebut dari database.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="btn-hapus_orang_users" data-bs-dismiss="modal">Ya, Hapus Data Lowongan</button>
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
                                        Data Orang Yang Mendaftar
                                    </h2>
                            </div>
                        </div>
                </div>

                <div class="col-xl-12">
                    <div class="card font-size-cv-">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Nik</th>
                                <!-- <th>Nama</th> -->
                                <!-- <th>Alamat</th> -->
                                <th>Terdaftar</th>
                                <!-- <th>Password</th> -->
                                <th>Pesan</th>
                                <th>Status</th>
                                <th ></th>
                                <th ></th>
                                <th ></th>
                                <th ></th>
                                <th ></th>
                                <th ></th>
                                <th ></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($dahboard_orang_lowongan) > 0): ?>
                            
                                <?php foreach ($dahboard_orang_lowongan as $key_dahboard_orang_lowongan): ?>
                                   
                                    <?php if (!isset($key_dahboard_orang_lowongan->akun->data_diri->nama_lengkap)): ?>
                                        <tr>
                                            <td colspan='13' class="center-"> Tidak Ada Data </td>
                                        </tr>
                                    <?php else: ?>
                                    
                                    
                                        <tr>
                                            <td data-label="Title" >
                                                    <div class="text-muted">    
                                                        {{$key_dahboard_orang_lowongan->akun->nik}}
                                                    </div>
                                            </td>
                                            <!-- <td data-label="Title" >
                                                    <div class="text-muted">    
                                                        {{$key_dahboard_orang_lowongan->akun->data_diri->nama_lengkap}}
                                                    </div>
                                            </td> -->
                                            <!-- <td data-label="Title" > -->
                                                    <!-- <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                    </div> -->
                                                    <!-- <div class="text-muted">    
                                                        {{$key_dahboard_orang_lowongan->akun->data_diri->alamat_ktp}}
                                                    </div>
                                            </td> -->
                                            <td data-label="Title" >
                                                    <!-- <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                    </div> -->

                                                    <?php if (!isset($key_dahboard_orang_lowongan->lowongan_kerja->judul)): ?>
                                                       
                                                            Tidak Ada Lowongan
                                                        
                                                    <?php else: ?>
                                                        <div class="text-muted"> 
                                                            {{$key_dahboard_orang_lowongan->lowongan_kerja->judul}}
                                                        </div>
                                                    <?php endif ?>
                                                    
                                            </td>
                                            <!-- <td data-label="Title" >
                                                    
                                                    <div class="text-muted"> 
                                                        {{$key_dahboard_orang_lowongan->akun->show_pass}}
                                                    </div>
                                            </td> -->
                                            <td data-label="Title" >
                                                    <!-- <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                    </div> -->
                                                    <div class="text-muted"> 
                                                        {{$key_dahboard_orang_lowongan->keterangan}}
                                                    </div>
                                            </td>

                                            <td data-label="Title" >
                                                    <!-- <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                    </div> -->
                                                    <?php if ($key_dahboard_orang_lowongan->status == 'Buka'): ?>
                                                        <span class="badge bg-success ms-auto">Buka</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-danger ms-auto">Expired</span>
                                                    <?php endif ?>
                                                    <!-- <div class="text-muted"> 
                                                        {{$key_dahboard_orang_lowongan->keterangan}}
                                                    </div> -->
                                            </td>

                                            <td>
                                            
                                            </td>

                                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin'): ?>
                                                <?php if ($key_dahboard_orang_lowongan->status == 'Expired'): ?>
                                                    <td>  
                                                           
                                                    </td>
                                                     <td>  
                                                           
                                                    </td>
                                                    <td>  
                                                           
                                                    </td>
                                                <?php endif ?>
                                                <td>  
                                                        <a href="{{route('detail-pelamar')}}?id={{Crypt::encrypt($key_dahboard_orang_lowongan->akun->id)}}" target="_blank">
                                                            <span class="badge bg-success me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td>
                                                <td>  
                                                        <a href="{{route('cv-pdf')}}?id={{Crypt::encrypt($key_dahboard_orang_lowongan->akun->id)}}" target="_blank">
                                                            <span class="badge bg- me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 11 15 14" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td>
                                                <?php if ($key_dahboard_orang_lowongan->status == 'Buka'): ?>
                                                    <td>  
                                                        <a class="tambah-karyawan_" data-bs-toggle="modal" data-bs-target="#tambah-karyawan_"  href="" data-id="{{$key_dahboard_orang_lowongan->akun->id}}">
                                                            <span class="badge bg-info me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/circle-plus -->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><line x1="9" y1="12" x2="15" y2="12" /><line x1="12" y1="9" x2="12" y2="15" /></svg></div>
                                                            </span>
                                                        </a>
                                                    </td>
                                                <?php endif ?>
                                                

                                                <td>  
                                                        <a class="hapus_orang_users" data-bs-toggle="modal" data-bs-target="#model_hapus_orang_user"  href="{{route('hapus-user')}}?id={{$key_dahboard_orang_lowongan->id}}">
                                                            <span class="badge bg-danger me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td>

                                                <?php if ($key_dahboard_orang_lowongan->status == 'Buka'): ?>
                                                    <td>  
                                                        <a class="pesan" data-bs-toggle="modal" data-bs-target="#pesan"  href="" data-id="{{$key_dahboard_orang_lowongan->id}}">
                                                            <span class="badge bg-success me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/message-circle-2 -->
	                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" /><line x1="12" y1="12" x2="12" y2="12.01" /><line x1="8" y1="12" x2="8" y2="12.01" /><line x1="16" y1="12" x2="16" y2="12.01" /></svg>
                                                                 </div>
                                                            </span>
                                                        </a>
                                                    </td>
                                                <?php endif ?>

                                                
                                                <?php if ($key_dahboard_orang_lowongan->status == 'Buka'): ?>
                                                    <td>  
                                                            <a class="expired_users" data-bs-toggle="modal" data-bs-target="#model_expired"  href="{{route('create-status')}}?id={{Crypt::encrypt($key_dahboard_orang_lowongan->id)}}">
                                                                <span class="badge bg-warning me-1 center-foto ">
                                                                    <div class="ringht-jabatan">
                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/circle-x -->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><path d="M10 10l4 4m0 -4l-4 4" /></svg>
                                                                    </div>
                                                                </span>
                                                            </a>
                                                    </td>
                                                <?php endif ?>

                                                
                                            <?php else: ?>
                                                <?php if ($key_dahboard_orang_lowongan->status == 'Buka'): ?>
                                                    
                                                    <!-- <td>  
                                                           
                                                    </td>
                                                     <td>  
                                                           
                                                    </td> -->
                                                    <td>  
                                                           
                                                    </td>
                                                    </td>
                                                     <td>  
                                                           
                                                    </td>
                                                    <td>  
                                                           
                                                    </td>
                                                    <td>  
                                                           
                                                    </td>

                                                    <td>  
                                                            <a href="{{route('cv')}}?id={{Crypt::encrypt($key_dahboard_orang_lowongan->akun->id)}}" target="_blank">
                                                                <span class="badge bg-success me-1 center-foto ">
                                                                    <div class="ringht-jabatan">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                    </div>
                                                                </span>
                                                            </a>
                                                    </td>
                                                    <td>  
                                                            <a href="{{route('cv-pdf')}}?id={{Crypt::encrypt($key_dahboard_orang_lowongan->akun->id)}}" target="_blank">
                                                                <span class="badge bg- me-1 center-foto ">
                                                                    <div class="ringht-jabatan">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 11 15 14" /></svg>
                                                                    </div>
                                                                </span>
                                                            </a>
                                                    </td>
                                                <?php endif ?>
                                                <?php if ($key_dahboard_orang_lowongan->status == 'Expired'): ?>
                                                    <td>  
                                                           
                                                    </td>
                                                     <td>  
                                                           
                                                    </td>
                                                    <td>  
                                                           
                                                    </td>
                                                    </td>
                                                     <td>  
                                                           
                                                    </td>
                                                    <td>  
                                                            <a href="{{route('cv')}}?id={{Crypt::encrypt($key_dahboard_orang_lowongan->akun->id)}}" target="_blank">
                                                                <span class="badge bg-success me-1 center-foto ">
                                                                    <div class="ringht-jabatan">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                    </div>
                                                                </span>
                                                            </a>
                                                    </td>
                                                    <td>  
                                                            <a href="{{route('cv-pdf')}}?id={{Crypt::encrypt($key_dahboard_orang_lowongan->akun->id)}}" target="_blank">
                                                                <span class="badge bg- me-1 center-foto ">
                                                                    <div class="ringht-jabatan">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 11 15 14" /></svg>
                                                                    </div>
                                                                </span>
                                                            </a>
                                                    </td>
                                                <?php endif ?>
                                            <?php endif ?>

                                        </tr>
                                    <?php endif ?>
                                    
                                <?php endforeach ?>
                            <?php else: ?>
                                    <tr>
                                        <td colspan='13' class="center-"> Tidak Ada Data </td>
                                    </tr>
                            <?php endif ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
               
            </div>
          </div>
        </div>