<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curio DevBox - Full Stack Development Environment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">
    <div class="container mx-auto px-4 py-12 max-w-7xl">
        <!-- Header -->
        <header class="mb-12">
            <div class="flex items-center justify-between mb-8">
                <div class="w-2/3">
                    <h1 class="text-5xl font-bold text-slate-900 mb-2">Curio DevBox</h1>
                    <p class="text-xl text-slate-600">Welkom op jouw Curio ontwikkelomgeving. Vanuit deze plek worden alle services gestart die nodig zijn om goed op je computer te kunnen ontwikkelen. Meer weten over hoe dat in elkaar zit? klik op de knop hiernaast!</p>
                </div>
                <div class="flex flex-col gap-3">
                    <a href="quickstart.php" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors font-semibold shadow-lg hover:shadow-xl whitespace-nowrap text-center">
                        Quick Start: Project Maken
                    </a>
                    <a href="about.php" class="px-6 py-3 bg-slate-900 text-white rounded-lg hover:bg-slate-800 transition-colors font-medium whitespace-nowrap text-center">
                        Wat is Curio DevBox?
                    </a>
                </div>
            </div>
        </header>

        <!-- System Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200">
                <h3 class="text-sm font-semibold text-slate-500 uppercase mb-2">PHP Versie</h3>
                <p class="text-3xl font-bold text-slate-900"><?php echo phpversion(); ?></p>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200">
                <h3 class="text-sm font-semibold text-slate-500 uppercase mb-2">Server</h3>
                <p class="text-3xl font-bold text-slate-900 text-lg"><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Apache/Nginx'; ?></p>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200">
                <h3 class="text-sm font-semibold text-slate-500 uppercase mb-2">Status</h3>
                <p class="text-3xl font-bold text-green-600">Online</p>
            </div>
        </div>

        <!-- Services Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-slate-900 mb-6">Beschikbare Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="http://localhost:8080" target="_blank" class="bg-white rounded-lg shadow-sm p-6 border border-slate-200 hover:shadow-md hover:border-slate-300 transition-all group">
                    <h3 class="font-semibold text-slate-900 mb-2 group-hover:text-blue-600">Apache Server</h3>
                    <p class="text-sm text-slate-500">localhost:8080</p>
                </a>
                <a href="http://localhost" target="_blank" class="bg-white rounded-lg shadow-sm p-6 border border-slate-200 hover:shadow-md hover:border-slate-300 transition-all group">
                    <h3 class="font-semibold text-slate-900 mb-2 group-hover:text-blue-600">Nginx Server</h3>
                    <p class="text-sm text-slate-500">localhost</p>
                </a>
                <a href="http://localhost:8081" target="_blank" class="bg-white rounded-lg shadow-sm p-6 border border-slate-200 hover:shadow-md hover:border-slate-300 transition-all group">
                    <h3 class="font-semibold text-slate-900 mb-2 group-hover:text-blue-600">phpMyAdmin</h3>
                    <p class="text-sm text-slate-500">Database Management</p>
                </a>
                <a href="http://localhost:8082" target="_blank" class="bg-white rounded-lg shadow-sm p-6 border border-slate-200 hover:shadow-md hover:border-slate-300 transition-all group">
                    <h3 class="font-semibold text-slate-900 mb-2 group-hover:text-blue-600">Adminer</h3>
                    <p class="text-sm text-slate-500">Alternative DB Tool</p>
                </a>
                <a href="http://localhost:8025" target="_blank" class="bg-white rounded-lg shadow-sm p-6 border border-slate-200 hover:shadow-md hover:border-slate-300 transition-all group">
                    <h3 class="font-semibold text-slate-900 mb-2 group-hover:text-blue-600">MailHog UI</h3>
                    <p class="text-sm text-slate-500">Email Testing Interface</p>
                </a>
                <a href="test-mailhog.php" class="bg-white rounded-lg shadow-sm p-6 border border-slate-200 hover:shadow-md hover:border-slate-300 transition-all group">
                    <h3 class="font-semibold text-slate-900 mb-2 group-hover:text-blue-600">MailHog Test</h3>
                    <p class="text-sm text-slate-500">Test E-mails Versturen</p>
                </a>
                <div class="bg-white rounded-lg shadow-sm p-6 border border-slate-200">
                    <h3 class="font-semibold text-slate-900 mb-2">Node.js</h3>
                    <p class="text-sm text-slate-500">Port 3000, 3001</p>
                </div>
            </div>
        </section>

        <!-- Example Projects Section -->
        <?php
        // Voorbeeldprojecten
        $exampleProjects = [
            'portfolio-site' => 'Een voorbeeld portfolio website voor een Curio student. Dit project demonstreert pure HTML en CSS zonder backend functionaliteit. Perfect om te leren hoe je een mooie, responsive website bouwt met alleen frontend technologieën.',
            'game-website' => 'Een complete CRUD (Create, Read, Update, Delete) applicatie voor het beheren van games. Dit project toont PHP backend ontwikkeling met MySQL database, controllers, en een gestructureerde codebase. Voorbeeld om een site met PHP te laten zien.'
        ];
        
        if (!empty($exampleProjects)) {
            echo '<section class="mb-12">';
            echo '<h2 class="text-2xl font-bold text-slate-900 mb-6">Voorbeeldprojecten</h2>';
            echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-6">';
            foreach ($exampleProjects as $project => $description) {
                echo '<div class="bg-white rounded-lg shadow-sm p-6 border border-slate-200 hover:shadow-md transition-all">';
                echo '<div class="mb-4">';
                echo '<h3 class="text-xl font-semibold text-slate-900 mb-2">' . htmlspecialchars($project) . '</h3>';
                echo '<p class="text-slate-600 text-sm leading-relaxed">' . htmlspecialchars($description) . '</p>';
                echo '</div>';
                echo '<div class="flex justify-end">';
                echo '<a href="/' . htmlspecialchars($project) . '" target="_blank" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">site bezoeken</a>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
            echo '</section>';
        }
        ?>

        <!-- User Projects Section -->
        <?php
        $projectsDir = __DIR__;
        $userProjects = [];
        $excludedItems = ['.', '..', 'img', 'node_modules', 'portfolio-site', 'game-website', 'learn'];
        
        if (is_dir($projectsDir)) {
            $items = scandir($projectsDir);
            foreach ($items as $item) {
                // Alleen directories toevoegen, geen bestanden, en geen voorbeeldprojecten
                if (!in_array($item, $excludedItems) && is_dir($projectsDir . '/' . $item)) {
                    $userProjects[] = $item;
                }
            }
        }
        
        // Sorteer projecten alfabetisch
        sort($userProjects);
        
        echo '<section class="mb-12">';
        echo '<h2 class="text-2xl font-bold text-slate-900 mb-6">Jouw Projecten</h2>';
        
        if (empty($userProjects)) {
            echo '<div class="bg-white rounded-lg shadow-sm p-8 border border-slate-200 text-center">';
            echo '<p class="text-slate-600 text-lg mb-2">Je hebt nog geen projecten aangemaakt.</p>';
            echo '<p class="text-slate-500">Maak een nieuw project aan in je www folder om te starten!</p><p class="text-orange-300"> Geen idee hoe je dat moet doen? klik dan rechtsboven op de knop "Quick Start: Project Maken"';
            echo '</div>';
        } else {
            echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">';
            foreach ($userProjects as $project) {
                echo '<div class="bg-white rounded-lg shadow-sm p-6 border border-slate-200 hover:shadow-md transition-all">';
                echo '<div class="flex items-center justify-between">';
                echo '<h3 class="font-semibold text-slate-900">' . htmlspecialchars($project) . '</h3>';
                echo '<a href="/' . htmlspecialchars($project) . '" target="_blank" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">site bezoeken</a>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        }
        echo '</section>';
        ?>

        <!-- Database Info -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-slate-900 mb-6">Database Verbindingsgegevens</h2>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-200">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    <div>
                        <p class="text-sm text-slate-500 mb-1">Host</p>
                        <p class="font-semibold text-slate-900">mysql</p>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 mb-1">Poort</p>
                        <p class="font-semibold text-slate-900">3306</p>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 mb-1">Database</p>
                        <p class="font-semibold text-slate-900">curiodevbox</p>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 mb-1">Gebruikersnaam</p>
                        <p class="font-semibold text-slate-900">curiodevbox</p>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 mb-1">Wachtwoord</p>
                        <p class="font-semibold text-slate-900">curiodevbox</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Connection Status -->
        <section>
            <h2 class="text-2xl font-bold text-slate-900 mb-6">Verbindingsstatus</h2>
            <div class="space-y-4">
                <?php
                // Test MySQL verbinding
                try {
                    $pdo = new PDO(
                        'mysql:host=mysql;dbname=curiodevbox',
                        'curiodevbox',
                        'curiodevbox',
                        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                    );
                    echo '<div class="bg-green-50 border border-green-200 rounded-lg p-4 flex items-center gap-3">';
                    echo '<div class="w-3 h-3 bg-green-500 rounded-full"></div>';
                    echo '<div>';
                    echo '<p class="font-semibold text-green-900">MySQL verbinding succesvol</p>';
                    echo '<p class="text-sm text-green-700">Database is bereikbaar en werkt correct</p>';
                    echo '</div>';
                    echo '</div>';
                } catch (PDOException $e) {
                    echo '<div class="bg-red-50 border border-red-200 rounded-lg p-4 flex items-center gap-3">';
                    echo '<div class="w-3 h-3 bg-red-500 rounded-full"></div>';
                    echo '<div>';
                    echo '<p class="font-semibold text-red-900">MySQL verbinding mislukt</p>';
                    echo '<p class="text-sm text-red-700">' . htmlspecialchars($e->getMessage()) . '</p>';
                    echo '</div>';
                    echo '</div>';
                }

                // Test Redis verbinding
                if (extension_loaded('redis')) {
                    try {
                        $redis = new Redis();
                        $redis->connect('redis', 6379);
                        $redis->set('test', 'Curio DevBox werkt!');
                        $test = $redis->get('test');
                        echo '<div class="bg-green-50 border border-green-200 rounded-lg p-4 flex items-center gap-3">';
                        echo '<div class="w-3 h-3 bg-green-500 rounded-full"></div>';
                        echo '<div>';
                        echo '<p class="font-semibold text-green-900">Redis verbinding succesvol</p>';
                        echo '<p class="text-sm text-green-700">Cache systeem is actief</p>';
                        echo '</div>';
                        echo '</div>';
                    } catch (Exception $e) {
                        echo '<div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 flex items-center gap-3">';
                        echo '<div class="w-3 h-3 bg-yellow-500 rounded-full"></div>';
                        echo '<div>';
                        echo '<p class="font-semibold text-yellow-900">Redis verbinding mislukt</p>';
                        echo '<p class="text-sm text-yellow-700">' . htmlspecialchars($e->getMessage()) . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </section>
    </div>
</body>
</html>
