<x-layout>
    @if(session('success'))
        <div class="alert-success animate-slide-in-right">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Hero Section avec introduction accueillante -->
    <section class="hero-section mb-20">
        <div class="hero-content">
            <div class="animate-fade-in-up">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    {{ __('messages.welcome') }}
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto leading-relaxed" style="color: rgba(255, 255, 255, 0.9); animation-delay: 0.2s;">
                    {{ __('messages.welcome_subtitle') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10" style="animation-delay: 0.4s;">
                    <a href="{{ route('contact.show') }}" class="btn-secondary text-lg px-8 py-4">
                        {{ __('messages.contact_us') }}
                    </a>
                    <a href="#rechtsgebieden" class="px-8 py-4 rounded-lg font-semibold transition-all text-lg border-2" style="background: transparent; border-color: var(--accent); color: var(--accent); hover:background: rgba(201, 169, 97, 0.1);">
                        {{ __('messages.discover_services') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="container-responsive mb-20">
        <div class="text-center max-w-4xl mx-auto animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-bold mb-6" style="color: var(--text-primary);">
                {{ __('messages.why_choose_us') }}
            </h2>
            <div class="w-24 h-1 mx-auto mb-6" style="background: var(--accent);"></div>
            <p class="text-lg leading-relaxed mb-8" style="color: var(--text-secondary);">
                {{ __('messages.why_choose_us_desc') }}
            </p>
            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6" style="background: rgba(10, 25, 41, 0.05); border: 2px solid rgba(201, 169, 97, 0.2);">
                        <svg class="w-10 h-10" style="color: var(--accent);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3" style="color: var(--text-primary);">{{ __('messages.available_24_7') }}</h3>
                    <p style="color: var(--text-secondary);">{{ __('messages.available_24_7_desc') }}</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6" style="background: rgba(10, 25, 41, 0.05); border: 2px solid rgba(201, 169, 97, 0.2);">
                        <svg class="w-10 h-10" style="color: var(--accent);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3" style="color: var(--text-primary);">{{ __('messages.fast_response') }}</h3>
                    <p style="color: var(--text-secondary);">{{ __('messages.fast_response_desc') }}</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6" style="background: rgba(10, 25, 41, 0.05); border: 2px solid rgba(201, 169, 97, 0.2);">
                        <svg class="w-10 h-10" style="color: var(--accent);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3" style="color: var(--text-primary);">{{ __('messages.expert_advice') }}</h3>
                    <p style="color: var(--text-secondary);">{{ __('messages.expert_advice_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Legal Areas Grid -->
    <section id="rechtsgebieden" class="container-responsive mb-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6" style="color: var(--text-primary);">
                {{ __('messages.select_legal_area') }}
            </h2>
            <div class="w-24 h-1 mx-auto mb-6" style="background: var(--accent);"></div>
            <p class="text-lg max-w-2xl mx-auto leading-relaxed" style="color: var(--text-secondary);">
                {{ __('messages.select_legal_area_desc') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Strafrecht Card -->
            <a href="{{ route('strafrecht') }}" class="card-modern group animate-fade-in-up" style="animation-delay: 0.1s;">
                <div class="card-image">
                    <div class="relative w-full pb-[75%] overflow-hidden rounded-t-xl">
                        <img src="/images/strafrecht.jpeg" 
                             alt="Strafrecht" 
                             class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300" style="background: linear-gradient(to top, rgba(10, 25, 41, 0.95) 0%, rgba(10, 25, 41, 0.6) 50%, transparent 100%);"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                Strafrecht
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p class="leading-relaxed line-clamp-4" style="color: var(--text-secondary);">
                        Het strafrecht speelt een cruciale rol in het handhaven van orde en gerechtigheid door te voorzien in regels voor het strafrechtelijke proces en de bestraffing van misdrijven. Of je nu geconfronteerd wordt met beschuldigingen van een strafbaar feit, betrokken bent bij een strafrechtelijk onderzoek, of juridische bijstand nodig hebt tijdens een rechtszaak, wij bieden deskundige ondersteuning en verdediging.
                    </p>
                    <div class="mt-6 flex items-center font-semibold transition-colors" style="color: var(--accent);">
                        {{ __('messages.more_info') }}
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Verkeersrecht Card -->
            <a href="{{ route('verkeersrecht') }}" class="card-modern group animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="card-image">
                    <div class="relative w-full pb-[75%] overflow-hidden rounded-t-xl">
                        <img src="/images/verkeersrecht.jpeg" 
                             alt="Verkeersrecht" 
                             class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300" style="background: linear-gradient(to top, rgba(10, 25, 41, 0.95) 0%, rgba(10, 25, 41, 0.6) 50%, transparent 100%);"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                Verkeersrecht
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p class="leading-relaxed line-clamp-4" style="color: var(--text-secondary);">
                        Het verkeersrecht regelt alle juridische aspecten met betrekking tot het verkeer op de openbare weg. Dit omvat niet alleen verkeersboetes en overtredingen, maar ook complexe kwesties zoals verkeersongevallen, schadeclaims en juridische procedures. Of je nu te maken hebt met een verkeersboete, betrokken bent bij een verkeersongeval, of juridische hulp nodig hebt bij een geschil over schadevergoeding, wij staan klaar om je te ondersteunen.
                    </p>
                    <div class="mt-6 flex items-center font-semibold transition-colors" style="color: var(--accent);">
                        {{ __('messages.more_info') }}
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Familierecht Card -->
            <a href="{{ route('familierecht') }}" class="card-modern group animate-fade-in-up" style="animation-delay: 0.3s;">
                <div class="card-image">
                    <div class="relative w-full pb-[75%] overflow-hidden rounded-t-xl">
                        <img src="/images/familierecht.jpeg" 
                             alt="Familierecht" 
                             class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300" style="background: linear-gradient(to top, rgba(10, 25, 41, 0.95) 0%, rgba(10, 25, 41, 0.6) 50%, transparent 100%);"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-2xl font-bold text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                Familierecht
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p class="leading-relaxed line-clamp-4" style="color: var(--text-secondary);">
                        Het familierecht behandelt juridische kwesties die van invloed zijn op familie- en gezinsrelaties. Deze rechtsgebied omvat zaken zoals echtscheidingen, voogdijgeschillen, onderhoudsverplichtingen en andere persoonlijke geschillen. Het kan een emotioneel en complex proces zijn, vooral wanneer het gaat om belangrijke beslissingen die het welzijn van kinderen en gezinsleden beïnvloeden.
                    </p>
                    <div class="mt-6 flex items-center font-semibold transition-colors" style="color: var(--accent);">
                        {{ __('messages.more_info') }}
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="mt-24 mb-20">
        <div class="container-responsive">
            <div class="rounded-lg p-16 text-center text-white shadow-2xl relative overflow-hidden" style="background: var(--primary); border: 1px solid rgba(201, 169, 97, 0.2);">
                <div class="absolute top-0 right-0 w-64 h-64 opacity-10" style="background: radial-gradient(circle, var(--accent) 0%, transparent 70%); transform: translate(30%, -30%);"></div>
                <div class="relative z-10">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">{{ __('messages.need_urgent_help') }}</h2>
                    <div class="w-20 h-1 mx-auto mb-8" style="background: var(--accent);"></div>
                    <p class="text-xl mb-10 max-w-2xl mx-auto leading-relaxed" style="color: rgba(255, 255, 255, 0.9);">
                        {{ __('messages.need_urgent_help_desc') }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 justify-center">
                        <a href="{{ route('contact.show') }}" class="btn-secondary inline-block">
                            {{ __('messages.contact_us') }}
                        </a>
                        <a href="{{ route('submit_casus') }}" class="px-10 py-4 rounded-lg font-semibold transition-all inline-block border-2" style="background: transparent; border-color: var(--accent); color: var(--accent);">
                            {{ __('messages.submit_case') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
