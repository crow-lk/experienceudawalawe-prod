<?php

namespace Tests\Feature;

use App\Models\Experience;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('welcome');
        $response->assertViewHas('experiences');
    }

    public function test_home_page_shows_published_experiences_in_dropdown(): void
    {
        // Create published experiences
        $publishedExperience1 = Experience::factory()->create([
            'title' => 'Cooking Experience',
            'slug' => 'cooking-experience',
            'is_published' => true,
            'sort_order' => 1,
        ]);

        $publishedExperience2 = Experience::factory()->create([
            'title' => 'Wildlife Safari',
            'slug' => 'wildlife-safari',
            'is_published' => true,
            'sort_order' => 2,
        ]);

        // Create unpublished experience (should not appear)
        $unpublishedExperience = Experience::factory()->create([
            'title' => 'Hidden Experience',
            'slug' => 'hidden-experience',
            'is_published' => false,
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        
        // Check that published experiences appear as options
        $response->assertSee('Cooking Experience');
        $response->assertSee('Wildlife Safari');
        $response->assertSee('value="cooking-experience"', false);
        $response->assertSee('value="wildlife-safari"', false);
        
        // Check that unpublished experience does NOT appear
        $response->assertDontSee('Hidden Experience');
        $response->assertDontSee('value="hidden-experience"', false);
    }

    public function test_home_page_orders_experiences_by_sort_order(): void
    {
        // Create experiences with different sort orders
        $thirdExperience = Experience::factory()->create([
            'title' => 'Third Experience',
            'is_published' => true,
            'sort_order' => 3,
        ]);

        $firstExperience = Experience::factory()->create([
            'title' => 'First Experience',
            'is_published' => true,
            'sort_order' => 1,
        ]);

        $secondExperience = Experience::factory()->create([
            'title' => 'Second Experience',
            'is_published' => true,
            'sort_order' => 2,
        ]);

        $response = $this->get('/');
        $content = $response->getContent();

        // Check that experiences appear in the correct order
        $firstPos = strpos($content, 'First Experience');
        $secondPos = strpos($content, 'Second Experience');
        $thirdPos = strpos($content, 'Third Experience');

        $this->assertLessThan($secondPos, $firstPos);
        $this->assertLessThan($thirdPos, $secondPos);
    }

    public function test_home_page_works_with_no_experiences(): void
    {
        // No experiences created
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('welcome');
        
        // Should still show the default "Select an experience" option
        $response->assertSee('Select an experience');
    }
}