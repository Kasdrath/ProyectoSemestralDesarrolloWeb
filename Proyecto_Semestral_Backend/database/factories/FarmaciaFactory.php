<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Farmacia>
 */
class FarmaciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'farm_nombre' => $this->faker->name(),
            'farm_direccion' => $this->faker->text(15),
            'farm_mail' => $this->faker->email()
        ];
    }
}
