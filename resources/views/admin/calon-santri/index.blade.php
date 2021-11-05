@extends('admin.layouts.app')

@section('page-title', 'List Calon Santri')

@push('addon-style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show bg-success text-light" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="card">
  <div class="card-header mb-2">
    <h3 class="card-title">List Calon Santri</h3>
  </div>
  <div class="table-responsive card-body">
    <div class="row">
      <div class="col">
        <form action="" method="GET">
          <div class="row mb-4">
            <div class="col-4">
              <select class="form-select d-inline" name="unit_id" required>
                <option value="">-- pilih Unit --</option>
                  @foreach ($unit as $item)
                    <option value="{{ $item->id }}" {{ request()->unit_id == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                  @endforeach
              </select>
            </div>
            <div class="col-2">
              <button class="btn btn-success">go</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col">
        <a href="" class="btn btn-primary float-end">export excel</a>
      </div>
    </div>
    <table id="table_1" class="table card-table table-vcenter text-nowrap datatable">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Photo</th>
          <th>Unit</th>
          <th>asal sekolah</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $index => $item)
          <tr>
            <td>
              {{ $index + 1 }}
            </td>
            <td>
              {{ $item->user->name }}
            </td>
            <td>
              <img style="width: 50px;" src="{{ url('file/photoProfil/'. $item->user->gambar ) }}" alt="">
            </td>
            <td>
              {{ $item->unit->nama }}
            </td>
            <td>
             {{ $item->asal_sekolah }}
            </td>
            <td >
              <a href="{{ route('santri.show', $item->user->id) }}" class="btn btn-info btn-sm">Detail</a>
              {{-- <a href="{{ route('kofirmasi-belum-lunas', $item->id) }}" class="btn btn-danger btn-sm">Konfirmasi belum-lunas</a> --}}
              {{-- <form class="d-inline" action="{{ route('unit.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
              </form> --}}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

@push('addon-script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#table_1').DataTable();
      } );
    </script>
@endpush