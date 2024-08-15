<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'area_name'
    ];

        public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
