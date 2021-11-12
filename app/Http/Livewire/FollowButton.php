<?php

namespace App\Http\Livewire;

use App\Events\MemberFollowed;
use App\Models\User;
use App\Notifications\MemberFollowedNotification;
use Auth;
use Livewire\Component;

class FollowButton extends Component
{
    public $user;
    public $authUser;

    public function toggleFollow()
    {
        $isSuccess =  $this->authUser->following($this->user) ? $this->authUser->unfollow($this->user) : $this->authUser->follow($this->user);
        if ($isSuccess) {
            $this->emit('followUpdated');
            $this->user->notify(new MemberFollowedNotification($this->user, $this->user->username . ' mulai mengikuti anda.'));
            event(new MemberFollowed($this->user));
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
