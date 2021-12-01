@props(['title'])

<div class="card-box mb-30">
  <div class="pd-20">
    <h4 class="text-blue h4">{{ $title }}</h4>
  </div>
  <div class="pb-20">
    {{ $slot }}
  </div>
</div>