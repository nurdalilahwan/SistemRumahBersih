<?php

namespace App\Http\Livewire\Perkhidmatan;

use App\Models\Tempahan;
use App\Models\Perkhidmatan;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Persetujuan extends Component
{
    public $perkhidmatan;

    protected $listeners = [
        'persetujuan',
        'tolakTempahan',
        'terimaTempahan'
    ];

    public function persetujuan($idPerkhidmatan)
    {
        $this->perkhidmatan = Perkhidmatan::find($idPerkhidmatan);
    }

    public function tolakTempahan($idTempahan)
    {
        try {
            DB::beginTransaction();

            $tempahan = Tempahan::find($idTempahan);
            Perkhidmatan::find($tempahan->id_perkhidmatan)->update(['status'=>"Belum Di Tempah"]);
            $tempahan->update(['id_perkhidmatan'=>null,'status'=>"Tempahan Di Tolak"]);

            DB::commit();

            $this->emit('triggerSwalSuccess', 'Tempahan Di Tolak');
            $this->emit('closeModal');

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            $this->reportError($th->getMessage());
        }

    }
    public function terimaTempahan($idTempahan)
    {
        Tempahan::find($idTempahan)->update(['status'=>"Tempahan Di Terima"]);

        $this->emit('triggerSwalSuccess', 'Tempahan Di Terima');
        $this->emit('closeModal');

    }

    // public function render()
    // {
    //     return view('livewire.perkhidmatan.persetujuan');
    // }
}
