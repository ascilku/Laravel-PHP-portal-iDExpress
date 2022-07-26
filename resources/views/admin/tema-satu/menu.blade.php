<div class="navbar-expand-md font-size-info-alert">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('dashboard_panel')}}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                            </span>
                            <span class="nav-link-title">
                                Home
                            </span>
                        </a>
                    </li>

                    <?php if ($dahboard_akun_cookie->akses->akses == 'Karyawan'): ?>

                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                                </span>
                                <span class="nav-link-title">
                                    Manag Data Karyawan
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="{{route('absensi-diri', 'new')}}" >
                                            Absen
                                        </a>

                                        <a class="dropdown-item" href="#" >
                                            Slip Gaji
                                        </a>

                                        <a class="dropdown-item" href="{{route('kontrak-diri', 'new')}}" >
                                            Kontrak
                                        </a>
                                         
                                        <!-- <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                                                Assets
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="{{route('jabatan', 'master-jabatan')}}" class="dropdown-item">Jabatan</a>
                                                <a href="{{route('penempatan', 'master-penempatan')}}" class="dropdown-item">Penempatan</a>
                                                <a href="{{route('kontrak', 'master-kontrak')}}" class="dropdown-item">Kontrak</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endif ?>
                    <?php if ($dahboard_akun_cookie->akses->akses == 'IT Admin'): ?>
                        
                        <li class="nav-item">
                                <a class="nav-link" href="{{route('management-perusahaan')}}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                                    </span>
                                    <span class="nav-link-title">
                                    Management Perusahaan
                                    </span>
                                </a>
                        </li>
                    <?php endif ?>

                    <?php if ($dahboard_akun_cookie->akses->akses == 'Admin' || $dahboard_akun_cookie->akses->akses == 'IT Admin' || $dahboard_akun_cookie->akses->akses == 'IT Support'|| $dahboard_akun_cookie->akses->akses == 'Admin Super') : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                                </span>
                                <span class="nav-link-title">
                                    Manag Karyawan
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="{{route('karyawan-aktif', 'aktif')}}" >
                                            Karyawan
                                        </a>
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                                                Assets
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="{{route('jabatan', 'master-jabatan')}}" class="dropdown-item">Jabatan</a>
                                                <a href="{{route('penempatan', 'master-penempatan')}}" class="dropdown-item">Penempatan</a>
                                                <a href="{{route('kontrak', 'tidak-kontrak')}}" class="dropdown-item">Kontrak</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                </span>
                                <span class="nav-link-title">
                                    Manag Rekrutment
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('lowongan-pekerjaan')}}" >
                                    Create Lowongan
                                </a>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="6" height="5" rx="2" /><rect x="4" y="13" width="6" height="7" rx="2" /><rect x="14" y="4" width="6" height="7" rx="2" /><rect x="14" y="15" width="6" height="5" rx="2" /></svg>
                                </span>
                                <span class="nav-link-title">
                                    Manag Payrol
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item" href="{{route('tunjangan')}}" >
                                    Tunjangan
                                    </a>

                                    <a class="dropdown-item" href="{{route('absensi', 'new')}}" >
                                        Absen
                                    </a>
                                    
                                 
                                    
                                    <div class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                                          Insentif
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="{{route('Insentif-kpi', 'new')}}" class="dropdown-item">KPI</a>
                                            <a href="{{route('Insentif-kurir', 'new')}}" class="dropdown-item">Kurir</a>
                                        </div>
                                    </div>

                                    <div class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                                          Laporan
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="{{route('gaji-bulanan', 'new')}}" class="dropdown-item">Gaji</a>
                                            <a href="{{route('Insentif-kurir', 'new')}}" class="dropdown-item">Slip Gaji</a>
                                        </div>
                                    </div>
                                    

                                </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dokumentasi')}}" >
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="9" x2="10" y2="9" /><line x1="9" y1="13" x2="15" y2="13" /><line x1="9" y1="17" x2="15" y2="17" /></svg>
                                </span>
                                <span class="nav-link-title">
                                    Documentation
                                </span>
                            </a>
                        </li>
                        <?php if ($dahboard_akun_cookie->akses->akses == 'IT Support' || $dahboard_akun_cookie->akses->akses == 'IT Admin'|| $dahboard_akun_cookie->akses->akses == 'Admin Super' ): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#modal-akses">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 11 12 14 20 6" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                                    </span>
                                    <span class="nav-link-title">
                                    Akun Akses
                                    </span>
                                </a>
                            </li>
                        <?php else: ?>
                        <?php endif ?>
                        
                    <?php else: ?>
                        
                    <?php endif ?>

                    
                </ul>
            
            </div>
        </div>
    </div>
