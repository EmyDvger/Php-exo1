<?php
$old = 19 ;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP partie 2 Exo 1</title>
  </head>
  <body>
    <!-- SI l'âge est supérieur ou égal à 18 -->
    <?php if ($old >= 18) { ?>
      <p>Vous êtes majeur </p>
    <?php } else { ?>
      <p>Vous êtes mineur !</p>
    <?php } ?>
  </body>
</html>
