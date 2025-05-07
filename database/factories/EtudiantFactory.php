<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
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
            'nom'=>fake()->firstName,
            'prenom'=>fake()->lastName,
            'nin'=>fake()->regexify('[UC][0-9]{6}'),
            'matricule'=>fake()->regexify('[0-9]{5}'),
            'adresse'=>fake()->city,
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
