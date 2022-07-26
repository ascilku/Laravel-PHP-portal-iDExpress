<div class="container-xl">
          <!-- Page title -->
            
        </div>
        
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">

                <div class="page-header d-print-none">
                        <div class="row align-items-center">
                            <div class="col">
                                    <h2 class="page-title">
                                        Karyawan Tidak Punya Jabatan
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
                                    <th>Karyawan</th>
                                    <th>Jabatan</th>
                                    <th>Nominal Gaji</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($dahboard_karyawan) > 0): ?>
                                
                                <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
                                    <?php if (isset($key_dahboard_karyawan->akun->jabatan_gaji->jabatan->nama_jabatan) != null): ?>
                                    <?php else: ?>
                                    
                                        <tr>
                                            <td data-label="Name" >
                                                <div class="d-flex py-1 align-items-center">
                                                    <?php if (isset($key_dahboard_karyawan->akun->data_diri->foto)): ?>
                                                        <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$key_dahboard_karyawan->akun->data_diri->foto}})"></span>
                                                    <?php else: ?>
                                                        <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/profil.png)"></span>
                                                    <?php endif ?>
                                                    <div class="flex-fill">
                                                            <?php if ($key_dahboard_karyawan->akun->data_diri): ?>
                                                                <div class="font-weight-medium">{{$key_dahboard_karyawan->akun->data_diri->nama_lengkap}}</div>
                                                                <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan->akun->nik}}</a></div>
                                                            <?php else: ?>
                                                                <div class="font-weight-medium">Tidak Ada</div>
                                                                    <?php if ($key_dahboard_karyawan->akun): ?>
                                                                        <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan->akun->nik}}</a></div>
                                                                    <?php else: ?>
                                                                        <div class="text-muted"><a href="#" class="text-reset">IDE-Tidak Ada</a></div>
                                                                    <?php endif ?>
                                                            <?php endif ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-label="Title" >
                                                    <?php if ($key_dahboard_karyawan->akun->jabatan_gaji): ?>
                                                        <div class="text-muted">    
                                                        <div class="text-muted">    <span class="badge bg-warning me-1">{{$key_dahboard_karyawan->akun->jabatan_gaji->jabatan->nama_jabatan}}</span>
                                                    <?php else: ?>
                                                        <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Tidak Ada Jabatan</span>
                                                        </div>
                                                    <?php endif ?>
                                                </div>
                                            </td>
                                            <td data-label="Title" >
                                                <?php if ($key_dahboard_karyawan->gaji): ?>
                                                    <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Rp. {{$key_dahboard_karyawan->akun->jabatan_gaji->gaji->nominal_gaji}}</span>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                    </div>
                                                <?php endif ?>
                                            </td>
                                        
                                        </tr>
                                    <?php endif ?>
                                <?php endforeach ?>
                                <?php else: ?>
                                        <tr>
                                            <td colspan='3' class="center-"> Tidak Ada Data Karyawan Tidak Punya Jabatan </td>
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
                                        <form  action="{{route('create_master_jabatan')}}" method="post">
                                        {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-xl-4 col-md-4  hight-top-">
                                                    <div class="mb-3 ">
                                                        <label class="form-label">Pilih Karyawan</label>
                                                        <select id="karyawan1" class="form-control" name="karyawan_" style="width: 100%" required>
                                                                <option hidden></option>
                                                                
                                                                <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
                                                                    <?php if (isset($key_dahboard_karyawan->akun->data_diri)): ?>
                                                                        <option value="{{$key_dahboard_karyawan->akun->id}}">{{$key_dahboard_karyawan->akun->data_diri->nama_lengkap}} / {{$key_dahboard_karyawan->akun->nik}}       </option>
                                                                    <?php else: ?>
                                                                    <?php endif ?>
                                                                <?php endforeach ?>
                                                                
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 hight-top-">
                                                    <div class="mb-3 ">
                                                        <label class="form-label">Pilih Jabatan</label>
                                                        <select id="jabatan" class="form-control" name="jabatan_" style="width: 100%" required>
                                                                <option hidden></option>
                                                                <?php foreach ($dahboard_jabatan as $key_dahboard_jabatan): ?>
                                                                    <option value="{{$key_dahboard_jabatan->id}}">              {{$key_dahboard_jabatan->nama_jabatan}}</option>
                                                                <?php endforeach ?>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-md-4 hight-top-">
                                                    <div class="mb-3">
                                                        <label class="form-label">Pilih Gaji</label>
                                                        <select id="gaji" class="form-control" name="gaji_" style="width: 100%" required>
                                                                <option hidden></option>
                                                                <?php foreach ($dahboard_gaji as $key_dahboard_gaji): ?>
                                                                    <option value="{{$key_dahboard_gaji->id}}">              Rp {{number_format($key_dahboard_gaji->nominal_gaji,2,',','.')}}</option>
                                                                <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="bottom-top-jabatan">
                                                    <button type="submit"  class="btn btn-warning active w-100">
                                                        Buat Master Jabatan
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                </div>
                            </div>

                        
                                    <div class="col-xl-12 col-md-12 hight-top-jabatan">
                                        <div class="card">
                                            <ul class="nav nav-tabs" data-bs-toggle="tabs">

                                                    <li class="nav-item">
                                                        <a href="#tambah-jabatan" class="nav-link active" data-bs-toggle="tab">Tambah Jabatan</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="#tambah_gaji" class="nav-link " data-bs-toggle="tab">Tambah Gaji</a>
                                                    </li>

                                            </ul>
                                            <div class="card-body">
                                                    <div class="tab-content">
                                                        
                                                                <div class="tab-pane active show" id="tambah-jabatan">
                                                                    <form  action="{{route('create_jabatan')}}" method="post"  enctype="multipart/form-data">
                                                                    {{ csrf_field() }}
                                                                        <div class="mb-3">
                                                                            <label class="form-label required">Nama Jabatan</label>
                                                                            <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Input Jabatan..." onkeyup="this.value = this.value.toUpperCase()" required>
                                                                            <!-- <span id="panggil_error" class="text-danger font-size-info-alert"></span> -->
                                                                        </div>

                                                                        <div>
                                                                            <button type="submit"  class="btn btn-warning active w-100">
                                                                                Buat Jabatan
                                                                            </button>
                                                                        </div>
                                                                        
                                                                    </form>

                                                                </div>
                                                        
                                                        <div class="tab-pane " id="tambah_gaji">
                                                                <form  action="{{route('create_gaji')}}" method="post"  enctype="multipart/form-data">
                                                                    {{ csrf_field() }}
                                                                    <div class="mb-3">
                                                                        <label class="form-label required">Nominal Gaji</label>
                                                                        <input type="text" class="form-control " id="rupiah1" name="nominal_gaji" placeholder="Input Nominal Gaji..." required>
                                                                        <!-- <span id="panggil_error" class="text-danger font-size-info-alert"></span> -->
                                                                    </div>

                                                                    <div>
                                                                        <button type="submit"  class="btn btn-warning active w-100">
                                                                            Buat Nominal Gaji
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                        </div>
                                                    </div>
                                            </div>
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
                                    <th>Karyawan</th>
                                    <th>Jabatan</th>
                                    <th>Nominal Gaji</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($dahboard_karyawan) > 0): ?>
                                
                                <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
                                    <?php if (isset($key_dahboard_karyawan->akun->jabatan_gaji->jabatan->nama_jabatan) != null): ?>
                                    <?php else: ?>
                                    
                                        <tr>
                                            <td data-label="Name" >
                                                <div class="d-flex py-1 align-items-center">
                                                    <?php if (isset($key_dahboard_karyawan->akun->data_diri->foto)): ?>
                                                        <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$key_dahboard_karyawan->akun->data_diri->foto}})"></span>
                                                    <?php else: ?>
                                                        <span class="avatar me-2" style="background-image: url({{ asset('') }}file/rekrutment/profil/profil.png)"></span>
                                                    <?php endif ?>
                                                    <div class="flex-fill">
                                                            <?php if ($key_dahboard_karyawan->akun->data_diri): ?>
                                                                <div class="font-weight-medium">{{$key_dahboard_karyawan->akun->data_diri->nama_lengkap}}</div>
                                                                <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan->akun->nik}}</a></div>
                                                            <?php else: ?>
                                                                <div class="font-weight-medium">Tidak Ada</div>
                                                                    <?php if ($key_dahboard_karyawan->akun): ?>
                                                                        <div class="text-muted"><a href="#" class="text-reset">IDE-{{$key_dahboard_karyawan->akun->nik}}</a></div>
                                                                    <?php else: ?>
                                                                        <div class="text-muted"><a href="#" class="text-reset">IDE-Tidak Ada</a></div>
                                                                    <?php endif ?>
                                                            <?php endif ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-label="Title" >
                                                    <?php if ($key_dahboard_karyawan->akun->jabatan_gaji): ?>
                                                        <div class="text-muted">    
                                                        <div class="text-muted">    <span class="badge bg-warning me-1">{{$key_dahboard_karyawan->akun->jabatan_gaji->jabatan->nama_jabatan}}</span>
                                                    <?php else: ?>
                                                        <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Tidak Ada Jabatan</span>
                                                        </div>
                                                    <?php endif ?>
                                                </div>
                                            </td>
                                            <td data-label="Title" >
                                                <?php if ($key_dahboard_karyawan->gaji): ?>
                                                    <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Rp. {{$key_dahboard_karyawan->akun->jabatan_gaji->gaji->nominal_gaji}}</span>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="text-muted">    
                                                        <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                    </div>
                                                <?php endif ?>
                                            </td>
                                        
                                        </tr>
                                    <?php endif ?>
                                <?php endforeach ?>
                                <?php else: ?>
                                        <tr>
                                            <td colspan='3' class="center-"> Tidak Ada Data Karyawan Tidak Punya Jabatan </td>
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