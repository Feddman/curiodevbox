<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wat is Curio DevBox? - Uitleg voor Studenten</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">
    <div class="container mx-auto px-4 py-12 max-w-4xl">
        <!-- Header -->
        <header class="mb-12">
            <a href="index.php" class="inline-flex items-center text-slate-600 hover:text-slate-900 mb-6 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Terug naar dashboard
            </a>
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Wat is Curio DevBox?</h1>
            <p class="text-xl text-slate-600">Een complete uitleg voor beginnende developers</p>
        </header>

        <!-- Main Content -->
        <div class="space-y-8">
    

            <!-- Wat doet Curio DevBox -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat doet Curio DevBox precies?</h2>
                <p class="text-slate-700 leading-relaxed mb-6">
                    Curio DevBox is een <strong>complete ontwikkelomgeving</strong> die alle tools bevat die je nodig hebt 
                    om full stack web applicaties te bouwen. In plaats van alles handmatig te installeren, start je gewoon 
                    één commando en je hebt alles wat je nodig hebt!
                </p>

                <div class="space-y-6">
                    <div class="border-l-4 border-green-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">PHP 8.4</h3>
                        <p class="text-slate-700">
                            PHP is een programmeertaal die veel gebruikt wordt voor websites. Denk aan WordPress, 
                            Laravel, of gewoon je eigen PHP websites. Curio DevBox heeft de nieuwste versie (8.4) 
                            al voor je klaar staan.
                        </p>
                    </div>

                    <div class="border-l-4 border-blue-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">MySQL Database</h3>
                        <p class="text-slate-700">
                            Een database is waar je gegevens opslaat. Bijvoorbeeld: gebruikersnamen, wachtwoorden, 
                            producten in een webshop, of berichten op een forum. MySQL is een van de meest gebruikte 
                            databases ter wereld.
                        </p>
                    </div>

                    <div class="border-l-4 border-purple-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">Nginx & Apache Webservers</h3>
                        <p class="text-slate-700">
                            Een webserver is het programma dat je website aan de wereld toont. Curio DevBox heeft 
                            <strong>beide</strong> de populairste webservers: Nginx (snel en modern) en Apache 
                            (traditioneel en betrouwbaar). Je kunt kiezen welke je wilt gebruiken!
                        </p>
                    </div>

                    <div class="border-l-4 border-orange-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">Node.js</h3>
                        <p class="text-slate-700">
                            Node.js laat je JavaScript gebruiken op de server. Handig voor moderne web applicaties, 
                            real-time features (zoals chat), of het bouwen van API's.
                        </p>
                    </div>

                    <div class="border-l-4 border-red-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">phpMyAdmin</h3>
                        <p class="text-slate-700">
                            Een handige webinterface om je database te beheren. In plaats van ingewikkelde commando's 
                            typen, klik je gewoon in een mooie interface om tabellen aan te maken, data te bekijken, 
                            of queries uit te voeren.
                        </p>
                    </div>

                    <div class="border-l-4 border-yellow-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">Redis Cache</h3>
                        <p class="text-slate-700">
                            Redis is een snelle opslag voor tijdelijke gegevens. Bijvoorbeeld: sessies van gebruikers, 
                            of veelgebruikte data die je snel wilt ophalen. Dit maakt je website sneller!
                        </p>
                    </div>

                    <div class="border-l-4 border-indigo-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">MailHog</h3>
                        <p class="text-slate-700">
                            Tijdens het ontwikkelen wil je niet per ongeluk echte e-mails versturen. MailHog vangt alle 
                            e-mails op zodat je kunt testen zonder echte e-mails te versturen.
                        </p>
                    </div>
                </div>
            </section>

                    <!-- Wat is Docker -->
                    <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat is Docker?</h2>
                <div class="prose prose-slate max-w-none">
                    <p class="text-slate-700 leading-relaxed mb-4">
                        Stel je voor: je werkt aan een website op je eigen computer. Alles werkt perfect! 
                        Maar dan wil je je project delen met een klasgenoot, en bij hem werkt het niet. 
                        Of je leraar zegt dat je project op de schoolserver moet draaien, maar daar werkt het ook niet.
                    </p>
                    <p class="text-slate-700 leading-relaxed mb-4">
                        <strong>Docker lost dit probleem op!</strong> Docker is een technologie die ervoor zorgt 
                        dat je applicatie altijd op dezelfde manier werkt, ongeacht op welke computer je het draait.
                    </p>
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-4 my-6">
                        <p class="text-blue-900 font-semibold mb-2">Eenvoudige vergelijking:</p>
                        <p class="text-blue-800">
                            Denk aan Docker als een <strong>verhuisdoos</strong>. Je stopt alles wat je nodig hebt 
                            (je code, de database, de webserver) in één doos. Deze doos werkt overal hetzelfde, 
                            of je hem nu op je laptop, op school, of op een server zet.
                        </p>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mt-6 mb-3">Waarom is dit handig?</h3>
                    <ul class="list-disc list-inside text-slate-700 space-y-2 ml-4">
                        <li><strong>Geen installatieproblemen:</strong> Je hoeft niet handmatig PHP, MySQL en andere software te installeren</li>
                        <li><strong>Altijd hetzelfde:</strong> Werkt op Windows, Mac en Linux op dezelfde manier</li>
                        <li><strong>Makkelijk delen:</strong> Je kunt je hele omgeving met één commando starten</li>
                        <li><strong>Geen conflicten:</strong> Verschillende projecten kunnen verschillende versies gebruiken zonder problemen</li>
                    </ul>
                </div>
            </section>

            <!-- Hoe werkt het -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Hoe werkt het in de praktijk?</h2>
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">
                            1
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je start Curio DevBox</h3>
                            <p class="text-slate-700">
                                Met één commando (<code class="bg-slate-100 px-2 py-1 rounded">docker-compose up -d</code>) 
                                start je alle services. Dit duurt een paar minuten de eerste keer.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">
                            2
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je plaatst je project</h3>
                            <p class="text-slate-700">
                                Je zet je PHP, HTML, CSS, JavaScript bestanden in de <code class="bg-slate-100 px-2 py-1 rounded">www/</code> 
                                map. Je kunt meerdere projecten hebben, elk in een eigen map.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">
                            3
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je opent je browser</h3>
                            <p class="text-slate-700">
                                Ga naar <code class="bg-slate-100 px-2 py-1 rounded">http://localhost</code> of 
                                <code class="bg-slate-100 px-2 py-1 rounded">http://localhost:8080</code> en je ziet je website!
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">
                            4
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je werkt aan je project</h3>
                            <p class="text-slate-700">
                                Elke keer dat je een bestand opslaat, zie je de wijzigingen direct in je browser. 
                                Je gebruikt phpMyAdmin om je database te beheren, en alles werkt precies zoals op een echte server.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Voordelen -->
            <section class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow-sm p-8 border border-blue-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Waarom is dit handig voor jou als student?</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Geen installatie stress</h3>
                        <p class="text-slate-700 text-sm">
                            Je hoeft niet te zoeken naar installatie-instructies voor PHP, MySQL, en andere software. 
                            Alles staat al klaar!
                        </p>
                    </div>
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Werkt overal hetzelfde</h3>
                        <p class="text-slate-700 text-sm">
                            Of je nu op Windows, Mac of Linux werkt, Curio DevBox werkt altijd hetzelfde. 
                            Geen "bij mij werkt het wel" problemen meer!
                        </p>
                    </div>
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Echte werkomgeving</h3>
                        <p class="text-slate-700 text-sm">
                            Je leert werken met dezelfde tools die professionals gebruiken. Dit helpt je voorbereiden 
                            op je stage en toekomstige baan.
                        </p>
                    </div>
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Meerdere projecten</h3>
                        <p class="text-slate-700 text-sm">
                            Je kunt verschillende projecten naast elkaar hebben zonder dat ze elkaar in de weg zitten. 
                            Perfect voor verschillende opdrachten!
                        </p>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <div class="bg-slate-900 rounded-xl shadow-sm p-8 text-center">
                <h2 class="text-3xl font-bold text-white mb-4">Klaar om te beginnen?</h2>
                <p class="text-slate-300 mb-6">
                    Start je eerste project en ontdek hoe makkelijk full stack development kan zijn!
                </p>
                <a href="index.php" class="inline-block px-8 py-3 bg-white text-slate-900 rounded-lg hover:bg-slate-100 transition-colors font-semibold">
                    Ga naar Dashboard
                </a>
            </div>
        </div>
    </div>
</body>
</html>

