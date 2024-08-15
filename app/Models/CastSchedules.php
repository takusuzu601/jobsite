<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastSchedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'cast_id',
        'day',
        'start_time',
        'end_time',
        'status'
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
