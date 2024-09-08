<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
  <title>{{ config('app.name') }}</title>
</head>

<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
<header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4 px-8">
        <!-- Logo or Home Link -->
        <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600 hover:text-indigo-800">Home</a>

        @auth
        <div class="relative" x-data="{ open: false }">
            <!-- Avatar Button -->
            <button @click="open = !open" type="button" class="w-12 h-12 rounded-full overflow-hidden border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <img src="https://picsum.photos/200" alt="User Avatar" class="w-full h-full object-cover">
            </button>

            <!-- Dropdown Menu -->
            <div x-show="open" @click.outside="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg overflow-hidden z-10" style="display: none;">
                <p class="px-4 py-2 text-sm text-gray-800 border-b">Username: {{ auth()->user()->username }}</p>
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-500 hover:text-white">Dashboard</a>
                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-500 hover:text-white"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a> 

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
        @endauth

        <!-- Navigation Links for Guest -->
        @guest
        <div class="flex items-center gap-6">
            <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 transition duration-200">Login</a>
            <a href="{{ route('register') }}" class="text-gray-700 hover:text-indigo-600 transition duration-200">Register</a>
        </div>
        @endguest
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
