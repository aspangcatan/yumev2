<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YUME - Discover Fresh Music</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

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
@include('layouts.header', ['active' => 'artist'])

<section class="relative min-h-[66vh] flex items-center justify-start px-8 bg-black text-white overflow-hidden">
    <!-- Background Image (Mirrored) -->

    <picture >
      <!-- Mobile image -->
      <source media="(max-width: 639px)" srcset="{{ asset('img/13updated.png') }}">
      
      <!-- Default image (desktop and up) -->
      <img
        src="{{ asset('img/13.png') }}"
        alt="Background Image"
        class="absolute inset-0 w-full h-full object-cover"
      >
    </picture>
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-10"></div>

    <!-- Content on top -->
    <div class="relative z-10 max-w-2xl">
        <h1 class="text-4xl md:text-7xl font-extrabold leading-tight mb-8">
            MAKE MUSIC.<br>
            GET <span class="text-yume-orange">DISCOVERED</span>.<br>
            GET PAID.
        </h1>
        <a
          href="#join"
          class="inline-block bg-white text-yume-orange hover:bg-gray-200 font-bold py-4 px-12 rounded-full transition mb-2.5 md:mb-0"
        >
          JOIN AS ARTIST
        </a>
    </div>
</section>

<section class="relative min-h-[60vh] bg-white flex flex-col items-center justify-center px-8 text-center text-white overflow-hidden">

    <!-- Background Image -->
    <!-- <div class="absolute inset-0 bg-center bg-cover blur-sm" style="background-image: url('{{ asset('img/pexels-pixabay-164828.jpg') }}'); z-index: -2;"></div> -->

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black opacity-40 z-[-1]"></div>

    <!-- Content -->
    <h2 class="text-4xl md:text-6xl font-extrabold text-yume-orange mt-8 mb-6">
        What is Music Publishing?
    </h2>

    <p class="max-w-3xl text-lg text-gray-700 md:text-xl mb-4">
        Music publishing is a vital component of the music industry, encompassing the management and protection of musical compositions and their associated rights.
    </p>
    <p class="max-w-3xl text-lg text-gray-700 md:text-xl mb-10">
        It extends beyond printing sheet music to include licensing, royalty collection, and intellectual property protection.
    </p>

    <a href="#learn-more" class="inline-block bg-yume-orange hover:bg-orange-600 text-white font-bold py-4 px-12 rounded-full transition" style="margin-bottom:10px;">
        LEARN MORE
    </a>
</section>


<section
  class="bg-[url('{{ asset('img/14.png') }}')] bg-cover bg-center bg-[#3f2e33] py-15 px-6 md:px-20 "
