<form id="form-kemaskini-perkhidmatan"  wire:submit.prevent="update">
    <x-card title="Maklumat Tempahan" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
        <x-slot name="body">
            <div class="row">
                <div class="col-12">
                    <x-forms.text wire.model="kemaskiniPerkhidmatan.tajuk" label="Tajuk" required />
                    <x-forms.text wire.model="kemaskiniPerkhidmatan.penerangan" label="Penerangan" required />
                    <x-forms.text wire.model="kemaskiniPerkhidmatan.ketersediaan_lokasi" label="Ketersediaan Lokasi" required />
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
