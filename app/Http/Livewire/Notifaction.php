<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notifaction extends Component
{
    public $showNewOrderNotification = false;

    protected $listeners = ['echo:my-channel,ResepLiked' => 'notifyResepLiked'];

    public function notifyResepLiked()
    {
        $this->showNewOrderNotification = true;
    }

    public function render()
    {
        return view('livewire.notifaction');
    }
}
