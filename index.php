<?php
  $age = 26;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6/2</title>
  </head>
  <body>
    <p>
      <?php
        if ($age >= 18) {
          echo 'Tu es majeur';
        } else {
          echo 'Tu es mineur';
        }
      ?>
    </p>
  </body>
</html>
