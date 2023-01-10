<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CentroDistribucion>
 */
class CentroDistribucionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cd_codigo' => $this->faker->unique()->randomNumber(5),
            'cd_direccion' => $this->faker->text(15),
            'cd_telefono' => $this->faker->unique()->randomNumber(9)
        ];
    }
}
