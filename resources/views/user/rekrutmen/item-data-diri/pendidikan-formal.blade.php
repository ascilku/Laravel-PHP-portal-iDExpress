
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
                          <th>Tingkat Pendidikan</th>
                          <th>Sekolah/Universitas</th>
                          <th>Jurusan</th>
                          {{-- <th>Aksi</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                            
                                <?php foreach ($rekrutment_pendidikan_formal as $keyrekrutment_pendidikan_formal): ?>
                                              <tr>
                                                  <td >{{$keyrekrutment_pendidikan_formal->pendidikan}}</td>
                                                  <td class="text-muted" >
                                                    {{$keyrekrutment_pendidikan_formal->nama_univ}}
                                                  </td>
                                                  <td class="text-muted" ><a href="#" class="text-reset">{{$keyrekrutment_pendidikan_formal->jurusan}}</a></td>
                                                  {{-- <td>
                                                    <a href="#">Lihat</a>
                                                  </td> --}}
                                              </tr>
                                <?php endforeach ?>
                            
                              
                            
                        
                       
                      </tbody>
                    </table>
                  </div>

                  <div class="card-header">
                    <h4 class="card-title">Pendidikan Formal</h4> 
                  </div>

                  {{-- <div class="dropdown-divider"></div> --}}
                    <form  action="{{route('pendidikan-formal_')}}" method="post" class="card form-clickk" enctype="multipart/form-data">
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
                                            <label class="form-label  required">Tingkat Pendidikan</label>
                                            <div>
                                                  <select class="form-select pendidikan_formal" name="pendidikan" required>
                                                      <option selected hidden></option>
                                                      <option value="MI">      MI (MADRASAH IBTIDAIYAH)</option>
                                                      <option value="MTS">     MTS (MADRASAH TSANAWIYAH)</option>
                                                      <option value="SD">      SD (SEKOLAH DASAR)</option>
                                                      <option value="SMP">     SMP (SEKOLAH MENENGAH PERTAMA)</option>
                                                      <option value="SMA">     SMA (SEKOLAH MENENGAH ATAS)</option>
                                                      <option value="SMK">     SMK (SEKOLAH MENENGAH KEJURUAN)</option>
                                                      <option value="D1">      D1 (DIPLOMA SATU)</option>
                                                      <option value="D2">      D2 (DIPLOMA DUA)</option>
                                                      <option value="D3">      D3 (DIPLOMA TIGA)</option>
                                                      <option value="D4">      D4 (DIPLOMA EMPAT)</option>
                                                      <option value="S1">      S1 (STRATA SATU)</option>
                                                      <option value="S2">      S2 (STRATA DUA)</option>
                                                      <option value="S3">      S3 (STRATA TIGA)</option>
                                                  </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required ">Gelar</label>
                                            <input type="text" class="form-control" id="gelar" name="gelar" placeholder="Contoh gelar : S.KOM dan S.MAT ..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                          {{-- <label class="form-check"> --}}
                                              {{-- <input type="checkbox" class="form-check-input" name="setuju"  value="yes" onclick="myFunction()"/> --}}
                                              <span class="form-check-label font-color-small" >Info.!! Gunakan Singkatan Untuk Gelar Kesarjanaan <br>
                                                    Contoh: S.Kom untuk Sarjana Komputer, SPsi Untuk Sarjana Psikologi. Jika tidak ada Gelar, isikan dengan "Tidak Ada"</span>
                                          {{-- </label> --}}
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required">Nama Sekolah/Universitas</label>
                                            <input type="text" class="form-control" name="nama_sekolah" placeholder="Contoh Sekolah/Universitas : SMA Negeri 1 Makassar atau Universitas Islam Negeri Alauddin Makassar" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required">Akreditasi Universitas</label>
                                            <input type="text" class="form-control" id="akreditasi_universitas" name="akreditasi_universitas" placeholder="Contoh : A , B , C" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required">Jurusan</label>
                                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Contoh Jurusan : Teknik Informatika , Pendidikan Biologi, IPA" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required">Akreditasi Jurusan</label>
                                            <input type="text" class="form-control" id="akreditasi_jurusan" name="akreditasi_jurusan" placeholder="Contoh : A , B , C" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                            <div class="row">
                                                  <div class="col-xl-12 col-md-12 col-sm-12">
                                                  <div class="row">
                                                      <div class="col-xl-6 col-md-12 col-sm-12">
                                                            <label class="form-label required">Mulai Studi</label>
                                                            <input type="date" class="form-control" name="mulai_tanggal" required>
                                                      </div>
                                                      <div class="col-xl-6 col-md-12 col-sm-12">
                                                            <label class="form-label required">Akhir Studi (Lulus)</label>
                                                            <input type="date" class="form-control" name="akhir_tanggal" required>
                                                      </div>
                                                  </div>
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required">Nilai Akhir/IPK</label>
                                            <input type="text" class="form-control" name="ipk" placeholder="Contoh Nilai Akhir/IPK : 4,00 atau 8,1" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required">No Ijazah</label>
                                            <input type="text" class="form-control" name="no_ijazah" required>
                                        </div>

                                        <div class="mb-3">
                                            <div class="row">
                                                  <div class="col-xl-12 col-md-12 col-sm-12">
                                                  <div class="row">
                                                      <div class="col-xl-6 col-md-12 col-sm-12">
                                                            <label class="form-label required">Foto Ijazah / Surat Keterangan Lulus</label>
                                                            <input type="file" class="form-control" name="ijazah" required>
                                                      </div>
                                                      <div class="col-xl-6 col-md-12 col-sm-12">
                                                        <span class="form-check-label font-color-small font-size-info" >Info.!! Harus bertype PDF dan gambar tidak boleh lebih besar dari 1MB</span>
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
                                                            <label class="form-label required">Foto Trankrip Nilai</label>
                                                            <input type="file" class="form-control" name="transkrip" required>
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
 