<x-assets.swal />
<x-assets.date-time-year-picker />
<x-assets.select2 />
<x-swal.delete />

<div>
    <x-content title="{{ __('Perkhidmatan') }}">
        <x-slot name="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Laman Utama') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Perkhidmatan') }}</li>
        </x-slot>

        <x-forms.alert />
        <x-card title="{{ __('Senarai Perkhidmatan') }}" collapseButton>
            <x-slot name="body">
                @if (auth()->user()->user_type == "Tukang Bersih")
                    <a class="btn btn btn-primary float-right" href="#" data-toggle="modal" data-target="#modal-tambah-perkhidmatan"><i class="fas fa-plus fa-sm"></i>{{ __(' Baru') }}</a>
                @endif
                <x-datatables.main searchProp="search" :data="$perkhidmatans" perPageProp="perPage" createButton="false">
                    <x-slot name="head">
                        <x-datatables.head-index width="5%"/>
                        <x-datatables.head title="{{ __('Perkhidmatan') }}" width="" align="center" />
                        <x-datatables.head title="{{ __('Penerangan') }}" width="" align="center"/>
                        <x-datatables.head title="{{ __('Lokasi') }}" width="" align="center"/>
                        <x-datatables.head title="{{ __('Status') }}" width="" align="center"/>
                        <x-datatables.head-action width="20%" />
                    </x-slot>
                    <x-slot name="body">
                        @forelse ($perkhidmatans as $key=>$perkhidmatan)
                        <tr>
                            <td style="text-align: center">{{ $key + 1 }}</td>
                            <td style="text-align: center">{{ $perkhidmatan->tajuk }}</td>
                            <td style="text-align: center">{{ $perkhidmatan->penerangan }}</td>
                            <td style="text-align: center">{{ $perkhidmatan->lokasi }}</12 d>
                            <td style="text-align: center">{{ isset($perkhidmatan->tempahan->status) && $perkhidmatan->tempahan->id_pelanggan == auth()->user()->id ? $perkhidmatan->tempahan->status : $perkhidmatan->status }}</td>
                            <x-datatables.body-action>
                                @if ($perkhidmatan->status == "Telah Di Tempah")

                                @elseif ($perkhidmatan->status == "Belum Di Tempah")
                                    @if (auth()->user()->user_type == "Pelanggan")
                                        <a class="btn btn-xs btn-default" wire:click="$emit('buatTempahan', {{ $perkhidmatan->id }})" href="#" data-toggle="modal" data-target="#modal-buat-tempahan"><i class="fas fa-plus fa-sm"></i>{{ __(' Tempah') }}</a>

                                    @elseif (auth()->user()->user_type == "Tukang Bersih")
                                        <a class="btn btn-xs btn-default" wire:click="$emit('kemaskiniPerkhidmatan', {{ $perkhidmatan->id }})" href="#" data-toggle="modal" data-target="#modal-kemaskini-perkhidmatan"><i class="fas fa-edit fa-sm"></i>{{ __(' Kemaskini') }}</a>
                                        <a class="btn btn-xs btn-danger" wire:click="$emit('triggerDelete', '{{ $perkhidmatan->id }}', '{{ $perkhidmatan->tajuk }}')"><i class="fas fa-trash"></i> {{ __(' Padam') }}</a>
                                    @endif

                                @endif

                                @if (isset($perkhidmatan->tempahan->status) && $perkhidmatan->tempahan->status == "Menunggu Persetujuan Tukang Bersih")
                                    <a class="btn btn-xs btn-default" wire:click="$emit('persetujuan', {{ $perkhidmatan->id }})" href="#" data-toggle="modal" data-target="#modal-persetujuan"><i class="fas fa-plus fa-sm"></i>{{ __(' Pengesahan') }}</a>

                                @elseif (isset($perkhidmatan->tempahan->status) && $perkhidmatan->tempahan->status == "Tempahan Di Tolak")

                                @elseif (isset($perkhidmatan->tempahan->status) && $perkhidmatan->tempahan->status == "Tempahan Di Terima")

                                @endif
                            </x-datatables.body-action>
                        </tr>
                        @empty
                        <tr>
                            <x-datatables.empty totalColumn=6/>
                            {{-- TIADA REKOD --}}
                        </tr>
                        @endforelse
                    </x-slot>
                </x-datatables.main>
            </x-slot>
        </x-card>
        <x-modal id="modal-tambah-perkhidmatan" title="{{ __('Tambah Perkhidmatan') }}" size="xl" icon="fas fa-hand-sparkles" >
            <x-slot name="body">
                <livewire:perkhidmatan.tambah />
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-modal>
        <x-modal id="modal-buat-tempahan" title="{{ __('Tempahan Perkhidmatan') }}" size="xl" icon="fas fa-hand-sparkles" >
            <x-slot name="body">
                <livewire:perkhidmatan.tempah />
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-modal>
        <x-modal id="modal-kemaskini-perkhidmatan" title="{{ __('Kemaskini Perkhidmatan') }}" size="xl" icon="fas fa-hand-sparkles" >
            <x-slot name="body">
                <livewire:perkhidmatan.kemaskini />
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-modal>
        <x-modal id="modal-persetujuan" title="{{ __('Persetujuan Perkhidmatan') }}" size="xl" icon="fas fa-hand-sparkles" >
            <x-slot name="body">
                <livewire:perkhidmatan.persetujuan />
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

        Livewire.on('closeModalTempah', () => {
            $('#modal-buat-tempahan').modal('hide');
        })
    </script>
@endpush
