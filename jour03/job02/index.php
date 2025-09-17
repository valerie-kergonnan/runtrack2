<?php
// declaration de la chaine
$str = "Tous ces instants seront perdus dans  le temps comme les  larmes sous la pluie";

//parcourir la chaine en affichant un caractere sur  deux
for ($i =0; $i <strlen($str); $i +=2) {
    echo $str[$i];
}
?>