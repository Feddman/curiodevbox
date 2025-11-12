<?php
$pageTitle = 'Home';
require_once 'header.php';
?>
<?php
ini_set('SMTP', 'mailhog');
ini_set('smtp_port', '1025');
mail(
'test@example.com', 'Onderwerp', 'Bericht'
);
?>
    <div class="welcome-section">
        <h2>Welkom bij de Games Database</h2>
        <p>Dit is een CRUD voorbeeld applicatie voor het beheren van games.</p>
        <p style="background: #e7f3ff; color: #0066cc; padding: 0.75rem 1rem; border-radius: 5px; display: inline-block; margin-top: 1rem; font-weight: 500;">Voorbeeld om een site met PHP te laten zien</p>
    
    <div class="features">
        <div class="feature-card">
            <h3>Bekijk Games</h3>
            <p>Bekijk alle games in de database</p>
            <a href="/game-website/games/index.php" class="btn btn-primary">Bekijk Games</a>
        </div>
    </div>
    
    <div class="info-box">
        <h3>Wat is CRUD?</h3>
        <p><strong>CRUD</strong> is een afkorting die staat voor de vier basisoperaties die je kunt doen met data:</p>
        <ul>
            <li><strong>Create</strong> (Aanmaken) - Nieuwe gegevens toevoegen, zoals een nieuw game toevoegen</li>
            <li><strong>Read</strong> (Lezen) - Gegevens bekijken, zoals de lijst met alle games zien</li>
            <li><strong>Update</strong> (Bijwerken) - Bestaande gegevens aanpassen, zoals de prijs van een game veranderen</li>
            <li><strong>Delete</strong> (Verwijderen) - Gegevens weghalen, zoals een game uit de database verwijderen</li>
        </ul>
        <p>Bijna elke website of app gebruikt CRUD. Denk aan Instagram (foto's uploaden, bekijken, bewerken, verwijderen) of een webshop (producten toevoegen, bekijken, aanpassen, verwijderen).</p>
    </div>

    <div class="info-box" style="margin-top: 2rem;">
        <h3>Wat is een database?</h3>
        <p>Een <strong>database</strong> is een gestructureerde manier om gegevens op te slaan en te beheren. Je kunt het vergelijken met een digitale kast met lades:</p>
        <ul>
            <li><strong>Database</strong> = De hele kast (bijvoorbeeld: "games database")</li>
            <li><strong>Tabel</strong> = Een lade in de kast (bijvoorbeeld: "games tabel")</li>
            <li><strong>Rij</strong> = Een item in de lade (bijvoorbeeld: één specifiek game)</li>
            <li><strong>Kolom</strong> = Een eigenschap van het item (bijvoorbeeld: titel, prijs, genre)</li>
        </ul>
        <p>In dit project gebruiken we <strong>MySQL</strong>, een van de meest gebruikte databases ter wereld. Het slaat alle games op in een tabel met kolommen zoals: titel, developer, prijs, genre, etc.</p>
    </div>

    <div class="info-box" style="margin-top: 2rem;">
        <h3>Waarom wil je dingen opslaan?</h3>
        <p>Stel je voor: je maakt een website waar bezoekers games kunnen bekijken. Zonder database zou je voor elk game een apart HTML bestand moeten maken. Met 100 games betekent dat 100 bestanden!</p>
        <p><strong>Met een database:</strong></p>
        <ul>
            <li>Je slaat alle games op één plek op</li>
            <li>Je kunt gemakkelijk zoeken en filteren</li>
            <li>Je kunt games toevoegen zonder code te schrijven</li>
            <li>Je kunt gegevens aanpassen zonder bestanden te bewerken</li>
            <li>De website wordt dynamisch - de inhoud verandert op basis van wat in de database staat</li>
        </ul>
        <p><strong>Voorbeeld:</strong> Als je een nieuwe game toevoegt via het formulier, wordt deze automatisch opgeslagen in de database en verschijnt direct op de website. Zonder database zou je handmatig HTML code moeten schrijven voor elke nieuwe game.</p>
    </div>

    <div class="info-box" style="margin-top: 2rem;">
        <h3>Hoe werkt het in dit project?</h3>
        <p>Deze applicatie laat zien hoe je CRUD gebruikt in de praktijk:</p>
        <ul>
            <li><strong>PHP</strong> - De programmeertaal die de logica afhandelt (wat gebeurt er als je op "opslaan" klikt?)</li>
            <li><strong>MySQL Database</strong> - Waar alle games worden opgeslagen</li>
            <li><strong>PDO</strong> - Een veilige manier om met de database te communiceren</li>
            <li><strong>Controllers</strong> - Bestanden die bepalen wat er gebeurt bij elke actie (toevoegen, bewerken, verwijderen)</li>
            <li><strong>HTML/CSS</strong> - De mooie interface die je ziet in de browser</li>
        </ul>
        <p>Wanneer je op "Bekijk Games" klikt, haalt PHP alle games uit de database en toont ze op je scherm. Wanneer je een game toevoegt, wordt deze opgeslagen in de database zodat je hem later weer kunt zien!</p>
    </div>
</div>

<?php require_once 'footer.php'; ?>
