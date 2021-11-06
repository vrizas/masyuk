<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class DaftarMember extends Component
{
    public $memberId = null;
    public function render()
    {
        $members = User::all();
        return view('livewire.admin.daftar-member', ['members' => $members]);
    }

    public function deleteMember()
    {
        User::find($this->memberId)->delete();
        session()->flash('message', 'Member berhasil dihapus.');
        $this->memberId = null;
    }

    public function showDeleteModal($id)
    {
        $this->memberId = $id;
    }
}
