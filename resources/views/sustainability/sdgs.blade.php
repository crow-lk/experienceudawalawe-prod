@extends('layouts.app')

@section('title', 'Contribution to the Global Goals | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', [
        'title' => 'Our Contribution to the Global Goals',
        'subtitle' => 'Aligning impact with the UN Sustainable Development Goals'
    ])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-12">
            <section class="space-y-4">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Global alignment</p>
                <h2 class="text-2xl font-semibold text-[#1b1b18]">From local actions to global outcomes</h2>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Our sustainability roadmap is mapped to the United Nations Sustainable Development Goals (SDGs). Each guest
                    experience, partnership, and community initiative contributes to the targets outlined by these global goals.
                </p>
            </section>

            <section class="grid gap-6 md:grid-cols-2">
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Key SDGs we advance</h3>
                    <ul class="mt-4 space-y-3 text-sm text-[#50504d]">
                        <li><strong>SDG 2:</strong> Farm-to-table sourcing, organic seed banks, and nutrition workshops.</li>
                        <li><strong>SDG 4:</strong> Scholarships, field labs, and youth mentorship in conservation tech.</li>
                        <li><strong>SDG 5:</strong> Women-led enterprises and leadership pathways in hospitality.</li>
                        <li><strong>SDG 8:</strong> Decent work through fair contracts, living wages, and ethical supply chains.</li>
                    </ul>
                </article>
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Environmental goals</h3>
                    <ul class="mt-4 space-y-3 text-sm text-[#50504d]">
                        <li><strong>SDG 12:</strong> Circular systems, zero-waste kitchens, and mindful guest consumption.</li>
                        <li><strong>SDG 13:</strong> Carbon-lite operations with solar, reforestation, and climate literacy.</li>
                        <li><strong>SDG 14:</strong> River clean-ups and wetland conservation across our lake experiences.</li>
                        <li><strong>SDG 15:</strong> Habitat restoration, wildlife corridors, and biodiversity monitoring.</li>
                    </ul>
                </article>
            </section>

            <section class="rounded-3xl border border-[#ecebe5] bg-white p-8 shadow-sm space-y-6">
                <h3 class="text-lg font-semibold text-[#1b1b18]">Reporting &amp; collaboration</h3>
                <p class="text-sm text-[#50504d]">
                    We publish an annual impact brief, co-authored with local partners, that details progress on each SDG target.
                    We welcome collaborations with research institutions, NGOs, and conscious travelers to scale these outcomes.
                </p>
                <div class="flex flex-col gap-3 text-sm text-[#50504d] lg:flex-row lg:items-center lg:justify-between">
                    <a href="{{ route('sustainability') }}#dashboard" class="inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Back to sustainability overview</a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-6 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-[#50504d] hover:border-[#f53003] hover:text-[#f53003] transition">Request the impact brief</a>
                </div>
            </section>
        </div>
    </main>
@endsection
