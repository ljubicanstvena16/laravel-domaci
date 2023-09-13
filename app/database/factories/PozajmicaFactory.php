<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PozajmicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ClanId' => $this->faker->randomDigitNot(0),
            'KnjigaId' => $this->faker->randomDigitNot(0),
            'DaniPozajmljivanja' => $this->faker->randomNumber($nbDigits = 2),
            'DatumVracanja' => $this->faker->dateTimeThisYear()
        ];
    }
}
