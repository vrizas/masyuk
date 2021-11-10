<?php

namespace App\Http\Livewire;

use App\Models\Like;
use Livewire\Component;

class LikeButton extends Component
{
    public $resep;
    public $authUser;

    public function toggleLike()
    {
        $isLiked = Like::where('user_id', $this->authUser->id)->where('resep_id', $this->resep->id)->first();
        if ($isLiked == null) {
            Like::create([
                'user_id' => $this->authUser->id,
                'resep_id' => $this->resep->id,
            ]);
        } else {
            $isLiked->delete();
        }
    }
    public function render()
    {
        $likeStatus = Like::where('user_id', $this->authUser->id)->where('resep_id', $this->resep->id)->exists();
        $count = count(Like::where('user_id', $this->authUser->id)->where('resep_id', $this->resep->id)->get());
        return view('livewire.like-button', ['likeStatus' => $likeStatus, 'count' => $count]);
    }
}
