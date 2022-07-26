<div class="container-xl">
            <!-- <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12 col-sm-12 ">
                              <div class="row">
                                  <div class="col-xl-12 col-md-12 col-sm-12  col-12 center-foto">
                                      <a href="" class="btn btn-icon" aria-label="Twitter">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 17 15 14" /></svg>
                                      </a>
                                     <a href="#" class="btn  btn-icon view_data" aria-label="Twitter" data-flashdata="{{$dahboard_akun_cookie->id_perusahaan}}" >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="16" height="16" rx="2" /><line x1="9" y1="12" x2="15" y2="12" /><line x1="12" y1="9" x2="12" y2="15" /></svg>
                                      </a>
                                      <a href="#" class="btn  btn-icon view_data_exel" aria-label="Twitter" data-flashdata="{{$dahboard_akun_cookie->id_perusahaan}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 11 15 14" /></svg>
                                      </a>
                                      <a href="#" class="btn  btn-icon" aria-label="Twitter">
                                            Tempalte PDF 
                                      </a>
                                  </div>
                              </div>
                                
                        </div>
                    </div>
            </div> -->
        </div>

<!-- ======================== Modal edit kontrak ============================== -->
<div class="modal modal-blur fade" id="modal-edit-kontrak-semua" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kontrak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('edit-kontrak')}}" method="post">
            {{ csrf_field() }}
                    <div class="modal-body">
                            <input type="hidden" class="form-control" id="data_id_kontrak_semua" name="id_kontrak" placeholder="Your report name">
                
                                
                            <div class="mb-3">
                                <label class="form-label">Nama Karyawan</label>
                                <input type="text" class="form-control bg-menu" id="data_nama_kontrak_semua"  readonly>
                                <span id="file_error" class="text-danger font-size-info-alert"></span>
                            </div>

                            <!-- <div class="mb-3">
                            <textarea id="konten" class="form-control" name="konten" rows="10" cols="50"></textarea>
                            </div> -->
                            <hr>

                            <label class="form-label">Jenis Kontrak</label>
                            <div class="form-selectgroup-boxes row mb-3">
                                <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                    <input type="radio" name="jenis" value="PKWT I" class="form-selectgroup-input">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">PKWT I</span>
                                        <span class="d-block text-muted">PKWT I untuk kontrak umum seperti office dan lain lain</span>
                                        </span>
                                    </span>
                                    </label>
                                </div>

                                <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                    <input type="radio" name="jenis" value="PKWT II" class="form-selectgroup-input">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">PKWT II</span>
                                        <span class="d-block text-muted">PKWT II kontrak Tekhusus coor TH, SPV, Admin, PCS</span>
                                        </span>
                                    </span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-selectgroup-boxes row mb-3">
                                <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                    <input type="radio" name="jenis" value="PKWT III" class="form-selectgroup-input">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">PKWT III</span>
                                        <span class="d-block text-muted">PKWT III kontrak Tekhusus untuk kurir kontrak</span>
                                        </span>
                                    </span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                    <input type="radio" name="jenis" value="PKKF" class="form-selectgroup-input">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">PKKF</span>
                                        <span class="d-block text-muted">PKKF kontrak Tekhusus untuk kurir freelance</span>
                                        </span>
                                    </span>
                                    </label>
                                </div>
                            </div>

                            
                            
                            

                            <!-- <div class="mb-3">
                                <label class="form-label required">Bulan Surat</label>
                                <input type="hidden" class="form-control" name="bulan" value="{{getRomawi(date('m'))}}" required>
                                <span id="file_error" class="text-danger font-size-info-alert"></span>
                            </div> -->

                            <!-- <div class="mb-3">
                                <label class="form-label required">Tahun Surat</label>
                                <input type="hidden" class="form-control" name="tahun" value="{{date('Y')}}" required>
                                <span id="file_error" class="text-danger font-size-info-alert"></span>
                            </div> -->

                            <div class="mb-3">
                                <label class="form-label required">Mulai Kontrak</label>
                                <input type="date" class="form-control" id="data_tanggal_awal_kontrak_semua" name="mulai" required>
                                <span id="file_error" class="text-danger font-size-info-alert"></span>
                            </div>

                            <div class="mb-3">
                                <label class="form-label required">Akhir Kontrak</label>
                                <input type="date" class="form-control" id="data_tanggal_akhir_kontrak_semua" name="akhir" required>
                                <span id="file_error" class="text-danger font-size-info-alert"></span>
                            </div>

                            
                        
                    </div>
                
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                        </a>
                        <button type="submit" class="btn btn-primary ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                            Edit Kontrak
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- ======================== Akhir Modal edit kontrak ======================== --> 

