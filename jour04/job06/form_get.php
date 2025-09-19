<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>pair ou impair</title>
</head>
<body>
    
<h1>tester un nombre</h1>

<?php
// verifier si le champ" nombre" est present dans l'url
if (isset($_get['nombre'])){
    $n = $_GET['nombre']; // valeur brute entree

    // verification minimale: est ce que $n est bien compose uniquement de chiffres ?
      // (pas de fonction système, donc on fait une petite boucle manuelle)

      $estNombre = true;
      $longueur =0;
      for ($i =0; isset($n[$i]);$i++){
        if ($n[$i] < '0'|| $n[$i] > '9' ){
        $estNombre = false;
      }
      $longueur = $i + 1;
      }

      if ($estnombre && $longueur >0){

        // transformer  la chaine en  "vrai" entier a la main
        $valeur = 0;
        for ($i = 0; isset($n[$i]); $i++){
            $valeur = $valeur * 10 + ($n[$i] - '0');
        }

        // pair ou impair
        if ($valeur % 2 == 0){
            echo "nombre pair";

    } else {
        echo "nombre impair";
    }
} else {
        echo "veuillez entrer uniquement des chiffres.";
    }
}
?>

<form method="get" action="">
    <label for="nombre">entrez un nombre :</label>
    <input type="text" id="nombre" name="nombre" required>
    <input type="submit" value="tester">
</form>
</body>
</html>