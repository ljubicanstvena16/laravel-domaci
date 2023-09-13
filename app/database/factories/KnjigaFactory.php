<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KnjigaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Naziv' => $this->faker->sentence($nbWords = 1, $variableNbWords = true),
            'Zanr' => $this->faker->sentence($nbWords = 1),
            'Opis' => $this->faker->paragraph($nbSentences = 3),
            'Pisac' => $this->faker->name(),
        ];
    }
}
