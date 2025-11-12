<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wat is Redis? - Curio DevBox</title>
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
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Wat is Redis?</h1>
            <p class="text-xl text-slate-600">Snelle data opslag</p>
        </header>

        <div class="space-y-8">
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat is Redis precies?</h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <strong>Redis</strong> staat voor "Remote Dictionary Server". Het is een supersnelle database die 
                    gegevens in het geheugen (RAM) opslaat in plaats van op de harde schijf. Dit maakt het extreem snel!
                </p>
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                    <p class="text-blue-900 font-semibold mb-2">Eenvoudige vergelijking:</p>
                    <p class="text-blue-800">
                        MySQL = Een grote kast (harde schijf) - duurt even om iets te pakken<br>
                        Redis = Een bureau (geheugen) - alles ligt direct voor je, super snel!
                    </p>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Waarom Redis gebruiken?</h2>
                <div class="space-y-4">
                    <div class="border-l-4 border-green-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Extreem snel</h3>
                        <p class="text-slate-700">Omdat data in het geheugen staat, is het duizenden keren sneller dan een normale database</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Perfect voor tijdelijke data</h3>
                        <p class="text-slate-700">Sessies, cache, tijdelijke berekeningen - alles wat snel moet maar niet permanent hoeft te zijn</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Maakt websites sneller</h3>
                        <p class="text-slate-700">Door veelgebruikte data in Redis op te slaan, hoef je niet telkens de database te vragen</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wanneer gebruik je Redis?</h2>
                <ul class="space-y-3 text-slate-700">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Sessies opslaan:</strong> Wanneer een gebruiker inlogt, onthoudt Redis wie hij is</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Cache:</strong> Veelgebruikte data tijdelijk opslaan zodat je website sneller laadt</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Real-time features:</strong> Live scores, tellers, of andere data die constant verandert</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Wachtrijen:</strong> Taken in een rij zetten die later verwerkt moeten worden</span>
                    </li>
                </ul>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Redis vs MySQL</h2>
                <div class="space-y-4">
                    <div class="border-l-4 border-blue-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">MySQL</h3>
                        <p class="text-slate-700">Permanente opslag, complexe queries, relaties tussen data, langzamer maar betrouwbaar</p>
                        <p class="text-sm text-slate-600 mt-1">Gebruik voor: Gebruikers, producten, bestellingen - alles wat permanent moet blijven</p>
                    </div>
                    <div class="border-l-4 border-red-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Redis</h3>
                        <p class="text-slate-700">Tijdelijke opslag, super snel, eenvoudige data structuren, data kan verloren gaan bij herstart</p>
                        <p class="text-sm text-slate-600 mt-1">Gebruik voor: Sessies, cache, tijdelijke data - alles wat snel moet maar niet permanent hoeft</p>
                    </div>
                    <p class="text-slate-700 mt-4">
                        <strong>Beide zijn belangrijk!</strong> MySQL voor permanente data, Redis voor snelheid. 
                        Veel websites gebruiken beide samen!
                    </p>
                </div>
            </section>

            <section class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow-sm p-8 border border-blue-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Redis in Curio DevBox</h2>
                <p class="text-slate-700 mb-4">
                    Curio DevBox heeft <strong>Redis 7</strong> geïnstalleerd en draait op poort <strong>6379</strong>. 
                    Je kunt direct beginnen met het gebruiken van Redis in je PHP of Node.js applicaties!
                </p>
                <p class="text-slate-700">
                    Perfect om te leren hoe caching werkt en hoe je je website sneller kunt maken door slim gebruik 
                    te maken van Redis.
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

