@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto py-20 relative">

        {{-- Tombol kembali --}}
        <a href="{{ route('portfolio.index') }}"
            class="absolute top-0 left-0 mt-4 ml-4 flex items-center px-4 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 transition">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back
        </a>

        <h2 class="text-3xl font-bold text-green-600 mb-6">{{ $portfolio->title }}</h2>

        <p class="text-gray-700 mb-4">{{ $portfolio->description }}</p>

        @if ($portfolio->tech_stack)
            <p class="text-green-600 font-semibold mb-4">Tech: {{ $portfolio->tech_stack }}</p>
        @endif

        {{-- Thumbnail utama --}}
        @if ($portfolio->image)
            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                class="w-full h-72 object-cover rounded-lg shadow-md mb-6">
        @endif

        {{-- Gallery --}}
        @if ($portfolio->photos && $portfolio->photos->count())
            <h3 class="text-2xl font-bold mt-10 mb-4">Project Gallery</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($portfolio->photos as $photo)
                    <img src="{{ asset('storage/' . $photo->image) }}" alt="Photo"
                        class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition">
                @endforeach
            </div>
        @endif

        {{-- Link project --}}
        @if ($portfolio->link)
            <a href="{{ $portfolio->link }}" target="_blank"
                class="mt-8 inline-block px-6 py-3 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">
                Visit Project
            </a>
        @endif
    </div>
@endsection
