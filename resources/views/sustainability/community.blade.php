@extends('layouts.app')

@section('title', 'Community Engagement | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', [
        'title' => 'Community Engagement',
        'subtitle' => 'Shared Journeys, Shared Futures'
    ])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-16">
            
            <!-- Introduction Section -->
            <section class="space-y-6">
                <div class="max-w-4xl mx-auto text-center space-y-4">
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        Community is not an afterthought here — it is the foundation. We believe tourism should not only showcase a destination but also enrich the lives of the people who live there. That is why our experiences are designed to ensure benefits flow directly to local families.
                    </p>
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        When guests dine at our restaurant, join a village experience, or ride in a local tuk-tuk, they are helping to build a system where tourism becomes a shared journey of growth and resilience.
                    </p>
                </div>
            </section>

            <!-- Our Community Partnerships Section -->
            <section class="space-y-12">
                <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Our Community Partnerships
                    </h2>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Local Hiring & Training</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Many of our team members come directly from Udawalawe. We invest in training so that hospitality careers remain accessible to local people, keeping skills and opportunities close to home.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Community Transport Partnerships</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            We collaborate with jeep and tuk-tuk owners to provide authentic travel experiences. This ensures income from tourism flows directly to families who depend on these services.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Supporting Villagers & Traditions</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            From cooking demonstrations to weaving, villagers are not performers — they are partners. By sharing knowledge and traditions, they earn fair income while ensuring cultural practices remain vibrant.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Empowering Women & Youth</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            We actively create space for women and youth to lead — as entrepreneurs, guides, and artisans. These opportunities bring dignity, independence, and long-term growth.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Cultural Exchange</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Our experiences connect guests and locals in authentic ways. These encounters build respect, break stereotypes, and create understanding that lasts well beyond the visit.
                        </p>
                    </article>
                </div>
            </section>

            <!-- Why It Matters Section -->
            <section class="bg-gradient-to-br from-stone-50 to-white rounded-3xl p-10 shadow-lg space-y-6">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Why It Matters</h3>
                <p class="text-base leading-relaxed text-[#50504d]">
                    Tourism has the power to divide or to unite. At Experience Udawalawe, we choose unity. By placing community at the heart of our work, we strengthen livelihoods, preserve traditions, and build mutual respect. When our community thrives, our destination thrives.
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
                            Local hiring and training create fair livelihoods in Udawalawe.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-pink-50 p-6 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold text-sm">10</div>
                            <h4 class="text-sm font-semibold text-[#1b1b18]">Reduced Inequalities</h4>
                        </div>
                        <p class="text-xs text-[#50504d] leading-relaxed">
                            Women and youth find space to lead and grow through tourism.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-orange-50 p-6 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-sm">11</div>
                            <h4 class="text-sm font-semibold text-[#1b1b18]">Sustainable Communities</h4>
                        </div>
                        <p class="text-xs text-[#50504d] leading-relaxed">
                            Shared traditions and practices strengthen village life.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-blue-50 p-6 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-sm">17</div>
                            <h4 class="text-sm font-semibold text-[#1b1b18]">Partnerships</h4>
                        </div>
                        <p class="text-xs text-[#50504d] leading-relaxed">
                            Guests and locals meet as partners, creating respect that lasts beyond the visit.
                        </p>
                    </article>
                </div>
            </section>

            <!-- Call to Action Section -->
            <section class="bg-gradient-to-br from-stone-50 to-white rounded-3xl p-10 shadow-lg">
                <div class="text-center space-y-6">
                    <h3 class="text-2xl font-semibold text-[#1b1b18]">Be Part of Our Community</h3>
                    <p class="text-base leading-relaxed text-[#50504d] max-w-3xl mx-auto">
                        When you choose Experience Udawalawe, you become part of a community that values partnership, respect, and shared prosperity. Every interaction is an opportunity to learn, connect, and contribute to a more sustainable future.
                    </p>
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-center sm:gap-6">
                        <a href="{{ route('sustainability') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Back to sustainability overview
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 rounded-full bg-[#1b1b18] px-8 py-3 text-sm font-semibold text-white transition-all duration-300 hover:bg-stone-800 hover:scale-105">
                            Join our community
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
