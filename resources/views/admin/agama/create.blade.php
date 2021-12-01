@extends('admin.includes.app')

@section('page-title', $title.'Agama')
  
@section('content')

  <x-card title="{{ $title.' '.'Agama' }}">
    <div class="col-md-8">
      <form action="{{ $submit_url }}" method="POST">
        @isset($model)
            @method('PUT')
        @endisset
        @csrf
          <x-form-input
            label="Nama"
            name="nama"
            class="mb-4"
            value="{{ $model->nama ?? null }}"
          />

          <button class="btn btn-primary">Buat Data</button>
      </form>
    </div>
  </x-card>

@endsection