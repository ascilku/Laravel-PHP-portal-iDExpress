@include('admin.tema-satu.login.header')
    <?php if (Session::get('alert-token')): ?>
        <div class="alert-storage" data-flashdata="{{Session::get('alert-token')}}">
    <?php endif ?>

    <?php if (session()->has('alert-peringatan')): ?>
        <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
    <?php endif ?>

    <?php if (session()->has('alert-login-berhasil')): ?>
        <div class="alert-login-berhasil" data-flashdata="{{session()->get('alert-login-berhasil')}}">
    <?php endif ?>
    
<!-- ======================== Modal edit gaji ============================== -->
<div class="modal modal-blur fade" id="modal-reset-login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Yakin Reset Jejak Login.?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('reset-login')}}" method="post">
                {{ csrf_field() }}
                      <div class="modal-body">
                            <input type="hidden" class="form-control" id="data_id_gaji" name="id_gaji" placeholder="Your report name">
                            <div class="mb-3">
                                <p>Reset Jejak Login bertugas untuk mereset login di database.! Silahkan Reset Menggunakan Email Terdaftar</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email</label>
                                <input type="email" class="form-control data_gaji"  name="email_reset"  required>
                                <span id="nik_error" class="text-danger font-size-info-alert"></span>
                            </div>
                      </div>
                      <div class="modal-footer">
                          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                          </a>
                          <button type="submit" class="btn btn-primary ms-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                              Reset
                          </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
<!-- ======================== Akhir Modal Tambah Data Karyawan ======================== --> 
   
    <div class="page page-center">
        <div class="container-tight py-4">
                {{-- <div class="text-center mb-4"> --}}
                <!-- <a href="."><img src="./static/logo.svg" height="36" alt=""></a> -->
                {{-- </div> --}}
            <form class="card card-md" action="{{route('loginQuery')}}" method="post">
                @csrf
                <div class="card-body">

                    {{-- aler peringatan login --}}
                    <?php if (Session::get('alert-login')): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <strong class="alert-login-danger">Warning! </strong> {{Session::get('alert-login')}}
                        </div>
                    <?php endif ?>

                    <?php if (Session::get('alert-login-reset')): ?>
                        <div class="alert alert-success alert-dismissible">
                            <strong class="alert-login-success">Warning! </strong> {{Session::get('alert-login-reset')}}
                        </div>
                    <?php endif ?>
                    
                    <h2 class="card-title text-center mb-4">Login to your account</h2>
                    <div class="mb-3">
                        <label class="form-label">No NPWP / NIK KTP</label>
                        <input type="text" name="nik" class="form-control" placeholder="Employee ID Number" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                            <span class="form-label-description">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-reset-login">Reset Login</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" name="password" id="password" class="form-control"  placeholder="Password"  autocomplete="off" required>
                            <span class="input-group-text">
                                
                                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" onclick="myFunction()" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                </a>
                            </span>
                            
                        </div>
                        
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" name="setuju"  value="yes"/>
                            <span class="form-check-label">yes that's me on this device</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                    <span class="form-label-description">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-reset-login">Reset Password</a>
                    </span>
                </div>
           
            </form>
            <div class="text-center text-muted mt-3">
                Don't have account yet? <a href="{{route('regist_perusahaan')}}" tabindex="-1">Daftar Perusahaan</a>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
             var x = document.getElementById("password");
             if (x.type === "password") {
                  x.type = "text";
             } else {
                  x.type = "password";
             }
        }
   </script>
@include('admin.tema-satu.login.footer')        