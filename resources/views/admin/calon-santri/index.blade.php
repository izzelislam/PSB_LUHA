@extends('admin.includes.app')

@section('content')
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show bg-success text-light" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<x-card title="Calon Santri Unit SMP">
  <div class="px-4 mb-4">
    <a href="{{ route('santri-export.excel', 'smp') }}" class="btn btn-info"><i class="ti ti-printer"></i> Export Excel</a>
  </div>
  <table class="data-table table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Photo</th>
        <th>Unit</th>
        <th>asal sekolah</th>
        <th class="datatable-nosort">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($smp as $index => $item)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $item->user->name }}</td>
          <td>{{ $item->jenis_kelamin }}</td>
          <td><img style="width: 50px;" src="{{ url('file/photoProfil/'. $item->user->gambar ) }}" alt=""></td>
          <td>{{ $item->unit->nama }}</td>
          <td>{{ $item->asal_sekolah }}</td>
          <td>
            <div class="dropdown">
              <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <i class="dw dw-more"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                <a class="dropdown-item" href="{{ route('santri.show', $item->user->id) }}"><i class="ti ti-eye"></i> detail</a>
                <a class="dropdown-item" href="{{ route('santri-export.pdf', $item->user->id) }}"><i class="ti ti-printer"></i> export pdf</a>
              </div>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-card>

<x-card title="Calon Santri Unit SMA/ULYA">
  <div class="px-4 mb-4">
    <a href="{{ route('santri-export.excel', 'sma') }}" class="btn btn-info"><i class="ti ti-printer"></i> Export Excel</a>
  </div>
  <table class="data-table table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>jenis Kelamin</th>
        <th>Photo</th>
        <th>Unit</th>
        <th>asal sekolah</th>
        <th class="datatable-nosort">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($sma as $index => $item)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $item->user->name }}</td>
          <td>{{ $item->jenis_kelamin }}</td>
          <td><img style="width: 50px;" src="{{ url('file/photoProfil/'. $item->user->gambar ) }}" alt=""></td>
          <td>{{ $item->unit->nama }}</td>
          <td>{{ $item->asal_sekolah }}</td>
          <td>
            <div class="dropdown">
              <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <i class="dw dw-more"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                <a class="dropdown-item" href="{{ route('santri.show', $item->user->id) }}"><i class="ti ti-eye"></i> detail</a>
                <a class="dropdown-item" href="{{ route('santri-export.pdf', $item->user->id) }}"><i class="ti ti-printer"></i> export pdf</a>
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