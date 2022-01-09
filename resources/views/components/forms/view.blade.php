@props([
  'id'=>null,
  'text'=>'-',
  'label'=>null,
])

<div @isset($label) class="form-group" @endisset>
  @isset($label)
    <label class="control-label">{{ $label }}</label>
  @endisset
  <div>
    <span class="{{ $attributes->get('class') }}" style="font-size: large; font-weight: bold; color: #084188; " @isset($id)id="{{ $id }}"@endisset > {!! $text !!} </span>
  </div>
</div>
