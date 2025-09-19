<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'OpportuNet' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-blue-900 to-gray-800 text-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-900/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 flex justify-between h-16 items-center">
            <a href="/" class="flex items-center space-x-2 text-2xl font-extrabold text-blue-400 hover:text-yellow-400 transition">
                🤖 <span>Opportu<span class="text-yellow-400">Net</span></span>
            </a>
            <div class="flex space-x-6 text-lg">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="relative bg-gradient-to-r from-blue-600 to-indigo-700 py-12 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-extrabold tracking-wide">{{ $heading ?? 'Welcome' }}</h1>
            <p class="mt-2 text-lg text-gray-200">Your futuristic OpportuNet 🤖</p>
        </div>
    </header>

    <!-- Main -->
    <main class="max-w-6xl mx-auto px-6 py-12">
        <div class="bg-gray-800/60 backdrop-blur rounded-xl p-8 shadow-xl border border-gray-700">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 py-6 text-center text-gray-400 text-sm border-t border-gray-700">
        © {{ date('Y') }} OpportuNet 🤖 | Built with <span class="text-pink-500">♥</span>
    </footer>

</body>
</html>
