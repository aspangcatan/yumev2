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
@include('layouts.header', ['active' => 'reward'])


<section class="relative min-h-[80vh] flex items-center justify-start px-8 bg-black text-white overflow-hidden">
  <!-- Background Image -->
  <img src="{{ asset('img/combinedpicture.jpg') }}" alt="Background Image"
     class="absolute inset-0 w-full h-full object-contain" />
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
