<x-layout>
    <!-- Hero Section -->
    <section class="hero-section mb-16">
        <div class="hero-content">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in-up">
                {{ __('messages.contact_title') }}
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate-fade-in-up" style="color: rgba(255, 255, 255, 0.9); animation-delay: 0.2s;">
                {{ __('messages.contact_content') }}
            </p>
        </div>
    </section>

    <div class="container-responsive">
        @if (session('success'))
            <div class="alert-success animate-slide-in-right mb-8">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <div class="card-modern animate-fade-in-up">
                <div class="content">
                    <h2 class="text-3xl font-bold mb-6" style="color: var(--text-primary);">Stuur Ons Een Bericht</h2>
                    
                    <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="form-label">Voornaam</label>
                                <input type="text" 
                                       id="first_name" 
                                       name="first_name" 
                                       value="{{ old('first_name') }}" 
                                       class="form-input @error('first_name') border-red-500 @enderror" 
                                       required>
                                @error('first_name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="last_name" class="form-label">Achternaam</label>
                                <input type="text" 
                                       id="last_name" 
                                       name="last_name" 
                                       value="{{ old('last_name') }}" 
                                       class="form-input @error('last_name') border-red-500 @enderror" 
                                       required>
                                @error('last_name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email" class="form-label">E-mailadres</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   class="form-input @error('email') border-red-500 @enderror" 
                                   required>
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="form-label">Telefoonnummer <span class="text-gray-400">(optioneel)</span></label>
                            <input type="text" 
                                   id="phone" 
                                   name="phone" 
                                   value="{{ old('phone') }}" 
                                   class="form-input @error('phone') border-red-500 @enderror">
                            @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="form-label">Bericht</label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="6" 
                                      class="form-input @error('message') border-red-500 @enderror" 
                                      required>{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn-primary w-full sm:w-auto">
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                    </svg>
                                    Bericht Verzenden
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="space-y-6">
                <div class="card-modern animate-fade-in-up" style="animation-delay: 0.1s;">
                    <div class="content">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mr-4" style="background: rgba(10, 25, 41, 0.05); border: 1px solid rgba(201, 169, 97, 0.2);">
                                <svg class="w-6 h-6" style="color: var(--primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold" style="color: var(--neutral-800);">E-mail</h3>
                                <p style="color: var(--neutral-600);">info@lawemergency.nl</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-modern animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="content">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mr-4" style="background: rgba(10, 25, 41, 0.05); border: 1px solid rgba(201, 169, 97, 0.2);">
                                <svg class="w-6 h-6" style="color: var(--accent);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold" style="color: var(--neutral-800);">Beschikbaarheid</h3>
                                <p style="color: var(--neutral-600);">24/7 - Altijd bereikbaar</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-modern animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="content">
                        <h3 class="text-xl font-bold mb-4" style="color: var(--neutral-800);">Waarom Contact Opnemen?</h3>
                        <ul class="space-y-3" style="color: var(--neutral-600);">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" style="color: var(--primary);" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Snelle reactie op uw vragen</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" style="color: var(--primary);" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Deskundig advies van ervaren advocaten</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" style="color: var(--primary);" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Vertrouwelijke behandeling van uw zaak</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