>
<br>
<br>
    <!-- Key Components -->
    <div class="max-w-5xl mx-auto text-left space-y-10">
      <h3 class="text-2xl md:text-3xl font-extrabold text-yume-orange mb-3">
        Key Components
      </h3>
      <ul class="list-disc pl-5 md:pl-10 space-y-2 text-sm md:text-lg text-white">
        <li><strong>Licensing:</strong> Securing licenses for composition use in various mediums, such as recordings, performances and commercial projects.</li>
        <li><strong>Royalty Collection:</strong> Ensuring songwriters and composers receive compensation for their work’s use, involving tracking and collecting royalties.</li>
        <li><strong>Rights Management:</strong> Safeguarding composition rights, including copyright protection to ensure creators’ acknowledgment and compensation.</li>
        <li><strong>Exploitation of Intellectual Property:</strong> Actively seeking revenue opportunities from compositions, such as placements in movies, TV shows and commercials.</li>
        <li><strong>Administration:</strong> Handling business tasks, including contract negotiation, license management and royalty distribution.</li>
        <li><strong>Promotion and A&R:</strong> Scouting talent and supporting songwriters and artists.</li>
      </ul>
    </div>

    <!-- The Role of YUME -->
    <br>
    <br>
    <div class="max-w-5xl mx-auto text-left space-y-10">
      <h3 class="text-2xl md:text-3xl font-extrabold text-yume-orange mb-3">
        The Role of YUME
      </h3>

      <p class="text-sm md:text-lg text-white leading-relaxed">
        YUME empowers artists with a comprehensive platform to share their music worldwide ensuring listener support and encouragement.
        We provide cutting-edge tools for digital promotion, showcasing talent and electrifying live performances on the global stage.
      </p>
    </div>

    <!-- Key Benefits Include -->
    <br>
    <br>
    <div class="max-w-5xl mx-auto text-left space-y-10">
      <h3 class="text-2xl md:text-3xl font-extrabold text-yume-orange mb-3">
        Key Benefits Include
      </h3>
      <ul class="list-disc pl-5 md:pl-10 space-y-2 text-sm md:text-lg text-white">
        <li><strong>Global Reach:</strong> Publishing music on over 100 platforms, including Yume, Spotify, Apple Music and TikTok.</li>
        <li><strong>Revenue Streams:</strong> Empowering fans through rewards for listening support and engagement.</li>
        <li><strong>Artist Support:</strong> Providing resources, branding managers and performance insights.</li>
        <li><strong>Merchandising and NFT:</strong> Unlock additional layers of income through merchandise and NFTs.</li>
        <li><strong>Marketing and Events:</strong> Amplifying artist presence through campaigns and world-class live event bookings.</li>
      </ul>
    </div>
    <br>
    <br>
</section>

<section
  class="relative text-white bg-no-repeat bg-cover bg-center px-4 py-10"
  style="background-image: url('{{ asset('img/15.png') }}');"
>
  <div class="relative z-10 max-w-4xl mx-auto text-center">
    <h1 class="text-4xl md:text-4xl font-extrabold leading-tight">
      We’ll track down all of the publishing royalties you’re owed <span class="text-orange-500">worldwide.</span>
    </h1>
    <p class="text-lg md:text-xl font-medium mt-6 mb-4">
      No complicated forms. No boring legal stuff. Just more money in your pocket.
    </p>
  </div>

  <!-- Optional dark overlay for readability -->
  <div class="absolute inset-0 bg-black/40 z-0"></div>
</section>


<section class="flex flex-col items-center justify-center py-16 bg-[#fdf9fb] text-center px-2">

<div class="flex items-center justify-center flex-wrap gap-2 text-4xl md:text-6xl font-bold text-black">
  <span>Join the</span>

  <img src="{{ asset('img/logo-yume.png') }}" alt="Yume Logo" class="h-12 md:h-20 inline-block" />

  <span>Community</span>
</div>

</section>

<section class="bg-[url('{{ asset('img/16.png') }}')] bg-cover bg-center text-white px-6 py-16 text-center">
    <!-- Main Content -->
    <div class="max-w-5xl mx-auto text-left space-y-10">
        <!-- Block 1 -->
        <div>
          <h3 class="text-yume-orange text-2xl font-bold mb-2">Unlock Endless Opportunities</h3>
          <ul class="text-sm md:text-lg list-disc pl-5 space-y-1">
            <li>Celebrate Your Passion: Share your music with a community that acknowledges and celebrates your creativity.</li>
            <li>Recognize Your Talent: Gain the recognition you deserve for your unique sound and style.</li>
            <li>Contribute to Something Extraordinary: Every note, melody and beat contributes to a collective symphony that resonates within our vibrant community.</li>
          </ul>
        </div>

        <!-- Block 3 -->
        <div>
          <h3 class="text-yume-orange text-2xl font-bold mb-2">Benefits of Joining</h3>
          <ul class="text-sm md:text-lg list-disc pl-5 space-y-1">
            <li>Meticulous Music Management: Trust us to handle the business side, freeing you to focus on your craft.</li>
            <li>Global Reach: Publish your music on over 100 platforms, including YUME, Spotify, Apple Music and TikTok.</li>
            <li>Revenue Streams: Empower your fans through rewards for listening support and engagement.</li>
            <li>Maximize Your Earnings: Boost revenue through royalties, merchandising, NFTs, booked live performances and referrals.</li>
            <li>Artist Support: Access resources, branding managers to fuel your success.</li>
          </ul>
        </div>


        <!-- Block 2 -->
        <div>
            <h3 class="text-yume-orange text-2xl font-bold mb-2">Take the Leap</h3>
            <p class="text-sm md:text-lg pl-5">
                Join YUME and transform your musical aspirations into something truly exceptional. Let YUME be the stage where your music comes alive.
            </p>
        </div>

        <!-- Block 4 -->
        <div>
            <h3 class="text-yume-orange text-2xl font-bold mb-2">Embark on a Musical Odyssey</h3>
            <p class="text-sm md:text-lg pl-5">
                YUME awaits. Take the first step toward unlocking your full musical potential.
            </p>
        </div>
    </div>
