<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YUME - Discover Fresh Music</title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
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
    class="relative min-h-[calc(74vh-100px)] bg-gradient-to-b from-black to-yume-orange bg-center bg-repeat text-white overflow-hidden">

    <img src="{{ asset('img/img-bg-dots-1.png') }}"
         class="absolute top-0 left-0 w-full h-full object-cover opacity-30 pointer-events-none z-0 exclude-transition"
         alt="Background Dots">

    @include('layouts.header', ['active' => 'home'])

    <div
        class="flex flex-col justify-center items-center text-center min-h-[calc(74vh-100px)] px-6 sm:px-10 relative z-10">
        <h1 class="text-3xl sm:text-4xl md:text-6xl font-extrabold mb-4 leading-tight">
            DISCOVER & STREAM FRESH NEW MUSIC
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
<section class="relative bg-white text-black pt-10 pb-8 sm:pb-0 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 flex items-center min-h-[75vh]">
        <!-- Text Content -->
        <div class="max-w-4xl relative z-10">
            <h2 class="mb-8 leading-tight">
                <span
                    class="whitespace-nowrap text-5xl sm:text-4xl md:text-5xl lg:text-6xl text-yume-orange font-extrabold">LOVE MUSIC?</span>

                <div class="text-3xl sm:text-4xl pt-2">Now you can turn that passion into rewards.</div>
            </h2>
            <p class="text-lg sm:text-xl text-black-700 mb-8 leading-relaxed my-10 text-left">
                YUME is more than just a music platform — it's a movement where passionate listeners<span
                    class="hidden sm:inline"><br/></span>
                and independent artists come together. Stream exclusive tracks, uncover future stars,<span
                    class="hidden sm:inline"><br/></span>
                and earn rewards for being part of the next big thing.
            </p>
            <div class="sm:ml-5">
                <ul class="list-disc pl-5 text-yume-orange text-lg sm:text-xl font-bold mb-10 tracking-wide">
                    <li>
                        SPOTLIGHT RISING TALENT
                    </li>
                    <li>
                        LISTEN & GET REWARDED
                    </li>
                    <li>
                        GROW THE MUSIC COMMUNITY
                    </li>
                </ul>
                <div class="flex justify-center sm:justify-start">
                    <a href="https://backoffice.yume.global/signup_process.php"
                       class="bg-yume-orange hover:bg-orange-600 text-white font-bold py-4 px-16 rounded-full text-lg transition">
                        LEARN MORE
                    </a>
                </div>
            </div>

        </div>

        <!-- Image -->
        <div class="absolute right-0 bottom-0 hidden md:block h-full w-auto max-h-screen translate-x-[-45%]">
            <img src="{{ asset('img/img-home-1.png') }}" loading="lazy" alt="Listener Girl"
                 class="relative z-10 h-full w-auto object-contain scale-110 opacity-0 transition-opacity duration-1000">
        </div>
    </div>
</section>


