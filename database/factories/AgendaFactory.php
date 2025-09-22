<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'horarios' => $this->faker->date(),
            'business_id' => Business::inRandomOrder()->first()?->id,
            'user_id' => User::inRandomOrder()->first()?->id,

        ];
    }
}
