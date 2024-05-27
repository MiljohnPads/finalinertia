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
        // Call CitizensSeeder to seed hardcoded data
        $this->call(CitezenSeeder::class);

        // You can call other seeders here if needed
    }
}
