@php
  $current =  '/'.request()->url();
@endphp
<aside class="navbar navbar-vertical navbar-expand-lg navbar-transparent">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark">
      <a href=".">
        <img src="{{ asset('assets/img/favicon.png') }}" style="height: 100px; width: 100px" alt="Tabler" class="navbar-brand-image">
      </a>
    </h1>
    <span class="text-center">
      <strong>SISTEM PSB</strong>
    </span>

    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="navbar-nav pt-lg-3">
        {{-- home --}}
        <li class="nav-item">
          <a class="nav-link" href="/superadmin/home" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
            </span>
            <span class="nav-link-title">
              Home
            </span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <span class="nav-link">
            <small>Data Mater</small>
          </span>
        </li>

        {{-- unit --}}
        <li class="nav-item dropdown {{ request()->is('unit*') ? 'show' : '' }}"">
          <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/building-community -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" /><line x1="13" y1="7" x2="13" y2="7.01" /><line x1="17" y1="7" x2="17" y2="7.01" /><line x1="17" y1="11" x2="17" y2="11.01" /><line x1="17" y1="15" x2="17" y2="15.01" /></svg>
            </span>
            <span class="nav-link-title">
              Unit
            </span>
          </a>
          <div class="dropdown-menu {{ request()->is('unit*') ? 'show' : '' }}"">
            <div class="dropdown-menu-columns">
              <div class="dropdown-menu-column">
                <a class="dropdown-item" href="{{ route('unit.index') }}" >
                  Daftar Unit
                </a>
                <a class="dropdown-item" href="{{ route('unit.create') }}" >
                  Tambah Unit
                </a>
              </div>
            </div>
          </div>
        </li>

        {{-- agama --}}
        <li class="nav-item dropdown {{ request()->is('agama*') ? 'active' : '' }}"">
          <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/container -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 4v.01" /><path d="M20 20v.01" /><path d="M20 16v.01" /><path d="M20 12v.01" /><path d="M20 8v.01" /><rect x="8" y="4" width="8" height="16" rx="1" /><path d="M4 4v.01" /><path d="M4 20v.01" /><path d="M4 16v.01" /><path d="M4 12v.01" /><path d="M4 8v.01" /></svg>
            </span>
            <span class="nav-link-title">
              Agama
            </span>
          </a>
          <div class="dropdown-menu {{ request()->is('agama*') ? 'show' : '' }}">
            <div class="dropdown-menu-columns">
              <div class="dropdown-menu-column">
                <a class="dropdown-item" href="{{ route('agama.index') }}" >
                  Daftar Agama
                </a>
                <a class="dropdown-item" href="{{ route('agama.create') }}" >
                  Buat Data
                </a>
              </div>
            </div>
          </div>
        </li>

        {{-- grub wa --}}
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/brand-whatsapp -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" /></svg>
            </span>
            <span class="nav-link-title">
              Grup WA
            </span>
          </a>
          <div class="dropdown-menu {{ request()->is('grup-whatsapp*') ? 'show' : '' }}">
            <div class="dropdown-menu-columns">
              <div class="dropdown-menu-column">
                <a class="dropdown-item" href="{{ route('grup-whatsapp.index') }}" >
                  List Grup-whatsapp
                </a>
                <a class="dropdown-item" href="{{ route('grup-whatsapp.create') }}" >
                  Buat Data
                </a>
              </div>
            </div>
          </div>
        </li>

        {{-- persyaratan --}}
        <li class="nav-item {{ request()->is('persyaratan*') ? 'active' : '' }} dropdown">
          <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
            <span class="nav-link-icon d-md-none d-lg-inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
             </svg>
            </span>
            <span class="nav-link-title">
              Persyaratan
            </span>
          </a>
          <div class="dropdown-menu {{ request()->is('persyaratan*') ? 'show' : '' }}">
            <div class="dropdown-menu-columns">
              <div class="dropdown-menu-column">
                <a class="dropdown-item" href="{{ route('persyaratan.index') }}" >
                  List Persyaratan
                </a>
                <a class="dropdown-item" href="{{ route('persyaratan.create') }}" >
                  Buat Data
                </a>
              </div>
            </div>
          </div>
        </li>

        {{-- jenis biaya --}}
        {{-- <li class="nav-item {{ request()->is('jenis-biaya*') ? 'active' : '' }} dropdown">
          <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
            <span class="nav-link-icon d-md-none d-lg-inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-rocket" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 13a8 8 0 0 1 7 7a6 6 0 0 0 3 -5a9 9 0 0 0 6 -8a3 3 0 0 0 -3 -3a9 9 0 0 0 -8 6a6 6 0 0 0 -5 3"></path>
                <path d="M7 14a6 6 0 0 0 -3 6a6 6 0 0 0 6 -3"></path>
                <circle cx="15" cy="9" r="1"></circle>
             </svg>
            </span>
            <span class="nav-link-title">
              Jenis Biaya
            </span>
          </a>
          <div class="dropdown-menu {{ request()->is('jenis-biaya*') ? 'show' : '' }}">
            <div class="dropdown-menu-columns">
              <div class="dropdown-menu-column">
                <a class="dropdown-item" href="{{ route('jenis-biaya.index') }}" >
                  List jenis-biaya
                </a>
                <a class="dropdown-item" href="{{ route('jenis-biaya.create') }}" >
                  Buat Data
                </a>
              </div>
            </div>
          </div>
        </li> --}}

        <li class="nav-item mt-3">
          <span class="nav-link">
            <small>Menu Utama</small>
          </span>
        </li>

        {{-- status pendaftaran --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('list.dokumen') }}" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/rotate-rectangle -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.3 5h.7a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h5l-2.82 -2.82m0 5.64l2.82 -2.82" transform="rotate(-45 12 12)" /></svg>
            </span>
            <span class="nav-link-title">
              dokumen persyaratan
            </span>
          </a>
        </li>

        {{-- pembayaran --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('list-pembayaran') }}" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/report-money -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><rect x="9" y="3" width="6" height="4" rx="2" /><path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" /><path d="M12 17v1m0 -8v1" /></svg>
            </span>
            <span class="nav-link-title">
              konfirmasi pembayaran
            </span>
          </a>
        </li>

        {{-- calon santri --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('santri.index') }}" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/report-money -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="9" r="6" /><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(-30 12 9)" /><polyline points="9 14.2 9 21 12 19 15 21 15 14.2" transform="rotate(30 12 9)" /></svg>
            </span>
            </span>
            <span class="nav-link-title">
              Calon Santri
            </span>
          </a>
        </li>

        {{-- Akun --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('akun.index') }}" >
            <span class="nav-link-icon d-md-none d-lg-inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 11l2 2l4 -4"></path>
             </svg>
            </span>
            </span>
            <span class="nav-link-title">
              Akun Pendaftar
            </span>
          </a>
        </li>

      

        <li class="nav-item mt-3">
          <span class="nav-link">
            <small>Lain-Lain</small>
          </span>
        </li>

        {{-- informasi --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.index') }}" >
            <span class="nav-link-icon d-md-none d-lg-inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
             </svg>
            </span>
            <span class="nav-link-title">
              Manajemen User
            </span>
          </a>
        </li>

        {{-- setting --}}
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('setting') }}" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/tool -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" /></svg>
            </span>
            <span class="nav-link-title">
              Setting
            </span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</aside>