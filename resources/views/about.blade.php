@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center bg-white text-gray-900">
    <header class="w-full py-6 px-8 bg-white shadow-md fixed top-0 z-50 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-green-600">NH.code</h1>
        <nav>
            <ul class="flex space-x-9">
                <li><a href="/" class="hover:text-green-600">Home</a></li>
                <li><a href="{{ route('about.index') }}" class="text-green-600 font-semibold">About</a></li>
                <li><a href="{{ route('skills.index') }}" class="hover:text-green-600">Skills</a></li>
                <li><a href="{{ route('portfolio.index') }}" class="hover:text-green-600">Portfolio</a></li>
                <li><a href="{{ route('contact.index') }}" class="hover:text-green-600">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="w-full max-w-5xl py-24 px-6 md:px-12">
        <h2 class="text-4xl font-bold text-green-600 text-start mt-4">About Me</h2>
        <div class="flex flex-col md:flex-row items-center justify-between mt-6 gap-10">
            
            <!-- Foto Profil -->
            <div class="w-full md:w-1/2 flex justify-start relative ">
                <div class="relative">
                    <div class="absolute left-8 top-2 w-64 h-64 bg-green-500 rounded-lg shadow-lg z-0"></div>
                    <div class="absolute left-0 top-16 w-60 h-60 border-4 border-black bg-transparent rounded-lg z-10"></div>
                    <img src="/assets/images/poto.png" alt="Profile Picture" class="absolute left-6 bottom-14 w-60 h-80 object-cover rounded-lg relative z-20">
                </div>
            </div>
            
            <!-- Deskripsi -->
            <div class="w-full md:w-1/2">
                <p class="text-lg text-gray-600 text-justify">
                    Hi, I'm <span class="text-green-600 font-semibold">Nabil Huda Rizalul Haq</span>, a passionate Mobile Developer specializing in Flutter and Laravel.
                    I have a deep understanding of mobile and web development, focusing on delivering high-quality and scalable applications.
                </p>

                <p class="text-lg text-gray-600 text-justify mt-4">
                    With years of experience in <strong>Flutter, Laravel, React.js, and PostgreSQL</strong>, I have successfully built various applications for startups and enterprises.
                    My goal is to create seamless and efficient applications that enhance user experience.
                </p>

                <p class="text-lg text-gray-600 text-justify mt-4">
                    Apart from coding, I love contributing to the tech community, sharing knowledge through blogs, and continuously improving my skills.
                </p>

                <div class="flex items-center space-x-4 mt-6">
                    <a href="mailto:nabil@example.com" class="px-6 py-3 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
