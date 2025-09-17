<?php
// Déclaration de la chaîne
$str = "Les choses que l'on possède finissent par nous posséder.";

// Méthode 1 : avec strrev() (fonction PHP intégrée)
echo strrev($str);

echo "<br><br>";

// Méthode 2 : avec une boucle (algorithme manuel)
$resultat = "";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $resultat .= $str[$i];
}
echo $resultat;
?>
