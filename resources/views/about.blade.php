@extends('layouts.app')

@section('title', 'About Us | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => 'About Us', 'subtitle' => 'Authentic Roots, Living Stories'])
    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20 space-y-16">
            <section class="grid gap-8 lg:grid-cols-[1.2fr_1fr] lg:items-center">
                <div class="space-y-6">
                    <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Ayubowan and welcome to Experience Udawalawe.</p>
                    <h2 class="text-3xl font-semibold text-[#1b1b18]">Who We Are</h2>
                    @include('partials.heading-divider', ['showIcon' => true])
                    <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                        Experience Udawalawe was born from a simple idea: that travel should be about connection. Connection to nature, to culture, and to people. Through our signature restaurant Ceylon 1850 and a collection of immersive experiences, we invite guests to step into the rhythms of rural Sri Lanka.
                    </p>
                    <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                        Here, food is prepared the way it has been for generations, using fresh ingredients from nearby farms. Experiences are shaped by the wisdom of local families — from heritage crafts to community-led excursions. Every detail reflects our belief that authenticity is not staged, but lived.
                    </p>
                </div>
                
                <!-- Enhanced Masonry Image Gallery -->
                <div class="flex items-center justify-center h-full">
                    <div class="masonry-gallery about-masonry" id="masonryGallery">
                        <!-- Image 1 -->
                        <div class="masonry-gallery__item masonry-gallery__item--large" data-lightbox="gallery">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-24-11-47-04.jpg') }}" 
                                alt="Experience Udawalawe - Village Life" 
                                class="masonry-gallery__image"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Image 2 -->
                        <div class="masonry-gallery__item" data-lightbox="gallery">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-50-10 2.jpg') }}" 
                                alt="Experience Udawalawe - Traditional Activities" 
                                class="masonry-gallery__image"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Image 3 -->
                        <div class="masonry-gallery__item masonry-gallery__item--tall" data-lightbox="gallery">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-43 2.jpg') }}" 
                                alt="Experience Udawalawe - Local Culture" 
                                class="masonry-gallery__image"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Image 4 -->
                        <div class="masonry-gallery__item" data-lightbox="gallery">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-24-11-47-02.jpg') }}" 
                                alt="Experience Udawalawe - Nature & Wildlife" 
                                class="masonry-gallery__image"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Image 5 -->
                        <div class="masonry-gallery__item masonry-gallery__item--wide" data-lightbox="gallery">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-40-54.jpg') }}" 
                                alt="Experience Udawalawe - Authentic Experiences" 
                                class="masonry-gallery__image"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Image 6 -->
                        <div class="masonry-gallery__item" data-lightbox="gallery">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-33-55.jpg') }}" 
                                alt="Experience Udawalawe - Village Traditions" 
                                class="masonry-gallery__image"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Image 7 -->
                        <div class="masonry-gallery__item masonry-gallery__item--tall" data-lightbox="gallery">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-45.jpg') }}" 
                                alt="Experience Udawalawe - Cultural Immersion" 
                                class="masonry-gallery__image"
                                loading="lazy"
                            />
                        </div>
                        
                        <!-- Image 8 -->
                        <div class="masonry-gallery__item" data-lightbox="gallery">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-09-13-53-42.jpg') }}" 
                                alt="Experience Udawalawe - Traditional Crafts" 
                                class="masonry-gallery__image"
                                loading="lazy"
                            />
                        </div>
                    </div>
                </div>
                
                <!-- Lightbox Modal -->
                <div id="lightboxModal" class="lightbox-modal" style="display: none;">
                    <div class="lightbox-overlay" id="lightboxOverlay"></div>
                    <div class="lightbox-container">
                        <button class="lightbox-close" id="lightboxClose" aria-label="Close lightbox">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <button class="lightbox-nav lightbox-prev" id="lightboxPrev" aria-label="Previous image">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="15,18 9,12 15,6"></polyline>
                            </svg>
                        </button>
                        <button class="lightbox-nav lightbox-next" id="lightboxNext" aria-label="Next image">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9,6 15,12 9,18"></polyline>
                            </svg>
                        </button>
                        <div class="lightbox-content">
                            <img id="lightboxImage" class="lightbox-image" src="" alt="" />
                            <div class="lightbox-caption" id="lightboxCaption"></div>
                            <div class="lightbox-counter" id="lightboxCounter"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Our Philosophy</h3>
                @include('partials.heading-divider')
                
                <!-- Philosophy Introduction -->
                <div class="text-center max-w-3xl mx-auto space-y-4">
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        We believe tourism can be a force for good. Our philosophy is built on three commitments:
                    </p>
                </div>

                <!-- Three Commitments -->
                <div class="grid gap-8 md:grid-cols-3">
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Sustainability</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Reducing waste, choosing eco-friendly alternatives, and protecting the land we depend on.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm text-center">
                        <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Culture & Heritage</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Preserving age-old practices, recipes, and crafts while sharing them with the world.
                        </p>
                    </article>

                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-[#1b1b18] mb-4">Community First</h4>
                        <p class="text-sm text-[#50504d] leading-relaxed">
                            Ensuring local families, artisans, and entrepreneurs grow alongside us.
                        </p>
                    </article>
                </div>

                <!-- Philosophy Conclusion -->
                <div class=" text-center">
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light max-w-4xl mx-auto">
                        This approach ensures that every guest leaves with more than memories — they leave with a deeper connection to Sri Lanka's soul.
                    </p>
                </div>
            </section>

            <section class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">What We Offer</h3>
                @include('partials.heading-divider')
                <div class="grid gap-8 md:grid-cols-3">
                    <!-- Ceylon 1850 Restaurant -->
                    <article class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <div class="relative h-48 overflow-hidden">
                            <img 
                                src="{{ asset('images/Cooking class/PHOTO-2025-10-09-13-53-42.jpg') }}" 
                                alt="Ceylon 1850 Restaurant" 
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <p class="text-xs uppercase tracking-[0.3em] text-white/80 font-medium">Restaurant</p>
                                <h4 class="text-xl font-semibold">Ceylon 1850</h4>
                            </div>
                        </div>
                        <div class="p-6 bg-white">
                            <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                                Dining inspired by the 1850s, where meals are cooked with firewood, served in clay, and infused with local flavors.
                            </p>
                            <a href="{{ route('dining') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                                Explore dining
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Cultural Experiences -->
                    <article class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <div class="relative h-48 overflow-hidden">
                            <img 
                                src="{{ asset('images/Cinnamon peeling/PHOTO-2025-10-09-13-33-05.jpg') }}" 
                                alt="Cultural Experiences" 
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <p class="text-xs uppercase tracking-[0.3em] text-white/80 font-medium">Cultural Experiences</p>
                                <h4 class="text-xl font-semibold">Living Traditions</h4>
                            </div>
                        </div>
                        <div class="p-6 bg-white">
                            <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                                Cooking demonstrations, heritage crafts, and traditional practices that bring local wisdom to life.
                            </p>
                            <a href="{{ route('experiences.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                                Meet the storytellers
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Nature Excursions -->
                    <article class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <div class="relative h-48 overflow-hidden">
                            <img 
                                src="{{ asset('images/carousel/PHOTO-2025-10-24-11-47-02.jpg') }}" 
                                alt="Nature Excursions" 
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <p class="text-xs uppercase tracking-[0.3em] text-white/80 font-medium">Nature Excursions</p>
                                <h4 class="text-xl font-semibold">Wild Horizons</h4>
                            </div>
                        </div>
                        <div class="p-6 bg-white">
                            <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                                Authentic journeys by boat, jeep, or foot, designed to immerse guests in the natural beauty of Udawalawe without leaving harm behind.
                            </p>
                            <a href="{{ route('experiences.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                                Plan an excursion
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </section>

                        <section class="rounded-3xl border border-[#ecebe5] bg-white p-10 shadow-sm">
                <div class="space-y-6 text-center">
                    <div class="space-y-4">
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Our Promise</p>
                        <h3 class="text-2xl font-semibold text-[#1b1b18]">Journeys that leave lasting impact</h3>
                        <div class="flex justify-center">
                            @include('partials.heading-divider')
                        </div>
                        <p class="text-sm text-[#50504d] sm:text-base leading-relaxed max-w-4xl mx-auto">
                            We commit to transparency, community-led decisions, and measurable sustainability milestones.
                            Your stay fuels scholarships, habitat monitoring, women-led enterprises, and the preservation of
                            Village Udawalawe's living heritage.
                        </p>
                    </div>
                    <div class="inline-block rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-8 py-6 text-sm uppercase tracking-[0.35em] text-[#50504d]">
                        Together for Tomorrow
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Lightbox JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightboxModal = document.getElementById('lightboxModal');
            const lightboxImage = document.getElementById('lightboxImage');
            const lightboxCaption = document.getElementById('lightboxCaption');
            const lightboxCounter = document.getElementById('lightboxCounter');
            const lightboxClose = document.getElementById('lightboxClose');
            const lightboxOverlay = document.getElementById('lightboxOverlay');
            const lightboxPrev = document.getElementById('lightboxPrev');
            const lightboxNext = document.getElementById('lightboxNext');
            
            const galleryItems = document.querySelectorAll('[data-lightbox="gallery"]');
            let currentImageIndex = 0;
            const images = [];
            
            // Collect all images data
            galleryItems.forEach((item, index) => {
                const img = item.querySelector('img');
                images.push({
                    src: img.src,
                    alt: img.alt
                });
                
                // Add click event to each gallery item
                item.addEventListener('click', () => {
                    currentImageIndex = index;
                    openLightbox();
                });
            });
            
            function openLightbox() {
                updateLightboxImage();
                lightboxModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
                
                // Add animation
                setTimeout(() => {
                    lightboxModal.classList.add('lightbox-active');
                }, 10);
            }
            
            function closeLightbox() {
                lightboxModal.classList.remove('lightbox-active');
                setTimeout(() => {
                    lightboxModal.style.display = 'none';
                    document.body.style.overflow = '';
                }, 300);
            }
            
            function updateLightboxImage() {
                const currentImage = images[currentImageIndex];
                lightboxImage.src = currentImage.src;
                lightboxImage.alt = currentImage.alt;
                lightboxCaption.textContent = currentImage.alt;
                lightboxCounter.textContent = `${currentImageIndex + 1} / ${images.length}`;
            }
            
            function showPrevImage() {
                currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
                updateLightboxImage();
            }
            
            function showNextImage() {
                currentImageIndex = (currentImageIndex + 1) % images.length;
                updateLightboxImage();
            }
            
            // Event listeners
            lightboxClose.addEventListener('click', closeLightbox);
            lightboxOverlay.addEventListener('click', closeLightbox);
            lightboxPrev.addEventListener('click', showPrevImage);
            lightboxNext.addEventListener('click', showNextImage);
            
            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (lightboxModal.style.display === 'flex') {
                    switch(e.key) {
                        case 'Escape':
                            closeLightbox();
                            break;
                        case 'ArrowLeft':
                            showPrevImage();
                            break;
                        case 'ArrowRight':
                            showNextImage();
                            break;
                    }
                }
            });
        });
    </script>
@endsection
