@props(['label', 'name', 'value', 'type' => 'text'])

<div {{ $attributes->class(["form-group"]) }}>
  <label>{{ $label }}</label>
  <input 
    name="{{ $name }}"
    value="{{ old($name, $value ?? null) }}"
    type={{ $type }}
    class="form-control @error($name) is-invalid @enderror" 
    type="text" 
  >
  @error($name)
		<span class="invalid-feedback">
			{{ $message }}
		</span>
	@enderror
</div>