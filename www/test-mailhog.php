<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MailHog Test - E-mail Testen</title>
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
            <h1 class="text-5xl font-bold text-slate-900 mb-4">MailHog E-mail Test</h1>
            <p class="text-xl text-slate-600">Test je e-mails zonder ze daadwerkelijk te versturen</p>
        </header>

        <!-- Main Content -->
        <div class="space-y-8">
            <!-- Info Section -->
            <section class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-900 mb-2">Wat is MailHog?</h2>
                <p class="text-blue-800 mb-3">
                    MailHog vangt alle e-mails op die je applicatie verstuurt, zodat je ze kunt testen zonder 
                    echte e-mails te versturen. Perfect voor ontwikkeling!
                </p>
                <div class="flex gap-4">
                    <a href="http://localhost:8025" target="_blank" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                        Open MailHog UI →
                    </a>
                    <a href="learn/mailhog.php" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors font-medium">
                        Meer leren over MailHog →
                    </a>
                </div>
            </section>

            <?php
            require_once __DIR__ . '/includes/mailhog-helper.php';
            
            $message = '';
            $messageType = '';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $to = $_POST['to'] ?? '';
                $subject = $_POST['subject'] ?? 'Test Email';
                $body = $_POST['body'] ?? '';

                if (!empty($to) && !empty($body)) {
                    // Gebruik de eenvoudige helper functie
                    $result = sendMailHogEmail($to, $subject, $body);
                    
                    
                    if ($result['success']) {
                        $message = "✅ E-mail succesvol verstuurd! Bekijk het in <a href='http://localhost:8025' target='_blank' class='underline font-semibold'>MailHog UI</a>.";
                        $messageType = 'success';
                    } else {
                        $errorMsg = $result['error'] ?? 'Onbekende fout';
                        $message = "❌ Er is een fout opgetreden: " . htmlspecialchars($errorMsg);
                        $messageType = 'error';
                    }
                } else {
                    $message = "⚠️ Vul alle velden in.";
                    $messageType = 'warning';
                }
            }
            ?>

            <!-- Test Form -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Stuur een Test E-mail</h2>
                
                <?php if ($message): ?>
                    <div class="mb-6 p-4 rounded-lg <?php echo $messageType === 'success' ? 'bg-green-50 border border-green-200 text-green-800' : ($messageType === 'error' ? 'bg-red-50 border border-red-200 text-red-800' : 'bg-yellow-50 border border-yellow-200 text-yellow-800'); ?>">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" class="space-y-4">
                    <div>
                        <label for="to" class="block text-sm font-medium text-slate-700 mb-2">
                            Aan (E-mail adres)
                        </label>
                        <input 
                            type="email" 
                            id="to" 
                            name="to" 
                            value="<?php echo htmlspecialchars($_POST['to'] ?? 'test@example.com'); ?>"
                            class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="test@example.com"
                            required
                        >
                        <p class="text-slate-500 text-sm mt-1">Het e-mailadres maakt niet uit - MailHog vangt alles op!</p>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-slate-700 mb-2">
                            Onderwerp
                        </label>
                        <input 
                            type="text" 
                            id="subject" 
                            name="subject" 
                            value="<?php echo htmlspecialchars($_POST['subject'] ?? 'Test E-mail van Curio DevBox'); ?>"
                            class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Test E-mail"
                            required
                        >
                    </div>

                    <div>
                        <label for="body" class="block text-sm font-medium text-slate-700 mb-2">
                            Bericht
                        </label>
                        <textarea 
                            id="body" 
                            name="body" 
                            rows="6"
                            class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Typ hier je bericht..."
                            required
                        ><?php echo htmlspecialchars($_POST['body'] ?? ''); ?></textarea>
                    </div>

                    <button 
                        type="submit" 
                        class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold"
                    >
                        Verstuur Test E-mail
                    </button>
                </form>
            </section>

            <!-- Code Examples -->
            <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Hoe gebruik je MailHog in je Code?</h2>
                
                <div class="space-y-6">
                    <!-- Eenvoudige Helper Functie -->
                    <div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Methode 1: Eenvoudige Helper Functie (Aanbevolen)</h3>
                        <p class="text-slate-700 text-sm mb-3">
                            De eenvoudigste manier! Gebruik de helper functie - geen complexe code nodig:
                        </p>
                        <div class="bg-slate-900 text-green-400 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <div><span class="text-blue-400">&lt;?php</span></div>
                            <div class="mt-2"><span class="text-purple-400">require_once</span> <span class="text-yellow-300">'includes/mailhog-helper.php'</span>;</div>
                            <div class="mt-2"><span class="text-gray-500">// Stuur een e-mail - zo simpel!</span></div>
                            <div class="mt-2"><span class="text-purple-400">$result</span> = <span class="text-blue-400">sendMailHogEmail</span>(</div>
                            <div class="ml-4"><span class="text-yellow-300">'test@example.com'</span>, <span class="text-gray-500">// Aan</span></div>
                            <div class="ml-4"><span class="text-yellow-300">'Onderwerp van de e-mail'</span>, <span class="text-gray-500">// Onderwerp</span></div>
                            <div class="ml-4"><span class="text-yellow-300">'Dit is het bericht'</span> <span class="text-gray-500">// Bericht</span></div>
                            <div>);</div>
                            <div class="mt-2"><span class="text-purple-400">if</span> (<span class="text-purple-400">$result</span>[<span class="text-yellow-300">'success'</span>]) {</div>
                            <div class="ml-4"><span class="text-blue-400">echo</span> <span class="text-yellow-300">'E-mail verstuurd!'</span>;</div>
                            <div>}</div>
                            <div><span class="text-blue-400">?&gt;</span></div>
                        </div>
                        <div class="bg-green-50 border-l-4 border-green-500 p-3 rounded-lg mt-3">
                            <p class="text-green-800 text-sm">
                                <strong>✓ Voordeel:</strong> Geen complexe socket code nodig! Gewoon één simpele functie aanroepen.
                            </p>
                        </div>
                    </div>

                    <!-- PHPMailer Example -->
                    <div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Methode 2: PHPMailer (Voor Geavanceerd Gebruik)</h3>
                        <p class="text-slate-700 text-sm mb-3">
                            Als je meer controle nodig hebt, kun je PHPMailer gebruiken (vereist Composer):
                        </p>
                        <div class="bg-slate-900 text-green-400 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <div><span class="text-blue-400">&lt;?php</span></div>
                            <div class="mt-2"><span class="text-purple-400">use</span> <span class="text-blue-400">PHPMailer\PHPMailer\PHPMailer</span>;</div>
                            <div class="mt-2"><span class="text-purple-400">$mail</span> = <span class="text-purple-400">new</span> <span class="text-blue-400">PHPMailer</span>(<span class="text-orange-400">true</span>);</div>
                            <div><span class="text-purple-400">$mail</span>-&gt;<span class="text-blue-400">isSMTP</span>();</div>
                            <div><span class="text-purple-400">$mail</span>-&gt;<span class="text-blue-400">Host</span> = <span class="text-yellow-300">'mailhog'</span>;</div>
                            <div><span class="text-purple-400">$mail</span>-&gt;<span class="text-blue-400">Port</span> = <span class="text-orange-400">1025</span>;</div>
                            <div><span class="text-purple-400">$mail</span>-&gt;<span class="text-blue-400">setFrom</span>(<span class="text-yellow-300">'test@example.com'</span>);</div>
                            <div><span class="text-purple-400">$mail</span>-&gt;<span class="text-blue-400">addAddress</span>(<span class="text-yellow-300">'ontvanger@example.com'</span>);</div>
                            <div><span class="text-purple-400">$mail</span>-&gt;<span class="text-blue-400">Subject</span> = <span class="text-yellow-300">'Test'</span>;</div>
                            <div><span class="text-purple-400">$mail</span>-&gt;<span class="text-blue-400">Body</span> = <span class="text-yellow-300">'Bericht'</span>;</div>
                            <div><span class="text-purple-400">$mail</span>-&gt;<span class="text-blue-400">send</span>();</div>
                            <div><span class="text-blue-400">?&gt;</span></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Configuration Info -->
            <section class="bg-slate-50 rounded-xl shadow-sm p-8 border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">MailHog Configuratie</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg">
                        <h3 class="font-semibold text-slate-900 mb-2">SMTP Instellingen</h3>
                        <ul class="text-slate-700 text-sm space-y-1">
                            <li><strong>Host:</strong> mailhog</li>
                            <li><strong>Port:</strong> 1025</li>
                            <li><strong>Gebruikersnaam:</strong> (niet nodig)</li>
                            <li><strong>Wachtwoord:</strong> (niet nodig)</li>
                        </ul>
                    </div>
                    <div class="bg-white p-4 rounded-lg">
                        <h3 class="font-semibold text-slate-900 mb-2">Web Interface</h3>
                        <ul class="text-slate-700 text-sm space-y-1">
                            <li><strong>URL:</strong> <a href="http://localhost:8025" target="_blank" class="text-blue-600 hover:underline">http://localhost:8025</a></li>
                            <li><strong>Functie:</strong> Bekijk alle ontvangen e-mails</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>

