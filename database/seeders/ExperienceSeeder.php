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
                'slug' => 'sri-lankan-dinner',
                'short_summary' => 'As night falls in Udawalawe, gather for a traditional Sri Lankan dinner — heritage recipes served in the calm glow of lantern light.',
                'body' => 'Evenings in Udawalawe carry a different rhythm. As lanterns glow and the air cools, dinner unfolds slowly — a gathering marked by conversation, heritage flavors, and the quiet pulse of the night. This is an evening of gathering — a chance to pause, share stories, and savor food prepared with care.

Here, dining becomes part of the night\'s rhythm. Each bite is tied to authentic roots and living stories, a reflection of the spirit of community and care for the land, traditions sustained under starlit skies of Udawalawe.',
                'duration_label' => '1-1.5 hours',
                'base_price' => 30.00,
                'inclusions' => [
                    ['item' => 'Full Sri Lankan dinner with rice'],
                    ['item' => '12-15 curry varieties'],
                    ['item' => 'Traditional sambols and accompaniments'],
                    ['item' => 'Water'],
                    ['item' => 'Lantern-lit atmosphere']
                ],
                'is_published' => true,
                'sort_order' => 3,
                'meta_title' => 'Traditional Sri Lankan Dinner | Heritage Dining Udawalawe',
                'meta_description' => 'Experience lantern-lit Sri Lankan dinner with authentic heritage recipes and traditional flavors in Udawalawe.',
            ],
            [
                'title' => 'Sri Lankan Snacks in Udawalawe',
                'slug' => 'sri-lankan-snacks',
                'short_summary' => 'Pause for a plate of traditional Sri Lankan snacks in Udawalawe, prepared with fresh ingredients and shared in the warmth of a village setting.',
                'body' => 'In Udawalawe, even a simple snack carries the taste of tradition. Served in the open-air setting of Ceylon 1850, these small bites tell stories of everyday life — short eats fried crisp, sambol sandwiches layered with spice, and sweet treats made from coconut and jaggery.

This is not fast food, but food made to pause with. Snacks are prepared with seasonal ingredients from local farms, keeping the flavors fresh and the impact gentle on the land. It is a moment to sit back, sip a local tea, and enjoy the unhurried rhythm of village life.

Here, even light meals hold authentic roots and living stories — a reflection of community bonds, care for the soil, and the joy of sharing simple pleasures together.',
                'duration_label' => '45 minutes - 1 hour',
                'base_price' => 15.00,
                'inclusions' => [
                    ['item' => 'Selection of Sri Lankan short eats'],
                    ['item' => 'Tea or herbal drink'],
                    ['item' => 'Traditional snacks: cutlets, vadai, coconut sweets'],
                    ['item' => 'Sambol bites and sandwiches']
                ],
                'is_published' => true,
                'sort_order' => 4,
                'meta_title' => 'Traditional Sri Lankan Snacks | Ceylon 1850 Short Eats',
                'meta_description' => 'Enjoy authentic Sri Lankan short eats and traditional snacks with tea in a relaxed village setting.',
            ],
            [
                'title' => 'High Tea in a Tree House – Udawalawe',
                'slug' => 'high-tea-tree-house',
                'short_summary' => 'Experience high tea in Udawalawe like no other — a guided garden walk followed by tea and snacks served in a rustic tree house among the branches.',
                'body' => 'Afternoons in Udawalawe carry a quiet charm. Your journey begins with a gentle walk through the village\'s organic, herbal, and spice gardens, where hosts share the uses of each plant — from kitchen flavors to traditional remedies — offering a glimpse into how nature shapes daily life.

The path leads upward to a rustic tree house, where high tea awaits. From your perch among the branches, the world feels both close and far away — birds darting overhead, fields stretching into the distance, and the soft breeze carrying the scent of spice and earth.

Plates arrive with sweet and savory Sri Lankan bites: coconut toffee, crisp fritters, sambol-stuffed rolls, all prepared with ingredients sourced from nearby gardens and kitchens. Each sip of tea carries warmth, each snack a taste of tradition.

This is not just tea, but a pause in the day — a moment that blends authentic roots and living stories with a touch of tranquility, offering an experience as much about setting as it is about flavor.',
                'duration_label' => '1.5-2 hours',
                'base_price' => 35.00,
                'inclusions' => [
                    ['item' => 'Guided garden walk'],
                    ['item' => 'Selection of Sri Lankan snacks'],
                    ['item' => 'Tea and herbal drinks'],
                    ['item' => 'Tree house experience']
                ],
                'is_published' => true,
                'sort_order' => 5,
                'meta_title' => 'Tree House High Tea | Unique Udawalawe Experience',
                'meta_description' => 'Enjoy high tea in a rustic tree house after exploring organic gardens. A unique blend of nature, tradition, and flavor.',
            ],
            [
                'title' => 'Tree House Dinner for Couples – Udawalawe',
                'slug' => 'tree-house-dinner-couples',
                'short_summary' => 'Celebrate an intimate evening in Udawalawe with a lantern-lit dinner served in a rustic tree house — a private dining experience for two under the stars.',
                'body' => 'As dusk settles over Udawalawe, a rustic tree house becomes your dining room among the branches. Lanterns flicker softly, the night air carries the scent of spice and earth, and the quiet of the plains feels like it belongs to you alone.

The meal unfolds slowly, course by course, with heritage recipes that carry the depth of Sri Lankan tradition. Rice and curries simmered over firewood, sambols rich with spice, and seasonal vegetables from nearby gardens create flavors rooted in place and prepared with care.

This is more than dinner. It is a moment of connection — with each other, with the land, and with traditions sustained for generations. Every detail, from the ingredients on the plate to the glow of the lanterns above, ties you to authentic roots and living stories, making the evening unforgettable.',
                'duration_label' => '2-2.5 hours',
                'base_price' => 120.00,
                'inclusions' => [
                    ['item' => 'Private dinner for two'],
                    ['item' => 'Full Sri Lankan meal'],
                    ['item' => '12-15 curry varieties'],
                    ['item' => 'Seasonal vegetables and sambols'],
                    ['item' => 'Traditional dessert'],
                    ['item' => 'Water'],
                    ['item' => 'Lantern lighting and atmosphere']
                ],
                'is_published' => true,
                'sort_order' => 6,
                'meta_title' => 'Romantic Tree House Dinner | Couples Experience Udawalawe',
                'meta_description' => 'Intimate lantern-lit dinner for couples in a tree house. Private dining experience with authentic Sri Lankan cuisine.',
            ],
            [
                'title' => 'Village Experience – Udawalawe',
                'slug' => 'village-experience',
                'short_summary' => 'Step into village life in Udawalawe — from traditional dress and garden walks to crafts, cooking, and climbing, this experience is a living story of culture and connection.',
                'body' => 'Your village journey begins with a warm welcome — a king coconut, a tender kurumba, or a cup of spicy tea pressed into your hands. As hosts greet you, you are dressed in traditional attire: the jatawa for men, a graceful head scarf for women.

From here, the experience unfolds like a walk-through living heritage. In the organic, herbal, and spice gardens, every plant tells a story, from healing remedies to flavors that shape Sri Lankan cooking. Under the shade of palms, learn to weave coconut leaves, peel husks, or prepare cinnamon sticks by hand — crafts passed through generations.

The kitchen becomes another chapter, where you try your hand at husking, winnowing, grinding, or splitting coconuts, each step tied to the rhythm of rural cooking. Afterwards, you\'re introduced to the gem mine and the simple dona experience, reflecting another layer of community livelihood.

For those seeking a challenge, the coconut tree climb offers both courage and laughter, while the tree house experience provides a quiet pause high above the village paths.

This is not a staged performance but a sharing of life. Each moment carries authentic roots and living stories — connections to people, land, and traditions that thrive in Udawalawe.',
                'duration_label' => '1-1.5 hours',
                'base_price' => 45.00,
                'inclusions' => [
                    ['item' => 'Welcome drink'],
                    ['item' => 'Traditional clothing'],
                    ['item' => 'Guided garden walk'],
                    ['item' => 'Craft demonstrations'],
                    ['item' => 'Kitchen activities'],
                    ['item' => 'Gem mine introduction'],
                    ['item' => 'Tree climbing (optional)'],
                    ['item' => 'Tree house experience'],
                    ['item' => 'Local host guidance']
                ],
                'is_published' => true,
                'sort_order' => 7,
                'meta_title' => 'Authentic Village Experience | Traditional Life Udawalawe',
                'meta_description' => 'Immerse in authentic village life with traditional crafts, cooking, and cultural activities guided by local hosts.',
            ],
            [
                'title' => 'The Coconut Culture – Udawalawe',
                'slug' => 'coconut-culture',
                'short_summary' => 'Explore the many lives of the coconut in Udawalawe — from tree climbing and plucking to peeling, splitting, fiber making, and traditional rope crafting.',
                'body' => 'In Sri Lanka, the coconut is called the "Tree of Life" — every part of it sustains daily living. The Coconut Journey invites you to step into this heritage, discovering how skill, tradition, and creativity have made the coconut central to food, craft, and culture.

Your hosts begin by showing how coconuts are plucked, starting with the daring climb up tall palms. Using traditional rope loops and practiced rhythm, they harvest the fruit as it has been done for centuries.

On the ground, the journey continues. You\'ll watch and try your hand at peeling the fibrous husk, splitting the shell, and learning how each layer has its purpose. The husk fibers are beaten and softened, transformed into strands that become coir — one of Sri Lanka\'s oldest exports. From here, you see how coir is spun into ropes by hand, a craft still alive in rural households.

This is not just a demonstration but a full story of resilience and ingenuity. Each step carries authentic roots and living stories — of a people who have relied on the coconut tree for nourishment, livelihood, and identity for generations.',
                'duration_label' => '2 hours',
                'base_price' => 35.00,
                'inclusions' => [
                    ['item' => 'Coconut tree climbing demonstration'],
                    ['item' => 'Hands-on coconut processing'],
                    ['item' => 'Coir fiber preparation'],
                    ['item' => 'Traditional rope making'],
                    ['item' => 'Cultural storytelling'],
                    ['item' => 'Village host guidance']
                ],
                'is_published' => true,
                'sort_order' => 8,
                'meta_title' => 'Coconut Culture Experience | Tree of Life Udawalawe',
                'meta_description' => 'Discover the coconut\'s role in Sri Lankan life through climbing, processing, and traditional crafts.',
            ],
            [
                'title' => 'Gem Mine & Dona Experience – Udawalawe',
                'slug' => 'gem-mine-dona-experience',
                'short_summary' => 'Discover Udawalawe\'s mining heritage through a model gem mine and dona tunnels. Learn traditional methods of digging, sifting, and washing.',
                'body' => 'The soil of Sri Lanka has long held treasures — sapphires, garnets, moonstones — each carrying stories of labor, livelihood, and legacy. In Udawalawe, our model gem mine and dona experience invites you to glimpse this heritage in an honest and educational way.

Your visit begins with a warm welcome: a king coconut, tender kurumba, or spiced tea. From here, you walk through organic, herbal, and spice gardens where nature\'s richness is on full display before arriving at the mine site.

At the model gem mine, local hosts demonstrate traditional methods of digging, sifting, and washing. You\'ll see how earth and water work together to reveal stones, and how patience and persistence have shaped this way of life. The process shows the rhythm of gem washing, passed down through generations.

The experience continues with a touch of adventure: try coconut tree climbing or pause in a rustic tree house, taking in panoramic views of the surrounding plains and village paths.',
                'duration_label' => '1.5-2 hours',
                'base_price' => 40.00,
                'inclusions' => [
                    ['item' => 'Welcome drink'],
                    ['item' => 'Garden walk'],
                    ['item' => 'Mine and dona demonstration'],
                    ['item' => 'Traditional mining methods'],
                    ['item' => 'Optional coconut tree climbing'],
                    ['item' => 'Tree house pause']
                ],
                'is_published' => true,
                'sort_order' => 9,
                'meta_title' => 'Gem Mine Experience | Traditional Mining Udawalawe',
                'meta_description' => 'Learn traditional gem mining methods at our educational model mine with dona tunnels and heritage demonstrations.',
            ],
            [
                'title' => 'Curd Making Experience – Udawalawe',
                'slug' => 'curd-making-experience',
                'short_summary' => 'Learn the age-old tradition of buffalo curd making in Udawalawe — from fresh milk to clay pot, discover the process behind one of Sri Lanka\'s most beloved foods.',
                'body' => 'In Sri Lanka, curd is more than dessert — it is a staple of daily life, served with treacle, eaten plain, or shared after meals. In Udawalawe, our Curd Making Experience lets you step into this living tradition.

Your hosts begin with milking freshly sourced buffalo milk, explaining how it has long been prized for its richness. You\'ll watch the process unfold: boiling the milk slowly, cooling it to the right temperature, and adding the natural starter culture that turns milk into curd. Each clay pot is prepared by hand, its earthen surface carrying both flavor and heritage.

Guests are invited to take part — stirring, pouring, and sealing the pots — learning firsthand how patience and care turn simple milk into something remarkable. As the pots set, you\'ll taste curd prepared earlier, thick and creamy, paired with golden kithul treacle.

This is not just a culinary lesson but a story of place. Every step reflects authentic roots and living stories — of buffalo herders, clay pot makers, and families who continue this practice today with respect for land and tradition.',
                'duration_label' => '1.5 hours',
                'base_price' => 30.00,
                'inclusions' => [
                    ['item' => 'Hands-on demonstration'],
                    ['item' => 'Buffalo milk preparation'],
                    ['item' => 'Clay pot sealing'],
                    ['item' => 'Curd tasting with kithul treacle'],
                    ['item' => 'Cultural storytelling']
                ],
                'is_published' => true,
                'sort_order' => 10,
                'meta_title' => 'Traditional Curd Making | Buffalo Milk Experience Udawalawe',
                'meta_description' => 'Learn authentic Sri Lankan curd making with buffalo milk and clay pots. Taste fresh curd with kithul treacle.',
            ],
            [
                'title' => 'Toddy Experience – Udawalawe',
                'slug' => 'toddy-experience',
                'short_summary' => 'Discover the ancient craft of toddy tapping in Udawalawe. Watch how coconut or palmyrah sap is collected, learn its role in village life, and taste this natural drink.',
                'body' => 'As dawn breaks in rural Sri Lanka, toddy tappers climb trees with rope loops and clay pots, moving from trunk to trunk with practiced ease. This centuries-old practice is more than a way to gather a drink — it is a livelihood, a rhythm of village mornings, and a tradition carried forward by skilled hands.

In Udawalawe, our Toddy Experience invites you into this heritage. Local hosts demonstrate the process of tapping the flower of the coconut or palmyrah tree, collecting sap that begins to ferment naturally within hours. You\'ll learn how rope loops, clay pots, and deft movements keep the tradition alive, and how the craft supports communities with knowledge passed down over generations.

Guests are welcome to try simple elements under guidance — holding the clay pot, watching the sap drip, or observing the delicate cut made in the flower stalk. Once collected, toddy is shared fresh in small cups, its taste slightly sweet, slightly tangy, and unmistakably tied to place.',
                'duration_label' => '1-1.5 hours',
                'base_price' => 25.00,
                'inclusions' => [
                    ['item' => 'Toddy tapping demonstration'],
                    ['item' => 'Traditional collection methods'],
                    ['item' => 'Toddy tasting (fermented and fresh)'],
                    ['item' => 'Cultural storytelling'],
                    ['item' => 'Local host guidance']
                ],
                'is_published' => true,
                'sort_order' => 11,
                'meta_title' => 'Traditional Toddy Tapping | Ancient Craft Udawalawe',
                'meta_description' => 'Experience ancient toddy tapping methods and taste fresh coconut sap in this authentic village tradition.',
            ],
            [
                'title' => 'Pottery Experience – Udawalawe',
                'slug' => 'pottery-experience',
                'short_summary' => 'Shape clay with your own hands in Udawalawe\'s Pottery Experience. Learn how local artisans turn earth into vessels and discover a tradition rooted in daily life.',
                'body' => 'In villages across Sri Lanka, clay pots are more than kitchenware — they are part of life itself. They carry water, cook curries, set buffalo curd, and store grains, their earthy scent tying homes to the land. In Udawalawe, our Pottery Experience invites you to step into this heritage, guided by those who keep the craft alive.

Your hosts welcome you with a smile and a story, showing how raw clay is sourced, prepared, and shaped. The wheel begins to turn, slowly at first, then steady, as hands guide earth into form. You\'ll watch as smooth walls rise under skilled fingers, and then try your own — shaping, pressing, and feeling the clay respond. Each attempt is a dialogue between hand and soil, patience and practice.

As the pots take shape, you\'ll learn how firing hardens them into lasting vessels, ready for kitchens, ceremonies, and daily use. Every mark in the clay, every line of form, carries stories of families who relied on these humble objects long before factory-made goods arrived.',
                'duration_label' => '1.5-2 hours',
                'base_price' => 30.00,
                'inclusions' => [
                    ['item' => 'Hands-on pottery demonstration'],
                    ['item' => 'Clay shaping practice'],
                    ['item' => 'Traditional techniques'],
                    ['item' => 'Small pottery takeaway'],
                    ['item' => 'Local artisan guidance']
                ],
                'is_published' => true,
                'sort_order' => 12,
                'meta_title' => 'Traditional Pottery Making | Clay Craft Udawalawe',
                'meta_description' => 'Learn traditional pottery making with local artisans. Shape clay into vessels using ancient techniques.',
            ],
            [
                'title' => 'Accompanied Village Bike Ride – Udawalawe',
                'slug' => 'village-bike-ride',
                'short_summary' => 'Cycle through Udawalawe\'s quiet village paths with a local guide. Discover daily rhythms, hidden corners, and the warm connections that make this landscape come alive.',
                'body' => 'There\'s no better way to feel the pulse of a village than from the seat of a bicycle. In Udawalawe, where time moves with the rhythm of nature, an accompanied ride takes you away from busy roads and into the heart of daily life.

Led by a local guide or naturalist, you follow winding lanes shaded by coconut palms, passing home gardens, smiling villagers, and stretches of open plain. Along the way, pauses invite you to sip king coconut water, enjoy a snack, and listen to stories tied to the land. It is travel at its gentlest pace — slow, immersive, and deeply human.

The loop covers about 14 kilometers; a moderate ride designed for those who enjoy fresh air and light activity. Children aged 13 and above can join comfortably. Every turn of the wheel carries authentic roots and living stories — tying you to the landscape, the people, and the simple beauty of moving with the day.',
                'duration_label' => '2.5 hours',
                'base_price' => 35.00,
                'inclusions' => [
                    ['item' => 'Bicycle and helmet'],
                    ['item' => 'Local guide or naturalist'],
                    ['item' => 'Village path exploration'],
                    ['item' => 'Light snack'],
                    ['item' => 'Cultural storytelling']
                ],
                'is_published' => true,
                'sort_order' => 13,
                'meta_title' => 'Village Bike Tour | Cycling Experience Udawalawe',
                'meta_description' => 'Explore Udawalawe village by bicycle with a local guide. Gentle 14km ride through scenic village paths.',
            ],
            [
                'title' => 'Day Out with the Elephants of Udawalawe',
                'slug' => 'day-out-with-elephants',
                'short_summary' => 'Visit the Elephant Transit Home in Udawalawe and witness the care of orphaned elephant calves. Learn their stories, watch feeding time, and see how conservation gives them a future in the wild.',
                'body' => 'At the edge of Udawalawe National Park lies a place of care and hope — the Elephant Transit Home (Ath Athuru Sewana). Here, orphaned elephant calves are nurtured by wildlife staff until they are ready to return to the forest.

Your day begins with entry tickets and guidance from a naturalist or staff member, who shares the background of the center and the individual stories of the calves. Watching them gather for feeding is an unforgettable sight: small trunks reaching eagerly, eyes bright with curiosity, each calf carrying its own journey of survival.

Among them is Amie, a baby elephant whose care is supported through a foster-parent scheme. Meeting her and learning her story makes the work of conservation personal and real.

Feeding sessions are held daily at 10:30 a.m., 2:30 p.m., and 6:00 p.m. We recommend the evening session, after safari hours, when the crowds are fewer and the atmosphere more serene.',
                'duration_label' => '1.5-2 hours',
                'base_price' => 55.00,
                'inclusions' => [
                    ['item' => 'Entry tickets'],
                    ['item' => 'Naturalist guidance'],
                    ['item' => 'Foster elephant meeting (Amie)'],
                    ['item' => 'Feeding time observation'],
                    ['item' => 'Conservation education'],
                    ['item' => 'Individual elephant stories']
                ],
                'is_published' => true,
                'sort_order' => 14,
                'meta_title' => 'Elephant Conservation Experience | Udawalawe Transit Home',
                'meta_description' => 'Visit orphaned elephant calves at Udawalawe Elephant Transit Home. Witness conservation in action and meet Amie.',
            ],
            [
                'title' => 'Traditional Fishing – Udawalawe',
                'slug' => 'traditional-fishing',
                'short_summary' => 'Join local fishermen on the waters of Udawalawe and learn time-honored fishing techniques. End the day with your own fresh catch, prepared village-style.',
                'body' => 'Fishing has always been more than a livelihood in Sri Lanka — it is a rhythm of life tied to water, patience, and community. In Udawalawe, our Traditional Fishing Experience lets you step into this heritage alongside local fishermen who know these waters best.

Your journey begins with guidance from a naturalist or staff member, who introduces the lake and its importance to village life. Out on the water, you sit in a small boat as the nets are cast, the morning light catching ripples on the surface. The fishermen share techniques passed down through generations, showing how timing, skill, and respect for the lake work together to bring in a catch.

As the boat glides, you\'ll see birdlife along the shores and hear stories of how fishing sustains families in both food and tradition. When the nets are drawn in, the reward comes ashore: your freshly caught fish, prepared over a wood fire with village flavors.',
                'duration_label' => '4 hours',
                'base_price' => 65.00,
                'inclusions' => [
                    ['item' => 'Naturalist or staff guide'],
                    ['item' => 'Local fisherman guidance'],
                    ['item' => 'Boat transportation'],
                    ['item' => 'Life jackets'],
                    ['item' => 'Village-style fish preparation'],
                    ['item' => 'Fresh catch meal']
                ],
                'is_published' => true,
                'sort_order' => 15,
                'meta_title' => 'Traditional Fishing Experience | Village Style Udawalawe',
                'meta_description' => 'Learn traditional fishing techniques with local fishermen and enjoy your fresh catch prepared village-style.',
            ],
            [
                'title' => 'Village Walk – Udawalawe',
                'slug' => 'village-walk',
                'short_summary' => 'Explore Udawalawe on foot with a local naturalist. Walk quiet paths, spot wildlife, and discover the living bond between villages and the natural world.',
                'body' => 'Some of the most meaningful encounters in Udawalawe happen not from a jeep or a boat, but on foot. A Village Walk takes you into the landscape at the slowest pace of all — step by step — where every sound, sight, and scent is sharper.

Accompanied by a naturalist or staff member, you follow shaded lanes and open tracks that thread through the village and its edges. Birds dart across the hedgerows, butterflies linger on flowers, and the possibility of spotting small mammals makes every step alive with anticipation. Along the way, your guide points out medicinal plants, animal tracks, and the quiet details of daily life that weave people and nature together.

The walk is light and unhurried, with pauses for a refreshing snack and moments simply to stand still and take in the atmosphere. Early mornings and late afternoons are the best times, when light softens, animals are active, and the day feels less hurried.',
                'duration_label' => '2 hours',
                'base_price' => 20.00,
                'inclusions' => [
                    ['item' => 'Naturalist or staff guide'],
                    ['item' => 'Wildlife spotting opportunities'],
                    ['item' => 'Medicinal plant identification'],
                    ['item' => 'Light snack'],
                    ['item' => 'Cultural insights']
                ],
                'is_published' => true,
                'sort_order' => 16,
                'meta_title' => 'Village Nature Walk | Wildlife Spotting Udawalawe',
                'meta_description' => 'Gentle village walk with naturalist guide. Spot birds, butterflies, and learn about local wildlife and plants.',
            ],
            [
                'title' => 'Sustainability Walk – Udawalawe',
                'slug' => 'sustainability-walk',
                'short_summary' => 'Join a guided Sustainability Walk in Udawalawe. Explore biodiversity, learn about community life, and see how people and nature thrive together.',
                'body' => 'Udawalawe is more than elephants and open plains — it is a living landscape where people and wildlife share the same ground. Our Sustainability Walk offers a gentle introduction to this balance, guided by our team of naturalists and staff.

As you move along shaded paths and open clearings, the walk reveals vibrant birdlife, fluttering butterflies, and the quiet details that make this ecosystem thrive. Your guide explains how local families live alongside nature, drawing from its resources with care while protecting what sustains them.

You\'ll see examples of daily practices — from small-scale farming and home gardens to traditional crafts — that reflect a lifestyle rooted in respect for the land. Along the way, pauses invite you to ask questions, engage in authentic cultural exchanges, and reflect on how responsible tourism contributes to preserving this harmony.',
                'duration_label' => '1 hour',
                'base_price' => 15.00,
                'inclusions' => [
                    ['item' => 'Naturalist or staff guide'],
                    ['item' => 'Sustainable living examples'],
                    ['item' => 'Biodiversity exploration'],
                    ['item' => 'Cultural exchange opportunities'],
                    ['item' => 'Environmental education']
                ],
                'is_published' => true,
                'sort_order' => 17,
                'meta_title' => 'Sustainability Walk | Eco Living Udawalawe',
                'meta_description' => 'Learn sustainable living practices and explore biodiversity with our naturalist guides in this eco-focused walk.',
            ],
            [
                'title' => 'Kayaking – Udawalawe',
                'slug' => 'kayaking-udawalawe',
                'short_summary' => 'Glide along Udawalawe\'s quiet canals by kayak. Spot kingfishers, herons, and other waterbirds while a naturalist shares insights into this thriving ecosystem.',
                'body' => 'Water has always been the lifeblood of Udawalawe, feeding both its fields and its wildlife. A Kayaking Experience offers you the rare chance to explore these waterways up close, where every paddle stroke brings new sights and sounds.

As you drift through serene canals shaded by greenery, flashes of color catch your eye — a kingfisher darting low, a heron poised elegantly at the bank, dragonflies glinting in the light. With each movement, the quiet rhythm of water and wildlife unfolds around you.

Your journey is guided by an experienced naturalist or staff member, who explains the delicate balance of this ecosystem. You\'ll learn how these waterways support both village life and a rich variety of bird species, while also gaining a deeper understanding of how conservation helps protect them.',
                'duration_label' => '1 hour',
                'base_price' => 25.00,
                'inclusions' => [
                    ['item' => 'Kayak and life jacket'],
                    ['item' => 'Naturalist or staff guide'],
                    ['item' => 'Birdwatching opportunities'],
                    ['item' => 'Ecosystem education'],
                    ['item' => 'Water safety guidance']
                ],
                'is_published' => true,
                'sort_order' => 18,
                'meta_title' => 'Kayaking Experience | Water Birds Udawalawe',
                'meta_description' => 'Peaceful kayaking through Udawalawe canals with birdwatching and naturalist guidance. Perfect for nature lovers.',
            ],
            [
                'title' => 'Tree Planting – Udawalawe',
                'slug' => 'tree-planting',
                'short_summary' => 'Take part in Udawalawe\'s reforestation efforts. Plant a tree, support biodiversity, and leave a living legacy that contributes to conservation and community.',
                'body' => 'In Udawalawe, the bond between people and land has always been close — yet the forests that shelter wildlife and sustain villages face ongoing threats. Our Tree Planting Experience invites you to be part of the solution, joining local reforestation efforts that restore balance and preserve biodiversity.

Guided by our staff or naturalist, you\'ll learn about the importance of trees in maintaining soil, supporting birdlife, and providing shade and food for animals. After a short introduction, you\'ll plant your own sapling — a tangible step toward regeneration. Each tree planted is carefully chosen to match the local ecosystem, ensuring it grows in harmony with its surroundings.

This experience is not only about planting but about connection. You will hear how reforestation supports both wildlife and community well-being, from preventing erosion to offering future livelihoods.',
                'duration_label' => '30-45 minutes',
                'base_price' => 10.00,
                'inclusions' => [
                    ['item' => 'Native tree sapling'],
                    ['item' => 'Planting tools and guidance'],
                    ['item' => 'Conservation education'],
                    ['item' => 'Staff or naturalist guide'],
                    ['item' => 'Water for saplings']
                ],
                'is_published' => true,
                'sort_order' => 19,
                'meta_title' => 'Tree Planting Experience | Conservation Udawalawe',
                'meta_description' => 'Plant native trees and support reforestation in Udawalawe. Leave a living legacy for conservation and community.',
            ],
            [
                'title' => 'River Bathing – Udawalawe',
                'slug' => 'river-bathing',
                'short_summary' => 'Cool off in Udawalawe\'s river after a village walk. Bathe the traditional way, enjoy a riverside snack, and connect with nature as locals do.',
                'body' => 'In Udawalawe, rivers are more than flowing water — they are lifelines where people gather, wash, and cool off after a day\'s work. Our River Bathing Experience invites you to join this timeless tradition, offering both refreshment and connection to the rhythms of rural life.

After a guided Village Walk, the path leads you to the shaded banks of a gentle river. Here, you can step into the cool, clear water as your hosts share how these rivers sustain communities and wildlife alike. The experience is lighthearted and grounding, a pause in the day where laughter, splashes, and stillness blend together.

Once you\'ve cooled off, a simple snack is served by the riverside, made from fresh local ingredients. The setting makes even the simplest food taste unforgettable — a reminder of how nature and community are woven together in daily life.',
                'duration_label' => '1-1.5 hours',
                'base_price' => 20.00,
                'inclusions' => [
                    ['item' => 'Village Walk included'],
                    ['item' => 'Guided river bathing'],
                    ['item' => 'Riverside snack'],
                    ['item' => 'Staff host guidance'],
                    ['item' => 'Cultural storytelling']
                ],
                'is_published' => true,
                'sort_order' => 20,
                'meta_title' => 'Traditional River Bathing | Village Life Udawalawe',
                'meta_description' => 'Experience traditional river bathing with village walk and riverside snack. Cool off like the locals do.',
            ],
            [
                'title' => 'Yala Safari – Udawalawe',
                'slug' => 'yala-safari',
                'short_summary' => 'Embark on a half-day safari through Yala\'s wild terrain. From elusive leopards to elephants, sloth bears, and vibrant birdlife, every sighting is part of an unforgettable wildlife odyssey.',
                'body' => 'Yala is a place where Sri Lanka\'s wilderness reveals itself in raw, breathtaking ways. Amidst thorny shrub forests and rocky outcrops reminiscent of African savannahs, the thrill of spotting an elusive leopard is intensified by the striking landscape.

Yet Yala is far more than a leopard haven. Its plains, lagoons, and forests shelter elephants moving in herds, sambar and spotted deer grazing in the open, buffalo and wild boar roaming freely, and troops of playful monkeys. At the water\'s edge, crocodiles bask while peacocks spread their colorful feathers in the sun. For the truly fortunate, the shadowy figure of a sloth bear may appear — a rare and unforgettable encounter.

Guided by a naturalist or staff member, your safari unfolds as both adventure and learning. Insights into animal behavior, conservation challenges, and the delicate balance of ecosystems deepen the journey.',
                'duration_label' => '4.5 hours',
                'base_price' => 85.00,
                'inclusions' => [
                    ['item' => 'Naturalist or staff guide'],
                    ['item' => 'Park entrance tickets'],
                    ['item' => 'Safari jeep transportation'],
                    ['item' => 'Refreshment snacks'],
                    ['item' => 'Wildlife education'],
                    ['item' => 'Photography opportunities']
                ],
                'is_published' => true,
                'sort_order' => 21,
                'meta_title' => 'Yala Safari | Leopard Spotting Sri Lanka',
                'meta_description' => 'Half-day Yala safari with naturalist guide. Spot leopards, elephants, sloth bears and diverse wildlife in Sri Lanka\'s premier national park.',
            ],
            [
                'title' => 'Udawalawe Safari – Udawalawe',
                'slug' => 'udawalawe-safari',
                'short_summary' => 'Embark on a half-day safari through Udawalawe National Park, Sri Lanka\'s best place to see wild elephants. Spot herds, birdlife, and more in a landscape of grasslands and reservoirs.',
                'body' => 'Udawalawe is one of Sri Lanka\'s most iconic national parks, known worldwide for its remarkable elephant population. With over 600 wild elephants roaming freely, sightings are almost guaranteed — mothers with calves by the water, solitary bulls on the move, or entire herds crossing the plains.

The park\'s open grasslands, scrub forests, and shimmering reservoir create habitats for far more than elephants. Water buffalo, jackals, sambar and spotted deer, wild boar, and crocodiles share this wilderness, while more than 200 bird species bring constant flashes of color and sound. Raptors soar overhead, bee-eaters sweep low, and peacocks fan their feathers against the horizon.

Guided by a naturalist or staff member, your safari is both an adventure and a learning journey. Stories of animal behavior, ecology, and conservation add depth to each sighting, while snacks keep you refreshed as the jeep explores the park\'s varied landscapes.',
                'duration_label' => '4.5 hours',
                'base_price' => 75.00,
                'inclusions' => [
                    ['item' => 'Naturalist or staff guide'],
                    ['item' => 'Park entrance tickets'],
                    ['item' => 'Safari jeep transportation'],
                    ['item' => 'Refreshment snacks'],
                    ['item' => 'Wildlife education'],
                    ['item' => 'Photography opportunities']
                ],
                'is_published' => true,
                'sort_order' => 22,
                'meta_title' => 'Udawalawe Safari | Wild Elephants Sri Lanka',
                'meta_description' => 'Half-day Udawalawe safari with guaranteed elephant sightings. Explore grasslands and spot diverse wildlife with naturalist guide.',
            ],
        ];

        // Create experiences
        foreach ($experiences as $experienceData) {
            Experience::create($experienceData);
        }

        $this->command->info('Experience seeder completed! ' . count($experiences) . ' experiences have been created.');
    }
}
