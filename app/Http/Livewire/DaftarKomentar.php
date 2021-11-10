<?php

namespace App\Http\Livewire;

use App\Models\Komentar;
use Auth;
use Livewire\Component;

class DaftarKomentar extends Component
{
    public $resep_id;
    public $inputKomentar;

    public function render()
    {
        $komentars = Komentar::where('resep_id', $this->resep_id)->get();
        return view('livewire.daftar-komentar', ['komentars' => $komentars]);
    }

    public function createKomentar()
    {
        $this->validate([
            'inputKomentar' => 'required|max:300'
        ]);

        Komentar::create([
            'text' => $this->inputKomentar,
            'user_id' => Auth::id(),
            'resep_id' => $this->resep_id,
        ]);

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->inputKomentar = '';
    }
}
