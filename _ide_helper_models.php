<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $shop_id
 * @property string $name
 * @property string $pref
 * @property string|null $age
 * @property string|null $size-t
 * @property string|null $size-b
 * @property string|null $size-cup
 * @property string|null $size-w
 * @property string|null $size-h
 * @property string|null $blood_type
 * @property string|null $zodiac_sign
 * @property string|null $smoke
 * @property string|null $alcohol
 * @property string|null $technique
 * @property string|null $erogenous_zones
 * @property string|null $show
 * @property int $status
 * @property string|null $order
 * @property string|null $view
 * @property string|null $cast_instagram
 * @property string|null $cast_x
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CastComment|null $castComment
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CastCoupon> $castCoupons
 * @property-read int|null $cast_coupons_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CastImg> $castImgs
 * @property-read int|null $cast_imgs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CastOption> $castOptions
 * @property-read int|null $cast_options_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CastPlay> $castPlays
 * @property-read int|null $cast_plays_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CastPrice> $castPrices
 * @property-read int|null $cast_prices_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CastSchedules> $castSchedules
 * @property-read int|null $cast_schedules_count
 * @property-read \App\Models\CastStatus|null $castStatus
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CastVideo> $castVideos
 * @property-read int|null $cast_videos_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $favoriteCastUsers
 * @property-read int|null $favorite_cast_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Genre> $genres
 * @property-read int|null $genres_count
 * @property-read \App\Models\Shop $shop
 * @property-read \App\Models\ShopComment|null $shopComment
 * @method static \Database\Factories\CastFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Cast newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cast newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cast query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereAlcohol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereBloodType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereCastInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereCastX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereErogenousZones($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast wherePref($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereSizeB($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereSizeCup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereSizeH($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereSizeT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereSizeW($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereSmoke($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereTechnique($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cast whereZodiacSign($value)
 */
	class Cast extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cast|null $cast
 * @method static \Database\Factories\CastCommentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CastComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastComment query()
 */
	class CastComment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cast|null $cast
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $castCouponUsers
 * @property-read int|null $cast_coupon_users_count
 * @method static \Database\Factories\CastCouponFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CastCoupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastCoupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastCoupon query()
 */
	class CastCoupon extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cast|null $cast
 * @method static \Database\Factories\CastImgFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CastImg newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastImg newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastImg query()
 */
	class CastImg extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cast|null $cast
 * @method static \Database\Factories\CastOptionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CastOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastOption query()
 */
	class CastOption extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cast|null $cast
 * @method static \Database\Factories\CastPlayFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CastPlay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastPlay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastPlay query()
 */
	class CastPlay extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cast|null $cast
 * @method static \Database\Factories\CastPriceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CastPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastPrice query()
 */
	class CastPrice extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cast|null $cast
 * @method static \Database\Factories\CastSchedulesFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CastSchedules newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastSchedules newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastSchedules query()
 */
	class CastSchedules extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cast|null $cast
 * @method static \Database\Factories\CastStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CastStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastStatus query()
 */
	class CastStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cast|null $cast
 * @method static \Database\Factories\CastVideoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CastVideo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastVideo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CastVideo query()
 */
	class CastVideo extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cast> $casts
 * @property-read int|null $casts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Shop> $shops
 * @property-read int|null $shops_count
 * @method static \Database\Factories\GenreFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre query()
 */
	class Genre extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Database\Factories\PrefFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pref newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pref newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pref query()
 */
	class Pref extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $shop_name
 * @property string $occupation
 * @property string $pref
 * @property string $shop_city
 * @property string $shop_main_area
 * @property string $shop_area_discription
 * @property string $shop_address
 * @property string $shop_discription
 * @property string $shop_phone
 * @property string $shop_email
 * @property string|null $shop_website
 * @property string|null $shop_instagram
 * @property string|null $shop_x
 * @property string|null $shop_line
 * @property string|null $thumbnail_image
 * @property string|null $thumbnail_min_image
 * @property string|null $google_map_embed_code
 * @property int $status
 * @property int $is_approved
 * @property int $shop_views
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cast> $casts
 * @property-read int|null $casts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $favoriteUsers
 * @property-read int|null $favorite_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Genre> $genres
 * @property-read int|null $genres_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShopArea> $shopAreas
 * @property-read int|null $shop_areas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShopComment> $shopComments
 * @property-read int|null $shop_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShopCoupon> $shopCoupons
 * @property-read int|null $shop_coupons_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShopImg> $shopImgs
 * @property-read int|null $shop_imgs_count
 * @property-read \App\Models\ShopKyc|null $shopKyc
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShopPrice> $shopPrices
 * @property-read int|null $shop_prices_count
 * @property-read \App\Models\ShopSchedule|null $shopScedule
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShopVideo> $shopVideos
 * @property-read int|null $shop_videos_count
 * @method static \Database\Factories\ShopFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereGoogleMapEmbedCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop wherePref($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopAreaDiscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopDiscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopMainArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereThumbnailImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereThumbnailMinImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereUpdatedAt($value)
 */
	class Shop extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $shop_id
 * @property string $area_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Shop $shop
 * @method static \Database\Factories\ShopAreaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShopArea newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopArea newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopArea query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopArea whereAreaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopArea whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopArea whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopArea whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopArea whereUpdatedAt($value)
 */
	class ShopArea extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cast|null $cast
 * @method static \Database\Factories\ShopCommentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShopComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopComment query()
 */
	class ShopComment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $shop_id
 * @property string $title
 * @property string|null $discription
 * @property int $status
 * @property string|null $term
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Shop $shop
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $shopCouponUsers
 * @property-read int|null $shop_coupon_users_count
 * @method static \Database\Factories\ShopCouponFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon whereDiscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon whereTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopCoupon whereUpdatedAt($value)
 */
	class ShopCoupon extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $shop_id
 * @property string $shop_img
 * @property string|null $discription
 * @property int $status
 * @property string $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Shop $shop
 * @method static \Database\Factories\ShopImgFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg whereDiscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg whereShopImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImg whereUpdatedAt($value)
 */
	class ShopImg extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $shop_id
 * @property string $ceo_name
 * @property string $ceo_telephone
 * @property string $license_name
 * @property string $license_telephone
 * @property string $license_adress
 * @property string $license_img01
 * @property string $license_img02
 * @property string $license_img03
 * @property string $license_img04
 * @property int $status
 * @property int $is_approved
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Shop $shop
 * @method static \Database\Factories\ShopKycFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereCeoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereCeoTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereLicenseAdress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereLicenseImg01($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereLicenseImg02($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereLicenseImg03($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereLicenseImg04($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereLicenseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereLicenseTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopKyc whereUpdatedAt($value)
 */
	class ShopKyc extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $shop_id
 * @property string $title
 * @property string|null $discription
 * @property string $time
 * @property string $price_low
 * @property string $price_hight
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Shop $shop
 * @method static \Database\Factories\ShopPriceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice whereDiscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice wherePriceHight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice wherePriceLow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopPrice whereUpdatedAt($value)
 */
	class ShopPrice extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $shop_id
 * @property string $title
 * @property string|null $discription
 * @property string|null $open
 * @property string|null $close
 * @property string|null $holiday
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Shop $shop
 * @method static \Database\Factories\ShopScheduleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule whereClose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule whereDiscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule whereHoliday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule whereOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopSchedule whereUpdatedAt($value)
 */
	class ShopSchedule extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $shop_id
 * @property string $shop_video_url
 * @property string|null $discription
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Shop $shop
 * @method static \Database\Factories\ShopVideoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShopVideo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopVideo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopVideo query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopVideo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopVideo whereDiscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopVideo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopVideo whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopVideo whereShopVideoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopVideo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopVideo whereUpdatedAt($value)
 */
	class ShopVideo extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $avatar
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string $user_type
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cast> $favoriteCasts
 * @property-read int|null $favorite_casts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Shop> $favoriteShops
 * @property-read int|null $favorite_shops_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CastCoupon> $userCastCoupons
 * @property-read int|null $user_cast_coupons_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShopCoupon> $userShopCoupons
 * @property-read int|null $user_shop_coupons_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserType($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Database\Factories\UserCastCouponFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|UserCastCoupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCastCoupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCastCoupon query()
 */
	class UserCastCoupon extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Database\Factories\UserFavoriteCastFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavoriteCast newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavoriteCast newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavoriteCast query()
 */
	class UserFavoriteCast extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Database\Factories\UserFavoriteShopFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavoriteShop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavoriteShop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavoriteShop query()
 */
	class UserFavoriteShop extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Database\Factories\UserShopCouponFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|UserShopCoupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserShopCoupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserShopCoupon query()
 */
	class UserShopCoupon extends \Eloquent {}
}

