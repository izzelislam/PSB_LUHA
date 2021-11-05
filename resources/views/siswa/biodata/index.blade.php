@extends('siswa.includes.app')

@section('content')

@if (($biodata->biodata && $biodata->ayah && $biodata->ibu && $biodata->wali) != null && count($biodata->saudara) > 0)
<div class="mb-3">
  <div class="row">
 
    <div class="col-lg-6 col-md-6 col-sm-12">
     <div class="card">
       <div class="card-body">
         <h4>Data calon santri</h4>
         <div class="row">
           <div class="col-4">
             <img style="width: 200px" src="{{ asset('file/photoProfil/'.$biodata->gambar) }}" alt="">
           </div>
           <div class="col">
             <p>unit: {{ $biodata->biodata->unit->nama }}</p>
             <p>nisn:{{ $biodata->biodata->nisn }}</p>
           </div>
         </div>
         <table class="table table-borderless mt-3">
           <tr>
             <td width="200px">Nama</td>
             <td>{{ $biodata->biodata->nama_lengkap }}</td>
           </tr>
           <tr>
             <td width="200px">Nama Panggilan</td>
             <td>{{ $biodata->biodata->nama_panggilan }}</td>
           </tr>
           <tr>
             <td width="200px">Jenis Kelamin</td>
             <td>{{ $biodata->biodata->jenis_kelamin }}</td>
           </tr>
           <tr>
             <td width="200px">Tempat Lahir</td>
             <td>{{ $biodata->biodata->tempat_lahir }}</td>
           </tr>
           <tr>
             <td width="200px">Tanggal lahir</td>
             <td>{{ $biodata->biodata->tanggal_lahir }}</td>
           </tr>
           <tr>
             <td width="200px">Alamat</td>
             <td>{{ $biodata->biodata->alamat_lengkap }}</td>
           </tr>
           <tr>
             <td width="200px">No Wali</td>
             <td>{{ $biodata->biodata->no_wali }}</td>
           </tr>
           <tr>
             <td width="200px">Status Anak</td>
             <td>{{ $biodata->biodata->status_anak }}</td>
           </tr>
           <tr>
             <td width="200px">Berat badan</td>
             <td>{{ $biodata->biodata->berat_badan }} kg</td>
           </tr>
           <tr>
             <td width="200px">Tinggi Badan</td>
             <td>{{ $biodata->biodata->tinggi_badan }}</td>
           </tr>
           <tr>
             <td width="200px">Riwayat Sakit</td>
             <td>{{ $biodata->biodata->riwayat_sakit }}</td>
           </tr>
           <tr>
             <td width="200px">jumlah Saudara</td>
             <td>{{ $biodata->biodata->jumlah_saudara }}</td>
           </tr>
           <tr>
             <td width="200px">Asal sekolah</td>
             <td>{{ $biodata->biodata->asal_sekolah }}</td>
           </tr>
           <tr>
             <td width="200px">Alamat sekolah</td>
             <td>{{ $biodata->biodata->alamat_sekolah }}</td>
           </tr>
         </table>
       </div>
     </div>
    </div>
 
    <div class="col-lg-6 col-md-6 col-sm-12">
     <div class="card">
       <div class="card-body">
         <h4>Data Ayah</h4>
         <table class="table table-borderless mt-3">
           <tr>
             <td width="200px">Nama</td>
             <td>{{ $biodata->ayah->nama }}</td>
           </tr>
           <tr>
             <td width="200px">Agama</td>
             <td>{{ $biodata->ayah->agama->nama }}</td>
           </tr>
           <tr>
             <td width="200px">Tempat Lahir</td>
             <td>{{ $biodata->ayah->tempat_lahir }}</td>
           </tr>
           <tr>
             <td width="200px">Tanggal lahir</td>
             <td>{{ $biodata->ayah->tanggal_lahir }}</td>
           </tr>
           <tr>
             <td width="200px">Alamat</td>
             <td>{{ $biodata->ayah->alamat_rumah }}</td>
           </tr>
           <tr>
             <td width="200px">No telepon</td>
             <td>{{ $biodata->ayah->no_telepon }}</td>
           </tr>
           <tr>
             <td width="200px">Alamat kantor</td>
             <td>{{ $biodata->ayah->alamat_kantor }}</td>
           </tr>
           <tr>
             <td width="200px">No Telepon Kantor</td>
             <td>{{ $biodata->ayah->no_telepon_kantor}}</td>
           </tr>
         </table>
         <h4>Ibu</h4>
         <table class="table table-borderless mt-3">
           <tr>
             <td width="200px">Nama</td>
             <td>{{ $biodata->ibu->nama }}</td>
           </tr>
           <tr>
             <td width="200px">Agama</td>
             <td>{{ $biodata->ibu->agama->nama }}</td>
           </tr>
           <tr>
             <td width="200px">Tempat Lahir</td>
             <td>{{ $biodata->ibu->tempat_lahir }}</td>
           </tr>
           <tr>
             <td width="200px">Tanggal lahir</td>
             <td>{{ $biodata->ibu->tanggal_lahir }}</td>
           </tr>
           <tr>
             <td width="200px">Alamat</td>
             <td>{{ $biodata->ibu->alamat_rumah }}</td>
           </tr>
           <tr>
             <td width="200px">No telepon</td>
             <td>{{ $biodata->ibu->no_telepon }}</td>
           </tr>
           <tr>
             <td width="200px">Alamat kantor</td>
             <td>{{ $biodata->ibu->alamat_kantor }}</td>
           </tr>
           <tr>
             <td width="200px">No Telepon Kantor</td>
             <td>{{ $biodata->ibu->no_telepon_kantor}}</td>
           </tr>
         </table>
       </div>
     </div>
    </div>
 
    <div class="row mt-4">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
           <h4>Data Saudara</h4>
           <table class="table table-borderless mt-3">
             <tr>
               <td>No</td>
               <td>Nama</td>
               <td>Umur</td>
               <td>Pendidikan</td>
             </tr>
             @if (count($biodata->saudara) > 0)
               @foreach ($biodata->saudara as $index => $item)
                 <tr>
                   <td>{{ $index + 1 }}</td>
                   <td>{{ $item->nama }}</td>
                   <td>{{ $item->umur }}</td>
                   <td>{{ $item->pendidikan }}</td>
                 </tr>
               @endforeach        
             @endif
           </table>
          </div>
        </div>
      </div>
 
      <div class="col-lg-6 col-md-6 col-sm-12">
       <div class="card">
         <div class="card-body">
          <h4>Data Wali</h4>
          <table class="table table-borderless mt-3">
           <tr>
             <td width="200px">Nama</td>
             <td>{{ $biodata->wali->nama }}</td>
           </tr>
           <tr>
             <td width="200px">Alamat</td>
             <td>{{ $biodata->wali->alamt }}</td>
           </tr>
           <tr>
             <td width="200px">No Telepon</td>
             <td>{{ $biodata->wali->no_telepon }}</td>
           </tr>
          </table>
         </div>
       </div>
     </div>
 
    </div>
 
  </div>
 </div>
@else    
  <span class="badge bg-danger">Anda Belum mengisi biodata andan dengan lengkap</span>
@endif

@endsection

@push('addon-script')

@endpush