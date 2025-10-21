@extends('layouts.app')

@section('title', 'FAQ | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => 'FAQ', 'subtitle' => 'Practical booking questions'])
    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-5xl px-6 py-16 lg:py-20 space-y-12">
            <section class="space-y-4 text-center lg:text-left">
                <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Frequently Asked Questions</p>
                <h2 class="text-3xl font-semibold text-[#1b1b18]">Clarity for every stage of your journey</h2>
                <p class="mx-auto max-w-3xl text-sm text-[#50504d] sm:text-base leading-relaxed">
                    From bookings to on-site logistics, here are the details guests ask most. Reach out anytime if you need
                    additional guidance—we are happy to tailor experiences to your group.
                </p>
            </section>

            <section class="space-y-8">
                @php
                    $faqGroups = [
                        'Booking Process' => [
                            ['How do I reserve an experience?', 'Complete our contact form with your preferred dates and themes. Our reservations team responds within 24 hours with availability and a tailored proposal.'],
                            ['How far in advance should I book?', 'We recommend 2-4 weeks’ notice for bespoke itineraries, and a minimum of 72 hours for single experiences.'],
                            ['Can I hold dates?', 'Yes. We can hold slots for 5 days with a refundable deposit while you confirm travel plans.'],
                        ],
                        'Pricing & Inclusions' => [
                            ['What does the experience fee include?', 'Guiding, materials, meals specified in the itinerary, and community contributions are all included unless otherwise stated.'],
                            ['Are there group rates?', 'Private groups of 8+ guests receive customized pricing. Please share your group profile for a detailed quote.'],
                        ],
                        'Experience Details' => [
                            ['Where do experiences start?', 'Meeting points are at our campus welcome pavilion unless a different location is indicated on your confirmation. Transfers can be arranged on request.'],
                            ['Is the cooking class suitable for children?', 'Yes, children aged 6+ can participate with a guardian. We also offer sensory stations for younger guests.'],
                            ['What accessibility support is available?', 'Please let us know mobility or dietary considerations. We provide ramp access, seating options, and alternative activities where possible.'],
                        ],
                        'Sustainability Commitment' => [
                            ['How is my visit contributing to conservation?', 'A portion of every booking funds wildlife corridor mapping, community ranger programs, and tree planting around the sanctuary.'],
                            ['Can I volunteer during my stay?', 'We curate short volunteer immersions focused on citizen science and community projects. Indicate your interest when booking.'],
                        ],
                        'Cancellations' => [
                            ['What is the cancellation policy?', 'Cancel 7 days in advance for a full refund. Between 7 and 3 days we credit your booking for a future stay. Within 48 hours, charges apply to cover community commitments.'],
                            ['What happens if weather disrupts an experience?', 'We monitor conditions closely and reschedule or adapt activities while keeping you informed.'],
                        ],
                        'Village Authenticity & Booking Information' => [
                            ['Is the village experience authentic?', 'Absolutely. Experiences are hosted by residents in their homes, farms, and community spaces. We do not stage or replicate cultural practices.'],
                            ['How do I get pricing information?', 'We provide personalized quotes based on your group size, preferred dates, and selected experiences. Contact us for detailed pricing and availability.'],
                        ],
                    ];
                @endphp

                @foreach($faqGroups as $title => $questions)
                    <article class="rounded-2xl border border-[#ecebe5] bg-white p-6 shadow-sm space-y-4">
                        <h3 class="text-lg font-semibold text-[#1b1b18] uppercase tracking-[0.2em]">{{ $title }}</h3>
                        <div class="space-y-3">
                            @foreach($questions as [$question, $answer])
                                <details class="group rounded-md border border-[#ecebe5] bg-[#f6f3ec] p-4">
                                    <summary class="flex cursor-pointer items-center justify-between text-sm font-semibold text-[#1b1b18] transition group-open:text-[#f53003]">
                                        {{ $question }}
                                        <span class="ml-3 text-xs uppercase tracking-[0.3em] text-[#9c9b96] group-open:text-[#f53003]">View</span>
                                    </summary>
                                    <p class="mt-3 text-sm text-[#50504d] leading-relaxed">{{ $answer }}</p>
                                </details>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </section>

            <section class="rounded-3xl border border-[#ecebe5] bg-white p-8 shadow-sm text-center space-y-4">
                <h3 class="text-2xl font-semibold text-[#1b1b18]">Need more details?</h3>
                <p class="text-sm text-[#50504d] sm:text-base leading-relaxed">
                    Write to us with your questions—we are here to help you craft a meaningful stay.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-8 py-3 text-xs font-semibold uppercase tracking-[0.3em] text-[#50504d] hover:border-[#f53003] hover:text-[#f53003] transition">
                    Reach our hosts
                </a>
            </section>
        </div>
    </main>
@endsection
