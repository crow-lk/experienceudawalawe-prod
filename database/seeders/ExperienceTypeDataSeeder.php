<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceTypeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Generated from SQLite data
     */
    public function run(): void
    {
        // Disable foreign key checks for MySQL
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Experience types data from SQLite
        $experienceTypes = [
            [
                'id' => 1,
                'name' => 'Culture & Cuisine',
                'slug' => 'culture-cuisine',
                'description' => 'Explore the rich traditions, diverse cuisines, and cultural heritage that define each community. This section celebrates authentic recipes, traditional festivals, and the unique lifestyles that bring people together through food and culture.',
                'icon' => 'heroicon-globe-alt',
                'is_active' => 1,
                'sort_order' => 1,
                'created_at' => '2025-10-23 07:19:53',
                'updated_at' => '2025-10-23 07:19:53',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'Culinary',
                'slug' => 'culinary',
                'description' => 'Dive into the art of cooking, exploring global flavors, authentic recipes, and modern gastronomy. This section celebrates the creativity, techniques, and passion behind exceptional food experiences.',
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-23 07:29:59',
                'updated_at' => '2025-10-23 07:29:59',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Culinary / Dining',
                'slug' => 'culinary-dining',
                'description' => 'Experience the joy of food through diverse dining cultures, authentic cuisines, and gourmet traditions. This category highlights the art of cooking, sharing meals, and exploring flavors that connect people around the world.',
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-23 15:22:40',
                'updated_at' => '2025-10-23 15:22:40',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'name' => 'Culinary / Culture',
                'slug' => 'culinary-culture',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 03:59:56',
                'updated_at' => '2025-10-24 03:59:56',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'name' => 'Culinary / Signature Experience',
                'slug' => 'culinary-signature-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 04:32:32',
                'updated_at' => '2025-10-24 04:32:32',
                'deleted_at' => null,
            ],
            [
                'id' => 6,
                'name' => 'Cultural & Immersive Experience',
                'slug' => 'cultural-immersive-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 04:41:28',
                'updated_at' => '2025-10-24 04:41:28',
                'deleted_at' => null,
            ],
            [
                'id' => 7,
                'name' => 'Cultural & Hands-On Experience',
                'slug' => 'cultural-hands-on-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 04:51:41',
                'updated_at' => '2025-10-24 04:51:41',
                'deleted_at' => null,
            ],
            [
                'id' => 9,
                'name' => 'Cultural & Heritage Experience',
                'slug' => 'cultural-heritage-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 05:10:38',
                'updated_at' => '2025-10-24 05:10:38',
                'deleted_at' => null,
            ],
            [
                'id' => 10,
                'name' => 'Cultural & Active Experience',
                'slug' => 'cultural-active-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 09:01:19',
                'updated_at' => '2025-10-24 09:01:19',
                'deleted_at' => null,
            ],
            [
                'id' => 11,
                'name' => 'Wildlife & Conservation Experience',
                'slug' => 'wildlife-conservation-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 09:08:42',
                'updated_at' => '2025-10-24 09:08:42',
                'deleted_at' => null,
            ],
            [
                'id' => 12,
                'name' => 'Cultural & Outdoor Experience',
                'slug' => 'cultural-outdoor-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 09:28:38',
                'updated_at' => '2025-10-24 09:28:38',
                'deleted_at' => null,
            ],
            [
                'id' => 13,
                'name' => 'Wildlife & Nature Experience',
                'slug' => 'wildlife-nature-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 09:32:03',
                'updated_at' => '2025-10-24 09:32:03',
                'deleted_at' => null,
            ],
            [
                'id' => 14,
                'name' => 'Wildlife & Sustainability Experience',
                'slug' => 'wildlife-sustainability-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 09:39:20',
                'updated_at' => '2025-10-24 09:39:20',
                'deleted_at' => null,
            ],
            [
                'id' => 15,
                'name' => 'Sustainability & Conservation Experience',
                'slug' => 'sustainability-conservation-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 09:48:55',
                'updated_at' => '2025-10-24 09:48:55',
                'deleted_at' => null,
            ],
            [
                'id' => 16,
                'name' => 'Cultural & Nature Experience',
                'slug' => 'cultural-nature-experience',
                'description' => null,
                'icon' => null,
                'is_active' => 1,
                'sort_order' => 0,
                'created_at' => '2025-10-24 10:34:48',
                'updated_at' => '2025-10-24 10:34:48',
                'deleted_at' => null,
            ],
        ];

        foreach ($experienceTypes as $experienceType) {
            DB::table('experience_types')->updateOrInsert(
                ['id' => $experienceType['id']], // Condition
                $experienceType // Data to insert or update
            );
        }

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->command->info('✅ Seeded ' . count($experienceTypes) . ' experience types');
    }
}