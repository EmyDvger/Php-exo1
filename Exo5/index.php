<?php
//déclaration de ma variable
$answer = 'non';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP Partie 1 Exercice 5</title>
  </head>
  <body>
    <!-- html body qui permet afficher , mettre toujours des simples côte en PHP, le == signifie comparaison-->
    <?php
    if ($answer == 'yes'){
      ?>
      <p>Vous avez répondu oui</p>
      <?php
    }
    else{
      ?>
      <p>Vous avez répondu Non</p>
    <?php } ?>
  </body>
</html>
