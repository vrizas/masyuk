<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FollowButton extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function toggleFollow(User $otherUser)
    {
        return $this->user->following($otherUser) ? $this->user->unfollow($otherUser) : $this->user->follow($otherUser);
    }

    public function render()
    {
        return view('livewire.follow-button');
    }
}
