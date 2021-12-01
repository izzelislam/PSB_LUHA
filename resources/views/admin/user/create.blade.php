@extends('admin.includes.app')

@section('page-title', $title.'Akun')
  
@section('content')

  <x-card title="{{ $title.' '.'Akun' }}">
    <div class="col-md-8">
      <form action="{{ $submit_url }}" method="POST">
        @isset($model)
            @method('PUT')
        @endisset
        @csrf
          <x-form-input
            label="Nama"
            name="name"
            class="mb-4"
            value="{{ $model->name ?? null }}"
          />

          <x-form-input
            label="Email"
            type="email"
            name="email"
            class="mb-4"
            value="{{ $model->email ?? null }}"
          />

          <x-form-input
            label="No telepon"
            name="no_telepon"
            class="mb-4"
            value="{{ $model->no_telepon ?? null }}"
          />

          <x-form-input
            label="password"
            name="password"
            type="password"
            class="mb-4"
            value=""
          />


          <button class="btn btn-primary">Buat Data</button>
      </form>
    </div>
  </x-card>

@endsection