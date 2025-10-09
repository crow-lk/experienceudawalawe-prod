@extends('layouts.app')

@section('title', 'Community & Sustainability | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => 'Community & Sustainability', 'subtitle' => 'Our commitment & impact'])
    <main class="max-w-4xl mx-auto p-6 lg:p-12 -mt-8">
        <h2 class="text-2xl font-semibold mb-4">Community & Sustainability</h2>
        <p class="mb-4 text-gray-700">Our Commitment and pillars.</p>
        <ul class="grid md:grid-cols-2 gap-4">
            <li class="bg-white p-4 rounded shadow">Community First</li>
            <li class="bg-white p-4 rounded shadow">Protecting Wildlife</li>
            <li class="bg-white p-4 rounded shadow">Reducing Waste</li>
            <li class="bg-white p-4 rounded shadow">Keeping Traditions Alive</li>
        </ul>
    </main>
@endsection
