<div id="nav-overlay" class="fixed inset-0 hidden bg-[#0f1012] text-white z-[70]">
    <div class="absolute top-6 left-8 ">
        <button type="button" data-overlay-close
            class="justify-end rounded-full border border-white/30 p-3 text-white/80 hover:text-white hover:border-white hover:bg-white/10 transition-all duration-200">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div class="w-full h-full grid grid-cols-2 lg:grid-cols-2">
        
            <!-- Left Navigation Section -->
            <div class="px-20 py-10 flex flex-col justify-start">
                <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/logo3.png') }}" alt="Experience Udawalawa" class="h-80 w-100 object-contain">
                    {{-- <div>
                        <p class="text-xl font-semibold text-white items-center"> Experience<br/>Udawalawa</p>
                    </div> --}}
                </div>
                <hr class="border-t-2 border-gray-300 ">
            </div>

            <nav class="grid grid-cols-1 gap-y-6 gap-x-10 text-[15px] tracking-wide">
                <a href="#" class="text-white  hover:text-grey-500">HOME</a>
                <a href="#" class="text-white  hover:text-[#96c43f]">ABOUT US</a>
                <a href="#" class="text-white  hover:text-[#96c43f]">EXPERIENCES</a>
                <a href="#" class="text-white  hover:text-[#96c43f]">SUSTAINABILITY</a>
                <a href="#" class="text-white  hover:text-[#96c43f]">STORIES</a>
                <a href="#" class="text-white  hover:text-[#96c43f]">STORIES</a>
                <a href="#" class="text-white  hover:text-[#96c43f]">FAQ</a>
                <a href="#" class="text-white hover:text-[#96c43f]">CONTACT US</a>
            </nav>

        <!-- Right Feature Cards Section -->
        <div class="px-10 py-20 flex flex-col justify-center items-center ">

            <div class="grid grid-cols-2 gap-8">
                <!-- Card 1 -->
                <a href="#" class="group relative overflow-hidden">
                    <img src="{{ asset('images/Coconut experience/PHOTO-2025-10-09-13-40-53 2.jpg') }}"
                        class="w-40 h-100 object-cover rounded-lg group-hover:scale-105 transition"/>
                    <p class="absolute bottom-5 left-5 text-sm font-bold tracking-wide">COCONUT EXPERIENCE</p>
                </a>

                <!-- Card 2 -->
                <a href="#" class="group relative overflow-hidden"> 
                    <!-- Added margin-left to separate from right side -->
                    <img src="{{ asset('images/Gem mine/PHOTO-2025-10-09-13-35-20.jpg') }}"
                        class="w-40 h-100 object-cover rounded-lg group-hover:scale-105 transition"/>
                    <p class="absolute bottom-5 left-5 text-sm font-bold tracking-wide">GEM MINE</p>
                </a>
            </div>

            <!-- Arrows -->
            <div class="mt-8 flex justify-center gap-6 text-4xl items-center w-full">
                <button class="opacity-50 hover:opacity-100 transition p-4">&lsaquo;</button>
                <button class="hover:opacity-100 transition p-4">&rsaquo;</button>
            </div>

        </div>

    </div>
</div>

