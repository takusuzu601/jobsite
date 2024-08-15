<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'cast_id',
        'cast_option'
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
