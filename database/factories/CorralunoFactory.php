<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Corraluno>
 */
class CorralunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Trabajos' => $this->faker->text(),
            'Empresas' => $this->faker->text(),
            'Productos' => $this->faker->numberBetween(1,99),
        ];
    }
}
