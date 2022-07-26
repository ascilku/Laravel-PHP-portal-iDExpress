
   
<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_per_jabatan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
          <div class="modal-content">
               <div class="modal-body">
                    <div class="modal-title">Yakin Mau Hapus.?</div>
                    <div>Mengahapus Penempatan Karyawan Ini, berarti juga menghapus salah satu data berkaitan Penempatan Karyawan tersebut dari database.</div>
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="btn-hapus_per_jabatan" data-bs-dismiss="modal">Ya, Hapus Data</button>
               </div>
          </div>
    </div>
</div>


<?php if (Session::get('alert-success-karyawan')): ?>
     <div class="alert alert-success alert-dismissible">
               <strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan')}}
          </div>
     <div >                    
<?php endif ?>
                
                    <!-- <div class="card-header">
                         <h1 class="navbar-brand center navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                              <a href=".">
                                   <img src="{{ asset('') }}assets/logo/logo-icon.png" alt="Tabler" class="navbar-brand-image">
                              </a>
                              <label class="right-left-icon">PT Heroisme Indokaisa Triasa (HIT) Group</label>
                         </h1>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="">
                         <div class="row ">
                                   <div class="col-xl-12 col-md-12 ">
                                        <div class="text-truncate posisi">
                                                  <?php if (isset($rekrutment_Aply_Lowongan->lowongan_kerja)): ?>
                                                       Posisi Yang Dilamar : {{$rekrutment_Aply_Lowongan->lowongan_kerja->judul}}
                                                  <?php else: ?> 
                                                       Posisi Yang Dilamar : Tidak Ada Lowongan di Pilih
                                                  <?php endif ?> 
                                        </div>
                                   </div> 
                         </div>
                         
                    </div>
                    <div class="center-">
                         <h1 class="font-size-cv">
                              
                              Curriculum Vitae
                         </h1>
                    </div> -->
                    <div class="row row-cards">
                       
                         

                         
                         

                         

                         <div class="col-xl-12 col-md-12 top-cv-">
                              <div class="row divide-y">
                                   <!-- <div class=" bg-menu">
                                        <div class="row ">
                                                  <div class="col-xl-12 col-md-12">
                                                       <div class="text-truncate">
                                                            <strong>Sertifikat Kelulusan / Pengalaman Kerja</strong>
                                                       </div>
                                                  </div> 
                                   
                                        </div>
                                        
                                   </div> -->
                                        <div class="col-md-12 col-xl-12 divide-y">
                                             <div class="table-responsive">
                                                  <table class="table table-vcenter card-table font-size-cv-">
                                                  <thead>
                                                       <tr>
                                                            <th>Nama</th>
                                                            <th>Penempatan</th>
                                                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                                                 <th class="w-1"></th>
                                                                 <th class="w-1"></th>
                                                            <?php else: ?>
                                                            <?php endif ?>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                            <?php foreach ($dahboard_penempatan as $key_dahboard_penempatan): ?>
                                                                 <?php
                                                                      $kode_sekarang = $dahboard_penempatan_id->id;
                                                                      $kode_pembanding = $key_dahboard_penempatan->id; 
                                                                 ?>
                                                                 <tr>
                                                                           <td>{{$key_dahboard_penempatan->akun->data_diri->nama_lengkap}}</td>
                                                                           <td data-label="Title" >  
                                                                                Nama <span class="badge bg-warning ms-auto">{{$key_dahboard_penempatan->penempatan->alokasi}}</span> 
                                                                                Kode <span class="badge bg-warning ms-auto">{{$kode_pembanding}}</span>  
                                                                                Status <span class="badge bg-warning ms-auto">{{$key_dahboard_penempatan->penempatan->status_th}}</span>  
                                                                           </td>
                                                                           <?php if ($kode_sekarang == $kode_pembanding ): ?>
                                                                                <td><span class="badge bg-info me-1">Penempatan Sekarang</span></td>
                                                                           <?php else: ?>
                                                                                <td><span class="badge bg-danger me-1">Penempatan History</span></td>
                                                                           <?php endif ?>
                                                                           <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                                                                <?php if ($kode_sekarang == $kode_pembanding ): ?>
                                                                                     <td></td>
                                                                                <?php else: ?>
                                                                                     <td>  
                                                                                               <a href="{{route('hapus_per_penempatan')}}?id={{Crypt::encrypt($key_dahboard_penempatan->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_penempatan->akun->id)}}" class="hapus_per_jabatan" data-bs-toggle="modal" data-bs-target="#model_hapus_per_jabatan">
                                                                                                    <span class="badge bg-danger me-1 center-foto ">
                                                                                                    <div class="ringht-jabatan">
                                                                                                         <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                                                    </div>
                                                                                                    </span>
                                                                                               </a>
                                                                                     </td>
                                                                                <?php endif ?>
                                                                           <?php else: ?>
                                                                           <?php endif ?>
                                                                 </tr>
                                                            <?php endforeach ?>
                                                  </tbody>
                                                  </table>
                                             </div>
                                        </div>
                              </div>
                         </div>
                    </div>
               </div>  