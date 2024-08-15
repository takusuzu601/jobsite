<?php

namespace Database\Seeders;

use App\Models\Cast;
use App\Models\CastComment;
use App\Models\CastCoupon;
use App\Models\CastGenre;
use App\Models\CastImg;
use App\Models\CastOption;
use App\Models\CastPlay;
use App\Models\CastPrice;
use App\Models\CastSchedules;
use App\Models\CastStatus;
use App\Models\CastVideo;
use App\Models\Genre;
use App\Models\ShopComment;
use App\Models\ShopPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cast::factory()->count(43000)->create()->each(function ($cast) {

            // ココからCastGenre Castに対して1~5件のgenreを登録するが
            //1Shop内の重複を避ける設定をShopGenre migration Fileでしている
            $genres = [1, 2, 3, 4, 5, 6, 7, 8, 9]; // 例としていくつかのジャンルを用意
            $options = [1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 13, 14, 15]; // 例としていくつかのOPTIONを用意
            $plays = [1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 13, 14, 15]; // 例としていくつかのPlayを用意
            $nums = rand(1, 5);
            $numsImg = rand(1, 12);
            $numsVideo = rand(1, 5);
            $numPrice = rand(1, 3);
            $numsCoupon = rand(1, 6);
            $numsOption = rand(1, 15);
            $numsPlay = rand(1, 15);
            $numsSchedule = rand(1, 7);
            $count = 0;
            $countOption = 0;
            $countPlay = 0;

            //CastGenre　多対多のリレーション　seeder
            $genres = Genre::all();

            $randomGenres = $genres->random(rand(1, 10))->pluck('id')->toArray();
            // 中間テーブルにジャンルを関連付ける
            $cast->genres()->attach($randomGenres);

            //CastGenreはここまで

            // CastImg　Start
            for ($i = 0; $i < $numsImg; $i++) {
                CastImg::create([
                    'cast_id' => $cast->id,
                    'cast_img' => fake()->imageUrl(400, 400),
                    'discription' => fake()->realText(),
                    'status' => 1,
                    'order' => $i,
                ]);
            }
            //CastImg End
            // ShopVideo　Start
            for ($i = 0; $i < $numsVideo; $i++) {
                CastVideo::create([
                    'cast_id' => $cast->id,
                    'cast_video_url' => fake()->url(),
                    'discription' => fake()->realText(),
                    'status' => 1,
                    'order' => $i
                ]);
            }
            //ShopVideo End

            // CastPrice
            for ($i = 0; $i < $numPrice; $i++) {
                CastPrice::create([
                    'cast_id' => $cast->id,
                    'title' => fake()->realText($maxNbChars = 30),
                    'discription' => fake()->realText($maxNbChars = 300),
                    'time' => fake()->randomElement($array = array('45', '60', '90' . '120')),
                    'price_low' => fake()->randomElement($array = array('10000', '15000', '20000', '25000')),
                    'price_hight' => fake()->randomElement($array = array('10000', '15000', '20000', '25000')),
                    'status' => 1,
                ]);
            }
            //CastPrice End
            //CastCoupon
            for ($i = 0; $i < $numsCoupon; $i++) {
                $date = fake()->dateTimeBetween('+1day', '+1year');
                CastCoupon::create([
                    'cast_id' => $cast->id,
                    'title' => fake()->realText($maxNbChars = 30),
                    'discription' => fake()->realText($maxNbChars = 300),
                    'status' => 1,
                    'term' => $date->modify('60day')->format('Y-m-d H:i:s'),
                ]);
            }
            //CastCoupon End

            //CastOption
            foreach ($options as $option) {
                if ($countOption >= $numsOption) {
                    break; // 最大回数に達したらループを終了
                }
                if (!CastOption::where('cast_id', $cast->id)->where('cast_option', $option)->exists()) {
                    CastOption::create([
                        'cast_id' => $cast->id,
                        'cast_option' => $option,
                    ]);
                }
                $countOption++;
            }
            //CastOption End

            //CastPlay
            foreach ($plays as $play) {
                if ($countPlay >= $numsPlay) {
                    break; // 最大回数に達したらループを終了
                }
                if (!CastPlay::where('cast_id', $cast->id)->where('cast_play', $play)->exists()) {
                    CastPlay::create([
                        'cast_id' => $cast->id,
                        'cast_play' => $option,
                    ]);
                }
                $countPlay++;
            }
            //CastPlay End

            // CastSchedule
            for ($i = 0; $i < $numsSchedule; $i++) {
                CastSchedules::create([
                    'cast_id' => $cast->id,
                    'day' => fake()->date($format = 'Y-m-d', $max = 'now'),
                    'start_time' => fake()->time($format = 'H:i:s', $max = 'now'),
                    'end_time' => fake()->time($format = 'H:i:s', $max = 'now'),
                    'status' => 1,
                ]);
            }
            //CastSchedule End

            // CastStatus
            CastStatus::create([
                'cast_id' => $cast->id,
                'date' => fake()->date($format = 'Y-m-d', $max = 'now'),
                'open' => fake()->time($format = 'H:i:s', $max = 'now'),
                'close' => fake()->time($format = 'H:i:s', $max = 'now'),
                'status' => 1
            ]);
            //CastStatus End

            // CastComment
            CastComment::create([
                'cast_id' => $cast->id,
                'cast_comment' => fake()->realText($maxNbChars = 300),
                'status' => 1
            ]);
            //CastComment End

            //ShopComment
            ShopComment::create([
                'cast_id' => $cast->id,
                'shop_comment' => fake()->realText($maxNbChars = 300),
                'status' => 1
            ]);
            //ShopComment End

        });
    }
}
