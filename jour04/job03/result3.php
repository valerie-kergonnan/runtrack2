<?php
if (isset($_POST['password'])) {
    $pwd = $_POST['password'];

    if ($pwd === "dwwm2025") {
        echo "✅ Mot de passe correct, accès autorisé.";
    } else {
        echo "❌ Mot de passe incorrect.";
    }
} else {
    echo "Veuillez entrer un mot de passe.";
}
?>
