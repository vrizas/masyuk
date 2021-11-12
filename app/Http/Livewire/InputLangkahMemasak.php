<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InputLangkahMemasak extends Component
{
    public $listLangkah;
    public $text;

    public function mount()
    {
        $this->listLangkah = [''];
    }

    public function addItem()
    {
        $this->listLangkah[] =  [''];
    }


    public function deleteItem($index)
    {
        unset($this->listLangkah[$index]);
    }

    public function render()
    {
        return view('livewire.input-langkah-memasak');
    }
}
