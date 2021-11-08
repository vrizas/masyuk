<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function steps()
    {
        return $this->hasMany(ResepStep::class);
    }

    public function bahans()
    {
        return $this->belongsToMany(Bahan::class, 'bahans_reseps');
    }

    public function komentars()
    {
        return $this->hasMany(Komentar::class);
    }
}
