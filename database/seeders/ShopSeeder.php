<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Shop;
use App\Models\ShopCoupon;
use App\Models\ShopGenre;
use App\Models\ShopImg;
use App\Models\ShopPrice;
use App\Models\ShopVideo;
use App\Models\ShopArea;
use App\Models\ShopKyc;
use App\Models\ShopSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shop::factory()->count(2150)->create()->each(function ($shop) {
            // ココからShopGenre Shopに対して1~5件のgenreを登録するが
            //1Shop内の重複を避ける設定をShopGenre migration Fileでしている
            // $genres = [1, 2, 3, 4, 5, 6, 7, 8, 9,10]; // 例としていくつかのジャンルを用意
            $numsCast = rand(10, 25);
            $nums = rand(1, 10);
            $numsImg = rand(1, 5);
            $numsVideo = rand(1, 5);
            $numPrice = rand(1, 3);
            $numsCoupon = rand(1, 6);
            $numsArea = rand(1, 8);
            $count = 0;

            // Shop Genre 多対多のリレーション　Seeder
            $genres = Genre::all();
            $randomGenres = $genres->random(rand(1, 10))->pluck('id')->toArray();
            // 中間テーブルにジャンルを関連付ける
            $shop->genres()->attach($randomGenres);
            //ShopGenreはここまで

            // ShopImg　Start
            for ($i = 0; $i < $numsImg; $i++) {
                ShopImg::create([
                    'shop_id' => $shop->id,
                    'shop_img' => fake()->imageUrl(400, 400),
                    'discription' => fake()->realText(),
                    'status' => 1,
                    'order' => $i,
                ]);
            }
            //ShopImg End
            // ShopImg　Start
            for ($i = 0; $i < $numsVideo; $i++) {
                ShopVideo::create([
                    'shop_id' => $shop->id,
                    'shop_video_url' => fake()->url(),
                    'discription' => fake()->realText(),
                    'status' => 1,
                ]);
            }
            //ShopImg End

            // ShopPrice
            for ($i = 0; $i < $numPrice; $i++) {
                ShopPrice::create([
                    'shop_id' => $shop->id,
                    'title' => fake()->realText($maxNbChars = 30),
                    'discription' => fake()->realText($maxNbChars = 300),
                    'time' => fake()->randomElement($array = array('45', '60', '90' . '120')),
                    'price_low' => fake()->randomElement($array = array('10000', '15000', '20000', '25000')),
                    'price_hight' => fake()->randomElement($array = array('10000', '15000', '20000', '25000')),
                    'status' => 1,
                ]);
            }
            //ShopPrice End
            //ShopCoupon
            for ($i = 0; $i < $numsCoupon; $i++) {
                $date = fake()->dateTimeBetween('+1day', '+1year');
                ShopCoupon::create([
                    'shop_id' => $shop->id,
                    'title' => fake()->realText($maxNbChars = 30),
                    'discription' => fake()->realText($maxNbChars = 300),
                    'status' => 1,
                    'term' => $date->modify('60day')->format('Y-m-d H:i:s'),
                ]);
            }
            //ShopCoupon End

            //ShopArea
            for ($i = 0; $i < $numsArea; $i++) {
                ShopArea::create([
                    'shop_id' => $shop->id,
                    'area_name' => fake()->city()
                ]);
            }
            //ShopArea End

            // ShopKyc
            ShopKyc::create([
                'shop_id' => $shop->id,
                'ceo_name' => fake()->name(),
                'ceo_telephone' => fake()->phoneNumber(),
                'license_name' => fake()->name(),
                'license_telephone' => fake()->phoneNumber(),
                'license_adress' => fake()->address(),
                'license_img01' => fake()->imageUrl(400, 400),
                'license_img02' => fake()->imageUrl(400, 400),
                'license_img03' => fake()->imageUrl(400, 400),
                'license_img04' => fake()->imageUrl(400, 400),
                'status' => 1,
                'is_approved' => 0,
            ]);
            //ShopKyc End

            // ShopSchedule
            ShopSchedule::create([
                'shop_id' => $shop->id,
                'title' => fake()->realText($maxNbChars = 30),
                'discription' => fake()->realText($maxNbChars = 300),
                'open' => fake()->name(),
                'close' => fake()->phoneNumber(),
                'holiday' => fake()->address(),
            ]);
            //ShopSchedule End

        }); // shopend

    }
}
// $shop->shopGenres()->save(\App\Models\ShopGenre::factory()->make());
