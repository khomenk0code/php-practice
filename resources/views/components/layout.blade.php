<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>{{ config('app.name') }}</title>
</head>

<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
<header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4 px-8">
        <!-- Logo or Home Link -->
        <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600 hover:text-indigo-800">Home</a>

        <!-- Navigation Links -->
        <div class="flex items-center gap-6">
            <a href="#" class="text-gray-700 hover:text-indigo-600 transition duration-200">Login</a>
            <a href="{{ route('register') }}" class="text-gray-700 hover:text-indigo-600 transition duration-200">Register</a>
        </div>
    </nav>
</header>

<!-- Main content area should grow to fill available space -->
<main class="flex-grow py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <!-- Main content slot for dynamic content -->
    {{ $slot }}
</main>

<footer class="bg-white border-t">
    <div class="container mx-auto py-4 px-8 flex justify-between items-center text-sm text-gray-500">
        <span>&copy; 2024 Laravel Practice. All rights reserved.</span>
        <a href="#" class="hover:underline">Privacy Policy</a>
    </div>
</footer>

</body>
</html>
