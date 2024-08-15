<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopComment extends Model
{
    use HasFactory;
    protected $fillable = ['cast_id', 'shop_comment'];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