<!-- Section: Global Music Scene -->
<section class="relative w-full min-h-[80vh] flex items-center justify-center text-white overflow-hidden">
    <!-- Background Split (Left image, Right solid color) -->
    <div class="absolute inset-0 flex w-full h-full flex-col md:flex-row">
        <!-- Left Image (hidden on mobile) -->
        <div class="hidden md:block w-full md:w-1/2 h-full bg-cover bg-center"
             style="background-image: url('{{ asset('img/img-home-2.jpg') }}');"></div>

        <!-- Right Background Color (takes full width on mobile) -->
        <div class="w-full md:w-1/2 h-full bg-[#0A0603]"></div>
    </div>

    <!-- Centered Content -->
    <!-- Centered Content -->
    <div class="relative z-10 w-full px-6 pt-12 pb-10 flex flex-col justify-end h-full">
        <!-- Content Width Container -->
        <div class="w-full md:max-w-none md:px-16">

            <!-- Text Content -->
            <div class="text-content">
                <h2 class="mb-8 leading-tight text-left sm:text-end">
                <span class="whitespace-nowrap text-2xl sm:text-3xl md:text-4xl">
                    Your stage to shine on the
                </span>

                    <br>
                    <span class="whitespace-nowrap text-yume-orange text-4xl font-extrabold sm:text-5xl md:text-[68px]">
                    Global Music Scene!
                </span>
                </h2>

                <p class="text-base text-lg sm:text-xl mb-8 mt-10 text-start md:text-end">
                    YUME empowers aspiring artists by providing a global platform where their music can be<span
                        class="hidden sm:inline"><br/></span>
                    heard, loved, and rewarded. Whether you’re an emerging indie star or an undiscovered<span
                        class="hidden sm:inline"><br/></span>
                    voice, YUME.global helps you break into the world stage.
                </p>
            </div>

            <!-- Bottom Row (follows h2 width) -->
            <!-- Bottom Row -->
            <div class="mt-10 sm:mt-20">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <!-- List -->
                    <ul class="list-disc text-yume-orange text-lg sm:text-xl font-semibold tracking-wide pl-5 ml-2 md:pl-20 md:ml-4 w-full text-start">
                        <li>STREAM TO GLOBAL AUDIENCES</li>
                        <li>PUBLISH YOUR MUSIC FOR FREE</li>
                        <li>HEADLINE INTERNATIONAL EVENTS</li>
                    </ul>

                    <!-- CTA Button -->
                    <a href="https://backoffice.yume.global/signup_process.php"
                       class="bg-white text-yume-orange font-bold py-4 px-16 md:px-20 rounded-full transition hover:bg-gray-100 text-xl whitespace-nowrap mt-3 sm:mt-0">
                        LEARN MORE
                    </a>

                </div>
            </div>
        </div>
    </div>

</section>


