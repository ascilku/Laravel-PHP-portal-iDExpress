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
                                        Karyawan Yang Dapat Insentif KPI
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
                                    <th>Hijau</th>
                                    <th>Merah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($dahboard_Orang_KPI) > 0): ?>
                                
                                <?php foreach ($dahboard_Orang_KPI as $key_dahboard_karyawan): ?>
                                    <?php if (isset($key_dahboard_karyawan->akun->jabatan_gaji->jabatan->nama_jabatan) != null): ?>
                                    
                                    
                                        <tr>
                                            <td data-label="Name" >
                                                <div class="d-flex py-1 align-items-center">
                                                    <?php if ($key_dahboard_karyawan->akun->data_diri->foto): ?>
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
                                                <div class="text-muted">    <span class="badge bg-success me-1">{{$key_dahboard_karyawan->akun->orang_kpi->rpkpi->rp_hujau}}</span>
                                            </td>

                                            <td data-label="Title" >
                                                <div class="text-muted">    <span class="badge bg-danger me-1">{{$key_dahboard_karyawan->akun->orang_kpi->rpkpi->rp_merah}}</span>
                                            </td>
                                            
                                        
                                        </tr>
                                    <?php else: ?>
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
                                        <form  action="{{route('create_orang_kpi')}}" method="post">
                                        {{ csrf_field() }}
                                            <div class="row">

                                                <div class="col-xl-6 col-md-8  hight-top-">
                                                    <div class="mb-3 ">
                                                        <label class="form-label">Pilih Karyawan</label>
                                                        <select id="karyawan1" class="form-control" name="karyawan_oran_kpi" style="width: 100%" required>
                                                                <option hidden></option>
                                                                
                                                                <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
                                                                    
                                                                    <?php if (isset($key_dahboard_karyawan->akun->jabatan_gaji->jabatan->nama_jabatan) != null): ?>

                                                                        <?php if (!isset($key_dahboard_karyawan_aktif_aktif->akun->riw_penempatan_wilayah)): ?>
                                                                        
                                                                        

                                                                            <?php if (isset($key_dahboard_karyawan->akun->data_diri)): ?>
                                                                                <option value="{{$key_dahboard_karyawan->akun->id}}">{{$key_dahboard_karyawan->akun->data_diri->nama_lengkap}} / {{$key_dahboard_karyawan->akun->nik}}       </option>
                                                                            <?php else: ?>
                                                                            <?php endif ?>
                                                                        <?php else: ?>
                                                                        <?php endif ?>
                                                                    <?php else: ?>
                                                                    <?php endif ?>
                                                                <?php endforeach ?>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-8 hight-top-">
                                                    <div class="mb-3 ">
                                                        <label class="form-label">Pilih Anggaran KPI</label>
                                                        
                                                        <select id="orang-insentif" class="form-control" name="rp_oran_kpi" style="width: 100%" required>
                                                                <option hidden></option>
                                                                
                                                                <?php foreach ($dahboard_dana_insentif as $key_dahboard_dana_insentif): ?>
                                                                    <?php if (isset($key_dahboard_dana_insentif)): ?>
                                                                        <option value="{{$key_dahboard_dana_insentif->id}}">Hijau {{$key_dahboard_dana_insentif->rp_hujau}} / Merah {{$key_dahboard_dana_insentif->rp_merah}}       </option>
                                                                    <?php else: ?>
                                                                    <?php endif ?>
                                                                <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="bottom-top-jabatan">
                                                    <button type="submit"  class="btn btn-warning active w-100">
                                                        Buat Anggaran KPI
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                </div>
                            </div>

                        
                    </div>
                <?php else: ?>
                    
                <?php endif ?>
            </div>
          </div>
        </div>