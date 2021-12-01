@extends('admin.includes.app')

@section('page-title', 'Setting')
  
@section('content')

  <x-card title="{{ 'Setting' }}">
    <div class="col-md-8">
      <form action="{{ route('save-wa') }}" method="POST">
        @isset($model)
            @method('PUT')
        @endisset
        @csrf
          <x-form-input
            label="No whatsapp admin unit (SMP)"
            name="name"
            class="mb-4"
            value="{{ $model->name ?? null }}"
          />

          <x-form-input
            label="No whatsapp admin unit (SMA)"
            name="name"
            class="mb-4"
            value="{{ $model->name ?? null }}"
          />

          <div class="mb-4">
            <small><i>penulisan nomor telepon : 6283812739888</i></small>
          </div>

          <button class="btn btn-primary">Buat Data</button>
      </form>
    </div>
  </x-card>

@endsection