<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wat is Node.js? - Curio DevBox</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">
    <div class="container mx-auto px-4 py-12 max-w-4xl">
        <header class="mb-12">
            <a href="../about.php" class="inline-flex items-center text-slate-600 hover:text-slate-900 mb-6 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Terug naar overzicht
            </a>
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Wat is Node.js?</h1>
            <p class="text-xl text-slate-600">JavaScript op de server</p>
        </header>

        <div class="space-y-8">
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat is Node.js precies?</h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <strong>Node.js</strong> is een runtime omgeving die JavaScript laat draaien op de server, 
                    niet alleen in de browser. Normaal gesproken draait JavaScript alleen in je browser, maar 
                    met Node.js kun je JavaScript gebruiken om servers te bouwen!
                </p>
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                    <p class="text-blue-900 font-semibold mb-2">Eenvoudige vergelijking:</p>
                    <p class="text-blue-800">
                        JavaScript in de browser = interactieve websites (knoppen, animaties, formulieren)<br>
                        JavaScript met Node.js = server applicaties (API's, real-time features, backend logica)
                    </p>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Waarom Node.js gebruiken?</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Eén taal voor alles</h3>
                        <p class="text-green-800 text-sm">Je gebruikt JavaScript voor zowel frontend als backend. Geen PHP of Python nodig!</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Snel en modern</h3>
                        <p class="text-green-800 text-sm">Node.js is gebouwd voor snelheid en kan veel gelijktijdige verbindingen aan.</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Grote community</h3>
                        <p class="text-green-800 text-sm">Miljoenen pakketten beschikbaar via npm (Node Package Manager).</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Real-time apps</h3>
                        <p class="text-green-800 text-sm">Perfect voor chat apps, live updates, en interactieve features.</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat kun je met Node.js maken?</h2>
                <ul class="space-y-3 text-slate-700">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>API's:</strong> Backend services die data leveren aan frontend applicaties</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Real-time applicaties:</strong> Chat apps, live dashboards, multiplayer games</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Webservers:</strong> Je eigen server bouwen zonder Apache of Nginx</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Command-line tools:</strong> Handige scripts en automatisering</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Microservices:</strong> Kleine, onafhankelijke services die samenwerken</span>
                    </li>
                </ul>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Node.js vs PHP</h2>
                <div class="space-y-4">
                    <div class="border-l-4 border-purple-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">PHP</h3>
                        <p class="text-slate-700">Traditioneel, veel gebruikt voor websites, makkelijk te leren, werkt goed met databases</p>
                    </div>
                    <div class="border-l-4 border-green-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Node.js</h3>
                        <p class="text-slate-700">Modern, snel, perfect voor real-time apps, gebruikt JavaScript (die je al kent van frontend)</p>
                    </div>
                    <p class="text-slate-700 mt-4">
                        <strong>Beide zijn handig!</strong> PHP is geweldig voor traditionele websites, Node.js is ideaal 
                        voor moderne, interactieve applicaties. In Curio DevBox heb je beide, zodat je kunt leren en kiezen!
                    </p>
                </div>
            </section>

            <section class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow-sm p-8 border border-blue-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Node.js in Curio DevBox</h2>
                <p class="text-slate-700 mb-4">
                    Curio DevBox heeft <strong>Node.js 20</strong> geïnstalleerd. Je kunt direct beginnen met JavaScript 
                    applicaties bouwen op de server!
                </p>
                <p class="text-slate-700">
                    Maak een <code class="bg-white px-2 py-1 rounded">package.json</code> bestand, installeer npm pakketten, 
                    en start je Node.js applicatie. Alles wat je nodig hebt om moderne web applicaties te bouwen!
                </p>
            </section>

            <div class="bg-slate-900 rounded-xl shadow-sm p-8 text-center">
                <a href="../about.php" class="inline-block px-8 py-3 bg-white text-slate-900 rounded-lg hover:bg-slate-100 transition-colors font-semibold">
                    Terug naar overzicht
                </a>
            </div>
        </div>
    </div>
</body>
</html>

