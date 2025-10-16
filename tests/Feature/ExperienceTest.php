<?php

namespace Tests\Feature;

use App\Models\Experience;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExperienceTest extends TestCase
{
    use RefreshDatabase;

    public function test_experiences_index_page_loads(): void
    {
        $response = $this->get('/experiences');

        $response->assertStatus(200);
        $response->assertViewIs('experiences.index');
    }

    public function test_experiences_index_shows_published_experiences(): void
    {
        $publishedExperience = Experience::factory()->create([
            'title' => 'Published Experience',
            'is_published' => true,
        ]);

        $unpublishedExperience = Experience::factory()->create([
            'title' => 'Unpublished Experience',
            'is_published' => false,
        ]);

        $response = $this->get('/experiences');

        $response->assertStatus(200);
        $response->assertSee('Published Experience');
        $response->assertDontSee('Unpublished Experience');
    }

    public function test_published_experience_show_page_loads(): void
    {
        $experience = Experience::factory()->create([
            'title' => 'Test Experience',
            'slug' => 'test-experience',
            'is_published' => true,
        ]);

        $response = $this->get('/experiences/test-experience');

        $response->assertStatus(200);
        $response->assertViewIs('experiences.show');
        $response->assertSee('Test Experience');
    }

    public function test_unpublished_experience_show_returns_404(): void
    {
        $experience = Experience::factory()->create([
            'title' => 'Unpublished Experience',
            'slug' => 'unpublished-experience',
            'is_published' => false,
        ]);

        $response = $this->get('/experiences/unpublished-experience');

        $response->assertStatus(404);
    }

    public function test_nonexistent_experience_returns_404(): void
    {
        $response = $this->get('/experiences/nonexistent-experience');

        $response->assertStatus(404);
    }

    public function test_experiences_are_ordered_by_sort_order(): void
    {
        $secondExperience = Experience::factory()->create([
            'title' => 'Second Experience',
            'sort_order' => 2,
            'is_published' => true,
        ]);

        $firstExperience = Experience::factory()->create([
            'title' => 'First Experience',
            'sort_order' => 1,
            'is_published' => true,
        ]);

        $response = $this->get('/experiences');

        $response->assertStatus(200);
        
        // Check that the first experience appears before the second in the response
        $content = $response->getContent();
        $firstPos = strpos($content, 'First Experience');
        $secondPos = strpos($content, 'Second Experience');
        
        $this->assertLessThan($secondPos, $firstPos);
    }
}
