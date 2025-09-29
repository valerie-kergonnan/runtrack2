<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // reclamation 
    $query = $pdo->query("SELECT * FROM salles ORDER BY capacite DESC");

    // tableau 
    echo "<table border='1'>";

    // champs 
    echo "<thead><tr>";
    for ($i = 0; $i < $query->columncount(); $i++) {
        $col = $query->getColumnMeta($i);
        echo "<th>" . $col['name'] . "</th>";
    }
    echo "</tr></thead>";

    // donnees du tableau
    echo "<tbody>";
    while ($row = $query->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo  "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} catch (PDOException $e) {
    die("erreur : " . $e->getmessage());
}
?>