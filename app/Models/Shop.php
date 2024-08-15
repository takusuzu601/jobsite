<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_name',
        'occupation',
        'pref',
        'shop_city',
        'shop_main_area',
        'shop_area_discription',
        'shop_address',
        'shop_discription',
        'shop_phone',
        'shop_email',
        'shop_website',
        'shop_instagram',
        'shop_x',
        'shop_line',
        'thumbnail_image',
        'thumbnail_min_image',
        'google_map_embed_code',
        'status',
        'is_approved',
        'shop_views'
    ];

    // // 設定ファイルから都道府県名を取得
    // public static function getPrefName($shopPrefId)
    // {
    //     $prefs = config('pref');
    //     return $prefs[$shopPrefId] ?? 'Unknown';
    // }
    // // アクセサを使って、都道府県名を取得
    // public function getPrefNameAttribute()
    // {
    //     return self::getPrefName($this->shop_pref);
    // }

    public function casts()
    {
        return $this->hasMany(Cast::class);
    }

    public function shopAreas()
    {
        return $this->hasMany(ShopArea::class);
    }

    public function shopComments()
    {
        return $this->hasMany(ShopComment::class);
    }

    public function shopCoupons()
    {
        return $this->hasMany(ShopCoupon::class);
    }


    public function shopImgs()
    {
        return $this->hasMany(ShopImg::class);
    }

    // 1対1
    public function shopKyc()
    {
        return $this->hasOne(ShopKyc::class);
    }

    public function shopPrices()
    {
        return $this->hasMany(ShopPrice::class);
    }

    public function shopScedule()
    {
        return $this->hasOne(ShopSchedule::class);
    }

    public function shopVideos()
    {
        return $this->hasMany(ShopVideo::class);
    }

    //多対多

    public function favoriteUsers()
    {
        return $this->belongsToMany(User::class, 'user_favorite_shops')->withTimestamps();
    }

    //多対多
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'shop_genre');
    }
}
