@extends('layouts.app')

@section('title', 'Eco-Friendly Construction | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', [
        'title' => 'Eco-Friendly Construction',
        'subtitle' => 'Built with care, in harmony with the land'
    ])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-16">
            
            <!-- Introduction Section -->
            <section class="space-y-6">
                <div class="max-w-4xl mx-auto text-center space-y-4">
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        The way we build reflects the way we live. From the very beginning, we made a promise: not a single tree would be cut to create this space. That commitment shaped every design choice, ensuring Experience Udawalawe grew in harmony with the land.
                    </p>
                </div>
            </section>

            <!-- Our Approach Section -->
            <section class="space-y-12">
                <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Our Approach
                    </h2>
                </div>

                <div class="grid gap-8 md:grid-cols-2">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Preserving the Landscape</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Trees are more than shade — they anchor the soil, shelter wildlife, and keep ecosystems healthy. By protecting every tree on our land, we kept nature intact and set an example of development that respects the environment.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Upcycled & Recyclable Materials</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            We chose materials that last and can be used again. Steel replaced heavy timber, reducing the need for wood. Old lamp posts and discarded resources found new life in our structures, showing that waste can become value.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Celebrating Local Design</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Our interiors were created in partnership with Sri Lankan designers. Batik-inspired patterns, handmade furnishings, and natural finishes brought culture and craftsmanship into our space, supporting artisans while honoring heritage.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Minimal Impact Philosophy</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Every design choice followed a simple principle: minimize impact. Our buildings are functional, simple, and built to last. They blend into the land, showing how tourism infrastructure can be responsible and beautiful.
                        </p>
                    </article>
                </div>
            </section>

            <!-- Why It Matters Section -->
            <section class="bg-gradient-to-br from-stone-50 to-white rounded-3xl p-10 shadow-lg space-y-6">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Why It Matters</h3>
                <p class="text-base leading-relaxed text-[#50504d]">
                    Construction often scars the land. We chose another way. By preserving trees, reusing materials, and celebrating local artistry, we created a space that reflects our values in every detail. Guests who visit us see not only Sri Lanka's beauty but also the assurance that this beauty was not compromised to build what they enjoy today.
                </p>
            </section>

            <!-- SDG Impact Section -->
            <section class="space-y-8">
                <div class="text-center space-y-4">
                    <h3 class="text-2xl font-bold tracking-tight text-[#1b1b18] sm:text-3xl" data-no-divider>
                        SDG Impact
                    </h3>
                </div>

                <div class="grid gap-6 md:grid-cols-3">
                    <article class="rounded-2xl border border-[#ecebe5] bg-orange-50 p-8 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">11</div>
                            <h4 class="text-lg font-semibold text-[#1b1b18]">Sustainable Communities</h4>
                        </div>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Built without cutting a single tree, preserving natural balance.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-yellow-50 p-8 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold">12</div>
                            <h4 class="text-lg font-semibold text-[#1b1b18]">Responsible Production</h4>
                        </div>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Upcycled and recyclable materials give old resources new life.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-green-50 p-8 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">15</div>
                            <h4 class="text-lg font-semibold text-[#1b1b18]">Life on Land</h4>
                        </div>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Protecting trees safeguards the habitats of birds, animals, and insects.
                        </p>
                    </article>
                </div>
            </section>

            <!-- Call to Action Section -->
            <section class="bg-gradient-to-br from-stone-50 to-white rounded-3xl p-10 shadow-lg">
                <div class="text-center space-y-6">
                    <h3 class="text-2xl font-semibold text-[#1b1b18]">Experience Sustainable Architecture</h3>
                    <p class="text-base leading-relaxed text-[#50504d] max-w-3xl mx-auto">
                        See how thoughtful construction can blend seamlessly with nature. Our buildings stand as proof that development and conservation can work hand in hand, creating spaces that are both beautiful and responsible.
                    </p>
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-center sm:gap-6">
                        <a href="{{ route('sustainability') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Back to sustainability overview
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 rounded-full bg-[#1b1b18] px-8 py-3 text-sm font-semibold text-white transition-all duration-300 hover:bg-stone-800 hover:scale-105">
                            Schedule a tour
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
