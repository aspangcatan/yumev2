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
@include('layouts.header', ['active' => 'listener'])

<section 
    class="relative bg-cover bg-no-repeat text-white" 
    style="background-image: url('{{ asset('img/pexels-mart-production-8885424.jpg') }}'); background-position: center 30%;"
>
    <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Optional dark overlay -->

    <div class="relative z-10 max-w-6xl mx-auto px-4 py-20 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="text-center md:text-left">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                <span class="block">ANYONE CAN</span>
                <span class="block text-orange-500">TURN BEATS</span>
                <span class="block">INTO BUCKS</span>
            </h1>
            <a 
                href="#"
                class="mt-6 inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-full transition"
            >
                DOWNLOAD THE FREE APP NOW
            </a>
        </div>
    </div>
</section>


<section class="bg-[#fdf9fb] py-16 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12"> 
        <!-- Image (Placeholder) -->
        <div class="w-full md:w-1/2 flex justify-center">
            <img 
                src="{{ asset('img/editedmanwithguitar.jpg') }}" 
                alt="Person with guitar" 
                class="rounded-full shadow-lg w-[300px] h-[300px] object-cover"
                style="clip-path: ellipse(70% 50% at 50% 50%);"
            />
        </div>

        <!-- Content -->
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h2 class="text-3xl md:text-4xl font-extrabold text-orange-500 leading-snug">
                Download The App <br>
                Subscribe & Earn.
            </h2>
            <p class="text-gray-800 mt-4 font-medium">
                LOVE MUSIC? MONETIZE IT WITH YUME.
            </p>

            <div class="mt-6 space-y-4 text-sm text-gray-700">
                <div>
                    <p class="font-semibold text-orange-500">Unlock Financial Freedom</p>
                    <ul class="list-disc list-inside ml-4">
                        <li>Stream songs, earn income, discover new artists</li>
                        <li>Share and amplify your earnings</li>
                        <li>Break free from traditional music consumption</li>
                    </ul>
                </div>

                <div>
                    <p class="font-semibold text-orange-500">Discover Limitless Earning Possibilities</p>
                    <ul class="list-disc list-inside ml-4">
                        <li>Download the App and create a Yume account</li>
                    </ul>
                </div>
            </div>

            <a 
                href="#" 
                class="mt-8 inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-full transition"
            >
                LEARN MORE
            </a>
        </div>
    </div>
</section>


<section 
    class="relative bg-cover bg-center bg-no-repeat px-3 md:px-20 text-black"
    style="background-image: url('{{ asset('img/backgroundimage.jpg') }}');"
>
    <!-- Light overlay to brighten the background -->
    <div class="absolute inset-0 bg-white bg-opacity-40"></div>

    <!-- Main content -->
    <div class="relative z-10 max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">

        <!-- Left Image -->
        <div class="flex justify-center">
            <img 
                src="{{ asset('img/portrait-teenage-girl-listening-music-smiling-removebg-preview.png') }}" 
                alt="Girl with headphones" 
                class="w-[220px] md:w-[320px] lg:w-[400px] max-w-none max-h-[500px] object-contain scale-90"
            />
        </div>

        <!-- Center Content -->
        <div class="w-full md:w-2/4 text-center md:text-left">
            <h2 class="text-3xl md:text-4xl font-extrabold text-orange-500 leading-snug">
                Choose A Plan <br>
                That’s Right For You.
            </h2>
            <p class="mt-4 text-base font-medium text-gray-700">
                5 Flexible Plans for Music Lovers
            </p>
            <div class="mt-6 text-sm text-gray-800 space-y-2">
                <p class="text-orange-500 font-semibold">Plan Upgrade Option</p>
                <ul class="list-disc list-inside ml-4">
                    <li>Upgrade from Freemium, Student, Senior, or Basic to Premium anytime</li>
                    <li>Pay only the difference</li>
                    <li>Streaming points and earnings carry over</li>
                </ul>
            </div>
        </div>

        <!-- Right Image -->
        <div class="flex justify-center">
        <img 
                src="{{ asset('img/pexels-sound-on-3394667-removebg-preview.png') }}" 
                alt="Boy with headphones" 
                class="w-[220px] md:w-[320px] lg:w-[400px] max-w-none max-h-[500px] object-contain mb-10"
            />
        </div>
</section>


