<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de contact</title>
</head>
<body>
    

<h2>formulaire de contact</h2>

<form action="result2.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" required>
    <br><br>

    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <label for="message">Message :</label><br>
    <textearea id="message" name="message" rows="5" cols="30" required>
        <br><br>

        <input type="submit"  value="envoyer">
</form>
</body>
</html>