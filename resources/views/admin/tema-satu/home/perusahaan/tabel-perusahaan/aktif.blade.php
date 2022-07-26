<div class="container-xl">
          <!-- Page title -->
            
        </div>




        
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">

                <!-- ======================== Model Non Aktif Status Kepegawaian ======================== -->
                <div class="modal modal-blur fade" id="model_hapus_non" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-title">Yakin Mau Non Aktifkan Akun.?</div>
                            <div>Menon aktifkan akun otomatis akan memindahkan status kepegawaian aktif jadi tidak aktif.</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="btn-yes" data-bs-dismiss="modal">Ya, Non Aktifkan AKun</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- ======================== Model Resaign Status Kepegawaian ======================== -->
                <div class="modal modal-blur fade" id="model_resaign" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-title">Apakah Karyawan Sudah Resign.?</div>
                            <div>Fitur ini digunakan untuk karyawan yang sudah resign.</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-warning" id="btn-yes-resaign" data-bs-dismiss="modal">Ya, Resignkan Akun</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- ================================ Model Status Akun ============================== -->
                <div class="modal modal-blur fade" id="model_statys_akun" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-title">Yakin Menon Aktifkan Akun Ini.?</div>
                            <div>Fitur ini akan membuat akun tidak lagi bisa digunakan sementara waktu sampai di aktifkan lagi oleh Admin.</div>
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="btn-yes-status-akun" data-bs-dismiss="modal">Ya, Non Aktifkan Akun</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- ======================== Model Hapus Karyawan ======================== -->
                <div class="modal modal-blur fade" id="model_hapus" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-title">Yakin Mau Hapus Karyawan.?</div>
                            <div>Mengahapus Karyawan, berarti juga menghapus semua data berkaitan karyawan tersebut dari database.</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="btn-hapus_" data-bs-dismiss="modal">Ya, Hapus Data Karyawan</button>
                        </div>
                        </div>
                    </div>
                </div>

              <div class="col-12">
                <div class="card font-size-cv-">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table" >
                      <thead>
                        <tr>
                            <th>Nik Perusahaan</th>
                            <th>Nama</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Status Akun</th>
                        </tr>
                      </thead>
                      <tbody>

                          <?php if (count($dahboard_perusahaan_aktif) > 0): ?>
                              <?php foreach ($dahboard_perusahaan_aktif as $key_dahboard_perusahaan_aktif): ?>
                                  <tr>
                                      <td data-label="Name" >
                                            <div>
                                                {{$key_dahboard_perusahaan_aktif->nik}}, 
                                            </div>
                                      </td>

                                      <td data-label="Title" >
                                            <div>{{$key_dahboard_perusahaan_aktif->nama}} </div>
                                      </td>

                                      <td data-label="Title" >
                                        <div>{{$key_dahboard_perusahaan_aktif->show_pass}} </div>
                                      </td>

                                      <td class="text-muted" data-label="Role" >
                                        <div>{{$key_dahboard_perusahaan_aktif->email}} </div>
                                      </td>

                                      <td class="text-muted " data-label="Role" >
                                        <div>{{$key_dahboard_perusahaan_aktif->no_hp}} </div>
                                      </td>
                                      <td class="text-muted " data-label="Role" >
                                            <label class="form-check form-switch ">
                                                <input class="form-check-input" value="{{csrf_token()}}" id="status-perusahaan" data-id="{{$key_dahboard_perusahaan_aktif->id}}" type="checkbox" onclick="myFunctionn()" <?php  echo ($key_dahboard_perusahaan_aktif->status=='aktif' ? 'checked' : '');?>>
                                            </label> 
                                      </td>

                            
                                      
                                      
                                      
                                  </tr>
                                  
                              <?php endforeach ?>
                          <?php else: ?>
                                <tr>
                                  <td colspan='9' class="center-">Tidak Ada Data</td>
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
