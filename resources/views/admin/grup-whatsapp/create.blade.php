@extends('admin.layouts.app')

@section('page-title', 'Tambah Grup-Whatsapp')
  
@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('grup-whatsapp.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Grup wali - 1" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Link</label>
        <input type="text" class="form-control" name="link" required>
      </div>
      <div>
        <a class="btn btn-info" href="{{ url()->previous() }}">Kembali</a>
        <button type="submit" class="btn btn-primary">buat data</button>
      </div>
    </form>
  </div>
</div>
@endsection