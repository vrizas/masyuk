<?php

namespace App\Http\Livewire;

use Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NotificationIndicator extends Component
{
    public $count;
    public $authUser;
    public $auth_user_id;

    protected $listeners;

    public function getListeners()
    {
        return ["echo:ResepLiked.{$this->auth_user_id},ResepLiked" => 'notifyResepLiked'];
    }

    public function mount($authUser)
    {
        $this->count = $this->count = auth()->user()->unreadNotifications->groupBy('id')->count();
        $this->authUser = $authUser;
        $this->auth_user_id = $authUser->id;
    }

    public function notifyResepLiked()
    {
        $this->count = auth()->user()->unreadNotifications->groupBy('id')->count();
    }

    public function render()
    {
        return view('livewire.notification-indicator');
    }
}
