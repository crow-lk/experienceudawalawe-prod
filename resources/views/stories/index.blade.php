@extends('layouts.app')

@section('title', 'Stories | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => 'Stories', 'subtitle' => 'Guest reflections & community stories'])
    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20 space-y-16">
            <section class="space-y-6 text-center lg:text-left">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Stories from Udawalawe</p>
                <h2 class="text-3xl font-semibold text-[#1b1b18]">Journeys fade, stories remain</h2>
                <p class="mx-auto max-w-3xl text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Our storytelling journal captures voices from the kitchen, the lake, and the village verandah. Dive into recipes,
                    conservation notes, women-led enterprises, and reflections from guests who have become part of our family.
                </p>
            </section>

            <section class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Categories</h3>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @php
                        $categories = [
                            [
                                'title' => 'Cooking & Food',
                                'summary' => 'Heirloom recipes, spice stories, and seasonal menus from our kitchens.',
                                'link' => '#cooking',
                            ],
                            [
                                'title' => 'Women & Youth Enterprises',
                                'summary' => 'Profiles of entrepreneurs shaping local economies with creativity and resilience.',
                                'link' => '#enterprises',
                            ],
                            [
                                'title' => 'Wildlife & Conservation',
                                'summary' => 'Field notes from rangers, naturalists, and citizen scientists protecting Udawalawe.',
                                'link' => '#wildlife',
                            ],
                            [
                                'title' => 'Zero-Waste Practices',
                                'summary' => 'Circular design, low-impact travel tips, and behind-the-scenes innovations.',
                                'link' => '#zerowaste',
                            ],
                            [
                                'title' => 'Guest Reflections',
                                'summary' => 'Letters, sketches, and audio diaries that capture transformational stays.',
                                'link' => '#reflections',
                            ],
                        ];
                    @endphp
                    @foreach($categories as $category)
                        <article id="{{ ltrim($category['link'], '#') }}" class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                            <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Category</p>
                            <h4 class="mt-3 text-lg font-semibold text-[#1b1b18]">{{ $category['title'] }}</h4>
                            <p class="mt-3 text-sm text-[#50504d]">{{ $category['summary'] }}</p>
                            <a href="#" class="mt-4 inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Read stories</a>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="space-y-8">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Featured snippets</h3>
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-6 shadow-sm space-y-3">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Wildlife &amp; Conservation</p>
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Tracing elephant corridors with village guardians</h4>
                        <p class="text-sm text-[#50504d]">A dawn walk with ranger families documenting the return of migratory herds.</p>
                        <a href="#" class="inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Continue reading</a>
                    </article>
                    <article class="rounded-2xl border border-[#ecebe5] bg-[#f6f3ec] p-6 shadow-sm space-y-3">
                        <p class="text-xs uppercase tracking-[0.3em] text-[#9c9b96]">Guest Reflections</p>
                        <h4 class="text-lg font-semibold text-[#1b1b18]">Letters from the hearth</h4>
                        <p class="text-sm text-[#50504d]">A family shares how an evening of drum rhythms reshaped their connection to Sri Lanka.</p>
                        <a href="#" class="inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Continue reading</a>
                    </article>
                </div>
            </section>

            <section class="rounded-3xl border border-[#ecebe5] bg-white p-10 shadow-sm space-y-4 text-center">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Contribute your story</h3>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    We welcome voices from the field—whether you are a guest, guide, artist, or researcher. Share your memories,
                    photos, or audio notes and help us chronicle the living archive of Udawalawe.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-8 py-3 text-xs font-semibold uppercase tracking-[0.3em] text-[#50504d] hover:border-[#f53003] hover:text-[#f53003] transition">
                    Submit a story
                </a>
            </section>
        </div>
    </main>
@endsection
