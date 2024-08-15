<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'shop_video_url',
        'discription',
        'status'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
