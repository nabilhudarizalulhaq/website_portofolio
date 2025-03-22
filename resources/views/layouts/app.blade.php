@php
    function getContent($key, $default = '') {
        return App\Models\Content::where('key', $key)->first()->value ?? $default;
    }
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">

    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">My Portfolio</a>
            <ul class="flex space-x-4">
                <li><a href="#about" class="hover:text-blue-500">About</a></li>
                <li><a href="#projects" class="hover:text-blue-500">Projects</a></li>
                <li><a href="#contact" class="hover:text-blue-500">Contact</a></li>
                <li><a href="#" class="hover:text-blue-500">Download</a></li>
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mx-auto p-6">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center p-4 mt-10 bg-gray-100 shadow-md">
        <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
    </footer>

</body>
</html>
