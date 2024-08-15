<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopImg>
 */
class ShopImgFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'shop_id' => \App\Models\Shop::factory(),
            // 'shop_img'=>fake()->imageUrl(1280,400),
            // 'discription'=>fake()->realText(),
            // 'status'=>1,
            // 'order'=>1,
        ];
    }
}
