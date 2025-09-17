@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center bg-white text-gray-900">
        <header class="w-full py-6 px-8 bg-white shadow-md fixed top-0 z-50 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-green-600">NH.Technology</h1>
            <nav>
                <ul class="flex space-x-9">
                    <li><a href="{{ route('about.index') }}" class="hover:text-green-600">About</a></li>
                    <li><a href="{{ route('skills.index') }}" class="hover:text-green-600">Skills</a></li>
                    <li><a href="{{ route('portfolio.index') }}" class="hover:text-green-600">Portfolio</a></li>
                    <li><a href= "{{ route('contact.index') }}" class="hover:text-green-600">Contact</a></li>
                    <li>
                        <a href="{{ asset('cv/cv_nabil.pdf') }}"
                            class="px-3 py-1 border-2 border-green-600 rounded-lg hover:text-green-900"
                            Download="CV-Nabil-Huda.pdf">
                            Download
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <section
            class="w-full flex flex-col md:flex-row items-center md:items-start justify-between text-start pt-24 pb-16 px-6 gap-20 md:gap-0">
            <div class="w-full md:w-1/2 flex flex-col justify-center md:justify-start">
                <h6 class="text-lg text-green-500">Welcome</h6>
                <h2 class="text-4xl font-bold text-gray-800">Hello, I'm</h2>
                <h2 class="text-4xl font-bold text-green-500">Nabil Huda Rizalul Haq</h2>
                <p class="text-lg text-gray-600 mt-1">Mobile Developer specializing in Flutter and Laravel for backend
                    solutions. Passionate about building seamless and efficient applications.</p>

                <div class="flex items-center space-x-4 mt-6">
                    <a href="{{ route('contact.index') }}"
                        class="px-6 py-3 bg-green-500 text-black hover:text-white rounded-lg shadow-md hover:bg-green-600">
                        Contact Me
                    </a>
                    <div class="flex items-center space-x-2  px-6 py-3 rounded-lg hover:bg-gray-200">
                        <a href="{{ route('portfolio.index') }}" class="text-black">
                            View Portfolio
                        </a>
                        <img src="/assets/images/ic.png" alt="Portfolio Icon" class="w-6 h-6">
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center relative">
                <div class="relative">
                    <div class="absolute left-14 top-2 w-64 h-64 bg-green-500 rounded-lg shadow-lg z-0"></div>
                    <div class="absolute left-1 top-16 w-60 h-60 border-4 border-black bg-transparent rounded-lg z-10">
                    </div>
                    <!-- Gambar Profil -->
                    <img src="/assets/images/poto.png" alt="Profile Picture"
                        class="absolute left-16 bottom-14 w-60 h-80 object-cover rounded-lg relative z-20">
                </div>
            </div>
            <!-- Kolom kanan (follow me + ikon sosmed) -->
            <div class="flex flex-col items-center gap-4">
                <!-- teks vertikal -->
                <p class="text-lg text-green-600 font-semibold" style="writing-mode: vertical-rl; text-orientation: mixed;">
                    Follow me on:
                </p>
                <!-- ikon sosmed vertikal -->
                <div class="flex flex-col items-center gap-3">
                    <!-- Instagram -->
                    <a href="https://instagram.com/nabilhudarizalulhaq" target="_blank"
                        class="w-8 h-8 rounded-full bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 grid place-items-center text-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5">
                            <path fill="white" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9
                                                 114.9-51.3 114.9-114.9S287.7 141 224.1 141zm0 190.6c-41.8 0-75.7-33.9-75.7-75.7s33.9-75.7
                                                 75.7-75.7 75.7 33.9 75.7 75.7-33.9 75.7-75.7 75.7zm146.4-194.3c0 14.9-12 26.9-26.9
                                                 26.9s-26.9-12-26.9-26.9 12-26.9
                                                 26.9-26.9 26.9 12 26.9 26.9zm76.1 27.2c-1.7-35.7-9.9-67.3-36.2-93.5-26.2-26.3-57.8-34.5-93.5-36.2-36.9-2.1-147.6-2.1-184.5
                                                 0-35.7 1.7-67.3 9.9-93.5 36.2s-34.5 57.8-36.2 93.5c-2.1 36.9-2.1 147.6 0
                                                 184.5 1.7 35.7 9.9 67.3 36.2 93.5 26.2 26.2 57.8 34.5 93.5
                                                 36.2 36.9 2.1 147.6 2.1 184.5 0 35.7-1.7 67.3-9.9
                                                 93.5-36.2 26.2-26.2 34.5-57.8 36.2-93.5 2.1-36.9 2.1-147.6
                                                 0-184.5zM398.8 388c-7.8 19.6-22.9 34.7-42.6
                                                 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7
                                                 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9
                                                 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6
                                                 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9
                                                 132.1z" />
                        </svg>
                    </a>


                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@msnabl" target="_blank"
                        class="w-8 h-8 rounded-full bg-black grid place-items-center text-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5">
                            <path fill="white"
                                d="M448,209.9c-17.5,0-34.6-2.8-50.6-8v123.5c0,101.8-82.5,184.3-184.3,184.3S28.9,427.2,28.9,325.4
                                                         S111.4,141.1,213.2,141.1c7.6,0,15.1,0.5,22.4,1.5v93.9c-7.3-2.3-15.1-3.6-23.2-3.6c-41.9,0-75.9,34-75.9,75.9
                                                         s34,75.9,75.9,75.9c41.8,0,75.8-33.8,75.9-75.6l0.3-260.5h92.4c2.3,45.6,27.1,84.6,67.7,104.2c12.6,6.3,26.3,10.4,40.7,11.7V209.9z" />
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://linkedin.com/in/nabilhudarizalulhaq" target="_blank"
                        class="w-8 h-8 rounded-full bg-blue-600 grid place-items-center text-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 fill-white">
                            <path
                                d="M100.28 448H7.4V148.9h92.88zm-46.44-340a53.79 53.79 0 1 1 53.79-53.79 53.79 53.79 0 0 1-53.79 53.79zM447.9 448h-92.4V306.4c0-33.7-12.1-56.7-42.4-56.7-23.1 0-36.8 15.5-42.8 30.5-2.2 5.4-2.8 12.9-2.8 20.5V448h-92.5s1.2-270.5 0-298.1h92.5v42.3c12.3-19 34.3-46 83.7-46 61.2 0 107.3 39.8 107.3 125.4z" />
                        </svg>
                    </a>

                    <!-- YouTube -->
                    <a href="https://youtube.com/@nabilhudarizalulhaq" target="_blank"
                        class="w-8 h-8 rounded-full bg-red-600 grid place-items-center text-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 h-4 fill-white">
                            <path
                                d="M549.7 124.1c-6.3-23.6-24.8-42.1-48.3-48.3C464.4 64 288 64 288 64S111.6 64 74.6 75.8c-23.5 6.2-42 24.7-48.3 48.3C14.1 161.1 14.1 256 14.1 256s0 94.9 12.2 131.9c6.3 23.6 24.8 42.1 48.3 48.3C111.6 448 288 448 288 448s176.4 0 213.4-11.8c23.5-6.2 42-24.7 48.3-48.3 12.2-37 12.2-131.9 12.2-131.9s0-94.9-12.2-131.9zM232 334V178l142 78-142 78z" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>


        <section id="about" class="w-full flex flex-col items-center justify-center text-center pt-24 pb-16 px-6">
            <h2 class="text-3xl font-bold text-green-600">About Me</h2>
            <p class="text-lg text-gray-600 mt-4 max-w-3xl">
                I am a passionate Mobile Developer specializing in Flutter, dedicated to building high-performance and
                scalable
                applications for various industries. In addition to mobile development, I also create React-based web
                applications and develop and manage backend systems using Laravel, ensuring reliable and efficient API
                integration.
            </p>
        </section>

        <section id="skills" class="w-full flex flex-col items-center justify-center text-center py-16 px-6">
            <h2 class="text-3xl font-bold text-green-600">Skills</h2>
            <p class="text-lg text-gray-600 mt-4 max-w-3xl">
                I am a passionate Mobile Developer specializing in Flutter, dedicated to building high-performance and
                scalable
                applications for various industries. In addition to mobile development, I also create React-based web
                applications and develop and manage backend systems using Laravel, ensuring reliable and efficient API
                integration.
            </p>
        </section>

        <section id="portofolio" class="w-full flex flex-col items-center justify-center text-center py-16 px-6">
            <h2 class="text-3xl font-bold text-green-600">Portofolio</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8 max-w-5xl w-full">
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


        <section id="contact" class="w-full flex flex-col items-center justify-center text-center py-16 px-6">
            <h2 class="text-3xl font-bold text-green-600">Get In Touch</h2>
            <p class="text-lg text-gray-600 mt-4 max-w-2xl">
                Feel free to reach out for collaboration or freelance work.
            </p>
            <a href="{{ route('contact.index') }}"
                class="mt-6 inline-block px-6 py-3 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 transition">
                Contact Me
            </a>
        </section>

    </div>
@endsection
