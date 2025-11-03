<section class="relative w-full bg-[url('/images/hero-fallback.jpg')] bg-cover bg-center h-[40vh] md:h-[50vh] flex items-center" data-hero>
  <div class="absolute inset-0 bg-black/40"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-6 lg:px-12 text-center text-white">
    <h1 class="text-3xl md:text-5xl font-semibold">{{ $title ?? 'Page Title' }}</h1>
    @include('partials.heading-divider', ['tone' => 'dark', 'align' => 'center', 'showIcon' => true])
    @if(!empty($subtitle))
      <p class="mt-3 text-lg md:text-xl">{{ $subtitle }}</p>
    @endif
  </div>
</section>
