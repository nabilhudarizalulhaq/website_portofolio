@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-white text-gray-900">
    <header class="w-full py-6 px-8 bg-white shadow-md fixed top-0 z-50 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-green-600">NH.code</h1>
        <nav>
            <ul class="flex space-x-9">
                <li><a href="{{ route('about.index') }}" class="hover:text-green-600">About</a></li>
                <li><a href="{{ route('skills.index') }}" class="hover:text-green-600">Skills</a></li>
                <li><a href="{{ route('portfolio.index') }}" class="hover:text-green-600">Portfolio</a></li>
                <li><a href= "{{ route('contact.index') }}" class="hover:text-green-600">Contact</a></li>
                <li><a href="#" class="px-3 py-1 border-2 border-green-600 rounded-lg hover:text-green-900">Download</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="w-full flex flex-col md:flex-row items-center md:items-start justify-between text-start pt-24 pb-16 px-6 gap-20 md:gap-0">
    <div class="w-full md:w-1/2 flex flex-col justify-center md:justify-start">
        <h6 class="text-lg text-green-500">Welcome</h6>
        <h2 class="text-4xl font-bold text-gray-800">Hello, I'm</h2>
        <h2 class="text-4xl font-bold text-green-500">Nabil Huda Rizalul Haq</h2>
        <p class="text-lg text-gray-600 mt-1">Mobile Developer specializing in Flutter and Laravel for backend solutions. Passionate about building seamless and efficient applications.</p>
        
        <div class="flex items-center space-x-4 mt-6">
            <a href="{{ route('contact.index') }}" class="px-6 py-3 bg-green-500 text-black hover:text-white rounded-lg shadow-md hover:bg-green-600">
                Contact Me
            </a>
            <div class="flex items-center space-x-2  px-6 py-3 rounded-lg hover:bg-gray-200">
    <a href="#portfolio" class="text-black">
        View Portfolio
    </a>
    <img src="/assets/images/ic.png" alt="Portfolio Icon" class="w-6 h-6">
</div>
        </div>
    </div>
    <div class="w-full md:w-1/2 flex justify-center relative">
        <div class="relative">
            <div class="absolute left-14 top-2 w-64 h-64 bg-green-500 rounded-lg shadow-lg z-0"></div>
            <div class="absolute left-1 top-16 w-60 h-60 border-4 border-black bg-transparent rounded-lg z-10"></div>
            <!-- Gambar Profil -->
            <img src="/assets/images/poto.png" alt="Profile Picture" class="absolute left-16 bottom-14 w-60 h-80 object-cover rounded-lg relative z-20">
        </div>
    </div>
    <div>
    <p class="text-lg text-green-600" style="writing-mode: vertical-rl; text-orientation: mixed;">
    Follow me on:</p>
    </div>
    </div>
</section>


</section>


    <section id="about" class="w-full flex flex-col items-start justify-start text-start pt-24 pb-16 px-6">
        <h2 class="text-3xl font-bold text-green-600">About Me</h2>
        <p class="text-lg text-gray-600 mt-4">I am a passionate Mobile Developer specializing in Flutter, dedicated to building high-performance and scalable applications for various industries. In addition to mobile development, I also create React-based web applications and develop and manage backend systems using Laravel, ensuring reliable and efficient API integration.</p>
    </section>

    <section id="skills" class="w-full max-w-4xl text-center py-16">
        <h2 class="text-3xl font-bold text-green-600">Skills</h2>
        <p class="text-lg text-gray-600 mt-4">I am a passionate **Mobile Developer** specializing in **Flutter**, dedicated to building high-performance and scalable applications for various industries. In addition to mobile development, I also create React-based web applications and develop and manage backend systems using Laravel, ensuring reliable and efficient API integration.</p>
    </section>

    <section id="portofolio" class="w-full max-w-5xl py-16 text-center">
        <h2 class="text-3xl font-bold text-green-600">Portofolio</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
            <div class="bg-white shadow-md p-6 rounded-lg">
                <h3 class="text-xl font-semibold">Project 1</h3>
                <p class="text-gray-600 mt-2">A web app built with Laravel and React.js.</p>
            </div>
            <div class="bg-white shadow-md p-6 rounded-lg">
                <h3 class="text-xl font-semibold">Project 2</h3>
                <p class="text-gray-600 mt-2">An eCommerce platform powered by Laravel and Vue.js.</p>
            </div>
            <div class="bg-white shadow-md p-6 rounded-lg">
                <h3 class="text-xl font-semibold">Project 3</h3>
                <p class="text-gray-600 mt-2">A POS system built for SMEs using Laravel and Tailwind CSS.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="w-full max-w-4xl text-center py-16">
        <h2 class="text-3xl font-bold text-green-600">Get In Touch</h2>
        <p class="text-lg text-gray-600 mt-4">Feel free to reach out for collaboration or freelance work.</p>
        <a href="{{ route('contact.index') }}" class="mt-6 inline-block px-6 py-3 bg-green-600 text-white rounded-lg shadow-md hover:bg-blue-700">Contact Me</a>
    </section>
</div>
@endsection