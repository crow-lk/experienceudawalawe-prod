<header class="site-header hero-header w-full absolute top-0 left-0 z-50" data-hero-header>
    <div class="max-w-15xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="header-hero">
            <div class="grid items-center min-h-[100px] lg:min-h-[100px]" style="grid-template-columns: 1fr auto 1fr;">
                <!-- Left: Tabs (two rows) -->
                <nav class="hidden md:flex flex-col col-start-1 col-end-2">
                    <div class="flex items-center space-x-6 header-divider pb-1">
                        <!-- Desktop overlay menu button (All Categories) -->
                        <button data-overlay-toggle class="hidden md:inline-flex items-center justify-center header-toggle focus:outline-none" aria-expanded="false" aria-controls="nav-overlay">
                            <svg data-mobile-open class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <span class="header-link">All Categories</span>
                            <svg data-mobile-close class="h-4 w-4 ml-2 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <a href="{{ route('experiences.index') }}" class="header-link transition-colors">Services</a>
                        <a href="#" class="header-link transition-colors">Best Deals</a>
                        <a href="#" class="header-link transition-colors">Payment Methods</a>
                    </div>
                    <div class="flex items-center space-x-6 mt-1 pt-1">
                        <a href="{{ route('about') }}" class="header-link transition-colors">About us</a>
                        <a href="{{ route('contact') }}" class="header-link transition-colors">Contact us</a>
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

                    <!-- Mobile menu button (visible below md) -->
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
