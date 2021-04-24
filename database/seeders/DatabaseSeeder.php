<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(hardware::class);
        $this->call(hardware_type::class);
        $this->call(software::class);
        $this->call(software_software::class);
        $this->call(installed_software::class);
        $this->call(problem_type::class);
        $this->call(problem::class);
        $this->call(personell::class);
        $this->call(problem_form::class);
        $this->call(assigned_problems::class);
        $this->call(holidays::class);
    }
}
