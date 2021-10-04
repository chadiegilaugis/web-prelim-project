<?php

namespace Database\Factories;

use App\Models\Sales;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sales::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Product' => $this->faker->word,
        'Brand' => $this->faker->word,
        'Number_of_items_sold' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
