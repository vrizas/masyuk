<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationIndicator extends Component
{
    public $count;

    protected $listeners = ['echo:my-channel,ResepLiked' => 'notifyResepLiked'];

    public function mount()
    {
        $this->count = 0;
    }

    public function notifyResepLiked()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.notification-indicator');
    }
}
