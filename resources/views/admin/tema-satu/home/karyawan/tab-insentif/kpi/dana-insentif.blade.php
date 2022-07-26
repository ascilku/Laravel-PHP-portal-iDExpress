<div class="container-xl">
          <!-- Page title -->

<!-- ======================== Modal edit gaji ============================== -->
<div class="modal modal-blur fade" id="modal-edit-gaji" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Yakin Mau Ubah Gaji.?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('edit-gaji')}}" method="post">
                {{ csrf_field() }}
                      <div class="modal-body">
                            <input type="hidden" class="form-control" id="data_id_gaji" name="id_gaji" placeholder="Your report name">
                            <div class="mb-3">
                                <label class="form-label required">Gaji</label>
                                <input type="text" class="form-control data_gaji"  name="nama_gaji"  required>
                                <span id="nik_error" class="text-danger font-size-info-alert"></span>
                            </div>
                      </div>
                      <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Edit Gaji
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
<!-- ======================== Akhir Modal Tambah Data Karyawan ======================== -->
  
            
        </div>
        
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">

                <div class="page-header d-print-none">
                        <div class="row align-items-center">
                            <div class="col">
                                    <h2 class="page-title">
                                        List Penempatan
                                    </h2>
                            </div>
                        </div>
                </div>
                <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>

                    <div class="col-xl-6 col-md-6">
                        <div class="card font-size-cv-">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>TH</th>
                                    <th>Kode TH</th>
                                </tr>
                            </thead>
                                <?php if (count($dahboard_dana_insentif) > 0): ?>
                                
                                    <?php foreach ($dahboard_dana_insentif as $key_dahboard_dana_insentif): ?>
                                    
                                        
                                            <tr>
                                                <td data-label="Title" >
                                                        <div class="text-muted">    
                                                            {{$key_dahboard_dana_insentif->rp_hujau}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <div class="text-muted">    
                                                            {{$key_dahboard_dana_insentif->rp_merah}}
                                                        </div>
                                                </td>
                                            </tr>
                                    
                                    <?php endforeach ?>
                                <?php else: ?>
                                        <tr>
                                            <td colspan='4' class="center-"> Tidak Ada List Data Penempatan </td>
                                        </tr>
                                <?php endif ?>
                            <tbody>
                                
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 font-size-cv-">
                        
                            <div class="card ">
                                <div class="container">
                                        <form  action="{{route('create_dana_insentif_kpi')}}" method="post">
                                        {{ csrf_field() }}
                                            <div class="row">
                                            
                                        
                                            
                                        
                                            

                                                    <input type="hidden" class="form-control" id="data_id_edit_penempatan" name="id" placeholder="Provinsi Domisili...">
                                                        
                                                   

                                                    <div class="col-xl-6 hight-top-">
                                                        <div class="mb-3">
                                                            <label class="form-label required">Dana Merah</label>
                                                            <input type="text" class="form-control" id="rp_merah" name="dana_merah" placeholder="Provinsi Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <span id="provinsi_domisili_error" class="text-danger font-size-info-alert"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 hight-top-">
                                                        <div class="mb-3">
                                                            <label class="form-label required">Dana Hijau</label>
                                                            <input type="text" class="form-control" id="rp_hijau" name="dana_hijau" placeholder="Provinsi Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <span id="provinsi_domisili_error" class="text-danger font-size-info-alert"></span>
                                                        </div>
                                                    </div>


                                                    <div class="bottom-top-jabatan">
                                                        <button type="submit"  class="btn btn-warning active w-100">
                                                            Simpan Data Penempatan
                                                        </button>
                                                    </div>

                                            </div>
                                        </form>

                                </div>
                            </div>


                        
                    </div>
                <?php else: ?>
                   
                <?php endif ?>
            </div>
          </div>
        </div>