@extends('siswa.includes.app')

@section('page-title', 'Update Biodata-Diri')

{{-- @php
    dd($unit, $biodata->toArray());
@endphp --}}
  
@section('content')
<div class="row">
  <div class="card col-md-6 col-lg-6 col-sm-12">
    <div class="card-body">
      <form action="{{ route('biodata-diri.update', $biodata->id) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- unit --}}
        <div class="mb-3">
          <div class="form-label">Unit <small class="text-danger"><i>* wajib di isi</i></small></div>
            <select class="form-select" name="unit_id" required>
              <option value="{{ $biodata->unit->id }}">{{ $biodata->unit->nama }}</option>
              @foreach ($unit as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
        </div>
        
        {{-- nama lengkap --}}
        <div class="mb-3">
          <label class="form-label">Nama Lengkap<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="nama_lengkap" placeholder="budi santoso" value="{{ $biodata->nama_lengkap }}" required>
        </div>

        {{-- nama panggilan --}}
        <div class="mb-3">
          <label class="form-label">Nama Panggilan<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="nama_panggilan" placeholder="budi" value="{{ $biodata->nama_panggilan }}" required>
        </div>

        {{-- jenis kelamin --}}
        <div class="mb-3">
          <div class="form-label">Jenis Kelamin<small class="text-danger"><i>* wajib di isi</i></small></div>
            <select class="form-select" name="jenis_kelamin" required>
              <option value="">-- pilih jenis kelamin --</option>
              <option value="laki-laki" {{ $biodata->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>laki-laki</option>
              <option value="perempuan" {{ $biodata->jenis_kelamin != 'laki-laki' ? 'selected' : '' }}>perempuan</option>
            </select>
        </div>

        {{-- mo_wali --}}
        <div class="mb-3">
          <label class="form-label">No Wali</label>
          <input type="text" class="form-control" name="no_wali" value="{{ $biodata->no_wali }}" placeholder="082346571348">
        </div>

        {{-- nisn --}}
        <div class="mb-3">
          <label class="form-label">NISN<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="nisn" placeholder="0129831278" value="{{ $biodata->nisn }}" required>
        </div>

        {{-- tempat lahir --}}
        <div class="mb-3">
          <label class="form-label">Tempat lahir</label>
          <input type="text" class="form-control" name="tempat_lahir" value="{{ $biodata->tempat_lahir }}" placeholder="magelang" required>
        </div>

        {{-- tanggal lahir --}}
        <div class="mb-3">
          <label class="form-label">Tanggal Lahir<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="date" class="form-control" name="tanggal_lahir" value="{{ $biodata->tanggal_lahir }}" placeholder="12-01-2008" required>
        </div>

        {{-- anak ke --}}
        <div class="mb-3">
          <label class="form-label">Anak Ke-<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="anak_ke" value="{{ $biodata->anak_ke }}" placeholder="2" required>
        </div>
        
        {{-- jumlah saudara --}}
        <div class="mb-3">
          <label class="form-label">Jumlah Saudara<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="jumlah_saudara" value="{{ $biodata->jumlah_saudara }}" placeholder="5" required>
        </div>

        {{-- status anak --}}
        <div class="mb-3">
          <div class="form-label">Status Di Keluarga<small class="text-danger"><i>* wajib di isi</i></small></div>
            <select class="form-select" name="status_anak" required>
              <option value="">-- pilih Status --</option>
              <option value="kandung" {{ $biodata->status_anak == 'kandung' ? 'selected' : '' }}>kandung</option>
              <option value="bukan-kandung" {{ $biodata->status_anak != 'kandung' ? 'selected' : '' }}>bukan kandung</option>
            </select>
        </div>

        {{-- alamat lengkap --}}
        <div class="mb-3">
          <label class="form-label">Alamat Lengkap<small class="text-danger"><i>* wajib di isi</i></small></label>
          <textarea class="form-control" name="alamat_lengkap" rows="6" placeholder="">
            {{ $biodata->alamat_lengkap }}
          </textarea>
        </div>

        {{-- berat badan --}}
        <div class="mb-3">
          <label class="form-label">Berat Badan<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="berat_badan" value="{{ $biodata->berat_badan }}" placeholder="50 kg" required>
        </div>

        {{-- tinggi badan --}}
        <div class="mb-3">
          <label class="form-label">Tinggi Badan<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="tinggi_badan" value="{{ $biodata->tinggi_badan }}" placeholder="150 cm" required>
        </div>

        {{-- gol darah --}}
        <div class="mb-3">
          <label class="form-label">Golongan Darah</label>
          <input type="text" class="form-control" value="{{ $biodata->gol_darah }}" name="gol_darah" placeholder="Am">
        </div>

        {{-- riwayat sakit --}}
        <div class="mb-3">
          <label class="form-label">Riwayat Sakit</label>
          <textarea class="form-control" name="riwayat_sakit"  rows="6" placeholder="">
            {{ $biodata->riwayat_sakit }}
          </textarea>
        </div>

        {{-- asal sekolah --}}
        <div class="mb-3">
          <label class="form-label">Asal Sekolah<small class="text-danger"><i>* wajib di isi</i></small></label>
          <input type="text" class="form-control" name="asal_sekolah" value="{{ $biodata->asal_sekolah }}" placeholder="Am" required>
        </div>

        {{-- alamat sekolah --}}
        <div class="mb-3">
          <label class="form-label">Alamat Sekolah<small class="text-danger"><i>* wajib di isi</i></small></label>
          <textarea class="form-control" name="alamat_sekolah" rows="6" placeholder="Content..">
            {{ $biodata->alamat_sekolah }}
          </textarea>
        </div>

        <div>
          <button type="submit" class="btn btn-success w-full">Update data</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection