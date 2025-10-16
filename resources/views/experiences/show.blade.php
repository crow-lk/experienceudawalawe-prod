@extends('layouts.app')

@section('title', ($experience->meta_title ?? $experience->title) . ' - Experience Udawalawe')

@section('meta-description', $experience->meta_description ?? $experience->short_summary)

@section('body')
<div class="flex min-h-screen w-full flex-col bg-[#FDFDFC] text-[#1b1b18]">
    @include('partials.header-standard')

    <section class="bg-[#FDFDFC] py-16 lg:py-20">
        <div class="mx-auto max-w-4xl px-6">
            <h1 class="text-4xl font-bold text-[#1b1b18] mb-6">{{ $experience->title }}</h1>
            
            @if($experience->short_summary)
                <p class="text-lg text-[#50504d] mb-8">{{ $experience->short_summary }}</p>
            @endif

            @if($experience->body)
                <div class="prose prose-lg max-w-none mb-12">
                    <div class="text-base leading-relaxed text-[#50504d]">
                        {!! nl2br(e($experience->body)) !!}
                    </div>
                </div>
            @endif

            @if($experience->inclusions && count($experience->inclusions) > 0)
                <div class="bg-white rounded-2xl border border-[#ecebe5] p-8 mb-12">
                    <h3 class="text-xl font-semibold text-[#1b1b18] mb-6">What's Included</h3>
                    <ul class="grid gap-3 md:grid-cols-2">
                        @foreach($experience->inclusions as $inclusion)
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-sm text-[#50504d]">{{ is_string($inclusion) ? $inclusion : (is_array($inclusion) && isset($inclusion['item']) ? $inclusion['item'] : '') }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-[#1b1b18] px-8 py-4 text-sm font-semibold uppercase tracking-[0.2em] text-white transition hover:bg-[#3c4c62]">
                    Book This Experience
                </a>
            </div>
        </div>
    </section>
</div>
@endsection