<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\computadora;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\computadora>
 */
class ComputadoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marca' => $this->fake()->name(),
            'descripcion' => $this->fake()->name(),
        ];
    }
}