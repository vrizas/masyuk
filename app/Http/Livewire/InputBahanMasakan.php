<?php

namespace App\Http\Livewire;

use App\Models\Bahan;
use Livewire\Component;

class InputBahanMasakan extends Component
{
    protected $listeners = ['itemAdded' => '$refresh'];
    public $index;
    public $allBahans = null;
    public $listBahans;
    public $selectedBahan = null;

    public function mount()
    {
        $this->allBahans = Bahan::all();
        $this->listBahans = [['bahan_id' => '', 'quantity' => 0, 'kalori' => 0]];
        $this->index = 0;
    }

    public function updatedListBahans($id)
    {
        $bahan = Bahan::find($id);
        $this->listBahans[$this->index]['kalori'] = ($bahan->kalori ?? 0) * (int)$this->listBahans[$this->index]['quantity'];
    }

    public function addItem() 
    {
        $this->listBahans[] =  ['bahan_id' => '', 'quantity' => 0, 'kalori' => 0];
        $this->listBahans = array_values($this->listBahans);
    }

    public function deleteItem($index)
    {
        unset($this->listBahans[$index]);
        $this->listBahans = array_values($this->listBahans);
    }

    public function setIndex($index)
    {
        $this->index = $index;
    }

    public function render()
    {
        return view('livewire.input-bahan-masakan');
    }
}
