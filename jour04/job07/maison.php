<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>dessiner une maison</title>
</head>
<body>
<h1>maison ASCII</h1>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $largeur = intval($_POST["largeur"]);
    $hauteur = intval($_POST["hauteur"]);

    if ($largeur < 2 || $hauteur < 2) {
        echo "Veuillez entrer des valeurs supérieures ou égales à 2.";
        exit;
    }

    echo "<pre>";

    // --- TOIT ---
    for ($i = 0; $i < $largeur; $i++) {
        echo str_repeat(" ", $largeur - $i - 1);
        echo str_repeat("|", 2 * $i + 1) . "\n";
    }

    // --- CORPS ---
    for ($i = 0; $i < $hauteur; $i++) {
        echo "|" . str_repeat(" ", 2 * $largeur - 3) . "|\n";
    }

    // --- BASE ---
    echo "+" . str_repeat("-", 2 * $largeur - 3) . "+\n";

    echo "</pre>";
}
?>

<form method="post" action="">
    <label for="largeur">Largeur :</label>
    <input type="text" id="largeur" name="largeur" required><br><br>
    <label for="hauteur">Hauteur :</label>
    <input type="text" id="hauteur" name="hauteur" required><br><br>
    <input type="submit" value="Dessiner">
</form>
</body>
</html>