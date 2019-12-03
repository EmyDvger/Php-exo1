<?php
//déclaration de ma variable
$answer = 'yes';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP Partie 1 Exercice 5</title>
</head>
<body>
  <!-- html body qui permet afficher , mettre toujours des simples côte en PHP, le == signifie comparaison-->
  <p>
    <?php
    if ($answer == 'yes')
    {
      echo 'Vous avez répondu Oui !';
    }
    else
    {
      echo 'Vous avez répondu Non !';
    }
    ?>
  </p>
</body>
</html>
