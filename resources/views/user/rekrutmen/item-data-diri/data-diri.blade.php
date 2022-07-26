    <?php if (session()->has('alert-peringatan')): ?>
      <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
    <?php endif ?>

    <?php if (session()->has('alert-success')): ?>
        <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
    <?php endif ?>

    <div class="row row-cards">
        <div class="col-12">
            <?php if (!isset($rekrutment_data_diri)): ?>
                  <form  action="{{route('data_diri')}}" method="post" class="card form-clickk" enctype="multipart/form-data">
                      <div class="card-header">
                          <h4 class="card-title">Data Diri</h4> 
                          
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-xl-6">
                            <div class="row">
                              <div class="col-md-12 col-xl-12">
                                    {{ csrf_field() }}




                                    

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
                                      <label class="form-label required">Nik</label>
                                      <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK..." value="{{$rekrutment_nik_akun}}" readonly>
                                      <span id="nik_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Email Aktif</label>
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Email Aktif..." value="{{$rekrutment_email_akun}}" readonly>
                                      <span id="email_error" class="text-danger font-size-info-alert"></span>
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
                                    
                              </div>
                            </div>
                          </div>

                          <div class="col-xl-6">
                            <div class="row">
                              <div class="col-md-12 col-xl-12">
                              
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
                                    <label class="form-label required">Nomor WhatsApp</label>
                                    <input type="number" class="form-control" id="no_wa" name="no_wa" placeholder="Nomor WhatsApp..." required>
                                    <span id="no_wa_error" class="text-danger font-size-info-alert"></span>
                                  
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Nomor HP</label>
                                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP..." required>
                                    <span id="no_hp_error" class="text-danger font-size-info-alert"></span>
                                  
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Ceritakan Tentang Diri Anda</label>
                                    <textarea class="form-control" id="cerita_diri" name="cerita_diri" placeholder="Ceritakan Tentang Diri Anda Maximal 150 Karakter" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                    <span id="cerita_diri_error" class="text-danger font-size-info-alert"></span>
                                  
                                  </div>

                                  <div class="mb-3">
                                      <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-12 col-sm-12">
                                                      <label class="form-label required">Foto Diri</label>
                                                      <input type="file" class="form-control" id="preview_gambar" name="foto_profil" required>
                                                </div>
                                                <div class="col-xl-6 col-md-12 col-sm-12">
                                                  
                                                      <span class="form-check-label font-color-small font-size-info" >Info.!! Ukuran Gambar 4x6 Harus bertype JPG / PNG dan gambar tidak boleh lebih besar dari 1MB</span>
                                                
                                                </div>
                                            </div>
                                            </div>
                                      </div>
                                  </div>

                                    <div class="card-body  text-center">
                                      {{-- <span class="avatar avatar-xl mb-3 avatar-rounded" id="gambar_nodin" style="background-image: url(./static/avatars/000m.jpg)"></span> --}}
                                      <img src="{{ asset('') }}file/profil-dashboard/profil.png" id="gambar_nodin" class="avatar avatar-xl mb-3 avatar-rounded" style="width: 200px; height: 200px;" />
                                    </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card-footer text-end">
                        <div class="d-flex">
                          {{-- <a href="#" class="btn btn-link">Hapus</a> --}}
                          <button type="submit" class="btn btn-primary ms-auto">Kirim data</button>
                          {{-- <input type="submit" name="save" id="save" class="btn btn-info" value="Save" /> --}}
                        </div>
                      </div>

                  </form>
            <?php else: ?>  
                  <form  action="{{route('data_diri')}}" method="post" class="card form-clickk" >
                    <div class="card-header">
                        <h4 class="card-title">Data Diri</h4> 
                        
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-xl-6">
                          <div class="row">
                            <div class="col-md-6 col-xl-12">
                                  {{ csrf_field() }}
                                  <input type="hidden" class="form-control" name="cookie_data_diri" value="{{$_COOKIE['cookie-storage-user']}}">
                                  <div class="mb-3">
                                    <label class="form-label required">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->nama_lengkap}}" required>
                                    <span id="nama_lengkap_error" class="text-danger"></span>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Nama Panggilan</label>
                                    <input type="text" class="form-control" name="nama_panggil" placeholder="Nama Panggilan..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->nama_panggilan}}" required>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->tempat_lahir}}" required>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir..." value="{{$rekrutment_data_diri->tanggal_lahir}}" required>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Nik</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK..." value="{{$rekrutment_data_diri->nik}}" readonly>
                                    <span id="nik_error" class="text-danger font-size-info-alert"></span>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Email Aktif</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email Aktif..." value="{{$rekrutment_data_diri->email}}" readonly>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Agama</label>
                                    <div >
                                      <select class="form-select" name="agama">
                                        <option value="{{$rekrutment_data_diri->agama}}"  selected hidden>{{$rekrutment_data_diri->agama}}</option>
                                        <option value="ISLAM">              ISLAM</option>
                                        <option value="KRISTEN PROTESTAN">  KRISTEN PROTESTAN</option>
                                        <option value="KRISTEN KATHOLIK">   KRISTEN KATHOLIK</option>
                                        <option value="HINDU">              HINDU</option>
                                        <option value="BUDHA">              BUDHA</option>
                                        <option value="KONG HU CHU">        KONG HU CHU</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Jenis Kelamin</label>
                                    <div >
                                      <select class="form-select" name="jenis_kelamin">
                                        <option value="{{$rekrutment_data_diri->jenis_kelamin}}"  selected hidden>{{$rekrutment_data_diri->jenis_kelamin}}</option>
                                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                                        <option value="PEREMPUAN">PEREMPUAN</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Status Kawin</label>
                                    <div >
                                      <select class="form-select" name="status_kawin">
                                        <option value="{{$rekrutment_data_diri->status_perkawinan}}"  selected hidden>{{$rekrutment_data_diri->status_perkawinan}}</option>
                                        <option value="SUDAH KAWIN">  SUDAH KAWIN</option>
                                        <option value="BELUM KAWIN">  BELUM KAWIN</option>
                                        <option value="JANDA">        JANDA</option>
                                        <option value="DUDA">         DUDA</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">No BPJS (tidak wajib di isi)</label>
                                    <input type="number" class="form-control" name="no_bpjs" placeholder="No BPJS..." value="{{$rekrutment_data_diri->no_bpjs}}">
                                  </div>

                                  <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                        <div class="row">
                                          <div class="col-xl-6 col-md-6 col-sm-6">
                                              <label class="form-label required">Tinggi Badan</label>
                                              <input type="number" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan..." value="{{$rekrutment_data_diri->tinggi_badan}}" required>
                                          </div>
                                          <div class="col-xl-6 col-md-6 col-sm-6">
                                              <label class="form-label required">Berat Badan</label>
                                              <input type="number" class="form-control" name="berat_badan" placeholder="Berat Badan..." value="{{$rekrutment_data_diri->berat_badan}}" required>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Golongan Darah</label>
                                    <div >
                                      <select class="form-select" name="golongan_darah">
                                        <option value="{{$rekrutment_data_diri->golongan_darah}}"  selected hidden>{{$rekrutment_data_diri->golongan_darah}}</option>
                                        <option value="A">    A</option>
                                        <option value="B">    B</option>
                                        <option value="AB">   AB</option>
                                        <option value="O">    O</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Suku</label>
                                    <input type="text" class="form-control" name="suku" placeholder="Suku..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->suku}}" required>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Total Bersaudara</label>
                                    <input type="number" class="form-control" name="total_saudara" placeholder="Total Bersaudara..." value="{{$rekrutment_data_diri->total_saudara}}" required>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label required">Alamat (Jalan) Sesuai KTP</label>
                                    <textarea class="form-control" name="alamat_ktp" placeholder="Alamat (Jalan) Sesuai KTP" onkeyup="this.value = this.value.toUpperCase()" required>{{$rekrutment_data_diri->alamat_ktp}}</textarea>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Provinsi Sesuai KTP</label>
                                    <input type="text" class="form-control" name="provinsi_ktp" placeholder="Provinsi Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->provinsi_ktp}}" required>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Kota Sesuai KTP</label>
                                    <input type="text" class="form-control" name="kota_ktp" placeholder="Kota Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->kota_ktp}}" required>
                                  </div>
                                  
                                  <div class="mb-3">
                                    <label class="form-label required">Kabupaten Sesuai KTP</label>
                                    <input type="text" class="form-control" name="kabupaten_ktp" placeholder="Kabupaten Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->kabupaten_ktp}}" required>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Kecamatan Sesuai KTP</label>
                                    <input type="text" class="form-control" name="kecamatan_ktp" placeholder="Kecamatan Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->kecamatan_ktp}}" required>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Kelurahan / Desa Sesuai KTP</label>
                                    <input type="text" class="form-control" name="kelurahan_ktp" placeholder="Kelurahan / Desa Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->kelurahan_ktp}}" required>
                                  </div>
                              
                                  <div class="mb-3">
                                    <label class="form-label required">Kode Pos Sesuai KTP</label>
                                    <input type="number" class="form-control" name="kode_pos_ktp" placeholder="Kode Pos Sesuai KTP..." value="{{$rekrutment_data_diri->pos_ktp}}" required>
                                  </div>
                                  
                            </div>
                          </div>
                        </div>

                        <div class="col-xl-6">
                          <div class="row">
                            <div class="col-md-6 col-xl-12">
                            
                                <div class="mb-3">
                                  <label class="form-label required">Alamat Domisili</label>
                                  <textarea class="form-control" name="alamat_domisili" placeholder="Alamat Domisili" onkeyup="this.value = this.value.toUpperCase()" required>{{$rekrutment_data_diri->alamat_domisili}}</textarea>
                                  
                                </div>

                                <div class="mb-3">
                                  {{-- <label class="form-check"> --}}
                                      {{-- <input type="checkbox" class="form-check-input" name="setuju"  value="yes" onclick="myFunction()"/> --}}
                                      <span class="form-check-label font-color-small" >Info.!! Tulis kembali jika alamat domisili sama dengan alamat KTP</span>
                                  {{-- </label> --}}
                                </div>

                                
                            
                                <div class="mb-3">
                                  <label class="form-label required">Provinsi Domisili</label>
                                  <input type="text" class="form-control" id="provinsi_domisili" name="provinsi_domisili" placeholder="Provinsi Domisili..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->provinsi_domisili}}" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kota Domisili</label>
                                  <input type="text" class="form-control" name="kota_domisili" placeholder="Kota Domisili..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->kota_domisili}}" required>
                                </div>
                                
                                <div class="mb-3">
                                  <label class="form-label required">Kabupaten Domisili</label>
                                  <input type="text" class="form-control" name="kabupaten_domisili" placeholder="Kabupaten Domisili..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->kabupaten_domisili}}" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kecamatan Domisili</label>
                                  <input type="text" class="form-control" name="kecamatan_domisili" placeholder="Kecamatan Domisili..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->kecamatan_domisili}}" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kelurahan / Desa Domisili</label>
                                  <input type="text" class="form-control" name="kelurahan_domisili" placeholder="Kelurahan / Desa Domisili..." onkeyup="this.value = this.value.toUpperCase()" value="{{$rekrutment_data_diri->kelurahan_domisili}}" required>
                                </div>
                            
                            
                                <div class="mb-3">
                                  <label class="form-label">Instagram (tidak wajib di isi)</label>
                                  <input type="text" class="form-control" name="instagram" placeholder="instagram..." value="{{$rekrutment_data_diri->instagram}}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Facebook (tidak wajib di isi)</label>
                                    <input type="text" class="form-control" name="fb" placeholder="facebook..." value="{{$rekrutment_data_diri->facebook}}">
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">LinkedIn (tidak wajib di isi)</label>
                                    <input type="text" class="form-control" name="linkedin" placeholder="linkedin..." value="{{$rekrutment_data_diri->linkedin}}">
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">Twitter (tidak wajib di isi)</label>
                                    <input type="text" class="form-control" name="twitter" placeholder="twitter..." value="{{$rekrutment_data_diri->twitter}}">
                                  </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Nomor WhatsApp</label>
                                  <input type="number" class="form-control" name="no_wa" placeholder="Nomor WhatsApp..." value="{{$rekrutment_data_diri->nomor_whatsapp}}" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Nomor HP</label>
                                  <input type="number" class="form-control" name="no_hp" placeholder="Nomor HP..." value="{{$rekrutment_data_diri->nomor_hp}}" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Ceritakan Tentang Diri Anda</label>
                                  <textarea class="form-control" name="cerita_diri" placeholder="Ceritakan Tentang Diri Anda" onkeyup="this.value = this.value.toUpperCase()" required>{{$rekrutment_data_diri->cerita_diri}}</textarea>
                                </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-footer text-end">
                      <div class="d-flex">
                        {{-- <a href="#" class="btn btn-link">Hapus</a> --}}
                        <button type="submit" class="btn btn-primary ms-auto">Kirim data</button>
                        {{-- <input type="submit" name="save" id="save" class="btn btn-info" value="Save" /> --}}
                      </div>
                    </div>

                </form>
            <?php endif ?>   
        </div>
    </div>