<!-- ======================== Lihat Kontrak ============================== -->

    <!-- <div class="modal modal-blur fade" id="lihat-kontrak-semua" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            
        <div class="col-md-12 col-xl-12">
                <div class="card">
                    
                    <div class="card-body text-center">
                        <div class="card-title mb-1 " ><span id="data_lihat_nama_semua"></span></div>
                        <div class="text-muted" id="data_lihat_nik_semua">VP Sales</div>
                    </div>
                    
                    
                    <div class="mb-3 ">
                        <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-sm-6 text-center "> Jenis : 
                                    <span class="badge bg-info me-1 ">
                                        <div class="text-muted "><span class="font-color-white" id="data_lihat_jenis_semua"></span></div>
                                    </span>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6 "> Akhir Kontrak: 
                                    <span class="badge bg-danger me-1 ">
                                        <div class="text-muted "><span class="font-color-white" id="data_lihat_tanggal_akhir_semua"></span></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <form action="{{route('kontrak_print')}}">
                    <form action="{{route('kontrak_print')}}" method="post" target="_blank">
                    {{ csrf_field() }}
                        <input type="hidden" id="data_lihat_id_semua" name="id_">
                            
                            <button type="submit" class="btn btn-outline-success" style="width:100%" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 17 15 14" /></svg>Cetak Kontrak
                            </button>
                        
                    </form>
                    
                </div>
                </div>

        </div>
        </div>
    </div> -->

    <?php if (!isset($dahboard_kontrak)): ?>
    <?php else: ?>
        <div class="modal modal-blur fade" id="detail-kontrak" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">History Kontrak</h5>
                    <a href="{{route('kontrak', 'semua-kontrak')}}">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
                </div>
                    <div class="modal-body">
                        @include('admin.tema-satu.home.karyawan.tab-kontrak.detail.detail-kontrak')
                    </div>
               
                </div>
            </div>
        </div>
    <?php endif ?>

