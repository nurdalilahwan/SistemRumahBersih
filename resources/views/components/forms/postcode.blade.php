@props([
  'id'=>null,
  'placeholder'=>null,
  'label'=>null,
  'required'=>null,
  'data'=>collect(),
  'selectedMethod' => null,
])

<div class="form-group" x-data="{ postcode_is_open: false }">
  @isset($label)
    <label class="control-label">{{ $label }}</label>@if(isset($required))<span style="color: red">*</span>@endif
  @endisset
  <input 
    @click="postcode_is_open = true" 
    @isset($id)id="{{ $id }}"@endisset 
    type="text" 
    class="form-control @error($attributes->wire('model')->value()) is-invalid @enderror {{ $attributes->get('class') }}" 
    placeholder="{{ $placeholder }}" 
    wire:model.debounce.500ms="{{ $attributes->wire('model')->value() }}" 
    {{ $attributes}}
    >
  <div x-show="postcode_is_open" @click.away="postcode_is_open = false" style="position:absolute; z-index:100">
    @if(strlen($attributes->wire('model')->value())>2)
    @if(count($data)>0)
    <div class="list-group">
        @foreach($data as $item)
        <a @click="postcode_is_open = false" wire:click="{{ $selectedMethod }}({{ $item }})" class="list-group-item list-group-item-action list-group-item-primary">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $item->poskod }}</h5>
            </div>
            <p class="mb-1">{{ $item->bandar->nama }}</p>
            <small>{{ $item->bandar->negeri->nama }}</small>
        </a>
        @endforeach
    </div>
    @else
        <a class="list-group-item list-group-item-danger">No Records Found.</a>
    @endif
    @endif
  </div>
  @error($attributes->wire('model')->value()) 
    <span class="help-block text-danger">{{ $message }}</span> 
  @enderror 
</div>