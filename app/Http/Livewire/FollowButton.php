<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FollowButton extends Component
{
    public $user;
    public $authUser;

    public function toggleFollow()
    {
        // dd($this->user);
        return $this->authUser->following($this->user) ? $this->authUser->unfollow($this->user) : $this->authUser->follow($this->user);
    }

    public function render()
    {
        return view('livewire.follow-button');
    }
}
