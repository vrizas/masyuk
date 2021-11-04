<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Index extends Component
{
    public $selectorBahan = true;
    public $selectorMember = false;
    public $selectorEditProfile = false;

    public function render()
    {
        return view('livewire.admin.index');
    }

    public function renderComponentBahan() {
        $this->selectorBahan = true;
        $this->selectorMember = false;
        $this->selectorEditProfile = false;
    }

    public function renderComponentMember() {
        $this->selectorBahan = false;
        $this->selectorMember = true;
        $this->selectorEditProfile = false;
    }

    public function renderComponentEditProfile() {
        $this->selectorBahan = false;
        $this->selectorMember = false;
        $this->selectorEditProfile = true;
    }
}
