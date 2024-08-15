<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'cast_id',
        'date',
        'open',
        'close'
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
