@extends('admin.layouts.app')

@section('page-title', 'List Grup-Whatsapp')

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
  <div class="card-header mb-2 justify-content-between">
    <h3 class="card-title">List Agama</h3>
    <a href="{{ route('grup-whatsapp.create') }}" class="btn btn-success">Tambah data</a>
  </div>
  <div class="table-responsive">
    <table id="table_1" class="table card-table table-vcenter text-nowrap datatable">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>link</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($wa as $index => $item)
          <tr>
            <td>
              {{ $index + 1 }}
            </td>
            <td>
              {{ $item->nama }}
            </td>
            <td>
              {{ $item->link }}
            </td>
            <td>
              <a href="{{ route('grup-whatsapp.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <form class="d-inline" action="{{ route('grup-whatsapp.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
              </form>
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