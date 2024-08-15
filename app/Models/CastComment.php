<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'cast_id',
        'cast_comment'
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
