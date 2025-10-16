@extends('layouts.app')

@section('title', 'Contact & Book | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => 'Let’s Stay Connected', 'subtitle' => 'Share your travel dreams, questions, or collaboration ideas'])
    <main class="relative -mt-8 bg-[#FDFDFC]">
        <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20 space-y-12">
            <section class="grid gap-10 lg:grid-cols-[1.2fr_1fr]">
                <form class="space-y-6 rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                    <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Contact Form</p>
                    
                    @if($selectedExperience)
                        <div class="rounded-lg border border-[#f53003]/20 bg-[#f53003]/5 p-4">
                            <div class="flex items-start gap-3">
                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-[#f53003] text-white">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-semibold text-[#1b1b18]">Experience Selected: {{ $selectedExperience->title }}</p>
                                    <p class="text-xs text-[#50504d] mt-1">{{ $selectedExperience->short_summary }}</p>
                                    @if(!empty($formData['preferred_date']))
                                        <p class="text-xs text-[#50504d] mt-2"><strong>Preferred Date:</strong> {{ $formData['preferred_date'] }}</p>
                                    @endif
                                    @if(!empty($formData['adults']) || !empty($formData['children']))
                                        <p class="text-xs text-[#50504d]">
                                            <strong>Guests:</strong> 
                                            {{ $formData['adults'] ?? 2 }} adults
                                            @if(!empty($formData['children'])) + {{ $formData['children'] }} children @endif
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="grid gap-4 md:grid-cols-2">
                        <label class="space-y-2 text-sm text-[#1b1b18]">
                            <span>Name</span>
                            <input type="text" name="name" class="w-full rounded border border-[#d7d5cf] bg-[#FDFDFC] px-3 py-2 text-sm text-[#50504d] focus:border-[#f53003] focus:outline-none focus:ring-1 focus:ring-[#f53003]" placeholder="Your full name">
                        </label>
                        <label class="space-y-2 text-sm text-[#1b1b18]">
                            <span>Email</span>
                            <input type="email" name="email" class="w-full rounded border border-[#d7d5cf] bg-[#FDFDFC] px-3 py-2 text-sm text-[#50504d] focus:border-[#f53003] focus:outline-none focus:ring-1 focus:ring-[#f53003]" placeholder="you@example.com">
                        </label>
                        <label class="space-y-2 text-sm text-[#1b1b18]">
                            <span>Phone</span>
                            <input type="tel" name="phone" class="w-full rounded border border-[#d7d5cf] bg-[#FDFDFC] px-3 py-2 text-sm text-[#50504d] focus:border-[#f53003] focus:outline-none focus:ring-1 focus:ring-[#f53003]" placeholder="+94 00 000 0000">
                        </label>
                        <label class="space-y-2 text-sm text-[#1b1b18]">
                            <span>Country</span>
                            <input type="text" name="country" class="w-full rounded border border-[#d7d5cf] bg-[#FDFDFC] px-3 py-2 text-sm text-[#50504d] focus:border-[#f53003] focus:outline-none focus:ring-1 focus:ring-[#f53003]" placeholder="Where are you based?">
                        </label>
                    </div>
                    <label class="space-y-2 text-sm text-[#1b1b18]">
                        <span>Purpose</span>
                        <select name="purpose" class="w-full rounded border border-[#d7d5cf] bg-[#FDFDFC] px-3 py-2 text-sm text-[#50504d] focus:border-[#f53003] focus:outline-none focus:ring-1 focus:ring-[#f53003]">
                            @if(!$selectedExperience)
                                <option selected disabled>Choose an option</option>
                            @endif
                            <option {{ $selectedExperience ? 'selected' : '' }}>Book an experience</option>
                            <option>Accommodation inquiry</option>
                            <option>Partnership or media</option>
                            <option>Volunteer or research</option>
                            <option>General question</option>
                        </select>
                    </label>
                    <label class="space-y-2 text-sm text-[#1b1b18]">
                        <span>Message</span>
                        <textarea name="message" rows="5" class="w-full rounded border border-[#d7d5cf] bg-[#FDFDFC] px-3 py-2 text-sm text-[#50504d] focus:border-[#f53003] focus:outline-none focus:ring-1 focus:ring-[#f53003]" placeholder="Tell us about your travel hopes, dates, or ideas.">@if($selectedExperience)I'm interested in booking "{{ $selectedExperience->title }}"@if($formData['preferred_date']) for {{ $formData['preferred_date'] }}@endif. @endif</textarea>
                    </label>

                    @if($selectedExperience)
                        <!-- Hidden fields to preserve booking information -->
                        <input type="hidden" name="selected_experience" value="{{ $selectedExperience->slug }}">
                        <input type="hidden" name="experience_title" value="{{ $selectedExperience->title }}">
                        @if($formData['preferred_date'])
                            <input type="hidden" name="preferred_date" value="{{ $formData['preferred_date'] }}">
                        @endif
                        @if($formData['adults'])
                            <input type="hidden" name="adults" value="{{ $formData['adults'] }}">
                        @endif
                        @if($formData['children'])
                            <input type="hidden" name="children" value="{{ $formData['children'] }}">
                        @endif
                        @if($formData['promo'])
                            <input type="hidden" name="promo_code" value="{{ $formData['promo'] }}">
                        @endif
                    @endif
                    <div class="flex flex-col gap-3 text-left text-xs text-[#706f6c]">
                        <label class="inline-flex items-start gap-2">
                            <input type="checkbox" class="mt-[0.2rem] h-3.5 w-3.5 rounded border border-[#d7d5cf] focus:outline-none focus:ring-1 focus:ring-[#f53003]">
                            <span>I agree to the processing of my data according to the Experience Udawalawe privacy policy.</span>
                        </label>
                        <p>We respect GDPR and Sri Lankan privacy regulations. Your details are used solely to coordinate your stay and will not be shared.</p>
                    </div>
                    <button type="submit" class="inline-flex items-center justify-center rounded-full border border-[#ecebe5] bg-[#f6f3ec] px-8 py-3 text-xs font-semibold uppercase tracking-[0.3em] text-[#50504d] hover:border-[#f53003] hover:text-[#f53003] transition">
                        Send message
                    </button>
                </form>

                <aside class="space-y-8 rounded-2xl border border-[#ecebe5] bg-white p-8 shadow-sm">
                    <div class="space-y-3">
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Direct Contact</p>
                        <div class="space-y-2 text-sm text-[#50504d]">
                            <p><span class="font-semibold text-[#1b1b18]">Phone</span><br><a href="tel:+94112233445" class="text-[#f53003] hover:text-[#c62502] transition">+94 11 223 3445</a></p>
                            <p><span class="font-semibold text-[#1b1b18]">Email</span><br><a href="mailto:hello@experienceudawalawa.com" class="text-[#f53003] hover:text-[#c62502] transition">hello@experienceudawalawa.com</a></p>
                            <p><span class="font-semibold text-[#1b1b18]">WhatsApp</span><br><a href="#" class="text-[#f53003] hover:text-[#c62502] transition">Chat with our hosts</a></p>
                        </div>
                    </div>
                    <div class="space-y-3 text-sm text-[#50504d]">
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Visit</p>
                        <address class="not-italic">
                            235 Udawalawe Road<br>
                            Moneragala, Sri Lanka
                        </address>
                    </div>
                    <div class="space-y-3 text-sm text-[#50504d]">
                        <p class="text-xs uppercase tracking-[0.35em] text-[#b3b1ac]">Hosting Hours</p>
                        <p>Our guest relations team is available daily 8:00–20:00 Sri Lanka Time.</p>
                        <p class="text-xs text-[#9c9b96]">We respond to all messages within a day, prioritizing urgent travel changes.</p>
                    </div>
                </aside>
            </section>
        </div>
    </main>
@endsection
