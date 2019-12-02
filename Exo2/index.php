<?php
$lastname = 'Duverger';
$firstname = 'Emilie';
$old = 35;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP partie 1 Exercice 2</title>
  </head>
  <body>
    <!--Affichage dans html-->
    <h1>Exo 2 PHP</h1>
    <p><?php echo $lastname;?></p>
    <p><?php echo $firstname;?></p>
    <p><?php echo $old;?> ans</p>
      <!--methode concaténation avec un seul echo pour ajouter on utilise le "." au lieu du plus en JS-->
      <!--En PHP " " une simple côte permet de faire un espace, faire les espaces avant et après-->
    <h2>Methode concaténation</h2>
    <p>
      <?php echo $lastname . ' ' . $firstname . ' ' . $old;?>
    </p>
    <h2>Methode sans la fonction echo mais toujours avec la concaténation</h2>
    <p>
      <?= $lastname . ' ' . $firstname . ' ' . $old; ?>
    </p>
    <h2>Methode pour mettre du text hors php</h2>
    <p>
      age : <?= $old; ?>
    </p>
  </body>
</html>
