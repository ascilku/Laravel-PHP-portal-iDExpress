
    <?php if (session()->has('alert-success')): ?>
      <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
    <?php endif ?>

    <?php if (session()->has('alert-peringatan')): ?>
      <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
    <?php endif ?>

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_formal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Hapus Riwayat Pendidikan.?</div>
            <div>Mengahapus Data Riwayat Pendidikan, berarti juga menghapus semua data berkaitan dengan Riwayat Pendidikan Anda.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="hapus_formal" data-bs-dismiss="modal">Ya, Hapus Data</button>
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
                          <th>Tingkat Pendidikan</th>
                          <th>Sekolah/Universitas</th>
                          <th>Jurusan</th>
                          <th></th>
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
                                                  <td>
                                    
                                                      <a href="#" class="edit-pendidikan-formal"
                                                              data-id="{{$keyrekrutment_pendidikan_formal->id}}" 
                                                              data-pendidikan="{{$keyrekrutment_pendidikan_formal->pendidikan}}" 
                                                              data-gelar="{{$keyrekrutment_pendidikan_formal->gelar}}" 
                                                              data-nama_univ="{{$keyrekrutment_pendidikan_formal->nama_univ}}" 
                                                              data-akredi_univ="{{$keyrekrutment_pendidikan_formal->akredi_univ}}" 

                                                              data-jurusan="{{$keyrekrutment_pendidikan_formal->jurusan}}" 
                                                              data-akredi_jur="{{$keyrekrutment_pendidikan_formal->akredi_jur}}" 
                                                              data-mulai_studi="{{$keyrekrutment_pendidikan_formal->mulai_studi}}" 
                                                              data-akhir_studi="{{$keyrekrutment_pendidikan_formal->akhir_studi}}" 
                                                              data-nilai="{{$keyrekrutment_pendidikan_formal->nilai}}" 
                                                              data-no_ijazah="{{$keyrekrutment_pendidikan_formal->no_ijazah}}" 

                                                              data-ijazah="{{$keyrekrutment_pendidikan_formal->ijazah}}" 
                                                              data-transkrip="{{$keyrekrutment_pendidikan_formal->transkrip}}" 
                                                      >
                                                          <span class="badge bg-warning me-1 center-foto ">
                                                              <div class="ringht-jabatan">
                                                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg> 
                                                              </div>
                                                          </span>
                                                      </a>|
                                                      <a class="hapus_formal" data-bs-toggle="modal" data-bs-target="#model_hapus_formal"  href="{{route('hapus_pendidikan_formal')}}?id={{Crypt::encrypt($keyrekrutment_pendidikan_formal->id)}}">
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
                    <h4 class="card-title">Pendidikan Formal</h4> 
                  </div>

                  {{-- <div class="dropdown-divider"></div> --}}
                    <form  action="{{route('pendidikan-formal')}}" method="post" class="card form-clickk" enctype="multipart/form-data">
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
                                                  <select class="form-select pendidikan_formal" id="pendidikan-dashboard" name="pendidikan" required>
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

                                        <input type="hidden" id="id-dashboard" name="id">
                                       

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
                                            <input type="text" class="form-control" name="nama_sekolah" id="nama_univ-dashboard" placeholder="Contoh Sekolah/Universitas : SMA Negeri 1 Makassar atau Universitas Islam Negeri Alauddin Makassar" onkeyup="this.value = this.value.toUpperCase()" required>
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
                                                            <input type="date" class="form-control" id="mulai_studi-dashboard" name="mulai_tanggal" required>
                                                      </div>
                                                      <div class="col-xl-6 col-md-12 col-sm-12">
                                                            <label class="form-label required">Akhir Studi (Lulus)</label>
                                                            <input type="date" class="form-control" id="akhir_studi-dashboard" name="akhir_tanggal" required>
                                                      </div>
                                                  </div>
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required">Nilai Akhir/IPK</label>
                                            <input type="text" class="form-control" id="nilai-dashboard" name="ipk" placeholder="Contoh Nilai Akhir/IPK : 4,00 atau 8,1" onkeyup="this.value = this.value.toUpperCase()" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label required">No Ijazah</label>
                                            <input type="text" class="form-control" name="no_ijazah" id="no_ijazah" required>
                                        </div>

                                        <div class="mb-3">
                                            <div class="row">
                                                  <div class="col-xl-12 col-md-12 col-sm-12">
                                                  <div class="row">
                                                      <div class="col-xl-6 col-md-12 col-sm-12">
                                                            <label class="form-label required">Foto Ijazah / Surat Keterangan Lulus</label>
                                                            <input type="file" class="form-control" id="ijazah" name="ijazah" required>
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
                                                            <input type="file" class="form-control" id="transkrip" name="transkrip" required>
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
 