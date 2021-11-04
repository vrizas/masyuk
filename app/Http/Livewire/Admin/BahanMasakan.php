<?php

namespace App\Http\Livewire\Admin;

use App\Models\Bahan;
use Livewire\Component;

class BahanMasakan extends Component
{
    public function render()
    {
        $bahans = Bahan::all();
        return view('livewire.admin.bahan-masakan', ['bahans' => $bahans]);
    }
}
