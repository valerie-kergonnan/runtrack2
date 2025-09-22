<?php
    //Variable Style
    $style = "style1";

    // vérifie si style a été choisi
    if (isset($_GET['style'])) {
        $style = $_GET['style'];
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choisir un style</title>
    <link rel="stylesheet" href="<?= htmlspecialchars($style); ?>.css">
</head>

<body>
    <h1>Formulaire avec styles dynamiques</h1>

    <form method="get">
        <label for="style">Choisir un style :</label>
        <select id="style" name="style">
            <option value="style1" <?php if($style==="style1") echo "selected"; ?>>Style 1</option>
            <option value="style2" <?php if($style==="style2") echo "selected"; ?>>Style 2</option>
            <option value="style3" <?php if($style==="style3") echo "selected"; ?>>Style 3</option>
        </select>
        <input type="submit" value="Appliquer">
    </form>

</body>
</html>
