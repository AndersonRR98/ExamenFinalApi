<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Role;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 */
class UserFactory extends Factory
{
  



    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'apellido' => $this->faker->lastName(),
             'nacimiento' => $this->faker->date(),
             'status_id' => Status::inRandomOrder()->first()?->id,
            'role_id' => Role::inRandomOrder()->first()?->id,
            'business_id' => Business::inRandomOrder()->first()?->id,
            

        
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
