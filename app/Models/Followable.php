<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

trait Followable
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function following(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    // public function toggleFollow(User $user)
    // {

    //     return $this->following($user) ? $this->unfollow($user) : $this->follow($user);
        
    // }
}
