<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileTab extends Component
{
    public $user;

    public $selectedIndex;

    protected $listeners = [
        'resepSelected' => 'changeTabToResep',
        'bookmarkSelected' => 'changeTabToBookmark'
    ];

    public function changeTabToResep()
    {
        $this->selectedIndex = 0;
    }

    public function changeTabToBookmark()
    {
        $this->selectedIndex = 1;
    }

    public function mount() {
        $this->selectedIndex = 1;
    }

    public function render()
    {
        return view('livewire.profile-tab');
    }
}