<section
    class="w-full bg-[#F15A29] bg-[url('{{ asset('img/img-bg-dots-1.png') }}')] bg-no-repeat bg-cover pb-0 md:pb-24">
    <div class="mx-auto px-7 sm:px-20">
        <div class="overflow-hidden">
            <!-- Mobile: Horizontal Scroll with 2 images visible at a time -->
            <div class="md:hidden">
                <div class="flex flex-col justify-center items-start w-full">
                    <h2 class="text-5xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mt-8">YUME Artists</h2>

                    <p class="text-md sm:text-lg md:text-xl mt-4 mt-5 max-w-3xl">
                        Meet the rising stars shaping the future of music. YUME’s
                        <span class="hidden sm:inline-block"> <br/> </span>
                        global community is discovering tomorrow’s chart-toppers
                        <span class="hidden sm:inline-block"> <br/> </span>
                        today. Join our roster of talented artists and take the first step
                        <span class="hidden sm:inline-block"> <br/> </span>
                        toward living your dream.
                    </p>
                </div>

                <div class="flex overflow-x-auto py-8 scrollbar-hide snap-x snap-mandatory">
                    @foreach (range(1, 5) as $index)
                        <div class="relative overflow-hidden rounded-xl flex-none w-[calc(50%-0.5rem)] mx-1 snap-center"
                             style="aspect-ratio: 3/4;">
                            <img src="{{ asset("img/new-yume-artist-$index.png") }}"
                                 class="w-full h-full object-contain"
                                 alt="YUME Artist {{ $index }}">
                        </div>
                    @endforeach
                </div>


                <div class="flex justify-center sm:justify-end w-full mt-2 mb-8">
                    <div class="flex justify-center sm:justify-end w-full">
                        <a href="{{ route('artist') }}"
                           class="inline-block bg-[#121212] text-white font-bold py-4 px-8 sm:px-16 rounded-full text-base sm:text-lg hover:opacity-90 transition text-center whitespace-nowrap">
                            GET PUBLISHED FOR FREE
                        </a>
                    </div>
                </div>

            </div>
            <div class="relative w-full hidden md:grid grid-cols-1 md:grid-cols-2 gap-2 items-start">
                <!-- Left Side Image Column -->
                <div class="relative flex flex-col sm:flex-row items-center gap-4 md:gap-6 w-full h-full">
                    <!-- First image with top margin -->
                    <img src="{{ asset('img/yume-artist-4.png') }}"
                         class="w-full max-w-[210px] sm:w-48 md:w-64 h-full object-contain sm:object-cover sm:relative sm:bottom-0 mt-8 sm:mt-40"
                         alt="Artist 1">

                    <!-- Middle image, aligned at the top -->
                    <img src="{{ asset('img/yume-artist-2.png') }}"
                         class="w-full max-w-[210px] sm:w-48 h-full object-contain sm:object-cover z-10 sm:relative sm:bottom-0"
                         alt="Artist 2">

                    <!-- Third image with top margin -->
                    <img src="{{ asset('img/yume-artist-3.png') }}"
                         class="w-full max-w-[210px] sm:w-48 h-full object-contain sm:object-cover sm:relative sm:bottom-0 mt-8 sm:mt-40"
                         alt="Artist 3">
                </div>

                <!-- Right Side Content -->
                <div class="text-white text-center md:text-left space-y-6 w-full h-full flex flex-col">
                    <!-- Top Banner -->
                    <div class="w-full h-24 sm:h-32 bg-[#6E499D] flex items-center justify-center mt-20">
                        <img src="{{ asset('img/yume-artist-5.png') }}"
                             class="w-full h-24 sm:h-32 object-cover" style="object-position: center 10%;"
                             alt="Top Banner">
                    </div>

                    <!-- Text Content -->
                    <div class="flex flex-col justify-center items-center text-center">
                        <div class="w-full max-w-3xl flex flex-col items-center sm:items-end">
                            <h2 class="text-6xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-center sm:text-right">
                                YUME Artists
                            </h2>

                            <p class="text-md sm:text-lg md:text-xl text-start sm:text-end mt-4">
                                Meet the rising stars shaping the future of music. YUME’s<br/>
                                global community is discovering tomorrow’s chart-toppers<br/>
                                today. Join our roster of talented artists and take the first step<br/>
                                toward living your dream.
                            </p>

                            <a href="{{ route('artist') }}"
                               class="mt-5 inline-block px-6 sm:px-8 py-4 sm:py-6 bg-[#121212] text-white text-sm sm:text-lg md:text-xl font-semibold rounded-full hover:opacity-90 transition text-center w-full sm:w-auto">
                                GET PUBLISHED FOR FREE
                            </a>
                        </div>
                    </div>
                    <!-- Bottom Banner -->
                    <img src="{{ asset('img/yume-artist-1.png') }}"
                         class="w-full h-24 sm:h-32 object-cover" style="object-position: center 10%;" alt="Top Banner">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient-to-b from-[#F15A29] to-white py-12">
    <div class="flex flex-col md:flex-row items-center justify-center md:space-x-12 space-y-8 md:space-y-0 px-4">
        <!-- Logo Section -->
        <div class="text-center md:text-left p-10">
            <p class="text-start text-4xl sm:text-3xl md:text-5xl text-[#F15A29] mb-2">Listen to:</p>

            <div class="mt-10">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('img/logo-yume.png') }}" alt="YUME Logo" class="h-13 sm:h-20 inline-block">
                </a>
            </div>
        </div>

        <!-- YouTube Playlist -->
        <div class="w-full max-w-xl mx-auto sm:pl-0 md:pl-8">
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


