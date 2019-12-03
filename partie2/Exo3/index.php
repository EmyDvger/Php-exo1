<?php
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP Partie 2 Exo 3</title>
  </head>
  <body>
    <h1>Exo 3 partie 2</h1>
    <p>
      <?php
      if ($gender == 'homme')
      {
        // Alors le message affichera ceux-ci :
        echo 'C\'est un développeur !';
      }
      elseif ($gender == 'femme' )
      {
        echo 'C\'est une développeuse !';
      }
        ?>
      </p>
    </body>
  </html>
