@extends('layouts.app')

@section('title', 'About Us | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => 'About Us', 'subtitle' => 'Authentic Roots, Living Stories'])
    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20 space-y-16">
            <section class="grid gap-8 lg:grid-cols-[1.2fr_1fr] lg:items-start">
                <div class="space-y-6">
                    <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Ayubowan and welcome to Experience Udawalawe.</p>
                    <h2 class="text-3xl font-semibold text-[#1b1b18]">Who We Are</h2>
                    @include('partials.heading-divider', ['showIcon' => true])
                    <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                        Experience Udawalawe was born from a simple idea: that travel should be about connection. Connection to nature, to culture, and to people. Through our signature restaurant Ceylon 1850 and a collection of immersive experiences, we invite guests to step into the rhythms of rural Sri Lanka.
                    </p>
                    <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                        Here, food is prepared the way it has been for generations, using fresh ingredients from nearby farms. Experiences are shaped by the wisdom of local families — from heritage crafts to community-led excursions. Every detail reflects our belief that authenticity is not staged, but lived.
                    </p>
                </div>
                
                <!-- Animated Image Gallery -->
                <div class="relative">
                    <div class="grid grid-cols-4 gap-3 h-96" id="imageGallery">
                        <!-- Large main image (spans 2x2) -->
                        <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden shadow-lg">
                            <img 
                                src="https://images.unsplash.com/photo-1564760055775-d63b17a55c44?q=80&w=800&auto=format&fit=crop" 
                                alt="Experience Udawalawe Gallery" 
                                class="w-full h-full object-cover transition-opacity duration-1000 ease-in-out"
                                id="image1"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Top-right small image -->
                        <div class="rounded-2xl overflow-hidden shadow-lg">
                            <img 
                                src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?q=80&w=800&auto=format&fit=crop" 
                                alt="Ceylon 1850 Restaurant" 
                                class="w-full h-full object-cover transition-opacity duration-1000 ease-in-out"
                                id="image2"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Top-far-right tall image -->
                        <div class="row-span-2 rounded-2xl overflow-hidden shadow-lg">
                            <img 
                                src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?q=80&w=800&auto=format&fit=crop" 
                                alt="Local Experiences" 
                                class="w-full h-full object-cover transition-opacity duration-1000 ease-in-out"
                                id="image3"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Middle-right small image -->
                        <div class="rounded-2xl overflow-hidden shadow-lg">
                            <img 
                                src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?q=80&w=800&auto=format&fit=crop" 
                                alt="Traditional Cooking" 
                                class="w-full h-full object-cover transition-opacity duration-1000 ease-in-out"
                                id="image4"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Bottom-left small image -->
                        <div class="rounded-2xl overflow-hidden shadow-lg">
                            <img 
                                src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=800&auto=format&fit=crop" 
                                alt="Spice Garden" 
                                class="w-full h-full object-cover transition-opacity duration-1000 ease-in-out"
                                id="image5"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Bottom-center small image -->
                        <div class="rounded-2xl overflow-hidden shadow-lg">
                            <img 
                                src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?q=80&w=800&auto=format&fit=crop" 
                                alt="Community Life" 
                                class="w-full h-full object-cover transition-opacity duration-1000 ease-in-out"
                                id="image6"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Bottom-right small image -->
                        <div class="rounded-2xl overflow-hidden shadow-lg">
                            <img 
                                src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?q=80&w=800&auto=format&fit=crop" 
                                alt="Nature Walks" 
                                class="w-full h-full object-cover transition-opacity duration-1000 ease-in-out"
                                id="image7"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Additional bottom image -->
                        <div class="rounded-2xl overflow-hidden shadow-lg">
                            <img 
                                src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?q=80&w=800&auto=format&fit=crop" 
                                alt="Traditional Crafts" 
                                class="w-full h-full object-cover transition-opacity duration-1000 ease-in-out"
                                id="image8"
                                loading="lazy"
                            />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery Animation Script -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const imagesSets = [
                        // Set 1: Wildlife & Nature
                        [
                            'https://images.unsplash.com/photo-1564760055775-d63b17a55c44?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1518837695005-2083093ee35b?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1544735716-392fe2489ffa?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1587300003388-59208cc962cb?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1582750433449-648ed127bb54?q=80&w=800&auto=format&fit=crop'
                        ],
                        // Set 2: Food & Dining
                        [
                            'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1574484284002-952d92456975?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1578662996442-48f60103fc96?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1585032226651-759b368d7246?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1565958011703-44f9829ba187?q=80&w=800&auto=format&fit=crop'
                        ],
                        // Set 3: Cultural Experiences
                        [
                            'https://images.unsplash.com/photo-1613395877344-13d4a8e0d49e?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1582750433449-648ed127bb54?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1590736969955-71cc94901144?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1583222865862-a613a7e1abb5?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1570197788417-0e82375c9371?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1564769662533-4f00a87b4056?q=80&w=800&auto=format&fit=crop'
                        ],
                        // Set 4: Landscapes & Gardens
                        [
                            'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1559827260-dc66d52bef19?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1569163139394-de4e4f43e4e5?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1502780402662-acc01917738e?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=800&auto=format&fit=crop',
                            'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?q=80&w=800&auto=format&fit=crop'
                        ]
                    ];

                    let currentSetIndex = 0;
                    const imageElements = [
                        document.getElementById('image1'),
                        document.getElementById('image2'),
                        document.getElementById('image3'),
                        document.getElementById('image4'),
                        document.getElementById('image5'),
                        document.getElementById('image6'),
                        document.getElementById('image7'),
                        document.getElementById('image8')
                    ];

                    function changeImages() {
                        // Fade out all images
                        imageElements.forEach(img => {
                            if (img) img.style.opacity = '0.3';
                        });

                        setTimeout(() => {
                            // Change to next image set
                            currentSetIndex = (currentSetIndex + 1) % imagesSets.length;
                            const currentSet = imagesSets[currentSetIndex];
                            
                            // Update each image source
                            imageElements.forEach((img, index) => {
                                if (img && currentSet[index]) {
                                    img.src = currentSet[index];
                                }
                            });

                            // Fade in all images
                            imageElements.forEach(img => {
                                if (img) img.style.opacity = '1';
                            });
                        }, 500);
                    }

                    // Change images every 5 seconds
                    let intervalId = setInterval(changeImages, 5000);

                    // Pause animation on hover
                    const gallery = document.getElementById('imageGallery');
                    
                    gallery.addEventListener('mouseenter', () => {
                        clearInterval(intervalId);
                    });
                    
                    gallery.addEventListener('mouseleave', () => {
                        intervalId = setInterval(changeImages, 5000);
                    });
                });
            </script>

            <section class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Our Philosophy</h3>
                @include('partials.heading-divider')
                
                <!-- Philosophy Introduction -->
                <div class="text-center max-w-3xl mx-auto space-y-4">
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        We believe tourism can be a force for good. Our philosophy is built on three commitments:
                    </p>
                </div>

                <!-- Three Commitments -->
                <div class="grid gap-8 md:grid-cols-3">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Sustainability</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Reducing waste, choosing eco-friendly alternatives, and protecting the land we depend on.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm text-center">
                        <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Culture & Heritage</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Preserving age-old practices, recipes, and crafts while sharing them with the world.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Community First</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Ensuring local families, artisans, and entrepreneurs grow alongside us.
                        </p>
                    </article>
                </div>

                <!-- Philosophy Conclusion -->
                <div class=" text-center">
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light max-w-4xl mx-auto">
                        This approach ensures that every guest leaves with more than memories — they leave with a deeper connection to Sri Lanka's soul.
                    </p>
                </div>
            </section>

            <section class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">What We Offer</h3>
                @include('partials.heading-divider')
                <div class="grid gap-8 md:grid-cols-3">
                    <!-- Ceylon 1850 Restaurant -->
                    <article class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <div class="relative h-48 overflow-hidden">
                            <img 
                                src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=800&auto=format&fit=crop" 
                                alt="Ceylon 1850 Restaurant" 
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <p class="text-xs uppercase tracking-[0.3em] text-white/80 font-medium">Restaurant</p>
                                <h4 class="text-xl font-semibold">Ceylon 1850</h4>
                            </div>
                        </div>
                        <div class="p-6 bg-white">
                            <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                                Dining inspired by the 1850s, where meals are cooked with firewood, served in clay, and infused with local flavors.
                            </p>
                            <a href="{{ route('dining') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                                Explore dining
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Cultural Experiences -->
                    <article class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <div class="relative h-48 overflow-hidden">
                            <img 
                                src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?q=80&w=800&auto=format&fit=crop" 
                                alt="Cultural Experiences" 
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <p class="text-xs uppercase tracking-[0.3em] text-white/80 font-medium">Cultural Experiences</p>
                                <h4 class="text-xl font-semibold">Living Traditions</h4>
                            </div>
                        </div>
                        <div class="p-6 bg-white">
                            <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                                Cooking demonstrations, heritage crafts, and traditional practices that bring local wisdom to life.
                            </p>
                            <a href="{{ route('experiences.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                                Meet the storytellers
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Nature Excursions -->
                    <article class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <div class="relative h-48 overflow-hidden">
                            <img 
                                src="https://images.unsplash.com/photo-1564760055775-d63b17a55c44?q=80&w=800&auto=format&fit=crop" 
                                alt="Nature Excursions" 
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <p class="text-xs uppercase tracking-[0.3em] text-white/80 font-medium">Nature Excursions</p>
                                <h4 class="text-xl font-semibold">Wild Horizons</h4>
                            </div>
                        </div>
                        <div class="p-6 bg-white">
                            <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                                Authentic journeys by boat, jeep, or foot, designed to immerse guests in the natural beauty of Udawalawe without leaving harm behind.
                            </p>
                            <a href="{{ route('experiences.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                                Plan an excursion
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </section>

                        <section class="rounded-3xl border border-[#ecebe5] bg-white p-10 shadow-sm">
                <div class="space-y-6 text-center">
                    <div class="space-y-4">
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Our Promise</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Journeys that leave lasting impact</h3>
                        <div class="flex justify-center">
                            @include('partials.heading-divider')
                        </div>
                        <p class="text-sm text-[#50504d] sm:text-base leading-relaxed max-w-4xl mx-auto">
                            We commit to transparency, community-led decisions, and measurable sustainability milestones.
                            Your stay fuels scholarships, habitat monitoring, women-led enterprises, and the preservation of
                            Village Udawalawe's living heritage.
                        </p>
                    </div>
                    <div class="inline-block rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-8 py-6 text-sm uppercase tracking-[0.35em] text-[#50504d]">
                        Together for Tomorrow
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
