@props(['active' => false, 'href'])

<a href="{{ $href }}" 
   class="nav-link-modern px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-300 {{ $active ? 'bg-white/20 text-white shadow-lg' : 'text-white hover:bg-white/10 hover:text-white' }}"
   style="{{ !$active ? 'color: rgba(255, 255, 255, 0.85);' : '' }}"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}>
    {{ $slot }}
</a>

<style>
.nav-link-modern {
    position: relative;
    overflow: hidden;
}

.nav-link-modern::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: var(--accent);
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.nav-link-modern:hover::before,
.nav-link-modern.bg-white\/20::before {
    width: 80%;
}
</style>
