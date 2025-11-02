@php
    $tone = $tone ?? 'light';
    $align = $align ?? 'left';
    $align = in_array($align, ['left', 'center', 'right'], true) ? $align : 'left';
    $lineClass = $tone === 'dark' ? 'bg-white/60' : 'bg-[#c7c3b7]';
    $imageOpacity = $tone === 'dark' ? 'opacity-90' : 'opacity-80';
@endphp
<div class="heading-divider heading-divider--{{ $align }} flex items-center gap-3" aria-hidden="true">
    <div class="h-px flex-1 {{ $lineClass }}"></div>
    <img
        src="{{ asset('images/elements/rorate-flower.png') }}"
        alt=""
        class="h-10 w-10 animate-spin-slower object-contain {{ $imageOpacity }}"
        loading="lazy"
    >
    <div class="h-px flex-1 {{ $lineClass }}"></div>
</div>
