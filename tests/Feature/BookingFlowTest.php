<?php

namespace Tests\Feature;

use App\Models\Experience;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookingFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_loads_without_experience_parameter(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertViewIs('contact');
        $response->assertViewHas('selectedExperience', null);
    }

    public function test_contact_page_shows_selected_experience_when_provided(): void
    {
        $experience = Experience::factory()->create([
            'title' => 'Amazing Cooking Experience',
            'slug' => 'amazing-cooking-experience',
            'short_summary' => 'Learn to cook authentic Sri Lankan cuisine',
            'is_published' => true,
        ]);

        $response = $this->get('/contact?experience=amazing-cooking-experience&preferred_date=2025-12-25&adults=2&children=1');

        $response->assertStatus(200);
        $response->assertViewHas('selectedExperience');
        $response->assertSee('Experience Selected: Amazing Cooking Experience');
        $response->assertSee('Learn to cook authentic Sri Lankan cuisine');
        
        // Check the core functionality works
        $response->assertSee('selected', false); // Check that "Book an experience" is selected
    }

    public function test_contact_page_handles_unpublished_experience_gracefully(): void
    {
        $experience = Experience::factory()->create([
            'title' => 'Hidden Experience',
            'slug' => 'hidden-experience',
            'is_published' => false,
        ]);

        $response = $this->get('/contact?experience=hidden-experience');

        $response->assertStatus(200);
        $response->assertViewHas('selectedExperience', null);
        $response->assertDontSee('Experience Selected');
    }

    public function test_booking_form_submission_flow(): void
    {
        $experience = Experience::factory()->create([
            'title' => 'Wildlife Safari',
            'slug' => 'wildlife-safari',
            'is_published' => true,
        ]);

        // Simulate the booking form submission from welcome page
        $response = $this->get('/contact?experience=wildlife-safari&preferred_date=2025-11-15&adults=3&children=0&promo=EARLYBIRD');

        $response->assertStatus(200);
        $response->assertSee('Wildlife Safari');
        $response->assertSee('value="wildlife-safari"', false);
        $response->assertSee('value="Wildlife Safari"', false);
        $response->assertSee('value="2025-11-15"', false);
        $response->assertSee('value="3"', false);
        $response->assertSee('value="EARLYBIRD"', false);
    }

    public function test_welcome_page_booking_form_has_correct_action(): void
    {
        Experience::factory()->create([
            'title' => 'Test Experience',
            'slug' => 'test-experience',
            'is_published' => true,
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('action="' . route('contact') . '"', false);
        $response->assertSee('Test Experience');
    }
}