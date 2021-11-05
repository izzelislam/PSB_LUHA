@extends('admin.layouts.app')

@section('page-title', 'Edit Agama')
  
@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('agama.update', $wa->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{ $wa->nama }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Link</label>
        <input type="text" class="form-control" name="link" value="{{ $wa->link }}" required>
      </div>
      <div>
        <a class="btn btn-info" href="{{ url()->previous() }}">Kembali</a>
        <button type="submit" class="btn btn-success">Edit data</button>
      </div>
    </form>
  </div>
</div>
@endsection