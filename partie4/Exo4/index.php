<?php
function whoAreYou($name, $firstname, $age) {
  return 'Bonjour ' . $name . ' ' . $firstname . ', tu as ' . $age . ' ans';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 4 : Les fonctions</title>
  </head>
  <body>
    <p>
      <?php echo whoAreYou('Duverger', 'Emilie', 35); ?>
    </p>
  </body>
</html>
