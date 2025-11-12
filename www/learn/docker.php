<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wat is Docker? - Curio DevBox</title>
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
            <a href="../about.php" class="inline-flex items-center text-slate-600 hover:text-slate-900 mb-6 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Terug naar uitleg
            </a>
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Wat is Docker?</h1>
            <p class="text-xl text-slate-600">De basis van Curio DevBox uitgelegd</p>
        </header>

        <!-- Main Content -->
        <div class="space-y-8">
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
                                <code class="bg-slate-100 px-2 py-1 rounded">http://localhost:8080</code> en je ziet je startscherm!
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

            <!-- Docker Containers -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat zijn Docker Containers?</h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    Een <strong>container</strong> is een lichtgewicht, draagbare omgeving die alles bevat wat nodig is om een applicatie te draaien. 
                    In Curio DevBox heb je verschillende containers:
                </p>
                <ul class="list-disc list-inside text-slate-700 space-y-2 ml-4 mb-4">
                    <li><strong>PHP container:</strong> Draait je PHP code</li>
                    <li><strong>MySQL container:</strong> Bevat je database</li>
                    <li><strong>Nginx/Apache container:</strong> Serveert je websites</li>
                    <li><strong>Node.js container:</strong> Voor JavaScript applicaties</li>
                    <li><strong>phpMyAdmin container:</strong> Voor database beheer</li>
                </ul>
                <p class="text-slate-700 leading-relaxed">
                    Elke container is geïsoleerd, maar ze kunnen met elkaar communiceren via een netwerk. 
                    Dit betekent dat je PHP container kan praten met je MySQL container, zonder dat ze elkaar in de weg zitten.
                </p>
            </section>

            <!-- Docker Compose -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat is Docker Compose?</h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <strong>Docker Compose</strong> is een tool die het makkelijk maakt om meerdere containers tegelijk te beheren. 
                    In plaats van elke container apart te starten, beschrijf je alles in één bestand (<code class="bg-slate-100 px-2 py-1 rounded">docker-compose.yml</code>).
                </p>
                <div class="bg-slate-50 border-l-4 border-slate-500 p-4 my-6">
                    <p class="text-slate-900 font-semibold mb-2">Voorbeeld:</p>
                    <p class="text-slate-800">
                        Met <code class="bg-white px-2 py-1 rounded">docker-compose up -d</code> start je alle containers tegelijk. 
                        Met <code class="bg-white px-2 py-1 rounded">docker-compose down</code> stop je alles weer.
                    </p>
                </div>
            </section>

            <!-- Belangrijke Commando's -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Belangrijke Docker Commando's</h2>
                <div class="space-y-4">
                    <div class="bg-slate-50 p-4 rounded-lg">
                        <code class="text-slate-900 font-mono">docker-compose up -d</code>
                        <p class="text-slate-700 text-sm mt-2">Start alle containers in de achtergrond</p>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-lg">
                        <code class="text-slate-900 font-mono">docker-compose down</code>
                        <p class="text-slate-700 text-sm mt-2">Stop alle containers</p>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-lg">
                        <code class="text-slate-900 font-mono">docker-compose ps</code>
                        <p class="text-slate-700 text-sm mt-2">Toon welke containers draaien</p>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-lg">
                        <code class="text-slate-900 font-mono">docker-compose logs</code>
                        <p class="text-slate-700 text-sm mt-2">Bekijk de logs van alle containers</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>

