<?php

namespace Database\Seeders;

use App\Models\ExperienceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExperienceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experienceTypes = [
            [
                'name' => 'Culinary',
                'description' => 'Food-focused experiences including cooking, tasting, and culinary traditions',
                'icon' => 'heroicon-o-cake',
                'sort_order' => 1,
            ],
            [
                'name' => 'Culinary / Dining',
                'description' => 'Restaurant and dining experiences with traditional meals',
                'icon' => 'heroicon-o-home',
                'sort_order' => 2,
            ],
            [
                'name' => 'Cultural',
                'description' => 'Cultural immersion and traditional practices',
                'icon' => 'heroicon-o-building-library',
                'sort_order' => 3,
            ],
            [
                'name' => 'Cultural & Immersive Experience',
                'description' => 'Deep cultural immersion with hands-on participation',
                'icon' => 'heroicon-o-users',
                'sort_order' => 4,
            ],
            [
                'name' => 'Cultural & Hands-On Experience',
                'description' => 'Interactive cultural activities with direct participation',
                'icon' => 'heroicon-o-hand-raised',
                'sort_order' => 5,
            ],
            [
                'name' => 'Cultural & Heritage Experience',
                'description' => 'Traditional heritage and historical cultural practices',
                'icon' => 'heroicon-o-building-office-2',
                'sort_order' => 6,
            ],
            [
                'name' => 'Cultural & Culinary Experience',
                'description' => 'Combination of cultural learning and food experiences',
                'icon' => 'heroicon-o-gift',
                'sort_order' => 7,
            ],
            [
                'name' => 'Cultural & Craft Heritage Experience',
                'description' => 'Traditional crafts and artisan skills',
                'icon' => 'heroicon-o-wrench-screwdriver',
                'sort_order' => 8,
            ],
            [
                'name' => 'Cultural & Active Experience',
                'description' => 'Cultural activities combined with physical participation',
                'icon' => 'heroicon-o-bolt',
                'sort_order' => 9,
            ],
            [
                'name' => 'Cultural & Outdoor Experience',
                'description' => 'Cultural experiences in outdoor natural settings',
                'icon' => 'heroicon-o-sun',
                'sort_order' => 10,
            ],
            [
                'name' => 'Cultural & Nature Experience',
                'description' => 'Cultural activities integrated with nature exploration',
                'icon' => 'heroicon-o-leaf',
                'sort_order' => 11,
            ],
            [
                'name' => 'Wildlife & Conservation Experience',
                'description' => 'Wildlife observation and conservation education',
                'icon' => 'heroicon-o-heart',
                'sort_order' => 12,
            ],
            [
                'name' => 'Wildlife & Nature Experience',
                'description' => 'Nature exploration and wildlife encounters',
                'icon' => 'heroicon-o-eye',
                'sort_order' => 13,
            ],
            [
                'name' => 'Sustainability & Conservation Experience',
                'description' => 'Environmental education and sustainable practices',
                'icon' => 'heroicon-o-globe-asia-australia',
                'sort_order' => 14,
            ],
            [
                'name' => 'Culinary / Signature Experience',
                'description' => 'Premium and exclusive culinary experiences',
                'icon' => 'heroicon-o-star',
                'sort_order' => 15,
            ],
        ];

        foreach ($experienceTypes as $type) {
            ExperienceType::create([
                'name' => $type['name'],
                'slug' => Str::slug($type['name']),
                'description' => $type['description'],
                'icon' => $type['icon'],
                'is_active' => true,
                'sort_order' => $type['sort_order'],
            ]);
        }
    }
}
