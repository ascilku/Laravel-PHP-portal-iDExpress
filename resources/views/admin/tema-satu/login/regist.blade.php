@include('admin.tema-satu.login.header') 
    <?php if (Session::get('alert-regist-berhasil-user')): ?>
        <div class="alert-regist-berhasil-user" data-flashdata="{{Session::get('alert-regist-berhasil-user')}}">
    <?php endif ?>

    <?php if (session()->has('alert-peringatan')): ?>
        <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
    <?php endif ?>

    <?php if (Session::get('alert-regist-berhasil-perusahaan')): ?>
        <div class="alert-regist-berhasil-perusahaan" data-flashdata="{{Session::get('alert-regist-berhasil-perusahaan')}}">
    <?php endif ?>

    
   
{{-- <div class="alert-login-berhasil" data-flashdata="{{Session::get('alert-login-berhasil')}}"> --}}
    <div class="page page-center">
        <div class="container-tight py-4">
                {{-- <div class="text-center mb-4"> --}}
                <!-- <a href="."><img src="./static/logo.svg" height="36" alt=""></a> -->
                {{-- </div> --}}
            <form class="card card-md" action="{{route('regist-perusahaan')}}" method="post">
                @csrf
                <div class="card-body">

                    {{-- aler peringatan login --}}
                    <?php if (Session::get('alert-login')): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <strong class="alert-login-danger">Warning! </strong> {{Session::get('alert-login')}}
                        </div>
                    <?php endif ?>
                    
                    <h2 class="card-title text-center mb-4">Regist Perusahaan</h2>

                    
                    <div class="mb-3">
                        <label class="form-label">No NPWP Pemilik Perusahaan</label>
                        <input type="text" name="nik" class="form-control" placeholder="Employee ID Number" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Perusahaan</label>
                        <input type="text" name="nama" class="form-control" placeholder="Name Perusahaan" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Aktif</label>
                        <input type="email" name="email" class="form-control" placeholder="Email Aktif" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No Kantor / Handphone Aktif</label>
                        <input type="text" name="nomor" class="form-control" placeholder="No Whatsapp Aktif" required>
                        <p class="form-label font-size-regist font-color-small">Ingat.!! Pengisian Nomor Tanpa +62 atau 0</p>
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
                </div>
           
            </form>
            <div class="text-center text-muted mt-3">
                Don't have account yet? <a href="{{route('login-dashboard')}}" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>
    @include('admin.tema-satu.login.footer')              