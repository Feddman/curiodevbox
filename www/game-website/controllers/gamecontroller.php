<?php
require_once __DIR__ . '/../config/db.php';

// Controleer welke actie wordt uitgevoerd
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        
        if ($action === 'create') {
            // Create nieuwe game
            $title = $_POST['title'] ?? '';
            $developer = $_POST['developer'] ?? '';
            $publisher = $_POST['publisher'] ?? '';
            $release_year = !empty($_POST['release_year']) ? (int)$_POST['release_year'] : null;
            $genre = $_POST['genre'] ?? '';
            $platform = $_POST['platform'] ?? '';
            $price = !empty($_POST['price']) ? (float)$_POST['price'] : null;
            $description = $_POST['description'] ?? '';
            $rating = !empty($_POST['rating']) ? (float)$_POST['rating'] : null;
            
            $stmt = $pdo->prepare("
                INSERT INTO games (title, developer, publisher, release_year, genre, platform, price, description, rating)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");
            
            $stmt->execute([$title, $developer, $publisher, $release_year, $genre, $platform, $price, $description, $rating]);
            
            header('Location: /game-website/games/index.php?success=created');
            exit;
            
        } elseif ($action === 'update') {
            // Update bestaande game
            $id = (int)$_POST['id'];
            $title = $_POST['title'] ?? '';
            $developer = $_POST['developer'] ?? '';
            $publisher = $_POST['publisher'] ?? '';
            $release_year = !empty($_POST['release_year']) ? (int)$_POST['release_year'] : null;
            $genre = $_POST['genre'] ?? '';
            $platform = $_POST['platform'] ?? '';
            $price = !empty($_POST['price']) ? (float)$_POST['price'] : null;
            $description = $_POST['description'] ?? '';
            $rating = !empty($_POST['rating']) ? (float)$_POST['rating'] : null;
            
            $stmt = $pdo->prepare("
                UPDATE games 
                SET title = ?, developer = ?, publisher = ?, release_year = ?, genre = ?, platform = ?, price = ?, description = ?, rating = ?
                WHERE id = ?
            ");
            
            $stmt->execute([$title, $developer, $publisher, $release_year, $genre, $platform, $price, $description, $rating, $id]);
            
            header('Location: /game-website/games/index.php?success=updated');
            exit;
            
        } elseif ($action === 'delete') {
            // Delete game
            $id = (int)$_POST['id'];
            
            $stmt = $pdo->prepare("DELETE FROM games WHERE id = ?");
            $stmt->execute([$id]);
            
            header('Location: /game-website/games/index.php?success=deleted');
            exit;
        }
    }
}

// Als er geen POST actie is, redirect naar index
header('Location: /game-website/games/index.php');
exit;
?>

