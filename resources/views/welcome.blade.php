@extends('layouts.app')

@section('title', 'Experience Udawalawa | Authentic Roots')

@section('body')
<div class="flex min-h-screen w-full flex-col bg-[#FDFDFC] text-[#1b1b18]">
    @include('partials.header')

    <section class="relative h-screen w-full overflow-hidden" data-hero>
        <video id="hero-video" class="absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline>
            <source src="{{ asset('videos/intro.mp4') }}" type="video/mp4">
            <source src="{{ asset('videos/hero.webm') }}" type="video/webm">
            Your browser does not support the video tag.
        </video>

        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/20 to-black/80"></div>
        <div class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-black/75 to-transparent pointer-events-none"></div>

        <div class="relative z-10 flex h-full flex-col justify-end">
            <div class="px-6 pb-12">
                <p class="mx-auto max-w-3xl text-center text-sm font-semibold uppercase tracking-[0.5em] text-white/70 sm:text-base">
                    Authentic Roots, Living Stories
                </p>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto flex max-w-6xl flex-col gap-10 px-6 lg:grid lg:grid-cols-[1.2fr_1fr] lg:items-center">
            <div class="space-y-6">
                <p class="text-xs uppercase tracking-[0.4em] text-[#b3b1ac]">Welcome Message</p>
                <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Rooted in place, designed for meaningful encounters</h2>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Experience Udawalawe is a living campus that celebrates the rhythms of village life, homegrown cuisine,
                    and the sanctuary that surrounds us. We invite mindful travelers into our kitchens, farms, and waterways,
                    sharing the stories that shaped our community and the conservation efforts that sustain it.
                </p>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Every stay contributes to wildlife corridors, artisan livelihoods, and regenerative practices.
                    Come for the elephants, stay for the people, and leave with stories that endure long after the journey ends.
                </p>
            </div>
            <aside class="space-y-4 rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Highlights</p>
                <ul class="space-y-3 text-sm text-[#50504d]">
                    <li class="flex items-start gap-3">
                        <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                        Immersive stays co-created with local hosts, farmers, and storytellers.
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                        Regenerative travel practices that honor heritage and safeguard habitats.
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-[0.35rem] h-1.5 w-1.5 rounded-full bg-[#f53003]"></span>
                        Tailored experiences for families, solo travelers, and mindful groups.
                    </li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-6xl space-y-10 px-6">
            <div class="text-center">
                <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Why Experience Udawalawa</h2>
                <p class="mt-4 text-base text-[#50504d]">Where heritage, conservation, and human connection meet to create journeys that linger long after you return home.</p>
            </div>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <article class="rounded-xl border border-[#ecebe5] bg-[#FDFDFC] p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Living Heritage</h3>
                    <p class="mt-3 text-sm text-[#706f6c]">Walk ancestral paths, learn the stories behind every spice, and dine on recipes passed down through generations.</p>
                </article>
                <article class="rounded-xl border border-[#ecebe5] bg-[#FDFDFC] p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Responsible Journeys</h3>
                    <p class="mt-3 text-sm text-[#706f6c]">Travel with purpose. Your stay supports wildlife corridors, regenerative farming, and village-led initiatives.</p>
                </article>
                <article class="rounded-xl border border-[#ecebe5] bg-[#FDFDFC] p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Bonds that Last</h3>
                    <p class="mt-3 text-sm text-[#706f6c]">Share meals, music, and stories with hosts who become friends, not just guides.</p>
                </article>
                <article class="rounded-xl border border-[#ecebe5] bg-[#FDFDFC] p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Wild &amp; Untamed</h3>
                    <p class="mt-3 text-sm text-[#706f6c]">Awaken to elephant calls, glide across lakes at sunrise, and witness Udawalawe’s untamed spirit up close.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-[#f6f3ec] py-16 lg:py-20">
        <div class="mx-auto flex max-w-6xl flex-col gap-12 px-6 lg:flex-row lg:items-center">
            <div class="lg:w-1/2 space-y-6">
                <h2 class="text-3xl font-semibold text-[#1b1b18]">Explore Our Experiences</h2>
                <p class="text-sm text-[#50504d] sm:text-base">From foraging walks to spice journeys, every experience is handcrafted with local collaborators. Preview a few highlights and discover the full collection.</p>
                <a href="{{ route('experiences.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] transition hover:text-[#c62502]">
                    Browse the full experience menu
                    <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <div class="grid flex-1 gap-6 md:grid-cols-2">
                <article class="overflow-hidden rounded-2xl bg-white shadow-sm">
                    <img src="{{ asset('images/logosample.png') }}" alt="Heritage Spice Tales" class="h-40 w-full object-cover">
                    <div class="space-y-3 p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">Heritage Spice Tales</h3>
                        <p class="text-sm text-[#706f6c]">Grind, brew, and taste alongside village chefs while discovering Ayurveda-inspired cooking.</p>
                        <a href="{{ url('/experiences/spice-gardens') }}" class="inline-flex items-center text-sm font-semibold text-[#f53003] transition hover:text-[#c62502]">Learn more</a>
                    </div>
                </article>
                <article class="overflow-hidden rounded-2xl bg-white shadow-sm">
                    <img src="{{ asset('images/logosample.png') }}" alt="Sunrise Lake Drifts" class="h-40 w-full object-cover">
                    <div class="space-y-3 p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">Sunrise Lake Drifts</h3>
                        <p class="text-sm text-[#706f6c]">Paddle through lily corridors and watch the sanctuary awaken with your naturalist host.</p>
                        <a href="{{ url('/experiences/lake-activities') }}" class="inline-flex items-center text-sm font-semibold text-[#f53003] transition hover:text-[#c62502]">Learn more</a>
                    </div>
                </article>
                <article class="overflow-hidden rounded-2xl bg-white shadow-sm md:col-span-2">
                    <img src="{{ asset('images/logosample.png') }}" alt="Village Hearth Evenings" class="h-40 w-full object-cover">
                    <div class="space-y-3 p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">Village Hearth Evenings</h3>
                        <p class="text-sm text-[#706f6c]">Gather around the hearth for folk tales, drum circles, and a feast straight from the garden.</p>
                        <a href="{{ url('/experiences/village-walks') }}" class="inline-flex items-center text-sm font-semibold text-[#f53003] transition hover:text-[#c62502]">Learn more</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

   <section class="bg-[#0f1012] py-16 lg:py-20">
        <div class="mx-auto max-w-4xl px-6 text-center text-white">
            <p class="text-xs uppercase tracking-[0.4em] text-white/50">Featured Phrase</p>
            <blockquote class="mt-6 text-3xl font-light leading-tight sm:text-4xl">“Journeys fade, but the stories remain.”</blockquote>
            <p class="mt-6 text-sm text-white/60 sm:text-base">Each memory you gather here finds a home in the hearts of the people who welcomed you.</p>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-6xl space-y-10 px-6">
            <div class="text-center">
                <p class="text-xs uppercase tracking-[0.4em] text-[#b3b1ac]">Site Overview</p>
                <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Tree-Style Visual Sitemap</h2>
                <p class="mt-4 text-sm text-[#50504d] sm:text-base">Navigate the ecosystem of experiences, stories, and commitments that shape Experience Udawalawe.</p>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="space-y-6 rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#9c9b96]">Home</p>
                        <ul class="mt-3 space-y-2 border-l border-[#d4d1c8] pl-5 text-sm text-[#50504d]">
                            <li>Welcome Message</li>
                            <li>Why Experience Udawalawe</li>
                            <li>Explore Our Experiences</li>
                            <li>Footer Essentials</li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#9c9b96]">About</p>
                        <ul class="mt-3 space-y-2 border-l border-[#d4d1c8] pl-5 text-sm text-[#50504d]">
                            <li>Who We Are</li>
                            <li>Our Philosophy</li>
                            <li>What We Offer</li>
                            <li>Our Promise</li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#9c9b96]">Experiences</p>
                        <ul class="mt-3 space-y-2 border-l border-[#d4d1c8] pl-5 text-sm text-[#50504d]">
                            <li>Culinary Journeys</li>
                            <li>Wildlife &amp; Nature</li>
                            <li>Culture &amp; Village Life</li>
                            <li>Sustainability &amp; Community</li>
                            <li>Individual Experience Pages</li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-6 rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-8">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#9c9b96]">Sustainability</p>
                        <ul class="mt-3 space-y-2 border-l border-[#d4d1c8] pl-5 text-sm text-[#50504d]">
                            <li>Living Wisdom, Lasting Responsibility</li>
                            <li>Sustainability Dashboard 2024</li>
                            <li>Across Our Experiences</li>
                            <li>At Our Site</li>
                            <li>Community First</li>
                            <li>Our Promise</li>
                            <li>Subpages &amp; SDGs</li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#9c9b96]">Stories</p>
                        <ul class="mt-3 space-y-2 border-l border-[#d4d1c8] pl-5 text-sm text-[#50504d]">
                            <li>Cooking &amp; Food</li>
                            <li>Women &amp; Youth Enterprises</li>
                            <li>Wildlife &amp; Conservation</li>
                            <li>Zero-Waste Practices</li>
                            <li>Guest Reflections</li>
                        </ul>
                    </div>
                    <div class="grid gap-6 sm:grid-cols-2">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#9c9b96]">FAQ</p>
                            <ul class="mt-3 space-y-2 border-l border-[#d4d1c8] pl-5 text-sm text-[#50504d]">
                                <li>Booking Process</li>
                                <li>Pricing &amp; Inclusions</li>
                                <li>Experience Details</li>
                                <li>Sustainability Commitment</li>
                                <li>Village Authenticity</li>
                            </ul>
                        </div>
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#9c9b96]">Contact</p>
                            <ul class="mt-3 space-y-2 border-l border-[#d4d1c8] pl-5 text-sm text-[#50504d]">
                                <li>Let’s Stay Connected</li>
                                <li>Contact Form</li>
                                <li>Direct Contact</li>
                                <li>GDPR / Privacy Note</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
