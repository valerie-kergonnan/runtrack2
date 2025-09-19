<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>formulaire de connexion</title>
</head>
<body>
    
<form method="POST" action="">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username"><br><br>

    <label for="password">mot de passe :</label>
    <input type="password" name="password" id="password"><br><br>

    <input type="submit" value="se connecter">
</form>

<?php

// verifier si les champs existent dans $_post

if (isset($_POST['username']) && isset( $_POST['password'])){

    //recuperer les valeurs envoyées
    $username = $_POST['username'];
    $password = $_POST['password'];

    // verification simple
    if ($username == "john" && $password == "Rambo") {
        echo " c'est pas ma guerre";
    }else {
        echo " votre pire cauchemar";
    }
}
?>
</body>
</html>