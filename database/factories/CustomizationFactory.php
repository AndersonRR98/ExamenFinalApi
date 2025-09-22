<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customization>
 */
class CustomizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'color_primario' => $this->faker->randomElement(['rojo', 'azul', 'verde']),
            'color_secundario' => $this->faker->randomElement(['negro', 'blanco', 'gris']),
            'business_id' => Business::inRandomOrder()->first()?->id,
        ];
    }
}
