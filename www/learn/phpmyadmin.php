<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wat is phpMyAdmin? - Curio DevBox</title>
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
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Wat is phpMyAdmin?</h1>
            <p class="text-xl text-slate-600">Databasebeheer zonder commando's</p>
        </header>

        <div class="space-y-8">
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat is phpMyAdmin precies?</h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <strong>phpMyAdmin</strong> is een webgebaseerde tool om MySQL databases te beheren. In plaats van 
                    ingewikkelde SQL commando's te typen, kun je met phpMyAdmin gewoon klikken en typen in een mooie interface.
                </p>
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                    <p class="text-blue-900 font-semibold mb-2">Eenvoudige vergelijking:</p>
                    <p class="text-blue-800">
                        Zonder phpMyAdmin = Je moet SQL commando's typen zoals een programmeur<br>
                        Met phpMyAdmin = Je klikt en typt zoals in Excel of een andere bekende interface
                    </p>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat kun je met phpMyAdmin doen?</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Databases beheren</h3>
                        <p class="text-green-800 text-sm">Nieuwe databases aanmaken, databases verwijderen, of tussen databases wisselen</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Tabellen maken</h3>
                        <p class="text-green-800 text-sm">Met een visuele interface kolommen toevoegen en instellingen aanpassen</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Data bekijken</h3>
                        <p class="text-green-800 text-sm">Alle data in je tabellen zien in een overzichtelijke tabel</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Data bewerken</h3>
                        <p class="text-green-800 text-sm">Direct in de interface data toevoegen, aanpassen of verwijderen</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">SQL queries uitvoeren</h3>
                        <p class="text-green-800 text-sm">Als je SQL kent, kun je ook direct queries typen en uitvoeren</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-900 mb-2">Exporteren/Importeren</h3>
                        <p class="text-green-800 text-sm">Database backups maken of data importeren vanuit bestanden</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Waarom is phpMyAdmin handig?</h2>
                <div class="space-y-4">
                    <div class="border-l-4 border-green-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Geen SQL kennis nodig</h3>
                        <p class="text-slate-700">Je hoeft niet eerst SQL te leren om met databases te werken. Je kunt direct beginnen!</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Visueel overzicht</h3>
                        <p class="text-slate-700">Je ziet direct alle tabellen, kolommen en data in een overzichtelijke interface</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Sneller werken</h3>
                        <p class="text-slate-700">Klikken is sneller dan commando's typen, vooral als je nog niet veel SQL kent</p>
                    </div>
                    <div class="border-l-4 border-orange-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Fouten voorkomen</h3>
                        <p class="text-slate-700">De interface helpt je om fouten te voorkomen en laat zien wat je doet</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Hoe gebruik je phpMyAdmin?</h2>
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Open phpMyAdmin</h3>
                            <p class="text-slate-700">Ga naar <code class="bg-slate-100 px-2 py-1 rounded">http://localhost:8081</code> in je browser</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Log in</h3>
                            <p class="text-slate-700">Gebruik je database gebruikersnaam en wachtwoord (curiodevbox / curiodevbox)</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Kies een database</h3>
                            <p class="text-slate-700">Klik op de database die je wilt bekijken (bijvoorbeeld "games")</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">4</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Beheer je data</h3>
                            <p class="text-slate-700">Klik op tabellen om data te zien, gebruik "Invoegen" om nieuwe rijen toe te voegen, of "SQL" om queries te typen</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow-sm p-8 border border-blue-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">phpMyAdmin in Curio DevBox</h2>
                <p class="text-slate-700 mb-4">
                    phpMyAdmin is direct beschikbaar in Curio DevBox op <strong>http://localhost:8081</strong>. 
                    Je kunt direct beginnen met het beheren van je databases zonder extra installatie!
                </p>
                <p class="text-slate-700">
                    Perfect om te leren hoe databases werken, data te bekijken, of snel iets aan te passen zonder 
                    code te schrijven.
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

