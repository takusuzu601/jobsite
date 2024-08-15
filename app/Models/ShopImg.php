<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopImg extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'shop_img',
        'description',
        'status',
        'order'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
