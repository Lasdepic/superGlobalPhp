<?php
session_start();

if (isset($_POST['deconnexion'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
echo "<h1>Bonjour " . $_SESSION['user'] . "</h1>";
if (isset($_COOKIE['last_visit'])) {
    echo "Derniere visite : " . $_COOKIE['last_visit'];
}
?>

<form method="POST">
    <input type="submit" name="deconnexion" value="Se déconnecter">
</form>