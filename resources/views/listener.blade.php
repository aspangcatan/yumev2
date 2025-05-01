<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YUME - Discover Fresh Music</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
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

<section class="relative min-h-[66vh] flex items-center justify-start px-8 bg-black text-white overflow-hidden">
  <!-- Background Image -->
  <img 
    src="{{ asset('img/18.png') }}" 
    alt="Background Image" 
    class="absolute inset-0 w-full h-[300px] sm:h-[500px] object-cover"
  >

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-10"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-2xl ml-0 sm:ml-24">
    <div class="text-left">
      <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
        <span class="block">ANYONE CAN</span>
        <span class="block">TURN <span class="text-orange-600">BEATS</span></span>
        <span class="block">INTO BUCKS</span>
      </h1>
      <a 
        href="#"
        class="mt-6 inline-block bg-orange-600 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-full transition"
      >
        DOWNLOAD THE APP NOW
      </a>
    </div>
  </div>
</section>

<section 
  class="relative bg-cover bg-center bg-no-repeat px-3 md:px-20 py-16 text-white"
  style="background-image: url('{{ asset('img/19.png') }}');"
>
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
    <!-- Left Content -->
    <div class="max-w-xl">
      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
        Download The App<br />
        Subscribe & Earn.
      </h1>
      <h2 class="text-2xl text-orange-500 font-semibold mb-6">
        Love music?<br />
        Monetize it with Yume.
      </h2>

      <div class="space-y-6 text-white text-lg">
        <div>
          <h3 class="font-bold">Unlock Financial Freedom</h3>
          <ul class="list-disc list-inside text-sm">
            <li>Stream songs, earn income, discover new artists</li>
            <li>Share and amplify your earnings</li>
            <li>Break free from traditional music consumption</li>
          </ul>
        </div>
        <div>
          <h3 class="font-bold">Discover Limitless Earning Possibilities</h3>
          <ul class="list-disc list-inside text-sm">
            <li>Download the App and create a Yume account</li>
          </ul>
        </div>
      </div>

      <a href="#" class="mt-8 inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-full transition">
        LEARN MORE
      </a>
    </div>

    <!-- Right Image (Phone Mockup) -->
    <div class="w-full md:w-[340px]">
      <img src="{{ asset('img/phone-mockup.png') }}" alt="Phone Mockup" class="w-full h-auto">
    </div>
  </div>
</section>


<section 
  class="relative text-white bg-cover bg-center py-16 px-6 md:px-12"
  style="background-image: url('{{ asset('img/20.png') }}');"
