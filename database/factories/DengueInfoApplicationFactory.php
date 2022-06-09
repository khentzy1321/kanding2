<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DengueInfoApplication>
 */
class DengueInfoApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'lName' => $this->faker->lastName,
            'deaths'=>$this->faker->numberBetween(20,10000),
            'recovered'=>$this->faker->numberBetween(5,100000),
            'month'=>$this->faker->randomElement(['January','February','March','April','May','June','July','August','September','October','November','December']),
        ];
    }
}
