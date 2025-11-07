<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Generated from SQLite data
     */
    public function run(): void
    {
        // Disable foreign key checks for MySQL
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Insert user data
        $userData = [
            [
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'superadmin@experienceudawalawe.com',
                'email_verified_at' => null,
                'password' => '$2y$12$NFGI2/czMhxr9e14Nq9Yve3x6wWB/1U3WvRIeKO6699p5k/mNKXrm',
                'remember_token' => 'cSszNEjzYIF3BOS3zV8dVIdx8qpI0A7BLedaDCHNDB9uHyNYd0ZlJCUn1Mtr',
                'created_at' => '2025-10-16 05:00:32',
                'updated_at' => '2025-10-16 05:00:32',
                'profile_photo_path' => null,
            ],
        ];

        foreach ($userData as $user) {
            DB::table('users')->updateOrInsert(['email' => $user['email']], $user);
        }

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->command->info('✅ Seeded ' . count($userData) . ' users');
    }
}