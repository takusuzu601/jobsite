<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastCoupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'cast_id',
        'title',
        'description',
        'status',
        'term'
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }

    //多対多
    public function castCouponUsers()
    {
        return $this->belongsToMany(User::class, 'user_cast_coupons')->withTimestamps();
    }
}
