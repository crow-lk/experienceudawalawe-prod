@extends('layouts.app')

@section('title', 'Experiences - Experience Udawalawe')

@section('body')
<div class="flex min-h-screen w-full flex-col bg-[#FDFDFC] text-[#1b1b18]">
    @include('partials.header-standard')

    <!-- Hero Section -->
    <section class="relative h-screen w-full overflow-hidden bg-[#0d0d0c]" data-hero>
        <!-- Sample Hero Image - Replace with your actual image -->
        <img 
            src="https://images.unsplash.com/photo-1564760055775-d63b17a55c44?q=80&w=2000&auto=format&fit=crop" 
            alt="Udawalawe National Park - Elephants in their natural habitat" 
            class="absolute inset-0 h-full w-full object-cover"
            loading="eager"
        />
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/20 to-black/60"></div>

        
        <div class="relative z-10 flex h-full items-center">
            <div class="mx-auto w-full max-w-7xl px-4 text-center sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto space-y-6">
                    <!-- Page Category -->
                    <div class="space-y-2">
                        <p class="text-xs uppercase tracking-[0.3em] text-white/70 font-medium">Experiences Page</p>
                        <p class="text-lg font-light text-white/90 sm:text-xl">Things to do at Experience Udawalawe</p>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl leading-tight" data-no-divider>
                        Authentic Roots,<br class="hidden sm:block"> Living Stories
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-lg leading-relaxed text-white/95 sm:text-xl font-light max-w-3xl mx-auto">
                        Every journey in Udawalawe is a connection — with people, nature, and heritage.
                    </p>

                    <!-- CTA Button -->
                    <div class="pt-4">
                        <a href="#experiences-collection" class="group inline-flex items-center gap-3 rounded-full bg-white/15 backdrop-blur-md border border-white/40 px-8 py-4 text-base font-semibold text-white transition-all duration-300 hover:bg-white hover:text-stone-900 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white/70 shadow-xl">
                            Explore Experiences
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-8">
                <div class="prose prose-lg prose-stone mx-auto max-w-none">
                    <div class="space-y-6 text-[#2c2c28]">
                        <!-- First paragraph -->
                        <p class="text-sm sm:text-base font-light leading-relaxed">
                            In Udawalawe, every experience is rooted in real life. It is a living landscape where nature and community are inseparable. From the vast plains of the national park to quiet village paths and herbs and spice-scented gardens, every corner invite discovery. Here, elephants and birds move freely across open skies, while local communities share the stories, crafts, and practices that have shaped their lives for generations.
                        </p>

                        <!-- Second paragraph -->
                        <p class="text-sm sm:text-base font-light leading-relaxed">
                            At Experience Udawalawe, our promise is simple: <strong class="font-medium text-stone-800">Authentic Roots, Living Stories</strong>. Each journey is more than sightseeing, it connects you with the people, wildlife, and heritage of this land. Each activity is led by those who call Udawalawe home — cooks, farmers, storytellers, and naturalists. What you take away is not just a memory but a lasting bond with place and people.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experiences-collection" class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <div class="space-y-4">
                    <p class="text-xs uppercase tracking-[0.3em] text-stone-400 font-medium">Our Collection</p>
                    <h2 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl lg:text-5xl" data-no-divider>
                        Authentic Experiences in Udawalawe
                    </h2>

                    <!-- Single rotation flower -->
                    <div class="flex items-center justify-center py-2">
                        <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent"></div>
                        <img
                            src="{{ asset('images/elements/rorate-flower.png') }}"
                            alt=""
                            class="mx-4 h-8 w-8 animate-spin-slower object-contain opacity-80"
                            loading="lazy"
                        >
                        <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent"></div>
                    </div>

                    <p class="text-base leading-relaxed text-[#50504d] sm:text-lg max-w-3xl mx-auto font-light">
                        Discover experiences that bring you closer to the spirit of Udawalawe. Cook with locals in open-air kitchens, 
                        learn the old ways of grinding spices, and wander through gardens filled with fresh herbs.
                    </p>
                </div>
            </div>

            <!-- Filter Navigation -->
            @if(isset($experienceTypes) && $experienceTypes->isNotEmpty())
                <div class="mb-12">
                    <div class="flex flex-wrap items-center justify-center gap-2">
                        <a 
                            href="{{ route('experiences.index') }}" 
                            class="inline-flex items-center rounded-full border px-4 py-2 text-xs font-medium transition-all duration-300 {{ empty($requestedTypeSlug) ? 'border-[#1b1b18] bg-[#1b1b18] text-white shadow-lg' : 'border-stone-200 bg-white text-[#1b1b18] hover:border-stone-800 hover:bg-stone-50 hover:shadow-md' }}"
                        >
                            All
                        </a>
                        @foreach($experienceTypes as $type)
                            <a 
                                href="{{ route('experiences.index', ['type' => $type->slug]) }}" 
                                class="inline-flex items-center rounded-full border px-4 py-2 text-xs font-medium transition-all duration-300 {{ (isset($activeTypeSlug) && $activeTypeSlug === $type->slug) ? 'border-[#1b1b18] bg-[#1b1b18] text-white shadow-lg' : 'border-stone-200 bg-white text-[#1b1b18] hover:border-stone-800 hover:bg-stone-50 hover:shadow-md' }}"
                                title="{{ $type->name }}"
                            >
                                {{ str_replace(['Experience', 'Cultural &', 'Wildlife &', 'Culinary /', 'Sustainability &'], ['', 'Cultural', 'Wildlife', '', 'Eco'], $type->name) }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Selected Category Display -->
            @if(isset($selectedType) && $selectedType)
                <div class="mb-10 text-center">
                    <div class="space-y-3">
                        <p class="text-xs uppercase tracking-[0.3em] text-stone-400 font-medium">Showing</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18] sm:text-3xl" data-no-divider>
                            {{ $selectedType->name }} Experiences
                        </h3>
                        @if($selectedType->description)
                            <p class="mx-auto max-w-3xl text-base leading-relaxed text-[#50504d] sm:text-lg">
                                {{ $selectedType->description }}
                            </p>
                        @endif
                    </div>
                </div>
            @elseif(!empty($requestedTypeSlug))
                <div class="mb-10 text-center">
                    <div class="space-y-3">
                        <h3 class="text-2xl font-semibold text-[#1b1b18] sm:text-3xl" data-no-divider>No matching experience type</h3>
                        <p class="mx-auto max-w-3xl text-base leading-relaxed text-[#50504d] sm:text-lg">
                            We couldn't find a category for that filter. Try selecting a different experience type or browse all experiences.
                        </p>
                    </div>
                </div>
            @endif

            <!-- Experiences Grid -->
            @if($experiences->count() > 0)
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 mb-12">
                    @foreach($experiences as $experience)
                        <x-experience.card :experience="$experience" />
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($experiences->hasPages())
                    <div class="flex justify-center">
                        {{ $experiences->links() }}
                    </div>
                @endif
            @else
                <!-- Empty State -->
                <div class="text-center py-16">
                    <div class="space-y-4">
                        <div class="w-16 h-16 mx-auto bg-stone-100 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-2" data-no-divider>No experiences available</h3>
                        <p class="text-sm text-[#706f6c] max-w-lg mx-auto">
                            @if(!empty($requestedTypeSlug))
                                @if(isset($selectedType))
                                    We don't have any experiences in the {{ $selectedType->name }} category just yet. Please check back soon!
                                @else
                                    We couldn't find experiences for this category. Try selecting a different filter or browse all experiences.
                                @endif
                            @else
                                Check back soon for exciting new experiences!
                            @endif
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="bg-gradient-to-b from-stone-50 to-white py-16 lg:py-20">
        <div class="mx-auto max-w-4xl px-6 text-center">
            <div class="space-y-6">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>Ready for Your Journey?</h2>

                </div>
                <p class="text-base leading-relaxed text-[#50504d] sm:text-lg max-w-2xl mx-auto">
                    Connect with us to plan your authentic Udawalawe experience. Every journey is crafted with care 
                    to create lasting memories and meaningful connections.
                </p>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="group inline-flex items-center gap-3 rounded-full bg-[#1b1b18] px-8 py-4 text-sm font-semibold text-white transition-all duration-300 hover:bg-stone-800 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-stone-400 shadow-lg">
                        Plan Your Experience
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
