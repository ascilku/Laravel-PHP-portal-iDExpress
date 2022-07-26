<div class="container-xl">
          <!-- Page title -->
            
        </div>

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_jabatan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Yakin Mau Hapus Jabatan.?</div>
            <div>Mengahapus Jabatan Karyawan Ini, berarti juga menghapus semua data berkaitan Jabatan Karyawan tersebut dari database.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="btn-hapus_jabatan" data-bs-dismiss="modal">Ya, Hapus Data</button>
        </div>
        </div>
    </div>
</div>
        
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">

                <div class="page-header d-print-none">
                        <div class="row align-items-center">
                            <div class="col">
                                    <h2 class="page-title">
                                        Master Jabatan
                                    </h2>
                            </div>
                        </div>
                </div>
                <div class="col-xl-12">
                    <div class="card font-size-cv-">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered padding-top padding-bottom" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nama Karyawan</th>
                                <th>Jabatan</th>
                                <th>Nominal Gaji</th>
                                <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                    <th class="w-1"></th>
                                    <th class="w-1"></th>
                                <?php else: ?>
                                    <th class="w-1"></th>
                                <?php endif ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($dahboard_karyawan) > 0): ?>
                            
                            <?php foreach ($dahboard_karyawan as $key_dahboard_karyawan): ?>
                                
                                <?php if (isset($key_dahboard_karyawan->akun->jabatan_gaji->jabatan->nama_jabatan) == null): ?>
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
                                            <?php if ($key_dahboard_karyawan->akun->jabatan_gaji): ?>
                                                <div class="text-muted">    
                                                    <span class="badge bg-warning me-1">Rp. {{$key_dahboard_karyawan->akun->jabatan_gaji->gaji->nominal_gaji}}</span>
                                                </div>
                                            <?php else: ?>
                                                <div class="text-muted">    
                                                    <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                </div>
                                            <?php endif ?>
                                        </td>
                                        <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' ): ?>
                                              <td>  
                                                        <a class="hapus_jabatan" data-bs-toggle="modal" data-bs-target="#model_hapus_jabatan"  href="{{route('hapus-jabatan')}}?id={{Crypt::encrypt($key_dahboard_karyawan->akun->jabatan_gaji->id)}}&&id_akun={{Crypt::encrypt($key_dahboard_karyawan->akun->id)}}">
                                                            <span class="badge bg-danger me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td>
                                                <!-- <td>  
                                                        <a href="{{route('jabatan', 'master-jabatan')}}?id={{$key_dahboard_karyawan->akun->id}}" 
                                                    
                                                            >
                                                        

                                                            <span class="badge bg-success me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td> -->
                                        <?php else: ?>
                                        <?php endif ?>
                                                    <td>  
                                                            <!-- <a  href="../dashboard-panel/?halaman=management-karyawan&&id={{$key_dahboard_karyawan->akun->id}}"  -->
                                                            <a href="{{route('jabatan', 'master-jabatan')}}?id={{$key_dahboard_karyawan->akun->id}}" 
                                                        
                                                                >
                                                            <!-- data-bs-toggle="modal" data-bs-target="#detail-karyawan"  -->


                                                                <span class="badge bg-success me-1 center-foto ">
                                                                    <div class="ringht-jabatan">
                                                                        <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                                                    </div>
                                                                </span>
                                                            </a>
                                                    </td>
                                       
                                    </tr>
                                <?php endif ?>

                            <?php endforeach ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan='3' class="center-"> Tidak Ada Data Karyawan Punya Jabatan </td>
                                </tr>
                            <?php endif ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
          </div>
        </div>


<!-- ======================== Modal detail karyawan ============================== -->

    <?php if (!isset($dahboard_jabatan_)): ?>
    <?php else: ?>
        <div class="modal modal-blur fade" id="detail-jabatan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hostory Jabatan</h5>
                    <a href="{{route('jabatan', 'master-jabatan')}}">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
                </div>
                    <div class="modal-body">
                        @include('admin.tema-satu.home.karyawan.tab-jabatan.detail.detail-jabatan')
                    </div>
               
                </div>
            </div>
        </div>
    <?php endif ?>

    <script>
        $(document).ready(function(){
            setTimeout(function(){
                
                $("#detail-jabatan").modal({
                        backdrop: 'static',
                        keyboard: true
                }); 
                $('#detail-jabatan').modal('show');
            }, 200);
            });
    </script>