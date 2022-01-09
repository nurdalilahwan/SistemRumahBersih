@props([
  'id'=>null,
  'type'=>'text',
  'placeholder'=>null,
  'label'=>null,
  'required'=>null,
])

<div @isset($label) class="form-group" @endisset>
  @isset($label)
    <label class="control-label">{{ $label }}</label>@if(isset($required))<span style="color: red">*</span>@endif
  @endisset
  <input @isset($id)id="{{ $id }}"@endisset type="{{ $type }}" class="form-control @error($attributes->wire('model')->value()) is-invalid @enderror {{ $attributes->get('class') }}" placeholder="{{ $placeholder }}" {{ $attributes}}>
  @error($attributes->wire('model')->value()) 
    <span class="help-block text-danger">{{ $message }}</span> 
  @enderror 
</div>