<?php

namespace Database\Seeders;

use App\Models\Agenda;
use App\Models\Appointment;
use App\Models\Business;
use App\Models\User;
use App\Models\Category;
use App\Models\Customization;
use App\Models\Plan;
use App\Models\Role;
use App\Models\Service;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Status::factory(20)->create();  
        Plan::factory(20)->create();
        Category::factory(20)->create();
        Role::factory(20)->create();
        Business::factory(20)->create();
        User::factory(20)->create();
        Service::factory(20)->create();
        Agenda::factory(20)->create();
        Appointment::factory(20)->create();
        Customization::factory(20)->create();

    }
}
