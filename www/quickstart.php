<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Start - Je Eerste Project Maken</title>
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
            <a href="about.php" class="inline-flex items-center text-slate-600 hover:text-slate-900 mb-6 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Terug naar uitleg
            </a>
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Quick Start: Je Eerste Project</h1>
            <p class="text-xl text-slate-600">Volg deze stappen om je eerste project te maken in Curio DevBox</p>
        </header>

        <!-- Main Content -->
        <div class="space-y-8">
            <!-- Intro -->
            <section class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-900 mb-2">Klaar om te beginnen?</h2>
                <p class="text-blue-800">
                    In deze handleiding leer je stap voor stap hoe je je eerste project maakt. We gaan een simpele 
                    "Hallo Wereld" website maken met HTML. Volg de stappen en je hebt binnen 5 minuten je eerste project!
                </p>
            </section>

            <!-- Stap 1: Docker starten -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl">
                        1
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-4">Start Curio DevBox</h2>
                        <p class="text-slate-700 mb-4">
                            Open Docker Desktop op je computer en start Curio DevBox.
                        </p>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">a</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Open Docker Desktop</p>
                                    <p class="text-slate-600 text-sm">Zoek naar "Docker Desktop" in je startmenu en open het programma</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">b</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Wacht tot Docker Desktop is opgestart</p>
                                    <p class="text-slate-600 text-sm">Je ziet een Docker icoon in je taakbalk wanneer het klaar is</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">c</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Start Curio DevBox</p>
                                    <p class="text-slate-600 text-sm">
                                        <img src="img/docker.png" alt="Docker Desktop">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-lg">
                            <p class="text-blue-800 text-sm">
                                <strong>Tip:</strong> Wacht tot alle containers zijn gestart. Dit kan een paar minuten duren bij de eerste keer. 
                                Je kunt de status zien in Docker Desktop onder "Containers".
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Stap 2: Visual Studio Code openen -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl">
                        2
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-4">Open Visual Studio Code</h2>
                        <p class="text-slate-700 mb-4">
                            Open Visual Studio Code en open de www folder van Curio DevBox.
                        </p>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">a</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Open Visual Studio Code</p>
                                    <p class="text-slate-600 text-sm">Druk op de Windows toets en typ "Visual Studio Code", druk op Enter</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">b</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Open de www folder</p>
                                    <p class="text-slate-600 text-sm">Klik op <strong>File</strong> → <strong>Open Folder</strong> in het menu</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">c</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Navigeer naar de www map</p>
                                    <p class="text-slate-600 text-sm">
                                        De www map vind je in de Curio DevBox folder. Als je de instructies netjes hebt gevolgd staat deze in:
                                    </p>
                                    <code class="bg-slate-100 px-2 py-1 rounded text-sm block mt-2">C:\Users\%USERNAME%\curiodevbox\www</code>
                                    <p class="text-slate-600 text-sm mt-2">
                                        <strong>Tip:</strong> Vervang <code class="bg-slate-200 px-1 py-0.5 rounded">%USERNAME%</code> met jouw gebruikersnaam (bijvoorbeeld: C:\Users\fedde\curiodevbox\www)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Stap 3: Nieuwe folder aanmaken -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl">
                        3
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-4">Maak een Nieuwe Project Folder</h2>
                        <p class="text-slate-700 mb-4">
                            Je bent nu al in de <code class="bg-slate-100 px-2 py-1 rounded">www</code> folder. 
                            Dit is waar al je projecten komen te staan. Maak hier een nieuwe folder voor je project.
                        </p>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">a</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Rechtermuisklik in de explorer (linkerzijde van Visual Studio Code)</p>
                                    <p class="text-slate-600 text-sm">Kies "New Folder" uit het menu</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">b</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Geef je folder een naam, bijvoorbeeld: <code class="bg-slate-100 px-2 py-1 rounded">mijn-eerste-project</code></p>
                                    <p class="text-slate-600 text-sm">Gebruik kleine letters en streepjes in plaats van spaties</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-50 border border-slate-200 p-4 rounded-lg">
                            <h3 class="font-semibold text-slate-900 mb-2">Goede folder namen:</h3>
                            <ul class="text-slate-700 text-sm space-y-1">
                                <li>✓ <code class="bg-slate-200 px-2 py-1 rounded">mijn-eerste-project</code></li>
                                <li>✓ <code class="bg-slate-200 px-2 py-1 rounded">webshop</code></li>
                                <li>✓ <code class="bg-slate-200 px-2 py-1 rounded">blog-site</code></li>
                                <li>✗ <code class="bg-red-100 px-2 py-1 rounded">Mijn Project</code> (geen hoofdletters of spaties)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Stap 4: Eerste bestand aanmaken -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl">
                        4
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-4">Maak je Eerste Bestand</h2>
                        <p class="text-slate-700 mb-4">
                            Nu ga je je eerste HTML bestand maken. Dit wordt de startpagina van je website.
                        </p>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">a</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Rechtermuisklik op je nieuwe folder</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">b</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Kies "New File"</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold text-sm mt-0.5">c</div>
                                <div>
                                    <p class="text-slate-700 font-medium">Geef het bestand de naam: <code class="bg-slate-100 px-2 py-1 rounded">index.html</code></p>
                                    <p class="text-slate-600 text-sm">Dit is de standaard naam voor de startpagina van een website</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Stap 5: Code schrijven -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl">
                        5
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-4">Schrijf je Eerste Code</h2>
                        <p class="text-slate-700 mb-4">
                            Open het <code class="bg-slate-100 px-2 py-1 rounded">index.html</code> bestand en typ de volgende code:
                        </p>
                        <div class="bg-slate-900 text-green-400 p-4 rounded-lg font-mono text-sm mb-4 overflow-x-auto">
                            <div>&lt;!DOCTYPE html&gt;</div>
                            <div>&lt;html lang="nl"&gt;</div>
                            <div>&lt;head&gt;</div>
                            <div class="ml-4">&lt;meta charset="UTF-8"&gt;</div>
                            <div class="ml-4">&lt;title&gt;Mijn Eerste Website&lt;/title&gt;</div>
                            <div>&lt;/head&gt;</div>
                            <div>&lt;body&gt;</div>
                            <div class="ml-4">&lt;h1&gt;Hallo Wereld!&lt;/h1&gt;</div>
                            <div class="ml-4">&lt;p&gt;Dit is mijn eerste website in Curio DevBox!&lt;/p&gt;</div>
                            <div>&lt;/body&gt;</div>
                            <div>&lt;/html&gt;</div>
                        </div>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-lg">
                            <p class="text-blue-800 text-sm">
                                <strong>Tip:</strong> Sla het bestand op met <code class="bg-blue-100 px-2 py-1 rounded">Ctrl+S</code> (Windows) 
                                of <code class="bg-blue-100 px-2 py-1 rounded">Cmd+S</code> (Mac)
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Stap 6: Website bekijken -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl">
                        6
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-4">Bekijk je Website</h2>
                        <p class="text-slate-700 mb-4">
                            Nu kun je je website bekijken in de browser! Je kunt ook terug naar het <a href="index.php" class="text-blue-600 hover:text-blue-700 underline font-semibold">dashboard</a> gaan. 
                            Daar vind je onder "Jouw Projecten" je zojuist aangemaakte project!
                        </p>
                        <div class="space-y-3 mb-4">
                            <div class="bg-slate-50 border border-slate-200 p-4 rounded-lg">
                                <h3 class="font-semibold text-slate-900 mb-2">Via Nginx:</h3>
                                <p class="text-slate-700 mb-2">
                                    Open je browser en ga naar:
                                </p>
                                <code class="bg-slate-200 px-3 py-2 rounded block text-sm">
                                    http://localhost/mijn-eerste-project/
                                </code>
                            </div>
                            <div class="bg-slate-50 border border-slate-200 p-4 rounded-lg">
                                <h3 class="font-semibold text-slate-900 mb-2">Via Apache:</h3>
                                <p class="text-slate-700 mb-2">
                                    Of gebruik Apache:
                                </p>
                                <code class="bg-slate-200 px-3 py-2 rounded block text-sm">
                                    http://localhost:8080/mijn-eerste-project/
                                </code>
                            </div>
                        </div>
                        <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-lg">
                            <p class="text-green-800 text-sm">
                                <strong>Gefeliciteerd! 🎉</strong> Je hebt je eerste website gemaakt! 
                                Vervang <code class="bg-green-100 px-2 py-1 rounded">mijn-eerste-project</code> met de naam van jouw folder.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Volgende stappen -->
            <section class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl shadow-sm p-8 border border-purple-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Wat Nu?</h2>
                <p class="text-slate-700 mb-6">
                    Je hebt nu je eerste project gemaakt! Hier zijn enkele volgende stappen die je kunt proberen:
                </p>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-slate-900 mb-2">📚 Leer Meer</h3>
                        <p class="text-slate-700 text-sm mb-3">
                            Bekijk de voorbeeldprojecten in Curio DevBox om te zien hoe andere projecten zijn opgebouwd.
                        </p>
                        <a href="index.php" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                            Bekijk voorbeelden →
                        </a>
                    </div>
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-slate-900 mb-2">🎨 Maak het Mooier</h3>
                        <p class="text-slate-700 text-sm mb-3">
                            Voeg CSS toe om je website te stylen en mooier te maken.
                        </p>
                        <a href="learn/php.php" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                            Leer over PHP →
                        </a>
                    </div>
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-slate-900 mb-2">💾 Database Toevoegen</h3>
                        <p class="text-slate-700 text-sm mb-3">
                            Leer hoe je een database gebruikt met je project.
                        </p>
                        <a href="learn/mysql.php" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                            Leer over MySQL →
                        </a>
                    </div>
                    <div class="bg-white rounded-lg p-4">
                        <h3 class="font-semibold text-slate-900 mb-2">🚀 Volgende Project</h3>
                        <p class="text-slate-700 text-sm mb-3">
                            Maak een nieuw project en experimenteer met verschillende functies.
                        </p>
                        <a href="index.php" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                            Ga naar dashboard →
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>

