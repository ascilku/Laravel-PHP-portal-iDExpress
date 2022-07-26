
    <?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
  <?php endif ?>

  <?php if (session()->has('alert-peringatan')): ?>
    <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
  <?php endif ?>

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
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload)</p>
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
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload)</p>
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
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Tidak Wajib)</p>
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
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload Bagi Kurir dan Driver)</p>
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
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload Bagi Kurir dan Driver)</p>
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
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Wajib di Upload Bagi Kurir dan Driver)</p>
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
                                <?php else: ?>
                                    <td>
                                      <p class="font-color-small-">(Tidak Wajib)</p>
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
                  <form  action="{{route('upload-file-pribadi')}}" method="post" class="card form-clickk" enctype="multipart/form-data">
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
                                                          <label class="form-label required">File Ijazah / Seritikat</label>
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
