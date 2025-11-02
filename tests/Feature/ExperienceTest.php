<?php

namespace Tests\Feature;

use App\Models\Experience;
use App\Models\ExperienceType;
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

    public function test_experiences_can_be_filtered_by_experience_type(): void
    {
        $wildlifeType = ExperienceType::factory()->create([
            'name' => 'Wildlife',
            'slug' => 'wildlife',
            'is_active' => true,
        ]);

        $culinaryType = ExperienceType::factory()->create([
            'name' => 'Culinary',
            'slug' => 'culinary',
            'is_active' => true,
        ]);

        Experience::factory()->create([
            'title' => 'Wildlife Safari',
            'is_published' => true,
            'experience_type_id' => $wildlifeType->id,
        ]);

        Experience::factory()->create([
            'title' => 'Cooking Class',
            'is_published' => true,
            'experience_type_id' => $culinaryType->id,
        ]);

        $this->assertEquals(
            $wildlifeType->id,
            Experience::where('title', 'Wildlife Safari')->first()->experience_type_id
        );

        $this->assertEquals(
            $culinaryType->id,
            Experience::where('title', 'Cooking Class')->first()->experience_type_id
        );

        $response = $this->get(route('experiences.index', ['type' => $wildlifeType->slug]));

        $response->assertStatus(200);

        $this->assertEquals(
            ['Wildlife Safari'],
            $response->viewData('experiences')->getCollection()->pluck('title')->all()
        );

        $response->assertSee('Wildlife Safari');
    }

    public function test_filtering_uses_type_name_when_relationship_missing(): void
    {
        $culturalType = ExperienceType::factory()->create([
            'name' => 'Cultural Immersion',
            'slug' => 'cultural-immersion',
            'is_active' => true,
        ]);

        Experience::factory()->create([
            'title' => 'Village Storytelling',
            'type' => 'Cultural Immersion',
            'experience_type_id' => null,
            'is_published' => true,
        ]);

        Experience::factory()->create([
            'title' => 'Different Experience',
            'type' => 'Something Else',
            'experience_type_id' => null,
            'is_published' => true,
        ]);

        $response = $this->get(route('experiences.index', ['type' => $culturalType->slug]));

        $response->assertStatus(200);

        $this->assertEquals(
            ['Village Storytelling'],
            $response->viewData('experiences')->getCollection()->pluck('title')->all()
        );
    }
}
