<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sport>
 */
class SportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categoria=['masculino', 'femenino'];
        return [
            //
            'name'=>fake()->name(),
            'countryorigin'=>fake()->country(),
            'description'=>fake()->paragraph(),
            'category'=>$categoria[rand(0,1)]

        ];
    }
}
