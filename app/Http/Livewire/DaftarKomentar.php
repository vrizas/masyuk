<?php

namespace App\Http\Livewire;

use App\Events\ResepCommented;
use App\Models\Komentar;
use App\Notifications\ResepCommentedNotification;
use Auth;
use Livewire\Component;

class DaftarKomentar extends Component
{
    public $resep;
    public $inputKomentar;

    public function render()
    {
        $komentars = Komentar::where('resep_id', $this->resep->id)->get();
        return view('livewire.daftar-komentar', ['komentars' => $komentars]);
    }

    public function createKomentar()
    {
        $this->validate([
            'inputKomentar' => 'required|max:300'
        ]);

        $komentar = Komentar::create([
            'text' => $this->inputKomentar,
            'user_id' => Auth::id(),
            'resep_id' => $this->resep->id,
        ]);


        if ($komentar != null) {
            $this->resep->user->notify(new ResepCommentedNotification(Auth::user(), Auth::user()->username . ' mengomentari resep anda ' . $this->resep->title));
            event(new ResepCommented($this->resep->user, $this->resep));
        }


        $this->resetForm();
    }

    public function resetForm()
    {
        $this->inputKomentar = '';
    }
}
