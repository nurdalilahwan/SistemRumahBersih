<?php

namespace App\Http\Livewire\Perkhidmatan;

use App\Models\Lokasi;
use App\Models\Perkhidmatan;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $perPage = '10';
    public $sortBy = '';
    public $sortDirection = 'asc';
    public $paparanPerkhidmatan;

    public function render()
    {
        if(auth()->user()->user_type == "Tukang Bersih")
        {
            $perkhidmatans = Perkhidmatan::where('id_tukang_bersih', auth()->user()->id)->get();
            return view('livewire.perkhidmatan.index', compact('perkhidmatans'));
        }
        elseif(auth()->user()->user_type == "Pelanggan")
        {
            $perkhidmatans = Perkhidmatan::all();
            return view('livewire.perkhidmatan.index', compact('perkhidmatans'));
        }
    }
}
