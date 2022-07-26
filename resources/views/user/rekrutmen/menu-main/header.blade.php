<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta3
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="icon" href="{{ asset('') }}assets/logo/logo-icon.png" type="image/x-icon">
    <title>Dashboard - Rekrutmen PT HIT</title>
    <!-- CSS files -->
    <link href="{{ asset('') }}dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}dist/css/demo.min.css" rel="stylesheet"/>
    <link href="{{ asset('') }}css-consume/style.css" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('') }}sweetalert/sweetalert2.all.min.js"></script>

 </head>
  <body class="antialiased">
      <div class="wrapper">
          <header class="navbar navbar-expand-md navbar-light d-print-none">
              <div class="container-xl">
              
                  <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                      <a href="{{ asset('') }}rekrutmen">
                          <img src="{{ asset('') }}assets/logo/logo-icon.png" alt="Tabler" class="navbar-brand-image">
                      </a>
                      <label class="right-left-icon">PT Heroisme Indokaisa Triasa (HIT) Group</label>
                  </h1>
                  <div class="navbar-nav flex-row order-md-last">
                
                    <!-- <div class="nav-item dropdown d-md-flex me-3">
                        <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                        
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                          <span class="badge bg-red"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                          <div class="card">
                              <a class="dropdown-item" href="./layout-horizontal.html" >
                                Horizontal
                              </a>
                              <a class="dropdown-item" href="./layout-horizontal.html" >
                                Horizontal
                              </a>
                          </div>
                        </div>
                    </div> -->

                    <?php if (!isset($rekrutment_data_diri)): ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                              <span class="avatar avatar-sm avatar-rounded" style="background-image: url({{ asset('') }}file/rekrutment/profil/profil.png)"></span>
                              <div class="d-none d-xl-block ps-2">
                                <div>User Rekrutmen</div>
                                <div class="mt-1 small  font-color-datadiri">Pelamar</div>
                              </div>
                            </a>
                            <!-- <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <a href="#" class="dropdown-item">Set status</a>
                              <a href="#" class="dropdown-item">Profile & account</a>
                              <a href="#" class="dropdown-item">Feedback</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item">Settings</a>
                              <a href="{{ asset('') }}login-logout-user" class="dropdown-item">Logout</a>
                            </div> -->
                        </div> 
                    <?php else: ?> 
                        <div class="nav-item dropdown">
                              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                                <span class="avatar avatar-sm" style="background-image: url({{ asset('') }}file/rekrutment/profil/{{$rekrutment_data_diri->foto}})"></span>
                                <div class="d-none d-xl-block ps-2">
                                  <div>{{$rekrutment_data_diri->nama_lengkap}}</div>
                                  <div class="mt-1 small font-color-datadiri">Pelamar</div>
                                </div>
                              </a>
                              <!-- <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <a href="#" class="dropdown-item">Set status</a>
                                <a href="#" class="dropdown-item">Profile & account</a>
                                <a href="#" class="dropdown-item">Feedback</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Settings</a>
                                <a href="{{ asset('') }}login-logout-user" class="dropdown-item">Logout</a>
                              </div> -->
                        </div> 
                    <?php endif ?> 

                  </div>
              </div>
          </header>