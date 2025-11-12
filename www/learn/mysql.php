<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wat is MySQL? - Curio DevBox</title>
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
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Wat is MySQL?</h1>
            <p class="text-xl text-slate-600">Een eenvoudige uitleg over databases</p>
        </header>

        <div class="space-y-8">
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat is MySQL precies?</h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <strong>MySQL</strong> is een database management systeem. Het is een programma dat helpt bij het 
                    opslaan, organiseren en ophalen van grote hoeveelheden gegevens op een gestructureerde manier.
                </p>
                <p class="text-slate-700 leading-relaxed mb-4">
                    MySQL is een van de meest populaire databases ter wereld en wordt gebruikt door miljoenen websites, 
                    waaronder Facebook, YouTube, Twitter, en WordPress.
                </p>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Database = Digitale Kast</h2>
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-4">
                    <p class="text-blue-900 font-semibold mb-2">Eenvoudige vergelijking:</p>
                    <p class="text-blue-800 mb-2">
                        Stel je voor: je hebt een grote kast met lades. Elke lade heeft een label en bevat geordende informatie.
                    </p>
                    <ul class="text-blue-800 space-y-1 ml-4">
                        <li><strong>Database</strong> = De hele kast (bijvoorbeeld: "games database")</li>
                        <li><strong>Tabel</strong> = Een lade in de kast (bijvoorbeeld: "games tabel", "gebruikers tabel")</li>
                        <li><strong>Rij</strong> = Een item in de lade (bijvoorbeeld: één specifiek game)</li>
                        <li><strong>Kolom</strong> = Een eigenschap van het item (bijvoorbeeld: titel, prijs, genre)</li>
                    </ul>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Waarom een database gebruiken?</h2>
                <div class="space-y-4">
                    <div class="border-l-4 border-green-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Zonder database:</h3>
                        <p class="text-slate-700">Je zou voor elk game een apart HTML bestand moeten maken. Met 100 games = 100 bestanden! En als je een prijs wilt aanpassen, moet je handmatig het bestand bewerken.</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Met database:</h3>
                        <p class="text-slate-700">Alle games staan op één plek. Je kunt gemakkelijk zoeken, filteren, sorteren, en aanpassen. Eén wijziging en alle bezoekers zien het direct!</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Hoe werkt MySQL?</h2>
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je maakt een tabel aan</h3>
                            <p class="text-slate-700">Je definieert welke kolommen je nodig hebt (titel, prijs, genre, etc.)</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je voegt data toe</h3>
                            <p class="text-slate-700">Via een formulier of direct in de database voeg je games toe</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je haalt data op</h3>
                            <p class="text-slate-700">PHP vraagt aan MySQL: "Geef me alle games" en MySQL stuurt de data terug</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">4</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je toont het op je website</h3>
                            <p class="text-slate-700">PHP maakt er mooie HTML van en de bezoeker ziet alle games</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">SQL - De taal van databases</h2>
                <p class="text-slate-700 mb-4">
                    <strong>SQL</strong> (Structured Query Language) is de taal die je gebruikt om met MySQL te praten. 
                    Het is een speciale taal om databases te beheren.
                </p>
                <div class="bg-slate-100 p-4 rounded-lg space-y-2">
                    <p class="text-sm font-semibold text-slate-700">Voorbeelden van SQL commando's:</p>
                    <code class="block text-sm">SELECT * FROM games;</code>
                    <p class="text-xs text-slate-600">→ "Geef me alle games"</p>
                    <code class="block text-sm">INSERT INTO games (title, price) VALUES ('Nieuw Game', 29.99);</code>
                    <p class="text-xs text-slate-600">→ "Voeg een nieuw game toe"</p>
                    <code class="block text-sm">UPDATE games SET price = 19.99 WHERE id = 1;</code>
                    <p class="text-xs text-slate-600">→ "Verander de prijs van game met id 1"</p>
                </div>
            </section>

            <section class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow-sm p-8 border border-blue-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">MySQL in Curio DevBox</h2>
                <p class="text-slate-700 mb-4">
                    Curio DevBox heeft <strong>MySQL 8.0</strong> geïnstalleerd. Je hebt direct toegang tot een werkende 
                    database waar je mee kunt experimenteren.
                </p>
                <p class="text-slate-700">
                    Je kunt databases aanmaken, tabellen maken, en data toevoegen. Alles wat je nodig hebt om te leren 
                    hoe databases werken!
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

