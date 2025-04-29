<header class="flex justify-between items-center p-6 max-w-7xl mx-auto relative">
    <!-- Left Menu -->
    <nav class="hidden md:flex items-center space-x-8 absolute left-6">
        <a href="{{ route('index') }}" class="{{ ($active ?? '') === 'home' ? 'text-orange-500' : '' }}">Home</a>
        <a href="{{ route('artist') }}" class="{{ ($active ?? '') === 'artist' ? 'text-orange-500' : '' }}">Artists</a>
        <a href="{{ route('listener') }}" class="{{ ($active ?? '') === 'listener' ? 'text-orange-500' : '' }}">Listeners</a>
    </nav>

    <!-- Center Logo -->
    <div class="flex justify-center w-full">
        <a href="{{ route('index') }}">
            <img src="{{ asset('img/logo-yume.png') }}" alt="YUME Logo" class="h-8">
        </a>
    </div>

    <!-- Right Menu -->
    <nav class="hidden md:flex items-center space-x-8 absolute right-6">
        <a href="{{ route('reward') }}" class="{{ ($active ?? '') === 'reward' ? 'text-orange-500' : '' }}">Rewards</a>
        <a href="{{ route('faq') }}" class="{{ ($active ?? '') === 'faq' ? 'text-orange-500' : '' }}">FAQ</a>
        <a href="{{ route('signin') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-full transition">Sign In</a>
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
    <a href="{{ route('index') }}" class="block {{ ($active ?? '') === 'home' ? 'text-orange-500' : 'text-white' }}">Home</a>
    <a href="{{ route('artist') }}" class="block {{ ($active ?? '') === 'artist' ? 'text-orange-500' : 'text-white' }}">Artists</a>
    <a href="{{ route('listener') }}" class="block {{ ($active ?? '') === 'listener' ? 'text-orange-500' : 'text-white' }}">Listeners</a>
    <a href="{{ route('reward') }}" class="block {{ ($active ?? '') === 'reward' ? 'text-orange-500' : 'text-white' }}">Rewards</a>
    <a href="{{ route('faq') }}" class="block {{ ($active ?? '') === 'faq' ? 'text-orange-500' : 'text-white' }}">FAQ</a>
    <a href="{{ route('signin') }}" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-full">Sign In</a>
</div>
