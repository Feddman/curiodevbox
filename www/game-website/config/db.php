<?php
// Database configuratie - Games database
$dbname = 'games';
$username = 'curiodevbox';
$password = 'curiodevbox';

// Probeer eerst 'mysql' (Docker container naam), fallback naar 'localhost' met poort 3309
$hosts = [
    ['host' => 'mysql', 'port' => 3306],  // Docker container
    ['host' => 'localhost', 'port' => 3309]  // Vanuit host machine
];

$pdo = null;
$lastError = null;

foreach ($hosts as $config) {
    try {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname=$dbname;charset=utf8mb4";
        $pdo = new PDO(
            $dsn,
            $username,
            $password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_TIMEOUT => 3
            ]
        );
        // Verbinding succesvol, stop met proberen
        break;
    } catch (PDOException $e) {
        $lastError = $e;
        // Probeer volgende host
        continue;
    }
}

// Als geen verbinding werkt, toon foutmelding
if (!$pdo) {
    $errorMsg = $lastError ? $lastError->getMessage() : 'Onbekende fout';
    die("❌ Database verbinding mislukt: " . htmlspecialchars($errorMsg) . 
        "<br><br><strong>Oplossing:</strong><br>" .
        "1. Controleer of de MySQL container draait: <code>docker ps</code><br>" .
        "2. Start Curio DevBox opnieuw: <code>docker-compose up -d</code><br>" .
        "3. Wacht even tot MySQL volledig is opgestart (kan 30 seconden duren)");
}
?>

