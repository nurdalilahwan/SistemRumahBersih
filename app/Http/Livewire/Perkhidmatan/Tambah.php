<?php

namespace App\Http\Livewire\Perkhidmatan;

use App\Models\Perkhidmatan;
use App\Models\Lokasi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
class Tambah extends Component
{
    public $tambahPerkhidmatan;
    public $senaraiLokasi;

    public function render()
    {
        $this->senaraiLokasi = Lokasi::all();
        return view('livewire.perkhidmatan.tambah');
    }

    public function tambah()
    {
        $this->validate(
            [
                'tambahPerkhidmatan.tajuk' => ['required'],
                'tambahPerkhidmatan.penerangan' => ['required'],
                'tambahPerkhidmatan.ketersediaan_lokasi' => ['required'],
            ],
            [],
            [
                'tambahPerkhidmatan.tajuk' => 'Tajuk',
                'tambahPerkhidmatan.penerangan' => 'Penerangan',
                'tambahPerkhidmatan.ketersediaan_lokasi' => 'Ketersediaan Lokasi',
            ]
        );

        try {
            DB::beginTransaction();

            $this->tambahPerkhidmatan['id_tukang_bersih'] = auth()->user()->id;
            $this->tambahPerkhidmatan['status'] = "Belum Di Tempah";
            $perkhidmatan = Perkhidmatan::create($this->tambahPerkhidmatan);

            $this->emit('triggerSwalSuccess', 'Perkhidmatan Berjaya Di Tambah');
            $this->emit('closeModal');

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            $this->reportError($th->getMessage());
        }
    }

}
