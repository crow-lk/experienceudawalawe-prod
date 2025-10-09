@extends('layouts.app')

@section('title', 'Reduction of Single-Use Plastics | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', [
        'title' => 'Reduction of Single-Use Plastics',
        'subtitle' => 'Reusable systems for a waste-free sanctuary'
    ])

    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-12">
            <section class="space-y-4">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Why it matters</p>
                <h2 class="text-2xl font-semibold text-[#1b1b18]">Designing experiences that leave no trace</h2>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Our zero-plastic journey began with listening to rangers and river guardians who witnessed the impact of
                    disposable waste on wildlife corridors. Today, refillable systems, reusable service ware, and supplier
                    partnerships ensure that every experience at Experience Udawalawe is circular.
                </p>
            </section>

            <section class="grid gap-6 md:grid-cols-2">
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Core actions</h3>
                    <ul class="mt-4 space-y-3 text-sm text-[#50504d]">
                        <li>Guest welcome kits with refillable copper bottles and cloth carry bags.</li>
                        <li>Bulk amenity dispensers in suites, replacing sachets and miniatures.</li>
                        <li>Reusable tiffin boxes and banana-leaf wraps for picnics and excursions.</li>
                        <li>Supplier agreements that eliminate plastic packaging at point of delivery.</li>
                    </ul>
                </article>
                <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-[#1b1b18]">Progress to date</h3>
                    <ul class="mt-4 space-y-3 text-sm text-[#50504d]">
                        <li>1,200+ plastic bottles avoided in 2024 through refill stations.</li>
                        <li>On-site compostable packaging produced from rice husk and palmyrah fibre.</li>
                        <li>Monthly audits with village waste champions to monitor leakage points.</li>
                        <li>Guest pledge wall featuring commitments to reduce plastics back home.</li>
                    </ul>
                </article>
            </section>

            <section class="rounded-3xl border border-[#ecebe5] bg-white p-8 shadow-sm space-y-6">
                <h3 class="text-lg font-semibold text-[#1b1b18]">Be part of the solution</h3>
                <p class="text-sm text-[#50504d]">
                    Carry your refill bottle, opt out of housekeeping plastics, and join our weekly zero-waste workshops led by
                    youth ambassadors. We share templates, vendor lists, and toolkits for guests who wish to replicate these
                    systems in their own communities.
                </p>
                <div class="flex flex-col gap-3 text-sm text-[#50504d] lg:flex-row lg:items-center lg:justify-between">
                    <a href="{{ route('sustainability') }}#across" class="inline-flex items-center text-sm font-semibold text-[#f53003] hover:text-[#c62502] transition">Back to sustainability overview</a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-6 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-[#50504d] hover:border-[#f53003] hover:text-[#f53003] transition">Partner with us</a>
                </div>
            </section>
        </div>
    </main>
@endsection
