<form>
<x-card title="Maklumat Tempahan" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
    <x-slot name="body">
        <div class="row">
            <div class="col-12">
                <x-forms.text value="{{ isset($this->perkhidmatan) ? $this->perkhidmatan['tajuk'] : '' }}" label="Tajuk" readonly />
                <x-forms.text value="{{ isset($this->perkhidmatan) ? $this->perkhidmatan['penerangan'] : '' }}" label="Penerangan" readonly />
                <x-forms.text value="{{ isset($this->perkhidmatan) ? $this->perkhidmatan['ketersediaan_lokasi'] : '' }}" label="Ketersediaan Lokasi" readonly />
            </div>
        </div>
    </x-slot>
</x-card>
<x-card title="Maklumat Pelanggan" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
    <x-slot name="body">
        <div class="row">
            <div class="col-4">
                <x-forms.text value="{{ isset($this->perkhidmatan->tempahan) ? $this->perkhidmatan->tempahan->pelanggan->nama_penuh : '' }}" label="{{ __('Nama') }}" readonly/>
            </div>
            <div class="col-6">
                <x-forms.text value="{{ isset($this->perkhidmatan->tempahan) ? $this->perkhidmatan->tempahan->pelanggan->alamat : '' }}" label="{{ __('Alamat') }}" readonly/>
            </div>
            <div class="col-2">
                <x-forms.text value="{{ isset($this->perkhidmatan->tempahan) ? $this->perkhidmatan->tempahan->tarikh : '' }}" label="{{ __('Tarikh') }}" readonly/>
            </div>
        </div>
    </x-slot>
    <x-slot name="footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" >Tutup</button>
        @if (isset($this->perkhidmatan->tempahan))
            <a class="btn btn btn-warning" wire:click="$emit('tolakTempahan',  {{ $this->perkhidmatan->tempahan->id }})" href="#">{{ __('Tolak') }}</a>
            <a class="btn btn btn-success" wire:click="$emit('terimaTempahan',  {{ $this->perkhidmatan->tempahan->id }})" href="#">{{ __('Terima') }}</a>
        @endif
    </x-slot>
</x-card>
</form>

<x-loading-indicator wire:target="tempah"/>
