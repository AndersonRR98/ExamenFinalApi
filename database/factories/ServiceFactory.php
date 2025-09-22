<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nombre' => $this->faker->randomElement(['alto', 'mediano', 'bajo']),
            'descripcion' => $this->faker->sentence(),
             'status_id' => Status::inRandomOrder()->first()?->id,
            'category_id' => Category::inRandomOrder()->first()?->id,
            'business_id' => Business::inRandomOrder()->first()?->id,
        ];
    }
}
