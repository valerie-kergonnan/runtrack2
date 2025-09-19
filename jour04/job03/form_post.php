<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compter les arguments POST</title>
</head>
<body>
    

<h2>formulaire</h2> 

<form method="post" action="">
    <label>nom : </label>
    <input type="text" name="nom"><br><br>

    <label>prenom : </label>
    <input type="text" name="prenom"><br><br>

    <label>email : </label>
    <input type="text" name="email"><br><br>

    <input type="submit" value="envoyer">
</form>

<?php
// verifier s'il y a des donnees envoyees

if ($_POST) {
    $compteur = 0;

    // parcourir chaque element de $_post
    foreach ($_POST as $cle => $valeur ){
        $compteur = $compteur +1; // incrementation manuelle
    }
    echo "le nombre d'arguments POST envoyes est : " . $compteur;

}
?>

</body>
</html>