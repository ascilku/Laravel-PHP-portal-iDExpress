<div class="container-xl">
          <!-- Page title -->
            <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                                <h2 class="page-title">
                                List Jabatan
                                </h2>
                        </div>
                    </div>
            </div>
        </div>

<!-- ======================== Modal edit jabatan============================== -->
<div class="modal modal-blur fade" id="modal-edit-jabatan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Yakin Mau Ubah Jabatan.?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('edit-jabatan')}}" method="post">
                {{ csrf_field() }}
                      <div class="modal-body">
                            <input type="hidden" class="form-control" id="data_id_jabatan" name="id_jabatan" placeholder="Your report name">
                            <div class="mb-3">
                                <label class="form-label required">Nama Jabatan</label>
                                <input type="text" class="form-control" id="data_jabatan" name="nama_jabatan" onkeyup="this.value = this.value.toUpperCase()" required>
                                <span id="nik_error" class="text-danger font-size-info-alert"></span>
                            </div>
                      </div>
                      <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Edit Jabatan
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
<!-- ======================== Akhir Modal Tambah Data Karyawan ======================== -->
        
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">


              <div class="col-12">
                <div class="card font-size-cv-">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                            <th>Nama Jabatan</th>
                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>                          
                                <th class="w-1"></th>
                            <?php else: ?>
                            <?php endif ?>
                        </tr>
                      </thead>
                      <tbody>

                        
                          <?php if (count($dahboard_jabatan) > 0): ?>
                              <?php foreach ($dahboard_jabatan as $key_dahboard_jabatan): ?>
                                  <tr>
                                      <td data-label="Title" >
                                          <div class="text-muted">    <span class="badge bg-warning me-1">{{$key_dahboard_jabatan->nama_jabatan}}</span>
                                        </div>
                                      </td>
                                      <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                                        
                                        <td>
                                            <a href="#" class="view_edit_jabatan" data-id="{{$key_dahboard_jabatan->id}}" data-jabatan="{{$key_dahboard_jabatan->nama_jabatan}}">
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
                                      <td colspan='3' class="center-"> Tidak Ada List Data Jabatan </td>
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