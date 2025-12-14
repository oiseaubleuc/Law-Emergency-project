@php
    $availableLocales = config('app.available_locales', []);
    $currentLocale = app()->getLocale();
    $currentLocaleName = $availableLocales[$currentLocale] ?? strtoupper($currentLocale);
    $uniqueId = 'lang-dropdown-' . uniqid();
@endphp

<style>
    .lang-dropdown-btn {
        background: var(--primary);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 2px 6px rgba(10, 25, 41, 0.2);
        border: 1px solid rgba(201, 169, 97, 0.2);
    }
    
    .lang-dropdown-btn:hover {
        background: var(--primary-light);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(10, 25, 41, 0.3);
        border-color: var(--accent);
    }
    
    .lang-dropdown-btn:active {
        transform: translateY(0);
    }
    
    .lang-dropdown-menu {
        background: white;
        backdrop-filter: blur(10px);
        border: 1px solid var(--neutral-200);
        box-shadow: 0 12px 24px rgba(10, 25, 41, 0.15);
        animation: slideDown 0.3s ease-out;
    }
    
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }
    
    .lang-option {
        transition: all 0.2s ease;
        position: relative;
        overflow: hidden;
    }
    
    .lang-option::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: var(--accent);
        transform: scaleY(0);
        transition: transform 0.2s ease;
    }
    
    .lang-option:hover::before {
        transform: scaleY(1);
    }
    
    .lang-option:hover {
        background: rgba(10, 25, 41, 0.05);
        transform: translateX(4px);
        padding-left: 20px;
    }
    
    .lang-option.active {
        background: rgba(10, 25, 41, 0.08);
        color: var(--primary);
        font-weight: 600;
    }
    
    .lang-option.active::before {
        transform: scaleY(1);
    }
    
    .lang-flag {
        transition: transform 0.3s ease;
    }
    
    .lang-option:hover .lang-flag {
        transform: scale(1.2) rotate(5deg);
    }
    
    .lang-check {
        animation: checkIn 0.3s ease-out;
    }
    
    @keyframes checkIn {
        from {
            opacity: 0;
            transform: scale(0);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    .lang-arrow {
        transition: transform 0.3s ease;
    }
    
    .lang-dropdown-btn[aria-expanded="true"] .lang-arrow {
        transform: rotate(180deg);
    }
</style>

<div class="relative inline-block text-left" id="lang-dropdown-container-{{ $uniqueId }}">
    <div>
        <button 
            type="button" 
            onclick="toggleLanguageDropdown('{{ $uniqueId }}')"
            class="lang-dropdown-btn inline-flex items-center justify-center w-full rounded-lg px-4 py-2.5 text-sm font-semibold text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent"
            id="language-menu-button-{{ $uniqueId }}"
            aria-expanded="false"
            aria-haspopup="true">
            @if($currentLocale === 'en' && file_exists(public_path('images/english-flag.png')))
                <img src="{{ asset('images/english-flag.png') }}" alt="English" class="lang-flag w-6 h-6 mr-2 rounded-sm shadow-sm">
            @elseif($currentLocale === 'fr' && file_exists(public_path('images/french-flag.png')))
                <img src="{{ asset('images/french-flag.png') }}" alt="Français" class="lang-flag w-6 h-6 mr-2 rounded-sm shadow-sm">
            @elseif($currentLocale === 'nl' && file_exists(public_path('images/dutch-flag.png')))
                <img src="{{ asset('images/dutch-flag.png') }}" alt="Nederlands" class="lang-flag w-6 h-6 mr-2 rounded-sm shadow-sm">
            @endif
            <span class="font-medium">{{ $currentLocaleName }}</span>
            <svg class="lang-arrow -mr-1 ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <div 
        id="language-dropdown-{{ $uniqueId }}"
        class="lang-dropdown-menu origin-top-right absolute right-0 mt-2 w-64 rounded-xl shadow-2xl focus:outline-none z-50 hidden overflow-hidden"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="language-menu-button-{{ $uniqueId }}"
        tabindex="-1">
        <div class="py-2" role="none">
            @foreach($availableLocales as $locale => $name)
                <a href="{{ route('lang.switch', $locale) }}" 
                   class="lang-option flex items-center px-5 py-3 text-sm {{ $currentLocale === $locale ? 'active' : 'text-gray-700' }}"
                   role="menuitem"
                   tabindex="-1">
                    @if($locale === 'en' && file_exists(public_path('images/english-flag.png')))
                        <img src="{{ asset('images/english-flag.png') }}" alt="English" class="lang-flag w-6 h-6 mr-3 rounded-sm shadow-sm">
                    @elseif($locale === 'fr' && file_exists(public_path('images/french-flag.png')))
                        <img src="{{ asset('images/french-flag.png') }}" alt="Français" class="lang-flag w-6 h-6 mr-3 rounded-sm shadow-sm">
                    @elseif($locale === 'nl' && file_exists(public_path('images/dutch-flag.png')))
                        <img src="{{ asset('images/dutch-flag.png') }}" alt="Nederlands" class="lang-flag w-6 h-6 mr-3 rounded-sm shadow-sm">
                    @endif
                    <span class="flex-1">{{ $name }}</span>
                    @if($currentLocale === $locale)
                        <svg class="lang-check ml-auto h-5 w-5" style="color: var(--accent);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</div>

