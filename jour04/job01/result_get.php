<?php
// Compte le nombre de paramètres dans l'URL
$nb = count($_GET);

echo "<h2>Résultat :</h2>";
echo "Nombre d'arguments passés en GET : <b>" . $nb . "</b><br><br>";

// Facultatif : afficher le détail des arguments
if ($nb > 0) {
    echo "Détails : <br>";
    foreach ($_GET as $cle => $valeur) {
        echo $cle . " = " .$valeur . "<br>";
    }
}
?>
