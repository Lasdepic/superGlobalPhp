<!-- Methode GET -->
<form method="get">
    Nom : <input type="text" name="nom">
    Mail : <input type="email" name="mail">
    <button type="submit">Envoyer</button>
</form>
<?php
// if (!empty($_GET['nom'])) {
//     echo "Bonjour " . htmlspecialchars($_GET['nom']);
// }
// if (!empty($_GET['mail'])) {
//     echo "Bonjour " . htmlspecialchars($_GET['mail']);
// }
// http://localhost/SuperGlobalPhp/exo2_form_get_post/exercice.php?nom=Bellin&mail=clementjordan34%40gmail.com

?>

<form method="POST">
    Nom : <input type="text" name="nom">
    Mail : <input type="email" name="mail">
    <button type="submit">Envoyer</button>
</form>
<?php
if (!empty($_POST['nom'])) {
    echo "Bonjour " . htmlspecialchars($_POST['nom']);
}
if (!empty($_POST['mail'])) {
    echo "Bonjour " . htmlspecialchars($_POST['mail']);
}
// http://localhost/SuperGlobalPhp/exo2_form_get_post/exercice.php
?>