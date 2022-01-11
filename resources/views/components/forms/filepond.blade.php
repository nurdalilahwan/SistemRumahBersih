<div
    wire:ignore
    x-data
	x-init="() => {
        const post = FilePond.create($refs.input);
        post.setOptions({
			allowMultiple: {{ $attributes->has('multiple') ? 'true' : 'false' }},
            server: {
                process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.upload('{{ $attributes->whereStartsWith('wire:model')->first() }}', file, load, error, progress)
                },
				revert: (filename, load) => {
                    @this.removeUpload('{{ $attributes->whereStartsWith('wire:model')->first() }}', filename, load)
                },
            },
			credits: {{ 'false' }},
        });
    }"
>
    <input type="file" x-ref="input" />
</div>
<div>
    @error($attributes->wire('model')->value()) 
		<span class="text-danger">{{ $message }}</span> 
	@enderror
</div>