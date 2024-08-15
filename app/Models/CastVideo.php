<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'cast_id',
        'cast_video_url',
        'discription',
        'status',
        'order'
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
