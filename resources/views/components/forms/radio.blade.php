@props([
  'id'=>null,
  'name'=>null,
  'label'=>null,
  'value'=>null,
  'formless'=>'false',
])

<div class="@if($formless == 'false') form-group @endif clearfix">
    <div class="icheck-primary d-inline">
    <input type="radio" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" {{ $attributes }}>
      @isset($label)
        <label for="{{ $id }}">
            {{ $label }}
        </label>
      @endisset
    </div>
  </div>