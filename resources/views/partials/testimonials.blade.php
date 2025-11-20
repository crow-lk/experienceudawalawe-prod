<?php
$reviewsFile = storage_path('app/tripadvisor_reviews.json');
$reviews = [];
if (file_exists($reviewsFile)) {
    $reviews = json_decode(file_get_contents($reviewsFile), true) ?: [];
}
// Fallback sample if file is empty
if (empty($reviews)) {
    $reviews = [
        [
            'author' => 'Asha P.',
            'rating' => 5,
            'title' => 'A wonderful dining experience',
            'text' => 'Beautiful setting and authentic food — highly recommended for anyone visiting Udawalawe. Warm hosts and excellent flavours.',
            'date' => 'Nov 2025',
            'url' => ''
        ],
        [
            'author' => 'Liam T.',
            'rating' => 5,
            'title' => 'Memorable evening',
            'text' => 'We loved the heritage dishes and the storytelling. A true highlight of our trip.',
            'date' => 'Oct 2025',
            'url' => ''
        ],
        [
            'author' => 'S. Wong',
            'rating' => 4,
            'title' => 'Authentic and cosy',
            'text' => 'Delicious local food and friendly staff. Portion sizes were generous. A lovely stop after a day in the parks.',
            'date' => 'Sep 2025',
            'url' => ''
        ],
    ];
}
?>

