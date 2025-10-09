@extends('layouts.app')

@section('title', 'Entrepreneurship Opportunities | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', [
        'title' => 'Entrepreneurship Opportunities',
        'subtitle' => 'Empowering women & youth to co-create futures'
    ])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-12">
            <section class="space-y-4">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Purpose</p>
                <h2 class="text-2xl font-semibold text-[#1b1b18]">Building local enterprises through tourism</h2>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Our entrepreneurship labs transform guest demand into long-term livelihoods. We incubate product ideas, provide
                    seed funding, and connect artisans to ethical markets. Each enterprise we support reflects community aspirations
                    and the biodiversity we strive to protect.
                </p>
            </section>

            <section class="grid gap-6 md:grid-cols-2">
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Programs</h3>
                    <ul class="mt-4 space-y-3 text-sm text-[#50504d]">
                        <li>Six-month accelerator for women-led agro-products and craft brands.</li>
                        <li>Apprenticeships pairing youth with master guides, chefs, and naturalists.</li>
                        <li>Micro-grants and mentorship for circular economy innovations.</li>
                        <li>Business clinics covering pricing, storytelling, and digital marketing.</li>
                    </ul>
                </article>
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Impact metrics</h3>
                    <ul class="mt-4 space-y-3 text-sm text-[#50504d]">
                        <li>48 entrepreneurs supported since 2021, 70% women-led.</li>
                        <li>LKR 3.5M reinvested into community-owned ventures.</li>
                        <li>Joint product line curated for the Experience Udawalawe boutique.</li>
                        <li>Quarterly market days hosted for guests and local buyers.</li>
                    </ul>
                </article>
            </section>

            <section class="rounded-3xl border border-[#ecebe5] bg-white p-8 shadow-sm space-y-6">
                <h3 class="text-lg font-semibold text-[#1b1b18]">How guests can participate</h3>
                <p class="text-sm text-[#50504d]">
                    Attend our maker circles, pre-order artisan hampers, or join skill-share workshops to transfer knowledge back to
                    the community. We also welcome mentors in finance, branding, and sustainability to support our alumni network.
                </p>
                <div class="flex flex-col gap-3 text-sm text-[#50504d] lg:flex-row lg:items-center lg:justify-between">
                    <a href="{{ route('sustainability') }}#community" class="inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Back to sustainability overview</a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-6 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-[#50504d] hover:border-[#f53003] hover:text-[#f53003] transition">Offer mentorship</a>
                </div>
            </section>
        </div>
    </main>
@endsection
