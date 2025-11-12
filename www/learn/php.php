<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wat is PHP? - Curio DevBox</title>
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
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Wat is PHP?</h1>
            <p class="text-xl text-slate-600">Een eenvoudige uitleg voor beginnende developers</p>
        </header>

        <div class="space-y-8">
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat is PHP precies?</h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <strong>PHP</strong> staat voor "PHP: Hypertext Preprocessor" (ja, het is een recursieve afkorting!). 
                    Het is een programmeertaal die speciaal gemaakt is voor het bouwen van websites en webapplicaties.
                </p>
                <p class="text-slate-700 leading-relaxed mb-4">
                    PHP is een <strong>server-side</strong> taal. Dat betekent dat de code op de server wordt uitgevoerd, 
                    niet in de browser van de bezoeker. Dit is anders dan JavaScript, dat in de browser draait.
                </p>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Hoe werkt PHP?</h2>
                <div class="space-y-4">
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                        <h3 class="font-semibold text-blue-900 mb-2">Eenvoudige vergelijking:</h3>
                        <p class="text-blue-800">
                            Stel je voor: iemand bezoekt je website en klikt op een knop "Bekijk alle games". 
                            De browser vraagt aan de server: "Geef me alle games". De server gebruikt PHP om alle 
                            games uit de database te halen, maakt er een mooie HTML pagina van, en stuurt die terug 
                            naar de browser. De bezoeker ziet dan alle games op zijn scherm!
                        </p>
                    </div>
                    <p class="text-slate-700">
                        PHP code wordt verwerkt <strong>voordat</strong> de HTML naar de browser wordt gestuurd. 
                        Daarom zie je in de browser alleen de resultaten, niet de PHP code zelf.
                    </p>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Waarom PHP gebruiken?</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Makkelijk te leren</h3>
                        <p class="text-green-800 text-sm">PHP heeft een eenvoudige syntax die relatief makkelijk te leren is voor beginners.</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Veel gebruikt</h3>
                        <p class="text-green-800 text-sm">WordPress, Facebook (in het begin), en miljoenen websites gebruiken PHP.</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Database integratie</h3>
                        <p class="text-green-800 text-sm">PHP werkt perfect samen met databases zoals MySQL.</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Gratis en open source</h3>
                        <p class="text-green-800 text-sm">PHP is volledig gratis te gebruiken en heeft een grote community.</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Voorbeelden van wat je met PHP kunt doen</h2>
                <ul class="space-y-3 text-slate-700">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Dynamische websites:</strong> Websites waar de inhoud verandert op basis van wat in de database staat</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Contactformulieren:</strong> Verwerken van formuliergegevens en e-mails versturen</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Inlogsystemen:</strong> Gebruikers laten inloggen en hun gegevens beheren</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Webshops:</strong> Producten tonen, winkelwagens beheren, bestellingen verwerken</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Content Management Systemen:</strong> Zoals WordPress, waar je content kunt beheren zonder code te schrijven</span>
                    </li>
                </ul>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">PHP vs HTML</h2>
                <div class="space-y-4">
                    <div class="border-l-4 border-purple-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">HTML</h3>
                        <p class="text-slate-700">Statisch - de inhoud verandert niet. Elke bezoeker ziet hetzelfde.</p>
                        <code class="block bg-slate-100 p-2 rounded mt-2 text-sm">&lt;h1&gt;Welkom&lt;/h1&gt;</code>
                    </div>
                    <div class="border-l-4 border-green-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">PHP</h3>
                        <p class="text-slate-700">Dynamisch - de inhoud kan veranderen op basis van data, tijd, gebruiker, etc.</p>
                        <code class="block bg-slate-100 p-2 rounded mt-2 text-sm">&lt;h1&gt;Welkom, &lt;?php echo $naam; ?&gt;&lt;/h1&gt;</code>
                    </div>
                </div>
            </section>

            <section class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow-sm p-8 border border-blue-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">PHP in Curio DevBox</h2>
                <p class="text-slate-700 mb-4">
                    Curio DevBox heeft <strong>PHP 8.4</strong> geïnstalleerd - de nieuwste versie! Dit betekent dat je 
                    toegang hebt tot alle moderne PHP features en de beste prestaties.
                </p>
                <p class="text-slate-700">
                    Je kunt direct beginnen met PHP code schrijven in je projecten. Plaats je <code class="bg-white px-2 py-1 rounded">.php</code> 
                    bestanden in de <code class="bg-white px-2 py-1 rounded">www/</code> folder en ze worden automatisch 
                    verwerkt door de PHP server.
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

