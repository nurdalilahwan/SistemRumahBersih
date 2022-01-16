<form id="form-tempah"  wire:submit.prevent="tempah">
    <x-card title="Maklumat Tempahan" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
        <x-slot name="body">
            <div class="row">
                <div class="col-12">
                    <x-forms.text value="{{ isset($this->paparanPerkhidmatan) ? $this->paparanPerkhidmatan['tajuk'] : '' }}" label="Tajuk" readonly />
                    <x-forms.text value="{{ isset($this->paparanPerkhidmatan) ? $this->paparanPerkhidmatan['penerangan'] : '' }}" label="Penerangan" readonly />
                    <x-forms.text value="{{ isset($this->paparanPerkhidmatan) ? $this->paparanPerkhidmatan['ketersediaan_lokasi'] : '' }}" label="Ketersediaan Lokasi" readonly />
                </div>
            </div>
        </x-slot>
    </x-card>
    <x-card title="Maklumat Tempahan" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
        <x-slot name="body">
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-6">
                    <x-forms.date wire:model.defer="tempahPerkhidmatan.tarikh" label="{{ __('Tarikh Perkhidmatan') }}" required/>
                </div>
                <div class="col-3">
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >Tutup</button>
            <button id="tambah-button" type="submit" class="btn btn-primary" form="form-tempah">Tempah</button>
        </x-slot>
    </x-card>
</form>
<x-loading-indicator wire:target="tempah"/>
