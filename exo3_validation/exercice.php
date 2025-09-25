<form method="post">
    Email : <input type="email" name="email">
    Nom : <input type="text" name="nom">
    Age : <input type="number" name="age">
    <button type="submit">OK</button>
</form>

<?php
if ($_POST) {
    
    $email = $_POST['email'];
    if (empty($email)) {
        echo "<p>Erreur : email vide</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Erreur : email invalide</p>";
    } else {
        echo "<p>Email valide : $email</p>";
    }
    
    $nom = $_POST['nom'];
    if (empty($nom)) {
        echo "<p>Erreur : nom vide</p>";
    } elseif (empty($nom)) {
        echo "<p>Erreur : nom non valide.</p>";
    } else {
        echo "<p>Nom valide : $nom</p>";
    }
    
    $age = $_POST['age'];
    if (empty($age)) {
        echo "<p>Erreur : âge vide</p>";
    } elseif ($age <= 0) {
        echo "<p>Erreur : âge doit être un nombre positif</p>";
    } else {
        echo "<p>Âge valide : $age ans</p>";
    }
}
?>