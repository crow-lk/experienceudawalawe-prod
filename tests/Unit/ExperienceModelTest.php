<?php

namespace Tests\Unit;

use App\Models\Experience;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExperienceModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_slug_is_generated_on_create(): void
    {
        $experience = Experience::create([
            'title' => 'Test Experience Title',
            'is_published' => true,
        ]);

        $this->assertEquals('test-experience-title', $experience->slug);
    }

    public function test_published_scope_returns_only_published_experiences(): void
    {
        $publishedExperience = Experience::factory()->create(['is_published' => true]);
        $unpublishedExperience = Experience::factory()->create(['is_published' => false]);

        $publishedExperiences = Experience::published()->get();

        $this->assertCount(1, $publishedExperiences);
        $this->assertTrue($publishedExperiences->contains($publishedExperience));
        $this->assertFalse($publishedExperiences->contains($unpublishedExperience));
    }

    public function test_ordered_scope_sorts_by_sort_order_then_created_at(): void
    {
        $third = Experience::factory()->create(['sort_order' => 3, 'created_at' => now()->subDays(1)]);
        $first = Experience::factory()->create(['sort_order' => 1, 'created_at' => now()->subDays(2)]);
        $second = Experience::factory()->create(['sort_order' => 2, 'created_at' => now()]);

        $orderedExperiences = Experience::ordered()->get();

        $this->assertEquals($first->id, $orderedExperiences->first()->id);
        $this->assertEquals($second->id, $orderedExperiences->skip(1)->first()->id);
        $this->assertEquals($third->id, $orderedExperiences->last()->id);
    }

    public function test_inclusions_are_cast_to_array(): void
    {
        $experience = Experience::factory()->create([
            'inclusions' => [
                ['item' => 'First inclusion'],
                ['item' => 'Second inclusion'],
            ]
        ]);

        $this->assertIsArray($experience->inclusions);
        $this->assertCount(2, $experience->inclusions);
        $this->assertEquals('First inclusion', $experience->inclusions[0]['item']);
    }

    public function test_gallery_is_cast_to_array(): void
    {
        $experience = Experience::factory()->create([
            'gallery' => ['image1.jpg', 'image2.jpg', 'image3.jpg']
        ]);

        $this->assertIsArray($experience->gallery);
        $this->assertCount(3, $experience->gallery);
        $this->assertEquals('image1.jpg', $experience->gallery[0]);
    }

    public function test_route_key_is_slug(): void
    {
        $experience = new Experience();
        
        $this->assertEquals('slug', $experience->getRouteKeyName());
    }

    public function test_base_price_is_cast_to_decimal(): void
    {
        $experience = Experience::factory()->create([
            'base_price' => 99.99
        ]);

        $this->assertEquals('99.99', $experience->base_price);
        $this->assertIsString($experience->base_price);
    }
}
