<?php
// Déclaration de la chaîne
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// On calcule la longueur
$longueur = strlen($str);

// Construction de la nouvelle chaîne
$resultat = "";

// On parcourt du 1er au dernier caractère (sauf le dernier)
for ($i = 1; $i < $longueur; $i++) {
    $resultat .= $str[$i];
}

// Enfin, on ajoute le premier caractère à la fin
$resultat .= $str[0];

// Affichage
echo $resultat;
?>
