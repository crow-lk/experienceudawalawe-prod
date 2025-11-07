<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Comment out the default factory user to avoid conflicts
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // SQLite data seeders (for production deployment)
            UserDataSeeder::class,
            ExperienceTypeDataSeeder::class,
            ExperienceDataSeeder::class,
            
            // Original seeders (for development)
            // ExperienceSeeder::class,
        ]);
    }
}
