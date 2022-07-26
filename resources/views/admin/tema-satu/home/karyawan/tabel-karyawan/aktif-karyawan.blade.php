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
                    <!-- <table class="table table-vcenter card-table" > -->
                    <table id="example" class="table table-striped table-bordered padding-top padding-bottom" cellspacing="0" width="100%">
                             
                      <thead>
                        <tr>
                            <th>Profile Pegawai</th>
                            <th>Jabatan</th>
                            <th>Wilayah Penempatan</th>
                            <th>Status Kepegawaian</th>
                            <th>Status Akun</th>
                            <th>Show Pass</th>
                            <th ></th>
                            <!-- <th class="w-1"></th> -->
                            <!-- <th ></th>
                            <th ></th> -->
                        </tr>
                      </thead>
                      <tbody>

                          <?php if (count($dahboard_karyawan_aktif) > 0): ?>
                              <?php foreach ($dahboard_karyawan_aktif as $key_dahboard_karyawan_aktif_aktif): ?>

                                



                                    <tr>
                                        <td data-label="Name" >
                                            <div class="d-flex py-1 align-items-center">
                                                <?php if (isset($key_dahboard_karyawan_aktif_aktif->akun->data_diri->foto)): ?>
                                                    <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$key_dahboard_karyawan_aktif_aktif->akun->data_diri->foto}})"></span>
                                                <?php else: ?>
                                                    <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/profil.png)"></span>
                                                <?php endif ?>
                                                <div class="flex-fill">
                                                        <?php if ($key_dahboard_karyawan_aktif_aktif->akun->data_diri): ?>
                                                            <div class="font-weight-medium">{{$key_dahboard_karyawan_aktif_aktif->akun->data_diri->nama_lengkap}}</div>
                                                            <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan_aktif_aktif->akun->nik}}</a></div>
                                                        <?php else: ?>
                                                            <div class="font-weight-medium">Tidak Ada</div>
                                                                <?php if ($key_dahboard_karyawan_aktif_aktif->akun): ?>
                                                                    <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan_aktif_aktif->akun->nik}}</a></div>
                                                                <?php else: ?>
                                                                    <div class="text-muted"><a href="#" class="text-reset">IDE-Tidak Ada</a></div>
                                                                <?php endif ?>
                                                        <?php endif ?>
                                                </div>
                                            </div>
                                        </td>
                                        
                                                
                                                    <td data-label="Title" >
                                                            <?php if (!isset($key_dahboard_karyawan_aktif_aktif->akun->jabatan_gaji->jabatan)): ?>
                                                                <div>Tidak Ada </div>
                                                            <?php else: ?>
                                                                <div>{{$key_dahboard_karyawan_aktif_aktif->akun->jabatan_gaji->jabatan->nama_jabatan}} </div>
                                                            <?php endif ?>
                                                        <div class="text-muted"></div>
                                                    </td>

                                                    <td data-label="Title" >
                                                            <?php if (!isset($key_dahboard_karyawan_aktif_aktif->akun->riw_penempatan_wilayah)): ?>
                                                                <div>
                                                                        Tidak Ada
                                                                </div>
                                                                <span class="badge bg-warning ms-auto">Tidak Ada</span>
                                                                
                                                            <?php else: ?>
                                                                <div>
                                                                        {{$key_dahboard_karyawan_aktif_aktif->akun->riw_penempatan_wilayah->penempatan->provinsi}}, 
                                                                        {{$key_dahboard_karyawan_aktif_aktif->akun->riw_penempatan_wilayah->penempatan->kota}},
                                                                        {{$key_dahboard_karyawan_aktif_aktif->akun->riw_penempatan_wilayah->penempatan->kabupaten}},<br>
                                                                        {{$key_dahboard_karyawan_aktif_aktif->akun->riw_penempatan_wilayah->penempatan->kelurahan}},
                                                                        {{$key_dahboard_karyawan_aktif_aktif->akun->riw_penempatan_wilayah->penempatan->kecamatan}}
                                                                </div>
                                                                <span class="badge bg-warning ms-auto">{{$key_dahboard_karyawan_aktif_aktif->akun->riw_penempatan_wilayah->penempatan->alokasi}}</span>
                                                                <span class="badge bg-warning ms-auto">{{$key_dahboard_karyawan_aktif_aktif->akun->riw_penempatan_wilayah->penempatan->kode_alokasi}}</span>
                                                            <?php endif ?>
                                                        
                                                    </td>

                                                    <td class="text-muted" data-label="Role" >
                                                            <?php if (!isset($key_dahboard_karyawan_aktif_aktif)): ?>
                                                                <span class="badge bg-success ms-auto">Tidak Ada</span>
                                                            <?php else: ?>
                                                                <span class="badge bg-info ms-auto">{{$key_dahboard_karyawan_aktif_aktif->status_data}}</span>
                                                            <?php endif ?>
                                                        
                                                    </td>

                                                    <td class="text-muted " data-label="Role" >
                                                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                                            
                                                                <label class="form-check form-switch ">
                                                                    <!-- <input class="form-check-input" type="checkbox" data-id="{{$key_dahboard_karyawan_aktif_aktif->akun->id}}" id="status_akun"  <?php  echo ($key_dahboard_karyawan_aktif_aktif->akun->status=='aktif' ? 'checked' : '');?>>  -->
                                                                    <input class="form-check-input" value="{{csrf_token()}}" id="k" data-id="{{$key_dahboard_karyawan_aktif_aktif->akun->id}}" type="checkbox" onclick="myFunction_akun()" <?php  echo ($key_dahboard_karyawan_aktif_aktif->akun->status=='aktif' ? 'checked' : '');?>>
                                                                </label>
                                                            <?php else: ?>
                                                                <span class="badge bg-success ms-auto">{{$key_dahboard_karyawan_aktif_aktif->akun->status}}</span>
                                                            <?php endif ?>

                                                            <!-- <?php if (!isset($key_dahboard_karyawan_aktif_aktif->akun->status)): ?>
                                                                <span class="badge bg-danger ms-auto"></span>Tidak
                                                            <?php else: ?>
                                                                <?php if ($key_dahboard_karyawan_aktif_aktif->akun->status == "aktif"): ?>
                                                                
                                                                    <span class="badge bg-success ms-auto"></span>{{$key_dahboard_karyawan_aktif_aktif->akun->status}}
                                                                <?php else: ?>
                                                                    <span class="badge bg-danger ms-auto"></span>{{$key_dahboard_karyawan_aktif_aktif->akun->status}}
                                                            
                                                                <?php endif ?>
                                                            <?php endif ?> -->
                                                        
                                                    </td>

                                                    <td class="text-muted " data-label="Role" >
                                                            <!-- <label class="form-check form-switch ">
                                                                <input class="form-check-input" type="checkbox" data-id="{{$key_dahboard_karyawan_aktif_aktif->akun->id}}" id="status_akun"  <?php  echo ($key_dahboard_karyawan_aktif_aktif->akun->status=='aktif' ? 'checked' : '');?>> 
                                                                
                                                            </label> -->

                                                            <?php if (!isset($key_dahboard_karyawan_aktif_aktif->akun->show_pass)): ?>
                                                                <span class="badge bg-danger ms-auto"></span>Tidak
                                                            <?php else: ?>
                                                                {{$key_dahboard_karyawan_aktif_aktif->akun->show_pass}}
                                                            <?php endif ?>
                                                        
                                                    </td>

                                                    <!-- <td>  <span class="badge bg-info me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                                </div>
                                                            </span>
                                                    </td> -->
                                                    <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                                        <td > 



                                                                <?php if (!isset($key_dahboard_karyawan_aktif_aktif->akun->jabatan_gaji) ): ?>
                                                                    <!-- <td colspan='9' class="center-">Silahkan lengkapi terdahulu penempatan dan jabatan karyawan ini</td> -->
                                                                    lengkapi jabatan
                                                            
                                                                <?php else: ?>
                                                                    <?php if (!isset($key_dahboard_karyawan_aktif_aktif->akun->riw_penempatan_wilayah)): ?>
                                                                        <!-- <td colspan='9' class="center-">Selanjutnya silahkan lengkapi terdahulu lokasi penempatan</td> -->
                                                                        lengkapi penempatan
                                                                    <?php else: ?>
                                                                    
                                                                        <a class="resaign" data-bs-toggle="modal" data-bs-target="#model_resaign" href="{{route('status_kepegawaian')}}?id={{Crypt::encrypt($key_dahboard_karyawan_aktif_aktif->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_karyawan_aktif_aktif->akun->id)}}&&status={{Crypt::encrypt('Aktif')}}&&key={{Crypt::encrypt('Resign')}}">
                                                                            <span class="badge bg-warning me-1 center-foto ">
                                                                                <div class="ringht-jabatan">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="13" cy="4" r="1" /><line x1="7" y1="21" x2="10" y2="17" /><path d="M16 21l-2 -4l-3 -3l1 -6" /><path d="M6 12l2 -3l4 -1l3 3l3 1" /></svg>
                                                                                </div>
                                                                            </span>
                                                                        </a> <br><br>

                                                                        <a class="non" data-bs-toggle="modal" data-bs-target="#model_hapus_non" href="{{route('status_kepegawaian')}}?id={{Crypt::encrypt($key_dahboard_karyawan_aktif_aktif->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_karyawan_aktif_aktif->akun->id)}}&&status={{Crypt::encrypt('Aktif')}}&&key={{Crypt::encrypt('Tidak Aktif')}}" >
                                                                            <span class="badge bg-danger me-1 center-foto ">
                                                                                <div class="ringht-jabatan">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14.274 10.291a4 4 0 1 0 -5.554 -5.58m-.548 3.453a4.01 4.01 0 0 0 2.62 2.65" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 1.147 .167m2.685 2.681a4 4 0 0 1 .168 1.152v2" /><line x1="3" y1="3" x2="21" y2="21" /></svg>
                                                                                </div>
                                                                            </span>
                                                                        </a><br><br>

                                                                        <a class="hapus_" data-bs-toggle="modal" data-bs-target="#model_hapus"  href="{{route('status_kepegawaian')}}?id={{Crypt::encrypt($key_dahboard_karyawan_aktif_aktif->akun->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_karyawan_aktif_aktif->akun->id)}}&&status={{Crypt::encrypt('Aktif')}}&&key={{Crypt::encrypt('Hapus')}}">
                                                                            <span class="badge bg-danger me-1 center-foto ">
                                                                                <div class="ringht-jabatan">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                                </div>
                                                                            </span>
                                                                        </a>
                                                                    <?php endif ?>
                                                                <?php endif ?>
                                                                
                                                        </td>
                                                        <!-- <td>  
                                                                <a class="non" data-bs-toggle="modal" data-bs-target="#model_hapus_non" href="{{route('status_kepegawaian')}}?id={{Crypt::encrypt($key_dahboard_karyawan_aktif_aktif->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_karyawan_aktif_aktif->akun->id)}}&&status={{Crypt::encrypt('Aktif')}}&&key={{Crypt::encrypt('Tidak Aktif')}}" >
                                                                    <span class="badge bg-danger me-1 center-foto ">
                                                                        <div class="ringht-jabatan">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14.274 10.291a4 4 0 1 0 -5.554 -5.58m-.548 3.453a4.01 4.01 0 0 0 2.62 2.65" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 1.147 .167m2.685 2.681a4 4 0 0 1 .168 1.152v2" /><line x1="3" y1="3" x2="21" y2="21" /></svg>
                                                                        </div>
                                                                    </span>
                                                                </a>
                                                        </td>
                                                        <td>  
                                                                <a class="hapus_" data-bs-toggle="modal" data-bs-target="#model_hapus"  href="{{route('status_kepegawaian')}}?id={{Crypt::encrypt($key_dahboard_karyawan_aktif_aktif->akun->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_karyawan_aktif_aktif->akun->id)}}&&status={{Crypt::encrypt('Aktif')}}&&key={{Crypt::encrypt('Hapus')}}">
                                                                    <span class="badge bg-danger me-1 center-foto ">
                                                                        <div class="ringht-jabatan">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                        </div>
                                                                    </span>
                                                                </a>
                                                        </td> -->
                                                    <?php else: ?>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
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
                   
                    
                  </div>
                  
                </div>
                
              </div>
              
            </div>
            
          </div>
          
        </div>
