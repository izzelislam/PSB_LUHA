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
    <title>masuk - sistem pendaftaran online PPTQ-luqman alhaqim</title>
    <!-- CSS files -->
    @include('auth.includes.style')
  </head>
  <body class="antialiased border-top-wide border-success d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        @if (session('gagal'))
          <div class="alert alert-danger alert-dismissible fade show bg-danger text-light" role="alert">
            {{ session('gagal') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form class="card card-md" action="{{ route('login-proses') }}" method="POST" autocomplete="off">
          <div class="card-body">
            <div class="text-center mb-4">
              <a href="."><img src="{{ asset('assets/img/favicon.png ') }}" style="height: 100px; width: 100px;" alt=""></a>
            </div>
            <h2 class="card-title text-center mb-4">Masuk ke akun anda</h2>
            <div class="mb-3">
              <label class="form-label">No Telepon</label>
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password
                <span class="form-label-description">
                  <a href="#">Lupa password</a>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control"  placeholder="Password"  autocomplete="off">
            </div>
            <div class="mb-2">
              <label class="form-check">
                <input type="checkbox" class="form-check-input"/>
                <span class="form-check-label">Ingat saya untuk perangkat ini.</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-success w-100">Masuk</button>
              <div class="mt-3">
                <small>Belum punya akun sebelumnya?</small>
                <button type="submit" class="btn btn-dark w-100 mt-1">Daftar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('tabler/dist/js/tabler.min.js') }}"></script>
  </body>
</html>