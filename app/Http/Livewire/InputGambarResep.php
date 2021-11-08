<?php

namespace App\Http\Livewire;

use App\Models\Photo;
use Livewire\Component;
use Livewire\WithFileUploads;

class InputGambarResep extends Component
{
    use WithFileUploads;

    protected $listeners = ['imageAdded' => 'refresh'];

    public $images = [];
    public $tempImage;

    public function mount()
    {
        $this->images = [''];
    }

    public function addItem()
    {
        $this->images[] = [''];
    }


    public function updatedTempImage()
    {
        $this->validate([
            'tempImage' => 'image|max:1024'
        ]);

        $url = $this->tempImage->store('photos', 'public');
        array_push($this->images, $url);

        $this->tempImage = "";
    }


    public function render()
    {
        return view('livewire.input-gambar-resep');
    }
}
