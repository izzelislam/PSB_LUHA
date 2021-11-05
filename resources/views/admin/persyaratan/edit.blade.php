@extends('admin.layouts.app')

@section('page-title', 'Edit Persyaratan')
  
@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('persyaratan.update', $persyaratan->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{ $persyaratan->nama }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" value="{{ $persyaratan->keterangan }}" required>
      </div>
      <div>
        <a class="btn btn-info" href="{{ url()->previous() }}">Kembali</a>
        <button type="submit" class="btn btn-success">Edit data</button>
      </div>
    </form>
  </div>
</div>
@endsection