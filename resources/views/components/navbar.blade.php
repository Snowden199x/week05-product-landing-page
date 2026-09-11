<nav x-data="{ open: false }" class="bg-black border-b border-green-500/30 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex items-center gap-2">
                <span class="text-2xl">🖥️</span>
                <span class="text-xl font-bold text-green-400 font-mono tracking-wider">TechNest</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-gray-400 hover:text-green-400 transition"">Home</a>
                <a href="#features" class="text-gray-400 hover:text-green-400 transition">Features</a>
                <a href="#pricing" class="text-gray-400 hover:text-green-400 transition">Pricing</a>
                <a href="#testimonials" class="text-gray-400 hover:text-green-400 transition">Testimonials</a>
                <a href="#contact" class="text-gray-400 hover:text-green-400 transition">Contact</a>
            </div>

            <!-- Desktop Buttons -->
            <div class="hidden md:flex items-center gap-3">
                <x-button variant="outline">Sign In</x-button>
                <x-button variant="primary">Get Started</x-button>
            </div>

            <!-- Mobile Hamburger -->
            <button @click="open = !open" class="md:hidden text-gray-600 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" x-cloak class="md:hidden pb-4 flex flex-col gap-3">
            <a href="#home" class="text-gray-400 hover:text-green-400">Home</a>
            <a href="#features" class="text-gray-400 hover:text-green-400">Features</a>
            <a href="#pricing" class="text-gray-400 hover:text-green-400">Pricing</a>
            <a href="#testimonials" class="text-gray-400 hover:text-green-400">Testimonials</a>
            <a href="#contact" class="text-gray-400 hover:text-green-400"">Contact</a>
            <div class="flex gap-3 pt-2">
                <x-button variant="outline">Sign In</x-button>
                <x-button variant="primary">Get Started</x-button>
            </div>
        </div>
    </div>
</nav>
