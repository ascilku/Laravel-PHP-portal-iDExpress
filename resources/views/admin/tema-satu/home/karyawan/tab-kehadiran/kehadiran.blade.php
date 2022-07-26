<div class="container-xl">

<!-- Page title -->

<?php if (session()->has('alert-peringatan')): ?>
<div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
<?php endif ?>

<?php if (Session::get('alert-success-karyawan_')): ?>
<div class="alert alert-danger alert-dismissible">
<strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan_')}}
</div>
<?php endif ?>

<!-- ======================== Modal Tambah Data Karyawan Exel ============================== -->
<div class="modal modal-blur fade" id="modal-create-absensi-exel" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Upload Data Absensi Bulan Ini</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('create-absensi-exel')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
            <div class="modal-body">

                  <div class="mb-3">
                      <label class="form-label required">Create Exel Absensi Bulan Ini</label>
                      <input type="file" class="form-control" id="file" name="file" placeholder="No WhatsApp Aktif..." required>
                      <span id="file_error" class="text-danger font-size-info-alert"></span>
                  </div>
             
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                  Cancel
                </a>
                <button type="submit" class="btn btn-primary ms-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    Create new Absensi
                </button>
            </div>
      </form>
  </div>
</div>
</div>


<!-- <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>   
  <div class="page-header d-print-none">
      <div class="row align-items-center">
          <div class="col-xl-12 col-md-12 col-sm-12 ">
              <div class="row">
                      <div class="page-header d-print-none">

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
                                                      <a href="#" class="btn  btn-icon view_data_exel_absensi" aria-label="Twitter" data-flashdata="{{$dahboard_akun_cookie->id_perusahaan}}">
                                                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 11 15 14" /></svg>
                                                      </a>
                                                      <a href="{{ asset('') }}/../../file/exel/absensi.xlsx" class="btn  btn-icon" aria-label="Twitter">
                                                          Template Exel 
                                                      </a>
                                              </div>
                                      </div>  
                                  </div>
                              </div>
                      </div>
              </div>
          </div>
      </div>
  </div>
<?php endif ?>   -->
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
                                  <th>Penempatan</th>
                                  <th>Masuk</th>
                                  <th>Alpa</th>
                                  <th>Cuti</th>
                                  <th>Libur Nasional</th>
                                  <th>Tanggal Upload</th>
                              </tr>
                      </thead>
                      <tbody>

                          <?php if (isset($dahboard_karyawan_kpi)): ?>
                              <?php foreach ($dahboard_karyawan_kpi as $key_dahboard_karyawan): ?>
                                  
                                  <tr>
                                  <td data-label="Name" >
                                          <div class="d-flex py-1 align-items-center">
                                              <?php if (isset($key_dahboard_karyawan->foto)): ?>
                                                  <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$key_dahboard_karyawan->foto}})"></span>
                                              <?php else: ?>
                                                  <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/profil.png)"></span>
                                              <?php endif ?>
                                              <div class="flex-fill">
                                                      <?php if (isset($key_dahboard_karyawan->nama_lengkap)): ?>
                                                          <div class="font-weight-medium">{{$key_dahboard_karyawan->nama_lengkap}}</div>
                                                          <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan->nip}}</a></div>
                                                      <?php else: ?>
                                                          <div class="font-weight-medium">Tidak Ada</div>
                                                          <div class="text-muted"><a href="#" class="text-reset">IDE-Tidak Ada</a></div>
                                                      <?php endif ?>
                                              </div>
                                          </div>
                                      </td>
                                      <td data-label="Title" >
                                              <?php if (!isset($key_dahboard_karyawan->nama_jabatan)): ?>
                                                  <div>Tidak Ada </div>
                                              <?php else: ?>
                                                  <div>{{$key_dahboard_karyawan->nama_jabatan}} </div>
                                              <?php endif ?>
                                          <div class="text-muted"></div>
                                      </td>

                                      <td data-label="Title" >
                                              <?php if (!isset($key_dahboard_karyawan->kode_alokasi)): ?>
                                                  <div>Tidak Ada </div>
                                              <?php else: ?>
                                                  <div>{{$key_dahboard_karyawan->kode_alokasi}} </div>
                                              <?php endif ?>
                                          <div class="text-muted"></div>
                                      </td>

                                      <td data-label="Title" >
                                          {{$key_dahboard_karyawan->kehadiran}}
                                                         
                                          
                                      </td>
                                      <td>{{$key_dahboard_karyawan->alpha}}</td>
                                      <td>{{$key_dahboard_karyawan->cuti}}</td>
                                      <td>{{$key_dahboard_karyawan->libur_nasional}}</td>

                                      <td data-label="Title" >
                                        <span class="badge bg-success ms-auto icon-login " class="">{{$key_dahboard_karyawan->tanggal}}</span>
                                                         
                                          
                                      </td>
                                      <!-- <td data-label="Title" >
                                          <div>TH_PWX01</div>
                                          
                                      </td> -->
                                     
                                      
                                  </tr>
                              <?php endforeach ?>
                          <?php else: ?>
                                  <tr>
                                      <td colspan='9' class="center-"> Tidak Ada Data Insentif </td>
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


