
<?php
    function tanggal_indo($tanggal)
    {
        $bulan = array (1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
        $split = explode('-', $tanggal);
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }
?>   

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_per_tunjangan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Yakin Mau Hapus.?</div>
            <div>Mengahapus Tunjangan Karyawan Ini, berarti juga menghapus salah satu data berkaitan Tunjangan Karyawan tersebut dari database.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="btn-hapus_per_tunjangan" data-bs-dismiss="modal">Ya, Hapus Data</button>
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

<!-- ======================== Lihat Kontrak ============================== -->

     <div class="modal modal-blur fade" id="lihat-kontrak-semua-" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <!-- <form action="{{route('kontrak_print')}}"> -->
                    <form action="{{route('kontrak_print')}}" method="post" target="_blank">
                    {{ csrf_field() }}
                        <input type="hidden" id="data_lihat_id_semua" name="id_">
                            
                            <button type="submit" class="btn btn-outline-success" style="width:100%" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 17 15 14" /></svg>Cetak Kontrak
                            </button>
                        
                    </form>

                    <!-- <a href="#" class="card-btn">Cetak Kontrak</a> -->
                    
                </div>
                </div>

        </div>
        </div>
    </div>
                
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
                                                            <th>Jabatan Kontrak Ini</th>
                                                            <th>Penempatan Kontrak Ini</th>
                                                            <th>Tunjangan Kontrak Ini</th>
                                                            <th>No Kontrak</th>
                                                            <th>Jenis</th>
                                                            <th>Mulai Kontrak</th>
                                                            <th>Habis Kontrak</th>
                                                            <th>Status</th>
                                                            <th class="w-1"></th>
                                                            <th class="w-1"></th>
                                                            <th class="w-1"></th>
                                                            <th class="w-1"></th>
                                                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                                                 <th class="w-1"></th>
                                                            <?php else: ?>
                                                                 <th class="w-1"></th>
                                                            <?php endif ?>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                  <!-- $dahboard_jabatan_id->jabatan->nama_jabatan; -->
                                                            <?php foreach ($dahboard_kontrak as $key_dahboard_jabatan): ?>
                                                                 <?php
                                                                        $tunjangan_sekarang = $dahboard_kontrak_id->id;
                                                                        $tunjangan_pembanding = $key_dahboard_jabatan->id;

                                                                        $tgl_sekarang       = date('Y-m-d') ;  
                                                                        $tgl_akhir          = date('Y-m-d', strtotime($key_dahboard_jabatan->tanggal_akhir)); 
                                                                        
                                                                        $date_sekarang      = new DateTime($tgl_sekarang);
                                                                        $date_akhir         = new DateTime($tgl_akhir);
                                                                        
                                                                        $deadlain           = $date_sekarang->diff($date_akhir);
                                                                        $semua_          = $deadlain->format('%R%a days');
                                                                 ?>

                                                                 <tr>
                                                                      <td>{{$key_dahboard_jabatan->akun->data_diri->nama_lengkap}}</td>

                                                                      <td>{{$key_dahboard_jabatan->pkwt->riw_jabatan_gaji->jabatan->nama_jabatan}}</td>
                                                                      <td>{{$key_dahboard_jabatan->pkwt->penempatan_wilayah_riw->penempatan->alokasi}}</td>

                                                                      <?php if (!isset($key_dahboard_jabatan->pkwt->rwy_tunjangan_pkwt)): ?>
                                                                           <td><b>Tidak Ada Tunjangan</b></td>
                                                                      <?php else: ?>
                                                                           <td><b>Ada Tunjangan</b></td>
                                                                      <?php endif ?>

                                                                    <td>{{$key_dahboard_jabatan->no_kontrak}}</td>
                                                                    <td>{{$key_dahboard_jabatan->jenis}}</td>
                                                                    <td>{{tanggal_indo($key_dahboard_jabatan->tanggal_awal)}}</td>
                                                                    <td>{{tanggal_indo($tgl_akhir)}} </td>
                                                                    
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
                                                                      <td></td>
                                                                      <td></td>
                                                                      <?php if ($tunjangan_sekarang == $tunjangan_pembanding ): ?>
                                                                           <td><span class="badge bg-info me-1">Kontrak Sekarang</span></td>
                                                                      <?php else: ?>
                                                                           <td><span class="badge bg-danger me-1">Kontrak History</span></td>
                                                                      <?php endif ?>
                                                                      <td>  
                                                                           <a  class="lihat-kontrak-semua" 
                                                                                                         data-id="{{$key_dahboard_jabatan->pkwt->id}}" 
                                                                                                         data-nama="{{$key_dahboard_jabatan->akun->data_diri->nama_lengkap}}" 
                                                                                                         data-nik="{{$key_dahboard_jabatan->akun->nik}}" 
                                                                                                         data-jenis="{{$key_dahboard_jabatan->jenis}}" 
                                                                                                         data-tanggal_akhir="{{$key_dahboard_jabatan->tanggal_akhir}}" 
                                                                                                         href="#" >
                                                                                <span class="badge bg-success me-1 center-foto ">
                                                                                     <div class="ringht-jabatan">
                                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                                     </div>
                                                                                </span>
                                                                           </a>
                                                                      </td>
                                                                           <?php if ($tunjangan_sekarang == $tunjangan_pembanding ): ?>
                                                                           
                                                                            <td></td>
                                                                           <?php else: ?>
                                                                                
                                                                                <td>  
                                                                                     <a href="{{route('hapus_per_tunjangan')}}?id={{Crypt::encrypt($key_dahboard_jabatan->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_jabatan->akun->id)}}" class="hapus_per_tunjangan" data-bs-toggle="modal" data-bs-target="#model_hapus_per_tunjangan">
                                                                                          <span class="badge bg-danger me-1 center-foto ">
                                                                                          <div class="ringht-jabatan">
                                                                                               <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                                          </div>
                                                                                          </span>
                                                                                     </a>
                                                                                </td>


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