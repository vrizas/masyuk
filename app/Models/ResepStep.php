<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResepStep extends Model
{
    use HasFactory;

    public function resep() 
    {
        $this->belongsTo(Resep::class);
    }
}
