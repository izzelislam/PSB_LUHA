@extends('admin.layouts.app')

@section('page-title', 'Edit Jenis-Biaya')
  
@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('jenis-biaya.update', $biaya->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{ $biaya->nama }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Angkatan</label>
        <input type="text" class="form-control" name="angkatan" value="{{ $biaya->angkatan }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Total Beban</label>
        <input type="number" class="form-control" name="jumlah" value="{{ $persyaratan->jumlah }}" required>
      </div>
      <div>
        <a class="btn btn-info" href="{{ url()->previous() }}">Kembali</a>
        <button type="submit" class="btn btn-primary">Edit data</button>
      </div>
    </form>
  </div>
</div>
@endsection