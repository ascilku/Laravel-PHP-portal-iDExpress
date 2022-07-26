 
<?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_ayah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Hapus Orang Data Tua.?</div>
            <div>Mengahapus Data Orang Tua, berarti juga menghapus semua data berkaitan dengan orang tua.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="hapus_ayah" data-bs-dismiss="modal">Ya, Hapus Data Orang Tua</button>
        </div>
        </div>
    </div>
</div>


<div class="row row-cards bottom-footer">
    <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                              <th>Hubungan</th>
                              <th>Keterangan</th>
                              <th>Nama Keluarga</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                              
                          <tr>
                              <td>Data Ayah</td>

                                <?php if ($rekrutment_data_orang_tua != ""): ?>
                                    <td>
                                        <p class="font-color-small-hijau ">Lengkap</p>
                                    </td>
                                    <td>
                                      {{$rekrutment_data_orang_tua->nama_lengkap}}
                                    </td>
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Belum Ada Data)</p>
                                    </td>
                                    <td>
                                    </td>
                                <?php endif ?>

                                <?php if ($rekrutment_data_orang_tua != ""): ?>
                                  <td>
                                    
                                      
                                        <a href="#" class="edit-orang-tua"
                                                data-id="{{$rekrutment_data_orang_tua->id}}" 
                                                data-id_akun="{{$rekrutment_data_orang_tua->id_akun}}" 
                                                data-hubungan="{{$rekrutment_data_orang_tua->hubungan}}" 
                                                data-nama_lengkap="{{$rekrutment_data_orang_tua->nama_lengkap}}" 
                                                data-tempat_lahir="{{$rekrutment_data_orang_tua->tempat_lahir}}" 
                                                data-tanggal_lahir="{{$rekrutment_data_orang_tua->tanggal_lahir}}" 
                                                data-agama="{{$rekrutment_data_orang_tua->agama}}" 
                                                data-alamat_ktp="{{$rekrutment_data_orang_tua->alamat_ktp}}" 
                                                data-provinsi_ktp="{{$rekrutment_data_orang_tua->provinsi_ktp}}" 
                                                data-kota_ktp="{{$rekrutment_data_orang_tua->kota_ktp}}" 
                                                data-kabupaten_ktp="{{$rekrutment_data_orang_tua->kabupaten_ktp}}" 
                                                data-kecamatan_ktp="{{$rekrutment_data_orang_tua->kecamatan_ktp}}" 
                                                data-kelurahan_ktp="{{$rekrutment_data_orang_tua->kelurahan_ktp}}" 
                                                data-no_hp="{{$rekrutment_data_orang_tua->no_hp}}" 
                                        >
                                            <span class="badge bg-warning me-1 center-foto ">
                                                <div class="ringht-jabatan">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                </div>
                                            </span>
                                        </a> |
                                        <a class="hapus_ayah" data-bs-toggle="modal" data-bs-target="#model_hapus_ayah"  href="{{route('hapus_orang_tua')}}?id={{Crypt::encrypt($rekrutment_data_orang_tua->id)}}">
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
                          <tr>
                            <td>Data Ibu</td>
                                <?php if ($rekrutment_data_ibu != ""): ?>
                                    <td>
                                        <p class="font-color-small-hijau ">Lengkap</p>
                                    </td>
                                    <td>
                                      {{$rekrutment_data_ibu->nama_lengkap}}
                                    </td>
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Belum Ada Data)</p>
                                    </td>
                                    <td>
                                    </td>
                                <?php endif ?>

                                <?php if ($rekrutment_data_ibu != ""): ?>
                                  <td>
                                    
                                      <a href="#" class="edit-orang-tua"
                                              data-id="{{$rekrutment_data_ibu->id}}" 
                                              data-id_akun="{{$rekrutment_data_ibu->id_akun}}" 
                                              data-hubungan="{{$rekrutment_data_ibu->hubungan}}" 
                                              data-nama_lengkap="{{$rekrutment_data_ibu->nama_lengkap}}" 
                                              data-tempat_lahir="{{$rekrutment_data_ibu->tempat_lahir}}" 
                                              data-tanggal_lahir="{{$rekrutment_data_ibu->tanggal_lahir}}" 
                                              data-agama="{{$rekrutment_data_ibu->agama}}" 
                                              data-alamat_ktp="{{$rekrutment_data_ibu->alamat_ktp}}" 
                                              data-provinsi_ktp="{{$rekrutment_data_ibu->provinsi_ktp}}" 
                                              data-kota_ktp="{{$rekrutment_data_ibu->kota_ktp}}" 
                                              data-kabupaten_ktp="{{$rekrutment_data_ibu->kabupaten_ktp}}" 
                                              data-kecamatan_ktp="{{$rekrutment_data_ibu->kecamatan_ktp}}" 
                                              data-kelurahan_ktp="{{$rekrutment_data_ibu->kelurahan_ktp}}" 
                                              data-no_hp="{{$rekrutment_data_ibu->no_hp}}" 
                                      >
                                          <span class="badge bg-warning me-1 center-foto ">
                                              <div class="ringht-jabatan">
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                              </div>
                                          </span>
                                      </a>|
                                      <a class="hapus_ayah" data-bs-toggle="modal" data-bs-target="#model_hapus_ayah"  href="{{route('hapus_orang_tua')}}?id={{Crypt::encrypt($rekrutment_data_ibu->id)}}">
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
                          <tr>
                              <td>Data Wali <br>{Tante, Saudara, Sepupu}</td>
                                <?php if ($rekrutment_data_wali != ""): ?>
                                    <td>
                                        <p class="font-color-small-hijau ">Lengkap</p>
                                    </td>
                                    <td>
                                      {{$rekrutment_data_wali->nama_lengkap}}
                                    </td>
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Belum Ada Data)</p>
                                    </td>
                                    <td>
                                    </td>
                                <?php endif ?>

                                <?php if ($rekrutment_data_wali != ""): ?>
                                <td>
                                  
                                      <a href="#" class="edit-orang-tua"
                                              data-id="{{$rekrutment_data_wali->id}}" 
                                              data-id_akun="{{$rekrutment_data_wali->id_akun}}" 
                                              data-hubungan="{{$rekrutment_data_wali->hubungan}}" 
                                              data-nama_lengkap="{{$rekrutment_data_wali->nama_lengkap}}" 
                                              data-tempat_lahir="{{$rekrutment_data_wali->tempat_lahir}}" 
                                              data-tanggal_lahir="{{$rekrutment_data_wali->tanggal_lahir}}" 
                                              data-agama="{{$rekrutment_data_wali->agama}}" 
                                              data-alamat_ktp="{{$rekrutment_data_wali->alamat_ktp}}" 
                                              data-provinsi_ktp="{{$rekrutment_data_wali->provinsi_ktp}}" 
                                              data-kota_ktp="{{$rekrutment_data_wali->kota_ktp}}" 
                                              data-kabupaten_ktp="{{$rekrutment_data_wali->kabupaten_ktp}}" 
                                              data-kecamatan_ktp="{{$rekrutment_data_wali->kecamatan_ktp}}" 
                                              data-kelurahan_ktp="{{$rekrutment_data_wali->kelurahan_ktp}}" 
                                              data-no_hp="{{$rekrutment_data_wali->no_hp}}" 
                                      >
                                          <span class="badge bg-warning me-1 center-foto ">
                                              <div class="ringht-jabatan">
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                              </div>
                                          </span>
                                      </a>|
                                      <a class="hapus_ayah" data-bs-toggle="modal" data-bs-target="#model_hapus_ayah"  href="{{route('hapus_orang_tua')}}?id={{Crypt::encrypt($rekrutment_data_wali->id)}}">
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

                        </tbody>
                    </table>
                </div>
              <form  action="{{route('data_orang_tua_karyawan')}}" method="post" class="card ">
                <div class="card-header">
                      <h4 class="card-title">Data Orang Tua / Wali</h4> 
                      
                  </div>
                  <div class="card-body">
                    
                    <div class="row">
                      <div class="col-xl-6 center">
                        <div class="row">
                          <div class="col-md-6 col-xl-12">
                                {{ csrf_field() }}

                                <div class="mb-3">
                                  <label class="form-label required">Hubungan Keluarga</label>
                                  <div >
                                    <!-- <select class="form-select" name="hubungan" id="hubungan" required> -->

                                    <select class="form-select" name="hubungan" id="hubungan">                                    <option disabled selected hidden></option>
                                    <option value="AYAH">     AYAH</option>
                                    <option value="IBU">      IBU</option>
                                    <option value="WALI">     WALI</option>
                                      <!-- <?php if ($rekrutment_data_orang_tua != ""): ?> -->

                                      <!-- <?php else: ?> -->
                                          
                                      <!-- <?php endif ?> -->

                                      <!-- <?php if ($rekrutment_data_ibu != ""): ?> -->

                                      <!-- <?php else: ?> -->
                                          
                                      <!-- <?php endif ?> -->

                                      <!-- <?php if ($rekrutment_data_wali != ""): ?> -->

                                      <!-- <?php else: ?> -->
                                          
                                      <!-- <?php endif ?> -->
                                      
                                      
                                    </select>
                                  </div>
                                </div>

                                <input type="hidden" name="id_akun" value="{{$dahboard_akun_cookie->id}}">
                                <input type="hidden" name="id" id="id">
                                  

                                <div class="mb-3">
                                  <label class="form-label required">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="nama_lengkap_" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." onkeyup="this.value = this.value.toUpperCase()" required>
                                  <span id="nama_lengkap_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Tempat Lahir</label>
                                  <input type="text" class="form-control" id="tempat_lahir_" name="tempat_lahir" placeholder="Tempat Lahir..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Tanggal Lahir</label>
                                  <input type="date" class="form-control" id="tanggal_lahir_" name="tanggal_lahir" placeholder="Tanggal Lahir..." required>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Agama</label>
                                  <div >
                                    <select class="form-select" name="agama" id="agama">
                                      <option disabled selected hidden></option>
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
                                  <label class="form-label required">Alamat (Jalan) Sesuai KTP</label>
                                  <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" placeholder="Alamat (Jalan) Sesuai KTP" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Provinsi Sesuai KTP</label>
                                  <input type="text" class="form-control" id="provinsi_ktp" name="provinsi_ktp" placeholder="Provinsi Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kota Sesuai KTP</label>
                                  <input type="text" class="form-control" id="kota_ktp" name="kota_ktp" placeholder="Kota Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>
                                
                                <div class="mb-3">
                                  <label class="form-label required">Kabupaten Sesuai KTP</label>
                                  <input type="text" class="form-control" id="kabupaten_ktp" name="kabupaten_ktp" placeholder="Kabupaten Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kecamatan Sesuai KTP</label>
                                  <input type="text" class="form-control" id="kecamatan_ktp" name="kecamatan_ktp" placeholder="Kecamatan Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kelurahan / Desa Sesuai KTP</label>
                                  <input type="text" class="form-control" id="kelurahan_ktp" name="kelurahan_ktp" placeholder="Kelurahan / Desa Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Nomor HP</label>
                                  <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP..." required>
                                </div>
      
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="card-footer text-end">
                    <div class="d-flex">
                      <a href="#" class="btn btn-link">Hapus</a>
                      <button type="submit" class="btn btn-primary ms-auto">Kirim data</button>
                      {{-- <input type="submit" name="save" id="save" class="btn btn-info" value="Save" /> --}}
                    </div>
                  </div>

              </form>
        
    </div>
</div>