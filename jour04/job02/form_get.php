<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>formulaire GET et affichage</title>
    <style>
        table{
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td{
            border: 1px solid black;
            padding: 8px;
        
            text-align: left;
        }
        th{
            background-color:purple
        }
        </style>
</head>
<body>
    
<!-- Formulaire -->
 <form method="get" action="">
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>prenom <input type="text" name="prenom"></label><br>
   <label>Age :<input type="text" name="age"></label><br>
   <input type="submit" value="envoyer">
</form> 

<?php

// verifier si des arguments  ont ete envoyes
if (isset($_GET) && count($_GET) > 0) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Argument</th><tr>valeur</th></tr>";

    foreach ($_GET as $argument => $valeur){
        echo "<tr>";
        echo "<td>$argument</td>";
        echo "<td>$valeur</td>";
        echo "</tr>";

    }
    echo "</table>";
} else {
    echo "<p>Aucun argument transmis.</p>";
}
?>
</body>
</html>