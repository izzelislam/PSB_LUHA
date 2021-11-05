@extends('admin.layouts.app')

@section('page-title', 'Tambah Jenis-Biaya')
  
@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('jenis-biaya.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama"  required>
      </div>
      <div class="mb-3">
        <label class="form-label">Angkatan</label>
        <input type="text" class="form-control" name="angkatan"  required>
      </div>
      <div class="mb-3">
        <label class="form-label">Total Beban</label>
        <input type="number" class="form-control" name="jumlah" required>
      </div>
      <div>
        <a class="btn btn-info" href="{{ url()->previous() }}">Kembali</a>
        <button type="submit" class="btn btn-primary">buat data</button>
      </div>
    </form>
  </div>
</div>
@endsection