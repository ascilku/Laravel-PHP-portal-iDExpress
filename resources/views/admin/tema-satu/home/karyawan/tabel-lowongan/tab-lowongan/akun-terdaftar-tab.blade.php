<?php if (session()->has('alert-peringatan')): ?>
    <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
<?php endif ?>

<?php if (session()->has('alert-success-karyawan')): ?>
    <div class="alert-success" data-flashdata="{{session()->get('alert-success')}}">
<?php endif ?>

<div class="container-xl">

<!-- ======================== Model Hapus Karyawan ======================== -->
<div class="modal modal-blur fade" id="model_hapus_akun" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="modal-title">Yakin Mau Hapus Akun User Ini.?</div>
            <div>Mengahapus Akun Ini, berarti juga menghapus semua data akun ini.</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="btn-hapus_akun" data-bs-dismiss="modal">Ya, Hapus Akun</button>
        </div>
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
                                        Akun Yang Mendaftar
                                    </h2>
                            </div>
                        </div>
                </div>

                <div class="col-xl-12">
                    <div class="card font-size-cv-">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Akses</th>
                                <th>Nik</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($dahboard_akun_lowongan) > 0): ?>
                            
                                <?php foreach ($dahboard_akun_lowongan as $dahboard_akun_lowongan): ?>
                                   
                                    
                                    
                                        <tr>
                                            <!-- <?php if (!isset($dahboard_akun_lowongan->data_diri)): ?>
                                            
                                                <?php else: ?>
                                            <?php endif ?> -->
                                            
                                                <td data-label="Title" >
                                                        <div class="text-muted">    
                                                            {{$dahboard_akun_lowongan->akses->akses}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <div class="text-muted">    
                                                            {{$dahboard_akun_lowongan->nik}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <!-- <div class="text-muted">    
                                                            <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                        </div> -->
                                                        <div class="text-muted">    
                                                            {{$dahboard_akun_lowongan->show_pass}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <!-- <div class="text-muted">    
                                                            <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                        </div> -->
                                                        <div class="text-muted"> 
                                                            {{$dahboard_akun_lowongan->email}}
                                                        </div>
                                                </td>
                                                <td data-label="Title" >
                                                        <!-- <div class="text-muted">    
                                                            <span class="badge bg-warning me-1">Tidak Ada Gaji Pokok</span>
                                                        </div> -->
                                                        <div class="text-muted"> 
                                                            {{$dahboard_akun_lowongan->no_hp}}
                                                        </div>
                                                </td>

                                                <td>  
                                                        <a class="hapus_akun" data-bs-toggle="modal" data-bs-target="#model_hapus_akun"  href="{{route('hapus-akun')}}?id={{Crypt::encrypt($dahboard_akun_lowongan->id)}}">
                                                            <span class="badge bg-danger me-1 center-foto ">
                                                                <div class="ringht-jabatan">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                                </div>
                                                            </span>
                                                        </a>
                                                </td>
                                            

                                            <!-- <?php if ($dahboard_akun_lowongan->akses->akses == 'Admin'): ?>
                                            
                                            <?php else: ?>
                                            <?php endif ?> -->

                                        </tr>
                                    
                                <?php endforeach ?>
                            <?php else: ?>
                                    <tr>
                                        <td colspan='11' class="center-"> Tidak Ada Data </td>
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