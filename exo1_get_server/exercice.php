<?php

// http://localhost/SuperGlobalPhp/exo1_get_server/demo1.php?ville=Montpellier&Pays=France

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