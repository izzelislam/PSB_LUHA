@extends('admin.layouts.app')

@section('page-title', 'Tambah Unit')
  
@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('unit.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Kode</label>
        <input type="text" class="form-control" name="kode" placeholder="SMA-0120" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="SMP (sekolah menengah pertama)" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Kepala Sekolah</label>
        <input type="text" class="form-control" name="kepala_sekolah" placeholder="Budi Santoso" required>
      </div>
      <div>
        <a class="btn btn-info" href="{{ route('unit.index') }}">Kembali</a>
        <button type="submit" class="btn btn-success">buat data</button>
      </div>
    </form>
  </div>
</div>
@endsection