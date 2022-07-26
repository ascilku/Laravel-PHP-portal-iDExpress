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
                                        Karyawan Yang Dapat Insentif Kurir
                                    </h2>
                            </div>
                        </div>
                </div>

                <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                    <div class="col-xl-12 col-md-12">
                        <div class="card font-size-cv-">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Karyawan</th>
                                    <th>Jabatan</th>
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
                                                    <?php if (!isset($key_dahboard_karyawan->akun->jabatan_gaji->jabatan)): ?>
                                                        <div>Tidak Ada </div>
                                                    <?php else: ?>
                                                        <div>{{$key_dahboard_karyawan->akun->jabatan_gaji->jabatan->nama_jabatan}} </div>
                                                    <?php endif ?>
                                                <div class="text-muted"></div>
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
                <?php else: ?>
                    
                <?php endif ?>
            </div>
          </div>
        </div>