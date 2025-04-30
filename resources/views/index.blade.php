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

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-black text-white">
<section
    class="relative min-h-screen md:min-h-[60vh] bg-gradient-to-b from-black to-yume-orange bg-center bg-repeat text-white overflow-hidden">

    <!-- Decorative Dots Background -->
    <img src="{{ asset('img/img-bg-dots-1.png') }}"
         class="absolute top-0 left-0 w-full h-full object-cover opacity-30 pointer-events-none z-0"
         alt="Background Dots">

    @include('layouts.header', ['active' => 'home'])

    <div
        class="flex flex-col justify-center items-center text-center min-h-[calc(100vh-100px)] px-6 sm:px-10 relative z-10">
        <h1 class="text-3xl sm:text-4xl md:text-6xl font-extrabold mb-4 leading-tight">
            DISCOVER & STREAM <br class="hidden sm:block"> FRESH NEW MUSIC
        </h1>
        <p class="text-base sm:text-lg md:text-xl max-w-2xl mb-8">
            YUME connects emerging artists with global listeners.
            <br class="hidden sm:block"> Be the first to discover tomorrow’s stars.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 w-full sm:w-auto mb-5">
            <a href="{{ route('artist') }}"
               class="bg-white text-orange-600 font-semibold py-3 px-6 sm:px-8 rounded-full shadow-lg text-center hover:bg-gray-100 transition w-full sm:w-auto">
                JOIN AS ARTIST
            </a>
            <a href="{{ route('listener') }}"
               class="bg-black text-white font-semibold py-3 px-6 sm:px-8 rounded-full shadow-lg text-center hover:bg-gray-800 transition w-full sm:w-auto">
                JOIN AS LISTENER
            </a>
        </div>
    </div>
</section>


<section class="relative bg-white text-black py-16 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Text Content -->
        <div class="max-w-4xl relative z-10">
            <h2 class="text-5xl sm:text-6xl font-extrabold mb-8 leading-tight">
                <span class="text-yume-orange">Love music?</span><br/>
                Now you can turn that passion into rewards.
            </h2>
            <p class="text-lg sm:text-xl text-black-700 mb-6 leading-relaxed">
                YUME.global is more than just a music platform — it’s a movement where<br/>
                passionate listeners and independent artists come together.
                Stream exclusive <br/>
                tracks, uncover future stars, and earn rewards for being part of the next big thing.
            </p>
            <p class="text-yume-orange text-lg sm:text-xl font-semibold mb-10 tracking-wide">
                SPOTLIGHT RISING TALENT | LISTEN & GET REWARDED | GROW THE MUSIC COMMUNITY
            </p>
            <a href="#"
               class="bg-yume-orange hover:bg-orange-600 text-white font-bold py-4 px-8 rounded-full text-lg transition">
                LEARN MORE
            </a>
        </div>

        <!-- Image with Glow Backdrop -->
        <div class="absolute left-1/2 bottom-0 transform -translate-x-[10%] hidden md:block
            w-[900px] h-[550px] bg-[url('/img/img-home-1-backdrop.png')] bg-no-repeat bg-[length:1300px_700px] bg-center"
             style="image-rendering: pixelated;">

            <img src="{{ asset('img/img-home-1.png') }}"
                 alt="Listener Girl"
                 class="relative z-10 w-full h-full object-contain">
        </div>


    </div>
</section>


