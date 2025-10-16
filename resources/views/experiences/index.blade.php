@extends('layouts.app')

@section('title', 'Experiences - Experience Udawalawe')

@section('body')
<div class="flex min-h-screen w-full flex-col bg-[#FDFDFC] text-[#1b1b18]">
    @include('partials.header-standard')

    @include('partials.page-hero', [
        'title' => 'Experiences',
        'subtitle' => 'Authentic journeys that connect culture, community, and nature'
    ])

    <section class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-6xl px-6">
            <div class="space-y-4 text-center mb-12">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Our Collection</p>
                <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Authentic Experiences in Udawalawe</h2>
                <p class="text-base leading-relaxed text-[#50504d] sm:text-lg max-w-4xl mx-auto">
                    Discover experiences that bring you closer to the spirit of Udawalawe. Cook with locals in open-air kitchens, 
                    learn the old ways of grinding spices, and wander through gardens filled with fresh herbs.
                </p>
            </div>

            @if($experiences->count() > 0)
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 mb-12">
                    @foreach($experiences as $experience)
                        <x-experience.card :experience="$experience" />
                    @endforeach
                </div>

                @if($experiences->hasPages())
                    <div class="flex justify-center">
                        {{ $experiences->links() }}
                    </div>
                @endif
            @else
                <div class="text-center py-16">
                    <h3 class="text-xl font-semibold text-[#1b1b18] mb-4">No experiences available</h3>
                    <p class="text-sm text-[#706f6c]">Check back soon for exciting new experiences!</p>
                </div>
            @endif
        </div>
    </section>

    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-4xl px-6 text-center">
            <div class="space-y-6">
                <h2 class="text-3xl font-semibold tracking-tight text-[#1b1b18]">Ready for Your Journey?</h2>
                <p class="text-base leading-relaxed text-[#50504d] sm:text-lg">
                    Connect with us to plan your authentic Udawalawe experience. Every journey is crafted with care 
                    to create lasting memories and meaningful connections.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full border border-[#1b1b18] px-8 py-4 text-sm font-semibold uppercase tracking-[0.2em] text-[#1b1b18] transition hover:bg-[#1b1b18] hover:text-white">
                    Plan Your Experience
                    <span aria-hidden="true" class="text-lg">→</span>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection