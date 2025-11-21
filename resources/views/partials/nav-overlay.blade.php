<div id="nav-overlay" class="fixed inset-0 hidden bg-[#0f1012]/95 text-white z-[70]">
    <div class="max-w-9xl">
        <button type="button" data-overlay-close
            class="relative top-4 left-4 rounded-full border border-white/30 p-3 text-white/80 hover:text-white hover:border-white hover:bg-white/10 transition-all duration-200">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="max-w-9xl mx-auto px-6 flex flex-col gap-12">
        <div class="w-auto grid grid-cols-2 relative z-10 h-full overflow-y-auto">
            <div class="flex justify-center items-center">
                <img src="{{ asset('images/logo3.png') }}" alt="Example" class="w-64 h-64">
            </div>
        </div>
    </div>

    <div class="max-w-9xl mx-auto px-6 flex flex-col gap-12">
        <div class="w-auto grid grid-cols-2 relative z-10 h-full overflow-y-auto">
            
            <!-- LEFT NAVIGATION -->
            <div class="px-20">
                <hr class="logo-nav-divider">
                <nav class="grid grid-cols-2 gap-x-6 text-[15px] tracking-wide">
                    <div class="grid grid-cols-1 gap-4">
                        <a href="{{ url('/') }}" class="text-gray-300 transition">HOME</a>
                        <a href="{{ route('about') }}" class="text-gray-300 transition">ABOUT US</a>
                        <a href="{{ route('experiences.index') }}" class="text-gray-300 transition">EXPERIENCES</a>
                        <a href="{{ route('sustainability') }}" class="text-gray-300 transition">SUSTAINABILITY</a>
                        <a href="{{ route('stories.index') }}" class="text-gray-300 transition">STORIES</a>
                        <a href="{{ route('faq') }}" class="text-gray-300 transition">FAQ</a>
                        <a href="{{ route('contact') }}" class="text-gray-300 transition">CONTACT US</a>
                    </div>
                    <div class="hide-below-md">
                    <div class="grid grid-cols-2 gap-4">
                        @if(isset($experienceTypes) && $experienceTypes->isNotEmpty())
                                    @foreach($experienceTypes->take(12) as $type)
                                        <a 
                                            href="{{ route('experiences.index', ['type' => $type->slug]) }}" 
                                            class="px-4 text-[12px] font-medium transition-all duration-300"
                                            title="{{ $type->name }}"
                                        >
                                            {{ str_replace(['Experience', 'Cultural &', 'Wildlife &', 'Culinary /', 'Sustainability &'], ['', 'Cultural', 'Wildlife', '', 'Eco'], $type->name) }}
                                        </a>
                                    @endforeach
                        @endif
                    </div>
                    </div>
                </nav>
                <div class="social-icons flex justify-center gap-4 mt-8">
                    <a href="https://www.instagram.com/ceylon_1850_udawalawe?igsh=cXJ6ODlqMWxvMnFv" class="text-white transition" aria-label="Instagram">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/share/1K88NVvZVt/?mibextid=wwXIfr" class="text-white transition" aria-label="Facebook">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="https://www.tripadvisor.com/Restaurant_Review-g3577009-d27164351-Reviews-Ceylon_1850_Authentic_Restaurant-Udawalawa_Sabaragamuwa_Province.html?m=69573" class="text-white transition" aria-label="TripAdvisor">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.562 8.161c-.18.717-.962 1.228-1.736 1.228-.775 0-1.556-.511-1.736-1.228L12 2.839l-1.09 5.322c-.18.717-.962 1.228-1.736 1.228-.775 0-1.556-.511-1.736-1.228L6.438 8.161c-.18-.717.411-1.228 1.185-1.228.775 0 1.556.511 1.736 1.228L12 13.161l2.641-6.228c.18-.717.962-1.228 1.736-1.228.775 0 1.556.511 1.736 1.228l1.09-5.322c.18.717-.411 1.228-1.185 1.228z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- RIGHT FEATURE SLIDER -->
            <div class="px-20 hide-below-md">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <a href="#" class="group relative overflow-hidden">
                                <img src="{{ asset('images/Coconut experience/PHOTO-2025-10-09-13-40-53 2.jpg') }}"
                                    class="w-full h-[300px] object-cover rounded-lg group-hover:scale-105 transition" />
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <a href="#" class="group relative overflow-hidden">
                                <img src="{{ asset('images/Gem mine/PHOTO-2025-10-09-13-35-20.jpg') }}"
                                    class="w-full h-[300px] object-cover rounded-lg group-hover:scale-105 transition" />
                            </a>
                        </div>

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <a href="#" class="group relative overflow-hidden">
                                <img src="{{ asset('images/Cooking class/PHOTO-2025-10-09-13-40-07.jpg') }}"
                                    class="w-full h-[300px] object-cover rounded-lg group-hover:scale-105 transition" />
                            </a>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <a href="#" class="group relative overflow-hidden">
                                <img src="{{ asset('images/Gem mine/PHOTO-2025-10-24-11-47-04.jpg') }}"
                                    class="w-full h-[300px] object-cover rounded-lg group-hover:scale-105 transition" />
                            </a>
                        </div>

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <a href="#" class="group relative overflow-hidden">
                                <img src="{{ asset('images/carousel/PHOTO-2025-10-09-13-33-05.jpg') }}"
                                    class="w-full h-[300px] object-cover rounded-lg group-hover:scale-105 transition" />
                            </a>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <a href="#" class="group relative overflow-hidden">
                                <img src="{{ asset('images/Coconut experience/PHOTO-2025-10-09-13-39-59.jpg') }}"
                                    class="w-full h-[300px] object-cover rounded-lg group-hover:scale-105 transition" />
                            </a>
                        </div>

                        <!-- Add new slides here if needed -->
                    </div>

                    <!-- Navigation arrows -->
                    <div class="flex justify-center">
                        <div class="swiper-button-prev mr-4"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SWIPER CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- SWIPER JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        speed: 800,
    });
