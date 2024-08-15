<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopKyc extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'ceo_name',
        'ceo_telephone',
        'license_name',
        'license_telephone',
        'license_adress',
        'license_img01',
        'license_img02',
        'license_img03',
        'license_img04',
        'status',
        'is_approved'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