>
  <div class="flex justify-end items-start">
    <div class="max-w-2xl text-left">
      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
        Choose The Right<br />
        Plan For You.
      </h1>
      <h2 class="text-2xl md:text-3xl font-semibold mt-4 text-orange-500">
        5 Flexible plans for music lovers.
      </h2>

      <div class="mt-8 text-sm md:text-base text-white">
        <h3 class="font-semibold mb-2">Subscription Plan Upgrade Option</h3>
        <ul class="list-disc list-outside space-y-1 text-gray-100 pl-5">
          <li>Upgrade from either Freemium, Student, Senior, or Basic to Premium anytime</li>
          <li>Pay only the difference</li>
          <li>Streaming points and earnings carry over</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<section class="bg-gradient-to-l from-gray-100 to-white py-16 px-6">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-5 gap-6">

    <!-- FREEMIUM -->
    <div class="bg-black bg-opacity-60 text-white p-6 rounded-md relative overflow-hidden">
      <img src="{{ asset('img/23.jpg') }}" alt="Freemium" class="absolute inset-0 w-full h-full object-cover opacity-30">
      <div class="absolute inset-0 bg-gradient-to-br from-black/80 to-black/40 z-0"></div>
      <div class="relative z-10">
        <h3 class="text-xl font-bold">FREEMIUM</h3>
        <p class="text-sm mb-4">FOR 16 AND OVER</p>
        <p class="text-6xl text-white" style="font-family: 'Bangers', cursive;">
            <span class="align-top text-3xl">$</span>0
        </p>
        <p class="mb-2">NO ACTIVATION FEE<br>No Annual Fee</p>
        <h4 class="text-sm font-semibold mt-4">NO INCOME:</h4>
        <ul class="text-sm list-disc list-inside">
          <li>Unlimited Streaming</li>
          <li>Discover New Artists</li>
          <li>Accumulate Streaming Points</li>
        </ul>
        <button class="mt-6 w-full bg-white text-orange-600 font-bold py-2 rounded-full">LEARN MORE</button>
      </div>
    </div>

    <!-- STUDENT -->
    <div class="bg-black bg-opacity-60 text-white p-6 rounded-md relative overflow-hidden">
      <img src="{{ asset('img/22.jpg') }}" alt="Student" class="absolute inset-0 w-full h-full object-cover opacity-30">
      <!-- Colored Gradient Overlay -->
       <div class="absolute inset-0 bg-gradient-to-br from-green-900/60 via-yellow-700/40 to-yellow-500/20 z-0"></div>
      <div class="relative z-10">
        <h3 class="text-xl font-bold">STUDENT</h3>
        <p class="text-sm mb-4">FOR 16–24 YEARS OLD</p>
        <p class="text-6xl text-white" style="font-family: 'Bangers', cursive;">
            <span class="align-top text-3xl">$</span>45
        </p>
        <p class="mb-2">ONE TIME ACTIVATION FEE<br>$12.87 annually</p>
        <h4 class="text-sm font-semibold mt-4">2-WAYS TO EARN:</h4>
        <ul class="text-xs list-disc list-inside">
          <li>Streaming Income</li>
          <li>Direct Referral Bonus</li>
          <li>Eligible for Concert Ticket Promos</li>
        </ul>
        <button class="mt-6 w-full bg-white text-orange-600 font-bold py-2 rounded-full">LEARN MORE</button>
      </div>
    </div>

    <!-- SENIOR -->
    <div class="bg-black bg-opacity-60 text-white p-6 rounded-md relative overflow-hidden">
      <img src="{{ asset('img/24.jpg') }}" alt="Senior" class="absolute inset-0 w-full h-full object-cover opacity-30">
      <div class="absolute inset-0 bg-gradient-to-br from-blue-800/60 via-purple-500/40 to-pink-400/20 z-0"></div>
      <div class="relative z-10">
        <h3 class="text-xl font-bold">SENIOR</h3>
        <p class="text-sm mb-4">FOR 60 AND OLDER</p>
        <p class="text-6xl text-white" style="font-family: 'Bangers', cursive;">
            <span class="align-top text-3xl">$</span>45
        </p>
        <p class="mb-2">ONE TIME ACTIVATION FEE<br>$12.87 annually</p>
        <h4 class="text-sm font-semibold mt-4">2-WAYS TO EARN:</h4>
        <ul class="text-xs list-disc list-inside">
          <li>Streaming Income</li>
          <li>Direct Referral Bonus</li>
          <li>Eligible for Concert Ticket Promos</li>
        </ul>
        <button class="mt-6 w-full bg-white text-orange-600 font-bold py-2 rounded-full">LEARN MORE</button>
      </div>
    </div>

    <!-- BASIC -->
    <div class="bg-black bg-opacity-60 text-white p-6 rounded-md relative overflow-hidden">
      <img src="{{ asset('img/25.jpg') }}" alt="Basic" class="absolute inset-0 w-full h-full object-cover opacity-30">
      <div class="absolute inset-0 bg-gradient-to-br from-pink-900/60 via-purple-600/40 to-orange-400/20 z-0"></div>
      <div class="relative z-10">
        <h3 class="text-xl font-bold">BASIC</h3>
        <p class="text-sm mb-4">FOR 25–59 YEARS OLD</p>
        <p class="text-6xl text-white" style="font-family: 'Bangers', cursive;">
            <span class="align-top text-3xl">$</span>60
        </p>
        <p class="mb-2">ONE TIME ACTIVATION FEE<br>$25.87 annually</p>
        <h4 class="text-sm font-semibold mt-4">2-WAYS TO EARN:</h4>
        <ul class="text-xs list-disc list-inside">
          <li>Streaming Income</li>
          <li>Direct Referral Bonus</li>
          <li>Eligible for Concert Ticket Promos</li>
        </ul>
        <button class="mt-6 w-full bg-white text-orange-600 font-bold py-2 rounded-full">LEARN MORE</button>
      </div>
    </div>

    <!-- PREMIUM -->
    <div class="bg-black bg-opacity-60 text-white p-6 rounded-md relative overflow-hidden">
      <img src="{{ asset('img/26.jpg') }}" alt="Premium" class="absolute inset-0 w-full h-full object-cover opacity-30">
      <!-- Colored Gradient Overlay -->
      <div class="absolute inset-0 bg-gradient-to-br from-red-800/60 via-orange-600/40 to-yellow-300/20 z-0"></div>
      <div class="relative z-10">
        <h3 class="text-xl font-bold">PREMIUM</h3>
        <p class="text-sm mb-4">FOR 16 AND OVER</p>
        <p class="text-6xl text-white" style="font-family: 'Bangers', cursive;">
            <span class="align-top text-3xl">$</span>120
        </p>
        <p class="mb-2">ONE TIME ACTIVATION FEE<br>$4.99 monthly subscription</p>
        <h4 class="text-sm font-semibold mt-4">FULL COMPENSATION PLAN:</h4>
        <ul class="text-xs list-disc list-inside">
          <li>Ad-Free Streaming Experience</li>
          <li>Streaming Income</li>
          <li>Share and Earn</li>
          <li>Eligible for Concert Ticket Promos</li>
          <li>Early Access Privileges</li>
          <li>Discounts on Merch Purchases</li>
          <li>Discount on Product Purchases</li>
          <li>Access to Rewards Program</li>
        </ul>
        <button class="mt-6 w-full bg-white text-orange-600 font-bold py-2 rounded-full">LEARN MORE</button>
      </div>
    </div>

  </div>
