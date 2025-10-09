@extends('layouts.app')

@section('title', 'Gallery | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => 'Gallery', 'subtitle' => 'Photos & reels'])
    <main class="max-w-6xl mx-auto p-6 lg:p-12 -mt-8">
        <h2 class="text-2xl font-semibold mb-4">Gallery</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <img src="{{ asset('images/logosample.png') }}" alt="sample" class="w-full h-40 object-cover rounded">
            <img src="{{ asset('images/logosample.png') }}" alt="sample" class="w-full h-40 object-cover rounded">
            <img src="{{ asset('images/logosample.png') }}" alt="sample" class="w-full h-40 object-cover rounded">
            <img src="{{ asset('images/logosample.png') }}" alt="sample" class="w-full h-40 object-cover rounded">
        </div>
    </main>
@endsection
