<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastPlay extends Model
{
    use HasFactory;

    protected $fillable = [
        'cast_id',
        'cast_play'
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
