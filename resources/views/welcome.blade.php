@extends('layouts.app')

@section('title', 'Experience Udawalawe | Authentic Roots')

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
        <div class="pointer-events-none absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-black/75 to-transparent"></div>

        <div class="relative z-10 flex h-full flex-col justify-end">
            <div class="px-6 pb-20 sm:pb-24">
                <div class="mx-auto max-w-4xl space-y-6 text-center text-white">
                    <h4 class="font-bold uppercase tracking-[0.5em] text-white sm:text-sm">Authentic Roots, Living Stories</h4>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="border-y border-[#dcdad3] bg-white shadow-sm">
        <form class="flex w-full flex-col md:flex-row md:items-center md:justify-between" action="{{ route('contact') }}" method="GET">
            <div class="flex flex-1 flex-col px-4 py-2 md:px-6 md:py-2">
                <span class="text-[11px] font-semibold uppercase tracking-[0.35em] text-[#3c4c62]">Experience</span>
                <div class="mt-1 flex items-center justify-between text-xs text-[#1b1b18]">
                    <select name="experience" class="w-full appearance-none bg-transparent text-[#1b1b18] focus:outline-none">
                        <option value="" selected>Select an experience</option>
                        @foreach($experiences as $experience)
                            <option value="{{ $experience->slug }}">{{ $experience->title }}</option>
                        @endforeach
                    </select>
                    <span class="ml-2 text-[10px] text-[#9a9994]">&dtrif;</span>
                </div>
            </div>
            <div class="flex flex-1 flex-col border-t border-[#e6e3da] px-4 py-2 md:border-t-0 md:border-l md:px-6 md:py-2">
                <span class="text-[11px] font-semibold uppercase tracking-[0.35em] text-[#3c4c62]">Preferred Date</span>
                <div class="mt-1 flex items-center text-xs text-[#1b1b18]">
                    <input type="date" name="preferred_date" class="w-[160px] bg-transparent text-[#1b1b18] focus:outline-none">
                </div>
            </div>
            <div class="flex flex-1 flex-col border-t border-[#e6e3da] px-4 py-2 md:border-t-0 md:border-l md:px-6 md:py-2">
                <span class="text-[11px] font-semibold uppercase tracking-[0.35em] text-[#3c4c62]">Guests</span>
                <div class="mt-1 flex items-center gap-3 text-xs text-[#1b1b18]">
                    <label class="flex items-center gap-1">
                        <span class="text-[10px] uppercase tracking-[0.2em] text-[#9a9994]">Adults</span>
                        <input type="number" name="adults" min="1" value="2" class="w-12 bg-transparent text-center text-[#1b1b18] focus:outline-none">
                    </label>
                    <label class="flex items-center gap-1">
                        <span class="text-[10px] uppercase tracking-[0.2em] text-[#9a9994]">Children</span>
                        <input type="number" name="children" min="0" value="0" class="w-12 bg-transparent text-center text-[#1b1b18] focus:outline-none">
                    </label>
                </div>
            </div>
            <div class="flex flex-1 flex-col border-t border-[#e6e3da] px-4 py-2 md:border-t-0 md:border-l md:px-6 md:py-2">
                <span class="text-[11px] font-semibold uppercase tracking-[0.35em] text-[#3c4c62]">Promo Code</span>
                <input type="text" name="promo" placeholder="Optional" class="mt-1 bg-transparent text-xs text-[#1b1b18] focus:outline-none">
            </div>
            <div class="flex border-t border-[#e6e3da] px-4 py-2 md:border-t-0 md:border-l md:px-6 md:py-2">
                <button type="submit" class="h-full min-h-[44px] w-full bg-[#3c4c62] px-5 text-xs font-semibold uppercase tracking-[0.15em] text-white transition hover:bg-[#2f3d4e] md:w-[140px]">
                    Book Now
                </button>
            </div>
        </form>
    </section>

    @include('partials.header-standard', ['class' => 'hidden', 'withoutOverlay' => true])

    <section class="bg-white py-16 lg:py-20" data-header-anchor>
        <div class="mx-auto flex w-full max-w-6xl flex-col gap-10 px-6 lg:flex-row lg:items-center">
            <div class="lg:w-1/2 space-y-6 text-left">
                <div class="space-y-4">
                    <h2 class="mt-3 text-4xl font-semibold tracking-tight text-[#1b1b18] sm:text-5xl">Experience Udawalawe</h2>
                    <p class="mx-auto max-w-3xl text-base text-[#b3b1ac] sm:text-lg">Journeys that connect culture, community, and nature.</p>
                    <div class="flex items-center gap-3">
                        <div class="h-px flex-1 bg-[#c7c3b7]"></div>
                        <img src="{{ asset('images/elements/rorate-flower.png') }}" alt="Experience motif" class="h-10 w-10 animate-spin-slower object-contain opacity-80" loading="lazy">
                        <div class="h-px flex-1 bg-[#c7c3b7]"></div>
                    </div>
                </div>
                <p class="text-xs leading-relaxed text-[#50504d] sm:text-sm text-justify">Welcome to Experience Udawalawe, where Sri Lanka's cultural heritage, community spirit, and wild beauty come together in one unforgettable journey. From village kitchens and spice gardens to tranquil lake rides and safaris through Udawalawe National Park, every experience is rooted in authenticity and respect for nature.</p>
                <p class="text-xs leading-relaxed text-[#50504d] sm:text-sm text-justify">Guided by our commitment to regenerative tourism, your visit supports local livelihoods, protects biodiversity, and preserves traditions. Here, travel becomes more than discovery, it becomes belonging.</p>
            </div>
            <div class="lg:w-1/2">
                <div class="overflow-hidden border border-[#ecebe5] shadow-sm">
                    <img src="{{ asset('images/logosample.png') }}" alt="Experience Udawalawe montage" class="aspect-[4/3] w-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-6xl space-y-10 px-6">
            <div class="space-y-4 text-center">
                <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Why Experience Udawalawe?</h2>
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Living connections, lasting impact</p>
                <p class="text-base leading-relaxed text-[#50504d]">Journeys shaped with care, respecting the land, uplifting people, and creating stories you will carry long after you return home.</p>
            </div>
            <div class="grid gap-8 md:grid-cols-3">
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Living Heritage</h3>
                    <p class="mt-3 text-sm leading-relaxed text-[#706f6c]">Step into a way of life preserved through generations&mdash;village kitchens, local crafts, and stories told under the stars.</p>
                </article>
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Responsible Journeys</h3>
                    <p class="mt-3 text-sm leading-relaxed text-[#706f6c]">Every visit contributes to community well-being, safeguards wildlife, and ensures traditions thrive for the future.</p>
                </article>
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Bonds that Last</h3>
                    <p class="mt-3 text-sm leading-relaxed text-[#706f6c]">Led by people of the land, our small-scale experiences create genuine bonds and unforgettable memories.</p>
                </article>
            </div>
            <div class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 text-center">
                <h3 class="text-xl font-semibold text-[#1b1b18]">Wild and Untamed</h3>
                <p class="mt-4 text-sm leading-relaxed text-[#50504d] sm:text-base">From the elephants of Udawalawe National Park to the call of hornbills at sunrise, nature surrounds you in its purest, most powerful form.</p>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-6xl space-y-8 px-6 text-center">
            <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Explore Our Experiences</p>
            <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Look through our extensive collection of authentic experiences in Udawalawe</h2>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Discover experiences that bring you closer to the spirit of Udawalawe. Cook with locals in open-air kitchens, learn the old ways of grinding spices, and wander through gardens filled with fresh herbs. Share simple meals prepared with care, listen to stories passed down through generations, and join safaris where elephants roam the plains and wild birds fill the sky.</p>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Each experience reflects the values of Experience Udawalawe, rooted in tradition, guided by sustainability, and enriched by human connection. This is where culture, nature, and story meet, creating memories that belong to you long after you leave.</p>
            <a href="{{ route('experiences.index') }}" class="inline-flex items-center gap-2 rounded-full border border-[#1b1b18] px-6 py-3 text-sm font-semibold uppercase tracking-[0.2em] text-[#1b1b18] transition hover:bg-[#1b1b18] hover:text-white">
                Explore Experiences
                <span aria-hidden="true" class="text-lg">→</span>
            </a>
        </div>
    </section>

    <section class="bg-[#0f1012] py-16 lg:py-20">
        <div class="mx-auto max-w-4xl px-6 text-center text-white">
            <p class="text-xs uppercase tracking-[0.4em] text-white/50">Featured Phrase</p>
            <blockquote class="mt-6 text-3xl font-light leading-tight sm:text-4xl">“Journeys fade, but the stories remain.”</blockquote>
            <p class="mt-6 text-sm text-white/60 sm:text-base">Each memory you gather here finds a home in the hearts of the people who welcomed you.</p>
        </div>
    </section>

    <section class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-6xl space-y-10 px-6">
            <div class="space-y-4 text-center">
                 <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Experiences at Experience Udawalawe</h2>
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">A collection of journeys that bring you closer to the land, its people, and its stories.</p>
                <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Each of our experiences is designed to let you see, taste, and feel the spirit of Udawalawe. Learn to cook in a village kitchen with recipes handed down through generations, wander spice and herbal gardens where old knowledge thrives, and share meals that carry the warmth of community.</p>
                <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Set out on safaris to meet elephants and wild birds in their natural home or simply sit beneath the stars and listen to stories that have shaped this land. Here, every path leads to Authentic Roots, Living Stories.</p>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-5xl space-y-8 px-6 text-center">
            <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">About Experience Udawalawe</h2>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">We have a deep respect for Udawalawe, its people, its landscapes, and its living traditions. Experience Udawalawe was founded to share these stories through carefully curated journeys that connect culture, community, and nature.</p>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Each experience, from cooking in village kitchens to exploring spice gardens and setting out on safaris, is designed to be authentic and sustainable. Guided by our promise of Authentic Roots, Living Stories, we invite you to discover a way of travel that protects wildlife, supports local families, and keeps traditions alive.</p>
        </div>
    </section>
*** End Patch
