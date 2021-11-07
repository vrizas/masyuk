<?php

namespace App\Http\Livewire;

use App\Models\Resep;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $keyword = "";

    public function render()
    {
        $results = [];
        if(!empty($this->keyword)) {
            $results = Resep::where('title', 'like', '%' . $this->keyword . '%')->take(5)->get();
            return view('livewire.search-dropdown', ['results' => $results]);
        }
        return view('livewire.search-dropdown', ['results' => $results]);
    }
}
