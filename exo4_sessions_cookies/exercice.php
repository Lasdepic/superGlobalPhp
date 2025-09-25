<?php
session_start();

if (!empty($_POST['user'])) {
    $_SESSION['user'] = $_POST['user'];
    setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);
    header("Location: pageDeConnexion.php");
    exit();
}
?>

<form method="POST">
    Nom : <input type="text" name="user" required>
    <input type="submit" value="Se connecter">
</form>