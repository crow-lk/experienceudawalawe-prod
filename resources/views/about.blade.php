@extends('layouts.app')

@section('title', 'About Us | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => 'About Us', 'subtitle' => 'Our story & team'])
    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20 space-y-16">
            <section class="grid gap-8 lg:grid-cols-[1.2fr_1fr] lg:items-start">
                <div class="space-y-6">
                    <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">About Experience Udawalawa</p>
                    <h2 class="text-3xl font-semibold text-[#1b1b18]">From ancestral roots to regenerative futures</h2>
                    @include('partials.heading-divider', ['showIcon' => true])
                    <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                        Experience Udawalawa is a living campus that brings together storytellers, naturalists, and culinary
                        artisans who call the Udawalawe region home. We craft journeys that honor heritage, celebrate biodiversity,
                        and uplift the communities that steward this landscape. Every detail—from the spices we grind to the
                        murals on our walls—carries the imprint of people who have tended this place for generations.
                    </p>
                    <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                        As hosts, we are bridge-builders. We invite guests to slow down, listen deeply, and contribute to a travel
                        movement that leaves ecosystems healthier and families more resilient.
                    </p>
                </div>
                <aside class="rounded-2xl border border-[#ecebe5] bg-white p-8 space-y-4 shadow-sm">
                    <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Who We Are</p>
                    <ul class="space-y-3 text-sm text-[#50504d]">
                        <li class="flex gap-3">
                            <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                            Family-run heritage hosts with deep ties to Udawalawe.
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                            Naturalists, chefs, and community leaders co-creating each experience.
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                            Advocates for wildlife corridors, artisan livelihoods, and youth programs.
                        </li>
                    </ul>
                </aside>
            </section>

            <section class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Our Philosophy</h3>
                @include('partials.heading-divider')
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Sustainability</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            We champion regenerative practices, from refillable water stations to zero-waste kitchens and solar lighting.
                            Every stay funds habitat restoration and local conservation partners.
                        </p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Culture &amp; Heritage</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Our experiences preserve indigenous knowledge—rice rituals, Ayurvedic spice lore, folk drumming—and ensure
                            that custodians of culture lead the storytelling.
                        </p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Community First</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            We prioritize local hiring, entrepreneurship, and revenue sharing. Guests engage with real village life,
                            supporting artisans, farmers, and youth initiatives.
                        </p>
                    </article>
                </div>
            </section>

            <section class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">What We Offer</h3>
                @include('partials.heading-divider')
                <div class="grid gap-6 md:grid-cols-3">
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-6 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Restaurant</p>
                        <h4 class="mt-3 text-lg font-semibold text-[#1b1b18]">Ceylon 1850</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Farm-to-table feasts, heirloom rice tastings, and tea rituals curated by multi-generational cooks.
                        </p>
                        <a href="{{ route('dining') }}" class="mt-4 inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Explore dining</a>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-6 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Cultural Experiences</p>
                        <h4 class="mt-3 text-lg font-semibold text-[#1b1b18]">Living Traditions</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Spice ateliers, weaving workshops, and evening drum circles led by village masters.
                        </p>
                        <a href="{{ route('experiences.index') }}#culture" class="mt-4 inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Meet the storytellers</a>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-6 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Nature Excursions</p>
                        <h4 class="mt-3 text-lg font-semibold text-[#1b1b18]">Wild Horizons</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            Sunrise lake drifts, regenerative safaris, and agro-forest walks with conservation guides.
                        </p>
                        <a href="{{ route('experiences.index') }}#wildlife" class="mt-4 inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Plan an excursion</a>
                    </article>
                </div>
            </section>

            <section class="rounded-3xl border border-[#ecebe5] bg-white p-10 shadow-sm">
                <div class="grid gap-6 lg:grid-cols-[1fr_auto] lg:items-center">
                    <div class="space-y-4">
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Our Promise</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Journeys that leave lasting impact</h3>
                        @include('partials.heading-divider')
                        <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                            We commit to transparency, community-led decisions, and measurable sustainability milestones.
                            Your stay fuels scholarships, habitat monitoring, women-led enterprises, and the preservation of
                            Village Udawalawe’s living heritage.
                        </p>
                    </div>
                    <div class="rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-8 py-6 text-center text-sm uppercase tracking-[0.35em] text-[#50504d]">
                        Together for Tomorrow
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
