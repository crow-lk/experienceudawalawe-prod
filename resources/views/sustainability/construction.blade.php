@extends('layouts.app')

@section('title', 'Eco-Friendly Construction | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', [
        'title' => 'Eco-Friendly Construction',
        'subtitle' => 'Architecture that honours the land'
    ])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-12">
            <section class="space-y-4">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Design principles</p>
                <h2 class="text-2xl font-semibold text-[#1b1b18]">Building with vernacular wisdom</h2>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Experience Udawalawe was constructed as an extension of the landscape. We adopted vernacular techniques,
                    climate-responsive architecture, and low-impact materials sourced within the region. Construction involved
                    community craftspeople whose knowledge shaped every wall, roof, and courtyard.
                </p>
            </section>

            <section class="grid gap-6 md:grid-cols-2">
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Material choices</h3>
                    <ul class="mt-4 space-y-3 text-sm text-[#50504d]">
                        <li>Compressed earth blocks and lime plaster for thermal comfort.</li>
                        <li>Reclaimed jackwood beams and coconut timber for structural elements.</li>
                        <li>Organic pigments and clay finishes that age gracefully.</li>
                        <li>Permeable pathways allowing rainwater recharge and minimal runoff.</li>
                    </ul>
                </article>
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Construction practices</h3>
                    <ul class="mt-4 space-y-3 text-sm text-[#50504d]">
                        <li>No mature trees removed—structures weave around existing canopies.</li>
                        <li>Local artisans involved in masonry, carving, and mural creation.</li>
                        <li>Solar orientation and cross-ventilation reduce energy demand.</li>
                        <li>Waste materials repurposed into furniture, planters, and art.</li>
                    </ul>
                </article>
            </section>

            <section class="rounded-3xl border border-[#ecebe5] bg-white p-8 shadow-sm space-y-6">
                <h3 class="text-lg font-semibold text-[#1b1b18]">Learning from our process</h3>
                <p class="text-sm text-[#50504d]">
                    We document construction methodologies and share blueprints with regional partners exploring eco-tourism models.
                    Guests can book a campus walkthrough with our sustainability architects to understand how design choices impact
                    comfort, biodiversity, and cultural resonance.
                </p>
                <div class="flex flex-col gap-3 text-sm text-[#50504d] lg:flex-row lg:items-center lg:justify-between">
                    <a href="{{ route('sustainability') }}#onsite" class="inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Back to sustainability overview</a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-6 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-[#50504d] hover:border-[#f53003] hover:text-[#f53003] transition">Schedule a tour</a>
                </div>
            </section>
        </div>
    </main>
@endsection
