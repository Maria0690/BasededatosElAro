<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Corraldos>
 */
class CorraldosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    Public function definition()
    {
        return [
            'nombredelanimal' => $this->faker->text(),
            'Dirección' => $this->faker->text(),
            'Telefono' => $this->faker->numberBetween(1,99),
        
        ];
    }
}