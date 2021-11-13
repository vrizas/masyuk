<?php

namespace App\Http\Livewire;

use App\Models\Bahan;
use Livewire\Component;

class FilterBahan extends Component
{
    public $keyword;
    public $selectedBahan;

    public function mount()
    {
        $this->selectedBahan = [];
    }

    public function addItem(Bahan $bahan)
    {
        if($bahan)
        {
            array_push($this->selectedBahan, $bahan);
            $this->keyword = "";
        }
    }

    public function deleteItem($index)
    {
        unset($this->selectedBahan[$index]);
        $this->selectedBahan = array_values($this->selectedBahan );
    }

    public function render()
    {
        $bahans = [];
        if(strlen($this->keyword) > 2) {
            $bahans = Bahan::where('nama', 'like', '%' . $this->keyword . '%')->get();
            return view('livewire.filter-bahan', ['bahans' => $bahans]);
            $this->keyword = "";
        }
        return view('livewire.filter-bahan', ['bahans' => $bahans]);
    }
}
