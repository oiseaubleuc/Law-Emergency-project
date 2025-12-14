<x-layout>
    <!-- Hero Section -->
    <section class="hero-section mb-12">
        <div class="hero-content">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                {{ $news->title }}
            </h1>
            <p class="text-lg text-blue-100 animate-fade-in-up" style="animation-delay: 0.2s;">
                Door {{ $news->user ? $news->user->name : 'Unknown Author' }} • {{ $news->created_at->format('d M Y') }}
            </p>
        </div>
    </section>

    <div class="container-responsive">
        <div class="card-modern mb-8">
            <div class="card-image">
                <div class="relative w-full h-96 overflow-hidden bg-gray-100 flex items-center justify-center">
                    <img class="max-w-full max-h-full object-contain" 
                         src="{{ asset('storage/'.$news->image_file) }}" 
                         alt="{{ $news->title }}"
                         style="padding: 16px;">
                </div>
            </div>
            <div class="content">
                <div class="prose prose-lg max-w-none">
                    <div class="text-gray-800 leading-relaxed whitespace-pre-line">
                        {!! nl2br(e($news->content)) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-between items-center">
            <a href="{{ route('news') }}" class="text-blue-600 hover:text-blue-800 font-semibold flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Terug naar Nieuws
            </a>
            @auth
                @if(auth()->id() === $news->user_id)
                    <div class="flex gap-4">
                        <a href="{{ route('news.edit', $news) }}" class="btn-primary">
                            Artikel Bewerken
                        </a>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</x-layout>
