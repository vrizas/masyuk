<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileTabButton extends Component
{
    public $selectedIndex;

    public function render()
    {
        if($this->selectedIndex == 0 ) {
            $this->emitTo('post-tab', 'resepSelected');
        } else {
            $this->emitTo('post-tab', 'bookmarkSelected');
        }
        return view('livewire.profile-tab-button');
    }
}
