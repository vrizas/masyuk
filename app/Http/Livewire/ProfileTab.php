<?php

namespace App\Http\Livewire;

use App\Models\Bookmark;
use App\Models\Resep;
use Auth;
use Livewire\Component;

use function App\View\Components\render;

class ProfileTab extends Component
{
    public $user;

    public $selectedIndex;

    protected $listeners = ['tabClicked' => '$refresh'];

    public function changeTabToResep()
    {
        $this->selectedIndex = 0;
        $this->emit('tabClicked');
    }

    public function changeTabToBookmark()
    {
        $this->selectedIndex = 1;
        $this->emit('tabClicked');
    }

    public function mount() {
        $this->selectedIndex = 1;
    }

    public function render()
    {
        $bookmarks = Bookmark::where('user_id', Auth::user()->id)->get();
        $bookmark_reseps = [];
        if ($bookmarks != null) {
            foreach($bookmarks as $bookmark) {
                array_push($bookmark_reseps, Resep::find($bookmark->resep_id));
            }
        }
        return view('livewire.profile-tab', ['bookmark_reseps' => $bookmark_reseps]);
    }
}
