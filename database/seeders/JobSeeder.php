<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load job listings data
        $jobListings = include database_path('seeders/data/job_listings.php');

        // Get the ID of the user created by TestUserSeeder
        $testUserId = User::where('email', 'test@test.com')->value('id');

        // Get all other user IDs
        $userIds = User::where('email', '!=', 'test@test.com')->pluck('id')->toArray();

        foreach ($jobListings as $index => &$listing) {
            if ($index < 2) {
                // Assign the first two job listings to the test user
                $listing['user_id'] = $testUserId;
            } else {
                // Assign the rest to random users
                $listing['user_id'] = $userIds[array_rand($userIds)];
            }
            // Add timestamps
            $listing['created_at'] = now();
            $listing['updated_at'] = now();
        }

        // Insert job listings
        DB::table('job_listings')->insert($jobListings);
    }
}
