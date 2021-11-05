@extends('admin.layouts.app')

@section('page-title', 'List Konfirmasi Pembayaran')

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
    <h3 class="card-title">List Konfirmasi</h3>
  </div>
  <div class="table-responsive">
    <table id="table_1" class="table card-table table-vcenter text-nowrap datatable">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Link Dokumen</th>
          <th>status</th>
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
              <a target="blank" href="{{ url('file/pembayaran/'.$item->gambar) }}">link Bukti pembayaran</a>
            </td>
            <td>
              @if ($item->status == 'belum-lunas')
                  <span class="badge bg-danger">
                    {{ $item->status }}
                  </span>
              @endif
              @if ($item->status != 'belum-lunas')
                  <span class="badge bg-success">
                    {{ $item->status }}
                  </span>
              @endif
            </td>
            <td >
              <a href="{{ route('kofirmasi-lunas', $item->id) }}" class="btn btn-success btn-sm">Konfirmasi lunas</a>
              <a href="{{ route('kofirmasi-belum-lunas', $item->id) }}" class="btn btn-danger btn-sm">Konfirmasi belum-lunas</a>
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