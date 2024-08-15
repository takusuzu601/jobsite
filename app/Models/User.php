<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar',
        'name',
        'email',
        'password',
        'email_verified_at',
        'user_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //多対多
    public function favoriteShops()
    {
        return $this->belongsToMany(Shop::class, 'user_favorite_shops')->withTimestamps();
    }
    //多対多
    public function favoriteCasts()
    {
        return $this->belongsToMany(Cast::class, 'user_favorite_casts')->withTimestamps();
    }

    //多対多
    public function userShopCoupons()
    {
        return $this->belongsToMany(ShopCoupon::class, 'user_shop_coupons')->withTimestamps();
    }

    //多対多
    public function userCastCoupons()
    {
        return $this->belongsToMany(CastCoupon::class, 'user_cast_coupons')->withTimestamps();
    }
}
