@extends('layouts.app')

@section('title', $title . ' | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => $title, 'subtitle' => 'Authentic Roots, Living Stories'])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-12">
            <section class="space-y-4">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Experience Snapshot</p>
                <h2 class="text-2xl font-semibold text-[#1b1b18]">{{ $title }}</h2>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Immerse yourself in the rhythms of Udawalawe—connecting with the people, ingredients, and landscapes that bring
                    this experience to life. Expect intimate storytelling, hands-on learning, and unhurried moments that stay with you.
                </p>
            </section>

            <section class="grid gap-6 md:grid-cols-[1.2fr_1fr] md:items-start">
                <div class="overflow-hidden rounded-2xl border border-[#ecebe5] bg-black/5">
                    <video class="h-full w-full object-cover" controls poster="{{ asset('images/logosample.png') }}">
                        <source src="{{ asset('videos/intro.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <aside class="space-y-4 rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm text-sm text-[#50504d]">
                    <div class="flex items-center justify-between text-xs uppercase tracking-[0.3em] text-[#9c9b96]">
                        <span>Duration</span>
                        <span>Group Size</span>
                    </div>
                    <div class="flex items-center justify-between text-base font-semibold text-[#1b1b18]">
                        <span>2–3 hours</span>
                        <span>Up to 12 guests</span>
                    </div>
                    <div class="border-t border-[#ecebe5] pt-4">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Highlights</p>
                        <ul class="mt-3 space-y-2">
                            <li>Guided by community experts with generational knowledge.</li>
                            <li>Hands-on participation with sustainable tools and ingredients.</li>
                            <li>Shared meal or reflection circle celebrating the experience.</li>
                        </ul>
                    </div>
                </aside>
            </section>

            <article class="space-y-4">
                <h3 class="text-lg font-semibold text-[#1b1b18]">Narrative</h3>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Begin with a welcome tea as your hosts share the lineage behind this experience. You will trace the ingredients,
                    rituals, and community innovations that inspired it. Along the way, you will learn how each element sustains both
                    the ecosystem and the families who steward it.
                </p>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Expect to move through different spaces—gardens, kitchens, lakeshores, or ateliers—each revealing a new layer of
                    Udawalawe’s living heritage. Storytelling is woven into every activity, ensuring you understand the broader impact
                    of your participation.
                </p>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    The experience concludes with a reflective circle and a shared pledge to carry these practices forward, whether in
                    your own kitchen, community, or future travels.
                </p>
            </article>

            <section class="grid gap-6 md:grid-cols-2">
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm space-y-3">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Practical Info</h3>
                    <ul class="space-y-2 text-sm text-[#50504d]">
                        <li><strong>Meeting point:</strong> Experience Udawalawe welcome pavilion (transfers available on request).</li>
                        <li><strong>Inclusions:</strong> Hosts, materials, refreshments, community contribution, and digital keepsakes.</li>
                        <li><strong>What to bring:</strong> Comfortable attire, reusable water bottle, curiosity.</li>
                        <li><strong>Languages:</strong> English and Sinhala (Tamil facilitators available with notice).</li>
                    </ul>
                </article>
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm space-y-3">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Good to Know</h3>
                    <ul class="space-y-2 text-sm text-[#50504d]">
                        <li>We maintain small group sizes to honor hosts and ensure meaningful interaction.</li>
                        <li>Accessibility adaptations and dietary accommodations can be arranged ahead of time.</li>
                        <li>Rain plans, shade structures, and cooling breaks are included for seasonal comfort.</li>
                        <li>Photography is welcome with host consent; audio recordings available for storytellers.</li>
                    </ul>
                </article>
            </section>

            <section class="rounded-3xl border border-[#ecebe5] bg-white p-8 shadow-sm space-y-4">
                <h3 class="text-lg font-semibold text-[#1b1b18]">Traveler Q&amp;A</h3>
                <div class="space-y-3 text-sm text-[#50504d]">
                    <p><strong>What should I expect from the hosts?</strong> You will be welcomed by multi-generational storytellers who share their craft with warmth and respect. They encourage questions and hands-on participation.</p>
                    <p><strong>Can children join?</strong> Yes. We personalize activities for different age groups and can create sensory stations or shorter modules for young travelers.</p>
                    <p><strong>Is the experience private?</strong> Most sessions are private unless you request to join a community group. Let us know your preference when booking.</p>
                </div>
            </section>

            <section class="rounded-3xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm space-y-4 text-center">
                <h3 class="text-lg font-semibold text-[#1b1b18]">Continue your journey</h3>
                <p class="text-sm text-[#50504d] leading-relaxed">
                    Pair this experience with a culinary evening at Ceylon 1850 or a conservation walk at sunrise. Our team will help
                    you curate a flow that fits your pace.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 text-sm font-semibold">
                    <a href="{{ route('dining') }}" class="text-[#f53003] hover:text-[#c62502] transition">Explore dining at Ceylon 1850</a>
                    <span class="text-[#9c9b96]">•</span>
                    <a href="{{ route('experiences.index') }}" class="text-[#f53003] hover:text-[#c62502] transition">Back to all experiences</a>
                </div>
            </section>
        </div>
    </main>
@endsection
