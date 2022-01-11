<div>
    <x-content title="Pendaftaran">

        <x-forms.alert-validation />

        <x-card title="Daftar Akaun Tukang Bersih" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
            <x-slot name="body">
                <form id="register-form"  wire:submit.prevent="register">

                    <div class="row">
                        <div class="col-6">
                            <x-forms.text wire:model="daftarTukangBersih.nama_penuh" label="Nama Penuh" required />
                            <x-forms.text wire:model="daftarTukangBersih.email" label="Email"  required />
                            <x-forms.text wire:model="daftarTukangBersih.name" label="Nama Pengguna" required />
                        </div>
                        <div class="col-6">
                            <x-forms.text wire:model="daftarTukangBersih.no_pengenalan" label="No. Kad Pengenalan" required />
                            <x-forms.text wire:model="daftarTukangBersih.no_telefon" label="No Telefon Bimbit" required/>
                            <x-forms.text wire:model="daftarTukangBersih.password" label="Kata Laluan" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-forms.text wire:model="daftarTukangBersih.alamat" label="Alamat" required />
                        </div>
                    </div>

                    {{-- <x-card title="Alamat Tetap" collapseButton>
                        <x-slot name="body">
                            <div class="row">
                                <div class="col-md-6">
                                    <x-forms.text label="Alamat 1" wire:model="daftarTukangBersih.alamat_tetap1" />
                                    <x-forms.text label="Alamat 2" wire:model="daftarTukangBersih.alamat_tetap2" />
                                    <x-forms.text label="Alamat 3" wire:model="daftarTukangBersih.alamat_tetap3" />
                                </div>
                                <div class="col-md-6">
                                    <x-forms.text label="Poskod" wire:model="daftarTukangBersih.poskod" />
                                    <x-forms.text wire:model="postcode.bandar.nama" label="Bandar" readonly required />
                                    <x-forms.text wire:model="postcode.bandar.negeri.nama" label="Negeri" readonly required />
                                </div>
                            </div>
                        </x-slot>
                    </x-card> --}}

                </form>
            </x-slot>
            <x-slot name="footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                <button id="form_hantar" type="submit" class="btn btn-primary" form="register-form">Daftar</button>
            </x-slot>
        </x-card>
    </x-content>
    <div wire:loading.delay wire:target="register">
        <div class="loading">
            <div class="la-pacman la-3x">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
    </script>
@endpush
