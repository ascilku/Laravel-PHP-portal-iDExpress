@include('admin.tema-satu.header')
@include('admin.tema-satu.menu')
    <div class="py-4">
        <div class="container-xl">
            <div class="col-xl-12 col-md-12">
            <?php if (Session::get('alert-success-karyawan')): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <strong class="alert-login-success">Info! </strong> {{Session::get('alert-success-karyawan')}}
                    </div>
                <?php endif ?>
                        <div class="page-wrapper">
                            <div class="container-xl">
                                <!-- Page title -->
                                <div class="page-header d-print-none">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h2 class="page-title">
                                                Data Karyawan
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-body">
                                <div class="container-xl">
                                    <div class="row row-cards">
                                    
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Karyawan</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row g-2 align-items-center mb-n3">
                                                
                                                
                                                
                                                    <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                        <a href="{{route('download-dokumentasi', 'semua-karyawan')}}" class="btn btn-green w-100">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg> -->
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/cloud-download -->
	                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                            Semua Karyawan
                                                        </a>
                                                    </div>

                                                    <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                        <a href="{{route('download-dokumentasi', 'Aktif')}}" class="btn btn-cyan w-100">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg> -->
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/cloud-download -->
	                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                            Aktif Karyawan
                                                        </a>
                                                    </div>

                                                    <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                        <a href="{{route('download-dokumentasi', 'Resign')}}" class="btn btn-yellow w-100">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg> -->
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/cloud-download -->
	                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                            Resign Karyawan
                                                        </a>
                                                    </div>

                                                    <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                        <a href="{{route('download-dokumentasi', 'Tidak Aktif')}}" class="btn btn-danger w-100">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg> -->
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/cloud-download -->
	                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                            Tidak Aktif Karyawan
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 " class="top-footer">
                                            <div class="card ">
                                                <div class="card-header">
                                                    <h3 class="card-title">Jabatan</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row g-2 align-items-center mb-n3">
                                                
                                                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                            <a href="#" class="btn btn-green w-100">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg> -->
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/cloud-download -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                                Semua Jabatan
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 " class="top-footer">
                                            <div class="card ">
                                                <div class="card-header">
                                                    <h3 class="card-title">Penempatan</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row g-2 align-items-center mb-n3">
                                                
                                                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                            <a href="#" class="btn btn-green w-100">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg> -->
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/cloud-download -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                                Semua Karyawan
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 " class="top-footer">
                                            <div class="card ">
                                                <div class="card-header">
                                                    <h3 class="card-title">Kontrak</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row g-2 align-items-center mb-n3">
                                                
                                                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                            <a href="#" class="btn btn-green w-100">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg> -->
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/cloud-download -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                                Semua Karyawan
                                                            </a>
                                                        </div>

                                                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                            <a href="#" class="btn btn-cyan w-100">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg> -->
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/cloud-download -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                                Aktif Karyawan
                                                            </a>
                                                        </div>

                                                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                            <a href="#" class="btn btn-yellow w-100">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg> -->
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/cloud-download -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                                Resign Karyawan
                                                            </a>
                                                        </div>

                                                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                            <a href="#" class="btn btn-danger w-100">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg> -->
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/cloud-download -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                                Resign Karyawan
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-wrapper">
                            <div class="container-xl">
                                <!-- Page title -->
                                <div class="page-header d-print-none">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h2 class="page-title">
                                                Data Laporan
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-body">
                                <div class="container-xl">
                                    <div class="row row-cards">
                                    
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Laporan Gaji</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row g-2 align-items-center mb-n3">
                                                
                                                
                                                
                                                    <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                        <a href="{{route('download-laporan-gaji', 'Resign')}}" class="btn btn-vk w-100">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" /><line x1="12" y1="13" x2="12" y2="22" /><polyline points="9 19 12 22 15 19" /></svg>
                                                        Gaji Bulan Ini
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 " class="top-footer">
                                            <div class="card ">
                                                <div class="card-header">
                                                    <h3 class="card-title">Jabatan</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row g-2 align-items-center mb-n3">
                                                
                                                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                            <a href="#" class="btn btn-vk w-100">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg>
                                                            VK
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 " class="top-footer">
                                            <div class="card ">
                                                <div class="card-header">
                                                    <h3 class="card-title">Penempatan</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row g-2 align-items-center mb-n3">
                                                
                                                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                            <a href="#" class="btn btn-vk w-100">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg>
                                                            VK
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 " class="top-footer">
                                            <div class="card ">
                                                <div class="card-header">
                                                    <h3 class="card-title">Kontrak</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row g-2 align-items-center mb-n3">
                                                
                                                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto mb-3">
                                                            <a href="#" class="btn btn-vk w-100">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-vk -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" /><path d="M20 6c-1 2 -3 5 -5 6h-3" /><path d="M20 18c-1 -2 -3 -5 -5 -6" /></svg>
                                                            VK
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
@include('admin.tema-satu.footer')