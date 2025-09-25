<?php
// Exemple d'URL : http://localhost/demo.php?nom=Pedri&age=22

// Affichage du contenu de $_GET
echo "<h3>Contenu de \$_GET</h3>";
echo '<pre>';
print_r($_GET);
echo '</pre>';

// Affichage des informations serveur
echo "<h3>Infos serveur</h3>";
echo "Méthode : " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Script : " . $_SERVER['PHP_SELF'] . "<br>";
echo "IP : " . $_SERVER['REMOTE_ADDR'] . "<br>";
?>