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
                <li><a href="#contact" class="hover:text-green-600">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="w-full max-w-4xl py-32 text-center">
        <h2 class="text-4xl font-bold text-green-600">My Skills</h2>
        <p class="text-lg text-gray-600 mt-4">Here are some of the technologies and frameworks I specialize in.</p>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-12">
            <!-- Flutter -->
            <div class="bg-white shadow-md p-6 rounded-lg flex flex-col items-center transition hover:scale-105">
                <img src="/assets/icons/flutter.svg" alt="Flutter" class="w-16 h-16">
                <h3 class="text-xl font-semibold mt-4">Flutter</h3>
            </div>

            <!-- Laravel -->
            <div class="bg-white shadow-md p-6 rounded-lg flex flex-col items-center transition hover:scale-105">
                <img src="/assets/icons/laravel.svg" alt="Laravel" class="w-16 h-16">
                <h3 class="text-xl font-semibold mt-4">Laravel</h3>
            </div>

            <!-- React.js -->
            <div class="bg-white shadow-md p-6 rounded-lg flex flex-col items-center transition hover:scale-105">
                <img src="/assets/icons/react.svg" alt="React.js" class="w-16 h-16">
                <h3 class="text-xl font-semibold mt-4">React.js</h3>
            </div>

            <!-- Tailwind CSS -->
            <div class="bg-white shadow-md p-6 rounded-lg flex flex-col items-center transition hover:scale-105">
                <img src="/assets/icons/tailwind.svg" alt="Tailwind CSS" class="w-16 h-16">
                <h3 class="text-xl font-semibold mt-4">Tailwind CSS</h3>
            </div>

            <!-- MySQL -->
            <div class="bg-white shadow-md p-6 rounded-lg flex flex-col items-center transition hover:scale-105">
                <img src="/assets/icons/mysql.svg" alt="MySQL" class="w-16 h-16">
                <h3 class="text-xl font-semibold mt-4">MySQL</h3>
            </div>

            <!-- PostgreSQL -->
            <div class="bg-white shadow-md p-6 rounded-lg flex flex-col items-center transition hover:scale-105">
                <img src="/assets/icons/postgresql.svg" alt="PostgreSQL" class="w-16 h-16">
                <h3 class="text-xl font-semibold mt-4">PostgreSQL</h3>
            </div>
        </div>
    </section>
</div>
@endsection
