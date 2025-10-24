@props(['experience'])

@php
use Illuminate\Support\Facades\Storage;
@endphp

<article class="group rounded-2xl border border-[#ecebe5] bg-white shadow-sm overflow-hidden hover:shadow-md transition-shadow">
    @if($experience->hero_image_path)
        <div class="aspect-[4/3] overflow-hidden relative">
            <img 
                src="{{ Storage::disk('public')->url($experience->hero_image_path) }}" 
                alt="{{ $experience->title }}" 
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                loading="lazy"
            >
            @if($experience->type)
                <div class="absolute top-3 left-3">
                    <span class="inline-flex items-center rounded-full bg-white/90 backdrop-blur-sm px-3 py-1 text-xs font-medium text-[#1b1b18]">
                        {{ $experience->type }}
                    </span>
                </div>
            @endif
        </div>
    @endif
    
    <div class="p-6 space-y-4">
        <div class="space-y-2">
            <h3 class="text-xl font-semibold text-[#1b1b18] group-hover:text-[#3c4c62] transition-colors">
                {{ $experience->title }}
            </h3>
            
            @if($experience->subtitle)
                <p class="text-sm font-medium text-[#3c4c62]">{{ $experience->subtitle }}</p>
            @endif
        </div>
        
        <!-- Quick Info -->
        <div class="flex flex-wrap gap-2 text-xs">
            @if($experience->duration_label)
                <span class="inline-flex items-center rounded-full bg-[#f8f7f4] px-2 py-1 text-[#50504d]">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ $experience->duration_label }}
                </span>
            @endif
            
            @if($experience->difficulty_level)
                <span class="inline-flex items-center rounded-full bg-[#f8f7f4] px-2 py-1 text-[#50504d]">
                    {{ $experience->difficulty_level }}
                </span>
            @endif
        </div>
        
        @if($experience->short_summary)
            <p class="text-sm leading-relaxed text-[#706f6c] line-clamp-3">
                {{ $experience->short_summary }}
            </p>
        @endif
        
        <!-- CTA Button -->
        <div class="flex items-center justify-end pt-2">
            <a 
                href="{{ route('experiences.show', $experience->slug) }}" 
                class="inline-flex items-center gap-2 rounded-full border border-[#1b1b18] px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-[#1b1b18] hover:bg-[#1b1b18] hover:text-white transition-colors"
            >
                View Details
                <span aria-hidden="true" class="text-sm">→</span>
            </a>
        </div>
    </div>
</article>