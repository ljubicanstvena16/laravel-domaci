<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Ime' => $this->faker->name(),
            'Prezime' => $this->faker->lastName(),
            'ClanskaKarta' => $this->faker->numerify('#########'),
            'DatumIsteka' => $this->faker->dateTimeThisYear()
        ];
    }
}
