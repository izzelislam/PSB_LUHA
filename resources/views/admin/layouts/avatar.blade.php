<div class="col-auto ms-auto d-print-none">
  <div class="nav-item dropdown">
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
      <span class="avatar avatar-sm" style="background-image: url(/tabler/static/avatars/000m.jpg)"></span>
      <div class="d-none d-xl-block ps-2">
        <div>{{ Auth::user()->name }}</div>
        <div class="mt-1 small text-muted">{{ Auth::user()->role }}</div>
      </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
          <button  class="dropdown-item">Logout</button>
      </form>
    </div>
  </div>
</div>