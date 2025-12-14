<x-layout>
    <x-slot:heading>
        About Us
    </x-slot:heading>
    @php
        $pageTitle = __('messages._title'); // or hardcode the title like 'Contact'
    @endphp


    <script src="{{ asset('js/faq.js') }}"></script>

    <div class="container mx-auto py-6">
        <h1>{{ __('messages.faq_title') }}</h1>

    </div>

    <div class="container mx-auto py-6">

        <div class="faq-category mt-6">

            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Wie zijn de oprichters van de juridische wachtpost?</h2>
                <p class="text-gray-600">Onze juridische wachtpost is opgericht door een team van ervaren advocaten met jarenlange ervaring in verschillende rechtsgebieden. Wij zijn gepassioneerd over het bieden van hoogwaardige juridische bijstand en hebben ons gespecialiseerd in strafrecht, verkeersrecht en familierecht om een brede waaier aan juridische problemen te kunnen aanpakken.</p>
            </div>
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Wat is de achtergrond van het team van de juridische wachtpost?</h2>
                <p class="text-gray-600">Ons team bestaat uit advocaten met uitgebreide ervaring in hun rechtsgebieden. Ze hebben gewerkt in zowel de publieke als de private sector en hebben een sterke achtergrond in het behandelen van complexe juridische zaken. Elk lid van ons team is toegewijd aan het bieden van effectieve juridische hulp.</p>
            </div>

            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Hoeveel ervaring heeft uw team in de juridische sector?</h2>
                <p class="text-gray-600 "> De advocaten die in Lawa Emergency werken bezitten minimum 3 jaren ervaring. Onze advocaten hebben gewerkt aan een breed scala van juridische zaken en hebben een bewezen staat van dienst in het bieden van effectieve juridische oplossingen. We combineren deze ervaring met een passie voor het helpen van onze klanten.</p>
            </div>
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Waar is de juridische wachtpost gevestigd?</h2>
                <p class="text-gray-600 ">Onze juridische wachtpost is centraal gevestigd aan de nijverheidskaai 170 te Brussen, meer informatie kunt u in de conactpagina terugvinden</p>
            </div>
        </div>

        <div class="faq-category mt-6">
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Wat is verkeersrecht en hoe kan uw juridische wachtpost hierbij helpen?</h2>
                <p class="text-gray-600">Verkeersrecht betreft alle juridische kwesties die voortkomen uit verkeersincidenten, zoals verkeersovertredingen, ongevallen en boetes. Onze juridische wachtpost biedt hulp bij het aanvechten van verkeersovertredingen, het indienen van claims voor schadevergoeding bij verkeersongelukken en juridische bijstand bij rechtszaken over verkeersovertredingen. We zorgen ervoor dat je goed vertegenwoordigd wordt en helpen je door het proces van juridische procedures en boetes.</p>
            </div>
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Wat houdt familierecht in en welke ondersteuning biedt uw dienst?</h2>
                <p class="text-gray-600 ">Familierecht betreft juridische kwesties die te maken hebben met familie en relaties, zoals echtscheidingen, voogdijgeschillen en alimentatie. Onze juridische wachtpost biedt ondersteuning bij het regelen van voogdij en omgangsregelingen, het aanvragen van echtscheidingen en het oplossen van andere familierechtelijke geschillen. We bieden juridische bijstand om ervoor te zorgen dat je belangen worden behartigd in deze gevoelige en vaak complexe zaken.</p>
            </div>
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Wat zijn de belangrijkste aspecten van strafrecht en hoe kan uw dienst hierbij helpen?</h2>
                <p class="text-gray-600 ">Strafrecht betreft juridische kwesties waarbij iemand beschuldigd wordt van een strafbaar feit. Dit omvat zaken zoals diefstal, geweldsdelicten en andere criminele activiteiten. Onze juridische wachtpost biedt ondersteuning bij strafrechtelijke aanklachten, helpt bij het voorbereiden van je verdediging, en zorgt voor juridische bijstand tijdens rechtszaken. We streven ernaar om ervoor te zorgen dat je rechten worden beschermd en dat je een eerlijke behandeling krijgt.</p>
            </div>
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Hoe ondersteunt uw juridische wachtpost bij verkeersboetes?</h2>
                <p class="text-gray-600 ">Bij verkeersboetes kunnen wij je helpen door de boete te betwisten als we denken dat deze onterecht is opgelegd. We kunnen juridische documenten indienen, je adviseren over de beste manier om de boete aan te vechten. Ons doel is om je te helpen de boete te verlagen of te laten intrekken indien mogelijk.</p>
            </div>
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Wat doet uw juridische wachtpost in geval van een echtscheiding?</h2>
                <p class="text-gray-600 ">Bij een echtscheiding kunnen we je bijstaan door juridische begeleiding te bieden bij het indienen van een echtscheidingsverzoek, het regelen van verdeling van bezittingen en schulden, en het opstellen van alimentatie- en voogdijregelingen en nog meer. We zorgen ervoor dat je rechten worden beschermd en dat de echtscheiding op een correcte en eerlijke manier.</p>
            </div>
        </div>

        <div class="faq-category mt-6">

            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Wat is het belangrijkste doel van uw juridische wachtpost?</h2>
                <p class="text-gray-600">Ons belangrijkste doel is om 24/7 juridische bijstand te bieden aan mensen die geconfronteerd worden met dringende juridische kwesties. We begrijpen dat juridische problemen zich op elk moment van de dag of nacht kunnen voordoen, en we streven ernaar om snel en efficiënt de ondersteuning te bieden die je nodig hebt om je situatie op te lossen.</p>
            </div>
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Hoe garandeert uw juridische wachtpost een snelle reactie op noodsituaties?</h2>
                <p class="text-gray-600 ">We garanderen een snelle reactie door een team van ervaren advocaten beschikbaar te hebben die direct kunnen ingrijpen bij juridische noodsituaties. Zodra je contact met ons kunt opnemen, we zorgen  ervoor dat je zo snel mogelijk een advies of bijstand krijgt toegewezen die je kan helpen met je probleem. Onze focus ligt op het snel en effectief bieden van oplossingen.</p>
            </div>
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Waarom is 24/7 beschikbaarheid belangrijk voor uw juridische wachtpost?</h2>
                <p class="text-gray-600 ">24/7 beschikbaarheid is cruciaal omdat juridische problemen zich vaak buiten reguliere kantooruren voordoen, zoals 's nachts of in het weekend. Door altijd bereikbaar te zijn, kunnen we directe hulp bieden op momenten dat je dat het meest nodig hebt, waardoor je geen kostbare tijd verliest in kritieke situaties.</p>
            </div>
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Wat maakt uw juridische wachtpost uniek in vergelijking met andere juridische diensten?</h2>
                <p class="text-gray-600 ">Wat ons uniek maakt is onze toewijding aan 24/7 beschikbaarheid en onze gespecialiseerde expertise in strafrecht, verkeersrecht en familierecht. We combineren snelle respons met diepgaande juridische kennis om je in elke noodsituatie adequaat bij te staan. Onze focus ligt op empathie en professionaliteit, waarbij we elke zaak met de hoogste zorg behandelen.</p>
            </div>
            <div class="faq-item mb-4">
                <h2 class="text-xl font-semibold cursor-pointer">Hoe helpt uw juridische wachtpost bij het verminderen van stress tijdens noodsituaties?</h2>
                <p class="text-gray-600 ">We helpen bij het verminderen van stress door een helder en gestructureerd proces te bieden waarmee je gemakkelijk door je situatie kunt navigeren. Door snelle antwoorden en adviserende begeleiding te bieden, ontlasten we je van de juridische complexiteit en zorgen we ervoor dat je je kunt concentreren op het herstellen van de situatie zonder extra stress.</p>
            </div>

        </div>
    </div>


</x-layout>

