@extends('siswa.includes.app')

@section('page-title', 'Update Data-Wali')
  
@section('content')
<div class="row">
  <div class="card col-md-6 col-lg-6 col-sm-12">
    <div class="card-body">
      <form action="{{ route('wali.update', $wali->id) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- nama --}}
        <div class="mb-3">
          <label class="form-label">Nama<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="nama" value="{{ $wali->nama }}" placeholder="budi santoso" required>
        </div>

        {{-- alamat --}}
        <div class="mb-3">
          <label class="form-label">Alamat<small class="text-danger"><i>* wajib di isi</i></small></label>
          <textarea class="form-control" name="alamat" rows="6" placeholder="Content.." required>
            {{ $wali->alamat }}
          </textarea>
        </div>

        {{-- no telepon --}}
        <div class="mb-3">
          <label class="form-label">No Telepon</label>
          <input type="text" class="form-control" name="no_telepon" value="{{ $wali->no_telepon }}" placeholder="082346571348">
        </div>

        <div>
          <button type="submit" class="btn btn-success w-full">kirim data</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection