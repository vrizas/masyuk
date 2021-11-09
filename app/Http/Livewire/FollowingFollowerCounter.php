<?php

namespace App\Http\Livewire;

use App\Models\User;
use DB;
use Livewire\Component;

class FollowingFollowerCounter extends Component
{
    public $user;
    public $followings;
    public $followers;

    protected $listeners = ['followUpdated' => 'mount'];

    public function mount()
    {
        $this->followings = count($this->user->follows);
        $this->followers =  count(DB::select('select * from follows where following_user_id = ?', [$this->user->id]));
    }

    public function render()
    {
        return view('livewire.following-follower-counter');
    }
}
