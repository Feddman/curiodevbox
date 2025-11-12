<?php
// Test MySQL Verbinding
echo "<h2>MySQL Verbinding Test</h2>";

try {
    $pdo = new PDO(
        'mysql:host=mysql;dbname=curiodevbox',
        'curiodevbox',
        'curiodevbox',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    
    echo "<p style='color: green;'>✅ Verbinding succesvol!</p>";
    
    // Haal MySQL versie op
    $stmt = $pdo->query('SELECT VERSION()');
    $version = $stmt->fetchColumn();
    echo "<p>MySQL Versie: <strong>$version</strong></p>";
    
    // Lijst databases
    echo "<h3>Beschikbare Databases:</h3>";
    $stmt = $pdo->query('SHOW DATABASES');
    echo "<ul>";
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo "<li>" . $row[0] . "</li>";
    }
    echo "</ul>";
    
} catch (PDOException $e) {
    echo "<p style='color: red;'>❌ Verbinding mislukt: " . $e->getMessage() . "</p>";
}
?>
