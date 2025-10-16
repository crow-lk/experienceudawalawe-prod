<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                'title' => 'Village Experience',
                'slug' => 'village-experience',
                'short_summary' => 'Immerse yourself in authentic village life, meet local families, and discover traditional crafts passed down through generations.',
                'body' => 'Step into the heart of Udawalawe\'s village community and experience authentic Sri Lankan rural life. This immersive journey takes you beyond the tourist trail to connect with local families who have called this land home for generations.

Begin your day with a traditional welcome ceremony, sharing tea and homemade sweets with your host family. Learn about their daily routines, agricultural practices, and the deep connection they maintain with the land. Participate in seasonal activities such as rice planting, vegetable harvesting, or traditional fishing techniques.

Visit local artisans and craftspeople who continue age-old traditions. Watch skilled potters shape clay on ancient wheels, observe weavers creating intricate textiles, and learn about traditional construction techniques using natural materials.

The experience includes a communal meal prepared with ingredients grown on-site, giving you a true taste of village cuisine. Stories and folklore are shared as the sun sets, offering insights into the rich oral traditions that have shaped this community.

This experience directly supports the local economy and helps preserve traditional ways of life for future generations.',
                'inclusions' => [
                    ['item' => 'Welcome ceremony with traditional refreshments'],
                    ['item' => 'Guided village walk with local family'],
                    ['item' => 'Hands-on participation in seasonal activities'],
                    ['item' => 'Artisan demonstrations and craft experiences'],
                    ['item' => 'Traditional village-style lunch with host family'],
                    ['item' => 'Storytelling session and cultural exchange'],
                    ['item' => 'Professional guide and translator'],
                    ['item' => 'Community contribution and support fund donation']
                ],
                'duration_label' => '6-7 hours',
                'base_price' => 85.00,
                'is_published' => true,
                'sort_order' => 1,
                'meta_title' => 'Village Experience | Authentic Sri Lankan Rural Life',
                'meta_description' => 'Experience authentic village life in Udawalawe. Meet local families, participate in traditional activities, and discover rural Sri Lankan culture.',
            ],
            [
                'title' => 'Gem Mine Experience',
                'slug' => 'gem-mine-experience',
                'short_summary' => 'Discover the ancient art of gem mining in Sri Lanka\'s renowned gem fields, from traditional techniques to modern conservation practices.',
                'body' => 'Sri Lanka has been famous for its precious gemstones for over 2,000 years, and this unique experience offers you the opportunity to witness this ancient industry firsthand. Journey into the heart of the island\'s gem-bearing regions and learn about the traditional methods that have been passed down through generations.

Start with an educational session about Sri Lanka\'s geological history and the formation of precious stones. Learn to identify different types of gems including sapphires, rubies, and the famous Ceylon blue sapphire that has made the island world-renowned.

Visit an active gem mine where local miners demonstrate traditional extraction techniques. Observe the careful process of washing and sorting gem-bearing gravel, and try your hand at panning for gems under expert guidance. Learn about the patience and skill required for this ancient craft.

Meet with experienced gem cutters and polishers who transform rough stones into brilliant jewels. Watch demonstrations of traditional cutting techniques and understand how generations of knowledge contribute to Sri Lanka\'s reputation for exceptional gem quality.

The experience includes discussions about sustainable mining practices and how the industry supports local communities while preserving the environment for future generations.',
                'inclusions' => [
                    ['item' => 'Educational session on Sri Lankan gemstone history'],
                    ['item' => 'Visit to active traditional gem mine'],
                    ['item' => 'Hands-on gem panning experience'],
                    ['item' => 'Gem identification workshop'],
                    ['item' => 'Traditional cutting and polishing demonstrations'],
                    ['item' => 'Meeting with experienced gem miners and craftspeople'],
                    ['item' => 'Light refreshments and local snacks'],
                    ['item' => 'Small gemstone souvenir'],
                    ['item' => 'Professional guide with geological expertise']
                ],
                'duration_label' => '4-5 hours',
                'base_price' => 120.00,
                'is_published' => true,
                'sort_order' => 2,
                'meta_title' => 'Gem Mine Experience | Traditional Sri Lankan Gem Mining',
                'meta_description' => 'Discover traditional gem mining in Sri Lanka. Visit active mines, learn gem identification, and witness ancient extraction techniques.',
            ],
            [
                'title' => 'Cooking Experience + Lunch or Dinner',
                'slug' => 'cooking-experience-lunch-dinner',
                'short_summary' => 'Master authentic Sri Lankan cuisine with local chefs using traditional techniques, spices, and recipes passed down through generations.',
                'body' => 'Dive deep into the rich culinary traditions of Sri Lanka with this immersive cooking experience that celebrates the island\'s diverse flavors and time-honored techniques. Led by experienced local chefs and home cooks, this hands-on experience offers an authentic introduction to Sri Lankan cuisine.

Begin with a visit to a local spice garden where you\'ll learn to identify and harvest fresh spices, herbs, and vegetables used in traditional cooking. Understand the medicinal and culinary properties of ingredients like curry leaves, pandan, lemongrass, and various chilies that give Sri Lankan food its distinctive character.

Learn traditional cooking methods using clay pots, coconut shell fires, and age-old techniques that enhance flavors naturally. Master the art of tempering spices, creating perfect coconut milk, and balancing the complex flavor profiles that define authentic Sri Lankan cuisine.

Prepare a complete traditional meal including rice cooked to perfection, various curries featuring fresh vegetables and proteins, sambols, and traditional accompaniments. Learn family recipes that have been passed down through generations, each with its own story and cultural significance.

The experience concludes with enjoying the feast you\'ve created together, accompanied by stories about Sri Lankan food culture, dining etiquette, and the social importance of shared meals in Sri Lankan society.',
                'inclusions' => [
                    ['item' => 'Guided spice garden tour and ingredient harvesting'],
                    ['item' => 'Traditional cooking techniques workshop'],
                    ['item' => 'Hands-on preparation of complete Sri Lankan meal'],
                    ['item' => 'Clay pot and traditional fire cooking methods'],
                    ['item' => 'Family recipes and cooking secrets sharing'],
                    ['item' => 'Complete lunch or dinner (your choice of timing)'],
                    ['item' => 'Traditional beverages and welcome refreshments'],
                    ['item' => 'Recipe cards to take home'],
                    ['item' => 'Professional chef instruction and cultural context'],
                    ['item' => 'Apron and cooking utensils during experience']
                ],
                'duration_label' => '5-6 hours',
                'base_price' => 95.00,
                'is_published' => true,
                'sort_order' => 3,
                'meta_title' => 'Sri Lankan Cooking Experience | Traditional Cuisine Workshop',
                'meta_description' => 'Learn authentic Sri Lankan cooking with local chefs. Master traditional techniques, spices, and family recipes in this hands-on culinary experience.',
            ],
        ];

        foreach ($experiences as $experienceData) {
            Experience::create($experienceData);
        }
    }
}
