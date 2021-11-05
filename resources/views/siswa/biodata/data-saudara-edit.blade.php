@extends('siswa.includes.app')

@section('page-title', 'Edit Data-Saudara')
  
@section('content')
<div class="row" x-data="saudara()">
  <form action="{{ route('saudara.update') }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card col-md-6 col-lg-6 col-sm-12">
      <div class="card-body">
        
        <template x-for="(row, index) in rows" :key="row">
          <div class="mb-4">
            <span class="btn btn-primary btn-circle btn-sm" x-text="index + 1"></span>
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" x-model="row.nama" name="nama[]" required placeholder="budi santoso">
            </div>
    
            <div class="row mb-3">
              <div class="col-6">
                <label class="form-label">Umur</label>
                <input type="number" class="form-control" x-model="row.umur" name="umur[]" required placeholder="budi santoso">
              </div>
              <div class="col-6">
                <label class="form-label">Pendidikan</label>
                <input type="text" class="form-control" x-model="row.pendidikan" name="pendidikan[]" placeholder="budi santoso">
              </div>
            </div>
          </div>
        </template>

        <div class="d-grid gap-2 justify-content-end d-flex">
          <template x-if="rows.length > 1">
            <button type="button" class="btn btn-sm btn-danger ml-4" x-on:click="rmRow">hapus</button>
          </template>
          <button type="button" class="btn btn-sm btn-success" x-on:click="addRow">tambah</button>
        </div>
        
      </div>
    </div>
    
    <div class="row mt-3">
      <div class=" col-md-6 col-lg-6 col-sm-12">
        <button type="submit" class="btn btn-success w-full">kirim data</button>
      </div>
    </div>
  </form>
</div>

@endsection

@push('addon-script')
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>
  
  <script>
    console.log('data', @json($saudara))
      function saudara(){
      const initialRow = {nama: '', umur: '', pendidikan: ''};
      return {
        // data
        rows: @json($saudara),
        // method
        addRow(){
          this.rows.push(Object.assign({},initialRow));
        },
        rmRow(){
          this.rows.pop();
        }
      }
    }
  </script>
  @endpush