<section class="bg-[#121926] text-white py-12 px-4">
  <div class="text-center mb-10">
    <h2 class="text-3xl md:text-4xl font-bold text-orange-500 mb-2">
      Choose A Plan That’s Right For You
    </h2>
    <p class="text-sm md:text-base text-white/80">
      5 Flexible Plans For Music Lovers
    </p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 max-w-7xl mx-auto">
    <!-- FREEMIUM -->
    <div class="bg-white text-[#121926] rounded-xl shadow p-4 flex flex-col justify-between">
      <div>
        <h3 class="text-lg font-bold text-orange-600">FREEMIUM</h3>
        <p class="text-sm">No Activation Fee</p>
        <p class="text-3xl font-bold text-orange-600 my-2">$0</p>
        <p class="text-xs mb-2">No Annual Fee</p>
        <br>
        <p class="text-xs mb-2">NO INCOME:</p>
        <ul class="text-sm list-disc list-inside space-y-1 text-gray-700">
          <li>Unlimited Streaming</li>
          <li>Discover New Artists</li>
          <li>Accumulate Streaming Points</li>
        </ul>
      </div>
      <button class="mt-4 bg-orange-500 hover:bg-orange-600 text-white text-sm py-2 rounded-full">
        LEARN MORE
      </button>
    </div>

    <!-- STUDENT -->
    <div class="bg-white text-[#121926] rounded-xl shadow p-4 flex flex-col justify-between">
      <div>
        <h3 class="text-lg font-bold text-orange-600">STUDENT</h3>
        <p class="text-sm">For 16–24 Years Old</p>
        <p class="text-3xl font-bold text-orange-600 my-2">$45</p>
        <p class="text-xs mb-2">One-Time Fee + $12.87/yr</p>
        <br>
        <p class="text-xs mb-2">2-WAYS TO EARN:</p>
        <ul class="text-sm list-disc list-inside space-y-1 text-gray-700">
          <li>Streaming Income</li>
          <li>Direct Referral Bonus</li>
          <li>Eligigle for Concert Ticket Promos</li>
        </ul>
      </div>
      <button class="mt-4 bg-orange-500 hover:bg-orange-600 text-white text-sm py-2 rounded-full">
        LEARN MORE
      </button>
    </div>

    <!-- SENIOR -->
    <div class="bg-white text-[#121926] rounded-xl shadow p-4 flex flex-col justify-between">
      <div>
        <h3 class="text-lg font-bold text-orange-600">SENIOR</h3>
        <p class="text-sm">For 60 and Older</p>
        <p class="text-3xl font-bold text-orange-600 my-2">$45</p>
        <p class="text-xs mb-2">One-Time Fee + $12.87/yr</p>
        <br>
        <p class="text-xs mb-2">2-WAYS TO EARN:</p>
        <ul class="text-sm list-disc list-inside space-y-1 text-gray-700">
          <li>Streaming Income</li>
          <li>Direct Referral Bonus</li>
          <li>Eligigle for Concert Ticket Promos</li>
        </ul>
      </div>
      <button class="mt-4 bg-orange-500 hover:bg-orange-600 text-white text-sm py-2 rounded-full">
        LEARN MORE
      </button>
    </div>

    <!-- BASIC -->
    <div class="bg-white text-[#121926] rounded-xl shadow p-4 flex flex-col justify-between">
      <div>
        <h3 class="text-lg font-bold text-orange-600">BASIC</h3>
        <p class="text-sm">For 16 and Over</p>
        <p class="text-3xl font-bold text-orange-600 my-2">$60</p>
        <p class="text-xs mb-2">One-Time Fee + $25.87/yr</p>
        <br>
        <p class="text-xs mb-2">2-WAYS TO EARN:</p>
        <ul class="text-sm list-disc list-inside space-y-1 text-gray-700">
          <li>Streaming Income</li>
          <li>Direct Referral Bonus</li>
          <li>Eligigle for Concert Ticket Promos</li>
        </ul>
      </div>
      <button class="mt-4 bg-orange-500 hover:bg-orange-600 text-white text-sm py-2 rounded-full">
        LEARN MORE
      </button>
    </div>

    <!-- PREMIUM -->
    <div class="bg-white text-[#121926] rounded-xl shadow p-4 flex flex-col justify-between">
      <div>
        <h3 class="text-lg font-bold text-orange-600">PREMIUM</h3>
        <p class="text-sm">For 16 and Over</p>
        <p class="text-3xl font-bold text-orange-600 my-2">$120</p>
        <p class="text-xs mb-2">One-Time Fee + $4.99/mo</p>
        <br>
        <p class="text-xs mb-2">FULL COMPENSATION PLAN:</p>
        <ul class="text-sm list-disc list-inside space-y-1 text-gray-700">
          <li>Ad-Free Streaming experience</li>
          <li>Stream Income</li>
          <li>Share & Earn</li>
          <li>Eligible for Concert Ticket Promos</li>
          <li>Early Access Privilege</li>
          <li>Discount on Merch purchases</li>
          <li>Discount on Product purchases</li>
          <li>Access to rewards programs</li>
        </ul>
      </div>
      <button class="mt-4 bg-orange-500 hover:bg-orange-600 text-white text-sm py-2 rounded-full">
        LEARN MORE
      </button>
    </div>
  </div>
</section>


<section class="relative bg-cover bg-center text-white px-6 md:px-12" style="background-image: url('{{ asset('img/editedbgimage.jpg') }}')">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-10">
    
    <!-- Left Content -->
    <div class="text-center lg:text-center lg:w-1/3">
      <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
        Subscribe.<br />
        Stream. Share.<br />
        Get Paid. Simple.
      </h2>
      <a href="#" class="inline-block mt-4 bg-orange-500 hover:bg-orange-600 text-white text-lg font-semibold py-3 px-6 rounded-full transition">
        CREATE YOUR ACCOUNT NOW
      </a>
    </div>

    <!-- Center Image -->
    <div class="lg:w-1/3 flex justify-center">
      <img 
        src="{{ asset('img/neweditedimage-removebg-preview.png') }}" 
        alt="Person streaming music" 
        class="w-[220px] md:w-[280px] lg:w-[320px] h-auto object-contain"
      />
    </div>

    <!-- Right Content -->
    <div class="text-white lg:w-1/3 text-sm md:text-base">
      <div class="mb-6">
        <h3 class="text-lg md:text-xl font-bold mb-2">Get Started Now!</h3>
        <ul class="list-disc list-inside space-y-1 text-white/90">
          <li>Download the free app</li>
          <li>Create a free YUME account</li>
          <li>Explore our music catalog</li>
          <li>Discover new artists</li>
          <li>Stream music and accumulate points</li>
        </ul>
      </div>
      <div>
        <h3 class="text-lg md:text-xl font-bold mb-2">Limitless Earnings</h3>
        <ul class="list-disc list-inside space-y-1 text-white/90">
          <li>Upgrade to a paid account</li>
          <li>Stream music and earn income</li>
          <li>Share and earn even more</li>
        </ul>
      </div>
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
