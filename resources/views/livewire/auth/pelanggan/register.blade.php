<div>
    <x-content title="">

        <x-forms.alert-validation />
                <form id="register-form"  wire:submit.prevent="register">

                    <x-card title="Maklumat Pendaftaran" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
                        <x-slot name="body">
                                <div class="row">
                                    <div class="col-6">
                                        <x-forms.text wire:model="daftarPelanggan.nama_penuh" label="Nama Penuh" required />
                                        <x-forms.text wire:model="daftarPelanggan.email" label="Email"  required />
                                    </div>
                                    <div class="col-6">
                                        <x-forms.text wire:model="daftarPelanggan.no_pengenalan" label="No. Kad Pengenalan" required />
                                        <x-forms.text wire:model="daftarPelanggan.no_telefon" label="No Telefon Bimbit" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <x-forms.text wire:model="daftarPelanggan.alamat" label="Alamat" required />
                                    </div>
                                </div>
                        </x-slot>
                    </x-card>
                    <x-card title="Maklumat Akaun" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
                        <x-slot name="body">
                            <div class="row">
                                <div class="col-3">
                                </div>
                                <div class="col-6">
                                    <x-forms.text wire:model="daftarPelanggan.name" label="Nama Pengguna" required />
                                    <x-forms.text wire:model="daftarPelanggan.password" label="Kata Laluan" required />
                                </div>
                                <div class="col-3">
                                </div>
                            </div>
                        </x-slot>
                        <x-slot name="footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" >Tutup</button>
                            <button id="form_hantar" type="submit" class="btn btn-primary" form="register-form">Daftar</button>
                        </x-slot>
                    </x-card>
                </form>
           

    </x-content>
    <x-loading-indicator wire:target="store"/>
</div>
@push('js')
    <script>
    </script>
@endpush