<section
    class="relative pt-8 text-white px-4 sm:px-8 overflow-hidden bg-no-repeat bg-cover
           bg-gradient-to-r from-[#6B7064] to-[#867B6C]
           sm:bg-[url('{{ asset('img/img-home-4.png') }}?v={{ filemtime(public_path('img/img-home-4.png')) }}')]">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/15 z-10 pointer-events-none"></div>

    <!-- Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto z-20 pt-10 pb-10">
        <div class="flex flex-col lg:flex-row justify-between space-y-12 lg:space-y-0 lg:space-x-10">
            <!-- Left Text Section -->
            <div class="text-left max-w-xl px-4 sm:px-6 space-y-8 sm:space-y-20 text-center lg:text-left">
                <h2 class="text-start sm:text-start md:text-start text-5xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold leading-tight">
                    Finally, your<br/>
                    passion for<br/>
                    music pays.
                </h2>
                <p class="text-md sm:text-lg text-base text-start text-2xl leading-relaxed sm:text-xl md:text-xl lg:text-2xl">
                    YUME makes a true music listener's<br class="hidden sm:block"/> dream come true: to be able to<br
                        class="hidden sm:block"/>
                    discover and support artists; and be<br class="hidden sm:block"/> rewarded for doing so.
                </p>

            </div>
            <div
                class="bg-black/60 backdrop-blur-sm border border-gray-300 rounded-xl p-4 sm:p-6 shadow-lg w-full max-w-sm mx-auto">
                <div class="flex flex-col items-center space-y-8 text-center px-4 sm:px-5 py-4">

                    <div class="space-y-2 flex flex-col items-center">
                        <img src="{{ asset('img/ic-headphone-1.png') }}" alt="Headphone Icon"
                             class="w-12 sm:w-16 h-auto"/>
                        <div class="text-xl sm:text-2xl font-extrabold text-[#F15A29]">Freemium Account</div>
                        <p class="text-sm sm:text-base leading-relaxed text-white">
                            With a FREE account, get a chance to<br/>
                            receive exclusive access to concerts,<br/>
                            limited edition merchandise, or VIP experiences.
                        </p>
                    </div>

                    <div class="space-y-2 flex flex-col items-center">
                        <img src="{{ asset('img/ic-headphone.png') }}" alt="Headphone Icon"
                             class="w-16 sm:w-20 h-auto"/>
                        <div class="text-xl sm:text-2xl font-extrabold text-[#F15A29]">Premium Account</div>
                        <p class="text-sm sm:text-base leading-relaxed text-white">
                            With a PREMIUM Membership, earn<br/>
                            income when you promote the artists<br/>
                            and help grow the YUME community.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#131c26] text-white py-20 px-4">
    <div class="max-w-7xl mx-auto border-2 border-[#f15a29] rounded-3xl p-10 text-center space-y-10">

        <!-- Header Text -->
        <h2 class="text-6xl sm:text-7xl font-extrabold text-[#f15a29]">
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
        <div class="flex justify-center">
            <a href="https://backoffice.yume.global/signup_process.php"
               class="bg-[#f15a29] text-white font-bold sm:text-lg md:text-xl px-16 py-6 rounded-full hover:bg-[#d84e23] transition whitespace-nowrap">
                CREATE AN ACCOUNT
            </a>
        </div>
    </div>
</section>

<section class="relative bg-white text-black pt-20 pb-10 px-6 overflow-hidden">
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
        <div class="container mx-auto px-6 md:px-12 lg:px-20 pt-10 pb-0 md:pb-10">
            <!-- Title Centered -->
            <div class="text-center pb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-yume-orange">
                    In The NEWS
                </h2>
            </div>

            <!-- News Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <a href="https://www.wicz.com/story/50475038/yume-unveils-game-changing-streaming-and-music-publishing-platform"
                       target="_blank">
                        <img src="{{ asset('img/img-news-1.png') }}" alt="YUME News 1" class="w-full">
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <a href="https://philippines-startup.biz/%e3%83%97%e3%83%ac%e3%82%b9%e3%83%aa%e3%83%aa%e3%83%bc%e3%82%b9/?t=yume-sets-the-stage-for-a-more-rewarding-music-experience-for-filipino-music-listeners&amp;rid=1547"
                       target="_blank">
                        <img src="{{ asset('img/img-news-2.png') }}" alt="YUME News 2" class="w-full">
                    </a>
                </div>
            </div>
        </div>


    </div>
</section>
<section id="feature-sections" class="bg-white py-5">
    <div class="container mx-auto px-6">
        <!-- Header with lines and laurel -->
        <div class="flex items-center justify-center mb-10 relative">

            <!-- Lines -->
            <div class="flex-grow border-t border-gray-300 mx-4"></div>

            <h2 class="text-md md:text-lg font-bold text-gray-900 tracking-widest text-center">AS SEEN ON</h2>

            <div class="flex-grow border-t border-gray-300 mx-4"></div>

        </div>

        <!-- Logos -->
        <div class="flex flex-wrap justify-center items-center gap-6">
            <a href="https://www.benzinga.com/pressreleases/24/02/ab37217186/yume-unveils-game-changing-streaming-and-music-publishing-platform"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/ec881fff-1d06-43da-18e1-4460b8922c00/public"
                    alt="Featured on Benzinga"
                    class="w-20 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.barchart.com/story/news/24209395/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/d1d24201-6f48-4c9b-6ed2-46464eac1900/public"
                    alt="Featured on BarChart"
                    class="w-20 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.theglobeandmail.com/investing/markets/markets-news/GetNews/24209404/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/7acfc7a6-2b16-4ba6-01d5-96b99d462f00/public"
                    alt="Featured on The Globe And Mail"
                    class="w-20 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.wicz.com/story/50475038/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/3fc4af63-e906-4112-d141-d504c6ea5c00/public"
                    alt="Featured on FOX 40"
                    class="w-20 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.newschannelnebraska.com/story/50475038/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/31f90197-ad2e-4772-b420-56e60b9b4a00/public"
                    alt="Featured on NCN"
                    class="w-20 h-auto transition hover:scale-105">
            </a>

            <a href="http://business.starkvilledailynews.com/starkvilledailynews/markets/article/getnews-2024-2-20-yume-unveils-game-changing-streaming-and-music-publishing-platform/"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/5c25786a-6267-4a1d-bcb7-3ccaa5676700/public"
                    alt="Featured on Starkville Daily News"
                    class="w-20 h-auto transition hover:scale-105">
            </a>

            <a href="http://markets.chroniclejournal.com/chroniclejournal/article/getnews-2024-2-20-yume-unveils-game-changing-streaming-and-music-publishing-platform/"
               target="_blank" class="text-white hover:opacity-80 transition">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/ac708810-3bf8-4cd0-f934-a3f51cd64e00/public"
                    alt="Featured on The Chronicle Journal"
                    class="w-20 h-auto transition hover:scale-105">
            </a>
        </div>


        <!-- Footer text -->
        <div class="text-center mt-8">
            <p class="text-gray-500 text-sm font-semibold tracking-widest uppercase">And over 400 news sites</p>
            <p class="text-gray-400 text-xs mt-1">
                ✅ Verified by
                <a href="https://www.brandpush.co?utm_source=Client+Referral&utm_medium=Trust+Badge&utm_campaign=Trust+Badge&utm_content=1708135500624"
                   target="_blank" class="text-blue-500 hover:underline">BrandPush.co</a>
            </p>
        </div>
    </div>
</section>


@include('layouts.footer')
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

    document.addEventListener('DOMContentLoaded', function () {
        const images = document.querySelectorAll('img');

        images.forEach(img => {
            // Skip only the one with class 'exclude-transition'
            if (!img.classList.contains('exclude-transition')) {
                img.style.opacity = 0;
                img.style.transition = "opacity 1s ease-in-out";
            }
        });

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('exclude-transition')) {
                    entry.target.style.opacity = 1;
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        images.forEach(img => {
            if (!img.classList.contains('exclude-transition')) {
                observer.observe(img);
            }
        });
    });

</script>
</body>
</html>
