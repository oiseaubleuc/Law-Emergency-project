<x-layout>
    <!-- Hero Section -->
    <section class="hero-section mb-16">
        <div class="hero-content">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in-up">
                {{ __('messages.about_title') }}
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate-fade-in-up" style="color: rgba(255, 255, 255, 0.9); animation-delay: 0.2s;">
                {{ __('messages.about_content') }}
            </p>
        </div>
    </section>

    <div class="container-responsive">
        <!-- Main Content Card -->
        <div class="card-modern mb-8 animate-fade-in-up">
            <div class="content">
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg leading-relaxed mb-6" style="color: var(--text-secondary);">
                        Welkom bij <strong style="color: var(--primary);">Law Emergency</strong>, jouw gespecialiseerde wachtpost voor juridische hulp op momenten waarop elke seconde telt. Wij begrijpen dat juridische problemen zich niet aan kantooruren houden. Of het nu midden in de nacht is, tijdens een zondag of op een verlofdag, wij staan klaar om dringende juridische kwesties te behandelen die je nachtrust verstoren en je dagelijks leven beïnvloeden.
                    </p>

                    <!-- Our Goal Section -->
                    <div class="rounded-xl p-8 mb-8" style="background: rgba(10, 25, 41, 0.03); border-left: 4px solid var(--accent);">
                        <h2 class="text-3xl font-bold mb-4 flex items-center" style="color: var(--primary-dark);">
                            <svg class="w-8 h-8 mr-3" style="color: var(--accent);" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            Ons Doel
                        </h2>
                        <p class="leading-relaxed" style="color: var(--neutral-700);">
                            Onze missie is om mensen die geconfronteerd worden met acute juridische problemen te ondersteunen met snelle en doeltreffende oplossingen. Wij weten dat juridische noodsituaties vaak onverwacht en ingrijpend zijn. Daarom bieden wij <strong style="color: var(--primary);">24/7 juridische hulp</strong> met een snelle respons om te zorgen dat je de ondersteuning krijgt die je nodig hebt, ongeacht het tijdstip.
                        </p>
                    </div>

                    <!-- What We Do Section -->
                    <div class="grid md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow" style="border-top: 4px solid var(--primary);">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background: rgba(10, 25, 41, 0.05); border: 1px solid rgba(201, 169, 97, 0.2);">
                                <svg class="w-6 h-6" style="color: var(--primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2" style="color: var(--neutral-800);">24/7 Beschikbaar</h3>
                            <p style="color: var(--neutral-600);">Ons team van ervaren advocaten staat altijd voor je klaar, ongeacht het uur.</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow" style="border-top: 4px solid var(--accent);">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background: rgba(10, 25, 41, 0.05); border: 1px solid rgba(201, 169, 97, 0.2);">
                                <svg class="w-6 h-6" style="color: var(--accent);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2" style="color: var(--neutral-800);">Snelle Reactie</h3>
                            <p style="color: var(--neutral-600);">Wij begrijpen de urgentie van je situatie en zorgen voor een vlotte beoordeling.</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow" style="border-top: 4px solid var(--primary);">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background: rgba(10, 25, 41, 0.05); border: 1px solid rgba(201, 169, 97, 0.2);">
                                <svg class="w-6 h-6" style="color: var(--primary);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-2" style="color: var(--neutral-800);">Deskundig Advies</h3>
                            <p style="color: var(--neutral-600);">Gebaseerd op uitgebreide ervaring en specialistische kennis.</p>
                        </div>
                    </div>

                    <!-- Our Team Section -->
                    <div class="rounded-xl p-8 mb-8" style="background: rgba(10, 25, 41, 0.02); border: 1px solid rgba(201, 169, 97, 0.1);">
                        <h2 class="text-3xl font-bold mb-4" style="color: var(--neutral-800);">Ons Team</h2>
                        <p class="leading-relaxed" style="color: var(--neutral-700);">
                            Ons team bestaat uit gepassioneerde en adviserende advocaten die zich volledig inzetten om hoogwaardige juridische ondersteuning te bieden. Elk lid van ons team heeft uitgebreide ervaring in het behandelen van dringende juridische kwesties en is gespecialiseerd in <strong style="color: var(--primary);">strafrecht</strong>, <strong style="color: var(--primary);">familierecht</strong> en <strong style="color: var(--primary);">verkeersrecht</strong>. Wij staan klaar om te helpen met empathie en professionaliteit.
                        </p>
                    </div>

                    <!-- Why Choose Us Section -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" style="border: 2px solid rgba(201, 169, 97, 0.2);">
                        <h2 class="text-3xl font-bold mb-6" style="color: var(--neutral-800);">Waarom Voor Ons Kiezen?</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background: var(--primary);">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold" style="color: var(--neutral-800);">Altijd Bereikbaar</h3>
                                    <p style="color: var(--neutral-600);">Geen enkele zaak is te klein of te groot. Wij staan voor je klaar, precies wanneer je ons het meest nodig hebt.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background: var(--primary);">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold" style="color: var(--neutral-800);">Efficiënte Dienstverlening</h3>
                                    <p style="color: var(--neutral-600);">Wij begrijpen de urgentie van je situatie en zorgen voor een snelle en betrouwbare oplossing.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background: var(--primary);">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold" style="color: var(--neutral-800);">Empathie en Begrip</h3>
                                    <p style="color: var(--neutral-600);">Onze benadering is altijd doordrenkt met empathie en begrip. Wij behandelen elke zaak met de nodige zorg en aandacht.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="rounded-2xl p-12 text-center text-white shadow-2xl" style="background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);">
            <h2 class="text-3xl font-bold mb-4">Heeft u vragen of heeft u onze diensten nodig?</h2>
            <p class="text-xl mb-8" style="color: rgba(255, 255, 255, 0.9);">Neem contact met ons op voor meer informatie</p>
            <a href="{{ route('contact.show') }}" class="btn-secondary inline-block">
                Neem Contact Op
            </a>
        </div>
    </div>
</x-layout>
