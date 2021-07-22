<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(20),
            'description' => $this->faker->text(250),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 1000),
            'image' => 'https://natashaskitchen.com/wp-content/uploads/2020/05/Pefect-Cheesecake-7.jpg'
        ];
    }
}
