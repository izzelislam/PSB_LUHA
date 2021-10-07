@extends('admin.layouts.app')

@section('page-title', 'Edit Agama')
  
@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('agama.update', $agama->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="SMP (sekolah menengah pertama)" value="{{ $agama->nama }}" required>
      </div>
      <div>
        <a class="btn btn-info" href="{{ route('unit.index') }}">Kembali</a>
        <button type="submit" class="btn btn-primary">Edit data</button>
      </div>
    </form>
  </div>
</div>
@endsection