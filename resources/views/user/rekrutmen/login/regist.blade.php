@include('user.rekrutmen.login.header')    
    <?php if (Session::get('alert-regist-berhasil-user')): ?>
        <div class="alert-regist-berhasil-user" data-flashdata="{{Session::get('alert-regist-berhasil-user')}}">
    <?php endif ?>

    <?php if (session()->has('alert-peringatan')): ?>
        <div class="alert-peringatan" data-flashdata="{{session()->get('alert-peringatan')}}">
    <?php endif ?>

    
   
{{-- <div class="alert-login-berhasil" data-flashdata="{{Session::get('alert-login-berhasil')}}"> --}}
<!-- <div class="loading overlay">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div> -->
    <div class="page page-center">
        <div class="container-tight py-4">
                {{-- <div class="text-center mb-4"> --}}
                <!-- <a href="."><img src="./static/logo.svg" height="36" alt=""></a> -->
                {{-- </div> --}}
            <form class="card card-md" action="{{route('regist_rekrutmen')}}" method="post">
                @csrf
                <div class="card-body">

                    {{-- aler peringatan login --}}
                    <?php if (Session::get('alert-login')): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <strong class="alert-login-danger">Warning! </strong> {{Session::get('alert-login')}}
                        </div>
                    <?php endif ?>
                    
                    <h2 class="card-title text-center mb-4">Regist Rekrutmen</h2>

                    <div class="mb-3">
                        <label class="form-label">Nik Ktp</label>
                        <input type="text" name="nik" class="form-control" placeholder="Employee ID Number" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Aktif</label>
                        <input type="email" name="email" class="form-control" placeholder="Email Aktif" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No Whatsapp Aktif</label>
                        <input type="text" name="nomor" class="form-control" placeholder="No Whatsapp Aktif" required>
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
                Don't have account yet? <a href="{{route('login-user')}}" tabindex="-1" onclick="submite()">Sign in</a>
            </div>
        </div>
    </div>
@include('user.rekrutmen.login.footer')        