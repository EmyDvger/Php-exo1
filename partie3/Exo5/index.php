<?php
$departments= array (
  '80' => 'Somme',
  '60' => 'Oise',
  '59' => 'Lille',
  '02' => 'Aine',
  '62' => 'Pas-De-Calais');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP Partie 3 Exo 5</title>
  </head>
  <body>
      <?php
      // Le foreach (pour chaque éléments) on demande à afficher l'index donc les numéros et la valeur donc les départements
      foreach($departments as $element => $value){ ?>
      <!-- On met un paragraphe pour que ce soit en HTML -->
      <p><?php echo $element . ' ' . $value; ?></p>
    <?php }; ?>
  </body>
</html>
