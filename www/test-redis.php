<?php
// Test Redis Verbinding
echo "<h2>Redis Verbinding Test</h2>";

if (!extension_loaded('redis')) {
    echo "<p style='color: red;'>❌ Redis extensie niet geladen</p>";
    exit;
}

try {
    $redis = new Redis();
    $redis->connect('redis', 6379);
    
    echo "<p style='color: green;'>✅ Verbinding succesvol!</p>";
    
    // Test set/get
    $redis->set('test_key', 'Hallo van Curio DevBox!');
    $value = $redis->get('test_key');
    echo "<p>Test Waarde: <strong>$value</strong></p>";
    
    // Haal Redis info op
    $info = $redis->info();
    echo "<h3>Redis Info:</h3>";
    echo "<ul>";
    echo "<li>Versie: " . ($info['redis_version'] ?? 'N/A') . "</li>";
    echo "<li>Uptime: " . ($info['uptime_in_seconds'] ?? 'N/A') . " seconden</li>";
    echo "<li>Verbonden Clients: " . ($info['connected_clients'] ?? 'N/A') . "</li>";
    echo "</ul>";
    
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Verbinding mislukt: " . $e->getMessage() . "</p>";
}
?>
