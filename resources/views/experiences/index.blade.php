@extends('layouts.app')

@section('title', 'Experiences | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => 'Experiences', 'subtitle' => 'Discover authentic experiences'])
    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20 space-y-16">
            <section class="space-y-6 text-center lg:text-left">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Immersive Journeys</p>
                <h2 class="text-3xl font-semibold text-[#1b1b18]">Live the stories of Udawalawe</h2>
                <div class="mx-auto max-w-3xl space-y-4 text-sm text-[#50504d] sm:text-base leading-relaxed">
                    <p>
                        Every experience is handcrafted with village hosts, naturalists, and artisans. From lakeside sunrises to spice
                        ateliers, you will cook, craft, listen, and learn alongside the people who keep Udawalawe’s heritage alive.
                    </p>
                    <p>
                        Select a theme below or browse everything at once—the filters help you plan days filled with meaning,
                        not just itineraries.
                    </p>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-3 lg:justify-start">
                    @php
                        $filters = [
                            'All' => '#all',
                            'Culinary Journeys' => '#culinary',
                            'Wildlife & Nature' => '#wildlife',
                            'Culture & Village Life' => '#culture',
                            'Sustainability & Community' => '#sustainability',
                        ];
                    @endphp
                    @foreach($filters as $label => $anchor)
                        <a href="{{ route('experiences.index') . $anchor }}" class="inline-flex items-center rounded-full border border-[#ecebe5] bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.28em] text-[#50504d] transition hover:border-[#f53003] hover:text-[#f53003]">{{ $label }}</a>
                    @endforeach
                </div>
            </section>

            <section id="culinary" class="space-y-6">
                <header class="flex flex-col gap-2 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Culinary Journeys</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Taste Udawalawe</h3>
                    </div>
                    <a href="{{ route('experiences.show', 'cooking-class') }}" class="inline-flex items-center text-xs font-semibold uppercase tracking-[0.3em] text-[#f53003] hover:text-[#c62502] transition">View a sample itinerary</a>
                </header>
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Ceylon Spice Atelier</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Grind heirloom spices, learn Ayurveda-inspired recipes, and share a communal meal with village chefs.
                        </p>
                        <div class="mt-4 flex items-center justify-between text-xs uppercase tracking-[0.3em] text-[#9c9b96]">
                            <span>3 hours</span>
                            <a href="{{ route('experiences.show', 'spice-gardens') }}" class="font-semibold text-[#f53003] hover:text-[#c62502] transition">Details</a>
                        </div>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Village Hearth Suppers</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Join families around the hearth for clay-pot curries, folk songs, and storytelling under starlit skies.
                        </p>
                        <div class="mt-4 flex items-center justify-between text-xs uppercase tracking-[0.3em] text-[#9c9b96]">
                            <span>Evening</span>
                            <a href="{{ route('experiences.show', 'village-walks') }}" class="font-semibold text-[#f53003] hover:text-[#c62502] transition">Details</a>
                        </div>
                    </article>
                </div>
            </section>

            <section id="wildlife" class="space-y-6">
                <header class="flex flex-col gap-2 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Wildlife &amp; Nature</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Move with the Sanctuary</h3>
                    </div>
                    <a href="{{ route('experiences.show', 'safari-tour') }}" class="inline-flex items-center text-xs font-semibold uppercase tracking-[0.3em] text-[#f53003] hover:text-[#c62502] transition">See sample safari</a>
                </header>
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Sunrise Lake Drifts</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Paddle through lotus blooms and learn about migratory birds with our resident naturalists.
                        </p>
                        <div class="mt-4 flex items-center justify-between text-xs uppercase tracking-[0.3em] text-[#9c9b96]">
                            <span>Dawn</span>
                            <a href="{{ route('experiences.show', 'lake-activities') }}" class="font-semibold text-[#f53003] hover:text-[#c62502] transition">Details</a>
                        </div>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Regenerative Safaris</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Track elephant herds responsibly, discover wildlife corridors, and support rangers through each booking.
                        </p>
                        <div class="mt-4 flex items-center justify-between text-xs uppercase tracking-[0.3em] text-[#9c9b96]">
                            <span>Half day</span>
                            <a href="{{ route('experiences.show', 'safari-tour') }}" class="font-semibold text-[#f53003] hover:text-[#c62502] transition">Details</a>
                        </div>
                    </article>
                </div>
            </section>

            <section id="culture" class="space-y-6">
                <header class="flex flex-col gap-2 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Culture &amp; Village Life</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Live like a local</h3>
                    </div>
                    <a href="{{ route('experiences.show', 'village-walks') }}" class="inline-flex items-center text-xs font-semibold uppercase tracking-[0.3em] text-[#f53003] hover:text-[#c62502] transition">Walk with us</a>
                </header>
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Village Story Walks</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Meet home gardeners, weave with artisans, and learn about indigenous plants that color daily life.
                        </p>
                        <div class="mt-4 flex items-center justify-between text-xs uppercase tracking-[0.3em] text-[#9c9b96]">
                            <span>Morning</span>
                            <a href="{{ route('experiences.show', 'village-walks') }}" class="font-semibold text-[#f53003] hover:text-[#c62502] transition">Details</a>
                        </div>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Rhythm &amp; Ritual Evenings</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Participate in drumming sessions, temple lantern lighting, and oral histories shared by elders.
                        </p>
                        <div class="mt-4 flex items-center justify-between text-xs uppercase tracking-[0.3em] text-[#9c9b96]">
                            <span>Twilight</span>
                            <a href="{{ route('experiences.show', 'cooking-class') }}" class="font-semibold text-[#f53003] hover:text-[#c62502] transition">Details</a>
                        </div>
                    </article>
                </div>
            </section>

            <section id="sustainability" class="space-y-6">
                <header class="flex flex-col gap-2 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Sustainability &amp; Community</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Travel that gives back</h3>
                    </div>
                    <a href="{{ route('sustainability') }}" class="inline-flex items-center text-xs font-semibold uppercase tracking-[0.3em] text-[#f53003] hover:text-[#c62502] transition">Explore our impact</a>
                </header>
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Artisan Entrepreneurship Trail</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Meet women-led enterprises, craft with recycled materials, and contribute to community investment funds.
                        </p>
                        <div class="mt-4 flex items-center justify-between text-xs uppercase tracking-[0.3em] text-[#9c9b96]">
                            <span>Half day</span>
                            <a href="{{ route('sustainability.entrepreneurship') }}" class="font-semibold text-[#f53003] hover:text-[#c62502] transition">Highlights</a>
                        </div>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Zero-Waste Campus Tour</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Discover our refill stations, compost-driven gardens, and upcycled interiors with the sustainability team.
                        </p>
                        <div class="mt-4 flex items-center justify-between text-xs uppercase tracking-[0.3em] text-[#9c9b96]">
                            <span>90 minutes</span>
                            <a href="{{ route('sustainability.plastics') }}" class="font-semibold text-[#f53003] hover:text-[#c62502] transition">Highlights</a>
                        </div>
                    </article>
                </div>
            </section>

            <section id="all" class="rounded-3xl border border-[#ecebe5] bg-white p-10 shadow-sm">
                <div class="grid gap-6 lg:grid-cols-[1fr_auto] lg:items-center">
                    <div class="space-y-4">
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Individual Experience Pages</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Each story has its own home</h3>
                        <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                            Dive deeper into itineraries with traveler Q&amp;As, practical information, and cultural context.
                            Browse highlights above and open an experience page to get the full narrative of what awaits you.
                        </p>
                    </div>
                    <a href="{{ route('experiences.show', 'cooking-class') }}" class="inline-flex items-center justify-center rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-8 py-3 text-xs font-semibold uppercase tracking-[0.3em] text-[#50504d] hover:border-[#f53003] hover:text-[#f53003] transition">
                        Preview a page
                    </a>
                </div>
            </section>
        </div>
    </main>
@endsection
