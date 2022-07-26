<div class="container-xl">
          <!-- Page title -->

<!-- ======================== Modal edit gaji ============================== -->
<div class="modal modal-blur fade" id="modal-edit-gaji" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Yakin Mau Ubah Gaji.?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('edit-gaji')}}" method="post">
                {{ csrf_field() }}
                      <div class="modal-body">
                            <input type="hidden" class="form-control" id="data_id_gaji" name="id_gaji" placeholder="Your report name">
                            <div class="mb-3">
                                <label class="form-label required">Gaji</label>
                                <input type="text" class="form-control data_gaji"  name="nama_gaji"  required>
                                <span id="nik_error" class="text-danger font-size-info-alert"></span>
                            </div>
                      </div>
                      <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Edit Gaji
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
<!-- ======================== Akhir Modal Tambah Data Karyawan ======================== -->
  
            
        </div>
        
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">

                <div class="page-header d-print-none">
                        <div class="row align-items-center">
                            <div class="col">
                                    <h2 class="page-title">
                                        List Penempatan
                                    </h2>
                            </div>
                        </div>
                </div>
                <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>

                    <div class="col-xl-6 col-md-6">
                        <div class="card font-size-cv-">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>TH</th>
                                    <th>Kode TH</th>
                                    <th>Status TH</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($penempatan) > 0): ?>
                                
                                <?php foreach ($penempatan as $key_penempatan): ?>
                                
                                    
                                        <tr>
                                            <td data-label="Title" >
                                                    <div class="text-muted">    
                                                        {{$key_penempatan->alokasi}}
                                                    </div>
                                            </td>
                                            <td data-label="Title" >
                                                    <div class="text-muted">    
                                                        {{$key_penempatan->kode_alokasi}}
                                                    </div>
                                            </td>
                                            <td data-label="Title" >
                                                    <div class="text-muted">    
                                                    <span class="badge bg-warning me-1 center-foto ">{{$key_penempatan->status_th}}</span>
                                                    </div>
                                            </td>
                                            <td>
                                                <a href="#" class="edit-penempatan"
                                                        data-id="{{$key_penempatan->id}}" 
                                                        data-alamat="{{$key_penempatan->alamat}}"
                                                        data-provinsi="{{$key_penempatan->provinsi}}"
                                                        data-kota="{{$key_penempatan->kota}}"
                                                        data-kabupaten="{{$key_penempatan->kabupaten}}"
                                                        data-kelurahan="{{$key_penempatan->kelurahan}}"
                                                        data-kecamatan="{{$key_penempatan->kecamatan}}"
                                                        data-alokasi="{{$key_penempatan->alokasi}}"
                                                        data-kode_alokasi="{{$key_penempatan->kode_alokasi}}"
                                                        data-status_th="{{$key_penempatan->status_th}}"
                                                >
                                                    <span class="badge bg-warning me-1 center-foto ">
                                                        <div class="ringht-jabatan">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                        </div>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                
                                <?php endforeach ?>
                                <?php else: ?>
                                        <tr>
                                            <td colspan='4' class="center-"> Tidak Ada List Data Penempatan </td>
                                        </tr>
                                <?php endif ?>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 font-size-cv-">
                        
                            <div class="card ">
                                <div class="container">
                                        <form  action="{{route('create_penempatan')}}" method="post">
                                        {{ csrf_field() }}
                                            <div class="row">
                                            
                                        
                                            
                                        
                                            

                                                    <input type="hidden" class="form-control" id="data_id_edit_penempatan" name="id" placeholder="Provinsi Domisili...">
                                                        
                                                    <div class="col-xl-6 hight-top-">
                                                        <div class="mb-3">
                                                            <label class="form-label required">Alamat (Jalan)</label>
                                                            <textarea class="form-control" id="data_alamat" name="alamat_penempatan"  placeholder="Alamat Domisili" onkeyup="this.value = this.value.toUpperCase()"  required></textarea>
                                                            <span id="alamat_domisili_error" class="text-danger font-size-info-alert"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 hight-top-">
                                                        <div class="mb-3">
                                                            <label class="form-label required">Provinsi</label>
                                                            <input type="text" class="form-control" id="data_provinsi" name="prov_penempatan" placeholder="Provinsi Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <span id="provinsi_domisili_error" class="text-danger font-size-info-alert"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 ">
                                                        <div class="mb-3">
                                                            <label class="form-label required">Kota</label>
                                                            <input type="text" class="form-control" id="data_kota" name="kota_penempatan" placeholder="Kota Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <span id="kota_domisili_error" class="text-danger font-size-info-alert"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 ">
                                                        <div class="mb-3">
                                                            <label class="form-label required">Kabupaten</label>
                                                            <input type="text" class="form-control" id="data_kabupaten" name="kabupaten_penempatan" placeholder="Kabupaten Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <span id="kabupaten_domisili_error" class="text-danger font-size-info-alert"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 ">
                                                        <div class="mb-3">
                                                            <label class="form-label required">Kecamatan</label>
                                                            <input type="text" class="form-control" id="data_kecamatan" name="kecamatan_penempatan" placeholder="Kecamatan Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <span id="kecamatan_domisili_error" class="text-danger font-size-info-alert"></span>
                                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 ">
                                                        <div class="mb-3">
                                                            <label class="form-label required">Kelurahan / Desa</label>
                                                            <input type="text" class="form-control" id="data_kelurahan" name="kelurahan_penempatan" placeholder="Kelurahan / Desa Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <span id="kelurahan_domisili_error" class="text-danger font-size-info-alert"></span>
                                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 ">
                                                        <div class="mb-3">
                                                            <label class="form-label required">Penempatan</label>
                                                            <input type="text" class="form-control" id="data_alokasi" name="penempatan" placeholder="Kelurahan / Desa Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <span id="kelurahan_domisili_error" class="text-danger font-size-info-alert"></span>
                                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 ">
                                                        <div class="mb-3">
                                                            <label class="form-label required">Kode Penempatan</label>
                                                            <input type="text" class="form-control" id="data_kode_alokasi" name="kode_penempatan" placeholder="Kelurahan / Desa Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <span id="kelurahan_domisili_error" class="text-danger font-size-info-alert"></span>
                                                        
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label required">Status TH</label>
                                                        <div >
                                                        <select class="form-select" id="data_kode_status_th" name="jenis" required>
                                                            <option hidden></option>
                                                            <option value="HO">   HO</option>
                                                            <option value="TH">              TH</option>
                                                            <option value="VTH">  VTH</option>
                                                            <option value="FB">   FB</option>
                                                        </select>
                                                        <span id="agama_error" class="text-danger font-size-info-alert"></span>
                                                        </div>
                                                    </div>

                                                    <div class="bottom-top-jabatan">
                                                        <button type="submit"  class="btn btn-warning active w-100">
                                                            Simpan Data Penempatan
                                                        </button>
                                                    </div>

                                            </div>
                                        </form>

                                </div>
                            </div>


                        
                    </div>
                <?php else: ?>
                    <div class="col-xl-12">
                        <div class="card font-size-cv-">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>TH</th>
                                    <th>Kode TH</th>
                                    <th>Status TH</th>
                                    <!-- <th class="w-1"></th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($penempatan) > 0): ?>
                                
                                <?php foreach ($penempatan as $key_penempatan): ?>
                                
                                    
                                        <tr>
                                            <td data-label="Title" >
                                                    <div class="text-muted">    
                                                        {{$key_penempatan->alokasi}}
                                                    </div>
                                            </td>
                                            <td data-label="Title" >
                                                    <div class="text-muted">    
                                                        {{$key_penempatan->kode_alokasi}}
                                                    </div>
                                            </td>
                                            <td data-label="Title" >
                                                    <div class="text-muted">    
                                                    <span class="badge bg-warning me-1 center-foto ">{{$key_penempatan->status_th}}</span>
                                                    </div>
                                            </td>
                                            <!-- <td>
                                                <a href="#" class="edit-penempatan"
                                                        data-id="{{$key_penempatan->id}}" 
                                                        data-alamat="{{$key_penempatan->alamat}}"
                                                        data-provinsi="{{$key_penempatan->provinsi}}"
                                                        data-kota="{{$key_penempatan->kota}}"
                                                        data-kabupaten="{{$key_penempatan->kabupaten}}"
                                                        data-kelurahan="{{$key_penempatan->kelurahan}}"
                                                        data-kecamatan="{{$key_penempatan->kecamatan}}"
                                                        data-alokasi="{{$key_penempatan->alokasi}}"
                                                        data-kode_alokasi="{{$key_penempatan->kode_alokasi}}"
                                                        data-status_th="{{$key_penempatan->status_th}}"
                                                >
                                                    <span class="badge bg-warning me-1 center-foto ">
                                                        <div class="ringht-jabatan">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                        </div>
                                                    </span>
                                                </a>
                                            </td> -->
                                        </tr>
                                
                                <?php endforeach ?>
                                <?php else: ?>
                                        <tr>
                                            <td colspan='4' class="center-"> Tidak Ada List Data Penempatan </td>
                                        </tr>
                                <?php endif ?>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
          </div>
        </div>