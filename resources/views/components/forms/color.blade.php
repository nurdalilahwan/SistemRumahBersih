@props([
	'id'=>null,
  'placeholder'=>null,
  'label'=>null,
  'required'=>null,
])

<div @isset($label) class="form-group" @endisset wire:ignore>
	@isset($label)
		<label class="control-label">{{ $label }}</label>@if(isset($required))<span style="color: red">*</span>@endif
	@endisset

	<div class="input-group {{ $id }} colorpicker-element" data-colorpicker-id="2">
		<div class="input-group-append">
		  <span class="input-group-text"><i class="fas fa-palette" style="color: rgb(255, 0, 0);"></i></span>
		</div>

	  <input id="{{ $id }}" type="text" class="form-control @error($attributes->wire('model')->value()) is-invalid @enderror {{ $attributes->get('class') }}" placeholder="{{ $placeholder }}" onchange="this.dispatchEvent(new InputEvent('input'))" {{ $attributes}} >
	</div>
	@error($attributes->wire('model')->value()) 
		<span class="help-block text-danger">{{ $message }}</span> 
	@enderror 
  </div>

  @push('js')
<script>
	document.addEventListener('livewire:load', function() {

		$('.{{ $id }}').colorpicker()

		$('.{{ $id }}').on('colorpickerChange', function(event) {
			$('.{{ $id }} .fa-palette').css('color', event.color.toString());
		})
	})
</script>
@endpush