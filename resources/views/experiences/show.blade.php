@extends('layouts.app')

@section('title', ($experience->meta_title ?? $experience->title) . ' - Experience Udawalawe')

@section('meta-description', $experience->meta_description ?? $experience->short_summary)

@section('body')
<div class="flex min-h-screen w-full flex-col bg-[#FDFDFC] text-[#1b1b18]">
    @include('partials.header-standard')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-[#f8f7f4] to-[#ecebe5] py-16 lg:py-20">
        <div class="mx-auto max-w-5xl px-6">
            @if($experience->type)
                <div class="mb-4">
                    <span class="inline-flex items-center rounded-full bg-[#1b1b18] px-4 py-2 text-xs font-medium uppercase tracking-[0.2em] text-white">
                        {{ $experience->type }}
                    </span>
                </div>
            @endif
            
            <h1 class="text-4xl font-bold text-[#1b1b18] mb-4 lg:text-5xl">{{ $experience->title }}</h1>
            
            @if($experience->subtitle)
                <h2 class="text-xl font-medium text-[#50504d] mb-6 lg:text-2xl">{{ $experience->subtitle }}</h2>
            @endif
            
            @if($experience->short_summary)
                <p class="text-lg text-[#50504d] mb-8 leading-relaxed">{{ $experience->short_summary }}</p>
            @endif

            <!-- Quick Info Cards -->
            <div class="grid gap-4 md:grid-cols-3 mb-8">
                @if($experience->duration_label)
                    <div class="bg-white rounded-xl p-4 text-center border border-[#ecebe5]">
                        <div class="text-xs uppercase tracking-[0.2em] text-[#b3b1ac] mb-1">Duration</div>
                        <div class="text-sm font-medium text-[#1b1b18]">{{ $experience->duration_label }}</div>
                    </div>
                @endif
                @if($experience->group_size)
                    <div class="bg-white rounded-xl p-4 text-center border border-[#ecebe5]">
                        <div class="text-xs uppercase tracking-[0.2em] text-[#b3b1ac] mb-1">Group Size</div>
                        <div class="text-sm font-medium text-[#1b1b18]">{{ $experience->group_size }}</div>
                    </div>
                @endif
                @if($experience->difficulty_level)
                    <div class="bg-white rounded-xl p-4 text-center border border-[#ecebe5]">
                        <div class="text-xs uppercase tracking-[0.2em] text-[#b3b1ac] mb-1">Difficulty</div>
                        <div class="text-sm font-medium text-[#1b1b18]">{{ $experience->difficulty_level }}</div>
                    </div>
                @endif
            </div>

            <!-- Call to Action -->
            <div class="bg-white rounded-2xl border border-[#ecebe5] p-6">
                <div class="text-center">
                    <h3 class="text-lg font-semibold text-[#1b1b18] mb-2">Interested in this experience?</h3>
                    <p class="text-sm text-[#50504d] mb-4">Contact us for pricing, availability, and to customize your experience.</p>
                    <a 
                        href="/contact" 
                        class="inline-flex items-center gap-2 rounded-full bg-[#1b1b18] px-6 py-3 text-sm font-semibold uppercase tracking-[0.2em] text-white hover:bg-[#3c4c62] transition-colors"
                    >
                        Inquire Now
                        <span aria-hidden="true" class="text-base">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-5xl px-6">
            <div class="lg:grid lg:grid-cols-3 lg:gap-16">
                <!-- Main Content Column -->
                <div class="lg:col-span-2">
                    @if($experience->body)
                        <div class="prose prose-lg max-w-none mb-12">
                            <h3 class="text-2xl font-semibold text-[#1b1b18] mb-6">Experience</h3>
                            <div class="text-base leading-relaxed text-[#50504d] space-y-4">
                                {!! nl2br(e($experience->body)) !!}
                            </div>
                        </div>
                    @endif

                    <!-- Traveler Q&A -->
                    @if($experience->traveler_qa && count($experience->traveler_qa) > 0)
                        <div class="bg-white rounded-2xl border border-[#ecebe5] p-8 mb-12">
                            <h3 class="text-xl font-semibold text-[#1b1b18] mb-6">Traveler Q&A</h3>
                            <div class="space-y-6">
                                @foreach($experience->traveler_qa as $qa)
                                    @if(is_array($qa) && isset($qa['question']) && isset($qa['answer']))
                                        <div>
                                            <h4 class="font-medium text-[#1b1b18] mb-2">{{ $qa['question'] }}</h4>
                                            <p class="text-sm text-[#50504d] leading-relaxed">{{ $qa['answer'] }}</p>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($experience->good_to_know)
                        <div class="bg-[#f8f7f4] rounded-2xl p-8 mb-12">
                            <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">Good to Know</h3>
                            <p class="text-sm leading-relaxed text-[#50504d]">{{ $experience->good_to_know }}</p>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- What's Included -->
                    @if($experience->inclusions && count($experience->inclusions) > 0)
                        <div class="bg-white rounded-2xl border border-[#ecebe5] p-6 mb-8">
                            <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">What's Included</h3>
                            <ul class="space-y-3">
                                @foreach($experience->inclusions as $inclusion)
                                    <li class="flex items-start gap-3">
                                        <svg class="w-4 h-4 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-sm text-[#50504d]">{{ is_string($inclusion) ? $inclusion : (is_array($inclusion) && isset($inclusion['item']) ? $inclusion['item'] : '') }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Exclusions -->
                    @if($experience->exclusions && count($experience->exclusions) > 0)
                        <div class="bg-white rounded-2xl border border-[#ecebe5] p-6 mb-8">
                            <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Not Included</h3>
                            <ul class="space-y-3">
                                @foreach($experience->exclusions as $exclusion)
                                    <li class="flex items-start gap-3">
                                        <svg class="w-4 h-4 text-red-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                        <span class="text-sm text-[#50504d]">{{ is_string($exclusion) ? $exclusion : (is_array($exclusion) && isset($exclusion['item']) ? $exclusion['item'] : '') }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Practical Information -->
                    <div class="bg-white rounded-2xl border border-[#ecebe5] p-6 mb-8">
                        <h3 class="text-lg font-semibold text-[#1b1b18] mb-4">Practical Information</h3>
                        <div class="space-y-4 text-sm">
                            @if($experience->what_to_wear)
                                <div>
                                    <span class="font-medium text-[#1b1b18]">What to Wear:</span>
                                    <p class="text-[#50504d] mt-1">{{ $experience->what_to_wear }}</p>
                                </div>
                            @endif
                            @if($experience->accessibility_info)
                                <div>
                                    <span class="font-medium text-[#1b1b18]">Accessibility:</span>
                                    <p class="text-[#50504d] mt-1">{{ $experience->accessibility_info }}</p>
                                </div>
                            @endif
                            @if($experience->booking_policy)
                                <div>
                                    <span class="font-medium text-[#1b1b18]">Booking Policy:</span>
                                    <p class="text-[#50504d] mt-1">{{ $experience->booking_policy }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Inquiry Card -->
                    <div class="bg-gradient-to-br from-[#1b1b18] to-[#3c4c62] rounded-2xl p-6 text-white">
                        <div class="text-center mb-4">
                            <h4 class="text-lg font-semibold mb-2">Ready to Experience?</h4>
                            <p class="text-sm opacity-90">Contact us for pricing, availability, and to customize your experience.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="w-full inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-[#1b1b18] transition hover:bg-gray-100">
                            Get Pricing & Availability
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection