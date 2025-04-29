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
@include('layouts.header', ['active' => 'artist'])

<section class="relative min-h-[80vh] flex items-center justify-start px-8 bg-black text-white overflow-hidden">
    <!-- Background Image (Mirrored) -->
    <img src="{{ asset('img/pexels-cottonbro-7087170.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover opacity-70 scale-x-[-1]">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-10"></div>

    <!-- Content on top -->
    <div class="relative z-10 max-w-2xl">
        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-8">
            CREATE TRACKS.<br>
            <span class="text-yume-orange">GO VIRAL.</span><br>
            EARN REWARDS.
        </h1>
        <a href="#join" class="inline-block bg-white text-yume-orange hover:bg-gray-200 font-bold py-4 px-12 rounded-full transition">
            JOIN NOW
        </a>
    </div>
</section>

<section class="relative min-h-[60vh] flex flex-col items-center justify-center px-8 text-center text-white overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0 bg-center bg-cover blur-sm" style="background-image: url('{{ asset('img/pexels-pixabay-164828.jpg') }}'); z-index: -2;"></div>

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black opacity-40 z-[-1]"></div>

    <!-- Content -->
    <h2 class="text-4xl md:text-6xl font-extrabold text-yume-orange mt-8 mb-6">
        What is Music Publishing?
    </h2>

    <p class="max-w-3xl text-lg md:text-xl mb-4">
        Music publishing is a vital component of the music industry, encompassing the management and protection of musical compositions and their associated rights.
    </p>
    <p class="max-w-3xl text-lg md:text-xl mb-10">
        It extends beyond printing sheet music to include licensing, royalty collection, and intellectual property protection.
    </p>

    <a href="#learn-more" class="inline-block bg-yume-orange hover:bg-orange-600 text-white font-bold py-4 px-12 rounded-full transition">
        LEARN MORE
    </a>

</section>


<section class="bg-[#f6f6f6] py-20 px-6 md:px-20">
  <div class="max-w-5xl mx-auto text-left space-y-16">

    <!-- Key Components -->
    <div>
      <h3 class="text-2xl md:text-3xl font-extrabold text-yume-orange mb-6">
        Key Components
      </h3>
      <ul class="list-disc list-inside space-y-2 text-lg text-gray-700">
        <li><strong>Licensing:</strong> Securing licenses for composition use in various mediums, such as recordings, performances and commercial projects.</li>
        <li><strong>Royalty Collection:</strong> Ensuring songwriters and composers receive compensation for their work’s use, involving tracking and collecting royalties.</li>
        <li><strong>Rights Management:</strong> Safeguarding composition rights, including copyright protection to ensure creators’ acknowledgment and compensation.</li>
        <li><strong>Exploitation of Intellectual Property:</strong> Actively seeking revenue opportunities from compositions, such as placements in movies, TV shows and commercials.</li>
        <li><strong>Administration:</strong> Handling business tasks, including contract negotiation, license management and royalty distribution.</li>
        <li><strong>Promotion and A&R:</strong> Scouting talent and supporting songwriters and artists.</li>
      </ul>
    </div>

    <!-- The Role of YUME -->
    <div>
      <h3 class="text-2xl md:text-3xl font-extrabold text-yume-orange mb-6">
        The Role of YUME
      </h3>
      <p class="text-lg text-gray-700 leading-relaxed">
        YUME empowers artists with a comprehensive platform to share their music worldwide ensuring listener support and encouragement. 
        We provide cutting-edge tools for digital promotion, showcasing talent and electrifying live performances on the global stage.
      </p>
    </div>

    <!-- Key Benefits Include -->
    <div>
      <h3 class="text-2xl md:text-3xl font-extrabold text-yume-orange mb-6">
        Key Benefits Include
      </h3>
      <ul class="list-disc list-inside space-y-2 text-lg text-gray-700">
        <li><strong>Global Reach:</strong> Publishing music on over 100 platforms, including Yume, Spotify, Apple Music and TikTok.</li>
        <li><strong>Revenue Streams:</strong> Empowering fans through rewards for listening support and engagement.</li>
        <li><strong>Artist Support:</strong> Providing resources, branding managers and performance insights.</li>
        <li><strong>Merchandising and NFT:</strong> Unlock additional layers of income through merchandise and NFTs.</li>
        <li><strong>Marketing and Events:</strong> Amplifying artist presence through campaigns and world-class live event bookings.</li>
      </ul>
    </div>

  </div>
</section>


<section class="relative bg-cover bg-center bg-no-repeat min-h-[70vh] flex items-center justify-center text-center" style="background-image: url('{{ asset('img/pexels-maorattias-5175347.jpg') }}');">
  <div class="bg-black/50 w-full h-full absolute top-0 left-0"></div>

  <div class="relative z-10 px-4">
    <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
      We’ll track down all of the publishing <br class="hidden md:block" />
      royalties you’re owed <span class="text-yume-orange">worldwide.</span>
    </h1>
    <p class="mt-6 text-lg md:text-xl text-white">
      No complicated forms. No boring legal stuff. Just more money in your pocket.
    </p>
  </div>
