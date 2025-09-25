<?php

// si le cookie existe deja -> on incremente
if (!isset($_COOKIE['nbvisites'])) {
        $nbvisites = 0;

} else {
    $nbvisites = $_COOKIE['nbvisites'];

}

if (isset($_POST['reset'])){
    $nbvisites = 0;
 } else {
    $nbvisites++;
}
// On réécrit le cookie avec la nouvelle valeur
setcookie("nbvisites", $nbvisites);
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>compteur avec cookie</title>
</head>
<body>
    <p>nombre de visites : <?php echo $nbvisites; ?></p>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
</form>
</body>
</html>