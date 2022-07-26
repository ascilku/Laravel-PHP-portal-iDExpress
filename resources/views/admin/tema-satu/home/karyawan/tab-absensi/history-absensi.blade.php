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
                                  <th>Tanggal Absen</th>
                                  <th>In</th>
                                  <th>Ket In</th>
                                  <th>Out</th>
                                  <th>Ket Out</th>
                                  <th>Status</th>
                                  <th>Upload Date</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                      </thead>
                      <tbody>

                          <?php if (isset($dahboard_karyawan_kpi)): ?>
                              <?php foreach ($dahboard_karyawan_kpi as $key_dahboard_karyawan): ?>
                                  
                                  <tr>
                                      <td data-label="Name" >
                                          <div class="d-flex py-1 align-items-center">
                                              <?php if (isset($key_dahboard_karyawan->akun->data_diri->foto)): ?>
                                                  <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$key_dahboard_karyawan->akun->data_diri->foto}})"></span>
                                              <?php else: ?>
                                                  <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/profil.png)"></span>
                                              <?php endif ?>
                                              <div class="flex-fill">
                                                      <?php if (isset($key_dahboard_karyawan->akun->data_diri)): ?>
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

                                      <td data-label="Title" >
                                          {{$key_dahboard_karyawan->tanggal_absen}}
                                                         
                                          
                                      </td>

                                      <td data-label="Title" >
                                        <span class="badge bg-success ms-auto icon-login " class="">{{$key_dahboard_karyawan->jam_masuk}}</span>
                                                         
                                          
                                      </td>
                                      <td data-label="Title" >
                                          {{$key_dahboard_karyawan->ket_masuk}}
                                                         
                                          
                                      </td>

                                      <td data-label="Title" >
                                        <span class="badge bg-danger ms-auto icon-login " class="">{{$key_dahboard_karyawan->jam_pulang}}</span>
                                                         
                                          
                                      </td>

                                      <td data-label="Title" >
                                          {{$key_dahboard_karyawan->ket_pulang}}
                                                         
                                          
                                      </td>

                                      <td data-label="Title" >
                                          {{$key_dahboard_karyawan->status}}
                                                         
                                          
                                      </td>
                                      <td data-label="Title" >
                                          {{$key_dahboard_karyawan->tanggal}}
                                                         
                                          
                                      </td>
                                      <!-- <td data-label="Title" >
                                          <div>TH_PWX01</div>
                                          
                                      </td> -->
                                      <td>  
                                                  <!-- <a  href="../dashboard-panel/?halaman=management-karyawan&&id={{$key_dahboard_karyawan->akun->id}}"  -->
                                                  <a href="{{route('karyawan-aktif', 'semua')}}?id={{$key_dahboard_karyawan->akun->id}}" 
                                              
                                                      >
                                                  <!-- data-bs-toggle="modal" data-bs-target="#detail-karyawan"  -->


                                                      <span class="badge bg-success me-1 center-foto ">
                                                          <div class="ringht-jabatan">
                                                              <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                          </div>
                                                      </span>
                                                  </a>
                                          </td>
                                      <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                              
                                          

                                          <td>  
                                                  <a class="hapus_semua" data-bs-toggle="modal" data-bs-target="#model_hapus_semua"  href="{{route('status_kepegawaian')}}?id={{Crypt::encrypt($key_dahboard_karyawan->akun->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_karyawan->akun->id)}}&&status={{Crypt::encrypt('Semua')}}&&key={{Crypt::encrypt('Hapus')}}">
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


