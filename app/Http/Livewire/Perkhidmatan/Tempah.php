<?php

namespace App\Http\Livewire\Perkhidmatan;

use App\Models\Perkhidmatan;
use App\Models\Tempahan;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Tempah extends Component
{
    public $paparanPerkhidmatan;
    public $tempahPerkhidmatan;

    protected $listeners = [
        'buatTempahan'
    ];

    public function buatTempahan($idPerkhidmatan)
    {
        $this->paparanPerkhidmatan = Perkhidmatan::find($idPerkhidmatan);
    }

    public function tempah()
    {
        $this->validate(
            [
                'tempahPerkhidmatan.tarikh' => ['required'],
            ],
            [],
            [
                'tempahPerkhidmatan.tarikh' => 'Tarikh Tempah Perkhidmatan',
            ]
        );

        try {
            DB::beginTransaction();

            $this->tempahPerkhidmatan['id_pelanggan'] = auth()->user()->id;
            $this->tempahPerkhidmatan['id_perkhidmatan'] = $this->paparanPerkhidmatan->id;
            $this->tempahPerkhidmatan['status'] = "Menunggu Persetujuan Tukang Bersih";
            $tempahan = Tempahan::create($this->tempahPerkhidmatan);

            $this->paparanPerkhidmatan->update(['status'=>"Telah Di Tempah"]);

            $this->emit('triggerSwalSuccess', 'Perkhidmatan Berjaya Di Tempah');
            $this->emit('closeModalTempah');

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            $this->reportError($th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.perkhidmatan.tempah');
    }
}
