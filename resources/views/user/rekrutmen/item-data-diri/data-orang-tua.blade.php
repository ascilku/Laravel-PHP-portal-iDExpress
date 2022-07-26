 
<?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>


<div class="row row-cards">
    <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                              <th>Hubungan</th>
                              <th>Keterangan</th>
                              <th>Nama Keluarga</th>
                              {{-- <th>Aksi</th> --}}
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

                              {{-- <td>
                                <p class="font-color-small-">(Belum Ada Data)</p>
                              </td>
                              <td>{{$rekrutment_data_orang_tua->nama_lengkap}}</td> --}}
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
                          </tr>

                        </tbody>
                    </table>
                </div>
              <form  action="{{route('data_orang_tua')}}" method="post" class="card">
                <div class="card-header">
                      <h4 class="card-title">Data Orang Tua / Wali</h4> 
                      
                  </div>
                  <div class="card-body">
                    
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="row">
                          <div class="col-md-6 col-xl-12">
                                {{ csrf_field() }}

                                <div class="mb-3">
                                  <label class="form-label required">Hubungan Keluarga</label>
                                  <div >
                                    <select class="form-select" name="hubungan" required>
                                          <option disabled selected hidden></option>

                                      <?php if ($rekrutment_data_orang_tua != ""): ?>

                                      <?php else: ?>
                                          <option value="AYAH">     AYAH</option>
                                      <?php endif ?>

                                      <?php if ($rekrutment_data_ibu != ""): ?>

                                      <?php else: ?>
                                          <option value="IBU">      IBU</option>
                                      <?php endif ?>

                                      <?php if ($rekrutment_data_wali != ""): ?>

                                      <?php else: ?>
                                          <option value="WALI">     WALI</option>
                                      <?php endif ?>
                                      
                                      
                                    </select>
                                  </div>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Nama Lengkap</label>
                                  <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." onkeyup="this.value = this.value.toUpperCase()" required>
                                  <span id="nama_lengkap_error" class="text-danger"></span>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Tempat Lahir</label>
                                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Tanggal Lahir</label>
                                  <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir..." required>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Agama</label>
                                  <div >
                                    <select class="form-select" name="agama">
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
                                  <textarea class="form-control" name="alamat_ktp" placeholder="Alamat (Jalan) Sesuai KTP" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Provinsi Sesuai KTP</label>
                                  <input type="text" class="form-control" name="provinsi_ktp" placeholder="Provinsi Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kota Sesuai KTP</label>
                                  <input type="text" class="form-control" name="kota_ktp" placeholder="Kota Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>
                                
                                <div class="mb-3">
                                  <label class="form-label required">Kabupaten Sesuai KTP</label>
                                  <input type="text" class="form-control" name="kabupaten_ktp" placeholder="Kabupaten Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kecamatan Sesuai KTP</label>
                                  <input type="text" class="form-control" name="kecamatan_ktp" placeholder="Kecamatan Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>
                            
                                <div class="mb-3">
                                  <label class="form-label required">Kelurahan / Desa Sesuai KTP</label>
                                  <input type="text" class="form-control" name="kelurahan_ktp" placeholder="Kelurahan / Desa Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label required">Nomor HP</label>
                                  <input type="number" class="form-control" name="no_hp" placeholder="Nomor HP..." required>
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