<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wat zijn Webservers? - Curio DevBox</title>
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
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Wat zijn Webservers?</h1>
            <p class="text-xl text-slate-600">Nginx en Apache uitgelegd</p>
        </header>

        <div class="space-y-8">
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat is een webserver?</h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    Een <strong>webserver</strong> is een programma dat op een computer draait en verantwoordelijk is voor 
                    het leveren van websites aan bezoekers. Wanneer iemand je website bezoekt, vraagt hun browser aan de 
                    webserver om de bestanden van je website.
                </p>
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                    <p class="text-blue-900 font-semibold mb-2">Eenvoudige vergelijking:</p>
                    <p class="text-blue-800">
                        Een webserver is als een <strong>ober in een restaurant</strong>. De bezoeker (browser) vraagt om 
                        een gerecht (webpagina), de ober (webserver) haalt het uit de keuken (je bestanden) en serveert 
                        het aan de bezoeker.
                    </p>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Hoe werkt het?</h2>
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Bezoeker typt een URL</h3>
                            <p class="text-slate-700">Bijvoorbeeld: <code class="bg-slate-100 px-2 py-1 rounded">http://localhost</code></p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Browser vraagt bestanden</h3>
                            <p class="text-slate-700">De browser vraagt aan de webserver: "Geef me de index.php pagina"</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Webserver verwerkt de vraag</h3>
                            <p class="text-slate-700">Als het een PHP bestand is, voert de server de PHP code uit en maakt HTML</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">4</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Webserver stuurt HTML terug</h3>
                            <p class="text-slate-700">De browser ontvangt de HTML en toont de website aan de bezoeker</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Nginx vs Apache</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="border-l-4 border-green-500 pl-4">
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Nginx</h3>
                        <ul class="space-y-2 text-slate-700">
                            <li>✓ Snel en efficiënt</li>
                            <li>✓ Modern en lichtgewicht</li>
                            <li>✓ Goed voor veel gelijktijdige bezoekers</li>
                            <li>✓ Populair bij grote websites</li>
                        </ul>
                        <p class="text-sm text-slate-600 mt-3">Gebruikt door: Netflix, Dropbox, WordPress.com</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-4">
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Apache</h3>
                        <ul class="space-y-2 text-slate-700">
                            <li>✓ Traditioneel en betrouwbaar</li>
                            <li>✓ Veel documentatie beschikbaar</li>
                            <li>✓ Makkelijk te configureren</li>
                            <li>✓ Al decennia lang populair</li>
                        </ul>
                        <p class="text-sm text-slate-600 mt-3">Gebruikt door: Miljoenen websites wereldwijd</p>
                    </div>
                </div>
                <p class="text-slate-700 mt-6">
                    <strong>Goed nieuws:</strong> In Curio DevBox heb je beide! Je kunt kiezen welke je wilt gebruiken, 
                    of zelfs beide tegelijk testen om te zien wat je voorkeur heeft.
                </p>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Waarom heb je een webserver nodig?</h2>
                <p class="text-slate-700 mb-4">
                    Zonder webserver kun je je website niet bekijken in de browser. Je kunt niet zomaar een HTML bestand 
                    openen en verwachten dat PHP code werkt - PHP moet verwerkt worden door een server!
                </p>
                <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                    <p class="text-yellow-900">
                        <strong>Tip:</strong> Als je alleen HTML/CSS gebruikt, kun je bestanden direct openen in de browser. 
                        Maar zodra je PHP gebruikt, heb je een webserver nodig. Dat is waarom Curio DevBox zo handig is!
                    </p>
                </div>
            </section>

            <section class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow-sm p-8 border border-blue-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Webservers in Curio DevBox</h2>
                <p class="text-slate-700 mb-4">
                    Curio DevBox heeft <strong>beide</strong> Nginx en Apache geïnstalleerd:
                </p>
                <ul class="space-y-2 text-slate-700">
                    <li><strong>Nginx:</strong> Beschikbaar op <code class="bg-white px-2 py-1 rounded">http://localhost</code></li>
                    <li><strong>Apache:</strong> Beschikbaar op <code class="bg-white px-2 py-1 rounded">http://localhost:8080</code></li>
                </ul>
                <p class="text-slate-700 mt-4">
                    Je kunt beide gebruiken om te zien welke je fijner vindt werken. Beide doen hetzelfde werk: 
                    je website aan bezoekers serveren!
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

