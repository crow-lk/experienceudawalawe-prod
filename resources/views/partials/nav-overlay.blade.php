<div id="nav-overlay" class="fixed inset-0 hidden bg-[#0f1012]/95 text-white z-[70]">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-md"></div>
    <div class="relative z-10 h-full overflow-y-auto">
        <div class="max-w-7xl mx-auto px-6 py-8 sm:py-12 flex flex-col gap-12">
            <!-- Header Section -->
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/logowhite.png') }}" alt="Experience Udawalawa" class="h-12 w-12 object-contain">
                    <div>
                        <p class="text-sm uppercase tracking-[0.35em] text-white/60">Site Navigation</p>
                        <p class="text-xl font-semibold text-white">Experience Udawalawa</p>
                    </div>
                </div>
                <button type="button" data-overlay-close class="inline-flex items-center justify-center rounded-full border border-white/30 p-3 text-white/80 hover:text-white hover:border-white hover:bg-white/10 transition-all duration-200">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Main Navigation Tree -->
            <div class="grid gap-16 lg:grid-cols-[2fr_1fr] lg:items-start">
                <div class="space-y-10">
                    <!-- Tree-Style Navigation -->
                    <div>
                        <h2 class="text-xs uppercase tracking-[0.4em] text-white/50 mb-8">Site Navigation Tree</h2>
                        <nav class="space-y-8 text-sm">
                            <!-- Home -->
                            <div class="space-y-3">
                                <div class="flex items-center gap-2 nav-tree-item">
                                    <span class="text-white/40 tree-icon">├──</span>
                                    <a href="{{ url('/') }}" class="text-lg font-semibold tracking-wide text-white nav-tree-main transition-colors duration-200">Home</a>
                                </div>
                                <div class="ml-8 space-y-2 text-white/70">
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Welcome Message</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Why Experience Udawalawa</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Explore Our Experiences</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">└──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Footer &amp; Newsletter</span>
                                    </div>
                                </div>
                            </div>

                            <!-- About -->
                            <div class="space-y-3">
                                <div class="flex items-center gap-2 nav-tree-item">
                                    <span class="text-white/40 tree-icon">├──</span>
                                    <a href="{{ route('about') }}" class="text-lg font-semibold tracking-wide text-white nav-tree-main transition-colors duration-200">About</a>
                                </div>
                                <div class="ml-8 space-y-2 text-white/70">
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Who We Are</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Our Philosophy</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">What We Offer</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">└──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Our Promise</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Experiences -->
                            <div class="space-y-3">
                                <div class="flex items-center gap-2 nav-tree-item">
                                    <span class="text-white/40 tree-icon">├──</span>
                                    <a href="{{ route('experiences.index') }}" class="text-lg font-semibold tracking-wide text-white nav-tree-main transition-colors duration-200">Experiences</a>
                                </div>
                                <div class="ml-8 space-y-2 text-white/70">
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <a href="{{ route('experiences.index') }}" class="hover:text-white transition-colors">All Experiences</a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Culinary Journeys</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Wildlife &amp; Nature</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Culture &amp; Village Life</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Sustainability &amp; Community</span>
                                    </div>
                                    @if(isset($headerExperiences) && $headerExperiences->count() > 0)
                                        @foreach($headerExperiences->take(3) as $experience)
                                            <div class="flex items-center gap-2">
                                                <span class="text-white/30">├──</span>
                                                <a href="{{ route('experiences.show', $experience->slug) }}" class="hover:text-white transition-colors">{{ $experience->title }}</a>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">└──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Individual Experience Pages</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Sustainability -->
                            <div class="space-y-3">
                                <div class="flex items-center gap-2 nav-tree-item">
                                    <span class="text-white/40 tree-icon">├──</span>
                                    <a href="{{ route('sustainability') }}" class="text-lg font-semibold tracking-wide text-white nav-tree-main transition-colors duration-200">Sustainability</a>
                                </div>
                                <div class="ml-8 space-y-2 text-white/70">
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Our Philosophy</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <a href="{{ route('sustainability') }}#dashboard" class="hover:text-white transition-colors">Dashboard 2024</a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <a href="{{ route('sustainability') }}#across" class="hover:text-white transition-colors">Across Our Experiences</a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <a href="{{ route('sustainability') }}#onsite" class="hover:text-white transition-colors">At Our Site</a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <a href="{{ route('sustainability') }}#community" class="hover:text-white transition-colors">Community First</a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Our Promise</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">└──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Subpages</span>
                                    </div>
                                    <div class="ml-8 space-y-2 text-white/60">
                                        <div class="flex items-center gap-2">
                                            <span class="text-white/30">├──</span>
                                            <a href="{{ route('sustainability.plastics') }}" class="hover:text-white transition-colors">Reduction of Plastics</a>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="text-white/30">├──</span>
                                            <a href="{{ route('sustainability.entrepreneurship') }}" class="hover:text-white transition-colors">Entrepreneurship Opportunities</a>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="text-white/30">├──</span>
                                            <a href="{{ route('sustainability.construction') }}" class="hover:text-white transition-colors">Eco-Friendly Construction</a>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="text-white/30">├──</span>
                                            <a href="{{ route('sustainability.community') }}" class="hover:text-white transition-colors">Community Engagement</a>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="text-white/30">└──</span>
                                            <a href="{{ route('sustainability.sdgs') }}" class="hover:text-white transition-colors">Contribution to SDGs</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stories -->
                            <div class="space-y-3">
                                <div class="flex items-center gap-2 nav-tree-item">
                                    <span class="text-white/40 tree-icon">├──</span>
                                    <a href="{{ route('stories.index') }}" class="text-lg font-semibold tracking-wide text-white nav-tree-main transition-colors duration-200">Stories (Blog)</a>
                                </div>
                                <div class="ml-8 space-y-2 text-white/70">
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Cooking &amp; Food</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Women &amp; Youth Enterprises</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Wildlife &amp; Conservation</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">├──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Zero-Waste Practices</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-white/30">└──</span>
                                        <span class="hover:text-white transition-colors cursor-default">Guest Reflections</span>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ -->
                            <div class="flex items-center gap-2 nav-tree-item">
                                <span class="text-white/40 tree-icon">├──</span>
                                <a href="{{ route('faq') }}" class="text-lg font-semibold tracking-wide text-white nav-tree-main transition-colors duration-200">FAQ</a>
                            </div>

                            <!-- Contact -->
                            <div class="flex items-center gap-2 nav-tree-item">
                                <span class="text-white/40 tree-icon">└──</span>
                                <a href="{{ route('contact') }}" class="text-lg font-semibold tracking-wide text-white nav-tree-main transition-colors duration-200">Contact</a>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- Sidebar Content -->
                <div class="space-y-12">
                    <!-- Featured Experiences -->
                    <div class="space-y-6">
                        <h3 class="text-xs uppercase tracking-[0.4em] text-white/50">Featured Experiences</h3>
                        @if(isset($headerExperiences) && $headerExperiences->count() > 0)
                            <div class="space-y-4">
                                @foreach($headerExperiences->take(3) as $experience)
                                    <div class="group">
                                        <a href="{{ route('experiences.show', $experience->slug) }}" class="block p-4 rounded-lg border border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/30 transition-all duration-200">
                                            <h4 class="text-sm font-semibold text-white group-hover:text-[#fbae2e] transition-colors">{{ $experience->title }}</h4>
                                            @if($experience->excerpt)
                                                <p class="text-xs text-white/60 mt-1">{{ Str::limit($experience->excerpt, 80) }}</p>
                                            @endif
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-sm text-white/50">No featured experiences available</p>
                        @endif
                        <div class="pt-2">
                            <a href="{{ route('experiences.index') }}" class="inline-flex items-center gap-2 text-sm text-white/70 hover:text-white transition-colors">
                                <span>View all experiences</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Sustainability Highlights -->
                    <div class="space-y-6">
                        <h3 class="text-xs uppercase tracking-[0.4em] text-white/50">Sustainability Highlights</h3>
                        <div class="space-y-3">
                            <a href="{{ route('sustainability.plastics') }}" class="flex items-center gap-3 text-sm text-white/70 hover:text-white transition-colors group">
                                <span class="w-2 h-2 bg-[#1f5c2e] rounded-full group-hover:bg-[#fbae2e] transition-colors"></span>
                                <span>Reduction of Single-Use Plastics</span>
                            </a>
                            <a href="{{ route('sustainability.entrepreneurship') }}" class="flex items-center gap-3 text-sm text-white/70 hover:text-white transition-colors group">
                                <span class="w-2 h-2 bg-[#1f5c2e] rounded-full group-hover:bg-[#fbae2e] transition-colors"></span>
                                <span>Entrepreneurship Opportunities</span>
                            </a>
                            <a href="{{ route('sustainability.construction') }}" class="flex items-center gap-3 text-sm text-white/70 hover:text-white transition-colors group">
                                <span class="w-2 h-2 bg-[#1f5c2e] rounded-full group-hover:bg-[#fbae2e] transition-colors"></span>
                                <span>Eco-Friendly Construction</span>
                            </a>
                            <a href="{{ route('sustainability.community') }}" class="flex items-center gap-3 text-sm text-white/70 hover:text-white transition-colors group">
                                <span class="w-2 h-2 bg-[#1f5c2e] rounded-full group-hover:bg-[#fbae2e] transition-colors"></span>
                                <span>Community Engagement</span>
                            </a>
                            <a href="{{ route('sustainability.sdgs') }}" class="flex items-center gap-3 text-sm text-white/70 hover:text-white transition-colors group">
                                <span class="w-2 h-2 bg-[#1f5c2e] rounded-full group-hover:bg-[#fbae2e] transition-colors"></span>
                                <span>Contribution to SDGs</span>
                            </a>
                        </div>
                    </div>

                    <!-- Contact & Booking -->
                    <div class="space-y-6">
                        <h3 class="text-xs uppercase tracking-[0.4em] text-white/50">Get in Touch</h3>
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <a href="tel:+94112233445" class="block text-lg font-semibold text-white hover:text-[#fbae2e] transition-colors">+94 11 223 3445</a>
                                <a href="mailto:hello@experienceudawalawa.com" class="block text-sm text-white/70 hover:text-white transition-colors">hello@experienceudawalawa.com</a>
                            </div>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center w-full rounded-md bg-[#fbae2e] px-6 py-3 text-sm font-semibold uppercase tracking-[0.3em] text-[#0f1012] hover:bg-[#e09a26] transition-colors duration-200">
                                Book Your Experience
                            </a>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="space-y-6">
                        <h3 class="text-xs uppercase tracking-[0.4em] text-white/50">Follow Our Journey</h3>
                        <div class="flex flex-wrap gap-4">
                            <a href="#" class="social-icon group flex items-center gap-2 px-4 py-2 rounded-lg border border-white/20 bg-white/5 hover:bg-white/10 hover:border-white/40 transition-all duration-200">
                                <svg class="w-5 h-5 text-white/70 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                                <span class="text-sm text-white/70 group-hover:text-white transition-colors">Instagram</span>
                            </a>
                            <a href="#" class="social-icon group flex items-center gap-2 px-4 py-2 rounded-lg border border-white/20 bg-white/5 hover:bg-white/10 hover:border-white/40 transition-all duration-200">
                                <svg class="w-5 h-5 text-white/70 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                <span class="text-sm text-white/70 group-hover:text-white transition-colors">Facebook</span>
                            </a>
                            <a href="#" class="social-icon group flex items-center gap-2 px-4 py-2 rounded-lg border border-white/20 bg-white/5 hover:bg-white/10 hover:border-white/40 transition-all duration-200">
                                <svg class="w-5 h-5 text-white/70 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"/>
                                </svg>
                                <span class="text-sm text-white/70 group-hover:text-white transition-colors">TripAdvisor</span>
                            </a>
                            <a href="#" class="social-icon group flex items-center gap-2 px-4 py-2 rounded-lg border border-white/20 bg-white/5 hover:bg-white/10 hover:border-white/40 transition-all duration-200">
                                <svg class="w-5 h-5 text-white/70 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                                <span class="text-sm text-white/70 group-hover:text-white transition-colors">YouTube</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
