<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        $category = [
            'Phones',
            'Computers',
            'TVs',
            'AppLiances',
            'Cameras',
            'Audio',
            'Wearables',
            'Gaming',
            'Networking',
            'Accesories'
        ];
        return [
            'name' => $this->faker->randomElement($category),
        ];
    }
}
