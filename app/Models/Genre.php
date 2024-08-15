<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function shops()
    {
        return $this->belongsToMany(Shop::class);
    }

    public function casts()
    {
        return $this->belongsToMany(Cast::class);
    }
}
