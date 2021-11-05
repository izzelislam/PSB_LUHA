@extends('siswa.includes.app')

@section('page-title', 'Edit Biodata-Ayah')
  
@section('content')
<div class="row">
  <div class="card col-md-6 col-lg-6 col-sm-12">
    <div class="card-body">
      <form action="{{ route('ayah.update', $ayah->id) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- agama --}}
        <div class="mb-3">
          <div class="form-label">Agama <small class="text-danger"><i>* wajib di isi</i></small></div>
            <select class="form-select" name="agama_id" required>
              <option value="{{ $ayah->agama->id }}">{{ $ayah->agama->nama }}</option>
              @foreach ($agama as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
        </div>
        
        {{-- nama --}}
        <div class="mb-3">
          <label class="form-label">Nama<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="nama" value="{{ $ayah->nama }}" placeholder="budi santoso" required>
        </div>


        {{-- tempat lahir --}}
        <div class="mb-3">
          <label class="form-label">Tempat lahir</label>
          <input type="text" class="form-control" name="tempat_lahir" value="{{ $ayah->tempat_lahir }}" placeholder="magelang" required>
        </div>

        {{-- tanggal lahir --}}
        <div class="mb-3">
          <label class="form-label">Tanggal Lahir<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="date" class="form-control" name="tanggal_lahir" value="{{ $ayah->tanggal_lahir }}" placeholder="12-01-2008" required>
        </div>

        {{-- pendiidkan --}}
        <div class="mb-3">
          <label class="form-label">Pendidikan terakhir<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="pendidikan" value="{{ $ayah->pendidikan }}" placeholder="SMA" required>
        </div>
        
        {{-- Pekerjaan --}}
        <div class="mb-3">
          <label class="form-label">Pekerjaan<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="pekerjaan" value="{{ $ayah->pekerjaan }}" placeholder="Wirausaha" required>
        </div>

        {{-- Pekerjaan --}}
        <div class="mb-3">
          <label class="form-label">Penghasilan Ayah / bulan<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="number" class="form-control" name="penghasilan" value="{{ $ayah->pendapatan }}" placeholder="2000000" required>
        </div>

        {{-- alamat rumah --}}
        <div class="mb-3">
          <label class="form-label">Alamat rumah<small class="text-danger"><i>* wajib di isi</i></small></label>
          <textarea class="form-control" name="alamat_rumah"  rows="6" placeholder="Content.." required>
            {{ $ayah->alamat_rumah }}
          </textarea>
        </div>

        {{-- no telepon --}}
        <div class="mb-3">
          <label class="form-label">No Telepon</label>
          <input type="text" class="form-control" name="no_telepon" value="{{ $ayah->no_telepon }}" placeholder="082346571348">
        </div>

        {{-- alamat Kantor --}}
        <div class="mb-3">
          <label class="form-label">Alamat Kantor</label>
          <textarea class="form-control" name="alamat_kantor" rows="6" placeholder="Content..">
            {{ $ayah->alamat_kantor }}
          </textarea>
        </div>

        {{-- no telepon --}}
        <div class="mb-3">
          <label class="form-label">No Telepon Kantor</label>
          <input type="text" class="form-control" name="no_telepon_kantor" value="{{ $ayah->no_telepon_kantor }}" placeholder="082346571348">
        </div>

        <div>
          <button type="submit" class="btn btn-success w-full">kirim data</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection