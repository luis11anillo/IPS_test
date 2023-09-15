<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'cliente_id' => fake()->numberBetween(1, 50), // Número aleatorio entre 1 y 50 como cliente_id
            'nombre_msc' => fake()->firstName,
            'especie' => fake()->randomElement(['Perro', 'Gato', 'Ave', 'Reptil', 'Otro']),
            'raza' => fake()->word,
            'color_pelo' => fake()->optional()->word,
        ];
    }
}
