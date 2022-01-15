<?php

namespace App\Http\Livewire\Perkhidmatan;

use App\Models\Perkhidmatan;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $perPage = '10';
    public $sortBy = '';
    public $sortDirection = 'asc';


    public function render()
    {
        $perkhidmatans = Perkhidmatan::where('id_tukang_bersih', auth()->user()->id)->get();
        return view('livewire.perkhidmatan.index', compact('perkhidmatans'));
    }
}
