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
                    <p class="text-xs uppercase tracking-[0.5em] text-white/60 sm:text-sm">Authentic Roots, Living Stories</p>
                    <h2 class="text-4xl font-semibold tracking-tight sm:text-5xl">Experience Udawalawe.</h2>
                    <p class="mx-auto max-w-3xl text-base text-white/80 sm:text-lg">Journeys that connect culture, community, and nature.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-4xl space-y-6 px-6 text-center">
            <p class="text-xs uppercase tracking-[0.4em] text-[#b3b1ac]">Welcome to Experience Udawalawe</p>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Welcome to Experience Udawalawe, where Sri Lanka's cultural heritage, community spirit, and wild beauty come together in one unforgettable journey. From village kitchens and spice gardens to tranquil lake rides and safaris through Udawalawe National Park, every experience is rooted in authenticity and respect for nature.</p>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Guided by our commitment to regenerative tourism, your visit supports local livelihoods, protects biodiversity, and preserves traditions. Here, travel becomes more than discovery, it becomes belonging.</p>
        </div>
    </section>

    <section class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-6xl space-y-10 px-6">
            <div class="space-y-4 text-center">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Why Experience Udawalawe?</p>
                <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Living connections, lasting impact</h2>
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
            <blockquote class="mt-6 text-3xl font-light leading-tight sm:text-4xl">"Journeys fade, but the stories remain."</blockquote>
            <p class="mt-6 text-sm text-white/60 sm:text-base">Each memory you gather here finds a home in the hearts of the people who welcomed you.</p>
        </div>
    </section>

    <section class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-6xl space-y-10 px-6">
            <div class="space-y-4 text-center">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Experiences at Experience Udawalawe</p>
                <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">A collection of journeys that bring you closer to the land, its people, and its stories.</h2>
                <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Each of our experiences is designed to let you see, taste, and feel the spirit of Udawalawe. Learn to cook in a village kitchen with recipes handed down through generations, wander spice and herbal gardens where old knowledge thrives, and share meals that carry the warmth of community.</p>
                <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Set out on safaris to meet elephants and wild birds in their natural home or simply sit beneath the stars and listen to stories that have shaped this land. Here, every path leads to Authentic Roots, Living Stories.</p>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-5xl space-y-8 px-6 text-center">
            <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">About Experience Udawalawe</p>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">We have a deep respect for Udawalawe, its people, its landscapes, and its living traditions. Experience Udawalawe was founded to share these stories through carefully curated journeys that connect culture, community, and nature.</p>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Each experience, from cooking in village kitchens to exploring spice gardens and setting out on safaris, is designed to be authentic and sustainable. Guided by our promise of Authentic Roots, Living Stories, we invite you to discover a way of travel that protects wildlife, supports local families, and keeps traditions alive.</p>
        </div>
    </section>

    <section class="bg-[#0f1012] py-16 lg:py-20">
        <div class="mx-auto max-w-5xl space-y-6 px-6 text-center text-white">
            <p class="text-xs uppercase tracking-[0.35em] text-white/50">Sustainability at Experience Udawalawe</p>
            <h2 class="text-3xl font-semibold tracking-tight sm:text-4xl">Join us in our journey, where every visit supports people, wildlife, and traditions.</h2>
            <p class="text-base leading-relaxed text-white/70 sm:text-lg">At Experience Udawalawe, sustainability is at the heart of what we do. From supporting local families to protecting wildlife and preserving cultural heritage, every activity is shaped by regenerative tourism. Your journey here creates memories while leaving a positive mark on the land and community.</p>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-6xl space-y-10 px-6">
            <div class="space-y-4 text-center">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">FAQ – Experience Udawalawe</p>
                <p class="text-base text-[#50504d] sm:text-lg">We will keep refining these answers as our offerings grow. For now, here is what most travelers ask us.</p>
            </div>
            <div class="grid gap-6 lg:grid-cols-2">
                <div class="space-y-6">
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">How do I book an experience?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">You can book directly through our website. Most activities need at least 48 hours' notice, so we can prepare ingredients, guides, and transport for you.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">Are your prices per person or per group?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">Prices are usually per person, but if you're coming as a larger group or family, let us know &mdash; we'll arrange something special.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">What is included in the cooking class?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">Fresh ingredients from our gardens, transport from Udawalawe town, the full cooking session, and lunch or dinner are included. Optional extras like translators can be arranged on request.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">Where do we meet for tours and experiences?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">Most journeys begin from our base in Udawalawe. Once you book, we'll share the exact meeting point and details by email or WhatsApp.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">Do you support sustainability?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">Yes. Every visit supports local families, women-led businesses, and wildlife protection. We follow zero-waste practices in cooking and use organic produce wherever possible.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">Can you accommodate dietary, or accessibility needs?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">Vegetarian and vegan diets are welcome &mdash; just let us know in advance. Accessibility varies with each activity, so please contact us before booking and we'll do our best to help.</p>
                    </article>
                </div>
                <div class="space-y-6">
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">What should I bring for a safari or outdoor activity?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">Light clothing, a hat, sunscreen, and a bottle of water. Binoculars and a camera are always a good idea too.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">What happens if I need to cancel?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">Plans can change &mdash; we understand. If you cancel 48 hours before your experience, you'll receive a full refund. For later cancellations, we'll do our best to reschedule you.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">Is this a real village?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">Our experiences are set in a recreated village environment, built to reflect how life in Udawalawe once was. It is not staged for show &mdash; it is a living space where real families share traditions, recipes, and stories.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">Why are drinks not included in the price?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">We keep our pricing focused on the core experience &mdash; food, transport, and activities. Drinks vary by preference, so we leave them optional for guests to choose on site.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">Why is the price higher than some other tours?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">Our programs are small-scale and community-led, which means every visit directly supports local families and sustainable practices. We don't compromise on authenticity or quality &mdash; your contribution helps us keep the experiences genuine and impactful.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#FDFDFC] p-6">
                        <h3 class="text-lg font-semibold text-[#1b1b18]">How does my visit benefit the community?</h3>
                        <p class="mt-3 text-sm leading-relaxed text-[#50504d]">Your participation creates direct income for local families, sustains women-led enterprises, supports organic farming, and helps us protect the heritage and wildlife of Udawalawe for future generations.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-5xl space-y-8 px-6 text-center">
            <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Stories from Udawalawe</p>
            <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Discover the people, places, and traditions that shape Experience Udawalawe.</h2>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">From village kitchens to wildlife encounters, these stories reveal the heart of our community and our land.</p>
            <div class="grid gap-4 text-left sm:grid-cols-2">
                <div class="rounded-2xl border border-[#ecebe5] bg-white p-6">
                    <ul class="space-y-3 text-sm leading-relaxed text-[#50504d]">
                        <li>Cooking with Amma: Recipes Passed Down Through Generations</li>
                        <li>How Your Visit Helps Women-led Enterprises in Udawalawe</li>
                        <li>Wildlife Diaries: A Day with the Elephants of Udawalawe</li>
                    </ul>
                </div>
                <div class="rounded-2xl border border-[#ecebe5] bg-white p-6">
                    <ul class="space-y-3 text-sm leading-relaxed text-[#50504d]">
                        <li>Our Zero-Waste Kitchen: How We Make Every Ingredient Count</li>
                        <li>Guest Reflections: What I Learned from a Village Storyteller</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
