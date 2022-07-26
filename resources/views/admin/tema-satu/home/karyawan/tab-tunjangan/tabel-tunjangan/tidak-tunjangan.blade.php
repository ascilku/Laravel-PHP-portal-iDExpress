<div class="container-xl">

          <!-- Page title -->

<?php if (session()->has('alert-peringatan')): ?>
      <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
<?php endif ?>


            
        </div>

<!-- ======================== Modal Tunjangan ============================== -->
<div class="modal modal-blur fade" id="modal-tunjanganbuat" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Buat Tunjangan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('create-tunjangan')}}" method="post">
                {{ csrf_field() }}
                      <div class="modal-body">
                                <input type="hidden" class="form-control" id="data_id_create_view" name="id" placeholder="Your report name">
                                <br>

                                   
                                <div class="mb-3">
                                    <label class="form-label">Status Karyawan</label>
                                    <input type="text" class="form-control bg-menu" id="data_nama_create_view"  readonly>
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
                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>            
                                <th class="w-1"></th>
                            <?php else: ?>
                            <?php endif ?>
                        </tr> 
                      </thead>
                      <tbody>

                          <?php if (count($dahboard_karyawan) > 0): ?>
                              <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
                                    <?php if (!isset($key_dahboard_karyawan->akun->tunjangan) ): ?>
                                    
                                        <tr>
                                            <td data-label="Name" >
                                                <div class="d-flex py-1 align-items-center">
                                                    <?php if (isset($key_dahboard_karyawan->akun->data_diri->foto)): ?>
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

                                            <?php if (!isset($key_dahboard_karyawan->akun->jabatan_gaji) ): ?>
                                                                <td colspan='2' class="center-">lengkapi jabatan</td>
                               
                                            <?php else: ?>
                                                <?php if (!isset($key_dahboard_karyawan->akun->riw_penempatan_wilayah)): ?>
                                                        <td colspan='2' class="center-">lengkapi penempatan</td>
                                                <?php else: ?>
                                                    

                                                    <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                                        <td>  
                                                            <a href="#" class="view_tunjangan_buat" data-id="{{$key_dahboard_karyawan->akun->id}}" data-nama="{{$key_dahboard_karyawan->akun->data_diri->nama_lengkap}}">  
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
                                                <?php endif ?>
                                            <?php endif ?>
                                        </tr>
                                    <?php else: ?>
                                    <?php endif ?>
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
              
            </div>
          </div>
        </div>

       