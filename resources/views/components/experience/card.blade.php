@props(['experience'])

<article class="group rounded-2xl border border-[#ecebe5] bg-white shadow-sm overflow-hidden hover:shadow-md transition-shadow">
    @if($experience->hero_image_path)
        <div class="aspect-[4/3] overflow-hidden">
            <img 
                src="{{ asset('storage/' . $experience->hero_image_path) }}" 
                alt="{{ $experience->title }}" 
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                loading="lazy"
            >
        </div>
    @endif
    
    <div class="p-6 space-y-4">
        <h3 class="text-xl font-semibold text-[#1b1b18] group-hover:text-[#3c4c62] transition-colors">
            {{ $experience->title }}
        </h3>
        
        @if($experience->duration_label)
            <p class="text-xs uppercase tracking-[0.2em] text-[#b3b1ac]">
                {{ $experience->duration_label }}
            </p>
        @endif
        
        @if($experience->short_summary)
            <p class="text-sm leading-relaxed text-[#706f6c] line-clamp-3">
                {{ $experience->short_summary }}
            </p>
        @endif
        
        @if($experience->base_price)
            <p class="text-lg font-semibold text-[#1b1b18]">
                From ${{ number_format($experience->base_price, 2) }}
            </p>
        @endif
        
        <a 
            href="{{ route('experiences.show', $experience->slug) }}" 
            class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.2em] text-[#3c4c62] hover:text-[#1b1b18] transition-colors"
        >
            View Details
            <span aria-hidden="true" class="text-lg">→</span>
        </a>
    </div>
</article>