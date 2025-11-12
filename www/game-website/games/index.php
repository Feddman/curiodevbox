<?php
require_once __DIR__ . '/../config/db.php';

$pageTitle = 'Games Overzicht';
require_once __DIR__ . '/../header.php';

// Haal alle games op
$stmt = $pdo->query("SELECT * FROM games ORDER BY title ASC");
$games = $stmt->fetchAll();

// Success bericht
$successMessage = '';
if (isset($_GET['success'])) {
    switch ($_GET['success']) {
        case 'created':
            $successMessage = 'Game succesvol toegevoegd!';
            break;
        case 'updated':
            $successMessage = 'Game succesvol bijgewerkt!';
            break;
        case 'deleted':
            $successMessage = 'Game succesvol verwijderd!';
            break;
    }
}
?>

<?php if ($successMessage): ?>
    <div class="alert alert-success">
        <?php echo htmlspecialchars($successMessage); ?>
    </div>
<?php endif; ?>

<div class="page-header">
    <h2>Games Overzicht</h2>
    <a href="/game-website/games/create.php" class="btn btn-primary">Nieuw Game Toevoegen</a>
</div>

<?php if (empty($games)): ?>
    <div class="empty-state">
        <p>Er zijn nog geen games in de database.</p>
        <a href="/game-website/games/create.php" class="btn btn-primary">Voeg eerste game toe</a>
    </div>
<?php else: ?>
    <div class="games-grid">
        <?php foreach ($games as $game): ?>
            <div class="game-card">
                <div class="game-header">
                    <h3><?php echo htmlspecialchars($game['title']); ?></h3>
                    <span class="rating"><?php echo number_format($game['rating'], 1); ?> ⭐</span>
                </div>
                <div class="game-info">
                    <p><strong>Developer:</strong> <?php echo htmlspecialchars($game['developer']); ?></p>
                    <p><strong>Publisher:</strong> <?php echo htmlspecialchars($game['publisher'] ?? 'N/A'); ?></p>
                    <p><strong>Jaar:</strong> <?php echo $game['release_year'] ?? 'N/A'; ?></p>
                    <p><strong>Genre:</strong> <?php echo htmlspecialchars($game['genre']); ?></p>
                    <p><strong>Platform:</strong> <?php echo htmlspecialchars($game['platform']); ?></p>
                    <p><strong>Prijs:</strong> €<?php echo number_format($game['price'], 2); ?></p>
                    <?php if ($game['description']): ?>
                        <p class="description"><?php echo htmlspecialchars(substr($game['description'], 0, 100)); ?>...</p>
                    <?php endif; ?>
                </div>
                <div class="game-actions">
                    <a href="/game-website/games/edit.php?id=<?php echo $game['id']; ?>" class="btn btn-edit">Bewerken</a>
                    <form method="POST" action="/game-website/controllers/gamecontroller.php" style="display: inline;" onsubmit="return confirm('Weet je zeker dat je dit game wilt verwijderen?');">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?php echo $game['id']; ?>">
                        <button type="submit" class="btn btn-delete">Verwijderen</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php require_once __DIR__ . '/../footer.php'; ?>

