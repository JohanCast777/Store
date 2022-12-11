<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_custom'=>$this->faker->randomElement([1,2,3]),
            'id_product'=>$this->faker->randomElement([1,2,3]),
            'id_worker'=>$this->faker->randomElement([1,2,3])
        ];
    }
}
