@php
    $additionalClasses = $class ?? '';
    $headerClasses = trim("site-header site-header--standard w-full sticky top-0 z-50 {$additionalClasses}");
@endphp

<header class="{{ $headerClasses }}" data-standard-header>
    <div class="max-w-15xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="header-standard">
            <div class="flex items-center justify-between gap-3 py-0.5 lg:py-1">
                <a href="/" class="inline-flex items-center flex-shrink-0">
                    <img src="{{ asset('images/logo3.png') }}" alt="Experience Udawalawa" class="w-14 md:w-16 lg:w-20 object-contain">
                    <span class="sr-only">Experience Udawalawa</span>
                </a>
                <nav class="hidden lg:flex flex-1 items-center justify-center gap-8 text-xs uppercase tracking-[0.22em]">
                    <a href="{{ route('about') }}" class="header-link transition-colors">About</a>
                    <div class="relative group">
                        <a href="{{ route('experiences.index') }}" class="header-link transition-colors">Experiences</a>
                        <div class="absolute left-1/2 top-full hidden -translate-x-1/2 group-hover:block bg-white/95 text-brand rounded shadow-lg py-2 w-64 z-20">
                            <a href="{{ route('experiences.index') }}#culinary" class="block px-4 py-2 text-[11px] uppercase tracking-[0.18em] text-brand hover:bg-brand hover:text-white transition">Culinary Journeys</a>
                            <a href="{{ route('experiences.index') }}#wildlife" class="block px-4 py-2 text-[11px] uppercase tracking-[0.18em] text-brand hover:bg-brand hover:text-white transition">Wildlife &amp; Nature</a>
                            <a href="{{ route('experiences.index') }}#culture" class="block px-4 py-2 text-[11px] uppercase tracking-[0.18em] text-brand hover:bg-brand hover:text-white transition">Culture &amp; Village Life</a>
                            <a href="{{ route('experiences.index') }}#sustainability" class="block px-4 py-2 text-[11px] uppercase tracking-[0.18em] text-brand hover:bg-brand hover:text-white transition">Sustainability &amp; Community</a>
                            <a href="{{ route('experiences.show', 'safari-tour') }}" class="block px-4 py-2 text-[11px] uppercase tracking-[0.18em] text-brand hover:bg-brand hover:text-white transition">Individual Pages</a>
                        </div>
                    </div>
                    <a href="{{ route('sustainability') }}" class="header-link transition-colors">Sustainability</a>
                    <a href="{{ route('stories.index') }}" class="header-link transition-colors">Stories</a>
                    <a href="{{ route('faq') }}" class="header-link transition-colors">FAQ</a>
                    <a href="{{ route('contact') }}" class="header-link transition-colors">Contact</a>
                </nav>
                <div class="flex items-center gap-4">
                    <button data-overlay-toggle class="inline-flex lg:hidden items-center justify-center p-2 rounded-md header-toggle focus:outline-none">
                        <svg data-mobile-open class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg data-mobile-close class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <a href="{{ route('contact') }}" class="hidden lg:inline-flex items-center justify-center px-5 py-[0.4rem] btn-book-solid uppercase tracking-[0.22em] text-xs font-semibold">Book Now</a>
                </div>
            </div>
        </div>
    </div>

</header>
@unless(!empty($withoutOverlay))
    @include('partials.nav-overlay')
@endunless