</script>

<style>
    /* Custom styles to position buttons below */
    .swiper-button-next,
    .swiper-button-prev {
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        top:450px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: all 0.3s ease;
    }
    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.5);
        color: #fd733f; /* Change arrow color to green on hover */
    }
    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 16px;
        font-weight: bold;
    }
    /* Style for the line between logo and nav */
    .logo-nav-divider {
        border: none;
        height: 1px;
        background-color: rgba(255, 255, 255, 0.3); /* Semi-transparent white line */
        margin-top: 0px; /* Adjust spacing as needed */
        margin-bottom: 60px;
        width: 100%;
    }
    .social-icons a {
        display: inline-block;
    }
    .social-icons svg {
        transition: color 0.3s ease;
    }
    /* Main navigation links hover */
    .grid.grid-cols-1.gap-2 a:hover {
        color: #fd733f;
    }
    .grid.grid-cols-1.gap-2 a:first-child:hover { 
        color: #fd733f; 
    }

    /* Experience type links hover */
    .grid.grid-cols-2.gap-4 a:hover {
        color: #fd733f; 
    }

    /* Social icons hover */
    .social-icons a:hover {
        color: #fd733f;
    }

    /* Laptop screens (1366px and below) */
    @media (max-width: 1366px) {
        .px-20 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
        /* Reduce spacing between nav items */
        nav a {
            font-size: 13px !important;
        }
        .max-w-9xl {
            width: 1200px !important;
            height: auto !important;
        }
        /* Adjust grid layout proportion */
        .grid.grid-cols-2 {
            grid-template-columns: 50% 50% !important;
        }
        .swiper-button-next,
        .swiper-button-prev {
            top: 300px !important;
        }
    }

    @media (max-width: 820px) {

        .hide-below-md {
            display: none;
        }

        /* Make grid one column on mobile */
        .grid.grid-cols-2 {
            grid-template-columns: 34% 66% !important;
        }
        /* Adjust slider height & position */
        .swiper-button-next,
        .swiper-button-prev {
            top: 250px !important;
        }

        /* Reduce padding */
        .px-20 {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        .gap-4 {
            gap: 1rem;
        }

    }


</style>

