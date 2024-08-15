<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'title',
        'discription',
        'open',
        'close',
        'holiday'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
