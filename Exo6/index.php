<?php
//déclaration de ma variable
//créer une condition
$number = 140;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP Partie 1 Exercice 6</title>
  </head>
  <body>
    <!-- Affichage du résulat souhaité grâce à echo -->
    <!-- présentation des différentes méthodes -->
    <p>
      <?php echo (($number + 30) / 2) ?>
    </p>
    <p>
      <?php $number = $number + 30;
    $number = $number / 2;
    echo $number; ?>
  </p>
  <p>
    <?php
     $number += 30;
     $number /= 2;
     echo $number;
     ?>
   </p>
  </body>
</html>
