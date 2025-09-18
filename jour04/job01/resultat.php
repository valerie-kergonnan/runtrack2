<?php
if (isset($_GET['prenom']) && isset($_GET['age'])) {
    $prenom = htmlspecialchars($_GET['prenom']);
    $age = (int) $_GET['age']; // cast en nombre pour sécurité

    echo "<h2>Résultat :</h2>";
    echo "Bonjour <b>$prenom</b>, tu as <b>$age</b> ans.";
} else {
    echo "Veuillez remplir le formulaire.";
}
?>
