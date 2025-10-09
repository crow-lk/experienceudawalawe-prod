@extends('layouts.app')

@section('title', 'Sustainability | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')

    <section class="relative w-full bg-[url('/images/hero-fallback.jpg')] bg-cover bg-center h-[45vh] md:h-[55vh] flex items-center">
        <div class="absolute inset-0 bg-black/55"></div>
        <div class="relative z-10 mx-auto max-w-4xl px-6 text-center text-white space-y-4">
            <p class="text-xs uppercase tracking-[0.4em] text-white/60">Sustainability at Experience Udawalawe</p>
            <h1 class="text-3xl md:text-4xl font-semibold uppercase tracking-[0.35em]">Living Wisdom, Lasting Responsibility</h1>
            <p class="text-sm text-white/80 sm:text-base leading-relaxed">
                Every stay supports wildlife corridors, circular economies, and community-led futures. Explore how your journey
                becomes part of a collective promise—together for tomorrow.
            </p>
        </div>
    </section>

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20 space-y-16">
            <section id="intro" class="grid gap-8 lg:grid-cols-[1.2fr_1fr] lg:items-start">
                <div class="space-y-6">
                    <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Our Sustainability Story</p>
                    <h2 class="text-3xl font-semibold text-[#1b1b18]">Guardians of place, partners in progress</h2>
                    <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                        Sustainability is not an add-on—it is how Experience Udawalawe was imagined from day one. We work with
                        villagers, conservationists, and social entrepreneurs to restore habitats, honor cultural knowledge, and
                        create resilient livelihoods. Every experience is mapped against impact pillars that benefit both people
                        and the sanctuary we call home.
                    </p>
                </div>
                <aside class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm space-y-4">
                    <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Impact Snapshot</p>
                    <ul class="space-y-3 text-sm text-[#50504d]">
                        <li class="flex gap-3">
                            <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                            85% of our team members are hired locally with continuous training.
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                            100% of guest water provided via refill stations—zero single-use plastic bottles.
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                            12 village enterprises incubated through our entrepreneurship labs.
                        </li>
                    </ul>
                </aside>
            </section>

            <section id="philosophy" class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Our Philosophy</h3>
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Living Wisdom</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            We honor indigenous knowledge, from herbal medicine to irrigation rituals. Elders lead storytelling
                            circles, and their insights shape our conservation plans and guest experiences.
                        </p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-6 shadow-sm">
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Lasting Responsibility</h4>
                        <p class="mt-3 text-sm text-[#50504d]">
                            We align our actions with regenerative principles—designing for circular systems, reducing waste, and
                            investing in community infrastructure that endures beyond tourism seasons.
                        </p>
                    </article>
                </div>
            </section>

            <section id="dashboard" class="space-y-8">
                <div class="flex flex-col gap-2 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Sustainability Dashboard 2024</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Tracking progress that matters</h3>
                    </div>
                    <a href="{{ route('sustainability.sdgs') }}" class="inline-flex items-center text-xs font-semibold uppercase tracking-[0.3em] text-[#f53003] hover:text-[#c62502] transition">See SDG alignment</a>
                </div>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 text-center shadow-sm">
                        <p class="text-4xl font-semibold text-[#1b1b18]">62%</p>
                        <p class="mt-2 text-xs uppercase tracking-[0.35em] text-[#9c9b96]">Energy from solar</p>
                        <p class="mt-3 text-sm text-[#50504d]">Target: 80% by end 2025</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 text-center shadow-sm">
                        <p class="text-4xl font-semibold text-[#1b1b18]">1,200+</p>
                        <p class="mt-2 text-xs uppercase tracking-[0.35em] text-[#9c9b96]">Refill bottle saves</p>
                        <p class="mt-3 text-sm text-[#50504d]">Tracked through guest RFID refills</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 text-center shadow-sm">
                        <p class="text-4xl font-semibold text-[#1b1b18]">48</p>
                        <p class="mt-2 text-xs uppercase tracking-[0.35em] text-[#9c9b96]">Women &amp; youth incubated</p>
                        <p class="mt-3 text-sm text-[#50504d]">Supported via our entrepreneurship labs</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 text-center shadow-sm">
                        <p class="text-4xl font-semibold text-[#1b1b18]">12 ha</p>
                        <p class="mt-2 text-xs uppercase tracking-[0.35em] text-[#9c9b96]">Habitat restored</p>
                        <p class="mt-3 text-sm text-[#50504d]">Through native planting and corridor protection</p>
                    </article>
                </div>
            </section>

            <section id="across" class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Across Our Experiences</h3>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @php
                        $experienceHighlights = [
                            'Refillable Bottles' => 'Personal copper bottles issued on arrival, with refill points on every trail.',
                            'Local Utensils' => 'Meals served in clay, wood, and woven ware crafted by village artisans.',
                            'Plastic-Free Excursions' => 'Zero disposable plastics on safaris, lake drifts, and treks.',
                            'Farm-to-Table' => '75% of produce sourced from partner farms within 20 km.',
                            'Heritage Practices' => 'Guests learn time-honored agroforestry and harvesting rituals.',
                            'Waste Reduction' => 'Kitchen waste composted into organic fertilizer for our gardens.',
                            'Local Entrepreneurs' => 'Guest purchases support verified community enterprises.',
                        ];
                    @endphp
                    @foreach($experienceHighlights as $title => $description)
                        <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                            <h4 class="text-lg font-semibold text-[#1b1b18]">{{ $title }}</h4>
                            <p class="mt-3 text-sm text-[#50504d]">{{ $description }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="onsite" class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">At Our Site</h3>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @php
                        $siteHighlights = [
                            'No Trees Cut' => 'We built around existing flora, integrating decks and pathways with minimal disturbance.',
                            'Eco-Friendly Design' => 'Buildings use compressed earth blocks, recycled timber, and lime plaster finishes.',
                            'Local Interiors' => 'Textiles, ceramics, and murals commissioned from Udawalawe artisans.',
                            'Local Hiring' => '80% of construction workforce recruited within a 15 km radius.',
                            'Community Transport' => 'Electric tuk-tuks operated by neighborhood cooperatives.',
                            'Rainwater Harvesting' => 'Storage tanks irrigate our gardens and refill water features.',
                        ];
                    @endphp
                    @foreach($siteHighlights as $title => $description)
                        <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-6 shadow-sm">
                            <h4 class="text-lg font-semibold text-[#1b1b18]">{{ $title }}</h4>
                            <p class="mt-3 text-sm text-[#50504d]">{{ $description }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="community" class="space-y-8">
                <div class="grid gap-8 lg:grid-cols-[1.1fr_1fr] lg:items-center">
                    <div class="space-y-6">
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Community First</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Shared prosperity is our baseline</h3>
                        <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                            We co-design programs with village councils, women-led cooperatives, and youth mentors. Revenue shares
                            are transparent, guest experiences are co-hosted, and we reinvest in the ideas the community prioritizes.
                        </p>
                    </div>
                    <aside class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm space-y-3 text-sm text-[#50504d]">
                        <div class="flex gap-3">
                            <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                            Local hiring with career pathways in hospitality, guiding, and conservation tech.
                        </div>
                        <div class="flex gap-3">
                            <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                            Women &amp; youth empowerment labs, producing artisan goods and agro-innovations.
                        </div>
                        <div class="flex gap-3">
                            <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                            Fair revenue sharing with community partners for every hosted experience.
                        </div>
                        <div class="flex gap-3">
                            <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                            Cultural exchanges that invite guests to engage respectfully and reciprocally.
                        </div>
                    </aside>
                </div>
            </section>

            <section id="subpages" class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Deep dives &amp; resources</h3>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Focus Area</p>
                        <h4 class="mt-3 text-lg font-semibold text-[#1b1b18]">Reduction of Single-Use Plastics</h4>
                        <p class="mt-3 text-sm text-[#50504d]">Dive into our zero-waste playbook, refill stations, and supplier audits.</p>
                        <a href="{{ route('sustainability.plastics') }}" class="mt-4 inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Learn more</a>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Focus Area</p>
                        <h4 class="mt-3 text-lg font-semibold text-[#1b1b18]">Entrepreneurship Opportunities</h4>
                        <p class="mt-3 text-sm text-[#50504d]">Discover programs that incubate women &amp; youth-led enterprises.</p>
                        <a href="{{ route('sustainability.entrepreneurship') }}" class="mt-4 inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Learn more</a>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Focus Area</p>
                        <h4 class="mt-3 text-lg font-semibold text-[#1b1b18]">Eco-Friendly Construction</h4>
                        <p class="mt-3 text-sm text-[#50504d]">See how we built with vernacular wisdom, green materials, and low impact.</p>
                        <a href="{{ route('sustainability.construction') }}" class="mt-4 inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Learn more</a>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Focus Area</p>
                        <h4 class="mt-3 text-lg font-semibold text-[#1b1b18]">Community Engagement</h4>
                        <p class="mt-3 text-sm text-[#50504d]">Explore how co-creation, feedback loops, and shared governance shape us.</p>
                        <a href="{{ route('sustainability.community') }}" class="mt-4 inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Learn more</a>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Focus Area</p>
                        <h4 class="mt-3 text-lg font-semibold text-[#1b1b18]">Contribution to the Global Goals</h4>
                        <p class="mt-3 text-sm text-[#50504d]">Understand our alignment with the United Nations Sustainable Development Goals.</p>
                        <a href="{{ route('sustainability.sdgs') }}" class="mt-4 inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Learn more</a>
                    </article>
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
