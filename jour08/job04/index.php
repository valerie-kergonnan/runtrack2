<?php
// Durée de vie du cookie (1 heure)
$cookie_lifetime = time() + 3600;

// Déconnexion : suppression du cookie
if (isset($_POST['deco'])) {
    setcookie("prenom", "", time() - 3600); // cookie expiré
    $prenom = null;
} 
// Connexion : ajout du prénom dans le cookie
elseif (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']); // sécurisation
    setcookie("prenom", $prenom, $cookie_lifetime);
} 
// Si déjà connecté (cookie présent)
elseif (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
} 
else {
    $prenom = null;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion avec Cookie</title>
</head>
<body>
    <?php if ($prenom): ?>
        <p>Bonjour <?php echo $prenom; ?> !</p>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom">
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
