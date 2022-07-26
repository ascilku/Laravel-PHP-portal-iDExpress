<div class="container-xl">
          <!-- Page title -->
            
        </div>
<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_resign" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-title">Yakin Mau Hapus Karyawan.?</div>
                            <div>Mengahapus Karyawan, berarti juga menghapus semua data berkaitan karyawan tersebut dari database.</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="btn-hapus_resign" data-bs-dismiss="modal">Ya, Hapus Data Karyawan</button>
                        </div>
                        </div>
                    </div>
                </div>



<!-- ======================== Model Aktif Karyawan ======================== -->
    <div class="modal modal-blur fade" id="model_resign" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Yakin Mau Aktifkan Kembali Karyawan.?</div>
                <div>Mengaktifkan Kembali Karyawan, berarti juga karyawan sudah aktif kembali.</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="btn-aktif_btn-aktif" data-bs-dismiss="modal">Ya, Aktifkan</button>
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
                    <table id="example" class="table table-striped table-bordered padding-top padding-bottom" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>Profile Pegawai</th>
                            <th>Jabatan</th>
                            <th>Wilayah Penempatan</th>
                            <!-- <th>Alokasi Penempatan</th> -->
                            <th>Status Kepegawaian</th>
                            <th>Status Akun</th>
                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                <th class="w-1"></th>
                                <th class="w-1"></th>
                            <?php endif ?>
                        </tr>
                      </thead>
                      <tbody>

                          <?php if (count($dahboard_karyawan_resign) > 0): ?>
                              <?php foreach ($dahboard_karyawan_resign as $key_dahboard_karyawan_resign): ?>
                                  <tr>
                                      <td data-label="Name" >
                                          <div class="d-flex py-1 align-items-center">
                                              <?php if ($key_dahboard_karyawan_resign->akun->data_diri->foto): ?>
                                                  <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$key_dahboard_karyawan_resign->akun->data_diri->foto}})"></span>
                                              <?php else: ?>
                                                  <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/profil.png)"></span>
                                              <?php endif ?>
                                              <div class="flex-fill">
                                                     <?php if ($key_dahboard_karyawan_resign->akun->data_diri): ?>
                                                        <div class="font-weight-medium">{{$key_dahboard_karyawan_resign->akun->data_diri->nama_lengkap}}</div>
                                                        <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan_resign->akun->nik}}</a></div>
                                                    <?php else: ?>
                                                        <div class="font-weight-medium">Tidak Ada</div>
                                                            <?php if ($key_dahboard_karyawan_resign->akun): ?>
                                                                <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan_resign->akun->nik}}</a></div>
                                                            <?php else: ?>
                                                                <div class="text-muted"><a href="#" class="text-reset">IDE-Tidak Ada</a></div>
                                                            <?php endif ?>
                                                     <?php endif ?>
                                              </div>
                                          </div>
                                      </td>
                                      <td data-label="Title" >
                                              <?php if (!isset($key_dahboard_karyawan_resign->akun->jabatan_gaji->jabatan)): ?>
                                                  <div>Tidak Ada </div>
                                              <?php else: ?>
                                                  <div>{{$key_dahboard_karyawan_resign->akun->jabatan_gaji->jabatan->nama_jabatan}} </div>
                                              <?php endif ?>
                                          <div class="text-muted"></div>
                                      </td>
                                      <td data-label="Title" >
                                            <?php if (!isset($key_dahboard_karyawan_resign->akun->riw_penempatan_wilayah)): ?>
                                                  <div>
                                                        Tidak Ada
                                                  </div>
                                                  <span class="badge bg-warning ms-auto">Tidak Ada</span>
                                                  
                                            <?php else: ?>
                                                  <div>
                                                        {{$key_dahboard_karyawan_resign->akun->riw_penempatan_wilayah->penempatan->provinsi}}, 
                                                        {{$key_dahboard_karyawan_resign->akun->riw_penempatan_wilayah->penempatan->kota}},
                                                        {{$key_dahboard_karyawan_resign->akun->riw_penempatan_wilayah->penempatan->kabupaten}},<br>
                                                        {{$key_dahboard_karyawan_resign->akun->riw_penempatan_wilayah->penempatan->kelurahan}},
                                                        {{$key_dahboard_karyawan_resign->akun->riw_penempatan_wilayah->penempatan->kecamatan}}
                                                  </div>
                                                  <span class="badge bg-warning ms-auto">{{$key_dahboard_karyawan_resign->akun->riw_penempatan_wilayah->penempatan->alokasi}}</span>
                                                  <span class="badge bg-warning ms-auto">{{$key_dahboard_karyawan_resign->akun->riw_penempatan_wilayah->penempatan->kode_alokasi}}</span>
                                            
                                            <?php endif ?>
                                          
                                      </td>
                                      <td class="text-muted" data-label="Role" >
                                            <?php if (!isset($key_dahboard_karyawan_resign)): ?>
                                                <span class="badge bg-danger ms-auto">Tidak Ada</span>
                                            <?php else: ?>
                                                <span class="badge bg-warning ms-auto">{{$key_dahboard_karyawan_resign->status_data}}</span>
                                            <?php endif ?>
                                          
                                      </td>
                                        <td class="text-muted " data-label="Role" >
                                            <?php if ($key_dahboard_karyawan_resign->akun->status == "aktif"): ?>
                                                <!-- <label class="form-check form-switch ">
                                                    <input class="form-check-input" type="checkbox" onChange="this.form.submit()" <?php echo ($key_dahboard_karyawan_resign->akun->status=='aktif' ? 'checked' : '');?>>
                                                    <span class="badge bg-success me-1 "></span>{{$key_dahboard_karyawan_resign->akun->status}}
                                            
                                                </label> -->
                                            <?php else: ?>
                                                
                                                <!-- <label class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" value="yes" <?php echo ($key_dahboard_karyawan_resign->akun->status==1 ? 'checked' : '');?>>
                                                </label> -->
                                                <span class="badge bg-danger me-1"></span>{{$key_dahboard_karyawan_resign->akun->status}}
                                            <?php endif ?>
                                            
                                        </td>
                                        <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                            <td>  
                                                <a class="aktif_resign" data-bs-toggle="modal" data-bs-target="#model_resign"  href="{{route('status_kepegawaian')}}?id={{Crypt::encrypt($key_dahboard_karyawan_resign->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_karyawan_resign->akun->id)}}&&status={{Crypt::encrypt('Resign')}}&&key={{Crypt::encrypt('Aktif')}}">
                                                    
                                                    <span class="badge bg-info me-1 center-foto ">
                                                        <div class="ringht-jabatan">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/new-section -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="9" y1="12" x2="15" y2="12" /><line x1="12" y1="9" x2="12" y2="15" /><path d="M4 6v-1a1 1 0 0 1 1 -1h1m5 0h2m5 0h1a1 1 0 0 1 1 1v1m0 5v2m0 5v1a1 1 0 0 1 -1 1h-1m-5 0h-2m-5 0h-1a1 1 0 0 1 -1 -1v-1m0 -5v-2m0 -5" /></svg>
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg>  -->
                                                        </div>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>  
                                                    <a class="hapus_resign" data-bs-toggle="modal" data-bs-target="#model_hapus_resign"  href="{{route('status_kepegawaian')}}?id={{Crypt::encrypt($key_dahboard_karyawan_resign->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_karyawan_resign->akun->id)}}&&status={{Crypt::encrypt('Resign')}}&&key={{Crypt::encrypt('Hapus')}}">
                                                        <span class="badge bg-danger me-1 center-foto ">
                                                            <div class="ringht-jabatan">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
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
                                    <td colspan='9' class="center-"> Tidak Ada Data Aktif Karyawan </td>
                                </tr>
                          <?php endif ?>
                        

                      </tbody>
                    </table>
                    <!-- Halaman : {{ $dahboard_karyawan_resign->currentPage() }} <br/>
                    Jumlah Data : {{ $dahboard_karyawan_resign->total() }} <br/>
                    Data Per Halaman : {{ $dahboard_karyawan_resign->perPage() }} <br/>
                    <br/><div class="posisi-kanan  ukuran-pagginate center">{{ $dahboard_karyawan_resign->links() }}</div> -->
                    
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <script>
           
        </script>