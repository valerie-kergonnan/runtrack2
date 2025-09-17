<?php
// Déclaration de la chaîne
$str = "I'm sorry Dave I'm afraid I can't do that";

// Définition des voyelles (minuscules et majuscules)
$voyelles = "aeiouyAEIOUY";

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($voyelles, $str[$i]) !== false) {
        echo $str[$i];
    }
}
?>

