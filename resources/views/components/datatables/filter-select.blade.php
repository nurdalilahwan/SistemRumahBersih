<th >
    <div wire:ignore>
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

            wire:model.debounce.300ms="{{ $attributes->wire('model')->value() }}"

        style="width: 100%;"
        >
        @if(!isset($multiple))
        @if(!isset($noOption))
            <option value="">ALL</option>
        @endif
        @endif
    
        {{ $option ?? null }}
        
        </select>
    </div>
</th>