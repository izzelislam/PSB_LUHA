@extends('admin.includes.app')

@section('content')
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show bg-success text-light" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<x-card title="List user">
  <div class="px-4 mb-4">
    <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah data</a>
  </div>
  <table class="data-table table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No telepon</th>
        <th class="datatable-nosort">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $index => $item)
        <tr>
          <td>
            {{ $index + 1 }}
          </td>
          <td>
            {{ $item->name }}
          </td>
          <td>
            {{ $item->email }}
          </td>
          <td>
            {{ $item->no_telepon }}
          </td>
          <td>
            <div class="dropdown">
              <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <i class="dw dw-more"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                <a class="dropdown-item" href="{{ route('user.edit', $item->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                <form class="d-inline" action="{{ route('user.destroy', $item->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  {{-- <button class="btn btn-danger btn-sm">Hapus</button> --}}
                  <button class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Hapus</button>
                </form>
              </div>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-card>

@endsection

@push('addon-style')
  <link rel="stylesheet" type="text/css" href="{{ asset('deskapp/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('deskapp/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ asset('deskapp/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('deskapp/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('deskapp/vendors/scripts/datatable-setting.js') }}"></script>
@endpush