<?php

namespace Database\Seeders;

use App\Models\Genre;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            // 数字と名前を対応付けた配列
            1 => '巨乳',
            2 => '爆乳',
            3 => '美乳',
            4 => '微乳･貧乳',
            5 => 'ピンク色の乳首',
            6 => '巨乳輪',
            7 => '小さい乳首',
            8 => '大きい乳首',
            9 => '垂れ乳',
            10 => '超乳',

            20 => 'パイパン',
            21 => 'スレンダー',
            22 => '美脚',
            23 => '色黒･日焼け',
            24 => '妊婦',
            25 => '高身長',
            26 => '低身長',
            27 => 'ぽっちゃり',
            28 => 'メガぽっちゃり',
            29 => 'ガリ･痩せ',
            30 => 'スタンダード',
            31 => 'アスリート系',

            50 => 'お姉さん系',
            51 => '美女･モデル系',
            52 => '美少女･可愛い系',
            53 => 'アイドル系',
            54 => 'ギャル･黒ギャル',
            55 => 'キャンギャル系',
            56 => 'OL･秘書',
            57 => 'キャバ系',
            58 => 'お嬢様系',
            59 => '女子アナ系',
            60 => '清楚系',
            61 => 'ゆるふわ系',
            62 => '色白',

            // personsのデータも追加する場合は以下に続けて追加
            80 => '明るい',
            81 => 'ｲﾁｬｲﾁｬ好き',
            82 => 'ツンデレ',
            83 => '愛嬌抜群',
            84 => '甘えん坊',
            85 => '人懐っこい',
            86 => 'おっとり系',
            87 => '恥ずかしがり屋',
            88 => '聞き上手',
            89 => '空気を読む',
            90 => '中性的',
        ];

        foreach ($genres as $id => $name) {
            DB::table('genres')->updateOrInsert(
                ['id' => $id],
                ['name' => $name]
            );
        }
    }
}
