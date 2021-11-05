@extends('admin.layouts.app')

@section('page-title', 'Tambah User')
  
@section('content')
<div class="card">
  @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show bg-danger text-light">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="card-body">
    <form action="{{ route('user.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="mb-3">
        <label class="form-label">No Telepon</label>
        <input type="number" class="form-control" name="no_telepon" required>
      </div>
      <div class="mb-3">
        <label class="form-label">password</label>
        <input type="password" class="form-control" name="password" required>
      </div>
      <div>
        <a class="btn btn-info" href="{{ url()->previous() }}">Kembali</a>
        <button type="submit" class="btn btn-success">buat data</button>
      </div>
    </form>
  </div>
</div>
@endsection