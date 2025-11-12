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
                    <div class="border-l-4 border-cyan-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">
                            <a href="learn/docker.php" class="text-cyan-600 hover:text-cyan-700 underline">Docker</a>
                        </h3>
                        <p class="text-slate-700">
                            Docker is de basis van Curio DevBox. Het zorgt ervoor dat alle tools (PHP, MySQL, webservers, etc.) 
                            in geïsoleerde containers draaien die overal hetzelfde werken. Geen installatieproblemen meer! 
                            <a href="learn/docker.php" class="text-cyan-600 hover:text-cyan-700 underline">Meer leren over Docker →</a>
                        </p>
                    </div>

                    <div class="border-l-4 border-green-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">
                            <a href="learn/php.php" class="text-green-600 hover:text-green-700 underline">PHP 8.4</a>
                        </h3>
                        <p class="text-slate-700">
                            PHP is een programmeertaal die veel gebruikt wordt voor websites. Denk aan WordPress, 
                            Laravel, of gewoon je eigen PHP websites. Curio DevBox heeft de nieuwste versie (8.4) 
                            al voor je klaar staan. <a href="learn/php.php" class="text-green-600 hover:text-green-700 underline">Meer leren over PHP →</a>
                        </p>
                    </div>

                    <div class="border-l-4 border-blue-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">
                            <a href="learn/mysql.php" class="text-blue-600 hover:text-blue-700 underline">MySQL Database</a>
                        </h3>
                        <p class="text-slate-700">
                            Een database is waar je gegevens opslaat. Bijvoorbeeld: gebruikersnamen, wachtwoorden, 
                            producten in een webshop, of berichten op een forum. MySQL is een van de meest gebruikte 
                            databases ter wereld. <a href="learn/mysql.php" class="text-blue-600 hover:text-blue-700 underline">Meer leren over MySQL →</a>
                        </p>
                    </div>

                    <div class="border-l-4 border-purple-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">
                            <a href="learn/webservers.php" class="text-purple-600 hover:text-purple-700 underline">Nginx & Apache Webservers</a>
                        </h3>
                        <p class="text-slate-700">
                            Een webserver is het programma dat je website aan de wereld toont. Curio DevBox heeft 
                            <strong>beide</strong> de populairste webservers: Nginx (snel en modern) en Apache 
                            (traditioneel en betrouwbaar). Je kunt kiezen welke je wilt gebruiken! <a href="learn/webservers.php" class="text-purple-600 hover:text-purple-700 underline">Meer leren over webservers →</a>
                        </p>
                    </div>

                    <div class="border-l-4 border-orange-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">
                            <a href="learn/nodejs.php" class="text-orange-600 hover:text-orange-700 underline">Node.js</a>
                        </h3>
                        <p class="text-slate-700">
                            Node.js laat je JavaScript gebruiken op de server. Handig voor moderne web applicaties, 
                            real-time features (zoals chat), of het bouwen van API's. <a href="learn/nodejs.php" class="text-orange-600 hover:text-orange-700 underline">Meer leren over Node.js →</a>
                        </p>
                    </div>

                    <div class="border-l-4 border-red-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">
                            <a href="learn/phpmyadmin.php" class="text-red-600 hover:text-red-700 underline">phpMyAdmin</a>
                        </h3>
                        <p class="text-slate-700">
                            Een handige webinterface om je database te beheren. In plaats van ingewikkelde commando's 
                            typen, klik je gewoon in een mooie interface om tabellen aan te maken, data te bekijken, 
                            of queries uit te voeren. <a href="learn/phpmyadmin.php" class="text-red-600 hover:text-red-700 underline">Meer leren over phpMyAdmin →</a>
                        </p>
                    </div>

                    <div class="border-l-4 border-yellow-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">
                            <a href="learn/redis.php" class="text-yellow-600 hover:text-yellow-700 underline">Redis Cache</a>
                        </h3>
                        <p class="text-slate-700">
                            Redis is een snelle opslag voor tijdelijke gegevens. Bijvoorbeeld: sessies van gebruikers, 
                            of veelgebruikte data die je snel wilt ophalen. Dit maakt je website sneller! <a href="learn/redis.php" class="text-yellow-600 hover:text-yellow-700 underline">Meer leren over Redis →</a>
                        </p>
                    </div>

                    <div class="border-l-4 border-indigo-500 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">
                            <a href="learn/mailhog.php" class="text-indigo-600 hover:text-indigo-700 underline">MailHog</a>
                        </h3>
                        <p class="text-slate-700">
                            Tijdens het ontwikkelen wil je niet per ongeluk echte e-mails versturen. MailHog vangt alle 
                            e-mails op zodat je kunt testen zonder echte e-mails te versturen. <a href="learn/mailhog.php" class="text-indigo-600 hover:text-indigo-700 underline">Meer leren over MailHog →</a>
                        </p>
                    </div>
                </div>
            </section>

                      <!-- Test je Kennis -->
                      <section class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl shadow-sm p-8 border border-purple-200 text-center">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Test je kennis!</h2>
                <p class="text-slate-700 mb-6 text-lg">
                    Denk je dat je alles begrijpt? Doe de test en beantwoord 25 vragen over Docker, Curio DevBox en de ontwikkelomgeving. 
                </p>
                <a href="learn/quiz.php" class="inline-block px-8 py-4 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors font-semibold text-lg shadow-lg hover:shadow-xl">
                    Doe de Test
                </a>
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

