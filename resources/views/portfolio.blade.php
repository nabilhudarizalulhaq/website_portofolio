@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center bg-white text-gray-900">
    <header class="w-full py-6 px-8 bg-white shadow-md fixed top-0 z-50 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-green-600">NH.code</h1>
        <nav>
            <ul class="flex space-x-9">
                <li><a href="/" class="hover:text-green-600">Home</a></li>
                <li><a href="{{ route('skills.index') }}" class="text-green-600 font-semibold">Skills</a></li>
                <li><a href="{{ route('portfolio.index') }}" class="hover:text-green-600">Portfolio</a></li>
                <li><a href="{{ route('contact.index') }}" class="hover:text-green-600">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="w-full max-w-5xl py-32 text-center">
        <h2 class="text-4xl font-bold text-green-600">My Portfolio</h2>
        <p class="text-lg text-gray-600 mt-4">Here are some of my projects showcasing my skills in Flutter, Laravel, and React.js.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
            <!-- Project 1 -->
            <div class="bg-white shadow-md p-6 rounded-lg transition hover:scale-105">
                <h3 class="text-xl font-semibold">Project 1</h3>
                <p class="text-gray-600 mt-2">A web app built with Laravel and React.js.</p>
                <a href="#" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">View Details</a>
            </div>

            <!-- Project 2 -->
            <div class="bg-white shadow-md p-6 rounded-lg transition hover:scale-105">
                <h3 class="text-xl font-semibold">Project 2</h3>
                <p class="text-gray-600 mt-2">An eCommerce platform powered by Laravel and Vue.js.</p>
                <a href="#" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">View Details</a>
            </div>

            <!-- Project 3 -->
            <div class="bg-white shadow-md p-6 rounded-lg transition hover:scale-105">
                <h3 class="text-xl font-semibold">Project 3</h3>
                <p class="text-gray-600 mt-2">A POS system built for SMEs using Laravel and Tailwind CSS.</p>
                <a href="#" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">View Details</a>
            </div>
        </div>
    </section>
</div>
@endsection