</section>

<section 
  class="relative text-white bg-cover bg-center py-2 px-6 md:px-12"
  style="background-image: url('{{ asset('img/27.png') }}');"
>
<div class="flex flex-col md:flex-row justify-between items-start px-10 py-16 space-y-12 md:space-y-0 md:space-x-10">
    <!-- Left Side: Get Started and Discover -->
    <div class="flex-1 space-y-10 ml-20">
        <!-- Get Started Now -->
        <div>
            <h2 class="text-lg font-semibold mb-3 text-gray-800">Get Started Now!</h2>
            <ul class="list-disc list-inside text-sm text-gray-800 space-y-1 ml-5">
                <li>Download the free app</li>
                <li>Create a free YUME account</li>
                <li>Explore our music catalog</li>
                <li>Discover new artists</li>
                <li>Stream music and accumulate streaming points</li>
            </ul>
        </div>

        <!-- Discover Limitless Earning Possibilities -->
        <div>
            <h2 class="text-gl font-semibold mb-3 text-gray-800">Discover Limitless Earning Possibilities</h2>
            <ul class="list-disc list-inside text-sm text-gray-800 space-y-1 ml-5">
                <li>Upgrade to a paid subscription account</li>
                <li>Stream music and start earning income</li>
                <li>Share and get paid even more</li>
            </ul>
        </div>

        <!-- CTA Button -->
        <div class="mt-6 w-full flex justify-center md:justify-start">
            <a href="#"
            class="bg-white text-orange-600 font-bold text-lg md:text-xl px-6 md:px-8 py-3 md:py-4 rounded-full shadow-md border-2 border-white hover:bg-orange-100 transition w-full max-w-xs text-center">
                CREATE AN ACCOUNT
            </a>
        </div>
    </div>

    <!-- Right Side: Main Title -->
    <div class="flex-2">
        <h3 class="text-2xl md:text-5xl font-extrabold leading-tight text-black">
            Subscribe. Stream. Share.
            <br>
            Get Paid. Simple.
        </h3>
    </div>
</div>
</section>

@include('layouts.footer')


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
