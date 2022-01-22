<form id="form-kemaskini-perkhidmatan"  wire:submit.prevent="update">
    <x-card title="Kemaskini Maklumat Perkhidmatan" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
        <x-slot name="body">
            <div class="row">
                <div class="col-12">
                    <x-forms.text wire:model="kemaskiniPerkhidmatan.tajuk" placeholder="{{ isset($this->perkhidmatan) ? $this->perkhidmatan['tajuk'] : '' }}" label="Tajuk" />
                    <x-forms.text wire:model="kemaskiniPerkhidmatan.penerangan" placeholder="{{ isset($this->perkhidmatan) ? $this->perkhidmatan['penerangan'] : '' }}" label="Penerangan" />
                    <x-forms.text wire:model="kemaskiniPerkhidmatan.ketersediaan_lokasi" placeholder="{{ isset($this->perkhidmatan) ? $this->perkhidmatan['ketersediaan_lokasi'] : '' }}" label="Ketersediaan Lokasi" />
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >Batal</button>
            <button id="tambah-button" type="submit" class="btn btn-primary" form="form-kemaskini-perkhidmatan">Kemaskini</button>
        </x-slot>
    </x-card>
</form>
<x-loading-indicator wire:target="update"/>
