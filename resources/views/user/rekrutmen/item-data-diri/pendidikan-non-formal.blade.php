
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
                        <th>Nama Sertifikat</th>
                        <th>Pelaksana</th>
                        <th>Nomor Pelaksana</th>
                        {{-- <th>Aksi</th> --}}
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
                                            </tr>
                              <?php endforeach ?>
                          
                            
                          
                      
                     
                    </tbody>
                  </table>
                  
                </div>

                <div class="card-header">
                  <h4 class="card-title">Pendidikan Non Formal / Sertifikat / Pengalaman Kerja</h4> 
                </div>

                {{-- <div class="dropdown-divider"></div> --}}
                  <form  action="{{route('pendidikan-non-formal')}}" method="post" class="card form-clickk" enctype="multipart/form-data">
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
