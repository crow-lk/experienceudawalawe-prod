@extends('layouts.app')

@section('title', 'Community Engagement | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', [
        'title' => 'Community Engagement',
        'subtitle' => 'Co-creating experiences with our neighbours'
    ])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-12">
            <section class="space-y-4">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Approach</p>
                <h2 class="text-2xl font-semibold text-[#1b1b18]">Shared governance and participatory design</h2>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Experience Udawalawe is co-stewarded by village councils, youth groups, and women-led cooperatives. We use
                    participatory mapping, storytelling sessions, and profit-sharing agreements to ensure that tourism reinforces,
                    rather than displaces, community aspirations.
                </p>
            </section>

            <section class="grid gap-6 md:grid-cols-2">
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Engagement practices</h3>
                    <ul class="mt-4 space-y-3 text-sm text-[#50504d]">
                        <li>Quarterly community assemblies reviewing guest feedback and revenue allocations.</li>
                        <li>Participatory budgeting for infrastructure upgrades and educational grants.</li>
                        <li>Story circles capturing oral histories that inform new experience concepts.</li>
                        <li>Joint decision-making on visitor group sizes, timing, and code of conduct.</li>
                    </ul>
                </article>
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Community benefits</h3>
                    <ul class="mt-4 space-y-3 text-sm text-[#50504d]">
                        <li>Micro-loans and scholarship funds financed through each guest booking.</li>
                        <li>Cultural preservation grants supporting dance, music, and craft guilds.</li>
                        <li>Wellness clinics and nutrition workshops hosted in partnership with local NGOs.</li>
                        <li>Shared digital storytelling platform amplifying community voices globally.</li>
                    </ul>
                </article>
            </section>

            <section class="rounded-3xl border border-[#ecebe5] bg-white p-8 shadow-sm space-y-6">
                <h3 class="text-lg font-semibold text-[#1b1b18]">Join the dialogue</h3>
                <p class="text-sm text-[#50504d]">
                    Guests are invited to community forums and storytelling evenings. Your reflections help us evolve our
                    programming with respect and reciprocity. Share your ideas or collaborate on social innovation pilots that
                    deepen our community partnerships.
                </p>
                <div class="flex flex-col gap-3 text-sm text-[#50504d] lg:flex-row lg:items-center lg:justify-between">
                    <a href="{{ route('sustainability') }}#community" class="inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Back to sustainability overview</a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-6 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-[#50504d] hover:border-[#f53003] hover:text-[#f53003] transition">Share an idea</a>
                </div>
            </section>
        </div>
    </main>
@endsection