</section>

<section class="flex flex-col items-center justify-center py-16 bg-[#fdf9fb] text-center px-4">

    <div class="flex items-center justify-center flex-wrap gap-2 text-2xl md:text-4xl font-bold text-black">
        <span>Join the</span>

        <img src="{{ asset('img/logo-yume.png') }}" alt="Yume Logo" class="h-10 md:h-16 inline-block" />

        <span>Community</span>
    </div>

</section>

<section class="bg-[#1f2630] text-white px-6 py-16 text-center">
    <!-- Intro Paragraph -->
    <p class="max-w-4xl mx-auto mb-12 text-lg md:text-xl">
        Elevate your musical journey to new heights with YUME. We invite visionary artists, skilled songwriters and passionate music enthusiasts to join our dynamic community.
    </p>
    <!-- Main Content -->
    <div class="max-w-5xl mx-auto text-left space-y-10">
        <!-- Block 1 -->
        <div>
            <h3 class="text-yume-orange text-2xl font-bold mb-2">Unlock Endless Opportunities</h3>
            <ul class="space-y-1">
                <li>Celebrate Your Passion: Share your music with a community that acknowledges and celebrates your creativity.</li>
                <li>Recognize Your Talent: Gain the recognition you deserve for your unique sound and style.</li>
                <li>Contribute to Something Extraordinary: Every note, melody and beat contributes to a collective symphony that resonates within our vibrant community.</li>
            </ul>
        </div>

        <!-- Block 2 -->
        <div>
            <h3 class="text-yume-orange text-2xl font-bold mb-2">Take the Leap</h3>
            <p>
                Join YUME and transform your musical aspirations into something truly exceptional. Let YUME be the stage where your music comes alive.
            </p>
        </div>

        <!-- Block 3 -->
        <div>
            <h3 class="text-yume-orange text-2xl font-bold mb-2">Benefits of Joining</h3>
            <ul class="space-y-1">
                <li>Meticulous Music Management: Trust us to handle the business side, freeing you to focus on your craft.</li>
                <li>Global Reach: Publish your music on over 100 platforms, including YUME, Spotify, Apple Music and TikTok.</li>
                <li>Revenue Streams: Empower your fans through rewards for listening support and engagement.</li>
                <li>Maximize Your Earnings: Boost revenue through royalties, merchandising, NFTs, booked live performances and referrals.</li>
                <li>Artist Support: Access resources, branding managers to fuel your success.</li>
            </ul>
        </div>

        <!-- Block 4 -->
        <div>
            <h3 class="text-yume-orange text-2xl font-bold mb-2">Embark on a Musical Odyssey</h3>
            <p>
                YUME awaits. Take the first step toward unlocking your full musical potential.
            </p>
        </div>
    </div>
</section>

<section class="w-full flex items-center justify-center bg-[#ffc266] px-4 py-8 relative overflow-hidden">
  <!-- Background Image on the right -->
  <div class="absolute right-0 top-0 bottom-0 w-1/2 bg-no-repeat bg-contain bg-center" style="background-image: url('{{ asset('img/front-view-happy-woman-with-headphones.jpg') }}');"></div>

  <!-- Content/Form -->
  <div class="relative z-10 max-w-7xl w-full flex justify-start pl-16">
    
  <div class="bg-white border border-orange-400 rounded-3xl p-6 shadow-lg max-w-md w-full">
      
      <h2 class="text-xl font-extrabold text-orange-600 text-center">ARTIST SUBMISSION FORM</h2>
      <h3 class="text-sm font-semibold text-center mb-2">EMBARK ON A MUSICAL ODYSSEY!</h3>
    
      <p class="text-center text-xs text-gray-600 mb-2 leading-snug">
        Ready to take your musical journey to new heights? Yume invites you to express your interest in joining our dynamic community.
      </p>
    
      <p class="text-center text-xs text-gray-600 mb-4 leading-snug">
        Whether you're an artist, songwriter, or music enthusiast, Yume celebrates your passion.
      </p>
    
      <form class="space-y-3">
        <input type="text" placeholder="Name*" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-orange-500 text-black text-xs" required>
    
        <input type="email" placeholder="Email Address*" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-orange-500 text-black text-xs" required>
    
        <div class="flex gap-2">
          <select class="w-1/3 px-2 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-orange-500 text-black text-xs">
            <option>us +1</option>
            <option>uk +44</option>
            <option>ind +91</option>
          </select>
          <input type="text" placeholder="Phone*" class="w-2/3 px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-orange-500 text-black text-xs" required>
        </div>
    
        <select class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-orange-500 text-black text-xs" required>
          <option>Please select country*</option>
          <option>United States</option>
          <option>United Kingdom</option>
          <option>India</option>
        </select>
    
        <textarea placeholder="Message*" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-orange-500 text-black text-xs" rows="2" required></textarea>
    
        <button type="submit" class="w-full bg-black text-white py-2 rounded-md hover:bg-gray-900 transition text-xs">Submit</button>
      </form>
    
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
