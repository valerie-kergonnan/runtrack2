<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>formulaire transformation</title>
</head>
<body>
     
<h2>transformation de texte</h2>

<!--formulaire-->

<form  method="post">
    <label for="str">Texte:</label>
    <input type="text" id="str" name="str">

    <label for="function"> choisir une fonction :</label>
    <select id="fonction" name="fonction">

    <option value="gras">Gras</option>
    <option value="cesar">Cesar</option>
    <option value="plateforme">Plateforme</option>
</select>

<input type="submit" value="valider">
</form>

<?php
// fonctions demandees 

function gras($str){
    $mots = explode(" ", $str);
    foreach ($mots as $mot){
        if (ctype_upper(substr($mot, 0, 1))){
            echo "<b>$mot</b>" ;
        }else {
            echo "$mot ";
        }
    }
}

function cesar($str, $decalage =2){
    $resultat = "";
    for ($i =0; $i< strlen($str); $i++){
        $car = $str[$i];
        if (ctype-alpha($car)) {
            $base =ctype_upper($car) ? ord("A") : ord ("a");
            $resultat = chr(($base + (ord($car) - $base + $decalage) % 26));
        } else {
            $resultat .= $car;
        }
    }
     echo $resultat;
}

function plateforme($str){
    $mots = explode("", $str);
    foreach ($mots as $mot){
        if (substr($mot, -2) === "me"){
            echo $mot . "_";
        }else {
            echo $mot . " ";
        }
    }
}

// traitement de  formulaire
if (isset($_POST["str"]) && isset($_POST["fonction"])){
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];

    echo "<h3>Resultat :</h3>";

    if ($fonction === "gras"){
        gras($str);
    } elseif ($fonction === "cesar"){
        cesar($str, 2);
    }elseif ($fonction === "plateforme"){
        plateforme ($str);
    }
}
?>
</body>
</html>