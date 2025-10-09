@extends('layouts.app')

@section('title', 'Dining | ' . config('app.name', 'Experience Udawalawa'))

@section('body')
    @include('partials.header-standard')
    @include('partials.page-hero', ['title' => 'Ceylon 1850', 'subtitle' => 'History, design and dining experience'])
    <main class="max-w-4xl mx-auto p-6 lg:p-12 -mt-8">
        <h2 class="text-2xl font-semibold mb-4">Ceylon 1850</h2>
        <p class="mb-4 text-gray-700">History, design and dining experience description.</p>
        <section class="mt-6 bg-white p-4 rounded shadow">
            <h3 class="font-medium">Farm-to-Table</h3>
            <p class="text-sm text-gray-600">We source locally and sustainably.</p>
        </section>
    </main>
@endsection
