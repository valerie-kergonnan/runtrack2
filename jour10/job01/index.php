<?php

// connexion 
$mysqli = new mysqli("localhost", "root", "", "jour09");

// verification de connextion 
if ($mysqli ->connect_error){
    die("erreur de connection :" . $mysqli->connect_error);
}

// demande
$result = $mysqli->query("SELECT  *  FROM etudiants") ;

// tableau
echo "<table border='1'>";

//  colonnes
echo "<thead><tr>";
while ($field= $result->fetch_field()) {
    echo "<th>" . $field->name . "</th>";
}
echo "</tr></thead>";

// corps du tableau (donnees)

echo "<tbody>";
while ($row = $result->fetch_assoc()){
    echo "<tr>";
    foreach ($row as $value){
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>