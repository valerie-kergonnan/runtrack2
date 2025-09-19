<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage POST</title>
</head>
<body>

<!-- Formulaire -->
<form method="POST" action="">
    <label>Nom : </label>
    <input type="text" name="nom"><br><br>

    <label>Prénom : </label>
    <input type="text" name="prenom"><br><br>

    <label>Ville : </label>
    <input type="text" name="ville"><br><br>

    <input type="submit" value="Envoyer">
</form>

<?php
// Vérifier si le formulaire est soumis
if (isset($_POST) && !empty($_POST)) {
    echo "<h2>Résultats du POST</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Parcours des arguments POST
    foreach ($_POST as $argument => $valeur) {
        echo "<tr>";
        echo "<td>".$argument."</td>";
        echo "<td>".$valeur."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
