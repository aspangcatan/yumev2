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

        #slider-container {
        position: relative;
        }
        #slider {
        position: absolute;
        left: 0;
        user-select: none;
        }
    </style>
</head>

<body class="bg-black text-white">
<!-- Hero Section -->
@include('layouts.header', ['active' => 'signin'])

<section 
    class="relative bg-cover bg-center bg-no-repeat px-3 md:px-20 text-black"
    style="background-image: url('{{ asset('img/pexels-dmitry-demidov-515774-3784221.jpg') }}');"
>
  <!-- Main Content -->
  <main class="flex-grow flex items-center justify-center p-10 mt-16">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-800">Sign In</h2>

            <div>
                <input type="text" placeholder="Username" class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>
            <div class="mt-4">
                <input type="password" placeholder="Password" class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>

            <!-- SLIDE TO VERIFY -->
            <div class="mt-4 w-full p-3 border rounded-md bg-gray-100 shadow-md">
                <div id="slider-container" class="relative w-full h-12 bg-gray-200 rounded-md flex items-center">
                    <div id="slider" class="w-12 h-12 bg-gray-500 rounded-md flex justify-center items-center shadow-md text-white font-bold select-none cursor-pointer">
                        ➠
                    </div>
                    <p id="slide-text" class="absolute w-full text-center text-gray-700 font-semibold">
                        Slide to Verify!
                    </p>
                </div>
            </div>

            <!-- SUBMIT BUTTON -->
            <a href=""
               class="w-full mt-4 bg-orange-500 text-white py-2 rounded-md hover:bg-orange-600 text-center block cursor-pointer">
                Submit
            </a>

            <div class="text-center mt-3">
                <a id="openModalBtn" href="#" class="text-sm text-gray-600 hover:underline">Forgot Password?</a>
            </div>

            <p class="text-center text-xs text-gray-500 mt-6">
                Current System Time:<br>25 Feb 2025, Tue 10:25:00 PM (GMT -8)
            </p>
        </div>
    </main>
</section>
<!-- Small Script for Mobile Menu -->
<script>
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('slider');
    const container = document.getElementById('slider-container');
    const text = document.getElementById('slide-text');
    let isDragging = false;
    let startX;
    let maxOffset = container.offsetWidth - slider.offsetWidth;
    let verified = false;

    // Set slider to absolute if not already
    slider.style.position = 'absolute';
    slider.style.left = '0px';

    slider.addEventListener('mousedown', (e) => {
        if (verified) return;
        isDragging = true;
        startX = e.clientX - slider.offsetLeft;
        slider.style.transition = 'none';
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging || verified) return;

        let newLeft = e.clientX - startX;
        newLeft = Math.max(0, Math.min(newLeft, maxOffset));
        slider.style.left = newLeft + 'px';

        if (newLeft >= maxOffset) {
            isDragging = false;
            verified = true;
            slider.style.left = maxOffset + 'px';
            slider.style.backgroundColor = '#16a34a'; // green
            text.textContent = 'Verified!';
            text.style.color = '#16a34a';
        }
    });

    document.addEventListener('mouseup', () => {
        if (!isDragging || verified) return;
        let left = parseInt(slider.style.left || 0);
        if (left < maxOffset) {
            slider.style.transition = 'left 0.3s';
            slider.style.left = '0px';
        }
        isDragging = false;
    });
});
</script>


</body>
</html>
