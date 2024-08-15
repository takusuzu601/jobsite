<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'cast_id',
        'title',
        'description',
        'time',
        'price_low',
        'price_hight',
        'status'
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
