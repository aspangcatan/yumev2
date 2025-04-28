<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YUME - Discover Fresh Music</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'yume-orange': '#F85E2F',
                    },
                    backgroundImage: {
                        'dots-pattern': "url('dots-pattern.svg')", /* We'll generate this below */
                    }
                }
            }
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-black text-white">
<!-- Hero Section -->
<section class="min-h-screen bg-gradient-to-b from-black to-yume-orange bg-dots-pattern bg-center bg-repeat text-white">

    <!-- Navbar -->
    <header class="flex justify-between items-center p-6 max-w-7xl mx-auto relative">
        <!-- Left Menu -->
        <nav class="hidden md:flex items-center space-x-8 absolute left-6">
            <a href="#" class="text-white hover:text-orange-400 font-medium">Home</a>
            <a href="#" class="text-white hover:text-orange-400 font-medium">Artists</a>
            <a href="#" class="text-white hover:text-orange-400 font-medium">Listeners</a>
        </nav>

        <!-- Center Logo -->
        <div class="flex justify-center w-full">
            <img src="{{ asset("img/logo-yume.png") }}" alt="YUME Logo" class="h-8">
        </div>

        <!-- Right Menu -->
        <nav class="hidden md:flex items-center space-x-8 absolute right-6">
            <a href="#" class="text-white hover:text-orange-400 font-medium">Rewards</a>
            <a href="#" class="text-white hover:text-orange-400 font-medium">FAQ</a>
            <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-full transition">Sign In</a>
        </nav>

        <!-- Mobile Menu Button -->
        <div class="md:hidden absolute right-6">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden px-6 space-y-4 text-center mt-4">
        <a href="#" class="block text-white">Home</a>
        <a href="#" class="block text-white">Artists</a>
        <a href="#" class="block text-white">Listeners</a>
        <a href="#" class="block text-white">Rewards</a>
        <a href="#" class="block text-white">FAQ</a>
        <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-full">Sign In</a>
    </div>

    <!-- Hero Content -->
    <div class="flex flex-col justify-center items-center text-center mt-20 px-6">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6">DISCOVER & STREAM FRESH NEW MUSIC</h1>
        <p class="text-lg md:text-xl max-w-2xl mb-10">
            YUME connects emerging artists with global listeners. <br> Be the first to discover tomorrow’s stars.
        </p>
        <div class="flex flex-col md:flex-row gap-6">
            <a href="#" class="bg-white text-orange-600 font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-gray-100 transition">
                JOIN AS ARTIST
            </a>
            <a href="#" class="bg-black text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-gray-800 transition">
                JOIN AS LISTENER
            </a>
        </div>
    </div>

</section>

<!-- Existing Hero Section here -->

<!-- New Section: Love Music -->
<section class="bg-white text-black py-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center px-6 gap-12">

        <!-- Text Content -->
        <div class="flex-1">
            <h2 class="text-4xl font-extrabold mb-6">
                <span class="text-yume-orange">Love music?</span><br>
                Now you can turn that passion into rewards.
            </h2>
            <p class="text-gray-700 mb-6">
                YUME.global is more than just a music platform — it’s a movement where passionate listeners and independent artists come together.
                Stream exclusive tracks, uncover future stars, and earn rewards for being part of the next big thing.
            </p>
            <p class="text-yume-orange font-semibold mb-8">
                SPOTLIGHT RISING TALENT | LISTEN & GET REWARDED | GROW THE MUSIC COMMUNITY
            </p>
            <a href="#" class="bg-yume-orange hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-full transition">
                LEARN MORE
            </a>
        </div>

        <!-- Image Content -->
        <div class="flex-1">
            <img src="{{ asset('img/listener-girl.png') }}" alt="Listener Girl" class="w-full max-w-md mx-auto">
        </div>

    </div>
</section>


<!-- Small Script for Mobile Menu -->
<script>
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>
