<x-assets.swal />

<div>
    <x-content title="{{ __('Perkhidmatan') }}">
        <x-slot name="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Laman Utama') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Perkhidmatan') }}</li>
        </x-slot>

        <x-forms.alert />
        <x-card title="{{ __('Senarai Perkhidmatan') }}" collapseButton>
            <x-slot name="body">
                <a class="btn btn btn-primary float-right" href="#" data-toggle="modal" data-target="#modal-tambah-perkhidmatan"><i class="fas fa-plus fa-sm"></i>{{ __(' Baru') }}</a>
                <x-datatables.main searchProp="search" :data="$perkhidmatans" perPageProp="perPage" createButton="false">
                    <x-slot name="head">
                        <x-datatables.head-index width="5%"/>
                        <x-datatables.head title="{{ __('Perkhidmatan') }}" width="" align="center" />
                        <x-datatables.head title="{{ __('Ketersediaan Lokasi ') }}" width="" align="center"/>
                        <x-datatables.head-action width="20%" />
                    </x-slot>
                    <x-slot name="body">
                        @forelse ($perkhidmatans as $key=>$perkhidmatan)
                        <tr>
                            <td style="text-align: center">{{ ++$key }}</td>
                            <td style="text-align: center">{{ $perkhidmatan->tajuk }}</td>
                            <td style="text-align: center">{{ $perkhidmatan->ketersediaan_lokasi }}</td>
                            <x-datatables.body-action>
                                <a class="btn btn-xs btn-default" href="#" @click="mode = 'kemaskiniPt'" wire:click="$emit('kemaskiniPemohonPt')"><i class="fas fa-history"></i> {{ __('Kemaskini') }}</a>
                            </x-datatables.body-action>
                        </tr>
                        @empty
                        <tr>
                            <x-datatables.empty totalColumn=4/>
                        </tr>
                        @endforelse
                    </x-slot>
                </x-datatables.main>
            </x-slot>
        </x-card>
        <x-modal id="modal-tambah-perkhidmatan" title="{{ __('Tambah Perkhidmatan') }}"  size="xl" icon="fas fa-hand-sparklesgi" >
            <x-slot name="body">
                <livewire:perkhidmatan.tambah />
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-modal>
    </x-content>
</div>

@push('js')
    <script>
        Livewire.on('closeModal', () => {
            $('#modal-tambah-perkhidmatan').modal('hide');
        })
    </script>
@endpush
