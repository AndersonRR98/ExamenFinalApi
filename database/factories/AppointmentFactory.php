<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Service;
use App\Models\Status;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'nota' => $this->faker->sentence(),
            'fecha' => $this->faker->date(),
            'business_id' => Business::inRandomOrder()->first()?->id,
            'user_id' => User::inRandomOrder()->first()?->id,
            'status_id' => Status::inRandomOrder()->first()?->id,
            'service_id' => Service::inRandomOrder()->first()?->id,

        ];
    }
}
