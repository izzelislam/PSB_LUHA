@php
    $wa = App\Models\GrupWhatsapp::all();
@endphp

@extends('siswa.includes.app')

@section('content')
{{-- <div class="row row-deck row-cards">
  <div class="col-lg-6">
    <div class="row row-cards">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body p-2 text-center">
            <div class="text-end text-green">
              <span class="text-green d-inline-flex align-items-center lh-1">
                6% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
              </span>
            </div>
            <div class="h1 m-0">43</div>
            <div class="text-muted mb-3">New Tickets</div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body p-2 text-center">
            <div class="text-end text-red">
              <span class="text-red d-inline-flex align-items-center lh-1">
                -2% <!-- Download SVG icon from http://tabler-icons.io/i/trending-down -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 7 9 13 13 9 21 17" /><polyline points="21 10 21 17 14 17" /></svg>
              </span>
            </div>
            <div class="h1 m-0">95</div>
            <div class="text-muted mb-3">Daily Earnings</div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body p-2 text-center">
            <div class="text-end text-green">
              <span class="text-green d-inline-flex align-items-center lh-1">
                9% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
              </span>
            </div>
            <div class="h1 m-0">7</div>
            <div class="text-muted mb-3">New Replies</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<div class="mb-3">
  <strong>Gabung grup whatsapp untuk mendapatkan update.</strong>
</div>
<div class="row">
  <div class="col-md-12 col-lg-8">
   @foreach ($wa as $item)
    <a target="blank" href="{{ $item->link }}" class="btn btn-sm btn-success mb-3">
      <span style="margin-right: 30px">{{ $item->nama }}</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
      </svg>
    </a>
   @endforeach
  </div>
</div>

{{-- proses pendaftaran --}}
<div class="mt-3">
  <strong>Proses Pendaftaran</strong>
</div>
<div class="row row-deck row-cards mt-2">
  <div class="col-md-12 col-lg-8">
    <div class="row row-cards">
      <div class="col-12">
        <div class="card card-sm">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-auto">
                <span class="bg-blue text-white avatar">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="13" r="3"></circle>
                    <path d="M5 7h2a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h2m9 7v7a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2"></path>
                    <line x1="15" y1="6" x2="21" y2="6"></line>
                    <line x1="18" y1="3" x2="18" y2="9"></line>
                 </svg>
                </span>
              </div>
              <div class="col">
                <div class="font-weight-medium">
                  Upload Photo
                </div>
                <div class="text-muted">
                  <a href="{{ route('proses-pendaftaran') }}">pergi ke proses daftar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card card-sm">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-auto">
                <span class="bg-green text-white avatar">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash-banknote" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                    <rect x="3" y="6" width="18" height="12" rx="2"></rect>
                    <line x1="18" y1="12" x2="18.01" y2="12"></line>
                    <line x1="6" y1="12" x2="6.01" y2="12"></line>
                 </svg>
                </span>
              </div>
              <div class="col">
                <div class="font-weight-medium">
                  Membayar Biaya pendaftaran
                </div>
                <div class="text-muted">
                  <a href="{{ route('proses-pendaftaran') }}">pergi ke proses daftar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card card-sm">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-auto">
                <span class="bg-yellow text-white avatar">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    <path d="M16 11h6m-3 -3v6"></path>
                 </svg>
                </span>
              </div>
              <div class="col">
                <div class="font-weight-medium">
                  Mengisi Biodata
                </div>
                <div class="text-muted">
                  <a href="{{ route('proses-pendaftaran') }}">pergi ke proses daftar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card card-sm">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-auto">
                <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                 </svg>
                </span>
              </div>
              <div class="col">
                <div class="font-weight-medium">
                  Melengkapi Dokumen
                </div>
                <div class="text-muted">
                  <a href="{{ route('proses-pendaftaran') }}">pergi ke proses daftar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

{{-- <div class="row row-deck row-cards">
  <div class="col-md-12 col-lg-8">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Most Visited Pages</h3>
      </div>
      <div class="card-table table-responsive">
        <table class="table table-vcenter">
          <thead>
            <tr>
              <th>Page name</th>
              <th>Visitors</th>
              <th>Unique</th>
              <th colspan="2">Bounce rate</th>
            </tr>
          </thead>
          <tr>
            <td>
              /about.html
              <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
              </a>
            </td>
            <td class="text-muted">4,896</td>
            <td class="text-muted">3,654</td>
            <td class="text-muted">82.54%</td>
            <td class="text-end w-1">
              <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-1"></div>
            </td>
          </tr>
          <tr>
            <td>
              /special-promo.html
              <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
              </a>
            </td>
            <td class="text-muted">3,652</td>
            <td class="text-muted">3,215</td>
            <td class="text-muted">76.29%</td>
            <td class="text-end w-1">
              <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-2"></div>
            </td>
          </tr>
          <tr>
            <td>
              /news/1,new-ui-kit.html
              <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
              </a>
            </td>
            <td class="text-muted">3,256</td>
            <td class="text-muted">2,865</td>
            <td class="text-muted">72.65%</td>
            <td class="text-end w-1">
              <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-3"></div>
            </td>
          </tr>
          <tr>
            <td>
              /lorem-ipsum-dolor-sit-amet-very-long-url.html
              <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
              </a>
            </td>
            <td class="text-muted">986</td>
            <td class="text-muted">865</td>
            <td class="text-muted">44.89%</td>
            <td class="text-end w-1">
              <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-4"></div>
            </td>
          </tr>
          <tr>
            <td>
              /colors.html
              <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
              </a>
            </td>
            <td class="text-muted">912</td>
            <td class="text-muted">822</td>
            <td class="text-muted">41.12%</td>
            <td class="text-end w-1">
              <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-5"></div>
            </td>
          </tr>
          <tr>
            <td>
              /docs/index.html
              <a href="#" class="ms-1" aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
              </a>
            </td>
            <td class="text-muted">855</td>
            <td class="text-muted">798</td>
            <td class="text-muted">32.65%</td>
            <td class="text-end w-1">
              <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-6"></div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div> --}}
@endsection

@push('addon-script')

@endpush