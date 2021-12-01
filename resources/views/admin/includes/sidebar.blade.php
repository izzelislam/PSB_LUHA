<div class="left-side-bar">
  <div class="brand-logo my-5">
    <a class=" text-center">
      <img style="width: 40%" src="{{ asset('assets/img/favicon.png') }}" alt="" class="light-logo">
      {{-- <img src="{{ asset('deskapp/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo"> --}}
    </a>
    <div class="close-sidebar" data-toggle="left-sidebar-close">
      <i class="ion-close-round"></i>
    </div>
  </div>
  <div class="menu-block customscroll">
    <div class="sidebar-menu">
      <ul id="accordion-menu">
        {{-- home --}}
        <li>
          <a href="/superadmin/home" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-home"></span><span class="mtext">Dashboard</span>
          </a>
        </li>

        {{-- unit --}}
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-building"></span><span class="mtext">Unit</span>
          </a>
          <ul class="submenu">
            <li><a href="{{ route('unit.index') }}">List Data</a></li>
            <li><a href="{{ route('unit.create') }}">Buat Data</a></li>
          </ul>
        </li>

        {{-- agama --}}
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-library"></span><span class="mtext">Aagama</span>
          </a>
          <ul class="submenu">
            <li><a href="{{ route('agama.index') }}">List Data</a></li>
            <li><a href="{{ route('agama.create') }}">Buat Data</a></li>
          </ul>
        </li>

        {{-- grub wa --}}
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-chat3"></span><span class="mtext"> Grub WA </span>
          </a>
          <ul class="submenu">
            <li><a href="{{ route('grup-whatsapp.index') }}">List Data</a></li>
            <li><a href="{{ route('grup-whatsapp.create') }}">Buat Data</a></li>
          </ul>
        </li>

        {{-- persyaratan --}}
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon dw dw-invoice"></span><span class="mtext">Persyaratan</span>
          </a>
          <ul class="submenu">
            <li><a href="{{ route('persyaratan.index') }}">Daftar Persyaratan</a></li>
            <li><a href="{{ route('persyaratan.create') }}">Buat Persyaratan</a></li>
          </ul>
        </li>
        
        <li>
          <div class="dropdown-divider"></div>
        </li>

        <li>
          <a href="{{ route('list.dokumen') }}" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-folder"></span><span class="mtext">Dokumen Persyaratan</span>
          </a>
        </li>

        <li>
          <a href="{{ route('list-pembayaran') }}" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-money"></span><span class="mtext">Konfirmasi Pembayaran</span>
          </a>
        </li>

        <li>
          <a href="{{ route('santri.index') }}" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-book"></span><span class="mtext">Calon Santri</span>
          </a>
        </li>

        <li>
          <a href="{{ route('akun.index') }}" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-server"></span><span class="mtext">Akun Pendaftar</span>
          </a>
        </li>

        <li>
          <div class="dropdown-divider"></div>
        </li>

        {{-- user management --}}
    
        <li>
          <a href="{{ route('user.index') }}" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-invoice"></span><span class="mtext">User</span>
          </a>
        </li>

        {{-- asetting --}}
    
        <li>
          <a href="{{ route('setting') }}" class="dropdown-toggle no-arrow">
            <span class="micon dw dw-settings"></span><span class="mtext">Setting</span>
          </a>
        </li>
       

      </ul>
    </div>
  </div>
</div>
<div class="mobile-menu-overlay"></div>