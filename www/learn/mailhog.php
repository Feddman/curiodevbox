<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wat is MailHog? - Curio DevBox</title>
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
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Wat is MailHog?</h1>
            <p class="text-xl text-slate-600">E-mail testen zonder echte e-mails</p>
        </header>

        <div class="space-y-8">
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wat is MailHog precies?</h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <strong>MailHog</strong> is een tool die alle e-mails opvangt die je applicatie probeert te versturen 
                    tijdens het ontwikkelen. In plaats van dat e-mails echt worden verstuurd, worden ze opgevangen door MailHog 
                    zodat je ze kunt bekijken zonder dat iemand daadwerkelijk een e-mail ontvangt.
                </p>
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                    <p class="text-blue-900 font-semibold mb-2">Eenvoudige vergelijking:</p>
                    <p class="text-blue-800">
                        Zonder MailHog = Elke test e-mail wordt echt verstuurd (vervelend voor testgebruikers!)<br>
                        Met MailHog = Alle e-mails worden opgevangen in een "vangnet", je bekijkt ze in een interface
                    </p>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Waarom MailHog gebruiken?</h2>
                <div class="space-y-4">
                    <div class="border-l-4 border-green-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Geen spam naar echte adressen</h3>
                        <p class="text-slate-700">Tijdens het testen stuur je misschien honderden e-mails. Met MailHog komen deze niet aan bij echte mensen!</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Direct zien wat er wordt verstuurd</h3>
                        <p class="text-slate-700">Je ziet direct in de MailHog interface hoe je e-mail eruit ziet, zonder je eigen inbox te checken</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Testen zonder e-mail server</h3>
                        <p class="text-slate-700">Je hoeft geen e-mail server in te stellen of te configureren - MailHog doet alles voor je</p>
                    </div>
                    <div class="border-l-4 border-orange-500 pl-4">
                        <h3 class="font-semibold text-slate-900 mb-2">Perfect voor ontwikkeling</h3>
                        <p class="text-slate-700">Ideal voor het testen van wachtwoord resets, registratie e-mails, nieuwsbrieven, etc.</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Hoe werkt MailHog?</h2>
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je applicatie stuurt een e-mail</h3>
                            <p class="text-slate-700">Bijvoorbeeld: een wachtwoord reset e-mail na het klikken op "wachtwoord vergeten"</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">MailHog vangt de e-mail op</h3>
                            <p class="text-slate-700">In plaats van naar een echte e-mail server te gaan, komt de e-mail bij MailHog terecht</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je bekijkt de e-mail in MailHog</h3>
                            <p class="text-slate-700">Ga naar <code class="bg-slate-100 px-2 py-1 rounded">http://localhost:8025</code> en zie alle opgevangen e-mails</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">4</div>
                        <div>
                            <h3 class="font-semibold text-slate-900 mb-1">Je test en controleert</h3>
                            <p class="text-slate-700">Je kunt zien of de e-mail correct is, of de links werken, en of alles er goed uitziet</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Wanneer gebruik je MailHog?</h2>
                <ul class="space-y-3 text-slate-700">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Contactformulieren:</strong> Testen of e-mails correct worden verstuurd wanneer iemand het formulier invult</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Registratie e-mails:</strong> Controleren of nieuwe gebruikers de juiste welkomst e-mail ontvangen</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Wachtwoord resets:</strong> Testen of de reset link correct wordt gegenereerd en verstuurd</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Nieuwsbrieven:</strong> Zien hoe je nieuwsbrief eruit ziet voordat je hem naar echte abonnees stuurt</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">•</span>
                        <span><strong>Notificaties:</strong> Testen van alle automatische e-mails die je applicatie verstuurt</span>
                    </li>
                </ul>
            </section>

            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Hoe configureer je je applicatie?</h2>
                <p class="text-slate-700 mb-4">
                    Om MailHog te gebruiken, moet je je applicatie vertellen om e-mails naar MailHog te sturen in plaats 
                    van naar een echte e-mail server:
                </p>
                <div class="bg-slate-100 p-4 rounded-lg">
                    <p class="text-sm font-semibold text-slate-700 mb-2">SMTP Instellingen:</p>
                    <ul class="text-sm text-slate-700 space-y-1">
                        <li><strong>SMTP Host:</strong> mailhog</li>
                        <li><strong>SMTP Port:</strong> 1025</li>
                        <li><strong>Gebruikersnaam:</strong> (niet nodig)</li>
                        <li><strong>Wachtwoord:</strong> (niet nodig)</li>
                    </ul>
                </div>
                <p class="text-slate-700 mt-4 text-sm">
                    Deze instellingen gebruik je in je PHP mail() functie of e-mail library configuratie.
                </p>
            </section>

            <section class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow-sm p-8 border border-blue-200">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">MailHog in Curio DevBox</h2>
                <p class="text-slate-700 mb-4">
                    MailHog is direct beschikbaar in Curio DevBox:
                </p>
                <ul class="space-y-2 text-slate-700">
                    <li><strong>Web Interface:</strong> <code class="bg-white px-2 py-1 rounded">http://localhost:8025</code> - Bekijk alle opgevangen e-mails</li>
                    <li><strong>SMTP Server:</strong> <code class="bg-white px-2 py-1 rounded">mailhog:1025</code> - Stuur hier je e-mails naartoe</li>
                </ul>
                <p class="text-slate-700 mt-4">
                    Perfect om te leren hoe e-mail werkt in web applicaties zonder het risico om per ongeluk echte e-mails te versturen!
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

