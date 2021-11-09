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
        $isSuccess =  $this->authUser->following($this->user) ? $this->authUser->unfollow($this->user) : $this->authUser->follow($this->user);
        if ($isSuccess)
        {
            $this->emit('followUpdated');
        }
    }

    public function checkFollow()
    {
        return $this->authUser->following($this->user);
    }

    public function render()
    {
        return view('livewire.follow-button', ['isFollowing' => $this->checkFollow()]);
    }
}
