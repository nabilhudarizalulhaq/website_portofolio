@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex flex-col items-center bg-white text-gray-900">
        <header class="w-full py-6 px-8 bg-white shadow-md fixed top-0 z-50 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-green-600">NH.Technology</h1>
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
