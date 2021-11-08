<?php

namespace App\Http\Livewire\Admin;

use App\Models\Bahan;
use Livewire\Component;

class BahanMasakan extends Component
{
    public $nama, $kalori, $baseQuantity, $unit;
    public $namaEdit, $kaloriEdit, $baseQuantityEdit, $unitEdit;
    public $openModalEdit = 0;
    

    public function render()
    {
        $bahans = Bahan::all();
        return view('livewire.admin.bahan-masakan', ['bahans' => $bahans]);
    }

    public function resetForm()
    {
        $this->nama = '';
        $this->kalori = '';
        $this->baseQuantity = '';
        $this->unit = '';
    }

    public function createBahan()
    {
        $this->validate([
            'nama' => 'required|max:20',
            'kalori' => 'required|numeric',
            'baseQuantity' => 'required|numeric',
            'unit' => 'required|max:20'
        ]);

        Bahan::updateOrCreate([
            'nama' => $this->nama,
            'kalori' => $this->kalori,
            'baseQuantity' => $this->baseQuantity,
            'unit' => $this->unit,
        ]);

        $this->resetForm();
    }

    public function deleteBahan($id)
    {
        Bahan::find($id)->delete();
    }

    public function editBahan($id)
    {
        $bahan = Bahan::findOrFail($id);
        $this->validate([
            'namaEdit' => 'required|max:20',
            'kaloriEdit' => 'required|numeric',
            'baseQuantityEdit' => 'required|numeric',
            'unitEdit' => 'required|max:20'
        ]);

        $bahan->update([
            'nama' => $this->namaEdit,
            'kalori' => $this->kaloriEdit,
            'baseQuantity' => $this->baseQuantityEdit,
            'unit' => $this->unitEdit
        ]);

        $this->openModalEdit = 0;
    }

    public function showForm($id) 
    {
        $this->openModalEdit = $id;
        $bahan = Bahan::findOrFail($id);
        $this->namaEdit = $bahan->nama;
        $this->kaloriEdit = $bahan->kalori;
        $this->baseQuantityEdit = $bahan->baseQuantity;
        $this->unitEdit = $bahan->unit;
    }
}
