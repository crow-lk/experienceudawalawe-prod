@extends('layouts.app')

@section('title', 'Our Contribution to the Global Goals | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', [
        'title' => 'Our Contribution to the Global Goals',
        'subtitle' => 'Authentic Roots, Living Stories — aligned with the world we share'
    ])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20 space-y-16">
            
            <!-- Introduction Section -->
            <section class="space-y-6">
                <div class="max-w-4xl mx-auto text-center space-y-4">
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        At Experience Udawalawe, sustainability is not an add-on — it is the foundation of everything we do. Every refill, every shared meal, and every tradition passed on to a guest is part of a larger journey. A journey where choices made in our village ripple outward to support the United Nations Sustainable Development Goals (SDGs) — a global vision for a greener, fairer future.
                    </p>
                    <p class="text-base sm:text-lg leading-relaxed text-[#2c2c28] font-light">
                        This page shares how our work connects to the SDGs, through both our core commitments and the guest experiences we create.
                    </p>
                </div>
            </section>

            <!-- Our Core Commitments Section -->
            <section class="space-y-12">
                <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Our Core Commitments
                    </h2>
                </div>

                <div class="space-y-12">
                    <!-- Reduction of Single-Use Plastics -->
                    <article class="bg-white rounded-2xl p-8 shadow-sm border border-[#ecebe5]">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Reduction of Single-Use Plastics</h3>
                        <p class="text-sm text-[#50504d] mb-6 leading-relaxed">
                            We replace plastics with natural, reusable alternatives — clay pots, glass bottles, and banana leaves. Guests enjoy Sri Lankan hospitality the way it was meant to be, while nature stays free of harmful waste.
                        </p>
                        <div class="grid gap-4 md:grid-cols-3">
                            <div class="flex items-start gap-3 bg-blue-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xs">6</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Clean Water & Sanitation</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Every refill keeps Udawalawe's rivers clear and safe for wildlife.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-yellow-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-xs">12</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Responsible Consumption</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Natural, reusable options replace disposables.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-green-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-xs">15</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Life on Land</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Cutting plastics protects elephants, birds, and ecosystems.</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Entrepreneurship Opportunities -->
                    <article class="bg-white rounded-2xl p-8 shadow-sm border border-[#ecebe5]">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Entrepreneurship Opportunities</h3>
                        <p class="text-sm text-[#50504d] mb-6 leading-relaxed">
                            Tourism must strengthen the people who make this place special. We work directly with farmers, artisans, and small businesses, ensuring livelihoods grow as our destination thrives.
                        </p>
                        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                            <div class="flex items-start gap-3 bg-red-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center text-white font-bold text-xs">8</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Decent Work</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Fair partnerships provide reliable income for local families.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-orange-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-xs">11</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Sustainable Communities</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Local sourcing keeps traditions alive and economies resilient.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-yellow-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-xs">12</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Responsible Consumption</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Buying close to home lowers imports, packaging, and waste.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-blue-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xs">17</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Partnerships</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Shared journeys where guests, villagers, and our team build together.</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Eco-Friendly Construction -->
                    <article class="bg-white rounded-2xl p-8 shadow-sm border border-[#ecebe5]">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Eco-Friendly Construction</h3>
                        <p class="text-sm text-[#50504d] mb-6 leading-relaxed">
                            Not a single tree was cut to build our site. We used upcycled materials, chose durable steel over heavy timber, and celebrated local design. The result: a space that blends into the land, rather than taking from it.
                        </p>
                        <div class="grid gap-4 md:grid-cols-3">
                            <div class="flex items-start gap-3 bg-orange-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-xs">11</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Sustainable Communities</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Built without cutting trees, preserving balance with nature.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-yellow-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-xs">12</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Responsible Production</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Upcycled and recyclable materials give old resources new life.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-green-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-xs">15</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Life on Land</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Protecting trees safeguards habitats for birds, insects, and animals.</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Community Engagement -->
                    <article class="bg-white rounded-2xl p-8 shadow-sm border border-[#ecebe5]">
                        <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Community Engagement</h3>
                        <p class="text-sm text-[#50504d] mb-6 leading-relaxed">
                            For us, tourism is a partnership. Local families guide, host, and share traditions. Women and youth are given space to lead. Guests meet villagers as equals, creating relationships built on respect and dignity.
                        </p>
                        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                            <div class="flex items-start gap-3 bg-red-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center text-white font-bold text-xs">8</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Decent Work</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Local hiring and fair pay build stronger livelihoods.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-pink-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold text-xs">10</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Reduced Inequalities</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Women and youth are empowered through tourism.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-orange-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-xs">11</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Sustainable Communities</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Shared traditions strengthen village life.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-blue-50 p-4 rounded-lg">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xs">17</div>
                                <div>
                                    <h4 class="text-sm font-semibold text-[#1b1b18]">Partnerships</h4>
                                    <p class="text-xs text-[#50504d] mt-1">Guests and locals meet as partners, not strangers.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Experiences That Create Impact Section -->
            <section class="space-y-12">
                <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold tracking-tight text-[#1b1b18] sm:text-4xl" data-no-divider>
                        Experiences That Create Impact
                    </h2>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Cooking with Tradition -->
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Cooking with Tradition</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                            Guests cook with us the way our ancestors did — using seasonal produce from nearby farms and clay or cane utensils. This experience supports livelihoods and keeps culture alive.
                        </p>
                        <div class="space-y-2 text-xs text-[#50504d]">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span>SDG 8 – Provides fair income for farmers and cooks</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-orange-500 rounded-full"></span>
                                <span>SDG 11 – Keeps culinary heritage alive</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-yellow-500 rounded-full"></span>
                                <span>SDG 12 – Promotes seasonal, locally sourced meals</span>
                            </div>
                        </div>
                    </article>

                    <!-- Curd Making -->
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Curd Making</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                            An age-old craft, still practiced in clay pots. Guests learn how buffalo milk becomes curd, supporting dairy farmers while reviving a tradition that avoids modern plastic packaging.
                        </p>
                        <div class="space-y-2 text-xs text-[#50504d]">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span>SDG 8 – Steady income for rural dairy farmers</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-orange-500 rounded-full"></span>
                                <span>SDG 11 – Preserves a heritage practice</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-yellow-500 rounded-full"></span>
                                <span>SDG 12 – Clay pots replace plastic containers</span>
                            </div>
                        </div>
                    </article>

                    <!-- Boat Ride on the Lake -->
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Boat Ride on the Lake</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                            A peaceful journey across Udawalawe's waters, designed to be plastic-free. Guests connect with nature without leaving waste behind.
                        </p>
                        <div class="space-y-2 text-xs text-[#50504d]">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                <span>SDG 6 – Protecting rivers and lakes from plastic waste</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-yellow-500 rounded-full"></span>
                                <span>SDG 12 – Excursions run without disposables</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                <span>SDG 15 – Safeguarding biodiversity for elephants, birds, and villagers</span>
                            </div>
                        </div>
                    </article>

                    <!-- Toddy Tapping -->
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Toddy Tapping</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                            Guests discover the heritage of palm traditions. This sustainable practice supports families while celebrating non-industrial use of land and resources.
                        </p>
                        <div class="space-y-2 text-xs text-[#50504d]">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span>SDG 8 – Income for families who rely on toddy tapping</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-orange-500 rounded-full"></span>
                                <span>SDG 11 – Keeps cultural knowledge alive</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                <span>SDG 15 – Encourages sustainable use of palm resources</span>
                            </div>
                        </div>
                    </article>

                    <!-- Coconut Culture Experience -->
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-8 shadow-sm md:col-span-2 lg:col-span-1">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Coconut Culture Experience</h3>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-2">From tree to table, nothing is wasted</p>
                        <p class="text-sm text-[#50504d] leading-relaxed mb-4">
                            The coconut is more than food in Sri Lanka — it is a way of life. In this experience, guests discover how every part of the tree is used to create meals, crafts, and livelihoods. Nothing is wasted; every part has a purpose.
                        </p>
                        <div class="space-y-2 text-xs text-[#50504d]">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span>SDG 8 – Steady livelihoods for climbers, rope-makers, cooks, and artisans</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-orange-500 rounded-full"></span>
                                <span>SDG 11 – Safeguards traditional knowledge and strengthens cultural identity</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-yellow-500 rounded-full"></span>
                                <span>SDG 12 – A living example of a zero-waste cycle</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                <span>SDG 15 – Promotes sustainable, small-scale use of natural resources</span>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Why It Matters Section -->
            <section class="bg-gradient-to-br from-stone-50 to-white rounded-3xl p-12 shadow-lg">
                <div class="text-center space-y-6">
                    <h3 class="text-2xl font-semibold text-[#1b1b18]">Why It Matters</h3>
                    <p class="text-base leading-relaxed text-[#50504d] max-w-4xl mx-auto">
                        Sustainability here is not abstract — it is lived. Every refill, every shared meal, every journey without plastic becomes part of Sri Lanka's living story. By aligning with the SDGs, our local actions connect to a global vision.
                    </p>
                    <p class="text-base leading-relaxed text-[#50504d] max-w-4xl mx-auto">
                        Together with our guests, our community, and our land, we are writing a future that is greener, fairer, and rooted in what makes Udawalawe unique.
                    </p>
                    <p class="text-lg font-medium text-[#1b1b18]">Authentic Roots, Living Stories.</p>
                    <div class="pt-4">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-center sm:gap-6">
                            <a href="{{ route('sustainability') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                                Back to sustainability overview
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 rounded-full bg-[#1b1b18] px-8 py-3 text-sm font-semibold text-white transition-all duration-300 hover:bg-stone-800 hover:scale-105">
                                Join our mission
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
