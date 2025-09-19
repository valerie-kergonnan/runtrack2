<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire prénom et age</title>
</head>
<body>

<h2>entrez vos informations</h2>
    <!-- fichier form.php -->

<form action="resultat.php" method="get">
  <label for="prenom">prenom :</label>
  <input type="text" id="prenom" name="prénom" required>
  <br><br>

    <label for="age">Age :</label>
  <input type="number" id="age" name="age" required>
  <br><br>

  
  

  <input type="submit" value="envoyer">
</form>
</body>
</html>