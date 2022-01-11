@props([
  'id'=>null,
  'height'=>'125',
  'placeholder'=>null,
  'label'=>null,
  'required'=>null,
  'text'=>null,
])

<div @isset($label) class="form-group" @endisset>
    @isset($label)
    <label class="control-label">{{ $label }}</label>@if(isset($required))<span style="color: red">*</span>@endif
    @endisset
    <textarea @isset($id)id="{{ $id }}"@endisset class="form-control @if(!isset($lowercase))text-uppercase @endif @error($attributes->wire('model')->value()) is-invalid @enderror {{ $attributes->get('class') }}" placeholder="{{ $placeholder }}" style="height: {{ $height }}px" {{ $attributes }}>{{ $text }}</textarea>
    @error($attributes->wire('model')->value()) 
    <span class="help-block text-danger">{{ $message }}</span>
    @enderror
  </div>
  