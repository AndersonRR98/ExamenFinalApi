<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Plan;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ 
             'nombre' => $this->faker->name(),
            'direccion' => $this->faker->address(),
            'status_id' => Status::inRandomOrder()->first()?->id,
            'category_id' => Category::inRandomOrder()->first()?->id,
            'plan_id' => Plan::inRandomOrder()->first()?->id,
        ];
    }
}
