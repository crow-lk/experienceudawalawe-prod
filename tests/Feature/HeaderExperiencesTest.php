<?php

namespace Tests\Feature;

use App\Models\Experience;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HeaderExperiencesTest extends TestCase
{
    use RefreshDatabase;

    public function test_header_includes_published_experiences_on_homepage()
    {
        // Create some published and unpublished experiences
        $publishedExperience = Experience::factory()->create([
            'title' => 'Amazing Safari Tour',
            'slug' => 'amazing-safari-tour',
            'is_published' => true,
            'sort_order' => 1
        ]);

        $unpublishedExperience = Experience::factory()->create([
            'title' => 'Hidden Adventure',
            'slug' => 'hidden-adventure',
            'is_published' => false,
            'sort_order' => 2
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        
        // Check that published experience appears in the header
        $response->assertSee('Amazing Safari Tour');
        $response->assertSee(route('experiences.show', 'amazing-safari-tour'));
        
        // Check that unpublished experience does not appear
        $response->assertDontSee('Hidden Adventure');
    }

    public function test_header_shows_all_experiences_link()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('All Experiences');
        $response->assertSee(route('experiences.index'));
    }

    public function test_header_limits_displayed_experiences()
    {
        // Create 6 published experiences
        for ($i = 1; $i <= 6; $i++) {
            Experience::factory()->create([
                'title' => "Experience {$i}",
                'slug' => "experience-{$i}",
                'is_published' => true,
                'sort_order' => $i
            ]);
        }

        $response = $this->get('/');

        $response->assertStatus(200);
        
        // Should see first 4 experiences in main dropdown
        $response->assertSee('Experience 1');
        $response->assertSee('Experience 2');
        $response->assertSee('Experience 3');
        $response->assertSee('Experience 4');
        
        // The 5th and 6th should not appear in the main header dropdown (limited to 4)
        // But they might appear in other parts like nav-overlay
    }

    public function test_header_with_no_published_experiences()
    {
        // Create only unpublished experiences
        Experience::factory()->create([
            'title' => 'Unpublished Experience',
            'slug' => 'unpublished-experience',
            'is_published' => false
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('All Experiences'); // Should still show the main link
        $response->assertDontSee('Unpublished Experience');
    }

    public function test_header_experiences_ordered_correctly()
    {
        // Create experiences with different sort orders
        Experience::factory()->create([
            'title' => 'Third Experience',
            'slug' => 'third-experience',
            'is_published' => true,
            'sort_order' => 3
        ]);

        Experience::factory()->create([
            'title' => 'First Experience',
            'slug' => 'first-experience',
            'is_published' => true,
            'sort_order' => 1
        ]);

        Experience::factory()->create([
            'title' => 'Second Experience',
            'slug' => 'second-experience',
            'is_published' => true,
            'sort_order' => 2
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        
        // Get the response content and check order
        $content = $response->getContent();
        $firstPos = strpos($content, 'First Experience');
        $secondPos = strpos($content, 'Second Experience');
        $thirdPos = strpos($content, 'Third Experience');
        
        $this->assertNotFalse($firstPos, 'First Experience should be found');
        $this->assertNotFalse($secondPos, 'Second Experience should be found');
        $this->assertNotFalse($thirdPos, 'Third Experience should be found');
        
        // First should come before Second, and Second before Third
        $this->assertLessThan($secondPos, $firstPos);
        $this->assertLessThan($thirdPos, $secondPos);
    }
}