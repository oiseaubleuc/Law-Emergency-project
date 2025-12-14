<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Law Emergency - Juridische Hulp 24/7')</title>
    
    <!-- Fonts - Premium Serif for Law Firm -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': {
                            DEFAULT: '#0a1929',
                            dark: '#051422',
                            light: '#1a365d',
                        },
                        'accent': {
                            DEFAULT: '#c9a961',
                            dark: '#b8944f',
                            light: '#d4b87a',
                        },
                    },
                    fontFamily: {
                        sans: ['Cormorant Garamond', 'Playfair Display', 'Georgia', 'serif'],
                    },
                }
            }
        }
    </script>
    
    <!-- Custom CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Vite Assets (for production when Vite is running) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        [x-cloak] { display: none !important; }
        
        /* Ensure custom classes work */
        .nav-professional {
            background: var(--primary);
            box-shadow: 0 2px 8px rgba(10, 25, 41, 0.15);
            border-bottom: 1px solid rgba(201, 169, 97, 0.1);
        }
        
        .container-responsive {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }
        
        @media (max-width: 768px) {
            .container-responsive {
                padding: 0 16px;
            }
        }
    </style>
</head>

<body class="h-full" style="background: var(--bg-gradient);">
<div class="min-h-full flex flex-col">
    <!-- Navigation -->
    <nav class="nav-professional sticky top-0 z-50" id="main-nav">
        <div class="container-responsive">
            <div class="flex h-20 items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
                        <div class="relative">
                            <img class="h-14 w-14 rounded-full ring-4 ring-white/20 transition-all duration-300 group-hover:ring-white/40 group-hover:scale-110" 
                                 src="{{ asset('images/logo.svg') }}" 
                                 alt="Law Emergency Logo">
                            <div class="absolute inset-0 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300" style="background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);"></div>
                        </div>
                        <div class="hidden sm:block">
                            <span class="text-xl font-bold text-white">Law Emergency</span>
                            <p class="text-xs" style="color: rgba(201, 169, 97, 0.9);">24/7 Juridische Hulp</p>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1">
                    <x-nav-link href="/" :active="request()->is('/')" class="nav-link-modern">
                        {{ __('messages.home') }}
                    </x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')" class="nav-link-modern">
                        {{ __('messages.about') }}
                    </x-nav-link>
                    <x-nav-link href="/faq" :active="request()->is('faq')" class="nav-link-modern">
                        FAQ
                    </x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')" class="nav-link-modern">
                        {{ __('messages.contact') }}
                    </x-nav-link>
                    <x-nav-link href="/news" :active="request()->is('news')" class="nav-link-modern">
                        {{ __('messages.news') }}
                    </x-nav-link>
                    @auth
                        @if(auth()->user()->is_admin)
                            <x-nav-link href="/admin/dashboard" :active="request()->is('admin*')" class="nav-link-modern">
                                Admin
                            </x-nav-link>
                        @endif
                        <x-nav-link href="/jobs" :active="request()->is('jobs*')" class="nav-link-modern">
                            Jobs
                        </x-nav-link>
                    @endauth
                </div>

                <!-- Right Side Actions -->
                <div class="hidden lg:flex items-center space-x-4">
                    <x-language-switcher />
                    
                    @guest
                        <a href="/login" class="px-4 py-2 text-sm font-semibold text-white transition-colors" style="hover:color: var(--accent-light);">
                            {{ __('messages.login') }}
                        </a>
                        <a href="/register" class="btn-secondary text-sm px-6 py-2">
                            {{ __('messages.register') }}
                        </a>
                    @endguest
                    
                    @auth
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                                <img class="h-10 w-10 rounded-full ring-2 ring-white/30 hover:ring-white/60 transition-all" 
                                     src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('avatars/default-avatar.png') }}" 
                                     alt="Profile">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <div x-show="open" 
                                 @click.away="open = false"
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="opacity-0 scale-95"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-95"
                                 class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl py-1 z-50"
                                 style="display: none;">
                                <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm transition-colors" style="color: var(--text-primary); hover:background: rgba(10, 25, 41, 0.05);">
                                    {{ __('messages.profile_title') }}
                                </a>
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm transition-colors" style="color: var(--text-primary); hover:background: rgba(10, 25, 41, 0.05);">
                                    {{ __('messages.edit_profile_title') }}
                                </a>
                                <hr class="my-1">
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                        {{ __('messages.logout') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button type="button" 
                            id="mobile-menu-button"
                            class="inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-800"
                            aria-expanded="false"
                            aria-controls="mobile-menu">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" id="menu-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" id="close-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="lg:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 backdrop-blur-sm" style="background: rgba(10, 25, 41, 0.95);">
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/10 transition-colors {{ request()->is('/') ? 'bg-white/20' : '' }}">
                    {{ __('messages.home') }}
                </a>
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/10 transition-colors {{ request()->is('about') ? 'bg-white/20' : '' }}">
                    {{ __('messages.about') }}
                </a>
                <a href="/faq" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/10 transition-colors {{ request()->is('faq') ? 'bg-white/20' : '' }}">
                    FAQ
                </a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/10 transition-colors {{ request()->is('contact') ? 'bg-white/20' : '' }}">
                    {{ __('messages.contact') }}
                </a>
                <a href="/news" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/10 transition-colors {{ request()->is('news') ? 'bg-white/20' : '' }}">
                    {{ __('messages.news') }}
                </a>
                @auth
                    <a href="/jobs" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/10 transition-colors {{ request()->is('jobs*') ? 'bg-white/20' : '' }}">
                        Jobs
                    </a>
                @endauth
                <div class="pt-4 pb-3 border-t border-white/20">
                    <div class="px-3 space-y-2">
                        <x-language-switcher />
                        @guest
                            <a href="/login" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/10 transition-colors">
                                {{ __('messages.login') }}
                            </a>
                            <a href="/register" class="block px-3 py-2 rounded-md text-base font-medium text-white transition-colors text-center" style="background: var(--accent);">
                                {{ __('messages.register') }}
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1">
        <div class="container-responsive py-8">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-white mt-auto" style="background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);">
        <div class="container-responsive py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Law Emergency</h3>
                    <p style="color: rgba(255, 255, 255, 0.8);">24/7 juridische hulp wanneer u het nodig heeft. Wij staan altijd voor u klaar.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Snelle Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/about" class="transition-colors" style="color: rgba(255, 255, 255, 0.8);">Over Ons</a></li>
                        <li><a href="/contact" class="transition-colors" style="color: rgba(255, 255, 255, 0.8);">Contact</a></li>
                        <li><a href="/faq" class="transition-colors" style="color: rgba(255, 255, 255, 0.8);">FAQ</a></li>
                        <li><a href="/news" class="transition-colors" style="color: rgba(255, 255, 255, 0.8);">Nieuws</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <p style="color: rgba(255, 255, 255, 0.8);">24/7 Beschikbaar</p>
                    <p class="mt-2" style="color: rgba(255, 255, 255, 0.8);">info@lawemergency.nl</p>
                </div>
            </div>
            <div class="mt-8 pt-8 text-center" style="border-top: 1px solid rgba(255, 255, 255, 0.2); color: rgba(255, 255, 255, 0.8);">
                <p>&copy; {{ date('Y') }} Law Emergency. Alle rechten voorbehouden.</p>
            </div>
        </div>
    </footer>
</div>

<!-- Alpine.js for interactivity -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- Mobile Menu Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            const isHidden = mobileMenu.classList.contains('hidden');
            
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'true');
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            }
        });
    }
    
    // Nav scroll effect
    const nav = document.getElementById('main-nav');
    if (nav) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    }
});

