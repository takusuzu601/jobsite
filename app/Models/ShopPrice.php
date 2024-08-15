<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'title',
        'discription',
        'time',
        'price_low',
        'price_hight',
        'status'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
