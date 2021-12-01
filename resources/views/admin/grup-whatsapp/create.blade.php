@extends('admin.includes.app')

@section('page-title', $title.'WhatsApp')
  
@section('content')

  <x-card title="{{ $title.' '. 'WhatsApp' }}">
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

          <x-form-input
            label="Link"
            name="link"
            class="mb-4"
            value="{{ $model->link ?? null }}"
          />

          <button class="btn btn-primary">Buat Data</button>
      </form>
    </div>
  </x-card>

@endsection