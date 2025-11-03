@php
    $tone = $tone ?? 'light';
    $align = $align ?? 'left';
    $align = in_array($align, ['left', 'center', 'right'], true) ? $align : 'left';
    $lineClass = $tone === 'dark' ? 'bg-white/60' : 'bg-[#c7c3b7]';
    $imageOpacity = $tone === 'dark' ? 'opacity-90' : 'opacity-80';
    $showIcon = $showIcon ?? false;
    $containerClasses = trim("heading-divider heading-divider--{$align} " . ($showIcon ? 'flex items-center gap-3' : ''));
@endphp
<div class="{{ $containerClasses }}" aria-hidden="true">
    @if($showIcon)
        <div class="h-px flex-1 {{ $lineClass }}"></div>
        <img
            src="{{ asset('images/elements/rorate-flower.png') }}"
            alt=""
            class="h-10 w-10 animate-spin-slower object-contain {{ $imageOpacity }}"
            loading="lazy"
        >
        <div class="h-px flex-1 {{ $lineClass }}"></div>
    @else
        <div class="h-px w-full {{ $lineClass }}"></div>
    @endif
</div>
