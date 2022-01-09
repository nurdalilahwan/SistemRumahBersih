@props([
    'formless'=>'true',
    'value'=>1,
    'id'=>'component-checkbox',
    'icon'=>null,
    'label'=>null,
  ])

  @if($formless == 'false')
  <div class="form-group clearfix {{ $groupClass }}">
    <input type="hidden" value="{{ $value }}">
  @endif

    <div class="icheck-primary d-inline">
      <input type="checkbox" {{ $attributes }} value="{{ $value }}" id="{{ $id }}">
      <label for="{{ $id }}">
        @isset($label) <i class="{{ $icon }}"></i> {{ $label }} @endisset
      </label>
    </div>

  @if($formless == 'false')
    <span class="help-block text-danger"></span>
  </div>
  @endif