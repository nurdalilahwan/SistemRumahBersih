<?php

namespace App\Http\Livewire\Perkhidmatan;

use App\Models\Perkhidmatan;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Kemaskini extends Component
{
    public $kemaskiniPerkhidmatan;

    protected $listeners = [
        'kemaskiniPerkhidmatan'
    ];

    public function render()
    {
        return view('livewire.perkhidmatan.kemaskini');
    }

    public function kemaskiniPerkhidmatan($idPerkhidmatan)
    {
        $this->kemaskiniPerkhidmatan = Perkhidmatan::find($idPerkhidmatan);
    }

    public function update()
    {
        $this->validate(
            [
                'kemaskiniPerkhidmatan.tajuk' => ['required'],
                'kemaskiniPerkhidmatan.penerangan' => ['required'],
                'kemaskiniPerkhidmatan.ketersediaan_lokasi' => ['required'],
            ],
            [],
            [
                'kemaskiniPerkhidmatan.tajuk' => 'Tajuk',
                'kemaskiniPerkhidmatan.penerangan' => 'Penerangan',
                'kemaskiniPerkhidmatan.ketersediaan_lokasi' => 'Ketersediaan Lokasi',
            ]
        );

        try {
            DB::beginTransaction();

            $this->kemaskiniPerkhidmatan['id_tukang_bersih'] = auth()->user()->id;
            $this->kemaskiniPerkhidmatan['status'] = "Belum Di Tempah";
            $idPerkhidmatan = $this->kemaskiniPerkhidmatan->id;
            // dd($this->kemaskiniPerkhidmatan->toArray());
            Perkhidmatan::find($idPerkhidmatan)->update($this->kemaskiniPerkhidmatan->toArray());

            $this->emit('triggerSwalSuccess', 'Perkhidmatan Berjaya Di Kemaskini');
            $this->emit('closeModal');

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            $this->reportError($th->getMessage());
        }
    }


}
