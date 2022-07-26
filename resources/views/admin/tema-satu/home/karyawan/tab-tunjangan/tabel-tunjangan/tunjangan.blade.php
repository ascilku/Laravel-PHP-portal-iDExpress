<div class="container-xl">

          <!-- Page title -->

<?php if (session()->has('alert-peringatan')): ?>
      <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
<?php endif ?>


            
        </div>

<!-- ======================== Modal detail karyawan ============================== -->

<?php if (!isset($tunjangan_lihat)): ?>
    <?php else: ?>
        <div class="modal modal-blur fade" id="detail-penempatan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hostory Tunjangan</h5>
                    <a href="{{route('tunjangan')}}">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
                </div>
                    <div class="modal-body">
                        @include('admin.tema-satu.home.karyawan.tab-tunjangan.detail.detail-tunjangan')
                    </div>
               
                </div>
            </div>
        </div>
    <?php endif ?>

<!-- ======================== Modal Tunjangan ============================== -->
<div class="modal modal-blur fade" id="modal-tunjanganbuat_" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Buat Tunjangan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('create-tunjangan')}}" method="post">
                {{ csrf_field() }}
                      <div class="modal-body">
                                <input type="hidden" class="form-control" id="data_id_" name="id" placeholder="Your report name">
                                <br>

                                   
                                <div class="mb-3">
                                    <label class="form-label">Status Karyawan</label>
                                    <input type="text" class="form-control bg-menu" id="data_nama"  readonly>
                                    <span id="file_error" class="text-danger font-size-info-alert"></span>
                                </div>
                                  
                                <hr>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-sm-6">
                                                    <label class="form-label required">Tunjangan Jabatan</label>
                                                    <input type="number" class="form-control " name="tunj-jabatan" value="0" required>
                                                
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-sm-6">
                                                    <label class="form-label required">Tunjangan Kendaraan</label>
                                                    <input type="number" class="form-control " name="tunj-kendaraan" value="0" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="mb-3">
                                    <label class="form-label required">Pendapatan Lain</label>
                                    <input type="number" class="form-control " name="tunj-lain" value="0" required>
                                 </div>

                            
                                
                           
                      </div>
                   
                      <div class="modal-footer">
                          <!-- <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a> -->
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Buat Tunjangan
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
<!-- ======================== Akhir Modal Tambah Data Karyawan Exel ======================== -->


    <!-- ======================== Model Hapus Tunjangan ======================== -->
    <div class="modal modal-blur fade" id="model_hapus_tunjangan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Yakin Mau Hapus Tunjangan Ini.?</div>
                <div>Menghapus Tunjangan ini ialah anda akan menghapus semua tunjangna karyawan ini.</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="btn-yes_hapus_tunjangan" data-bs-dismiss="modal">Ya, Hapus Tunjagan</button>
            </div>
            </div>
        </div>
    </div>

    <!-- ======================== Modal Tunjangan ============================== -->
    <div class="modal modal-blur fade" id="modal-tunjanganedit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Edit Tunjangan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('create-tunjangan')}}" method="post">
                    {{ csrf_field() }}
                        <div class="modal-body">
                                    <input type="hidden" class="form-control" id="data_id_tunjangan_edit" name="id_tunjangan" placeholder="Your report name">
                                    <input type="hidden" class="form-control" id="data_id_akun_" name="id_tunjangan_akun" placeholder="Your report name">
                                    <br>

                                    
                                    <div class="mb-3">
                                        <label class="form-label">Status Karyawan</label>
                                        <input type="text" class="form-control bg-menu" id="data_nama_lengkap_tunjangan_edit"  readonly>
                                        <span id="file_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                    
                                    <hr>

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6 col-sm-6">
                                                        <label class="form-label required">Tunjangan Jabatan</label>
                                                        <input type="text" class="form-control " id="data_jabatan_tunjangan_edit" name="tunj-jabatan"  required>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-sm-6">
                                                        <label class="form-label required">Tunjangan Kendaraan</label>
                                                        <input type="text" class="form-control " id="data_kendaraan_tunjangan_edit" name="tunj-kendaraan" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="mb-3">
                                        <label class="form-label required">Pendapatan Lain</label>
                                        <input type="text" class="form-control " id="data_lain_tunjangan_edit" name="tunj-lain"  required>
                                    </div>

                                
                                    
                            
                        </div>
                    
                        <div class="modal-footer">
                            <!-- <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                Cancel
                            </a> -->
                            <button type="submit" class="btn btn-primary ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                Edit Tunjangan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- ======================== Akhir Modal Tambah Data Karyawan Exel ======================== -->

    <!-- ======================== Model Hapus Karyawan ======================== -->
    <div class="modal modal-blur fade" id="model_hapus_semua" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-body">
                                <div class="modal-title">Yakin Mau Hapus Karyawan.?</div>
                                <div>Mengahapus Karyawan, berarti juga menghapus semua data berkaitan karyawan tersebut dari database.</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger" id="btn-hapus_semua" data-bs-dismiss="modal">Ya, Hapus Data Karyawan</button>
                            </div>
                            </div>
                        </div>
                    </div>


    <!-- ======================== Modal Tambah Data Karyawan Exel ============================== -->
    <div class="modal modal-blur fade" id="modal-create-karyawan-exel" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Upload Data Karyawan Bentuk Exel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('create-karyawan-aktif-exel')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="modal-body">
                                <!-- <div class="mb-3">
                                    <label class="form-label" >Name</label>
                                    <input type="text" class="form-control nama" id="data_id" name="example-text-input" placeholder="Your report name">
                                </div> -->
                                <input type="hidden" class="form-control" id="data_id" name="id_perusahaan" placeholder="Your report name">
                                
                                
                                
                                <div class="mb-3">
                                    <label class="form-label required">Create Exel Karyawan</label>
                                    <input type="file" class="form-control" id="file" name="file" placeholder="No WhatsApp Aktif..." required>
                                    <span id="file_error" class="text-danger font-size-info-alert"></span>
                                </div>
                                <!-- <label class="form-label">Status Kepegawaian</label>
                                <div class="form-selectgroup-boxes row mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-selectgroup-item">
                                            <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                                            <span class="form-selectgroup-label d-flex align-items-center p-3">
                                                <span class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </span>
                                                <span class="form-selectgroup-label-content">
                                                        <span class="form-selectgroup-title strong mb-1">Aktif</span>
                                                        <span class="d-block text-muted">Pilih Aktif Jika Status Karyawan Saat Ini Masih Aktif di Perusahaan</span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-selectgroup-item">
                                            <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                                            <span class="form-selectgroup-label d-flex align-items-center p-3">
                                                <span class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </span>
                                                <span class="form-selectgroup-label-content">
                                                    <span class="form-selectgroup-title strong mb-1">Tidak Aktif</span>
                                                    <span class="d-block text-muted">Pilih Tidak Aktif Jika Status Karyawan Saat Ini Sudah Tidak Aktif di Perusahaan</span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="mb-3">
                                            <label class="form-label">Report url</label>
                                            <div class="input-group input-group-flat">
                                                <span class="input-group-text">
                                                https://tabler.io/reports/
                                                </span>
                                                <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Visibility</label>
                                        <select class="form-select">
                                            <option value="1" selected>Private</option>
                                            <option value="2">Public</option>
                                            <option value="3">Hidden</option>
                                        </select>
                                    </div>
                                    </div>
                                </div> -->
                        </div>
                        <!-- <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Client name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Reporting period</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label class="form-label">Additional information</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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
    <!-- ======================== Akhir Modal Tambah Data Karyawan Exel ======================== -->

  

        
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">


              <div class="col-12">
                <div class="card font-size-cv-">
                  <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>Profile Pegawai</th>
                            <th>Jabatan</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Tunjangan Kendaraan</th>
                            <th>Pendapatan Lain</th>
                            <th class="w-1"></th>
                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                            
                                <th class="w-1"></th>
                                <th class="w-1"></th>
                                <th class="w-1"></th>

                            <?php else: ?>
                            <?php endif ?>
                        </tr> 
                      </thead>
                      <tbody>

                          <?php if (count($dahboard_karyawan) > 0): ?>
                              <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
                                    <?php if (!isset($key_dahboard_karyawan->akun->tunjangan) ): ?>
                                    <?php else: ?>
                                        <tr>
                                            <td data-label="Name" >
                                                <div class="d-flex py-1 align-items-center">
                                                    <?php if ($key_dahboard_karyawan->akun->data_diri->foto): ?>
                                                        <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$key_dahboard_karyawan->akun->data_diri->foto}})"></span>
                                                    <?php else: ?>
                                                        <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/profil.png)"></span>
                                                    <?php endif ?>
                                                    <div class="flex-fill">
                                                            <?php if ($key_dahboard_karyawan->akun->data_diri): ?>
                                                                <div class="font-weight-medium">{{$key_dahboard_karyawan->akun->data_diri->nama_lengkap}}</div>
                                                                <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan->akun->nik}}</a></div>
                                                            <?php else: ?>
                                                                <div class="font-weight-medium">Tidak Ada</div>
                                                                <div class="text-muted"><a href="#" class="text-reset">IDE-Tidak Ada</a></div>
                                                            <?php endif ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-label="Title" >
                                                    <?php if (!isset($key_dahboard_karyawan->akun->jabatan_gaji->jabatan)): ?>
                                                        <div>Tidak Ada </div>
                                                    <?php else: ?>
                                                        <div>{{$key_dahboard_karyawan->akun->jabatan_gaji->jabatan->nama_jabatan}} </div>
                                                    <?php endif ?>
                                                <div class="text-muted"></div>
                                            </td>
                                            <td data-label="Title" >
                                                {{$key_dahboard_karyawan->akun->tunjangan->tunj_jabatan}}
                                                
                                            </td>
                                            <!-- <td data-label="Title" >
                                                <div>TH_PWX01</div>
                                                
                                            </td> -->
                                            <td class="text-muted" data-label="Role" >
                                                {{$key_dahboard_karyawan->akun->tunjangan->tunj_kendaraan}}    
                                            </td>
                                            <td class="text-muted" data-label="Role" >
                                                {{$key_dahboard_karyawan->akun->tunjangan->pendapatan_lain}}    
                                            </td>
                                            <td>  
                                                    <a href="{{route('tunjangan')}}?id={{$key_dahboard_karyawan->akun->id}}">
                                                        <span class="badge bg-success me-1 center-foto ">
                                                            <div class="ringht-jabatan">
                                                                <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                            </div>
                                                        </span>
                                                    </a>
                                            </td>

                                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                                <td>
                                                    <a href="#" class="view_edit_Tunjangan" 
                                                                                        data-nama_lengkap="{{$key_dahboard_karyawan->akun->data_diri->nama_lengkap}}" 
                                                                                        data-id="{{$key_dahboard_karyawan->akun->tunjangan->id}}" 
                                                                                        data-akun_="{{$key_dahboard_karyawan->akun->tunjangan->id_akun}}" 
                                                                                        data-jabatan="{{$key_dahboard_karyawan->akun->tunjangan->tunj_jabatan}}"
                                                                                        data-kendaraan="{{$key_dahboard_karyawan->akun->tunjangan->tunj_kendaraan}}"
                                                                                        data-lain="{{$key_dahboard_karyawan->akun->tunjangan->pendapatan_lain}}"
                                                                                    >
                                                        <span class="badge bg-warning me-1 center-foto ">
                                                            <div class="ringht-jabatan">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                            </div>
                                                        </span>
                                                    </a>
                                                </td>

                                                <td>  
                                                        <a class="hapus_tunjangan" data-bs-toggle="modal" data-bs-target="#model_hapus_tunjangan" href="{{route('hapus-tunjangan')}}?id={{Crypt::encrypt($key_dahboard_karyawan->akun->tunjangan->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_karyawan->akun->tunjangan->id_akun)}}&&status={{Crypt::encrypt('hapus')}}" >
                                                            <span class="badge bg-danger me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td>

                                                <td>  
                                                    <a href="#" class="view_tunjangan_buat_" data-id="{{$key_dahboard_karyawan->akun->id}}" data-nama="{{$key_dahboard_karyawan->akun->data_diri->nama_lengkap}}">  
                                                        <span class="badge bg-info me-1 center-foto ">
                                                            <div class="ringht-jabatan">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/new-section -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="9" y1="12" x2="15" y2="12" /><line x1="12" y1="9" x2="12" y2="15" /><path d="M4 6v-1a1 1 0 0 1 1 -1h1m5 0h2m5 0h1a1 1 0 0 1 1 1v1m0 5v2m0 5v1a1 1 0 0 1 -1 1h-1m-5 0h-2m-5 0h-1a1 1 0 0 1 -1 -1v-1m0 -5v-2m0 -5" /></svg>
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg>  -->
                                                            </div>
                                                        </span>
                                                    </a>
                                                </td>
                                            <?php else: ?>
                                            <?php endif ?>

                                        </tr>
                                    <?php endif ?>
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
              
            </div>
          </div>
        </div>

        <script>
        $(document).ready(function(){
            setTimeout(function(){
                
                $("#detail-penempatan").modal({
                        backdrop: 'static',
                        keyboard: true
                }); 
                $('#detail-penempatan').modal('show');
            }, 200);
            });
    </script>
       