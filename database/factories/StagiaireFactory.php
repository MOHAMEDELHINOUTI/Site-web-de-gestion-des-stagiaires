<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'registration_number' => $this ->faker->randomDigit(),
            'full_name' => $this ->faker->name(),
            'depart'=> $this->faker->word(),
            'hire_date'=> $this->faker->date(),
            'phone' => $this->faker->numberBetween(),
            'adress' =>$this->faker->address(),
            'city' => $this->faker->city(),


        ];
    }
}