// Language dropdown functionality
function toggleLanguageDropdown(uniqueId) {
    const dropdown = document.getElementById('language-dropdown-' + uniqueId);
    const button = document.getElementById('language-menu-button-' + uniqueId);
    
    if (!dropdown || !button) {
        console.error('Language dropdown elements not found:', uniqueId);
        return;
    }
    
    // Toggle dropdown visibility
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
        button.setAttribute('aria-expanded', 'true');
        
        // Close dropdown when clicking outside
        const closeDropdown = function(event) {
            const container = document.getElementById('lang-dropdown-container-' + uniqueId);
            if (container && !container.contains(event.target)) {
                dropdown.classList.add('hidden');
                button.setAttribute('aria-expanded', 'false');
                document.removeEventListener('click', closeDropdown);
            }
        };
        
        // Use setTimeout to avoid immediate closure
        setTimeout(() => {
            document.addEventListener('click', closeDropdown);
        }, 10);
    } else {
        dropdown.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
    }
}

// Make function globally available
window.toggleLanguageDropdown = toggleLanguageDropdown;

// Close dropdown when clicking on a language option
document.addEventListener('DOMContentLoaded', function() {
    const langLinks = document.querySelectorAll('[id^="language-dropdown-"] a');
    langLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const dropdown = this.closest('[id^="language-dropdown-"]');
            if (dropdown) {
                const uniqueId = dropdown.id.replace('language-dropdown-', '');
                const dropdownElement = document.getElementById('language-dropdown-' + uniqueId);
                const button = document.getElementById('language-menu-button-' + uniqueId);
                
                if (dropdownElement) {
                    dropdownElement.classList.add('hidden');
                    if (button) button.setAttribute('aria-expanded', 'false');
                }
            }
        });
    });
});
</script>
</body>
</html>