<!-- Section: Global Music Scene -->
<section class="relative w-full min-h-[600px] flex items-center justify-center text-white overflow-hidden">
    <!-- Background Split (Left image, Right solid color) -->
    <div class="absolute inset-0 flex w-full h-full flex-col md:flex-row">
        <!-- Left Image (on mobile, shown on top) -->
        <div class="w-full md:w-1/2 h-64 md:h-full bg-cover bg-center"
             style="background-image: url('{{ asset('img/img-home-2.jpg') }}');"></div>

        <!-- Right Background Color -->
        <div class="w-full md:w-1/2 h-full bg-[#0A0603]"></div>
    </div>

    <!-- Centered Content -->
    <div class="relative z-10 w-full text-center px-12 py-12">
        <div class="flex flex-col items-center md:items-center md:text-left mx-8 md:mx-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight mb-6 text-center">
                Your Stage to Shine on the <br>
                <span
                    class="text-yume-orange text-4xl sm:text-5xl md:text-[68px] text-center">Global Music Scene!</span>
            </h2>
            <p class="text-base sm:text-lg md:text-xl mb-8 max-w-4xl text-center">
                YUME.global empowers aspiring artists by providing a global platform where their<br/>
                music can be heard, loved, and rewarded. Whether you’re an emerging indie star<br/>
                or an undiscovered voice, YUME.global helps you break into the world stage.
            </p>
        </div>

        <!-- Bottom Row -->
        <div class="w-full mt-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 px-4 md:px-[10%]">
                <div class="text-yume-orange font-semibold text-base sm:text-lg text-center md:text-left"
                     style="font-size: 24px">
                    <p>STREAM TO GLOBAL AUDIENCES &nbsp;|&nbsp; PUBLISH YOUR MUSIC FOR FREE</p>
                    <p>HEADLINE INTERNATIONAL EVENTS</p>
                </div>
                <a href="#"
                   class="inline-block bg-white text-yume-orange font-bold py-3 px-8 rounded-full transition hover:bg-gray-100 text-center">
                    LEARN MORE
                </a>
            </div>
        </div>
    </div>

</section>


<section class="bg-[#F15A29]">
    <div class="max-w-7xl mx-auto px-4">
        <div
            class="relative w-full grid grid-cols-1 md:grid-cols-2 gap-10 items-start bg-[url('{{ asset('img/img-bg-dots-1.png') }}')] bg-no-repeat bg-cover py-10">

            <div class="relative flex flex-row sm:flex-row items-center gap-4 md:gap-6 h-auto md:h-[400px]">
                <img src="{{ asset('img/yume-artist-4.png') }}"
                     class="w-full max-w-[100px] sm:w-32 h-auto sm:h-[400px] object-contain sm:object-cover sm:relative sm:top-[50px]"
                     alt="Artist 1">
                <img src="{{ asset('img/yume-artist-2.png') }}"
                     class="w-full max-w-[100px] sm:w-32 h-auto sm:h-[400px] object-contain sm:object-cover z-10"
                     alt="Artist 2">
                <img src="{{ asset('img/yume-artist-3.png') }}"
                     class="w-full max-w-[100px] sm:w-32 h-auto sm:h-[400px] object-contain sm:object-cover sm:relative sm:top-[50px]"
                     alt="Artist 3">
            </div>


            <!-- Right Side Content -->
            <div class="text-white text-center md:text-left space-y-6">
                <!-- Top Banner -->
                <img src="{{ asset('img/yume-artist-5.png') }}"
                     class="w-full h-24 sm:h-32 object-cover" style="object-position: center 10%;" alt="Top Banner">

                <!-- Text Content -->
                <div>
                    <h2 class="text-3xl sm:text-[50px] font-extrabold text-center">YUME Artists</h2>
                    <p class="text-base sm:text-lg md:text-xl mt-4 text-center">
                        Meet the rising stars shaping the future of music. YUME’s global community is discovering
                        tomorrow’s
                        chart-toppers today. Join our roster of talented artists and take the first step toward living
                        your dream.
                    </p>
                </div>

                <!-- CTA Button -->
                <div class="flex justify-center">
                    <a href="{{ route('artist') }}"
                       class="inline-block px-6 sm:px-8 py-4 sm:py-6 bg-[#121212] text-white text-sm sm:text-lg md:text-xl font-semibold rounded-full hover:opacity-90 transition">
                        GET PUBLISHED FOR FREE
                    </a>
                </div>

                <!-- Bottom Banner -->
                <img src="{{ asset('img/yume-artist-1.png') }}"
                     class="w-full h-24 sm:h-32 object-cover" style="object-position: center 10%;" alt="Top Banner">
            </div>

        </div>
    </div>
</section>

<section class="bg-gradient-to-b from-[#F15A29] to-white py-12">
    <div class="flex flex-col md:flex-row items-center justify-center md:space-x-12 space-y-8 md:space-y-0 px-4">
        <!-- Heading -->
        <div
            class="text-3xl sm:text-4xl md:text-6xl font-extrabold text-[#1E2731] text-center md:text-left leading-tight">
            Listen to YUME
        </div>

        <!-- YouTube Playlist -->
        <div class="w-full max-w-xl">
            <iframe
                src="https://www.youtube.com/embed/videoseries?si=AUMCF01JQKqOoHSv&amp;list=PLjLOGm1HDJ7gT61c9qGutu-hw5Fye3iLq&amp;rel=0&amp;autoplay=0"
                title="YUME Artists Playlist"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
                class="w-full h-[200px] sm:h-[250px] md:h-[300px] rounded-lg shadow-lg">
            </iframe>
        </div>
    </div>
