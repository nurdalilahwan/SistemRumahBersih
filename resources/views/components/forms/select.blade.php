  <div  @isset($label) class="form-group" @endisset wire:ignore>
    @isset($label)
      <label class="control-label">{{ $label ?? 'Select' }}</label>@if(isset($required))<span style="color: red">*</span>@endif
    @endisset
    <select 
        id="{{ $id }}"
        {{ $attributes }}
        class="form-control select2" 
        @isset($alpinejs)
          @change="foo = $event.target.value"
        @endisset
        @isset($multiple) 
            multiple
            data-placeholder="{{ $placeholder ?? 'Multiple select ...' }}" 
        @endisset

        wire:model.defer="{{ $attributes->wire('model')->value() }}"

      style="width: 100%;"
      >
    @if(!isset($multiple))
      @if(!isset($noOption))
        <option value="">{{ __('SILA PILIH / TAIP DISINI') }}</option>
      @endif
    @endif
  
      {{ $option ?? null }}
      
    </select>
    @error($attributes->wire('model')->value()) 
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  