<div  @isset($label) class="form-group" @endisset>
	@isset($label)
		<label class="control-label">{{ $label }}</label>
	@endisset
	<div class="input-group date" data-target-input="nearest">
		<div class="input-group-append" >
			<div class="input-group-text"><i class="fa fa-calendar"></i></div>
		</div>
	<input type="text" class="{{ $attributes->get('class') }} form-control datetimepicker-input monthpicker" data-toggle="datetimepicker" onchange="this.dispatchEvent(new InputEvent('input'))" {{ $attributes}} />
	</div>
	<span  class="help-block text-danger"></span>
</div>