</section>

<section class="relative pt-8 text-white px-4 sm:px-8 overflow-hidden">
    <!-- Blurred Sunset Background Image (absolute with lower z-index) -->
    <img src="{{ asset('img/backdrop-sunset-bg.png') }}"
         alt="Clean Sunset Background"
         class="absolute inset-0 w-full h-full object-cover pointer-events-none z-0"/>

    <!-- Centered Foreground Image (absolute with higher z-index) -->
    <img src="{{ asset('img/img-home-4.png') }}"
         alt="YUME Background"
         class="hidden sm:block absolute inset-x-0 bottom-0 left-1/2 transform -translate-x-1/2 w-[70vw] md:w-[55vw] lg:w-[40vw] xl:w-[32vw] 2xl:w-[27vw] max-w-none object-contain pointer-events-none"/>

    <!-- Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto z-20 pt-10 pb-10">
        <div class="flex flex-col lg:flex-row items-center justify-between space-y-12 lg:space-y-0 lg:space-x-10">
            <!-- Left Text Section -->
            <div class="text-left max-w-xl px-4 sm:px-6 space-y-6 text-center lg:text-left">
                <h2 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight">
                    Finally, <span class="text-white/80">your passion for<br
                            class="hidden sm:block"/> music pays.</span>
                </h2>
                <p class="text-base sm:text-lg md:text-xl leading-relaxed" style="margin-top: 90px">
                    YUME makes a true music listener's<br class="hidden sm:block"/> dream come true: to be able to<br
                        class="hidden sm:block"/>
                    discover and support artists; and be<br class="hidden sm:block"/> rewarded for doing so.
                </p>
            </div>

            <!-- Right Feature Cards -->
            <div class="flex flex-col items-center space-y-10 text-center px-4 sm:px-6">
                <!-- Freemium -->
                <div class="space-y-3 flex flex-col items-center">
                    <img src="{{ asset('img/ic-headphone-1.png') }}" alt="Headphone Icon"
                         class="w-16 sm:w-20 h-auto"/>
                    <div class="text-xl sm:text-2xl font-bold text-[#F15A29]">Freemium Account</div>
                    <p class="text-base sm:text-lg leading-relaxed" style="font-size: 20px">
                        With a FREE account, get a chance to<br/>
                        receive exclusive access to concerts,<br/>
                        limited edition merchandise, or VIP experiences.
                    </p>
                </div>

                <!-- Premium -->
                <div class="space-y-3 flex flex-col items-center">
                    <img src="{{ asset('img/ic-headphone.png') }}" alt="Headphone Icon"
                         class="w-20 sm:w-24 h-auto"/>
                    <div class="text-xl sm:text-2xl font-bold text-[#F15A29]">Premium Account</div>
                    <p class="text-base sm:text-lg leading-relaxed" style="font-size: 20px">
                        With a PREMIUM Membership, earn<br/>
                        income when you help grow the<br/> YUME community.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="bg-[#131c26] text-white py-20 px-4">
    <div class="max-w-7xl mx-auto border-2 border-[#f15a29] rounded-3xl p-10 text-center space-y-10">

        <!-- Header Text -->
        <h2 class="text-4xl sm:text-5xl font-extrabold text-[#f15a29]">
            Stream. Share. Get Paid. Simple.
        </h2>
        <p class="text-lg max-w-3xl mx-auto text-white/80">
            Join the Powerline™, YUME’s community of tastemakers that get instantly rewarded
            just by listening to music and sharing their discoveries with the world.
        </p>

        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div
                class="bg-white text-black p-6 rounded-2xl shadow-lg border-4 border-[#f15a29] border-t-[10px]">
                <div class="text-[#f15a29] text-4xl mb-4">🎧</div>
                <p>
                    Earn points and get the chance to win concert tickets, digital goods, or trade them for
                    cash.
                </p>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white text-black p-6 rounded-2xl shadow-lg border-4 border-[#f15a29] border-t-[10px]">
                <div class="text-[#f15a29] text-4xl mb-4">💰</div>
                <p>
                    Enjoy multiple revenue streams with your membership.
                </p>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-white text-black p-6 rounded-2xl shadow-lg border-4 border-[#f15a29] border-t-[10px]">
                <div class="text-[#f15a29] text-4xl mb-4">👥</div>
                <p>
                    Invite your friends and earn commissions.
                </p>
            </div>

            <!-- Card 4 -->
            <div
                class="bg-white text-black p-6 rounded-2xl shadow-lg border-4 border-[#f15a29] border-t-[10px]">
                <div class="text-[#f15a29] text-4xl mb-4">💸</div>
                <p>
                    Cash out easily – hassle-free withdrawals all the time.
                </p>
            </div>
        </div>

        <!-- CTA Button -->
        <div>
            <a href="{{ route('listener') }}"
               class="bg-[#f15a29] text-white font-bold text-lg sm:text-base md:text-lg px-8 sm:px-6 py-4 rounded-full hover:bg-[#d84e23] transition whitespace-nowrap">
                CREATE AN ACCOUNT
            </a>
        </div>


    </div>
</section>

<section class="relative bg-white text-black py-20 px-6 overflow-hidden">
    <!-- Absolute Background Image -->
    <img src="{{ asset('img/img-bg-dots.png') }}"
         alt="Background"
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">

    <!-- Main Content -->
    <div class="relative z-10 max-w-7xl mx-auto space-y-20">
        <!-- Testimonials -->
        <div class="text-center relative">
            <h2 class="text-4xl md:text-5xl font-extrabold text-yume-orange mb-12">
                What YUME Listeners Say
            </h2>

            <!-- Carousel Container -->
            <div class="relative overflow-hidden">
                <!-- Left Arrow -->
                <button id="leftArrow"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-20">
                    <svg class="w-6 h-6 text-yume-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <!-- Right Arrow -->
                <button id="rightArrow"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-20">
                    <svg class="w-6 h-6 text-yume-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

                <div id="carousel"
                     class="flex space-x-6 overflow-hidden snap-x snap-mandatory justify-center px-10">
                    @php
                        $listeners = [
                            'yume-listener-1.png',
                            'yume-listener-2.png',
                            'yume-listener-3.png',
                        ];
                    @endphp

                    @foreach ($listeners as $index => $listener)
                        <div class="carousel-item min-w-[300px] snap-start transition-all duration-300"
                             data-index="{{ $index }}">
                            <div class="rounded-xl bg-white p-2">
                                <img src="{{ asset('img/' . $listener) }}" alt="YUME Review {{ $index + 1 }}"
                                     class="w-full rounded-md">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- News Section -->
        <div class="container mx-auto px-6 md:px-12 lg:px-20">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between">
                <!-- Title -->
                <div class="text-center md:text-left pb-10 md:pb-0 flex-shrink-0">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-yume-orange whitespace-nowrap">
                        In The NEWS
                    </h2>
                </div>

                <!-- Images Grid (side by side on md+, stacked on mobile) -->
                <div class="grid grid-cols-1 md:grid-cols-2 flex-1">
                    <!-- News Image 1 -->
                    <div class="flex justify-center">
                        <img src="{{ asset('img/img-news-1.png') }}"
                             alt="YUME News"
                             class="w-full max-w-xs rounded-lg shadow-lg cursor-pointer hover:opacity-80 transition"
                             onclick="window.open('https://www.wicz.com/story/50475038/yume-unveils-game-changing-streaming-and-music-publishing-platform','_blank')">
                    </div>

                    <!-- News Image 2 -->
                    <div class="flex justify-center md:pt-0 pt-10">
                        <img src="{{ asset('img/img-news-2.png') }}"
                             alt="YUME News"
                             class="w-full max-w-xs rounded-lg shadow-lg cursor-pointer hover:opacity-80 transition"
                             onclick="window.open('https://philippines-startup.biz/%e3%83%97%e3%83%ac%e3%82%b9%e3%83%aa%e3%83%aa%e3%83%bc%e3%82%b9/?t=yume-sets-the-stage-for-a-more-rewarding-music-experience-for-filipino-music-listeners&amp;rid=1547','_blank')">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="feature-sections" class="bg-[#1E2731] py-16">
    <div class="container mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-5xl font-extrabold text-white tracking-wide">AS SEEN ON</h2>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-6">
            <!-- Brand Logos -->
            <a href="https://www.benzinga.com/pressreleases/24/02/ab37217186/yume-unveils-game-changing-streaming-and-music-publishing-platform"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/ec881fff-1d06-43da-18e1-4460b8922c00/public"
                    alt="Featured on Benzinga"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.barchart.com/story/news/24209395/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/d1d24201-6f48-4c9b-6ed2-46464eac1900/public"
                    alt="Featured on BarChart"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.theglobeandmail.com/investing/markets/markets-news/GetNews/24209404/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/7acfc7a6-2b16-4ba6-01d5-96b99d462f00/public"
                    alt="Featured on The Globe And Mail"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.wicz.com/story/50475038/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/3fc4af63-e906-4112-d141-d504c6ea5c00/public"
                    alt="Featured on FOX 40"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.newschannelnebraska.com/story/50475038/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/31f90197-ad2e-4772-b420-56e60b9b4a00/public"
                    alt="Featured on NCN"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="http://business.starkvilledailynews.com/starkvilledailynews/markets/article/getnews-2024-2-20-yume-unveils-game-changing-streaming-and-music-publishing-platform/"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/5c25786a-6267-4a1d-bcb7-3ccaa5676700/public"
                    alt="Featured on Starkville Daily News"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="http://markets.chroniclejournal.com/chroniclejournal/article/getnews-2024-2-20-yume-unveils-game-changing-streaming-and-music-publishing-platform/"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/ac708810-3bf8-4cd0-f934-a3f51cd64e00/public"
                    alt="Featured on The Chronicle Journal"
                    class="w-28 h-auto transition hover:scale-105">
            </a>
        </div>

        <div class="text-center mt-8">
            <p class="text-gray-300 text-sm font-semibold tracking-widest">AND OVER 400 NEWS SITES</p>
            <p class="text-gray-400 text-xs mt-1">
                Verified by
                <a href="https://www.brandpush.co?utm_source=Client+Referral&utm_medium=Trust+Badge&utm_campaign=Trust+Badge&utm_content=1708135500624"
                   target="_blank" class="text-blue-400 hover:underline">BrandPush.co</a>
            </p>
        </div>
    </div>
</section>


<!-- Small Script for Mobile Menu -->

<!-- Updated Carousel Script for Center Focus -->
<script>
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const carousel = document.getElementById('carousel');
    const leftArrow = document.getElementById('leftArrow');
    const rightArrow = document.getElementById('rightArrow');

    // Toggle mobile nav
    if (toggleBtn && mobileMenu) {
        toggleBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    function updateVisuals() {
        const items = Array.from(carousel.querySelectorAll('.carousel-item'));

        // Remove all effects first
        items.forEach(item => {
            item.classList.remove('opacity-50', 'scale-95', 'opacity-100', 'scale-105', 'z-10');
            item.classList.add('opacity-50', 'scale-95');
        });

        // Get carousel's horizontal center
        const carouselRect = carousel.getBoundingClientRect();
        const carouselCenter = carouselRect.left + carouselRect.width / 2;

        let closestItem = null;
        let closestDistance = Infinity;

        items.forEach(item => {
            const rect = item.getBoundingClientRect();
            const itemCenter = rect.left + rect.width / 2;
            const distance = Math.abs(carouselCenter - itemCenter);
            if (distance < closestDistance) {
                closestDistance = distance;
                closestItem = item;
            }
        });

        if (closestItem) {
            closestItem.classList.remove('opacity-50', 'scale-95');
            closestItem.classList.add('opacity-100', 'scale-105', 'z-10');
        }
    }

    function moveLeft() {
        const last = carousel.lastElementChild;
        carousel.insertBefore(last, carousel.firstElementChild);
        requestAnimationFrame(updateVisuals);
    }

    function moveRight() {
        const first = carousel.firstElementChild;
        carousel.appendChild(first);
        requestAnimationFrame(updateVisuals);
    }

    leftArrow.addEventListener('click', moveLeft);
    rightArrow.addEventListener('click', moveRight);

    window.addEventListener('resize', updateVisuals); // Recalculate on resize
    updateVisuals();

</script>
</body>
</html>
