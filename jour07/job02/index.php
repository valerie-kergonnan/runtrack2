<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>bonjour ou bonsoir</title>
</head>
<body>
    
<form method="post">
    <label for="moment">choisissez :</label>
    <select name="moment" id="moment">
        <option value="soir">soir</option>
        <option value="jour">jour</option>
</select>
<input type="submit" value="dire bonjour">
</form>

<?php

// declaration de  la  fonction
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

function bonsoir($soir) {
    if ($soir) {
        echo "Bonsoir";
    } else {
        echo "Bonjour";
    }
}
// verification si le  formulaire est  soumis
if (isset($_POST["moment"])) {
        if ($_POST["moment"] === "jour") {
            bonjour(true);
        } else {
            bonjour(false);
    }
}
?>

</body>
</html>



