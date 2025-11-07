@extends('layouts.app')

@section('title', 'Reduction of Single-Use Plastics | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', [
        'title' => 'Reduction of Single-Use Plastics',
        'subtitle' => 'Simple choices today, a greener Udawalawe tomorrow'
    ])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-16">
            
            <!-- Introduction Section -->
            <section class="space-y-6">
                <div class="max-w-4xl mx-auto text-center space-y-4">
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        Plastic pollution is one of the biggest challenges facing Sri Lanka — from rivers and lakes to coastal beaches and even inside the bellies of elephants. At Experience Udawalawe, we cannot ignore this reality. As a destination rooted in nature and heritage, we believe sustainability begins with the everyday choices we make.
                    </p>
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        That is why reducing single-use plastics is at the heart of our work. This commitment is not about sacrifice; it is about respect — for our land, our people, and the generations to come. By replacing plastic with natural, reusable, and culturally authentic alternatives, we show that small actions can create lasting impact.
                    </p>
                </div>
            </section>

            <!-- Our Initiatives Section -->
            <section class="space-y-12">
                <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Our Initiatives
                    </h2>
                </div>

                <div class="grid gap-8 md:grid-cols-2">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Refillable Water Bottles</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Disposable plastic bottles are one of the most common pollutants in Sri Lanka. To change this, we provide glass and clay vessels instead. Guests enjoy safe drinking water while the environment is spared from thousands of bottles each year. Every refill is a simple act of conservation.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Refillable Toiletries</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Plastics hide in the smallest places — including toiletry packaging. Inspired by Sri Lanka's Ayurvedic heritage, we are introducing refillable herbal-based toiletries, replacing mini bottles with larger, reusable dispensers. Guests enjoy a more authentic wellness experience while waste is reduced.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Locally Crafted Utensils & Cutlery</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Food is central to culture, and so are the tools we use. We replace disposable plastics with clay pots, coconut-shell spoons, and cane baskets crafted by local artisans. Every meal becomes part of a cycle that supports livelihoods and keeps harmful waste out of nature.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Plastic-Free Excursions</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Our excursions — from boat rides to village walks — are designed to leave memories, not litter. Guests are encouraged to bring reusable bottles, and we provide alternatives where needed. Together, we ensure Udawalawe's landscapes remain clean and undisturbed.
                        </p>
                    </article>
                </div>
            </section>

            <!-- Why It Matters Section -->
            <section class="bg-gradient-to-br from-stone-50 to-white rounded-3xl p-10 shadow-lg space-y-6">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Why It Matters</h3>
                <p class="text-base leading-relaxed text-[#50504d]">
                    Plastic pollution may seem global, but change begins at home. By reducing plastics, we protect rivers, fields, and wildlife. By using clay pots and banana-leaf platters, we revive traditions that once defined Sri Lankan hospitality. And by inviting guests to join us, we show that sustainability is not about doing less — it's about rediscovering simpler, more meaningful ways of living.
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
                    <article class="rounded-2xl border border-[#ecebe5] bg-blue-50 p-8 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">6</div>
                            <h4 class="text-lg font-semibold text-[#1b1b18]">Clean Water & Sanitation</h4>
                        </div>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Every refill keeps Udawalawe's rivers clear and safe for wildlife.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-yellow-50 p-8 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold">12</div>
                            <h4 class="text-lg font-semibold text-[#1b1b18]">Responsible Consumption</h4>
                        </div>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Clay pots and refillables replace disposables, reducing waste.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-green-50 p-8 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">15</div>
                            <h4 class="text-lg font-semibold text-[#1b1b18]">Life on Land</h4>
                        </div>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Cutting plastics protects elephants, birds, and the ecosystems they depend on.
                        </p>
                    </article>
                </div>
            </section>

            <!-- Call to Action Section -->
            <section class="bg-gradient-to-br from-stone-50 to-white rounded-3xl p-10 shadow-lg">
                <div class="text-center space-y-6">
                    <h3 class="text-2xl font-semibold text-[#1b1b18]">Join Our Mission</h3>
                    <p class="text-base leading-relaxed text-[#50504d] max-w-3xl mx-auto">
                        Every choice matters. When you visit Experience Udawalawe, you become part of our commitment to a plastic-free future. Together, we can show that sustainable tourism is not just possible — it's better.
                    </p>
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-center sm:gap-6">
                        <a href="{{ route('sustainability') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Back to sustainability overview
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 rounded-full bg-[#1b1b18] px-8 py-3 text-sm font-semibold text-white transition-all duration-300 hover:bg-stone-800 hover:scale-105">
                            Partner with us
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
