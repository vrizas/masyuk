<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reseps()
    {
        return $this->belongsToMany(Resep::class, 'bahans_reseps');
    }
}
