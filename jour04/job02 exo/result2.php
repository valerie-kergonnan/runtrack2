<?php

if (isset($_post['nom'])&& isset($_post['email']) && isset($_post['message'])){
  $nom = htmlspecialchars($_post['nom']);
  $email = htmlspecialchars($_post['email']);
  $message = htmlspecialchars($_post['message']);

  echo "<h2>informations recues :</h2>";
  echo "Nom :" . $nom . "<br>";
  echo "email :" . $email . "<br>";
  echo "message : <br>" . nl2br($message);
} else {
  echo "veuillez remplir le formulaire.";
}
?>