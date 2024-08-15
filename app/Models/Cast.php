<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'name',
        'occupation',
        'pref',
        'age',
        'size-t',
        'size-b',
        'size-cup',
        'size-w',
        'size-h',
        'ablood_type',
        'zodiac_sign',
        'smoke',
        'alcohol',
        'technique',
        'erogenous_zones',
        'show',
        'status',
        'order',
        'view',
        'cast_instagram',
        'cast_x'
    ];

    //     // 設定ファイルから都道府県名を取得
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


    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    //1対1
    public function castComment()
    {
        return $this->hasOne(CastComment::class);
    }

    //1対1
    public function shopComment()
    {
        return $this->hasOne(ShopComment::class);
    }

    public function castCoupons()
    {
        return $this->hasMany(CastCoupon::class);
    }

    public function castImgs()
    {
        return $this->hasMany(CastImg::class);
    }

    public function castOptions()
    {
        return $this->hasMany(CastOption::class);
    }

    public function castPlays()
    {
        return $this->hasMany(CastPlay::class);
    }

    public function castPrices()
    {
        return $this->hasMany(CastPrice::class);
    }

    public function castSchedules()
    {
        return $this->hasMany(CastSchedules::class);
    }

    //1対1
    public function castStatus()
    {
        return $this->hasOne(CastStatus::class);
    }

    public function castVideos()
    {
        return $this->hasMany(CastVideo::class);
    }

    //多対多

    public function favoriteCastUsers()
    {
        return $this->belongsToMany(User::class, 'user_favorite_casts')->withTimestamps();
    }
    //多対多
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'cast_genre');
    }
}
