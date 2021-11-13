<?php

namespace App\Http\Livewire;

use App\Models\Resep;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $desktop;
    public $keyword = "";

    public function render()
    {
        $results = [];
        if(strlen($this->keyword > 2)) {
            $results = Resep::where('title', 'like', '%' . $this->keyword . '%')->take(5)->get();
            return view('livewire.search-dropdown', ['results' => $results]);
            $this->keyword = "";
        }
        return view('livewire.search-dropdown', ['results' => $results]);
    }

    public function redirectToSearch()
    {
        redirect('/search?keyword='. $this->keyword);
    }
}
