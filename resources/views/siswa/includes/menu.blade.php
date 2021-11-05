<div class="navbar-expand-md">
  <div class="collapse navbar-collapse" id="navbar-menu">
    <div class="navbar navbar-light">
      <div class="container-xl">
        <ul class="navbar-nav">
          
          {{-- home --}}
          <li class="nav-item {{ request()->is('/pendaftar/home') ? 'active' : '' }}">
            <a class="nav-link" href="/pendaftar/home" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
              </span>
              <span class="nav-link-title">
                Home
              </span>
            </a>
          </li>

          {{-- proses pendaftaran --}}
          <li class="nav-item {{ request()->is('pendaftar/proses-pendaftaran') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('proses-pendaftaran') }}" >
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-container" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M20 4v.01"></path>
                  <path d="M20 20v.01"></path>
                  <path d="M20 16v.01"></path>
                  <path d="M20 12v.01"></path>
                  <path d="M20 8v.01"></path>
                  <rect x="8" y="4" width="8" height="16" rx="1"></rect>
                  <path d="M4 4v.01"></path>
                  <path d="M4 20v.01"></path>
                  <path d="M4 16v.01"></path>
                  <path d="M4 12v.01"></path>
                  <path d="M4 8v.01"></path>
               </svg>
              </span>
              <span class="nav-link-title">
                Proses Pendaftaran
              </span>
            </a>
          </li>

          {{-- biodata --}}
          <li class="nav-item {{ request()->is('pendaftar/summery-biodata') ? 'active' : '' }}">
            <a class="nav-link" href="summery-biodata/" >
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
               </svg>
              </span>
              <span class="nav-link-title">
                Biodata
              </span>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</div>