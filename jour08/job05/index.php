<?php
session_start();

// initialisation de la partie
if (!isset($_SESSION['grille']) || isset($_POST['reset'])){
    $_SESSION['grille'] = array_fill(0, 9, "-"); // 9 cases vides "-"
    $_SESSION['tour'] = "x"; // x commence
    $_SESSION['fin'] = false;
}

// recuperation des variables de session
$grille = $_SESSION['grille'];
$tour = $_SESSION['tour'];
$fin = $_SESSION['fin'];

// si une case est  jouee
if (isset($_POST['case']) && !$fin){
    $case = $_POST['case'];

    if ($grille[$case] === "-"){
        $grille[$case] = $tour;

        // verification de victoire
        $combinaisons = [
            [0,1,2],[3,4,5],[6,7,8], // lignes
            [0,3,6],[1,4,7],[2,5,8], // colonnes
            [0,4,8],[2,4,6]          // diagonales
        ];
        foreach ($combinaisons as $c){
            if ($grille[$c[0]] === $tour && $grille[$c[1]] === $tour && $grille[$c[2]] === $tour ) {
                $message = "$tour a gagné !";
                $fin = true;
                break;
            }     
        }
    }
     
    // match null ?
    if (!$fin && !in_array("-", $grille)){
        $message = "Match nul !";
        $fin = true;
    }

    // changement de  joueur 
    $tour = ($tour === "x") ? "0" : "x";
}


// reinitialisation automatique apres une  victoire ou un null
if ($fin) {
    $_SESSION['grille'] = array_fill(0, 9, "-"); // 9 cases vides
    $_SESSION['tour'] = "X"; // X commence
    $_SESSION['fin'] = false;
} else  {


     // mise a jour des variantes session
     $_SESSION['grille'] = $grille;
     $_SESSION['tour'] = $tour;
     $_SESSION['fin'] = $fin;
}

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>Morpion en php</title>
    <style>
        table { border-collapse: collapse; margin: 20px 0;}
        td { width: 60px; height : 60px; text-align: center; border: 1px solid black;}
        button { width: 100%; height: 100%; font-size: 20px;}
        </style>
</head>
<body>
    <h1>jeu du morpion</h1>

    <?php if (isset($message)) echo "<h2>$message</h2>"; ?>

    <form method= "post">

    <table>
        <?php for ($i = 0; $i < 3; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 3; $j++):
                $index = $i *3 + $j; ?>

                <td>
                    <?php if ($grille[$index] === "-"): ?>
                    <button type="submit" name="case" value="<?php echo $index; ?>">-</button>
                    <?php else: ?>
                        <?php echo $grille[$index]; ?>
                    
                        <?php endif; ?>
                    </td>
                    <?php endfor; ?>
                    </tr>
                    <?php endfor; ?>
                    </table>
                    <!-- Bouton pour réinitialiser la partie -->
<div style="margin-top: 10px;">
    <button type="submit" name="reset">Réinitialiser la partie</button>
</div>

</form>
</body>
</html>

</body>
</html>
