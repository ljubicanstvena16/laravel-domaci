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
            'clan_id' => $this->faker->randomDigitNot(0),
            'knjiga_id' => $this->faker->randomDigitNot(0),
            'DaniPozajmljivanja' => $this->faker->randomNumber($nbDigits = 2),
            'DatumVracanja' => $this->faker->dateTimeThisYear()
        ];
    }
}
