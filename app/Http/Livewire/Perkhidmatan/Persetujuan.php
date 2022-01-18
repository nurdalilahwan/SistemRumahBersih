<?php

namespace App\Http\Livewire\Perkhidmatan;

use App\Models\Tempahan;
use App\Models\Perkhidmatan;
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
        $tempahan = Tempahan::find($idTempahan)->update(['status'=>"Tempahan Di Tolak"]);
        $tempahan->perkhidmatan->update(['status'=>"Belum Di Tempah"]);


        $this->emit('triggerSwalSuccess', 'Tempahan Di Tolak');
        $this->emit('closeModal');

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
