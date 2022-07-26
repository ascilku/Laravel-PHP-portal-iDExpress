
    <?php if (session()->has('alert-success')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
  <?php endif ?>

  <?php if (session()->has('alert-peringatan')): ?>
    <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
  <?php endif ?>

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_non_pendidikan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Hapus Non Pendidikan Formal.?</div>
            <div>Mengahapus Riwayat Non Pendidikan Formal, berarti juga menghapus semua data berkaitan dengan Non Pendidikan Formal Anda.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="btn_data_non_formal_" data-bs-dismiss="modal">Ya, Hapus Data</button>
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
                        <th>Nama Sertifikat</th>
                        <th>Pelaksana</th>
                        <th>Nomor Pelaksana</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                          
                              <?php foreach ($rekrutment_pendidikan_non_formal as $keyrekrutment_pendidikan_non_formal): ?>
                                            <tr>
                                                <td >{{$keyrekrutment_pendidikan_non_formal->nama_sertifikat}}</td>
                                                <td class="text-muted" >
                                                  {{$keyrekrutment_pendidikan_non_formal->pelaksana}}
                                                </td>
                                                <td class="text-muted" ><a href="#" class="text-reset">{{$keyrekrutment_pendidikan_non_formal->nomor_pelaksana}}</a></td>
                                                {{-- <td>
                                                  <a href="#">Lihat</a>
                                                </td> --}}
                                                <td>
                                                    <a class="hapus_data_non_formal_" data-bs-toggle="modal" data-bs-target="#model_hapus_non_pendidikan"  href="{{route('hapus_upload_file_pribadi')}}?id={{Crypt::encrypt($keyrekrutment_pendidikan_non_formal->id)}}">
                                                        <span class="badge bg-danger me-1 center-foto ">
                                                            <div class="ringht-jabatan">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                            </div>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                              <?php endforeach ?>
                          
                            
                          
                      
                     
                    </tbody>
                  </table>
                  
                </div>

                <div class="card-header">
                  <h4 class="card-title">Pendidikan Non Formal / Sertifikat / Pengalaman Kerja</h4> 
                </div>

                {{-- <div class="dropdown-divider"></div> --}}
                  <form  action="{{route('pendidikan-non-formal-karyawan')}}" method="post" class="card form-clickk" enctype="multipart/form-data">
                    {{ csrf_field() }}  
                    <div class="container hight-panjang">

                            

                            <div class="row">
                                <div class="col-xl-12 hight-top">
                                    <div class="mb-3">
                                      {{-- <label class="form-check"> --}}
                                          {{-- <input type="checkbox" class="form-check-input" name="setuju"  value="yes" onclick="myFunction()"/> --}}
                                          <span class="form-check-label font-color-red-small infoo" ></span>
                                      {{-- </label> --}}
                                    </div>

                                      <div class="mb-3">
                                          <label class="form-label required ">Institute / Perusahaan Pelaksana</label>
                                          <input type="text" class="form-control" name="pelaksana" placeholder="Contoh Institute : PT Pelaksana Akademik" onkeyup="this.value = this.value.toUpperCase()" required>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label required">No handphone/WA Pelaksana</label>
                                          <input type="text" class="form-control" name="nomor" placeholder="No Whatsapp atau nomor hp yang bisa dihubungi" onkeyup="this.value = this.value.toUpperCase()" required>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label required">Nama Ijazah/Sertifikat/Pengalaman Kerja</label>
                                          <input type="text" class="form-control" name="nama_ijazah" placeholder="Contoh : Seritikat Kelulusan TOEFL" onkeyup="this.value = this.value.toUpperCase()" required>
                                      </div>

                                      <div class="mb-3">
                                          <label class="form-label required">Kode Ijazah/Sertifikat/Pengalaman Kerja</label>
                                          <input type="text" class="form-control" name="kode" placeholder="Kode Ijazah/Sertifikat" onkeyup="this.value = this.value.toUpperCase()" required>
                                      </div>

                                      <div class="mb-3">
                                        <label class="form-label required">Nama Pemimpin / Pelaksana Yang Bertandatangan</label>
                                        <input type="text" class="form-control" name="nama_pemimpin" placeholder="Kode Ijazah/Sertifikat" onkeyup="this.value = this.value.toUpperCase()" required>
                                    </div>

                                      <div class="mb-3">
                                          <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-12 col-sm-12">
                                                          <label class="form-label required">Tahun Terbit </label>
                                                          <input type="date" class="form-control" name="terbit" required>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12 col-sm-12">
                                                          <label class="form-label required">Berlaku Sampai</label>
                                                          <input type="date" class="form-control" name="berlaku" required>
                                                    </div>
                                                </div>
                                                </div>
                                          </div>
                                      </div>

                                      <div class="mb-3">
                                          <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-12 col-sm-12">
                                                          <label class="form-label required">File Ijazah / Seritikat / Pengalaman Kerja</label>
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
