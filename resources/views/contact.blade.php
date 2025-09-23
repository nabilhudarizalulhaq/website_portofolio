@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex flex-col items-center bg-white text-gray-900">
        <header class="w-full py-6 px-8 bg-white shadow-md fixed top-0 z-50 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-green-600">NH</h1>
            <nav>
                <ul class="flex space-x-9">
                    <li><a href="/" class="hover:text-green-600">Home</a></li>
                    <li><a href="{{ route('contact.index') }}" class="text-green-600 font-semibold">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section class="w-full max-w-4xl pt-24 px-6">
            <h2 class="text-4xl font-bold text-green-600 text-center">Contact Me</h2>

            @if (session('success'))
                <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex flex-col md:flex-row items-center justify-between mt-10 gap-10">
                <div class="w-full md:w-1/2">
                    <p class="text-lg text-gray-600 text-justify">
                        Feel free to reach out for collaborations or any inquiries! I'm always open to discussing new
                        projects, creative ideas, or opportunities to be part of your vision.
                    </p>

                    <div class="mt-6 space-y-4">
                        <p class="flex items-center">📍 <span class="ml-2">Jakarta, Indonesia</span></p>
                        <p class="flex items-center">📧 <a href="mailto:nabilhuda81@gmail.com"
                                class="ml-2 text-green-600 hover:underline">nabilhuda81@gmail.com</a></p>
                        <p class="flex items-center">
                            {{-- Ikon WhatsApp --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M20.52 3.48A11.76 11.76 0 0 0 12 .75a11.76 11.76 0 0 0-11.7 11.8 11.7 11.7 0 0 0 1.65 6l-1.73 6.33 6.47-1.7a11.77 11.77 0 0 0 5.31 1.34h.01c6.47 0 11.72-5.26 11.73-11.73a11.7 11.7 0 0 0-3.22-8.31zM12 20.25c-1.63 0-3.23-.42-4.64-1.23l-.33-.19-3.83 1 1.02-3.74-.24-.38a9.72 9.72 0 0 1-1.55-5.32c0-5.36 4.36-9.73 9.73-9.73 2.6 0 5.04 1.01 6.87 2.84a9.7 9.7 0 0 1 2.84 6.89c-.01 5.36-4.38 9.72-9.74 9.72zm5.21-7.19c-.28-.14-1.66-.82-1.92-.91-.26-.1-.45-.14-.64.14s-.73.91-.9 1.1c-.16.19-.33.21-.61.07s-1.18-.44-2.25-1.41a8.38 8.38 0 0 1-1.55-1.91c-.16-.28-.02-.43.12-.57.13-.13.29-.34.43-.51.14-.17.19-.29.29-.48.1-.19.05-.36-.02-.5-.07-.14-.64-1.55-.88-2.12-.23-.56-.47-.48-.64-.49h-.55c-.19 0-.5.07-.76.36-.26.28-1 1-1 2.43s1.02 2.82 1.16 3.01c.14.19 2 3.04 4.85 4.27.68.29 1.22.47 1.64.61.69.22 1.32.19 1.82.11.56-.08 1.66-.68 1.89-1.34.23-.66.23-1.22.16-1.34-.07-.12-.26-.19-.54-.33z" />
                            </svg>

                            <a href="https://wa.me/6282333736775" target="_blank"
                                class="ml-2 text-green-600 hover:underline">
                                Chat via WhatsApp
                            </a>
                        </p>
                        <p class="flex items-center">📞 <a href="tel:+6282333736775"
                                class="ml-2 text-green-600 hover:underline">+62 823 3373 6775</a></p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 bg-gray-100 p-6 rounded-lg shadow-lg">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700">Name</label>
                            <input type="text" name="name"
                                class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Email</label>
                            <input type="email" name="email"
                                class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Message</label>
                            <textarea name="message" rows="4"
                                class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
                        </div>

                        <button type="submit"
                            class="w-full px-6 py-3 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
