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
    @include('layouts.header')

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
            <img src="{{ asset('img/img-home-1.png') }}" alt="Listener Girl" class="w-full max-w-md mx-auto">
        </div>

    </div>
</section>

<!-- Section: Global Music Scene -->
<section class="flex flex-col md:flex-row w-full min-h-[600px] text-white">
    <!-- Left: Image -->
    <div class="md:w-1/2 w-full h-[300px] md:h-auto">
        <img src="{{ asset('img/img-home-2.png') }}" alt="Artist Spotlight" class="w-full h-full object-cover">
    </div>

    <!-- Right: Text Content -->
    <div class="md:w-1/2 w-full flex items-center justify-center p-6 md:p-0 bg-[#0A0603]">
        <div class="max-w-xl text-center md:text-left">
            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                Your Stage to Shine on the <br>
                <span class="text-yume-orange">Global Music Scene!</span>
            </h2>
            <p class="text-lg mb-6">
                YUME.global empowers aspiring artists by providing a global platform where their music can be heard, loved, and rewarded. Whether you’re an emerging indie star or an undiscovered voice, YUME.global helps you break into the world stage.
            </p>
            <p class="text-yume-orange font-semibold text-sm mb-8">
                STREAM TO GLOBAL AUDIENCES &nbsp;|&nbsp; PUBLISH YOUR MUSIC FOR FREE <br class="hidden md:block"> HEADLINE INTERNATIONAL EVENTS
            </p>
            <a href="#" class="inline-block bg-white text-yume-orange font-bold py-3 px-8 rounded-full transition hover:bg-gray-100">
                LEARN MORE
            </a>
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
