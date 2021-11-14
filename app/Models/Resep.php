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

    public function bookmark()
    {
        return $this->belongsTo(Bookmark::class);
    }

    public function steps()
    {
        return $this->hasMany(ResepStep::class);
    }

    public function bahans()
    {
        return $this->belongsToMany(Bahan::class, 'bahans_reseps')->withPivot('resep_id', 'quantity');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_reseps');
    }

    public function komentars()
    {
        return $this->hasMany(Komentar::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    static function recommended()
    {
        return self::with('likes', 'komentars', 'photos')->withCount('likes')->orderBy('likes_count', 'desc')->take(6)->get();
    }
}
