<form id="form-tambah"  wire:submit.prevent="tambah">
    <x-card title="Maklumat Perkhidmatan" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
        <x-slot name="body">
            <div class="row">
                <div class="col-12">
                    <x-forms.text wire:model="tambahPerkhidmatan.tajuk" label="Tajuk" required />
                    <x-forms.text wire:model="tambahPerkhidmatan.penerangan" label="Penerangan" required />
                    <x-forms.text wire:model="tambahPerkhidmatan.ketersediaan_lokasi" label="Ketersediaan Lokasi" required />
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >Tutup</button>
            <button id="tambah-button" type="submit" class="btn btn-primary" form="form-tambah">Tambah</button>
        </x-slot>
    </x-card>
</form>
<x-loading-indicator wire:target="tambah"/>