<section class="testimonials py-12 lg:py-16">
    <div class="mx-auto px-6">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-semibold text-[#1b1b18]">What Guests Say</h2>
            <p class="text-sm text-[#6B7280]">Selected reviews from TripAdvisor</p>
        </div>

        <div class="quotes">
            @foreach($reviews as $i => $review)
                @php $idx = $i + 1; @endphp
                <input type="radio" id="option-{{ $idx }}" name="panel" class="sr-only" {{ $idx === 1 ? 'checked' : '' }} />
                <article>
                    <blockquote>
                        <p>
                            {{ $review['text'] ?? '' }}
                        </p>
                    </blockquote>
                    <div class="user">
                        <div>
                            <p>{{ $review['author'] ?? 'Guest' }}</p>
                            <p class="text-xs text-[#6B7280]">{{ $review['title'] ?? '' }}</p>
                        </div>
                        <img src="{{ $review['avatar'] ?? 'https://i.pravatar.cc/150?img=' . (($idx % 70) + 1) }}" alt="{{ $review['author'] ?? 'Guest' }}">
                    </div>
                </article>
            @endforeach
        </div>

        <div class="dots" role="tablist" aria-label="testimonial navigation">
            @foreach($reviews as $i => $review)
                @php $idx = $i + 1; @endphp
                <label for="option-{{ $idx }}" aria-label="toggle panel {{ $idx }}"></label>
            @endforeach
        </div>

        <div class="text-center mt-6">
            <a href="https://www.tripadvisor.com/Restaurant_Review-g3577009-d27164351-Reviews-Ceylon_1850_Authentic_Restaurant-Udawalawa_Sabaragamuwa_Province.html" target="_blank" class="text-sm font-semibold text-[#1b1b18]">See more reviews on TripAdvisor →</a>
        </div>

        <style>
    /* Scoped testimonial styles (adapted from provided codepen) */
    /* Removed use of #f5f5f5 per request; using white instead */
    .testimonials{ --clr-primary: #ffffff; --clr-secondary: #c86542; width: min(calc(100% - 2rem), 920px); margin-inline: auto; background-color: transparent; padding: 2.5rem; border-radius: .5rem; }
        .testimonials .quotes{ display:grid; place-content:center; grid-template-areas:'stack'; }
        .testimonials .quotes > article{ grid-area:stack; transition:all .3s; margin-block-end:1rem; }
        .testimonials .clip{ height:100%; width:80px; float:left; display:block; }
    /* Make blockquote span fuller width and use rounded corners */
    .testimonials blockquote{ transition:transform .3s; transform: scale(var(--_scale,0)); display:flex; }
    .testimonials blockquote::before{ content:''; position:absolute;  left:1rem; z-index:1; width:40px; height:40px; background-image: url('data:image/svg+xml,<svg fill="white" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M9.563 8.469l-0.813-1.25c-5.625 3.781-8.75 8.375-8.75 12.156 0 3.656 2.688 5.375 4.969 5.375 2.875 0 4.906-2.438 4.906-5 0-2.156-1.375-4-3.219-4.688-0.531-0.188-1.031-0.344-1.031-1.25 0-1.156 0.844-2.875 3.938-5.344zM21.969 8.469l-0.813-1.25c-5.563 3.781-8.75 8.375-8.75 12.156 0 3.656 2.75 5.375 5.031 5.375 2.906 0 4.969-2.438 4.969-5 0-2.156-1.406-4-3.313-4.688-0.531-0.188-1-0.344-1-1.25 0-1.156 0.875-2.875 3.875-5.344z"/></svg>'); background-repeat:no-repeat; opacity:var(--_opacity,0); transform:scale(var(--_scale,0)); }
    .testimonials blockquote > p{ position:relative;  text-align: center; display:flex;justify-content: center; align-items: center; font-weight:500; font-size:16px; line-height:1.6; padding:3rem; background:var(--clr-secondary); color:var(--clr-primary); border-radius:14px; margin:0; width:100%; box-sizing:border-box; }
    .testimonials blockquote::after{ content:''; position:absolute;  right:1rem; z-index:1; bottom:0rem;  width:40px; height:40px; background-image: url('data:image/svg+xml,<svg fill="white" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M9.563 8.469l-0.813-1.25c-5.625 3.781-8.75 8.375-8.75 12.156 0 3.656 2.688 5.375 4.969 5.375 2.875 0 4.906-2.438 4.906-5 0-2.156-1.375-4-3.219-4.688-0.531-0.188-1.031-0.344-1.031-1.25 0-1.156 0.844-2.875 3.938-5.344zM21.969 8.469l-0.813-1.25c-5.563 3.781-8.75 8.375-8.75 12.156 0 3.656 2.75 5.375 5.031 5.375 2.906 0 4.969-2.438 4.969-5 0-2.156-1.406-4-3.313-4.688-0.531-0.188-1-0.344-1-1.25 0-1.156 0.875-2.875 3.875-5.344z"/></svg>'); background-repeat:no-repeat; opacity:var(--_opacity,0); transform:scale(var(--_scale,0))rotate(180deg); }
        .testimonials .user{ display:flex; gap:1rem; justify-content:end; text-align:right;}
        .testimonials .user *{ opacity:var(--_opacity,0); transition:transform .3s, opacity .3s; transform:translateY(1rem); }
        .testimonials .user p:first-child{ font-size:1.05rem; color:var(--clr-secondary); text-transform:uppercase; letter-spacing:0.1rem; }
        .testimonials .user p:last-child{ font-weight:300; font-size:.8rem; color:var(--clr-secondary); }
        .testimonials .user img{ border-radius:4px; border:1px solid var(--clr-primary); width:56px; height:56px;margin-top: 20px; object-fit:cover; transform:scale(var(--_scale,0)); }
        input[type=radio]:checked + article{ --_scale:1; --_opacity:1; }
        .testimonials .dots{ padding:.25rem .5rem; width:fit-content; margin-inline:auto; display:flex; gap:.5rem; justify-content:center; }
        .testimonials .dots > label{ border-radius:1rem; border:1px solid var(--clr-secondary); width:1.2rem; height:1.2rem; aspect-ratio:1; cursor:pointer; position:relative; }
        .testimonials .dots > label::before{ content:''; position:absolute; border-radius:inherit; inset:.0rem; background-color:var(--clr-secondary); transform:scale(0.0001); transition:transform .28s ease-in-out; }
        @php
            for ($j = 1; $j <= count($reviews); $j++) {
                echo ".testimonials .quotes:has(input#option-{$j}:checked) + .dots > label:nth-child({$j})::before{ transform:scale(1); }\n";
            }
        @endphp
        </style>

    </div>
</section>
