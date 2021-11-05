@extends('siswa.includes.app')

@section('page-title','Proses Pendaftaran')

{{-- @section('addon-style')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
@endsection --}}

@section('content')
{{-- foto profil --}}
<div class="card">
  @if (session('berhasil-upload'))
    <div class="alert alert-success alert-dismissible fade show bg-success text-light" role="alert">
      {{ session('berhasil-upload') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (session('gagal-upload'))
    <div class="alert alert-danger alert-dismissible fade show bg-danger text-light" role="alert">
      {{ session('gagal-upload') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="card-body">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="form-label">Photo</div>
        <div class="mb-3">
          @if (Auth::user()->gambar == null)
            <img src="{{ asset('assets/img/image_placeholder.png') }}" style="width: 100px;"/>
          @endif
          @if (isset(Auth::user()->gambar))
            <img src="{{ asset('file/photoProfil/'.Auth::user()->gambar) }}" style="width: 100px;"/>
          @endif
          <div class="mt-2">
            <strong><small>NB: jika laki-laki perpeci dan perempuan berkerudung.</small></strong>
          </div>
          <form enctype="multipart/form-data" method="POST">
            @csrf
            <input type="file" name="gambar" class="form-control my-3" />
            </div>
            <button formaction="{{ route('update-photo') }}" type="submit" class="btn btn-success">Upload Gambar</button>
          </form>
      </div>
    </div>
  </div>
</div>

{{-- bukti pembayaran --}}
<div class="card mt-4">
  @if (session('berhasil-upload-pembayaran'))
    <div class="alert alert-success alert-dismissible fade show bg-success text-light" role="alert">
      {{ session('berhasil-upload-pembayaran') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (session('gagal-upload-pembayaran'))
    <div class="alert alert-danger alert-dismissible fade show bg-danger text-light" role="alert">
      {{ session('gagal-upload-pembayaran') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="card-body">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="form-label">
          <span>bukti pembayaran</span>
          @if (!isset($pembayaran->pembayaran))
            <span class="badge bg-danger">belum lunas</span>
          @endif
          
          @if (isset($pembayaran->pembayaran))
            @if ($pembayaran->pembayaran->status == 'belum-lunas')
              <span class="badge bg-info">menuggu konfirmasi admin</span>
            @endif
            @if ($pembayaran->pembayaran->status == 'lunas')
              <span class="badge bg-success">lunas</span>
            @endif
          @endif

        </div>
        <div class="my-3">
          @if (isset($pembayaran->pembayaran))
            @if ($pembayaran->pembayaran->status == 'belum-lunas')
              
            <a target="blank" href="https://api.whatsapp.com/send/?phone={{ count($setting) > 0 ? $setting[0]->no_wa_smp : '6282235237730' }}&text=Saya+{{ Auth::user()->name }}+inggin+konfirmasi+biaya+pendaftaran+link+bukti  +{{ url('file/pembayaran/'.$pembayaran->pembayaran->gambar) }}+&app_absent=0" class="btn btn-sm btn-info d-grid gap-2 d-flex">
                <span>klik, untuk konfirmasi pembayaran unit SMP</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                    <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
                 </svg>
                </span>
              </a>

              <a target="blank" href="https://api.whatsapp.com/send/?phone={{ count($setting) > 0 ? $setting[0]->no_wa_sma : '6282235237730' }}&text=Saya+{{ Auth::user()->name }}+inggin+konfirmasi+biaya+pendaftaran+link+bukti  +{{ url('file/pembayaran/'.$pembayaran->pembayaran->gambar) }}+&app_absent=0" class="btn btn-sm btn-dark d-grid gap-2 d-flex mt-2">
                <span>klik, untuk konfirmasi pembayaran unit SMA</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                    <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
                 </svg>
                </span>
              </a>

            @endif
          @endif
        </div>
        <div class="mb-3">
          @if (!isset($pembayaran->pembayaran))
              <img src="{{ asset('assets/img/image_placeholder.png') }}" style="width: 100px;"/>
          @endif
          @if (isset($pembayaran->pembayaran))
            <img src="{{ asset('file/pembayaran/'.$pembayaran->pembayaran->gambar) }}" style="width: 100px;"/>
          @endif
          <form method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="gambar" class="form-control my-3" />
            </div>
            <button formaction="{{ route('pembayaran') }}" type="submit" class="btn btn-success">Upload Bukti Pembayaran</button>
          </form>
      </div>
    </div>
  </div>
</div>

{{-- biodata --}}
<div class="card mt-4">
  @if (session('berhasil-kirim-biodata'))
    <div class="alert alert-success alert-dismissible fade show bg-success text-light" role="alert">
      {{ session('berhasil-kirim-biodata') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (session('berhasil-update-biodata'))
    <div class="alert alert-success alert-dismissible fade show bg-success text-light" role="alert">
      {{ session('berhasil-update-biodata') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="card-body">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12">
        <div class="form-label">
          <span>Biodata</span>

          @if (($biodata->biodata && $biodata->ayah && $biodata->ibu && $biodata->wali) != null && count($biodata->saudara) > 0)
            <span class="badge bg-success">lengkap</span>
          @else    
            <span class="badge bg-danger">Belum lengkap</span>
          @endif
        </div>
        
        {{-- list biodata --}}
        <div class="my-2">
          {{-- biodata diri --}}
          <div class="mb-3">
            <div>
              <strong>Biodata diri</strong>
              @if (isset($biodata->biodata))
                <span class="text-success">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checks" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 12l5 5l10 -10"></path>
                    <path d="M2 12l5 5m5 -5l5 -5"></path>
                  </svg>
                </span>
              @endif
              @if (!isset($biodata->biodata))
                <span class="text-danger">
                  <strong><small><i>-belum di isi-</i></small></strong>
                </span>
              @endif
            </div>
            <div>
              @if (isset($pembayaran->pembayaran) && $pembayaran->pembayaran->status == 'lunas')
                @if (!isset($biodata->biodata))
                  <a href="{{ route('biodata-diri.create') }}" class="btn btn-sm btn-success">isi biodata</a>
                @endif
                @if (isset($biodata->biodata))
                  <a href="{{ route('bioadta-diri.edit') }}" class="btn btn-sm btn-warning">update biodata</a>
                @endif
              @else
                <button class="btn btn-secondary btn-sm" disabled>pembayaran belum terkonfirmasi<br>silahkan konfirmasi untuk <br> melakukan pengisian data,</button>
              @endif
            </div>
          </div>
          
          {{-- biodata ayah --}}
          <div class="mb-3">
            <div>
              <strong>Biodata Ayah</strong>
              @if (isset($biodata->ayah))
                <span class="text-success">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checks" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 12l5 5l10 -10"></path>
                    <path d="M2 12l5 5m5 -5l5 -5"></path>
                  </svg>
                </span>
              @endif
              @if (!isset($biodata->ayah))
                <span class="text-danger">
                  <strong><small><i>-belum di isi-</i></small></strong>
                </span>
              @endif
            </div>
            <div>
              @if (isset($pembayaran->pembayaran) && $pembayaran->pembayaran->status == 'lunas')
                @if (!isset($biodata->ayah))
                  <a href="{{ route('ayah.create') }}" class="btn btn-sm btn-success">isi biodata</a>
                @endif
                @if (isset($biodata->ayah))
                  <a href="{{ route('ayah.edit') }}" class="btn btn-sm btn-warning">update biodata</a>
                @endif
              @else
                <button class="btn btn-secondary btn-sm" disabled>pembayaran belum terkonfirmasi<br>silahkan konfirmasi untuk <br> melakukan pengisian data,</button>
              @endif
            </div>
          </div>

          {{-- biodata ibu --}}
          <div class="mb-3">
            <div>
              <strong>Biodata Ibu</strong>
              @if (isset($biodata->ibu))
                <span class="text-success">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checks" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 12l5 5l10 -10"></path>
                    <path d="M2 12l5 5m5 -5l5 -5"></path>
                  </svg>
                </span>
              @endif
              @if (!isset($biodata->ibu))
                <span class="text-danger">
                  <strong><small><i>-belum di isi-</i></small></strong>
                </span>
              @endif
            </div>
            <div>
            @if (isset($pembayaran->pembayaran) && $pembayaran->pembayaran->status == 'lunas')
              @if (!isset($biodata->ibu))
               <a href="{{ route('ibu.create') }}" class="btn btn-sm btn-success">isi biodata</a>
              @endif
              @if (isset($biodata->ibu))
                <a href="{{ route('ibu.edit') }}" class="btn btn-sm btn-warning">update biodata</a>
              @endif
             @else
                <button class="btn btn-secondary btn-sm" disabled>pembayaran belum terkonfirmasi<br>silahkan konfirmasi untuk <br> melakukan pengisian data,</button>
             @endif
            </div>
          </div> 

          {{-- wali --}}
          <div class="mb-3">
            <div>
              <strong>Data Wali</strong>
              @if (isset($biodata->wali))
                <span class="text-success">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checks" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 12l5 5l10 -10"></path>
                    <path d="M2 12l5 5m5 -5l5 -5"></path>
                  </svg>
                </span>
              @endif
              @if (!isset($biodata->wali))
                <span class="text-danger">
                  <strong><small><i>-belum di isi-</i></small></strong>
                </span>
              @endif
            </div>
            <div>
            @if (isset($pembayaran->pembayaran) && $pembayaran->pembayaran->status == 'lunas')
              @if (!isset($biodata->wali))
               <a href="{{ route('wali.create') }}" class="btn btn-sm btn-success">isi data</a>
              @endif
              @if (isset($biodata->wali))
                <a href="{{ route('wali.edit') }}" class="btn btn-sm btn-warning">update data</a>
              @endif
             @else
                <button class="btn btn-secondary btn-sm" disabled>pembayaran belum terkonfirmasi<br>silahkan konfirmasi untuk <br> melakukan pengisian data,</button>
             @endif
            </div>
          </div> 

          {{-- saudara --}}
          <div class="mb-3">
            <div>
              <strong>Data Saudara</strong>
              @if (count($biodata->saudara) > 0)
                <span class="text-success">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checks" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 12l5 5l10 -10"></path>
                    <path d="M2 12l5 5m5 -5l5 -5"></path>
                  </svg>
                </span>
              @endif
              @if (count($biodata->saudara) <= 0)
                <span class="text-danger">
                  <strong><small><i>-belum di isi-</i></small></strong>
                </span>
              @endif
            </div>
            <div>
            @if (isset($pembayaran->pembayaran) && $pembayaran->pembayaran->status == 'lunas')
              @if (count($biodata->saudara) <= 0)
               <a href="{{ route('saudara.create') }}" class="btn btn-sm btn-success">isi data</a>
              @endif
              @if (count($biodata->saudara) > 0)
                <a href="{{ route('saudara.edit') }}" class="btn btn-sm btn-warning">update data</a>
              @endif
             @else
                <button class="btn btn-secondary btn-sm" disabled>pembayaran belum terkonfirmasi<br>silahkan konfirmasi untuk <br> melakukan pengisian data,</button>
             @endif
            </div>
          </div> 

      </div>
    </div>
  </div>
</div>
</div>

{{-- persyaratan --}}
<div class="card mt-4">
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-label">
          <span>persyaratan</span>
          @if (isset($biodata->document))
            <span class="badge bg-success">lengkap</span>
          @else
            <span class="badge bg-danger">Belum-lengkap</span>
          @endif
        </div>
        <div>
          <table class="table table-striped table-hover">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Keterangan</th>
            </tr>
            @foreach ($persyaratan as $index => $item)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->keterangan }}</td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

{{-- @push('addon-script')
  <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
@endpush --}}