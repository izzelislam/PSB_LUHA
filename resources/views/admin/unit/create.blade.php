@extends('admin.includes.app')

@section('page-title', $title.'Unit')
  
@section('content')

  <x-card title="{{ $title.' '. 'Unit' }}">
    <div class="col-md-8">
      <form action="{{ $submit_url }}" method="POST">
        @isset($model)
            @method('PUT')
        @endisset
        @csrf
          <x-form-input
            label="Kode"
            name="kode"
            class="mb-4"
            value="{{ $model->kode ?? null }}"
          />

          <x-form-input
            label="Nama"
            name="nama"
            class="mb-4"
            value="{{ $model->nama ?? null }}"
          />

          <x-form-input
            label="Kepala Sekolah"
            name="kepala_sekolah"
            class="mb-4"
            value="{{ $model->kepala_sekolah ?? null }}"
          />

          <button class="btn btn-primary">Buat Data</button>
      </form>
    </div>
  </x-card>

@endsection