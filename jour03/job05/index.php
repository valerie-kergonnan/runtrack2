<?php
// declaration de la chaine
$str = "on n'est pas le meilleur quand on le croit mais quand on le sait";

// definition des voyelles
$voyelles = "aeiouyAEIOUYàâäéèêëîïôöùûüÿ";

// initialisation du dictionnaire
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Parcours de la chaîne caractère par caractère
for ($i = 0; $i < strlen($str); $i++) {
    $car = $str[$i];

    // Vérifie si c'est une lettre (on ignore espaces, apostrophes, ponctuation...)
    if (ctype_alpha($car)) {
        if (strpos($voyelles, $car) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur voyelles/consonnes</title>
    <style>
        table { border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px 12px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Résultat du comptage</h2>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $dic["voyelles"] ?></td>
                <td><?= $dic["consonnes"] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>