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
                                        Karyawan Tidak Punya Penempatan
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
                                    <th>Nama Karyawan</th>
                                    <th>Penempatan</th>
                                    <!-- <th>Nominal Gaji</th> -->
                                    <!-- <th class="w-1"></th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($dahboard_karyawan) > 0): ?>
                                
                                <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
                                    <?php if (isset($key_dahboard_karyawan->akun->riw_penempatan_wilayah) != null): ?>
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
                                                <div class="text-muted">    
                                                            <span class="badge bg-warning me-1">Tidak Ada Penempatan</span>
                                                        
                                                </div>
                                            </td>

                                        </tr>
                                    <?php endif ?>
                                <?php endforeach ?>
                                <?php else: ?>
                                        <tr>
                                            <td colspan='3' class="center-"> Tidak Ada Data Karyawan Yang Tidak Punya Penempatan </td>
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
                                        <form  action="{{route('create_master_penempatan')}}" method="post">
                                        {{ csrf_field() }}
                                            <div class="row">

                                                    <div class="col-xl-6 col-md-6 hight-top-">
                                                        <div class="mb-3 ">
                                                            <label class="form-label required">Pilih Karyawan</label>
                                                            <select id="karyawan1" class="form-control" name="karyawan_" style="width: 100%" required>
                                                                    <option hidden></option>
                                                                    <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
                                                                        <?php if (isset($key_dahboard_karyawan->akun->data_diri->nama_lengkap)): ?>
                                                                        
                                                                            <option value="{{$key_dahboard_karyawan->akun->id}}">{{$key_dahboard_karyawan->akun->data_diri->nama_lengkap}} / {{$key_dahboard_karyawan->akun->nik}}       </option>
                                                                        <?php else: ?>
                                                                        <?php endif ?>
                                                                    <?php endforeach ?>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-6 hight-top-">
                                                        <div class="mb-3 ">
                                                            <label class="form-label required">Pilih Penempatan</label>
                                                            <select id="jabatan" class="form-control" name="jabatan_" style="width: 100%" required>
                                                                    <option hidden></option>
                                                                    <?php foreach ($penempatan as $key_penempatan): ?>
                                                                        <option value="{{$key_penempatan->id}}">              {{$key_penempatan->alokasi}}</option>
                                                                    <?php endforeach ?>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="bottom-top-jabatan">
                                                        <button type="submit"  class="btn btn-warning active w-100">
                                                            Buat Master Penempatan
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
                                    <th>Nama Karyawan</th>
                                    <th>Penempatan</th>
                                    <!-- <th>Nominal Gaji</th> -->
                                    <!-- <th class="w-1"></th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($dahboard_karyawan) > 0): ?>
                                
                                <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
                                    <?php if (isset($key_dahboard_karyawan->akun->riw_penempatan_wilayah) != null): ?>
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
                                                <div class="text-muted">    
                                                            <span class="badge bg-warning me-1">Tidak Ada Penempatan</span>
                                                        
                                                </div>
                                            </td>

                                        </tr>
                                    <?php endif ?>
                                <?php endforeach ?>
                                <?php else: ?>
                                        <tr>
                                            <td colspan='3' class="center-"> Tidak Ada Data Karyawan Yang Tidak Punya Penempatan </td>
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