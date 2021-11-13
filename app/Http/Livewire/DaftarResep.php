<?php

namespace App\Http\Livewire;

use App\Models\Resep;
use Livewire\Component;

class DaftarResep extends Component
{
    public $reseps;

    public function render()
    {
        $this->reseps = Resep::all();
        return view('livewire.daftar-resep');
    }
}
