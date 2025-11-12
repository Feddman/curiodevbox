<?php
require_once __DIR__ . '/../config/db.php';

$pageTitle = 'Nieuw Game Toevoegen';
require_once __DIR__ . '/../header.php';
?>

<div class="page-header">
    <h2>Nieuw Game Toevoegen</h2>
    <a href="/game-website/games/index.php" class="btn btn-secondary">Terug naar overzicht</a>
</div>

<form method="POST" action="/game-website/controllers/gamecontroller.php" class="game-form">
    <input type="hidden" name="action" value="create">
    
    <div class="form-group">
        <label for="title">Titel *</label>
        <input type="text" id="title" name="title" required>
    </div>
    
    <div class="form-group">
        <label for="developer">Developer *</label>
        <input type="text" id="developer" name="developer" required>
    </div>
    
    <div class="form-group">
        <label for="publisher">Publisher</label>
        <input type="text" id="publisher" name="publisher">
    </div>
    
    <div class="form-row">
        <div class="form-group">
            <label for="release_year">Release Jaar</label>
            <input type="number" id="release_year" name="release_year" min="1970" max="2030">
        </div>
        
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" id="genre" name="genre" placeholder="bijv. RPG, Action, Adventure">
        </div>
    </div>
    
    <div class="form-group">
        <label for="platform">Platform</label>
        <input type="text" id="platform" name="platform" placeholder="bijv. PC, PlayStation, Xbox, Switch">
    </div>
    
    <div class="form-row">
        <div class="form-group">
            <label for="price">Prijs (€)</label>
            <input type="number" id="price" name="price" step="0.01" min="0">
        </div>
        
        <div class="form-group">
            <label for="rating">Rating (0-10)</label>
            <input type="number" id="rating" name="rating" step="0.1" min="0" max="10">
        </div>
    </div>
    
    <div class="form-group">
        <label for="description">Beschrijving</label>
        <textarea id="description" name="description" rows="5"></textarea>
    </div>
    
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Game Toevoegen</button>
        <a href="/game-website/games/index.php" class="btn btn-secondary">Annuleren</a>
    </div>
</form>

<?php require_once __DIR__ . '/../footer.php'; ?>

