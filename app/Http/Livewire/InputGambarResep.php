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

    public function mount($resep)
    {
        if($resep)
        {
            foreach($resep->photos as $photo)
            {
                $this->images[] = '/photos/'.$photo->filename;
            }
        } else{
            $this->images = [''];
        }
    }

    public function addItem()
    {
        $this->images[] = [''];
    }

    public function deleteItem($index)
    {
        unset($this->images[$index]);
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