</div>

      <!-- ======================== Model Non Aktif Status Kepegawaian ======================== -->
      
        <?php if ($dahboard_akun_cookie->akses->akses == 'IT Support'): ?>
          <div class="modal modal-blur fade" id="modal-akses" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">

                    <form action="{{route('create-akun-akses-akun')}}" method="post">
                    {{ csrf_field() }}
                        <div class="modal-header">
                          <h5 class="modal-title">Create Akun Akses</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        

                        <div class="modal-body">
                              <div class="mb-3">
                                <label class="form-label">Akses Akun</label>
                                <div class="form-selectgroup">
                                  <label class="form-selectgroup-item">
                                    <input type="checkbox" name="akses" value="Admin" class="form-selectgroup-input" required>
                                    <span class="form-selectgroup-label">Admin / HR</span>
                                  </label>
                                </div>
                              </div>
                              
                          
                              
                              <div class="mb-3">
                                <label class="form-label required">ID Karyawan</label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK..."  required>
                                <span id="name_error" class="text-danger font-size-info-alert"></span>
                              </div>

                              <div class="mb-3">
                                <label class="form-label required">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email..."  required>
                                <span id="name_error" class="text-danger font-size-info-alert"></span>
                              </div>

                              <div class="mb-3">
                                <label class="form-label required">No Hp</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp..."  required>
                                <span id="name_error" class="text-danger font-size-info-alert"></span>
                              </div>

                              <hr>

                                    <div class="mb-3">
                                        <label class="form-label required">Tanggal Join</label>
                                        <input type="date" class="form-control" id="tanggal_join" name="tanggal_join" placeholder="Kabupaten Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kabupaten_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Status Resign</label>
                                      <div >
                                        <select class="form-select" id="status_resign" name="status_resign" required>
                                          <!-- <option hidden></option> -->
                                          <option value="Aktif">              Aktif</option>
                                          <!-- <option value="Tidak Aktif">                Tidak Aktif</option>
                                          <option value="Resign">           Resign</option> -->
                                        </select>
                                        <span id="status_kawin_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Dingtalk (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="dingtalk" placeholder="Dingtalk...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nomor Rekening (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="norek" placeholder="Nomor Rekening...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Bank (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="bank" placeholder="Bank...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Kode Bank (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="kode_bank" placeholder="Kode Bank...">
                                    </div>
                                        
                          
                        </div>

                        <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                            Create Akun
                          </button>
                        </div>
                    </form>

                </div>
              </div>
          </div>
    
        <?php elseif ($dahboard_akun_cookie->akses->akses == 'IT Admin'): ?>
            <div class="modal modal-blur fade" id="modal-akses" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">


                      <div class="col-xl-12 col-md-12">
                          <div class="card">
                              <ul class="nav nav-tabs" data-bs-toggle="tabs">

                                  

                                  <li class="nav-item">
                                      <a href="#assets-karyawan" class="nav-link active" data-bs-toggle="tab">Assets Karyawan</a>
                                  </li>

                                  <li class="nav-item">
                                      <a href="#create-akses" class="nav-link " data-bs-toggle="tab">Create Akses</a>
                                  </li>

                              </ul>
                              <div class="card-body">
                                  <div class="tab-content">
                                      <div class="tab-pane active show" id="assets-karyawan">
                                      </div>

                                      <div class="tab-pane " id="create-akses">
                                          <form action="{{route('create-akun-akses')}}" method="post">
                                            {{ csrf_field() }}
                                              <!-- <div class="modal-header">
                                                <h5 class="modal-title">Create Akun Akses</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div> -->

                                              <div class="modal-body">
                                                    <div class="mb-3">
                                                      <label class="form-label">Akses Akun</label>
                                                      <div class="form-selectgroup">
                                                        <label class="form-selectgroup-item">
                                                          <input type="checkbox" name="akses" value="IT Support" class="form-selectgroup-input" required>
                                                          <span class="form-selectgroup-label">IT Support</span>
                                                        </label>
                                                      </div>
                                                    </div>
                                                
                                                    <label class="form-label">Pilih Mitra</label>
                                                    <div class="form-selectgroup-boxes row mb-3">
                                                        <?php foreach ($dahboard_perusahaan as $key_dahboard_perusahaan): ?>
                                                            <div class="col-lg-6">
                                                                <label class="form-selectgroup-item">
                                                                      <input type="radio" name="mitra" value="{{$key_dahboard_perusahaan->id}}" class="form-selectgroup-input" required>
                                                                      <span class="form-selectgroup-label d-flex align-items-center p-3">
                                                                          <span class="me-3">
                                                                              <span class="form-selectgroup-check"></span>
                                                                          </span>
                                                                          <span class="form-selectgroup-label-content">
                                                                            <span class="form-selectgroup-title strong mb-1">Mitra {{$key_dahboard_perusahaan->nama}}</span>
                                                                          </span>
                                                                      </span>
                                                                </label>
                                                            </div>
                                                        <?php endforeach ?>
                                                    </div>

                                                    <div class="mb-3">
                                                      <label class="form-label required">ID Karyawan</label>
                                                      <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK..."  required>
                                                      <span id="name_error" class="text-danger font-size-info-alert"></span>
                                                    </div>

                                                    <div class="mb-3">
                                                      <label class="form-label required">Email</label>
                                                      <input type="email" class="form-control" name="email" id="email" placeholder="email..."  required>
                                                      <span id="name_error" class="text-danger font-size-info-alert"></span>
                                                    </div>

                                                    <div class="mb-3">
                                                      <label class="form-label required">No Hp</label>
                                                      <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp..."  required>
                                                      <span id="name_error" class="text-danger font-size-info-alert"></span>
                                                    </div>
                                                
                                              </div>

                                              <div class="modal-footer">
                                                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                                  Cancel
                                                </a>
                                                <button type="submit" class="btn btn-primary ms-auto">
                                                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                                  Create Akun
                                                </button>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                </div>
            </div>
        <?php elseif ($dahboard_akun_cookie->akses->akses == 'Admin Super'): ?>

            <div class="modal modal-blur fade" id="modal-akses" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">

                  <div class="card">
                      <ul class="nav nav-tabs" data-bs-toggle="tabs">
                          <li class="nav-item">
                              <a href="#assets-karyawan" class="nav-link active" data-bs-toggle="tab">Create Akses</a>
                          </li>

                          <li class="nav-item">
                              <a href="#orang" class="nav-link " data-bs-toggle="tab">Akun Akses</a>
                          </li>
                      </ul>
                      <div class="card-body">
                          <div class="tab-content">
                              
                              

                              <div class="tab-pane active show" id="assets-karyawan">
                                  <form action="{{route('create-akun-akses-akun')}}" method="post">
                                      {{ csrf_field() }}

                                      

                                      <div class="modal-body">
                                            <div class="mb-3">
                                              <label class="form-label">Akses Akun</label>
                                              <div class="form-selectgroup">
                                                <label class="form-selectgroup-item">
                                                  <input type="checkbox" name="akses" value="IT Support" class="form-selectgroup-input" required>
                                                  <span class="form-selectgroup-label">IT Support</span>
                                                </label>
                                                
                                              </div>

                                              
                                            </div>
                                            
                                            <div class="mb-3">
                                              <label class="form-label required">ID Karyawan</label>
                                              <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK..."  required>
                                              <span id="name_error" class="text-danger font-size-info-alert"></span>
                                            </div>

                                            <div class="mb-3">
                                              <label class="form-label required">Email</label>
                                              <input type="email" class="form-control" name="email" id="email" placeholder="email..."  required>
                                              <span id="name_error" class="text-danger font-size-info-alert"></span>
                                            </div>

                                            <div class="mb-3">
                                              <label class="form-label required">No Hp</label>
                                              <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp..."  required>
                                              <span id="name_error" class="text-danger font-size-info-alert"></span>
                                            </div>

                                            <hr>

                                    <div class="mb-3">
                                        <label class="form-label required">Tanggal Join</label>
                                        <input type="date" class="form-control" id="tanggal_join" name="tanggal_join" placeholder="Kabupaten Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kabupaten_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Status Resign</label>
                                      <div >
                                        <select class="form-select" id="status_resign" name="status_resign" required>
                                          <!-- <option hidden></option> -->
                                          <option value="Aktif">              Aktif</option>
                                          <!-- <option value="Tidak Aktif">                Tidak Aktif</option>
                                          <option value="Resign">           Resign</option> -->
                                        </select>
                                        <span id="status_kawin_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Dingtalk (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="dingtalk" placeholder="Dingtalk...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nomor Rekening (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="norek" placeholder="Nomor Rekening...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Bank (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="bank" placeholder="Bank...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Kode Bank (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="kode_bank" placeholder="Kode Bank...">
                                    </div>
                                        
                                      </div>

                                      <div class="modal-footer">
                                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                          Cancel
                                        </a>
                                        <button type="submit" class="btn btn-primary ms-auto">
                                          <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                          Create Akun
                                        </button>
                                      </div>
                                  </form>
                              </div>

                              <div class="tab-pane" id="orang">
                                  
                              </div>

                              

                          </div>
                      </div>
                  </div>

                      

                  </div>
                </div>
            </div>
        <?php endif ?>


        <!-- ======================== Modal Tambah Data Karyawan ============================== -->
    <!-- <div class="modal modal-blur fade" id="modal-create-karyawan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Create Karyawan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('create-karyawan-aktif')}}" method="post">
                    {{ csrf_field() }}
                      <div class="modal-body">
                            <input type="hidden" class="form-control" id="data_id" value="{{$dahboard_akun_cookie->id_perusahaan}}" name="id_perusahaan" placeholder="Your report name">
                            <div class="mb-3">
                                <label class="form-label required">Nik Karyawan</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Nik Karyawan" required>
                                <span id="nik_error" class="text-danger font-size-info-alert"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email Aktif</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Aktif..." required>
                                <span id="email_error" class="text-danger font-size-info-alert"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">No WhatsApp Aktif</label>
                                <input type="text" class="form-control" id="no" name="no_wa" placeholder="No WhatsApp Aktif..." required>
                                <span id="no_error" class="text-danger font-size-info-alert"></span>
                            </div>

                            <div class="mb-3">
                                <label class="form-label required">No Telepon/HP Aktif</label>
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No WhatsApp Aktif..." required>
                                <span id="no_error" class="text-danger font-size-info-alert"></span>
                            </div>


                                    <div class="mb-3">
                                      <label class="form-label required">Nama Lengkap</label>
                                      <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="name_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Nama Panggilan</label>
                                      <input type="text" class="form-control" id="nama_panggil" name="nama_panggil" placeholder="Nama Panggilan..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="panggil_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Tempat Lahir</label>
                                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="tempat_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Tanggal Lahir</label>
                                      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir..." required>
                                      <span id="tanggal_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">NIK KTP</label>
                                      <input type="text" class="form-control" id="nik" name="nik_ktp" placeholder="NIK..." required>
                                      <span id="nik_error" class="text-danger font-size-info-alert"></span>
                                    </div>


                                    <div class="mb-3">
                                      <label class="form-label required">Agama</label>
                                      <div >
                                        <select class="form-select" id="agama" name="agama" required>
                                          <option hidden></option>
                                          <option value="ISLAM">              ISLAM</option>
                                          <option value="KRISTEN PROTESTAN">  KRISTEN PROTESTAN</option>
                                          <option value="KRISTEN KATHOLIK">   KRISTEN KATHOLIK</option>
                                          <option value="HINDU">              HINDU</option>
                                          <option value="BUDHA">              BUDHA</option>
                                          <option value="KONG HU CHU">        KONG HU CHU</option>
                                        </select>
                                        <span id="agama_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Jenis Kelamin</label>
                                      <div >
                                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                          <option hidden></option>
                                          <option value="LAKI-LAKI">LAKI-LAKI</option>
                                          <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                                        <span id="jenis_kelamin_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Status Kawin</label>
                                      <div >
                                        <select class="form-select" id="status_kawin" name="status_kawin" required>
                                          <option hidden></option>
                                          <option value="SUDAH KAWIN">  SUDAH KAWIN</option>
                                          <option value="BELUM KAWIN">  BELUM KAWIN</option>
                                          <option value="JANDA">        JANDA</option>
                                          <option value="DUDA">         DUDA</option>
                                        </select>
                                        <span id="status_kawin_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label">No BPJS (tidak wajib di isi)</label>
                                      <input type="text" class="form-control" name="no_bpjs" placeholder="No BPJS...">
                                      
                                    </div>
                                    
                                    <div class="mb-3">
                                      <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <div class="row">
                                              <div class="col-xl-6 col-md-6 col-sm-6">
                                                  <label class="form-label required">Tinggi Badan</label>
                                                  <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi Badan..." required>
                                                  <span id="tinggi_badan_error" class="text-danger font-size-info-alert"></span>
                                              </div>
                                              <div class="col-xl-6 col-md-6 col-sm-6">
                                                  <label class="form-label required">Berat Badan</label>
                                                  <input type="number" class="form-control" id="berat_badan" name="berat_badan" placeholder="Berat Badan..." required>
                                                  <span id="berat_badan_error" class="text-danger font-size-info-alert"></span>
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Golongan Darah</label>
                                      <div >
                                        <select class="form-select" id="golongan_darah" name="golongan_darah" required>
                                          <option hidden></option>
                                          <option value="A">    A</option>
                                          <option value="B">    B</option>
                                          <option value="AB">   AB</option>
                                          <option value="O">    O</option>
                                        </select>
                                        <span id="golongan_darah_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Suku</label>
                                      <input type="text" class="form-control" id="suku" name="suku" placeholder="Suku..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="suku_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Total Bersaudara</label>
                                      <input type="number" class="form-control" id="total_saudara" name="total_saudara" placeholder="Total Bersaudara..." required>
                                      <span id="total_saudara_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Alamat (Jalan) Sesuai KTP</label>
                                      <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" placeholder="Alamat (Jalan) Sesuai KTP" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                      <span id="alamat_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Provinsi Sesuai KTP</label>
                                      <input type="text" class="form-control" id="provinsi_ktp" name="provinsi_ktp" placeholder="Provinsi Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="provinsi_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Kota Sesuai KTP</label>
                                      <input type="text" class="form-control" id="kota_ktp" name="kota_ktp" placeholder="Kota Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="kota_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                    
                                    <div class="mb-3">
                                      <label class="form-label required">Kabupaten Sesuai KTP</label>
                                      <input type="text" class="form-control" id="kabupaten_ktp" name="kabupaten_ktp" placeholder="Kabupaten Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="kabupaten_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Kecamatan Sesuai KTP</label>
                                      <input type="text" class="form-control" id="kecamatan_ktp" name="kecamatan_ktp" placeholder="Kecamatan Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="kecamatan_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Kelurahan / Desa Sesuai KTP</label>
                                      <input type="text" class="form-control" id="kelurahan_ktp" name="kelurahan_ktp" placeholder="Kelurahan / Desa Sesuai KTP..." onkeyup="this.value = this.value.toUpperCase()" required>
                                      <span id="kelurahan_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                      <label class="form-label required">Kode Pos Sesuai KTP</label>
                                      <input type="number" class="form-control" id="kode_pos_ktp" name="kode_pos_ktp" placeholder="Kode Pos Sesuai KTP..." required>
                                      <span id="kode_pos_ktp_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                    







                                    <hr>
                                  
                                    <div class="mb-3">
                                        <label class="form-label required">Alamat Domisili</label>
                                        <textarea class="form-control" id="alamat_domisili" name="alamat_domisili" placeholder="Alamat Domisili" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                        <span id="alamat_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                         <span class="form-check-label font-color-small" >Info.!! Tulis kembali jika alamat domisili sama dengan alamat KTP</span>
                                       
                                    </div>

                                    
                                
                                    <div class="mb-3">
                                        <label class="form-label required">Provinsi Domisili</label>
                                        <input type="text" class="form-control" id="provinsi_domisili" name="provinsi_domisili" placeholder="Provinsi Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="provinsi_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label class="form-label required">Kota Domisili</label>
                                        <input type="text" class="form-control" id="kota_domisili" name="kota_domisili" placeholder="Kota Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kota_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label required">Kabupaten Domisili</label>
                                        <input type="text" class="form-control" id="kabupaten_domisili" name="kabupaten_domisili" placeholder="Kabupaten Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kabupaten_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label class="form-label required">Kecamatan Domisili</label>
                                        <input type="text" class="form-control" id="kecamatan_domisili" name="kecamatan_domisili" placeholder="Kecamatan Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kecamatan_domisili_error" class="text-danger font-size-info-alert"></span>
                                    
                                    </div>
                                
                                    <div class="mb-3">
                                        <label class="form-label required">Kelurahan / Desa Domisili</label>
                                        <input type="text" class="form-control" id="kelurahan_domisili" name="kelurahan_domisili" placeholder="Kelurahan / Desa Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kelurahan_domisili_error" class="text-danger font-size-info-alert"></span>
                                    
                                    </div>
                                
                                
                                    <div class="mb-3">
                                        <label class="form-label">Instagram (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="instagram" placeholder="instagram...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Facebook (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="fb" placeholder="Facebook...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">LinkedIn (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Twitter (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="twitter" placeholder="Twitter...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label required">Ceritakan Tentang Diri Karyawan</label>
                                        <textarea class="form-control" id="cerita_diri" name="cerita_diri" placeholder="Ceritakan Tentang Diri Anda Maximal 150 Karakter" onkeyup="this.value = this.value.toUpperCase()" required></textarea>
                                        <span id="cerita_diri_error" class="text-danger font-size-info-alert"></span>
                                    
                                    </div>

                                    <hr>

                                    <div class="mb-3">
                                        <label class="form-label required">Tanggal Join</label>
                                        <input type="date" class="form-control" id="tanggal_join" name="tanggal_join" placeholder="Kabupaten Domisili..." onkeyup="this.value = this.value.toUpperCase()" required>
                                        <span id="kabupaten_domisili_error" class="text-danger font-size-info-alert"></span>
                                    </div>

                                    <div class="mb-3">
                                      <label class="form-label required">Status Resign</label>
                                      <div >
                                        <select class="form-select" id="status_resign" name="status_resign" required>
                                          <option hidden></option>
                                          <option value="Aktif">              Aktif</option>
                                          <option value="Tidak Aktif">                Tidak Aktif</option>
                                          <option value="Resign">           Resign</option>
                                        </select>
                                        <span id="status_kawin_error" class="text-danger font-size-info-alert"></span>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Dingtalk (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="dingtalk" placeholder="Dingtalk...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nomor Rekening (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="norek" placeholder="Nomor Rekening...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Bank (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="bank" placeholder="Bank...">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Kode Bank (tidak wajib di isi)</label>
                                        <input type="text" class="form-control" name="kode_bank" placeholder="Kode Bank...">
                                    </div>

                                    
                           
                      </div>
                    
                      <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Create new Karyawan
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div> -->



      