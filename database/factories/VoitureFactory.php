<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created_at = fake()->dateTimeBetween('-1 year');
        return [
            'name'=>fake()->word,
            'marque'=>fake()->word,
            'color'=>fake()->colorName,
            'imatriculation'=>fake()->regexify('[0-5]{3}[A-Z]{2}[7-3]{2}'),
            'photo'=>fake()->imageUrl,
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
