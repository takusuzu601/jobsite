<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop_name' =>fake()->company(),
            'occupation' =>fake()->randomElement($array = array(1,2,3,4)),
            'pref' => (string)fake()->numberBetween(1, 47),
            'shop_city'=>fake()->city(),
            'shop_main_area'=>fake()->streetName(),
            'shop_area_discription'=>fake()->realText(),
            'shop_address'=>fake()->address(),
            'shop_discription'=>fake()->realText(),
            'shop_phone'=>fake()->phoneNumber(),
            'shop_email'=>fake()->email(),
            'shop_website'=>fake()->url(),
            'shop_instagram'=>fake()->url(),
            'shop_x'=>fake()->url(),
            'shop_line'=>fake()->url(),
            'thumbnail_image'=>fake()->imageUrl(480, 300),
            'thumbnail_min_image'=>fake()->imageUrl(300, 300),
            'google_map_embed_code'=>fake()->url(),
            'status'=>fake()->numberBetween(1,2),
            'is_approved'=>fake()->numberBetween(1,2),
            'shop_views'=>fake()->randomNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
