<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Inscription</title>
</head>
<body>
    <h1>Bienvenue sur notre site</h1>
    
    <?php
    if (isset($_GET['event'])) {
        $event = htmlspecialchars($_GET['event']); 
        echo "<p><strong>Vous allez vous inscrire à " . $event . "</strong></p>";
    }
    ?>
    
    <div>
        <h2>Inscription</h2>
        <p><a href="inscription.php?event=phpday">Inscript toi à phpDay</a></p>
    </div>
</body>
</html>