
<div  @isset($label) class="form-group" @endisset wire:ignore>
	@isset($label)
		<label >{{ $label }}</label>
	@endisset
	<div class="input-group">
		<div class="input-group-append">
			<div class="input-group-text"><i class="fas fa-upload"></i></div>
		  </div>
	  <div class="custom-file">
		<input type="file" class="custom-file-input" id="{{ $attributes->get('id') }}" {{ $attributes }}>
		<label class="custom-file-label">{{ $attributes->get('placeholder') }}</label>
	  </div>
	</div>
	
  </div>
