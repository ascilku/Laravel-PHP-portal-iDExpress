
    <?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
  <?php endif ?>

  <?php if (session()->has('alert-peringatan')): ?>
    <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
  <?php endif ?>

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_diri" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Hapus Riwayat File Data Diri.?</div>
            <div>Mengahapus Riwayat File Data, berarti juga menghapus semua data berkaitan dengan Riwayat File Data Anda.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="hapus_data_diri" data-bs-dismiss="modal">Ya, Hapus Data</button>
        </div>
        </div>
    </div>
</div>

  <div class="wrapper">
    <div class="page-wrapper">
      
      <div class="page-body">
        
        <div class="container-xl">
          <div class="row row-cards">
            <div class="col-12">
              
              <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                              <th>Kelengkapan Berkas</th>
                              <th>Keterangan</th>
                              <th>Jenis File</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KTP / E-KTP atau surat pengganti KTP</td>

                                <?php if ($rekrutment_ktp != ""): ?>
                                    <td>
                                        <p class="font-color-small-hijau ">Lengkap</p>
                                    </td>
                                    <td>
                                      {{$rekrutment_ktp->jenis}}
                                    </td>
                                    <td>
                                        <a class="hapus_data_diri_" data-bs-toggle="modal" data-bs-target="#model_hapus_diri"  href="{{route('hapus_file_pribadi')}}?id={{Crypt::encrypt($rekrutment_ktp->id)}}">
                                            <span class="badge bg-danger me-1 center-foto ">
                                                <div class="ringht-jabatan">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                </div>
                                            </span>
                                        </a>
                                    </td>
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload)</p>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                <?php endif ?>
                            </tr>

                            <tr>
                                <td>SKCK Aktif</td>

                                <?php if ($rekrutment_skck != ""): ?>
                                    <td>
                                        <p class="font-color-small-hijau ">Lengkap</p>
                                    </td>
                                    <td>
                                      {{$rekrutment_skck->jenis}}
                                    </td>
                                    <td>
                                        <a class="hapus_data_diri_" data-bs-toggle="modal" data-bs-target="#model_hapus_diri"  href="{{route('hapus_file_pribadi')}}?id={{Crypt::encrypt($rekrutment_skck->id)}}">
                                            <span class="badge bg-danger me-1 center-foto ">
                                                <div class="ringht-jabatan">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                </div>
                                            </span>
                                        </a>
                                    </td>
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload)</p>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                <?php endif ?>
                            </tr>

                            <tr>
                                <td>Kartu Keluarga Aktif</td>

                                <?php if ($rekrutment_kk != ""): ?>
                                    <td>
                                        <p class="font-color-small-hijau ">Lengkap</p>
                                    </td>
                                    <td>
                                      {{$rekrutment_kk->jenis}}
                                    </td>
                                    <td>
                                        <a class="hapus_data_diri_" data-bs-toggle="modal" data-bs-target="#model_hapus_diri"  href="{{route('hapus_file_pribadi')}}?id={{Crypt::encrypt($rekrutment_kk->id)}}">
                                            <span class="badge bg-danger me-1 center-foto ">
                                                <div class="ringht-jabatan">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                </div>
                                            </span>
                                        </a>
                                    </td>
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload)</p>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                <?php endif ?>
                            </tr>

                            <tr>
                                <td>SIM Aktif</td>

                                <?php if ($rekrutment_sim != ""): ?>
                                    <td>
                                        <p class="font-color-small-hijau ">Lengkap</p>
                                    </td>
                                    <td>
                                      {{$rekrutment_sim->jenis}}
                                    </td>
                                    <td>
                                        <a class="hapus_data_diri_" data-bs-toggle="modal" data-bs-target="#model_hapus_diri"  href="{{route('hapus_file_pribadi')}}?id={{Crypt::encrypt($rekrutment_sim->id)}}">
                                            <span class="badge bg-danger me-1 center-foto ">
                                                <div class="ringht-jabatan">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                </div>
                                            </span>
                                        </a>
                                    </td>
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload Bagi Kurir)</p>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                <?php endif ?>
                            </tr>

                            <tr>
                                <td>STNK Aktif</td>

                                <?php if ($rekrutment_stnk != ""): ?>
                                    <td>
                                        <p class="font-color-small-hijau ">Lengkap</p>
                                    </td>
                                    <td>
                                      {{$rekrutment_stnk->jenis}}
                                    </td>
                                    <td>
                                        <a class="hapus_data_diri_" data-bs-toggle="modal" data-bs-target="#model_hapus_diri"  href="{{route('hapus_file_pribadi')}}?id={{Crypt::encrypt($rekrutment_stnk->id)}}">
                                            <span class="badge bg-danger me-1 center-foto ">
                                                <div class="ringht-jabatan">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                </div>
                                            </span>
                                        </a>
                                    </td>
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload Bagi Kurir)</p>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                <?php endif ?>

                            </tr>

                            <tr>
                                <td>FOTO MOTOR</td>

                                <?php if ($rekrutment_foto_motor != ""): ?>
                                    <td>
                                        <p class="font-color-small-hijau ">Lengkap</p>
                                    </td>
                                    <td>
                                      {{$rekrutment_foto_motor->jenis}}
                                    </td>
                                    <td>
                                        <a class="hapus_data_diri_" data-bs-toggle="modal" data-bs-target="#model_hapus_diri"  href="{{route('hapus_file_pribadi')}}?id={{Crypt::encrypt($rekrutment_foto_motor->id)}}">
                                            <span class="badge bg-danger me-1 center-foto ">
                                                <div class="ringht-jabatan">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                </div>
                                            </span>
                                        </a>
                                    </td>
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload Bagi Kurir)</p>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                <?php endif ?>
                            </tr>

                            <tr>
                              <td>BPJS KESEHATAN</td>

                                <?php if ($rekrutment_kesehatan != ""): ?>
                                    <td>
                                        <p class="font-color-small-hijau ">Lengkap</p>
                                    </td>
                                    <td>
                                      {{$rekrutment_kesehatan->jenis}}
                                    </td>
                                    <td>
                                        <a class="hapus_data_diri_" data-bs-toggle="modal" data-bs-target="#model_hapus_diri"  href="{{route('hapus_file_pribadi')}}?id={{Crypt::encrypt($rekrutment_kesehatan->id)}}">
                                            <span class="badge bg-danger me-1 center-foto ">
                                                <div class="ringht-jabatan">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                </div>
                                            </span>
                                        </a>
                                    </td>
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Tidak Wajib)</p>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                <?php endif ?>
                              
                              
                          </tr>

                            
                        </tbody>
                        
                    </table>
                </div>

                <div class="card-header">
                  <h4 class="card-title">Upload File Pribadi</h4> 
                </div>

                {{-- <div class="dropdown-divider"></div> --}}
                  <form  action="{{route('upload-file-pribadi-karyawan')}}" method="post" class="card form-clickk" enctype="multipart/form-data">
                    {{ csrf_field() }}  
                    <div class="container hight-panjang">

                            

                            <div class="row">
                                <div class="col-xl-12 hight-top">

                                    <div class="mb-3">
                                      <label class="form-label required">Dokumen File</label>
                                      <div >
                                        <select class="form-select" name="file" required>
                                          <option disabled selected hidden></option>

                                          <?php if ($rekrutment_ktp != ""): ?>

                                          <?php else: ?>
                                            <option value="KTP">                  KTP</option>
                                          <?php endif ?>

                                          <?php if ($rekrutment_skck != ""): ?>
                                          
                                          <?php else: ?>
                                              <option value="SKCK">                 SKCK</option>
                                          <?php endif ?>

                                          <?php if ($rekrutment_kk != ""): ?>

                                          <?php else: ?>
                                            <option value="KARTU KELUARGA">       KARTU KELUARGA</option>
                                          <?php endif ?>

                                          <?php if ($rekrutment_sim != ""): ?>
                                          
                                          <?php else: ?>
                                            <option value="SIM">                  SIM</option>
                                          <?php endif ?>

                                          <?php if ($rekrutment_stnk != ""): ?>

                                          <?php else: ?>
                                            <option value="STNK">                 STNK</option>
                                          <?php endif ?>

                                          <?php if ($rekrutment_foto_motor != ""): ?>

                                          <?php else: ?>
                                              <option value="FOTO MOTOR">           FOTO MOTOR</option>
                                          <?php endif ?>

                                          <?php if ($rekrutment_kesehatan != ""): ?>

                                          <?php else: ?>
                                            <option value="BPJS KESEHATAN">       BPJS KESEHATAN</option>
                                          <?php endif ?>
                                        </select>
                                      </div>
                                    </div>

                                      <div class="mb-3">
                                          <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-12 col-sm-12">
                                                          <label class="form-label required">Upload PDF</label>
                                                          <input type="file" class="form-control" name="ijazah" required>
                                                          
                                                    </div>
                                                    <div class="col-xl-6 col-md-12 col-sm-12">
                                                      <span class="form-check-label font-color-small font-size-info" >Info.!! Harus bertype PDF dan gambar tidak boleh lebih besar dari 1MB</span>
                                                    </div>
                                                </div>
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
          </div>
        </div>
      </div>
    </div>
  </div>
