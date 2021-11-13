<?php

namespace App\Http\Livewire;

use App\Models\Bahan;
use App\Models\Category;
use App\Models\Resep;
use Livewire\Component;
use Request;
use Symfony\Component\Console\Input\Input;

class DaftarResep extends Component
{
    public $keyword;
    public $category_id = null;
    public $selectedCategory = null;
    public $selectedBahansId = [];
    public $selectedBahans = null;
    public $isDesc;
    public $reseps;

    protected $listeners = [
        'buttonTerapkanClicked' => '$refresh',
        'categoryRemoved' => '$refresh',
        'selectedBahansUpdated' => 'updateSelectedBahans'
    ];

    public function removeCategory()
    {
        $this->selectedCategory = null;
        $this->category_id = null;
        $this->mount();
    }

    public function removeBahan($index)
    {
        unset($this->selectedBahansId[$index]);
        $this->selectedBahansId = array_values($this->selectedBahansId);
        $this->refreshResult();
    }

    public function mount()
    {
        $this->keyword = Request::get('keyword');
        if ($this->keyword != null) {
            $this->reseps = Resep::withCount('likes')->orderBy('likes_count', 'desc')->where('title', 'like', '%' . $this->keyword . '%')->get();
        } else {
            $this->reseps = Resep::withCount('likes')->orderBy('likes_count', 'desc')->get();
        }
    }

    public function search()
    {
        $this->reseps = Resep::withCount('likes')->orderBy('likes_count', 'desc')
            ->where('title', 'like', '%' . $this->keyword . '%')->get();
        $this->category_id = null;
        $this->emit('searchRequested');
    }


    public function updateSelectedBahans($value)
    {
        $this->selectedBahansId = $value;
    }

    public function updatedCategoryId($value)
    {
        $this->category_id = $value;
    }

    public function updatedIsDesc()
    {
        $this->refreshResult();
    }

    public function refreshResult()
    {
        $this->reseps = Resep::withCount('likes')->orderBy('likes_count', $this->isDesc == 0 ? 'desc' : 'asc')
            ->where('title', 'like', '%' . $this->keyword . '%')
            ->whereHas('bahans', function ($query) {
                $query->when($this->selectedBahansId, function ($query) {
                    $query->whereIn('bahan_id', array_map(function ($item) {
                        return $item['id'];
                    }, $this->selectedBahansId));
                });
            })
            ->when($this->category_id, function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->where('category_id', $this->category_id);
                });
            })
            ->get();

        $this->selectedCategory = Category::find($this->category_id);
        $this->selectedBahans = Bahan::whereIn('id', array_map(function ($item) {
            return $item['id'];
        }, $this->selectedBahansId))->get();

        $this->emitSelf('buttonTerapkanClicked');
    }

    public function render()
    {
        return view('livewire.daftar-resep', ['categories' => Category::all()]);
    }
}
