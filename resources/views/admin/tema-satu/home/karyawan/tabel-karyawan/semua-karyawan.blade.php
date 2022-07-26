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


            
                                        <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>   
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
                                                                                                <a href="#" class="btn  btn-icon view_data_exel" aria-label="Twitter" data-flashdata="{{$dahboard_akun_cookie->id_perusahaan}}">
                                                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/square-plus -->
                                                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/file -->
                                                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/files -->
                                                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/file-upload -->
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><polyline points="9 14 12 11 15 14" /></svg>
                                                                                                </a>
                                                                                                <a href="{{route('data_diri')}}/../../file/exel/template karyawan.xlsx" class="btn  btn-icon" aria-label="Twitter">
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
                                        <?php endif ?>  
                                    



        </div>

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


<!-- ======================== Modal Tambah Data Karyawan Exel ============================== -->
    <div class="modal modal-blur fade" id="modal-create-karyawan-exel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Upload Data Karyawan Bentuk Exel</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('create-karyawan-aktif-exel')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="modal-body">
                            <!-- <div class="mb-3">
                                <label class="form-label" >Name</label>
                                <input type="text" class="form-control nama" id="data_id" name="example-text-input" placeholder="Your report name">
                            </div> -->
                            <input type="hidden" class="form-control" id="data_id_upload_exel_karyawan" name="id_perusahaan" placeholder="Your report name">
                            
                            
                            
                            <div class="mb-3">
                                <label class="form-label required">Create Exel Karyawan</label>
                                <input type="file" class="form-control" id="file" name="file" placeholder="No WhatsApp Aktif..." required>
                                <span id="file_error" class="text-danger font-size-info-alert"></span>
                            </div>
                            <!-- <label class="form-label">Status Kepegawaian</label>
                            <div class="form-selectgroup-boxes row mb-3">
                                <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                          <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                                          <span class="form-selectgroup-label d-flex align-items-center p-3">
                                              <span class="me-3">
                                                  <span class="form-selectgroup-check"></span>
                                              </span>
                                              <span class="form-selectgroup-label-content">
                                                    <span class="form-selectgroup-title strong mb-1">Aktif</span>
                                                    <span class="d-block text-muted">Pilih Aktif Jika Status Karyawan Saat Ini Masih Aktif di Perusahaan</span>
                                              </span>
                                          </span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                        <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                                <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                                <span class="form-selectgroup-title strong mb-1">Tidak Aktif</span>
                                                <span class="d-block text-muted">Pilih Tidak Aktif Jika Status Karyawan Saat Ini Sudah Tidak Aktif di Perusahaan</span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label class="form-label">Report url</label>
                                        <div class="input-group input-group-flat">
                                            <span class="input-group-text">
                                              https://tabler.io/reports/
                                            </span>
                                            <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="mb-3">
                                      <label class="form-label">Visibility</label>
                                      <select class="form-select">
                                          <option value="1" selected>Private</option>
                                          <option value="2">Public</option>
                                          <option value="3">Hidden</option>
                                      </select>
                                  </div>
                                </div>
                            </div> -->
                      </div>
                      <!-- <div class="modal-body">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="mb-3">
                                      <label class="form-label">Client name</label>
                                      <input type="text" class="form-control">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="mb-3">
                                      <label class="form-label">Reporting period</label>
                                      <input type="date" class="form-control">
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div>
                                      <label class="form-label">Additional information</label>
                                      <textarea class="form-control" rows="3"></textarea>
                                  </div>
                              </div>
                          </div>
                      </div> -->
                      <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Create new Karyawan
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
<!-- ======================== Akhir Modal Tambah Data Karyawan Exel ======================== -->

