@extends('admin.layouts.app')

@section('page-title', 'Setting')

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

<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('save-wa') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">No whatsapp admin unit (SMP)</label>
            <input 
              type="text" 
              class="form-control" 
              name="no_wa_smp" 
              placeholder="689312300123" 
              required
              {{-- {{ count($setting) > 0 ? "" : '' }} --}}
            >
            <small><i>penulisan nomor telepon : 6283812739888</i></small>
          </div>
          <div class="mb-3">
            <label class="form-label">No whatsapp admin unit (SMA)</label>
            <input type="text" class="form-control" name="no_wa_sma"  placeholder="689312300123" required>
            <small><i>penulisan nomor telepon : 6283812739888</i></small>
          </div>
          <button class="btn btn-success">simpan perubahan</button>
        </form>
      </div>
    </div>
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