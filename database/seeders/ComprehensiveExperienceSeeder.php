<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComprehensiveExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing experiences
        Experience::truncate();

        // Define all experiences from the experience.txt file with comprehensive details
        $experiences = [
            [
                'title' => 'Traditional Sri Lankan Cooking Experience in Udawalawe',
                'subtitle' => 'Taste, Tales & Tradition',
                'type' => 'Culinary',
                'slug' => 'traditional-cooking-experience',
                'short_summary' => 'Harvest fresh herbs, cook over firewood, and share a traditional meal with village hosts in Udawalawe.',
                'body' => 'The day begins in an organic garden, where baskets fill with fresh herbs, vegetables, and spices still warm from the sun. Guided by village hosts, you take only what is needed for the meal — a small lesson in living lightly with the land.

In the kitchen, tradition comes alive. You\'ll husk coconuts, grind spices by hand, and learn the quiet rhythm of cooking over a wood fire. Dishes take shape slowly: curries rich with flavor, sambols full of color, and sweet treats prepared with the care of generations.

This experience is more than learning recipes. It is a glimpse into a way of life where food, family, and community are inseparable. Each recipe holding memory as well as flavor. By joining, you support women-led enterprises and zero-waste practices that keep these traditions alive — an experience of authentic roots and living stories that travels home with you long after the meal is shared.',
                'duration_label' => '2 hours',
                'group_size' => '2–8 guests',
                'difficulty_level' => 'Easy',
                'base_price' => 75.00,
                'inclusions' => [
                    ['item' => 'Transport'],
                    ['item' => 'Ingredients'],
                    ['item' => 'Cooking session'],
                    ['item' => 'Lunch/dinner'],
                    ['item' => 'Recipe booklet']
                ],
                'what_to_wear' => 'Light clothing, comfortable shoes',
                'exclusions' => [
                    ['item' => 'Alcohol'],
                    ['item' => 'Translator (optional)']
                ],
                'accessibility_info' => 'Low seating, accessible toilet',
                'booking_policy' => '48-hour advance notice required',
                'good_to_know' => 'Expect laughter, spice, and the slow rhythm of cooking as it\'s been done for generations. What you carry home is not just a recipe, but a memory shaped by people and place.',
                'traveler_qa' => [
                    ['question' => 'Is this activity safe?', 'answer' => 'Yes, it\'s family-friendly and guided throughout.'],
                    ['question' => 'What\'s included?', 'answer' => 'Transport, ingredients, cooking session, meal, recipe booklet.'],
                    ['question' => 'How long does it last?', 'answer' => 'About 3.5 hours.'],
                    ['question' => 'How is it sustainable?', 'answer' => 'Women-led, zero-waste, organic produce.'],
                    ['question' => 'What should I bring?', 'answer' => 'Comfortable clothes, closed shoes, and an appetite for spice.']
                ],
                'is_published' => true,
                'sort_order' => 1,
                'meta_title' => 'Traditional Cooking Experience | Udawalawe Village Life',
                'meta_description' => 'Learn traditional Sri Lankan cooking in Udawalawe. Harvest herbs, cook over firewood, and share a meal with village hosts.',
            ],
            [
                'title' => 'Sri Lankan Lunch in Udawalawe',
                'subtitle' => 'Flavors, Freshness & Family',
                'type' => 'Culinary / Dining',
                'slug' => 'sri-lankan-lunch',
                'short_summary' => 'Enjoy a freshly prepared Sri Lankan lunch in Udawalawe, crafted with local produce and heritage recipes passed down through generations.',
                'body' => 'Midday in Udawalawe carries its own rhythm. While the sun rests high above the plains, you sit down to a meal that feels as rooted as the land itself. Every dish is prepared using fresh ingredients from our organic gardens and nearby farms, where care for the soil and community go hand in hand.

Each dish carries its own story: a curry layered with spice, a sambol bright with chili and lime, a crispy fritter fried moments before it reaches your plate. It is food that is meant to be shared, served with warmth by hosts who treat every guest as part of their extended family.

More than a meal, this lunch is a glimpse into daily life in traditional Sri Lanka — a living story of flavors and traditions, and a reflection of community life, care for the soil, and rhythms that shape each day.',
                'duration_label' => '1 hour',
                'group_size' => 'Flexible (individuals to large groups)',
                'difficulty_level' => 'Easy',
                'base_price' => 25.00,
                'inclusions' => [
                    ['item' => 'Full Sri Lankan lunch with rice'],
                    ['item' => '12-15 curry varieties'],
                    ['item' => 'Traditional sambols and accompaniments'],
                    ['item' => 'Water']
                ],
                'what_to_wear' => 'Casual, comfortable clothing',
                'exclusions' => [
                    ['item' => 'Alcohol'],
                    ['item' => 'Soft drinks (available separately)']
                ],
                'accessibility_info' => 'Wheelchair-accessible seating and restrooms',
                'booking_policy' => 'Walk-in subject to availability; advance booking recommended',
                'good_to_know' => 'Meals are served in traditional style, with multiple curries designed to be tasted together. Expect a balance of spice, freshness, and variety — a dining rhythm that reflects how Sri Lankans eat every day.',
                'traveler_qa' => [
                    ['question' => 'Is the lunch vegetarian-friendly?', 'answer' => 'Yes, most dishes are plant-based, with optional local proteins.'],
                    ['question' => 'What\'s included?', 'answer' => 'A full Sri Lankan lunch with rice, 12-15 varieties, sambols, and accompaniments.'],
                    ['question' => 'How long does it take?', 'answer' => 'Around 1 hour.'],
                    ['question' => 'Where is it served?', 'answer' => 'At Ceylon 1850, our village-inspired dining space.'],
                    ['question' => 'Is it sustainable?', 'answer' => 'Yes, meals use seasonal produce sourced locally.']
                ],
                'is_published' => true,
                'sort_order' => 2,
                'meta_title' => 'Authentic Sri Lankan Lunch | Ceylon 1850 Udawalawe',
                'meta_description' => 'Savor traditional Sri Lankan lunch with authentic flavors, fresh ingredients, and heritage recipes at Ceylon 1850.',
            ],
            [
                'title' => 'Sri Lankan Dinner in Udawalawe',
                'subtitle' => 'Lanterns, Legends & Local Fare',
                'type' => 'Culinary / Dining',
                'slug' => 'sri-lankan-dinner',
                'short_summary' => 'As night falls in Udawalawe, gather for a traditional Sri Lankan dinner — heritage recipes served in the calm glow of lantern light.',
                'body' => 'Evenings in Udawalawe carry a different rhythm. As lanterns glow and the air cools, dinner unfolds slowly — a gathering marked by conversation, heritage flavors, and the quiet pulse of the night. This is an evening of gathering — a chance to pause, share stories, and savor food prepared with care.

Here, dining becomes part of the night\'s rhythm. Each bite is tied to authentic roots and living stories, a reflection of the spirit of community and care for the land, traditions sustained under starlit skies of Udawalawe.',
                'duration_label' => '1–1.5 hours',
                'group_size' => 'Flexible (individuals to groups)',
                'difficulty_level' => 'Easy',
                'base_price' => 30.00,
                'inclusions' => [
                    ['item' => 'Full Sri Lankan dinner with rice'],
                    ['item' => '12-15 curry varieties'],
                    ['item' => 'Traditional sambols and accompaniments'],
                    ['item' => 'Water']
                ],
                'what_to_wear' => 'Casual, comfortable clothing',
                'exclusions' => [
                    ['item' => 'Alcohol'],
                    ['item' => 'Soft drinks (available separately)']
                ],
                'accessibility_info' => 'Wheelchair-accessible seating and restrooms',
                'booking_policy' => 'Walk-in subject to availability; advance booking recommended',
                'good_to_know' => 'Dinner is served in traditional Sri Lankan style — several curries designed to be tasted together. Expect an evening that feels both intimate and communal, shaped as much by the calm of the night as by the richness of the food.',
                'traveler_qa' => [
                    ['question' => 'Is dinner vegetarian-friendly?', 'answer' => 'Yes, most dishes are plant-based, with optional proteins available.'],
                    ['question' => 'What\'s included?', 'answer' => 'A full Sri Lankan dinner with rice, 12-15 varieties, sambols, and accompaniments.'],
                    ['question' => 'How long does it take?', 'answer' => 'About 1–1.5 hours.'],
                    ['question' => 'Where is it served?', 'answer' => 'At Ceylon 1850, our heritage-inspired dining space.'],
                    ['question' => 'Is it sustainable?', 'answer' => 'Yes, ingredients are sourced from local farmers and our organic garden.']
                ],
                'is_published' => true,
                'sort_order' => 3,
                'meta_title' => 'Traditional Sri Lankan Dinner | Heritage Dining Udawalawe',
                'meta_description' => 'Experience lantern-lit Sri Lankan dinner with authentic heritage recipes and traditional flavors in Udawalawe.',
            ],
            [
                'title' => 'Sri Lankan Snacks in Udawalawe',
                'subtitle' => 'Bites, Brews & Belonging',
                'type' => 'Culinary / Dining',
                'slug' => 'sri-lankan-snacks',
                'short_summary' => 'Pause for a plate of traditional Sri Lankan snacks in Udawalawe, prepared with fresh ingredients and shared in the warmth of a village setting.',
                'body' => 'In Udawalawe, even a simple snack carries the taste of tradition. Served in the open-air setting of Ceylon 1850, these small bites tell stories of everyday life — short eats fried crisp, sambol sandwiches layered with spice, and sweet treats made from coconut and jaggery.

This is not fast food, but food made to pause with. Snacks are prepared with seasonal ingredients from local farms, keeping the flavors fresh and the impact gentle on the land. It is a moment to sit back, sip a local tea, and enjoy the unhurried rhythm of village life.

Here, even light meals hold authentic roots and living stories — a reflection of community bonds, care for the soil, and the joy of sharing simple pleasures together.',
                'duration_label' => '45 minutes – 1 hour',
                'group_size' => 'Flexible (individuals to large groups)',
                'difficulty_level' => 'Easy',
                'base_price' => 15.00,
                'inclusions' => [
                    ['item' => 'Selection of Sri Lankan snacks'],
                    ['item' => 'Tea or herbal drink'],
                ],
                'what_to_wear' => 'Casual, comfortable clothing',
                'exclusions' => [
                    ['item' => 'Alcohol'],
                    ['item' => 'Bottled soft drinks']
                ],
                'accessibility_info' => 'Wheelchair-accessible seating and restrooms',
                'booking_policy' => 'Pre-Order Only | 24hrs Prior | Custom Orders Welcome',
                'good_to_know' => 'Sri Lankan "short eats" are more than light food — they are a part of daily social life, enjoyed with tea and conversation. Expect a casual, relaxed moment where flavor, community, and comfort come together.',
                'traveler_qa' => [
                    ['question' => 'What kinds of snacks are served?', 'answer' => 'A mix of savory and sweet Sri Lankan short eats, such as cutlets, vadai, coconut sweets, and sambol bites.'],
                    ['question' => 'Are vegetarian options available?', 'answer' => 'Yes, most snacks are plant-based, with occasional local proteins.'],
                    ['question' => 'How long does it take?', 'answer' => 'Around 45 minutes.'],
                    ['question' => 'Where is it served?', 'answer' => 'At Ceylon 1850, in a relaxed village-style space.'],
                    ['question' => 'Is it sustainable?', 'answer' => 'Yes, ingredients are seasonal and sourced from local farmers.']
                ],
                'is_published' => true,
                'sort_order' => 4,
                'meta_title' => 'Traditional Sri Lankan Snacks | Ceylon 1850 Short Eats',
                'meta_description' => 'Enjoy authentic Sri Lankan short eats and traditional snacks with tea in a relaxed village setting.',
            ],
        ];

        // Create experiences
        foreach ($experiences as $experienceData) {
            Experience::create($experienceData);
        }

        $this->command->info('Comprehensive Experience seeder completed! ' . count($experiences) . ' experiences have been created with full details.');
    }
}