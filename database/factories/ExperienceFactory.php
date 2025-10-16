<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3, false);
        
        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'short_summary' => $this->faker->paragraph(),
            'body' => $this->faker->paragraphs(3, true),
            'inclusions' => [
                ['item' => $this->faker->sentence()],
                ['item' => $this->faker->sentence()],
                ['item' => $this->faker->sentence()],
            ],
            'duration_label' => $this->faker->randomElement(['2-3 hours', '4-5 hours', '6-7 hours', 'Half day', 'Full day']),
            'base_price' => $this->faker->randomFloat(2, 50, 300),
            'hero_image_path' => null,
            'gallery' => [],
            'is_published' => $this->faker->boolean(80), // 80% chance of being published
            'sort_order' => $this->faker->numberBetween(0, 10),
            'meta_title' => $title . ' | Experience Udawalawe',
            'meta_description' => $this->faker->sentence(),
        ];
    }
}
