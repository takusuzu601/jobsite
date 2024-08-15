<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastImg extends Model
{
    use HasFactory;

    protected $fillable = [
        'cast_id',
        'cast_img',
        'discription',
        'status',
        'order'
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
