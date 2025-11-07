<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Generated from SQLite data
     */
    public function run(): void
    {
        // Create SQLite connection
        $sqliteConfig = [
            'driver' => 'sqlite',
            'database' => database_path('database.sqlite'),
            'prefix' => '',
            'foreign_key_constraints' => true,
        ];

        config(['database.connections.sqlite_source' => $sqliteConfig]);

        try {
            // Test SQLite connection
            DB::connection('sqlite_source')->select('SELECT 1');
            $this->command->info('✅ SQLite connection successful');

            // Disable foreign key checks for MySQL
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            // Get experiences data from SQLite
            $experiences = DB::connection('sqlite_source')->table('experiences')->get();
            
            $this->command->info("📊 Found {$experiences->count()} experiences in SQLite");

            // Define the columns we want to migrate
            $columns = [
                'id', 'title', 'slug', 'short_summary', 'body', 'inclusions', 'duration_label',
                'base_price', 'hero_image_path', 'gallery', 'is_published', 'sort_order',
                'meta_title', 'meta_description', 'created_at', 'updated_at', 'deleted_at',
                'subtitle', 'type', 'group_size', 'difficulty_level', 'what_to_wear',
                'exclusions', 'accessibility_info', 'booking_policy', 'good_to_know',
                'traveler_qa', 'show_price_publicly', 'experience_type_id'
            ];

            // Process experiences in chunks
            $experienceData = [];
            foreach ($experiences as $experience) {
                $experience = (array) $experience;
                
                // Filter only the columns that exist in our schema
                $filteredRecord = [];
                foreach ($columns as $column) {
                    if (array_key_exists($column, $experience)) {
                        $value = $experience[$column];
                        
                        // Handle special cases
                        if ($value === null) {
                            $filteredRecord[$column] = null;
                        } elseif (in_array($column, ['created_at', 'updated_at', 'deleted_at']) && $value) {
                            $filteredRecord[$column] = $value;
                        } elseif (is_numeric($value)) {
                            $filteredRecord[$column] = $value;
                        } elseif (is_bool($value) || $value === '1' || $value === '0') {
                            $filteredRecord[$column] = (bool) $value;
                        } else {
                            $filteredRecord[$column] = $value;
                        }
                    }
                }
                
                $experienceData[] = $filteredRecord;
            }

            // Insert or update experiences
            foreach ($experienceData as $experience) {
                DB::table('experiences')->updateOrInsert(
                    ['id' => $experience['id']], // Condition
                    $experience // Data to insert or update
                );
            }

            // Re-enable foreign key checks
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            $this->command->info('✅ Seeded ' . count($experienceData) . ' experiences');

        } catch (\Exception $e) {
            $this->command->error('❌ Failed to seed experiences: ' . $e->getMessage());
            throw $e;
        }
    }
}