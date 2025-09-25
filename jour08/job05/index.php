<?php
session_start();

// Fonction pour initialiser la partie
function initPartie() {
    $_SESSION['grille'] = array_fill(0, 9, "-"); // 9 cases vides
    $_SESSION['tour'] = "X"; // X commence
}

// Initialisation si première visite ou reset manuel
if (!isset($_SESSION['grille']) || isset($_POST['reset'])) {
    initPartie();
}

$message = "";

// Traitement d’un coup
if (isset($_POST['case'])) {
    $index = (int) $_POST['case'];
    $grille = $_SESSION['grille'];
    $tour = $_SESSION['tour'];

    if ($index >= 0 && $index <= 8 && $grille[$index] === "-") {
        $grille[$index] = $tour;

        // Vérification victoire
        $combinaisons = [
            [0,1,2],[3,4,5],[6,7,8], // lignes
            [0,3,6],[1,4,7],[2,5,8], // colonnes
            [0,4,8],[2,4,6]           // diagonales
        ];

        $gagne = false;
        foreach ($combinaisons as $c) {
            if ($grille[$c[0]] === $tour && $grille[$c[1]] === $tour && $grille[$c[2]] === $tour) {
                $gagne = true;
                break;
            }
        }

        if ($gagne) {
            $message = "$tour a gagné !";
            initPartie();
        } elseif (!in_array("-", $grille, true)) {
            $message = "Match nul !";
            initPartie();
        } else {
            $tour = ($tour === "X") ? "O" : "X";
            $_SESSION['grille'] = $grille;
            $_SESSION['tour'] = $tour;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Morpion</title>
    <style>
        table { border-collapse: collapse; margin-bottom: 10px; }
        td { width: 80px; height: 80px; border: 2px solid #333; text-align: center; }
        button { width: 100%; height: 100%; font-size: 24px; cursor: pointer; }
        .control { margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>

    <?php if ($message): ?>
        <p><strong><?php echo $message; ?></strong></p>
    <?php else: ?>
        <p>Tour du joueur : <strong><?php echo $_SESSION['tour']; ?></strong></p>
    <?php endif; ?>

    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++):
                        $index = $i * 3 + $j;
                        $val = $_SESSION['grille'][$index];
                    ?>
                        <td>
                            <?php if ($val === "-"): ?>
                                <button type="submit" name="case" value="<?php echo $index; ?>">-</button>
                            <?php else: ?>
                                <?php echo $val; ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

        <!-- Bouton pour réinitialiser la partie -->
        <div class="control">
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </div>
    </form>
</body>
</html>
