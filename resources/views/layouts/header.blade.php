<header class="flex justify-between items-center p-6 max-w-7xl mx-auto relative">
    <!-- Left Menu -->
    <nav class="hidden md:flex items-center space-x-8 absolute left-6">
        <a href="{{ route('index') }}" class="{{ ($active ?? '') === 'home' ? 'text-orange-500' : '' }}">Home</a>
        <a href="{{ route('artist') }}" class="{{ ($active ?? '') === 'artist' ? 'text-orange-500' : '' }}">Artists</a>
        <a href="#" class="{{ ($active ?? '') === 'listener' ? 'text-orange-500' : '' }}">Listeners</a>
    </nav>

    <!-- Center Logo -->
    <div class="flex justify-center w-full">
        <img src="{{ asset("img/logo-yume.png") }}" alt="YUME Logo" class="h-8">
    </div>

    <!-- Right Menu -->
    <nav class="hidden md:flex items-center space-x-8 absolute right-6">
        <a href="#" class="{{ ($active ?? '') === 'rewards' ? 'text-orange-500' : '' }}">Rewards</a>
        <a href="#" class="{{ ($active ?? '') === 'faq' ? 'text-orange-500' : '' }}">FAQ</a>
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
    <a href="{{ route('index') }}" class="block text-white">Home</a>
    <a href="{{ route('artist') }}" class="block text-white">Artists</a>
    <a href="#" class="block text-white">Listeners</a>
    <a href="#" class="block text-white">Rewards</a>
    <a href="#" class="block text-white">FAQ</a>
    <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-full">Sign In</a>
</div>
