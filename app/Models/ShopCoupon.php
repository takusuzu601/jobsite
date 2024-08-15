<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCoupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'description',
        'title',
        'discription',
        'status',
        'term'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    //多対多
    public function shopCouponUsers()
    {
        return $this->belongsToMany(User::class, 'user_shop_coupons')->withTimestamps();
    }
}
