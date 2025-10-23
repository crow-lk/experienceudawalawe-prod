<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExperienceType>
 */
class ExperienceTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->words(2, true),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->sentence(),
            'icon' => $this->faker->randomElement([
                'heroicon-o-map',
                'heroicon-o-cake',
                'heroicon-o-home',
                'heroicon-o-building-library',
                'heroicon-o-users',
                'heroicon-o-hand-raised',
                'heroicon-o-gift',
                'heroicon-o-star',
                'heroicon-o-leaf',
                'heroicon-o-sun',
            ]),
            'is_active' => $this->faker->boolean(90), // 90% chance of being active
            'sort_order' => $this->faker->numberBetween(0, 100),
        ];
    }
}
