<?php

namespace App\Http\Livewire;

use App\Models\Bookmark;
use Auth;
use Livewire\Component;

class BookmarkButton extends Component
{
    public $resep;
    public $authUser;

    public function toggleBookmark()
    {
        $bookmark = Bookmark::where('user_id', $this->authUser->id)->where('resep_id', $this->resep->id)->first();
        if ($bookmark == null) {
            Bookmark::create([
                'user_id' => $this->authUser->id,
                'resep_id' => $this->resep->id,
            ]);
        } else {
            $bookmark->delete();
        }
    }

    public function checkBookmarked()
    {
        if(Bookmark::where('user_id', $this->authUser->id)->where('resep_id', $this->resep->id)->exists())
        {
            return true;
        }
        return false;
    }

    public function render()
    {
        return view('livewire.bookmark-button', ['isBookmarked' => $this->checkBookmarked()]);
    }
}
