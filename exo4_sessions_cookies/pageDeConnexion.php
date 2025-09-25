<?php 
session_start(); 

if (isset($_POST['deconnexion'])) {
    session_destroy();
    header("Location: exercice.php");
    exit();
}
?>

<h1>Bonjour <?php echo $_SESSION['user']; ?></h1>

<form method="POST">
    <input type="submit" name="deconnexion" value="Se déconnecter">
</form>