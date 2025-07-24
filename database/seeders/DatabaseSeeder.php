<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Truncate tables
        DB::table('job_listings')->truncate();
        DB::table('users')->truncate();

        $this->call(RandomUserSeeder::class);
        $this->call(JobSeeder::class);
    }
}
