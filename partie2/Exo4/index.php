<?php
$age = '11';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP Partie 2 Exo 4</title>
  </head>
  <body>
    <h1>Exo 4 partie 2</h1>
    <p>
      <?php
      if ($age >= 18)
      {
        // Alors le message affichera ceux-ci :
        echo 'Tu es majeur !';
      }
      elseif ($age < 18)
      {
        echo 'Tu n\'est pas majeur !';
      }
        ?>
      </p>
    </body>
  </html>
