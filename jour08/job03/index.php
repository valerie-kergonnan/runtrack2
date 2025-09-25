<?php
session_start(); // demarrer la session

// si le bouton reset est clique -> on vide la liste des prenoms
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

// si un prenom est soumis et  non vide -> on, l'ajoute
if (isset($_POST['prenom']) && $_POST['prenom'] !== '') {

    // si le tableau n'existe pas encore -> on l'initialise
    if (!isset($_SESSION['prenoms'])){
        $_SESSION['prenoms'] = [];

    }
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']); // securisation
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>formulaire prenoms</title>
</head>
<body>
    <form method="post">
        <input type="text" name="prenom" placeholder="entrez un prenom">
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset">Reset</button>
</form>


<h2>liste des prenoms:</h2>
<ul>
    <?php
    if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])){
        foreach ($_SESSION['prenoms'] as $p) {
            echo "<li>$p</li>";
        }
    } else {
        echo "<li>Aucun prenom enregistre</li>";
    }
    ?>
    </ul>

</body>
</html>