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
                <button type="submit" class="h-full min-h-[44px] w-full bg-[#3c4c62] px-5 text-xs font-semibold uppercase tracking-[0.15em] text-white transition hover:bg-[#2f3d4e] md:w-[140px] rounded-full">
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
                    <h2 class="mt-3 text-4xl font-semibold tracking-tight text-[#1b1b18] sm:text-5xl">Experience Udawalawe by Ceylon 1850</h2>
                    @include('partials.heading-divider')
                    <p class="mx-auto max-w-3xl text-base text-[#b3b1ac] sm:text-lg">Journeys that connect culture, community, and nature.</p>
                </div>
                <p class="text-xs leading-relaxed text-[#50504d] sm:text-sm text-justify">Welcome to Experience Udawalawe by Ceylon 1850, where Sri Lanka's cultural heritage, community spirit, and wild beauty come together in one unforgettable journey. From village kitchens and spice gardens to tranquil lake rides and safaris through Udawalawe National Park, every experience is rooted in authenticity and respect for nature.</p>
                <p class="text-xs leading-relaxed text-[#50504d] sm:text-sm text-justify">Guided by our commitment to regenerative tourism, your visit supports local livelihoods, protects biodiversity, and preserves traditions. Here, travel becomes more than discovery, it becomes belonging.</p>
            </div>
            <div class="lg:w-1/2">
                <div class="journey-image-container">
                    <img src="{{ asset('images/journey.png') }}" alt="Experience Udawalawe montage" class="journey-image w-full h-auto object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-6xl space-y-10 px-6">
            <div class="space-y-4 text-center">
                <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Why Experience Udawalawe?</h2>
                @include('partials.heading-divider', ['align' => 'center'])
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Living connections, lasting impact</p>
                <p class="text-base leading-relaxed text-[#50504d] max-w-3xl mx-auto">Journeys shaped with care, respecting the land, uplifting people, and creating stories you will carry long after you return home.</p>
            </div>

            <!-- Modern Cards Grid -->
            <div class="grid gap-14 md:grid-cols-2 lg:grid-cols-4 md:gap-8">
                <!-- Living Heritage Card -->
                <div class="rounded-xl bg-white p-6 text-center shadow-xl transform transition-all duration-300 hover:scale-105">
                    <div class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg" style="background-color: #c86542; box-shadow: 0 10px 15px -3px rgba(200, 101, 66, 0.4), 0 4px 6px -2px rgba(200, 101, 66, 0.25);">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white">
                            <path d="M12 2L3 7L12 12L21 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3 17L12 22L21 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3 12L12 17L21 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-[#1b1b18] mb-3 text-lg font-semibold lg:px-4">Living Heritage</h3>
                    <p class="px-2 text-[#6B7280] text-sm leading-relaxed">Step into kitchens perfumed by spices, learn ancient crafts, and gather under the stars for stories passed down through generations.</p>
                </div>

                <!-- Responsible Journeys Card -->
                <div class="rounded-xl bg-white p-6 text-center shadow-xl transform transition-all duration-300 hover:scale-105">
                    <div class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg" style="background-color: #c86542; box-shadow: 0 10px 15px -3px rgba(200, 101, 66, 0.4), 0 4px 6px -2px rgba(200, 101, 66, 0.25);">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 14S9.5 16 12 16S16 14 16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9 9H9.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 9H15.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-[#1b1b18] mb-3 text-lg font-semibold lg:px-4">Responsible Journeys</h3>
                    <p class="px-2 text-[#6B7280] text-sm leading-relaxed">Every visit contributes to community well-being, safeguards wildlife, and keeps traditions thriving for the future.</p>
                </div>

                <!-- Bonds that Last Card -->
                <div class="rounded-xl bg-white p-6 text-center shadow-xl transform transition-all duration-300 hover:scale-105">
                    <div class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg" style="background-color: #c86542; box-shadow: 0 10px 15px -3px rgba(200, 101, 66, 0.4), 0 4px 6px -2px rgba(200, 101, 66, 0.25);">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white">
                            <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M23 21V19C23 18.1645 22.7155 17.3541 22.2094 16.7032C21.7033 16.0523 20.9995 15.5902 20.2 15.39" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 3.39C16.8003 3.58988 17.5052 4.05244 18.0118 4.70419C18.5183 5.35594 18.8015 6.16853 18.8015 7.005C18.8015 7.84147 18.5183 8.65406 18.0118 9.30581C17.5052 9.95756 16.8003 10.4201 16 10.62" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-[#1b1b18] mb-3 text-lg font-semibold lg:px-4">Bonds that Last</h3>
                    <p class="px-2 text-[#6B7280] text-sm leading-relaxed">Small-group encounters led by local hosts invite genuine connection and shared memories you will carry home.</p>
                </div>

                <!-- Wild and Untamed Card -->
                <div class="rounded-xl bg-white p-6 text-center shadow-xl transform transition-all duration-300 hover:scale-105">
                    <div class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg" style="background-color: #c86542; box-shadow: 0 10px 15px -3px rgba(200, 101, 66, 0.4), 0 4px 6px -2px rgba(200, 101, 66, 0.25);">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white">
                            <path d="M22 16.92V17C22 17.5933 21.8244 18.1734 21.4936 18.6667C21.1627 19.16 20.6896 19.5446 20.1448 19.7716C19.5999 19.9987 18.9967 20.0581 18.4147 19.9424C17.8328 19.8266 17.2982 19.5409 16.8787 19.1213C16.4591 18.7018 16.1734 18.1672 16.0576 17.5853C15.9419 17.0033 16.0013 16.4001 16.2284 15.8552C16.4554 15.3104 16.84 14.8373 17.3333 14.5064C17.8266 14.1756 18.4067 14 19 14C19.7956 14 20.5587 14.3161 21.1213 14.8787C21.6839 15.4413 22 16.2044 22 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 2L18 6L22 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 22L12 18L8 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 14H8L12 10L8 6H2L6 10L2 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-[#1b1b18] mb-3 text-lg font-semibold lg:px-4">Wild and Untamed</h3>
                    <p class="px-2 text-[#6B7280] text-sm leading-relaxed">Hear the rumble of elephants, wake to hornbills at sunrise, and feel the pulse of Udawalawe's wilderness all around you.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-6xl space-y-8 px-6 text-center">
            <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Explore Our Experiences</h2>
            <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Look through our extensive collection of authentic experiences in Udawalawe</p>
            {{-- @include('partials.heading-divider', ['align' => 'center']) --}}
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Discover experiences that bring you closer to the spirit of Udawalawe. Cook with locals in open-air kitchens, learn the old ways of grinding spices, and wander through gardens filled with fresh herbs. Share simple meals prepared with care, listen to stories passed down through generations, and join safaris where elephants roam the plains and wild birds fill the sky.</p>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Each experience reflects the values of Experience Udawalawe by Ceylon 1850, rooted in tradition, guided by sustainability, and enriched by human connection. This is where culture, nature, and story meet, creating memories that belong to you long after you leave.</p>
            
            <!-- Modern Card Carousel -->
            <div class="modern-carousel" data-carousel>
                <div class="modern-carousel__container" data-carousel-container>
                    
                    <!-- Card 1 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-24-11-47-04.jpg') }}" 
                                alt="Experience Udawalawe - Village Life"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-50-10 2.jpg') }}" 
                                alt="Experience Udawalawe - Traditional Activities"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-43 2.jpg') }}" 
                                alt="Experience Udawalawe - Local Culture"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-24-11-47-02.jpg') }}" 
                                alt="Experience Udawalawe - Nature & Wildlife"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-40-54.jpg') }}" 
                                alt="Experience Udawalawe - Authentic Experiences"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-33-55.jpg') }}" 
                                alt="Experience Udawalawe - Village Traditions"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-43.jpg') }}" 
                                alt="Experience Udawalawe - Cultural Heritage"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-42.jpg') }}" 
                                alt="Experience Udawalawe - Traditional Crafts"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 9 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-33-05.jpg') }}" 
                                alt="Experience Udawalawe - Village Activities"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 10 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-38-30.jpg') }}" 
                                alt="Experience Udawalawe - Local Community"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 11 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-50-10.jpg') }}" 
                                alt="Experience Udawalawe - Traditional Skills"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 12 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-45.jpg') }}" 
                                alt="Experience Udawalawe - Cultural Immersion"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 13 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-44.jpg') }}" 
                                alt="Experience Udawalawe - Authentic Living"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                </div>

                <!-- Navigation -->
                <div class="modern-carousel__navigation">
                    <button class="modern-carousel__nav modern-carousel__nav--prev" data-carousel-prev aria-label="Previous experiences">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15,18 9,12 15,6"></polyline>
                        </svg>
                    </button>
                    <button class="modern-carousel__nav modern-carousel__nav--next" data-carousel-next aria-label="Next experiences">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9,6 15,12 9,18"></polyline>
                        </svg>
                    </button>
                </div>

                <!-- Progress Indicator -->
                <div class="modern-carousel__progress" data-carousel-progress>
                    <div class="modern-carousel__progress-bar" data-carousel-progress-bar></div>
                </div>
            </div>
            <br>
            
            <a href="{{ route('experiences.index') }}" class="inline-flex items-center gap-2 bg-[#1b1b18] px-8 py-3 text-sm font-semibold uppercase tracking-[0.2em] text-white transition hover:bg-[#2f2f2c] rounded-full">
                Explore Experiences
                <span aria-hidden="true" class="text-lg">→</span>
            </a>
        </div>
    </section>

    <section class="bg-[#c86542] py-16 lg:py-20">
        <div class="mx-auto max-w-4xl px-6 text-center text-white">
            <blockquote class="mt-6 text-3xl font-light leading-tight sm:text-4xl">“Journeys fade, but the stories remain.”</blockquote>
            <p class="mt-6 text-sm text-white/60 sm:text-base">Each memory you gather here finds a home in the hearts of the people who welcomed you.</p>
        </div>
    </section>

    <section class="bg-[#FDFDFC] py-16 lg:py-16">
        <div class="mx-auto max-w-6xl space-y-10 px-6">
            <div class="space-y-4 text-center">
                 <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Experiences at Udawalawe by Ceylon 1850</h2>
                @include('partials.heading-divider', ['align' => 'center'])
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">A collection of journeys that bring you closer to the land, its people, and its stories.</p>
                <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Each of our experiences is designed to let you see, taste, and feel the spirit of Udawalawe. Learn to cook in a village kitchen with recipes handed down through generations, wander spice and herbal gardens where old knowledge thrives, and share meals that carry the warmth of community.</p>
                <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Set out on safaris to meet elephants and wild birds in their natural home or simply sit beneath the stars and listen to stories that have shaped this land. Here, every path leads to Authentic Roots, Living Stories.</p>
            </div>
        </div>
    </section>

    <!-- Experience Gallery Section -->
    <section class="bg-white py-8 lg:py-12">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3" data-gallery>
                <div class="grid gap-3">
                    <div class="gallery-item" data-lightbox-index="0">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-24-11-47-04.jpg') }}" 
                             alt="Village Life Experience"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="1">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-50-10 2.jpg') }}" 
                             alt="Traditional Activities"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="2">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-43 2.jpg') }}" 
                             alt="Local Culture"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="3">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-24-11-47-02.jpg') }}" 
                             alt="Nature & Wildlife"
                             loading="lazy">
                    </div>
                </div>
                <div class="grid gap-3">
                    <div class="gallery-item" data-lightbox-index="4">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-40-54.jpg') }}" 
                             alt="Authentic Experiences"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="5">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-33-55.jpg') }}" 
                             alt="Village Traditions"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="6">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-43.jpg') }}" 
                             alt="Cultural Heritage"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="7">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-42.jpg') }}" 
                             alt="Traditional Crafts"
                             loading="lazy">
                    </div>
                </div>
                <div class="grid gap-3">
                    <div class="gallery-item" data-lightbox-index="8">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-33-05.jpg') }}" 
                             alt="Village Activities"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="9">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-38-30.jpg') }}" 
                             alt="Local Community"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="10">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-50-10.jpg') }}" 
                             alt="Traditional Skills"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="11">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-45.jpg') }}" 
                             alt="Cultural Immersion"
                             loading="lazy">
                    </div>
                </div>
                <div class="grid gap-3">
                    <div class="gallery-item" data-lightbox-index="12">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-44.jpg') }}" 
                             alt="Authentic Living"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="13">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-33-05.jpg') }}" 
                             alt="Village Life"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="14">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-24-11-47-04.jpg') }}" 
                             alt="Natural Beauty"
                             loading="lazy">
                    </div>
                    <div class="gallery-item" data-lightbox-index="15">
                        <img class="gallery-image" 
                             src="{{ asset('images/carousel/PHOTO-2025-10-09-13-40-54.jpg') }}" 
                             alt="Wildlife Encounters"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox-modal" class="lightbox-modal">
        <div class="lightbox-overlay" onclick="closeLightbox()"></div>
        <div class="lightbox-container">
            <button class="lightbox-close" onclick="closeLightbox()" aria-label="Close lightbox">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <button class="lightbox-nav lightbox-prev" onclick="previousImage()" aria-label="Previous image">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button class="lightbox-nav lightbox-next" onclick="nextImage()" aria-label="Next image">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
            <div class="lightbox-content">
                <img id="lightbox-image" class="lightbox-image" src="" alt="">
                <div id="lightbox-caption" class="lightbox-caption"></div>
                <div id="lightbox-counter" class="lightbox-counter"></div>
            </div>
        </div>
    </div>

    <!-- Modern Card Carousel Section -->
    {{-- <section class="relative bg-white py-16 lg:py-24">
        <div class="mx-auto max-w-7xl px-6">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mb-4">
                    Discover Udawalawe
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Immerse yourself in the authentic beauty and cultural richness of Udawalawe
                </p>
            </div>

            <!-- Modern Card Carousel -->
            <div class="modern-carousel" data-carousel>
                <div class="modern-carousel__container" data-carousel-container>
                    
                    <!-- Card 1 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-24-11-47-04.jpg') }}" 
                                alt="Experience Udawalawe - Village Life"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-50-10 2.jpg') }}" 
                                alt="Experience Udawalawe - Traditional Activities"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-43 2.jpg') }}" 
                                alt="Experience Udawalawe - Local Culture"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-24-11-47-02.jpg') }}" 
                                alt="Experience Udawalawe - Nature & Wildlife"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-40-54.jpg') }}" 
                                alt="Experience Udawalawe - Authentic Experiences"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-33-55.jpg') }}" 
                                alt="Experience Udawalawe - Village Traditions"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-43.jpg') }}" 
                                alt="Experience Udawalawe - Cultural Heritage"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-42.jpg') }}" 
                                alt="Experience Udawalawe - Traditional Crafts"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 9 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-33-05.jpg') }}" 
                                alt="Experience Udawalawe - Village Activities"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 10 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-38-30.jpg') }}" 
                                alt="Experience Udawalawe - Local Community"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 11 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-50-10.jpg') }}" 
                                alt="Experience Udawalawe - Traditional Skills"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 12 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-45.jpg') }}" 
                                alt="Experience Udawalawe - Cultural Immersion"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                    <!-- Card 13 -->
                    <div class="modern-carousel__card" data-carousel-card>
                        <div class="modern-carousel__image-container">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-44.jpg') }}" 
                                alt="Experience Udawalawe - Authentic Living"
                                class="modern-carousel__image"
                                loading="lazy"
                            />
                        </div>
                    </div>

                </div>

                <!-- Navigation -->
                <div class="modern-carousel__navigation">
                    <button class="modern-carousel__nav modern-carousel__nav--prev" data-carousel-prev aria-label="Previous experiences">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15,18 9,12 15,6"></polyline>
                        </svg>
                    </button>
                    <button class="modern-carousel__nav modern-carousel__nav--next" data-carousel-next aria-label="Next experiences">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9,6 15,12 9,18"></polyline>
                        </svg>
                    </button>
                </div>

                <!-- Progress Indicator -->
                <div class="modern-carousel__progress" data-carousel-progress>
                    <div class="modern-carousel__progress-bar" data-carousel-progress-bar></div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-5xl space-y-8 px-6 text-center">
            <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">About Experience Udawalawe by Ceylon 1850</h2>
            @include('partials.heading-divider', ['align' => 'center'])
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">We have a deep respect for Udawalawe, its people, its landscapes, and its living traditions. Experience Udawalawe was founded to share these stories through carefully curated journeys that connect culture, community, and nature.</p>
            <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">Each experience, from cooking in village kitchens to exploring spice gardens and setting out on safaris, is designed to be authentic and sustainable. Guided by our promise of Authentic Roots, Living Stories, we invite you to discover a way of travel that protects wildlife, supports local families, and keeps traditions alive.</p>
        </div>
    </section>

    <!-- Sustainability Section - Enhanced Design -->
    <section class="relative bg-gradient-to-br from-[#c86542] via-[#d4744f] to-[#c86542] py-20 lg:py-28 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-white/5 rounded-full blur-2xl animate-pulse" style="animation-delay: 1s;"></div>
        
        <div class="relative mx-auto max-w-6xl px-6">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 tracking-tight">
                    Sustainability at Experience Udawalawe by Ceylon 1850
                </h2>
                <div class="w-24 h-1 bg-white/30 rounded-full mx-auto mb-6"></div>
                <p class="text-xl text-white/90 font-medium max-w-3xl mx-auto leading-relaxed">
                    Join us in our journey, where every visit supports people, wildlife, and traditions.
                </p>
            </div>

            <!-- Content Cards -->
            <div class="grid lg:grid-cols-3 gap-8 mb-12">
                <!-- Supporting Local Families -->
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 group">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Supporting Local Families</h3>
                    <p class="text-white/80 leading-relaxed">Every experience directly benefits local communities, creating sustainable livelihoods while preserving traditional ways of life.</p>
                </div>

                <!-- Protecting Wildlife -->
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 group">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Protecting Wildlife</h3>
                    <p class="text-white/80 leading-relaxed">Our responsible tourism practices contribute to conservation efforts, ensuring Udawalawe's wildlife thrives for future generations.</p>
                </div>

                <!-- Preserving Heritage -->
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 group">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Preserving Cultural Heritage</h3>
                    <p class="text-white/80 leading-relaxed">We keep ancient traditions alive through authentic experiences, ensuring cultural knowledge passes to new generations.</p>
                </div>
            </div>

            <!-- Main Message -->
            <div class="text-center">
                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-10 border border-white/20 max-w-4xl mx-auto">
                    <p class="text-lg lg:text-xl text-white leading-relaxed">
                        At Experience Udawalawe by Ceylon 1850, sustainability is at the heart of what we do. From supporting local families to protecting wildlife and preserving cultural heritage, every activity is shaped by regenerative tourism. Your journey here creates memories while leaving a positive mark on the land and community.
                    </p>
                </div>
            </div>
        </div>
    </section>
