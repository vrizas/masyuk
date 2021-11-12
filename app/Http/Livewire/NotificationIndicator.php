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
    public $unreadNotifications;

    protected $listeners;

    public function getListeners()
    {
        return [
            "echo:ResepLiked.{$this->auth_user_id},ResepLiked" => 'refreshNotification',
            "echo:ResepCommented.{$this->auth_user_id},ResepCommented" => 'refreshNotification',
            'markedAsRead' => 'refreshNotification'
        ];
    }

    public function markAsRead()
    {
        if($this->authUser->unreadNotifications){
            $this->authUser->unreadNotifications->markAsRead();
        }
        $this->emitSelf('markedAsRead');
    }

    public function mount($authUser)
    {
        $this->count = $authUser->unreadNotifications->where('notifiable_id', $authUser->id)->count();
        $this->authUser = $authUser;
        $this->auth_user_id = $authUser->id;
        $this->unreadNotifications = $authUser->unreadNotifications;
    }

    public function refreshNotification()
    {
        $this->count = $this->authUser->unreadNotifications->where('notifiable_id', $this->authUser->id)->count();
        $this->unreadNotifications = $this->authUser->unreadNotifications;
    }

    public function render()
    {
        return view('livewire.notification-indicator');
    }
}
