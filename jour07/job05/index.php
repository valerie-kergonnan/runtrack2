<?php

function occurences($str,$char){
    $compteur =0;

    // parcourir la chaine caractere par caractere
    for ($i = 0; isset($str[$i]); $i++){
        if ($str[$i] === $char) {
            $compteur++;
    }
}
 return $compteur;
}

// --- TESTS---
echo occurences("gladiateur", "a"); // resultat attendu : 2
?>