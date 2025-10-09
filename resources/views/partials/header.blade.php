<header class="site-header hero-header w-full fixed top-0 left-0 z-50">
    <div class="max-w-15xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="header-hero">
            <div class="grid items-center min-h-[100px] lg:min-h-[100px]" style="grid-template-columns: 1fr auto 1fr;">
                <!-- Left: Tabs (two rows) -->
                <nav class="hidden md:flex flex-col col-start-1 col-end-2">
                    <div class="flex items-center space-x-6 header-divider pb-1">
                        <a href="{{ route('about') }}" class="header-link text-[9px] transition-colors">About</a>
                        <div class="relative group">
                            <a href="{{ route('experiences.index') }}" class="header-link text-[9px] transition-colors">Experiences</a>
                            <div class="absolute left-0 top-full hidden group-hover:block bg-white/95 text-brand rounded shadow-lg py-2 w-64 z-20">
                                <a href="{{ route('experiences.index') }}#culinary" class="block px-4 py-2 text-[11px] text-brand hover:bg-brand hover:text-white transition-colors">Culinary Journeys</a>
                                <a href="{{ route('experiences.index') }}#wildlife" class="block px-4 py-2 text-[11px] text-brand hover:bg-brand hover:text-white transition-colors">Wildlife &amp; Nature</a>
                                <a href="{{ route('experiences.index') }}#culture" class="block px-4 py-2 text-[11px] text-brand hover:bg-brand hover:text-white transition-colors">Culture &amp; Village Life</a>
                                <a href="{{ route('experiences.index') }}#sustainability" class="block px-4 py-2 text-[11px] text-brand hover:bg-brand hover:text-white transition-colors">Sustainability &amp; Community</a>
                                <a href="{{ route('experiences.show', 'cooking-class') }}" class="block px-4 py-2 text-[11px] text-brand hover:bg-brand hover:text-white transition-colors">Individual Experiences</a>
                            </div>
                        </div>
                        <a href="{{ route('sustainability') }}" class="header-link text-[9px] whitespace-nowrap transition-colors">Sustainability</a>
                        <a href="{{ route('stories.index') }}" class="header-link text-[9px] transition-colors">Stories</a>
                        <a href="{{ route('gallery') }}" class="header-link text-[9px] transition-colors">Gallery</a>
                    </div>
                    <div class="flex items-center space-x-6 mt-1 pt-1">
                        <a href="{{ url('/') }}" class="header-link text-[9px] transition-colors">Home</a>
                        <a href="{{ route('faq') }}" class="header-link text-[9px] transition-colors">FAQ</a>
                        <a href="{{ route('contact') }}" class="header-link text-[9px] transition-colors">Contact</a>
                    </div>
                </nav>

                <!-- Center: Logo -->
                <div class="flex justify-center col-start-2 col-end-3">
                    <a href="/" class="inline-flex items-center">
                        <img src="{{ asset('images/logo3.png') }}" alt="Experience Udawalawa" class="w-[200px] h-[200px] object-contain">
                        <span class="sr-only">Experience Udawalawa</span>
                    </a>
                </div>

                <!-- Right: CTA and mobile toggle -->
                <div class="flex justify-end items-center col-start-3 col-end-4 gap-4">
                    <a href="{{ route('contact') }}" class="hidden md:inline-flex items-center justify-center text-sm px-7 py-2 btn-book-outline font-semibold uppercase tracking-[0.2em] transition-colors">Book Now</a>

                    <!-- Mobile menu button -->
                    <button data-overlay-toggle class="md:hidden inline-flex items-center justify-center p-2 rounded-md header-toggle focus:outline-none">
                        <svg data-mobile-open class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg data-mobile-close class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

</header>
@include('partials.nav-overlay')
