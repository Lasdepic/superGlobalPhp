<form method="POST">
    Nom : <input type="text" name="nom">
    <button type="submit">Envoyer</button>
</form>
<?php
if (!empty($_POST['nom'])) {
    echo "Bonjour " . htmlspecialchars($_GET['nom']);
}