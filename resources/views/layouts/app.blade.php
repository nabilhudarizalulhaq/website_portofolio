
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
            <ul class="flex space-x-9">
                <li><a href="{{ route('about.index') }}" class="hover:text-green-600">About</a></li>
                <li><a href="{{ route('skills.index') }}" class="hover:text-green-600">Skills</a></li>
                <li><a href="{{ route('portfolio.index') }}" class="hover:text-green-600">Portfolio</a></li>
                <li><a href= "{{ route('contact.index') }}" class="hover:text-green-600">Contact</a></li>
                <li><a href="#" class="px-3 py-1 border-2 border-green-600 rounded-lg hover:text-green-900">Download</a></li>
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
