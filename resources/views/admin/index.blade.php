@php
    $smp = \App\Models\User::whereHas('biodata.unit', fn($query) => $query->where('nama', 'SMP'))->count();
    $sma = \App\Models\User::whereHas('biodata.unit', fn($query) => $query->where('nama', 'SMA/ULYA'))->count();
    $pembayaran = \App\Models\Pembayaran::where('status', 'belum-lunas')->count();
    $pendaftar = \App\Models\User::where('role', 'pendaftar')->count();

    $latest_pay = \App\Models\Pembayaran::orderByDesc('created_at')->with('user')->take(5)->get();
@endphp

@extends('admin.includes.app')

@push('addon-style')
    
@endpush

@section('content')
<div class="title pb-20">
  <h2 class="h3 mb-0">Summary</h2>
</div>

<div class="row pb-10">
  <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
    <div class="card-box height-100-p widget-style3">
      <div class="d-flex flex-wrap">
        <div class="widget-data">
          <div class="weight-700 font-24 text-dark">{{ $smp }}</div>
          <div class="font-14 text-secondary weight-500">Pendaftar Unit SMP</div>
        </div>
        <div class="widget-icon">
          <div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
    <div class="card-box height-100-p widget-style3">
      <div class="d-flex flex-wrap">
        <div class="widget-data">
          <div class="weight-700 font-24 text-dark">{{ $sma }}</div>
          <div class="font-14 text-secondary weight-500">Pendaftar Unit SMA</div>
        </div>
        <div class="widget-icon">
          <div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-heart"></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
    <div class="card-box height-100-p widget-style3">
      <div class="d-flex flex-wrap">
        <div class="widget-data">
          <div class="weight-700 font-24 text-dark">{{ $pembayaran }}</div>
          <div class="font-14 text-secondary weight-500">Pembayaran Belum Terkonfirmasi</div>
        </div>
        <div class="widget-icon">
          <div class="icon"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
    <div class="card-box height-100-p widget-style3">
      <div class="d-flex flex-wrap">
        <div class="widget-data">
          <div class="weight-700 font-24 text-dark">{{ $pendaftar }}</div>
          <div class="font-14 text-secondary weight-500">Total Pendaftar</div>
        </div>
        <div class="widget-icon">
          <div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-users" aria-hidden="true"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row pb-10">
  <div class="col-md-12 mb-20">
    <div class="card-box height-100-p pd-20">
      <div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
        <div class="h5 mb-md-0">Statistik Pendaftaran</div>
      </div>
      <div id="activities-chart"></div>
    </div>
  </div>
</div>

<div class="card-box pb-10 mb-10">
  <div class="h5 pd-20 mb-0">Pembayaran terbaru</div>
  <table class="data-table table nowrap">
    <thead>
      <tr>
        <th class="table-plus">no</th>
        <th class="table-plus">Name</th>
        <th>link</th>
        <th>Tanggal Pembayaran</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($latest_pay as $index => $item)
          <td>{{ $index + 1}}</td>
          <td>{{ $item->user->name }}</td>
          <td>
            <a href="{{ url('file/pembayaran/'.$item->gambar) }}">{{ url('file/pembayaran/'.$item->gambar) }}</a>
          </td>
          <td>{{ $item->created_at->format('d/m/y h:i:s') }}</td>
          <td>
            @if ($item->status == 'belum-lunas')
                <span class="badge bg-danger text-white">
                  {{ $item->status }}
                </span>
            @endif
            @if ($item->status != 'belum-lunas')
                <span class="badge bg-success text-white">
                  {{ $item->status }}
                </span>
            @endif
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{-- <div class="title pb-20 pt-20">
  <h2 class="h3 mb-0">Quick Start</h2>
</div> --}}
@endsection

@push('addon-script')
<script src="{{ asset('deskapp/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('deskapp/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('deskapp/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('deskapp/vendors/scripts/dashboard3.js') }}"></script>

<script>
  var options = {
	series: [
	{
		name: "Patients",
		data: [10, 15, 12, 20, 18, 26, 24, 25, 20, 25, 22, 30]
	},
	{
		name: "Consultations",
		data: [15, 10, 17, 15, 23, 21, 30, 20, 26, 20, 28, 25]
	}
	],
	chart: {
		height: 300,
		type: 'line',
		zoom: {
			enabled: false,
		},
		dropShadow: {
			enabled: true,
			color: '#000',
			top: 18,
			left: 7,
			blur: 16,
			opacity: 0.2
		},
		toolbar: {
			show: false
		}
	},
	colors: ['#f0746c', '#255cd3'],
	dataLabels: {
		enabled: false,
	},
	stroke: {
		width: [3,3],
		curve: 'smooth'
	},
	grid: {
		show: false,
	},
	markers: {
		colors: ['#f0746c', '#255cd3'],
		size: 5,
		strokeColors: '#ffffff',
		strokeWidth: 2,
		hover: {
			sizeOffset: 2
		}
	},
	xaxis: {
		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		labels:{
			style:{
				colors: '#8c9094'
			}
		}
	},
	yaxis: {
		min: 0,
		max: 35,
		labels:{
			style:{
				colors: '#8c9094'
			}
		}
	},
	legend: {
		position: 'top',
		horizontalAlign: 'right',
		floating: true,
		offsetY: 0,
		labels: {
			useSeriesColors: true
		},
		markers: {
			width: 10,
			height: 10,
		}
	}
};



var chart = new ApexCharts(document.querySelector("#activities-chart"), options);
chart.render();

</script>
@endpush
