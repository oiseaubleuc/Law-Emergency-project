<x-layout>
    <!-- Hero Section -->
    <section class="hero-section mb-12">
        <div class="hero-content">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in-up">
                {{ __('messages.news_title') }}
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
                Blijf op de hoogte van de laatste juridische ontwikkelingen en nieuws
            </p>
        </div>
    </section>

    <div class="container-responsive">
        @auth
            <div class="flex justify-end mb-6">
                <a href="{{ route('news.create') }}" class="btn-primary">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Nieuw Artikel Toevoegen
                    </span>
                </a>
            </div>
        @endauth

        @if ($userArticles->isNotEmpty())
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Jouw Artikelen</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
                @foreach ($userArticles as $article)
                    <div class="card-modern group hover:shadow-xl transition-shadow">
                        <div class="card-image">
                            <div class="relative w-full h-64 overflow-hidden" style="background: var(--neutral-100);">
                                <img class="w-full h-full object-contain" 
                                     src="{{ asset('storage/'.$article->image_file) }}" 
                                     alt="{{ $article->title }}"
                                     style="object-fit: contain; padding: 8px;">
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="text-xl font-bold mb-3 group-hover:transition-colors" style="color: var(--neutral-800);">{{ $article->title }}</h3>
                            <p class="text-sm mb-4" style="color: var(--neutral-600);">
                                <span class="font-semibold">
                                    {{ $article->user ? $article->user->name : 'Unknown Author' }}
                                </span>
                                <span class="mx-2">•</span>
                                {{ $article->created_at->format('d M Y') }}
                            </p>
                            <a href="{{ route('news.edit', $article) }}" class="font-semibold flex items-center transition-colors" style="color: var(--primary);">
                                {{ __('messages.edit') }}
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <h2 class="text-3xl font-bold mb-6 text-gray-800">Andere Artikelen</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8">
            @foreach ($otherArticles as $article)
                <a href="{{ route('news.show', $article) }}" class="card-modern group hover:shadow-xl transition-shadow block">
                    <div class="card-image">
                        <div class="relative w-full h-64 overflow-hidden" style="background: var(--neutral-100);">
                            <img class="w-full h-full object-contain" 
                                 src="{{ asset('storage/' . $article->image_file) }}" 
                                 alt="{{ $article->title }}"
                                 style="object-fit: contain; padding: 8px;">
                        </div>
                    </div>
                    <div class="content">
                        <h3 class="text-xl font-bold mb-3 transition-colors" style="color: var(--neutral-800);">{{ $article->title }}</h3>
                        <p class="text-sm mb-4" style="color: var(--neutral-600);">
                            <span class="font-semibold">
                                {{ $article->user ? $article->user->name : 'Unknown Author' }}
                            </span>
                            <span class="mx-2">•</span>
                            {{ $article->created_at->format('d M Y') }}
                        </p>
                        <span class="font-semibold flex items-center transition-colors" style="color: var(--primary);">
                            {{ __('messages.read_more') }}
                            <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>

        @if($otherArticles->hasPages())
            <div class="mt-8 flex justify-center">
                {{ $otherArticles->links() }}
            </div>
        @endif
    </div>
</x-layout>
