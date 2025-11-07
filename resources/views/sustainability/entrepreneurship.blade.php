@extends('layouts.app')

@section('title', 'Entrepreneurship Opportunities | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', [
        'title' => 'Entrepreneurship Opportunities',
        'subtitle' => 'Growth rooted in community'
    ])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-16">
            
            <!-- Introduction Section -->
            <section class="space-y-6">
                <div class="max-w-4xl mx-auto text-center space-y-4">
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        Sustainability is not only about protecting nature — it is also about uplifting people. At Experience Udawalawe, we believe tourism must strengthen the families and entrepreneurs who make this place unique. Done ethically, tourism has the power to fuel local economies, and we embrace that responsibility fully.
                    </p>
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        By working directly with small-scale farmers, craftspeople, and businesses, we reduce reliance on distant supply chains and keep opportunities close to home. These partnerships maintain authenticity, strengthen local economies, and ensure tourism benefits flow fairly to those who deserve them most.
                    </p>
                </div>
            </section>

            <!-- Our Partnerships Section -->
            <section class="space-y-12">
                <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Our Partnerships
                    </h2>
                </div>

                <div class="grid gap-8 md:grid-cols-2">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Supporting Local Farmers</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            More than 80% of our produce comes from nearby farmers and gardens. From rice and vegetables to herbs and fruits, meals are fresh, seasonal, and deeply Sri Lankan. For farmers, this means steady income and long-term partnerships they can count on.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Working with Artisans</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            We collaborate with artisans who keep traditional skills alive. Clay utensils, woven baskets, and natural crafts are purchased directly from villagers. For guests, each item is more than an object — it is a story of heritage and livelihood.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Women & Youth Enterprises</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            We encourage partnerships with women-led and youth-led initiatives, from small catering ventures to handmade crafts. By offering fair pricing and visibility, we empower women and young people to take ownership of their future in sustainable tourism.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Building a Circular Economy</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            By sourcing locally and minimizing packaging waste, we create a circular economy where resources are reused, waste is minimized, and money circulates within the community.
                        </p>
                    </article>
                </div>
            </section>

            <!-- Why It Matters Section -->
            <section class="bg-gradient-to-br from-stone-50 to-white rounded-3xl p-10 shadow-lg space-y-6">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Why It Matters</h3>
                <p class="text-base leading-relaxed text-[#50504d]">
                    Every product we buy has a ripple effect. By supporting entrepreneurs here in Udawalawe, we preserve traditions, create livelihoods, and reduce environmental impact. Guests who dine with us or join our experiences directly contribute to this cycle of shared growth.
                </p>
            </section>

            <!-- SDG Impact Section -->
            <section class="space-y-8">
                <div class="text-center space-y-4">
                    <h3 class="text-2xl font-bold tracking-tight text-[#1b1b18] sm:text-3xl" data-no-divider>
                        SDG Impact
                    </h3>
                </div>

                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <article class="rounded-2xl border border-[#ecebe5] bg-red-50 p-6 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center text-white font-bold text-sm">8</div>
                            <h4 class="text-sm font-semibold text-[#1b1b18]">Decent Work</h4>
                        </div>
                        <p class="text-xs text-[#50504d] leading-relaxed">
                            Fair partnerships give farmers, artisans, and drivers reliable income.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-orange-50 p-6 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-sm">11</div>
                            <h4 class="text-sm font-semibold text-[#1b1b18]">Sustainable Communities</h4>
                        </div>
                        <p class="text-xs text-[#50504d] leading-relaxed">
                            Local sourcing keeps traditions alive and economies resilient.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-yellow-50 p-6 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-sm">12</div>
                            <h4 class="text-sm font-semibold text-[#1b1b18]">Responsible Consumption</h4>
                        </div>
                        <p class="text-xs text-[#50504d] leading-relaxed">
                            Buying close to home lowers imports, packaging, and waste.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-blue-50 p-6 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-sm">17</div>
                            <h4 class="text-sm font-semibold text-[#1b1b18]">Partnerships</h4>
                        </div>
                        <p class="text-xs text-[#50504d] leading-relaxed">
                            Guests, villagers, and our team work together for shared growth.
                        </p>
                    </article>
                </div>
            </section>

            <!-- Call to Action Section -->
            <section class="bg-gradient-to-br from-stone-50 to-white rounded-3xl p-10 shadow-lg">
                <div class="text-center space-y-6">
                    <h3 class="text-2xl font-semibold text-[#1b1b18]">Support Local Entrepreneurs</h3>
                    <p class="text-base leading-relaxed text-[#50504d] max-w-3xl mx-auto">
                        When you choose Experience Udawalawe, you directly support a network of local entrepreneurs, farmers, and artisans. Every purchase, every meal, and every experience contributes to building a stronger, more sustainable community.
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
