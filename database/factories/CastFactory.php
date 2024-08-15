<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cast>
 */
class CastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop_id' =>fake()->numberBetween($min = 1, $max =2150),
            'name' =>fake()->name('female'),
            'pref' => (string)fake()->numberBetween(1, 47),
            'age' => fake()->numberBetween($min = 18, $max =45), // パスワードは通常bcryptでハッシュ化
            'size_t'=>fake()->numberBetween($min =150, $max =165),
            'size_b'=>fake()->numberBetween($min =78, $max =100),
            'size_cup'=>fake()->randomElement($array = array('B','C','D','E','F','G','H','I')),
            'size_w'=>fake()->numberBetween($min =60, $max =85),
            'size_h'=>fake()->numberBetween($min =60, $max =90),
            'blood_type'=>fake()->randomElement($array = array('A','B','O','AB')),
            'zodiac_sign'=>fake()->randomElement($array = array('A','B','O','AB')),
            'smoke'=>fake()->randomElement($array = array('','する','しない')),
            'alcohol'=>fake()->randomElement($array = array('','のむ','飲まない')),
            'technique'=>'',
            'erogenous_zones'=>'',
            'show'=>'',
            'status'=>'1',
            'order'=>'',
            'view'=>'',
            'cast_instagram'=>'',
            'cast_x'=>''
        ];
    }
}