<!-- ======================== Modal Tambah Data Karyawan ============================== -->
    <div class="modal modal-blur fade" id="modal-create-karyawan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Create Karyawan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('create-karyawan-aktif')}}" method="post">
                    {{ csrf_field() }}
                      <div class="modal-body">
                            <!-- <div class="mb-3">
                                <label class="form-label" >Name</label>
                                <input type="text" class="form-control nama" id="data_id" name="example-text-input" placeholder="Your report name">
                            </div> -->
                            <input type="hidden" class="form-control" id="data_id" value="{{$dahboard_akun_cookie->id_perusahaan}}" name="id_perusahaan" placeholder="Your report name">
                            <div class="mb-3">
                                <label class="form-label required">Nik Karyawan</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Nik Karyawan" required>
                                <span id="nik_error" class="text-danger font-size-info-alert"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email Aktif</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Aktif..." required>
                                <span id="email_error" class="text-danger font-size-info-alert"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">No WhatsApp Aktif</label>
                                <input type="text" class="form-control" id="no" name="no_wa" placeholder="No WhatsApp Aktif..." required>
                                <span id="no_error" class="text-danger font-size-info-alert"></span>
                            </div>

                            <div class="mb-3">
                                <label class="form-label required">No Telepon/HP Aktif</label>
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No WhatsApp Aktif..." required>
                                <span id="no_error" class="text-danger font-size-info-alert"></span>
                            </div>


                                    <div class="mb-3">
                                      <label class="form-label required">Nama Lengkap</label>
                                      <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="name_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Nama Panggilan</label>
                                      <input type="text" class="form-control" id="nama_panggil" name="nama_panggil" placeholder="Nama Panggilan..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="panggil_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Tempat Lahir</label>
                                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="tempat_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Tanggal Lahir</label>
                                      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir..." required>
                                      <span id="tanggal_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">NIK KTP</label>
                                      <input type="text" class="form-control" id="nik" name="nik_ktp" placeholder="NIK..." required>
                                      <span id="nik_error" class="text-danger font-size-info-alert"></span>
                                    </div>


                                    <div class="mb-3">
                                      <label class="form-label required">Agama</label>
                                      <div >
                                        <select class="form-select" id="agama" name="agama" required>
                                          <option hidden></option>
                                          <option value="ISLAM">              ISLAM</option>
                                          <option value="KRISTEN PROTESTAN">  KRISTEN PROTESTAN</option>
                                          <option value="KRISTEN KATHOLIK">   KRISTEN KATHOLIK</option>
                                          <option value="HINDU">              HINDU</option>
                                          <option value="BUDHA">              BUDHA</option>
                                          <option value="KONG HU CHU">        KONG HU CHU</option>
                                        </select>
                                        <span id="agama_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Jenis Kelamin</label>
                                      <div >
                                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                          <option hidden></option>
                                          <option value="LAKI-LAKI">LAKI-LAKI</option>
                                          <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                                        <span id="jenis_kelamin_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Status Kawin</label>
                                      <div >
                                        <select class="form-select" id="status_kawin" name="status_kawin" required>
                                          <option hidden></option>
                                          <option value="SUDAH KAWIN">  SUDAH KAWIN</option>
                                          <option value="BELUM KAWIN">  BELUM KAWIN</option>
                                          <option value="JANDA">        JANDA</option>
                                          <option value="DUDA">         DUDA</option>
                                        </select>
                                        <span id="status_kawin_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label">No BPJS (tidak wajib di isi)</label>
                                      <input type="text" class="form-control" name="no_bpjs" placeholder="No BPJS...">
                                      
                                    </div>
                                    
                                    <div class="mb-3">
                                      <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <div class="row">
                                              <div class="col-xl-6 col-md-6 col-sm-6">
                                                  <label class="form-label required">Tinggi Badan</label>
                                                  <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi Badan..." required>
                                                  <span id="tinggi_badan_error" class="text-danger font-size-info-alert"></span>
                                              </div>
                                              <div class="col-xl-6 col-md-6 col-sm-6">
                                                  <label class="form-label required">Berat Badan</label>
                                                  <input type="number" class="form-control" id="berat_badan" name="berat_badan" placeholder="Berat Badan..." required>
                                                  <span id="berat_badan_error" class="text-danger font-size-info-alert"></span>
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Golongan Darah</label>
                                      <div >
                                        <select class="form-select" id="golongan_darah" name="golongan_darah" required>
                                          <option hidden></option>
                                          <option value="A">    A</option>
                                          <option value="B">    B</option>
                                          <option value="AB">   AB</option>
                                          <option value="O">    O</option>
                                        </select>
                                        <span id="golongan_darah_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Suku</label>
                                      <input type="text" class="form-control" id="suku" name="suku" placeholder="Suku..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="suku_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Total Bersaudara</label>
                                      <input type="number" class="form-control" id="total_saudara" name="total_saudara" placeholder="Total Bersaudara..." required>
                                      <span id="total_saudara_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Alamat (Jalan) Sesuai KTP</label>
                                      <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" placeholder="Alamat (Jalan) Sesuai KTP" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                      <span id="alamat_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Provinsi Sesuai KTP</label>
                                      <input type="text" class="form-control" id="provinsi_ktp" name="provinsi_ktp" placeholder="Provinsi Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="provinsi_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Kota Sesuai KTP</label>
                                      <input type="text" class="form-control" id="kota_ktp" name="kota_ktp" placeholder="Kota Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="kota_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                    
                                    <div class="mb-3">
                                      <label class="form-label required">Kabupaten Sesuai KTP</label>
                                      <input type="text" class="form-control" id="kabupaten_ktp" name="kabupaten_ktp" placeholder="Kabupaten Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="kabupaten_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Kecamatan Sesuai KTP</label>
                                      <input type="text" class="form-control" id="kecamatan_ktp" name="kecamatan_ktp" placeholder="Kecamatan Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="kecamatan_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Kelurahan / Desa Sesuai KTP</label>
                                      <input type="text" class="form-control" id="kelurahan_ktp" name="kelurahan_ktp" placeholder="Kelurahan / Desa Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="kelurahan_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Kode Pos Sesuai KTP</label>
                                      <input type="number" class="form-control" id="kode_pos_ktp" name="kode_pos_ktp" placeholder="Kode Pos Sesuai KTP..." required>
                                      <span id="kode_pos_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                    







                                    <hr>
                                  
                                    <div class="mb-3">
                                        <label class="form-label required">Alamat Domisili</label>
                                        <textarea class="form-control" id="alamat_domisili" name="alamat_domisili" placeholder="Alamat Domisili" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                        <span id="alamat_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                        {{-- <label class="form-check"> --}}
                                            {{-- <input type="checkbox" class="form-check-input" name="setuju"  value="yes" onclick="myFunction()"/> --}}
                                            <span class="form-check-label font-color-small" >Info.!! Tulis kembali jika alamat domisili sama dengan alamat KTP</span>
                                        {{-- </label> --}}
                                    </div>

                                    
                                
                                    <div class="mb-3">
                                        <label class="form-label required">Provinsi Domisili</label>
                                        <input type="text" class="form-control" id="provinsi_domisili" name="provinsi_domisili" placeholder="Provinsi Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="provinsi_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label class="form-label required">Kota Domisili</label>
                                        <input type="text" class="form-control" id="kota_domisili" name="kota_domisili" placeholder="Kota Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kota_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label required">Kabupaten Domisili</label>
                                        <input type="text" class="form-control" id="kabupaten_domisili" name="kabupaten_domisili" placeholder="Kabupaten Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kabupaten_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label class="form-label required">Kecamatan Domisili</label>
                                        <input type="text" class="form-control" id="kecamatan_domisili" name="kecamatan_domisili" placeholder="Kecamatan Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kecamatan_domisili_error" class="text-danger font-size-info-alert"></span>
                                    
                                    </div>
                                
                                    <div class="mb-3">
                                        <label class="form-label required">Kelurahan / Desa Domisili</label>
                                        <input type="text" class="form-control" id="kelurahan_domisili" name="kelurahan_domisili" placeholder="Kelurahan / Desa Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kelurahan_domisili_error" class="text-danger font-size-info-alert"></span>
                                    
                                    </div>
                                
                                
                                    <div class="mb-3">
                                        <label class="form-label">Instagram (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="instagram" placeholder="instagram...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Facebook (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="fb" placeholder="Facebook...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">LinkedIn (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Twitter (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="twitter" placeholder="Twitter...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label required">Ceritakan Tentang Diri Karyawan</label>
                                        <textarea class="form-control" id="cerita_diri" name="cerita_diri" placeholder="Ceritakan Tentang Diri Anda Maximal 150 Karakter" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                        <span id="cerita_diri_error" class="text-danger font-size-info-alert"></span>
                                    
                                    </div>

                                    <hr>

                                    <div class="mb-3">
                                        <label class="form-label required">Tanggal Join</label>
                                        <input type="date" class="form-control" id="tanggal_join" name="tanggal_join" placeholder="Kabupaten Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kabupaten_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Status Resign</label>
                                      <div >
                                        <select class="form-select" id="status_resign" name="status_resign" required>
                                          <option hidden></option>
                                          <option value="Aktif">              Aktif</option>
                                          <option value="Tidak Aktif">                Tidak Aktif</option>
                                          <option value="Resign">           Resign</option>
                                        </select>
                                        <span id="status_kawin_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Dingtalk (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="dingtalk" placeholder="Dingtalk...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nomor Rekening (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="norek" placeholder="Nomor Rekening...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Bank (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="bank" placeholder="Bank...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Kode Bank (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="kode_bank" placeholder="Kode Bank...">
                                    </div>

                                    
                            <!-- <label class="form-label">Status Kepegawaian</label>
                            <div class="form-selectgroup-boxes row mb-3">
                                <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                          <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                                          <span class="form-selectgroup-label d-flex align-items-center p-3">
                                              <span class="me-3">
                                                  <span class="form-selectgroup-check"></span>
                                              </span>
                                              <span class="form-selectgroup-label-content">
                                                    <span class="form-selectgroup-title strong mb-1">Aktif</span>
                                                    <span class="d-block text-muted">Pilih Aktif Jika Status Karyawan Saat Ini Masih Aktif di Perusahaan</span>
                                              </span>
                                          </span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-selectgroup-item">
                                        <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                                            <span class="me-3">
                                                <span class="form-selectgroup-check"></span>
                                            </span>
                                            <span class="form-selectgroup-label-content">
                                                <span class="form-selectgroup-title strong mb-1">Tidak Aktif</span>
                                                <span class="d-block text-muted">Pilih Tidak Aktif Jika Status Karyawan Saat Ini Sudah Tidak Aktif di Perusahaan</span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label class="form-label">Report url</label>
                                        <div class="input-group input-group-flat">
                                            <span class="input-group-text">
                                              https://tabler.io/reports/
                                            </span>
                                            <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="mb-3">
                                      <label class="form-label">Visibility</label>
                                      <select class="form-select">
                                          <option value="1" selected>Private</option>
                                          <option value="2">Public</option>
                                          <option value="3">Hidden</option>
                                      </select>
                                  </div>
                                </div>
                            </div> -->
                      </div>
                      <!-- <div class="modal-body">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="mb-3">
                                      <label class="form-label">Client name</label>
                                      <input type="text" class="form-control">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="mb-3">
                                      <label class="form-label">Reporting period</label>
                                      <input type="date" class="form-control">
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div>
                                      <label class="form-label">Additional information</label>
                                      <textarea class="form-control" rows="3"></textarea>
                                  </div>
                              </div>
                          </div>
                      </div> -->
                      <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Create new Karyawan
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
<!-- ======================== Akhir Modal Tambah Data Karyawan ======================== -->

<!-- ======================== Modal detail karyawan ============================== -->

    <?php if (!isset($dahboard_karyawan_detail)): ?>
    <?php else: ?>
        <div class="modal modal-blur fade" id="detail-karyawan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Karyawan</h5>
                    <a href="{{route('karyawan-aktif', 'semua')}}">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
                </div>
                    <div class="modal-body">
                        @include('admin.tema-satu.home.karyawan.tabel-karyawan.detail.detail-karyawan')
                    </div>
               
                </div>
            </div>
        </div>
    <?php endif ?>
<!-- ======================== Modal detail karyawan ============================== -->

        
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
                                            <th>Status Kepegawaian</th>
                                            <th>Status Akun</th>
                                            <th class="w-1"></th>
                                            <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                                        
                                                
                                                <th class="w-1"></th>
                                                        
                                            <?php else: ?>
                                            <?php endif ?>
                                            
                                        </tr>
                                </thead>
                                <tbody>

                                    <?php if (count($dahboard_karyawan) > 0): ?>
                                        <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
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
                                                <td data-label="Title" >
                                                        <?php if (!isset($key_dahboard_karyawan->akun->riw_penempatan_wilayah)): ?>
                                                            <div>
                                                                    Tidak Ada
                                                            </div>
                                                            <span class="badge bg-warning ms-auto">Tidak Ada</span>
                                                            
                                                        <?php else: ?>
                                                            <div>
                                                                    {{$key_dahboard_karyawan->akun->riw_penempatan_wilayah->penempatan->provinsi}}, 
                                                                    {{$key_dahboard_karyawan->akun->riw_penempatan_wilayah->penempatan->kota}},
                                                                    {{$key_dahboard_karyawan->akun->riw_penempatan_wilayah->penempatan->kabupaten}},<br>
                                                                    {{$key_dahboard_karyawan->akun->riw_penempatan_wilayah->penempatan->kelurahan}},
                                                                    {{$key_dahboard_karyawan->akun->riw_penempatan_wilayah->penempatan->kecamatan}}
                                                            </div>
                                                            <span class="badge bg-warning ms-auto">{{$key_dahboard_karyawan->akun->riw_penempatan_wilayah->penempatan->alokasi}}</span>
                                                            <span class="badge bg-warning ms-auto">{{$key_dahboard_karyawan->akun->riw_penempatan_wilayah->penempatan->kode_alokasi}}</span>
                                                        
                                                        <?php endif ?>
                                                    
                                                </td>
                                                <!-- <td data-label="Title" >
                                                    <div>TH_PWX01</div>
                                                    
                                                </td> -->
                                                <td class="text-muted" data-label="Role" >
                                                        <?php if (!isset($key_dahboard_karyawan)): ?>
                                                            <span class="badge bg-success ms-auto">Tidak Ada</span>
                                                        <?php else: ?>
                                                            <?php if ($key_dahboard_karyawan->status_data == "Aktif"): ?>
                                                                <span class="badge bg-success ms-auto">{{$key_dahboard_karyawan->status_data}}</span>
                                                            <?php else: ?>
                                                            <?php endif ?>

                                                            <?php if ($key_dahboard_karyawan->status_data == "Tidak Aktif"): ?>
                                                                <span class="badge bg-danger ms-auto">{{$key_dahboard_karyawan->status_data}}</span>
                                                            <?php else: ?>
                                                            <?php endif ?>
                                                            <?php if ($key_dahboard_karyawan->status_data == "Resign"): ?>
                                                                <span class="badge bg-warning ms-auto">{{$key_dahboard_karyawan->status_data}}</span>
                                                            <?php else: ?>
                                                            <?php endif ?>
                                                        <?php endif ?>

                                                        
                                                </td>
                                                <td class="text-muted" data-label="Role" >
                                                    <?php if ($key_dahboard_karyawan->akun->status == "aktif"): ?>
                                                        <span class="badge bg-success me-1"></span>{{$key_dahboard_karyawan->akun->status}}
                                                    <?php else: ?>
                                                        <span class="badge bg-danger me-1"></span>{{$key_dahboard_karyawan->akun->status}}
                                                    <?php endif ?>
                                                    
                                                </td>
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

        <script>
            $(document).ready(function(){
                setTimeout(function(){
                    
                    $("#detail-karyawan").modal({
                            backdrop: 'static',
                            keyboard: true
                    }); 
                    $('#detail-karyawan').modal('show');
                }, 200);
                });
        </script>

       