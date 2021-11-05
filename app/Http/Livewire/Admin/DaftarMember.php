<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class DaftarMember extends Component
{
    public function render()
    {
        $members = User::all();
        return view('livewire.admin.daftar-member', ['members' => $members]);
    }

    public function deleteMember($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Member berhasil dihapus.');
    }
}