<!-- ======================== Modal create kontrak ============================== -->
<div class="modal modal-blur fade" id="modal-kontrak-semua" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Buat Kontrak</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('create-kontrak')}}" method="post">
                {{ csrf_field() }}
                      <div class="modal-body">
                                <input type="hidden" class="form-control" id="data_id_create_baru" name="id_akun" placeholder="Your report name">
                                <!-- <input type="hidden" class="form-control" name="jenis" value="PKWT" required> -->
                                <input type="hidden" class="form-control" name="bulan" value="{{getRomawi(date('m'))}}" required>
                                <input type="hidden" class="form-control" name="tahun" value="{{date('Y')}}" required>
                                   
                                <div class="mb-3">
                                    <label class="form-label">Nama Karyawan</label>
                                    <input type="text" class="form-control bg-menu" id="data_nama_create_baru"  readonly>
                                    <span id="file_error" class="text-danger font-size-info-alert"></span>
                                </div>

                                <!-- <div class="mb-3">
                                <textarea id="konten" class="form-control" name="konten" rows="10" cols="50"></textarea>
                                </div> -->
                                <hr>

                                <div class="mb-3">
                                    <label class="form-label">Nomor Kontrak</label>
                                    <input type="text" class="form-control" name="nomor_kontrak">
                                    <span id="file_error" class="text-danger font-size-info-alert"></span>
                                </div>

                                <label class="form-label">Pilih Tunjangan (Boleh Tidak Dipilih)</label>

                                <div class="form-selectgroup-boxes row mb-3">
                                    <div class="col-lg-12">
                                        <label class="form-selectgroup-item">
                                        <input type="checkbox" name="tunjangan" value="ya" class="form-selectgroup-input" >
                                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Tunjangan</span>
                                            <span class="d-block text-muted">Tunjangan boleh tidak dipilih, jika dipilih akan mengambil tunjangan yang terbaru dari sistem</span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                </div>

                                <label class="form-label">Jenis Kontrak</label>
                                <div class="form-selectgroup-boxes row mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-selectgroup-item">
                                        <input type="radio" name="jenis" value="PKWT I" class="form-selectgroup-input" checked>
                                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">PKWT I</span>
                                            <span class="d-block text-muted">PKWT I untuk kontrak umum seperti office dan lain lain</span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-selectgroup-item">
                                        <input type="radio" name="jenis" value="PKWT II" class="form-selectgroup-input">
                                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">PKWT II</span>
                                            <span class="d-block text-muted">PKWT II kontrak Tekhusus coor TH, SPV, Admin, PCS</span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-selectgroup-boxes row mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-selectgroup-item">
                                        <input type="radio" name="jenis" value="PKWT III" class="form-selectgroup-input">
                                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">PKWT III</span>
                                            <span class="d-block text-muted">PKWT III kontrak Tekhusus untuk kurir kontrak</span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-selectgroup-item">
                                        <input type="radio" name="jenis" value="PKKF" class="form-selectgroup-input">
                                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">PKKF</span>
                                            <span class="d-block text-muted">PKKF kontrak Tekhusus untuk kurir freelance</span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                </div>

                                
                                
                                

                                <!-- <div class="mb-3">
                                    <label class="form-label required">Bulan Surat</label>
                                    <input type="hidden" class="form-control" name="bulan" value="{{getRomawi(date('m'))}}" required>
                                    <span id="file_error" class="text-danger font-size-info-alert"></span>
                                </div> -->

                                <!-- <div class="mb-3">
                                    <label class="form-label required">Tahun Surat</label>
                                    <input type="hidden" class="form-control" name="tahun" value="{{date('Y')}}" required>
                                    <span id="file_error" class="text-danger font-size-info-alert"></span>
                                </div> -->

                                <div class="mb-3">
                                    <label class="form-label required">Mulai Kontrak</label>
                                    <input type="date" class="form-control" name="mulai" required>
                                    <span id="file_error" class="text-danger font-size-info-alert"></span>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label required">Akhir Kontrak</label>
                                    <input type="date" class="form-control" name="akhir" required>
                                    <span id="file_error" class="text-danger font-size-info-alert"></span>
                                </div>

                                
                           
                      </div>
                   
                      <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Create new Kontrak
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
<!-- ======================== Akhir Modal create kontrak ======================== -->






        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">

              <div class="col-12">
                <div class="card font-size-cv-">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                            <th>Profile Pegawai</th>
                            <th>Jabatan Kontrak Ini</th>
                            <th>Penempatan Kontrak Ini</th>
                            <th>Tunjangan Kontrak Ini</th>
                            <th>Jenis</th>
                            <th>Mulai Kontrak</th>
                            
                            <!-- <th class="w-1"></th> -->
                            <th>Habis Kontrak</th>
                            <!-- <th class="w-1"></th> -->
                            
                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                <th>Status</th>
                                <th class="w-1"></th>
                                <th class="w-1"></th>
                                <th class="w-1"></th>
                            <?php else: ?>
                            <?php endif ?>
                            
                            
                        </tr>
                      </thead>
                      <tbody>

                          <?php if (count($dahboard_cek_karyawan_kontrak_aktif) > 0): ?>
                              <?php foreach ($dahboard_cek_karyawan_kontrak_aktif as $key_dahboard_cek_karyawan_kontrak_aktif): ?>

                                    <?php if (isset($key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak)): 
                                        // $tgl_sekarang = date('Y-m-d', strtotime('+30 days', strtotime(date('Y-m-d')))) ;  
                                        $tgl_sekarang       = date('Y-m-d') ;  
                                        $tgl_akhir          = date('Y-m-d', strtotime($key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->tanggal_akhir)); 
                                        
                                        $date_sekarang      = new DateTime($tgl_sekarang);
                                        $date_akhir         = new DateTime($tgl_akhir);
                                        
                                        $deadlain           = $date_sekarang->diff($date_akhir);
                                        $semua_          = $deadlain->format('%R%a days');
                                    ?>

                                       
                                            <tr>
                                                <td data-label="Name" >
                                                    <div class="d-flex py-1 align-items-center">
                                                        <?php if ($key_dahboard_cek_karyawan_kontrak_aktif->akun->data_diri->foto): ?>
                                                            <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->data_diri->foto}})"></span>
                                                        <?php else: ?>
                                                            <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/profil.png)"></span>
                                                        <?php endif ?>
                                                        <div class="flex-fill">
                                                                <?php if ($key_dahboard_cek_karyawan_kontrak_aktif->akun->data_diri): ?>
                                                                    <div class="font-weight-medium">{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->data_diri->nama_lengkap}}</div>
                                                                    <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->nik}}</a></div>
                                                                <?php else: ?>
                                                                    <div class="font-weight-medium">Tidak Ada</div>
                                                                        <?php if ($key_dahboard_cek_karyawan_kontrak_aktif->akun): ?>
                                                                            <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->nik}}</a></div>
                                                                        <?php else: ?>
                                                                            <div class="text-muted"><a href="#" class="text-reset">IDE-Tidak Ada</a></div>
                                                                        <?php endif ?>
                                                                <?php endif ?>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td data-label="Title" >
                                                        <?php if (!isset($key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->pkwt->riw_jabatan_gaji)): ?>
                                                            <div>Tidak Ada </div>
                                                        <?php else: ?>
                                                            <div>{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->pkwt->riw_jabatan_gaji->jabatan->nama_jabatan}} </div>
                                                        <?php endif ?>
                                                    <div class="text-muted"></div>
                                                </td>

                                                <td data-label="Title" >
                                                        <?php if (!isset($key_dahboard_cek_karyawan_kontrak_aktif->akun)): ?>
                                                            <div>Tidak Ada </div>
                                                        <?php else: ?>
                                                            <div>{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->pkwt->penempatan_wilayah_riw->penempatan->alokasi}} </div>
                                                        <?php endif ?>
                                                    <div class="text-muted"></div>
                                                </td>

                                                <?php if (!isset($key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->pkwt->rwy_tunjangan_pkwt)): ?>
                                                    <td><b>Tidak Ada Tunjangan</b></td>
                                                <?php else: ?>
                                                    <td><b>Ada Tunjangan</b></td>
                                                <?php endif ?>



                                                <td data-label="Title" >
                                                    <div>{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->jenis}} </div>
                                                        
                                                    <div class="text-muted"></div>
                                                </td>

                                                <td>  
                                                    <div class="text-muted">    
                                                        {{date('d F Y', strtotime($key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->tanggal_awal))}}
                                                    </div>
                                                </td> 

                                                <td>  
                                                    <div class="text-muted">    
                                                        <span class="badge bg-danger me-1">{{date('d F Y', strtotime($key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->tanggal_akhir))}}</span>
                                                    </div>
                                                </td> 
                                                    
                                                <td>  

                                                <?php if ($semua_ <= 30 && $semua_ > 0): ?>
                                                    <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Hampir Habis</span>
                                                    </div>
                                                <?php endif ?>

                                                <?php if ($semua_ <= 0): ?>
                                                    <div class="text-muted">    
                                                        <span class="badge bg-danger me-1">Kontrak Habis</span>
                                                    </div>
                                                <?php endif ?>

                                                <?php if ($semua_ > 30): ?>
                                                    <div class="text-muted">    
                                                        <span class="badge bg-info me-1">Aktif</span>
                                                    </div>
                                                <?php endif ?>
                                                    

                                                    
                                                </td> 

                                                <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>


                                                    <td>  
                                                            <a href="#" class="view_edit_kontrak_semua" 
                                                                                    data-nama="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->data_diri->nama_lengkap}}" 
                                                                                    data-id="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->id}}" 
                                                                                    data-tanggal_awal="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->tanggal_awal}}" 
                                                                                    data-tanggal_akhir="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->tanggal_akhir}}" 
                                                                                    data-jenis="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->jenis}}" 
                                                                                    >
                                                                <span class="badge bg-warning me-1 center-foto ">
                                                                    <div class="ringht-jabatan">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                                    </div>
                                                                </span>
                                                            </a>
                                                    </td>
                                                    <td>  
                                                        <a class="view_model_kontrak_semua" data-bs-toggle="modal" data-flashdata="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->id}}" data-nama="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->data_diri->nama_lengkap}}"  href="" >
                                                            <span class="badge bg-info me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="9" y1="12" x2="15" y2="12" /><line x1="12" y1="9" x2="12" y2="15" /><path d="M4 6v-1a1 1 0 0 1 1 -1h1m5 0h2m5 0h1a1 1 0 0 1 1 1v1m0 5v2m0 5v1a1 1 0 0 1 -1 1h-1m-5 0h-2m-5 0h-1a1 1 0 0 1 -1 -1v-1m0 -5v-2m0 -5" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                    </td>
                                                <?php else: ?>
                                                <?php endif ?>

                                                <td>  
                                                <!-- data-id="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->id}}" 
                                                data-nama="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->data_diri->nama_lengkap}}" 
                                                data-nik="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->nik}}" 
                                                data-jenis="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->jenis}}" 
                                                data-tanggal_akhir="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->kontrak->tanggal_akhir}}"  -->
                                                        <!-- <a class="view_model_kontrak" data-bs-toggle="modal" data-flashdata="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->id}}" data-nama="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->data_diri->nama_lengkap}}"  href="" > -->
                                                        <a href="{{route('kontrak', 'semua-kontrak')}}?id={{$key_dahboard_cek_karyawan_kontrak_aktif->akun->id}}">
                                                            <span class="badge bg-success me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td>

                                                

                                                <!-- <td>  
                                                        <a class="view_model_kontrak_semua" data-bs-toggle="modal" data-flashdatasemua="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->id}}" data-namasemua="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->data_diri->nama_lengkap}}"  href="" >
                                                            <span class="badge bg-info me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td>

                                                <td>  
                                                <a class="view_model_lihat_kontrak" data-bs-toggle="modal" data-flashdatasemua="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->id}}" data-namasemua="{{$key_dahboard_cek_karyawan_kontrak_aktif->akun->data_diri->nama_lengkap}}"  href="" >
                                                            <span class="badge bg-success me-1 center-foto">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td> -->
                                                
                                            </tr>
                                       
                                            
                                    <?php else: ?>
                                    <?php endif ?>
                              <?php endforeach ?>
                          <?php else: ?>
                                <tr>
                                  <td colspan='12' class="center-"> Tidak Ada Data Kontrak</td>
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
                    
                    $("#detail-kontrak").modal({
                            backdrop: 'static',
                            keyboard: true
                    }); 
                    $('#detail-kontrak').modal('show');
                }, 200);
                });
        </script>
