<?php
// Démarrage de la session
session_start();

// Vérifie si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    // Si la variable n’existe pas encore, on l’initialise
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }
    // Incrémentation à chaque visite
    $_SESSION['nbvisites']++;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites avec sessions</h1>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>