</section>

<section class="relative bg-white bg-cover bg-center bg-no-repeat min-h-[120vh] flex text-center px-4 pb-4 sm:px-0 sm:pb-0" style="background-image: url('{{ asset('img/17.png') }}');">

  <div class="max-w-xl w-fit h-fit ml-0 sm:ml-48 mt-8 mb-8 p-8 border-2 border-black bg-white/10 backdrop-blur-md shadow-xl rounded-lg">
    <h1 class="text-2xl font-extrabold text-orange-600 uppercase">Artist Submission Form</h1>
    <h2 class="text-lg font-bold mt-1 mb-4 text-gray-800">Embark on a Musical Odyssey!</h2>
    <p class="text-gray-800 mb-2 text-sm md:text-lg">
      Ready to take your musical journey to unprecedented heights? Yume eagerly extends an invitation for you to express your interest in becoming part of our dynamic community, entrusting us with the meticulous management of your music.
    </p>
    <p class="text-gray-800 mb-2 text-sm md:text-lg">
      Whether you’re a visionary artist, a skilled songwriter, or an impassioned music enthusiast, Yume opens its doors to a world where your passion isn’t just acknowledged; it’s celebrated.
    </p>
    <p class="text-gray-800 mb-2 text-sm md:text-lg">
      Take the leap and join Yume, where every note, every melody, and every beat contributes to something extraordinary!
    </p>

    <form class="space-y-2">
      <input type="text" placeholder="Name*" class="w-full px-4 py-2 border border-black placeholder-gray-500 bg-white/80 focus:outline-none focus:ring-2 focus:ring-orange-400 text-gray-800" />
      <input type="email" placeholder="Email Address*" class="w-full px-4 py-2 border border-black placeholder-gray-500 bg-white/80 focus:outline-none focus:ring-2 focus:ring-orange-400 text-gray-800" />
      <input type="tel" placeholder="Phone*" class="w-full px-4 py-2 border border-black placeholder-gray-500 bg-white/80 focus:outline-none focus:ring-2 focus:ring-orange-400 text-gray-800" />
      <select class="w-full px-4 py-2 border border-black bg-white/80 text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-400">
        <option disabled selected>Please select country*</option>
        <option>United States</option>
        <option>Canada</option>
        <option>United Kingdom</option>
        <option>Australia</option>
        <option>Germany</option>
        <option>India</option>
        <option>Japan</option>
      <!-- Add more as needed -->
      </select>
      <textarea placeholder="Message*" rows="4" class="w-full px-4 py-2 border border-black placeholder-gray-500 bg-white/80 focus:outline-none focus:ring-2 focus:ring-orange-400 text-gray-800"></textarea>
          <!-- Submit Button -->
    <button type="submit" class="w-full bg-orange-700 text-white font-bold py-3 px-6 rounded-lg hover:bg-orange-900 transition">
      Submit
    </button>
    </form>
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
