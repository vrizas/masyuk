<?php

namespace App\Http\Livewire;

use App\Models\Bookmark;
use Livewire\Component;

class BookmarkButton extends Component
{
    public $resep;
    public $authUser;
    public $isBookmarked;

    public function toggleBookmark()
    {
        $bookmark = Bookmark::where('user_id', $this->authUser->id)->where('resep_id', $this->resep->id)->first();
        if ($bookmark == null) {
            Bookmark::create([
                'user_id' => $this->authUser->id,
                'resep_id' => $this->resep->id,
            ]);
            $this->isBookmarked = true;
        } else {
            $bookmark->delete();
            $this->isBookmarked = false;
        }
    }

    public function render()
    {
        return view('livewire.bookmark-button');
    }
}
