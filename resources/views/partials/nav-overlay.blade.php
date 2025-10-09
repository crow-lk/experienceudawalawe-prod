<div id="nav-overlay" class="fixed inset-0 hidden bg-[#0f1012]/95 text-white z-[70]">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
    <div class="relative z-10 h-full overflow-y-auto">
        <div class="max-w-6xl mx-auto px-6 py-8 sm:py-12 flex flex-col gap-12">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logowhite.png') }}" alt="Experience Udawalawa" class="h-10 w-10 object-contain">
                    <div>
                        <p class="text-sm uppercase tracking-[0.3em] text-white/60">Navigation</p>
                        <p class="text-xl font-semibold">Experience Udawalawa</p>
                    </div>
                </div>
                <button type="button" data-overlay-close class="inline-flex items-center justify-center rounded-full border border-white/20 p-2 text-white/80 hover:text-white hover:border-white transition">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="grid gap-12 lg:grid-cols-[2fr_1fr] lg:items-start">
                <div class="grid gap-8 lg:grid-cols-2">
                    <div>
                        <p class="text-xs uppercase tracking-[0.35em] text-white/50">Main Sections</p>
                        <nav class="mt-6 space-y-5">
                            <div class="space-y-3">
                                <a href="{{ url('/') }}" class="block text-lg font-semibold tracking-wide hover:text-brand transition">Home</a>
                                <div class="pl-6 border-l border-white/10 space-y-2 text-sm text-white/70">
                                    <span>Welcome Message</span>
                                    <span>Why Experience Udawalawe</span>
                                    <span>Explore Our Experiences</span>
                                    <span>Footer &amp; Newsletter</span>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <a href="{{ route('about') }}" class="block text-lg font-semibold tracking-wide hover:text-brand transition">About</a>
                                <div class="pl-6 border-l border-white/10 space-y-2 text-sm text-white/70">
                                    <span>Who We Are</span>
                                    <span>Our Philosophy</span>
                                    <span>What We Offer</span>
                                    <span>Our Promise</span>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <a href="{{ route('experiences.index') }}" class="block text-lg font-semibold tracking-wide hover:text-brand transition">Experiences</a>
                                <div class="pl-6 border-l border-white/10 space-y-2 text-sm text-white/70">
                                    <a href="{{ route('experiences.index') }}#culinary" class="hover:text-white transition">Culinary Journeys</a>
                                    <a href="{{ route('experiences.index') }}#wildlife" class="hover:text-white transition">Wildlife &amp; Nature</a>
                                    <a href="{{ route('experiences.index') }}#culture" class="hover:text-white transition">Culture &amp; Village Life</a>
                                    <a href="{{ route('experiences.index') }}#sustainability" class="hover:text-white transition">Sustainability &amp; Community</a>
                                    <a href="{{ route('experiences.show', 'cooking-class') }}" class="hover:text-white transition">Individual Experience Pages</a>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <a href="{{ route('sustainability') }}" class="block text-lg font-semibold tracking-wide hover:text-brand transition">Sustainability</a>
                                <div class="pl-6 border-l border-white/10 space-y-2 text-sm text-white/70">
                                    <a href="{{ route('sustainability') }}#dashboard" class="hover:text-white transition">Dashboard 2024</a>
                                    <a href="{{ route('sustainability') }}#across" class="hover:text-white transition">Across Our Experiences</a>
                                    <a href="{{ route('sustainability') }}#onsite" class="hover:text-white transition">At Our Site</a>
                                    <a href="{{ route('sustainability') }}#community" class="hover:text-white transition">Community First</a>
                                    <a href="{{ route('sustainability') }}#subpages" class="hover:text-white transition">Subpages Overview</a>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <a href="{{ route('stories.index') }}" class="block text-lg font-semibold tracking-wide hover:text-brand transition">Stories</a>
                                <div class="pl-6 border-l border-white/10 space-y-2 text-sm text-white/70">
                                    <span>Cooking &amp; Food</span>
                                    <span>Women &amp; Youth Enterprises</span>
                                    <span>Wildlife &amp; Conservation</span>
                                    <span>Zero-Waste Practices</span>
                                    <span>Guest Reflections</span>
                                </div>
                            </div>

                            <a href="{{ route('faq') }}" class="block text-lg font-semibold tracking-wide hover:text-brand transition">FAQ</a>
                            <a href="{{ route('contact') }}" class="block text-lg font-semibold tracking-wide hover:text-brand transition">Contact</a>
                        </nav>
                    </div>

                    <div class="space-y-8">
                        <div>
                            <p class="text-xs uppercase tracking-[0.35em] text-white/50">Featured Experiences</p>
                            <ul class="mt-4 space-y-3 text-sm text-white/70">
                                <li><a href="{{ route('experiences.show', 'cooking-class') }}" class="hover:text-white transition">Ceylon Spice Atelier</a></li>
                                <li><a href="{{ route('experiences.show', 'lake-activities') }}" class="hover:text-white transition">Sunrise Lake Drifts</a></li>
                                <li><a href="{{ route('experiences.show', 'village-walks') }}" class="hover:text-white transition">Village Hearth Evenings</a></li>
                            </ul>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-[0.35em] text-white/50">Sustainability Highlights</p>
                            <ul class="mt-4 space-y-3 text-sm text-white/70">
                                <li><a href="{{ route('sustainability.plastics') }}" class="hover:text-white transition">Reduction of Single-Use Plastics</a></li>
                                <li><a href="{{ route('sustainability.entrepreneurship') }}" class="hover:text-white transition">Entrepreneurship Opportunities</a></li>
                                <li><a href="{{ route('sustainability.construction') }}" class="hover:text-white transition">Eco-Friendly Construction</a></li>
                                <li><a href="{{ route('sustainability.community') }}" class="hover:text-white transition">Community Engagement</a></li>
                                <li><a href="{{ route('sustainability.sdgs') }}" class="hover:text-white transition">Contribution to SDGs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="space-y-10">
                    <div class="space-y-4">
                        <p class="text-xs uppercase tracking-[0.35em] text-white/50">Get in Touch</p>
                        <a href="tel:+94112233445" class="block text-lg font-semibold hover:text-brand transition">+94 11 223 3445</a>
                        <a href="mailto:hello@experienceudawalawa.com" class="block text-lg font-semibold hover:text-brand transition">hello@experienceudawalawa.com</a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-md bg-brand px-5 py-2 text-sm font-semibold uppercase tracking-[0.3em] text-[#1b1b18] hover:bg-[#fbae2e] transition">Book Now</a>
                    </div>

                    <div>
                        <p class="text-xs uppercase tracking-[0.35em] text-white/50">Social</p>
                        <div class="mt-4 flex flex-wrap gap-3 text-sm text-white/70">
                            <a href="#" class="hover:text-white transition">Instagram</a>
                            <a href="#" class="hover:text-white transition">Facebook</a>
                            <a href="#" class="hover:text-white transition">TripAdvisor</a>
                            <a href="#" class="hover:text-white transition">YouTube</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
