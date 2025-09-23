<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Calculatrice</title>
</head>
<body>
  <h1>Mini calculatrice</h1>

  <?php
  // Définition de la fonction demandée
  function calcule($a, $operation, $b) {
      if ($operation === "+") {
          return $a + $b;
      } elseif ($operation === "-") {
          return $a - $b;
      } elseif ($operation === "*") {
          return $a * $b;
      } elseif ($operation === "/") {
          if ($b == 0) {
              return "Erreur : division par zéro";
          }
          return $a / $b;
      } elseif ($operation === "%") {
          if ($b == 0) {
              return "Erreur : modulo par zéro";
          }
          return $a % $b;
      } else {
          return "Opération inconnue";
      }
  }

  // Vérifie si le formulaire a été soumis
  if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operation'])) {
      $a = $_GET['a'];
      $b = $_GET['b'];
      $op = $_GET['operation'];

      echo "<p>Résultat : " . calcule($a, $op, $b) . "</p>";
  }
  ?>

  <form method="get" action="">
    <label for="a">Nombre A :</label>
    <input type="text" id="a" name="a" required><br><br>

    <label for="operation">Opération :</label>
    <select id="operation" name="operation">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
      <option value="%">%</option>
    </select><br><br>

    <label for="b">Nombre B :</label>
    <input type="text" id="b" name="b" required><br><br>

    <input type="submit" value="Calculer">
  </form>
</body>
</html>
