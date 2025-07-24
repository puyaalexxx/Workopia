<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class RandomJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 10 job listings using the factory
        Job::factory()->count(10)->create();

        echo "Jobs created successfully!";
    }
}
