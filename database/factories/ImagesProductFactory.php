<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImagesProduct>
 */
class ImagesProductFactory extends Factory
{
    public function definition(): array
    {
        $imagenes = [
            'https://www.janus.com.co/cdn/shop/files/CXpri-M22-FALCONV930N.jpg?v=1760983129',
            'https://i.blogs.es/b332b0/xiaomi-tv-a-pro/650_1200.jpg',
            'https://luma.com.co/cdn/shop/files/image-Photoroom_67_8304b5c1-4e0a-45cf-83ea-ae180cdf4c60.png?v=1758641742',
            'https://exitocol.vtexassets.com/arquivos/ids/26384317/tablet-lenovo-m11-128gb-8gb-ram-lapiz-tap-pen-plus-folio-case.jpg?v=638727448724230000',
            'https://images-cdn.ubuy.co.in/653dca4638b3b6351c03b03e-smart-watch-for-android-and-iphone.jpg',
        ];

        return [
            'url' => fake()->randomElement($imagenes),
        ];
    }
}
