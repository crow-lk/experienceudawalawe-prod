@extends('layouts.app')

@section('title', 'Sustainability | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')

    <!-- Hero Section -->
    <section class="relative h-screen w-full overflow-hidden bg-[#0d0d0c]" data-hero>
        <!-- Hero Image -->
        <img 
            src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?q=80&w=2000&auto=format&fit=crop" 
            alt="Sustainable practices at Experience Udawalawe" 
            class="absolute inset-0 h-full w-full object-cover"
            loading="eager"
        />
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/30 to-black/70"></div>

        <div class="relative z-10 flex h-full items-center">
            <div class="mx-auto w-full max-w-7xl px-4 text-center sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto space-y-6">
                    <!-- Page Category -->
                    <div class="space-y-2">
                        <p class="text-xs uppercase tracking-[0.3em] text-white/70 font-medium">Sustainability at Experience Udawalawe</p>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl leading-tight" data-no-divider>
                        Authentic Roots,<br class="hidden sm:block"> Living Stories
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-lg leading-relaxed text-white/95 sm:text-xl font-light max-w-3xl mx-auto">
                        – for a Greener Tomorrow
                    </p>

                    <!-- Description -->
                    <div class="max-w-4xl mx-auto">
                        <p class="text-base leading-relaxed text-white/90 sm:text-lg font-light">
                            We believe that a better tomorrow begins with what we do today. That is why sustainability is woven into every story we tell, every meal we serve, and every experience we create. By choosing to dine with us or join our experiences, our valued guests become partners in preserving Sri Lanka's nature, culture, and communities for generations to come.
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-4">
                        <a href="#philosophy" class="group inline-flex items-center gap-3 rounded-full bg-white/15 backdrop-blur-md border border-white/40 px-8 py-4 text-base font-semibold text-white transition-all duration-300 hover:bg-white hover:text-stone-900 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white/70 shadow-xl">
                            Explore Our Philosophy
                            <svg class="w-5 h-5 transition-transform group-hover:translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main class="bg-[#FDFDFC]">
        <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20 space-y-20">
            
            <!-- Philosophy Section -->
            <section id="philosophy" class="space-y-12">
                <div class="text-center space-y-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-stone-400 font-medium">Our Philosophy</p>
                    <h2 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl lg:text-5xl" data-no-divider>
                        Living Wisdom, Lasting Responsibility
                    </h2>
                    
                    <!-- Single rotation flower -->
                    <div class="flex items-center justify-center py-2">
                        <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent"></div>
                        <img
                            src="{{ asset('images/elements/rorate-flower.png') }}"
                            alt=""
                            class="mx-4 h-8 w-8 animate-spin-slower object-contain opacity-80"
                            loading="lazy"
                        >
                        <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent"></div>
                    </div>
                </div>

                <div class="max-w-4xl mx-auto">
                    <p class="text-lg sm:text-xl font-light leading-relaxed text-[#2c2c28] text-center mb-12">
                        At Experience Udawalawe, sustainability is not just a practice – it is a way of life inherited from generations of Sri Lankans. Every tradition we share, every flavor we celebrate, and every story we tell is designed to protect our environment, honor our culture, and empower our community.
                    </p>

                    <div class="space-y-8">
                        <h3 class="text-2xl font-semibold text-[#1b1b18] mb-6">We are committed to:</h3>
                        
                        <div class="grid gap-8 md:grid-cols-2">
                            <div class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm">
                                <div class="flex items-start gap-4">
                                    <div class="w-3 h-3 rounded-full bg-amber-500 mt-2 flex-shrink-0"></div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-[#1b1b18] mb-3">Caring for Nature</h4>
                                        <p class="text-sm text-[#50504d] leading-relaxed">
                                            Choosing simple, natural alternatives, reusing what we can, and treating water as the precious resource it is.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm">
                                <div class="flex items-start gap-4">
                                    <div class="w-3 h-3 rounded-full bg-emerald-500 mt-2 flex-shrink-0"></div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-[#1b1b18] mb-3">Keeping Traditions Alive</h4>
                                        <p class="text-sm text-[#50504d] leading-relaxed">
                                            Sharing everyday practices and knowledge passed down through generations, so culture remains a living part of the present.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm">
                                <div class="flex items-start gap-4">
                                    <div class="w-3 h-3 rounded-full bg-blue-500 mt-2 flex-shrink-0"></div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-[#1b1b18] mb-3">Strengthening Our Community</h4>
                                        <p class="text-sm text-[#50504d] leading-relaxed">
                                            Creating fair livelihoods and opportunities so that families in Udawalawe grow alongside us.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm">
                                <div class="flex items-start gap-4">
                                    <div class="w-3 h-3 rounded-full bg-purple-500 mt-2 flex-shrink-0"></div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-[#1b1b18] mb-3">Growing with Respect</h4>
                                        <p class="text-sm text-[#50504d] leading-relaxed">
                                            Expanding only in ways that honor the land, its people, and the heritage that makes this place unique.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Dashboard Section -->
            <section id="dashboard" class="space-y-12">
                <div class="text-center space-y-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-stone-400 font-medium">Sustainability Dashboard 2024</p>
                    <h3 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Small Steps, Real Impact
                    </h3>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-3 h-3 rounded-full bg-green-500 mt-2 flex-shrink-0"></div>
                            <div>
                                <p class="text-3xl font-semibold text-[#1b1b18] mb-2">10,000+</p>
                                <p class="text-sm font-medium text-[#1b1b18] mb-2">plastic bottles avoided</p>
                                <p class="text-sm text-[#50504d]">annually through refillable glass and clay options.</p>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-3 h-3 rounded-full bg-amber-500 mt-2 flex-shrink-0"></div>
                            <div>
                                <p class="text-3xl font-semibold text-[#1b1b18] mb-2">80%</p>
                                <p class="text-sm font-medium text-[#1b1b18] mb-2">of our ingredients sourced locally</p>
                                <p class="text-sm text-[#50504d]">supporting farmers and reducing food miles.</p>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-3 h-3 rounded-full bg-blue-500 mt-2 flex-shrink-0"></div>
                            <div>
                                <p class="text-3xl font-semibold text-[#1b1b18] mb-2">20+</p>
                                <p class="text-sm font-medium text-[#1b1b18] mb-2">local families supported</p>
                                <p class="text-sm text-[#50504d]">directly through food supply, guiding, and cultural sharing.</p>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-3 h-3 rounded-full bg-purple-500 mt-2 flex-shrink-0"></div>
                            <div>
                                <p class="text-3xl font-semibold text-[#1b1b18] mb-2">Water-saving</p>
                                <p class="text-sm font-medium text-[#1b1b18] mb-2">practices</p>
                                <p class="text-sm text-[#50504d]">in our kitchens and gardens to reduce wastage.</p>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-3 h-3 rounded-full bg-emerald-500 mt-2 flex-shrink-0"></div>
                            <div>
                                <p class="text-3xl font-semibold text-[#1b1b18] mb-2">0</p>
                                <p class="text-sm font-medium text-[#1b1b18] mb-2">staged tourism activities</p>
                                <p class="text-sm text-[#50504d]">all experiences remain authentic and respectful to nature.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Across Our Experiences Section -->
            <section id="across" class="space-y-12">
                <div class="text-center space-y-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-stone-400 font-medium">Across Our Experiences</p>
                    <h3 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Practices we carry through everything we do
                    </h3>
                    <p class="text-base leading-relaxed text-[#50504d] sm:text-lg max-w-3xl mx-auto font-light">
                        Sustainability is part of every activity we share with our guests. From dining to excursions, each choice is designed to reduce waste, celebrate culture, and support local livelihoods.
                    </p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @php
                        $experienceHighlights = [
                            'Refillable Bottles' => 'Every refill in a glass or clay bottle means one less plastic bottle left behind. Guests stay refreshed, and the rivers and fields of Udawalawe stay clean.',
                            'Locally Crafted Utensils & Cutlery' => 'Meals are served in clay, cane, and coconut-shell alternatives that replace plastics. Each piece supports local artisans and keeps dining natural and waste-free.',
                            'Plastic-Free Excursions' => 'Our journeys leave memories, not litter. From lake to village paths, every excursion is designed to be completely free of disposables.',
                            'Farm-to-Table Dining' => 'The food we share comes from nearby fields and gardens, harvested by local farmers. This keeps meals fresh while strengthening rural livelihoods.',
                            'Heritage Practices' => 'Everyday traditions are preserved and shared with care, offering families fair income while keeping culture a living part of the present.',
                            'Waste Reduction' => 'What comes from the earth returns to it. Organic kitchen waste is composted back into the soil, nourishing the garden for the next harvest.',
                            'Supporting Local Entrepreneurs' => 'We work directly with small-scale farmers, drivers, and craftspeople, ensuring that tourism strengthens local businesses and communities.',
                        ];
                    @endphp
                    @foreach($experienceHighlights as $title => $description)
                        <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                            <h4 class="text-lg font-semibold text-[#1b1b18] mb-4">{{ $title }}</h4>
                            <p class="text-sm text-[#50504d] leading-relaxed">{{ $description }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <!-- At Our Site Section -->
            <section id="onsite" class="space-y-12">
                <div class="text-center space-y-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-stone-400 font-medium">At Our Site (Experience Udawalawe)</p>
                    <h3 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Sustainability woven into our home in Udawalawe
                    </h3>
                    <p class="text-base leading-relaxed text-[#50504d] sm:text-lg max-w-3xl mx-auto font-light">
                        Our commitment to sustainability begins at home, in the way our site was built and is cared for every day.
                    </p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @php
                        $siteHighlights = [
                            'No Trees Cut' => 'Not a single tree was removed to make way for us. Buildings curve around the land as it was found, keeping nature at the heart of our space.',
                            'Eco-Friendly Design' => 'Upcycled and recyclable materials were chosen to build with care, creating spaces that last while leaving little behind.',
                            'Local Interiors' => 'Our interiors draw on batik and other local artistry, blending culture into every corner and reducing dependence on imported materials.',
                            'Local Hiring' => 'Our team is rooted in Udawalawe. By offering fair jobs and training, we keep opportunities close to home and ensure families grow with us.',
                            'Community Transport' => 'We work with jeep and tuk-tuk owners from the village, so every journey supports local livelihoods while giving guests authentic ways to explore.',
                        ];
                    @endphp
                    @foreach($siteHighlights as $title => $description)
                        <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                            <h4 class="text-lg font-semibold text-[#1b1b18] mb-4">{{ $title }}</h4>
                            <p class="text-sm text-[#50504d] leading-relaxed">{{ $description }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <!-- Community First Section -->
            <section id="community" class="space-y-12">
                <div class="text-center space-y-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-stone-400 font-medium">Community First</p>
                    <h3 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Tourism with people at its heart
                    </h3>
                    <p class="text-base leading-relaxed text-[#50504d] sm:text-lg max-w-4xl mx-auto font-light">
                        Sustainability has many sides. While caring for nature runs through everything we do, we also believe true responsibility means uplifting the people who welcome our guests. Community First is our promise that tourism here strengthens livelihoods, traditions, and dignity in Udawalawe.
                    </p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18] mb-4">Local Hiring & Training</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Our team is rooted in Udawalawe. By offering fair jobs and training, we keep opportunities close to home and ensure families grow with us.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18] mb-4">Supporting Artisans</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            From handcrafts to home cooking, we work with villagers who share their talents and earn fair income through tourism.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18] mb-4">Women & Youth Empowerment</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            We create space for women to take leadership roles and youth to gain experience in sustainable hospitality.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18] mb-4">Fair Revenue Sharing</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Families who guide, host, or cook as part of our experiences are directly rewarded, ensuring tourism benefits are shared fairly.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18] mb-4">Cultural Exchange</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Guests connect with villagers in authentic ways, creating mutual respect and understanding that lasts beyond the visit.
                        </p>
                    </article>
                </div>
            </section>

                        <!-- Deep Dives Section -->
            <section id="subpages" class="space-y-12">
                <div class="text-center space-y-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-stone-400 font-medium">Deep Dives & Resources</p>
                    <h3 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Explore Our Focus Areas
                    </h3>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm hover:shadow-lg transition-all duration-300">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96] mb-4">Focus Area</p>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Reduction of Single-Use Plastics</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-6">Simple choices today, a greener Udawalawe tomorrow. Discover our journey to eliminate plastic waste.</p>
                        <a href="{{ route('sustainability.plastics') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                            Learn more
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm hover:shadow-lg transition-all duration-300">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96] mb-4">Focus Area</p>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Entrepreneurship Opportunities</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-6">Growth rooted in community. See how we support local entrepreneurs and create sustainable livelihoods.</p>
                        <a href="{{ route('sustainability.entrepreneurship') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                            Learn more
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm hover:shadow-lg transition-all duration-300">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96] mb-4">Focus Area</p>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Eco-Friendly Construction</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-6">Built with care, in harmony with the land. Explore our commitment to sustainable building practices.</p>
                        <a href="{{ route('sustainability.construction') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                            Learn more
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm hover:shadow-lg transition-all duration-300">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96] mb-4">Focus Area</p>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Community Engagement</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-6">Shared journeys, shared futures. Learn about our partnerships with the local community.</p>
                        <a href="{{ route('sustainability.community') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                            Learn more
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm hover:shadow-lg transition-all duration-300">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96] mb-4">Focus Area</p>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Contribution to the Global Goals</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-6">Authentic Roots, Living Stories aligned with the United Nations SDGs and our impact on global sustainability.</p>
                        <a href="{{ route('sustainability.sdgs') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                            Learn more
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </article>
                </div>
            </section>

            <!-- Our Promise Section -->
            <section id="promise" class="bg-gradient-to-br from-stone-50 to-white rounded-3xl p-12 shadow-lg">
                <div class="text-center space-y-6">
                    <p class="text-xs uppercase tracking-[0.3em] text-stone-400 font-medium">Our Promise</p>
                    <h3 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Together for Tomorrow
                    </h3>
                    <p class="text-base sm:text-lg leading-relaxed text-[#50504d] max-w-4xl mx-auto font-light">
                        Every choice we make is guided by one belief: sustainability is something we share. When a guest enjoys a meal made the traditional way, learns from our community, or explores Udawalawe with care, the story of this land becomes stronger.
                    </p>
                    <p class="text-base sm:text-lg leading-relaxed text-[#50504d] max-w-4xl mx-auto font-light">
                        Together with our community and our guests, we are shaping a future that is greener, fairer, and deeply connected to the living stories of Sri Lanka.
                    </p>
                    <div class="pt-4">
                        <a href="{{ route('contact') }}" class="group inline-flex items-center gap-3 rounded-full bg-[#1b1b18] px-8 py-4 text-base font-semibold text-white transition-all duration-300 hover:bg-stone-800 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-stone-400 shadow-lg">
                            Partner with us
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>

            <section id="promise" class="rounded-3xl border border-[#ecebe5] bg-white p-10 shadow-sm">
                <div class="grid gap-6 lg:grid-cols-[1fr_auto] lg:items-center">
                    <div class="space-y-4">
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Our Promise</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Together for Tomorrow</h3>
                        <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                            We commit to measurable goals, transparent reporting, and community ownership of our sustainability agenda.
                            Guests are invited to participate, learn, and advocate alongside us—because Udawalawe’s future belongs to
                            those who care for it today.
                        </p>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-8 py-3 text-xs font-semibold uppercase tracking-[0.3em] text-[#50504d] hover:border-[#f53003] hover:text-[#f53003] transition">
                        Partner with us
                    </a>
                </div>
            </section>
        </div>
    </main>
@endsection
