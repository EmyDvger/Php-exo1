<?php
$months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre',
 'Octobre', 'Novembre', 'Décembre');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP Partie 3 Exo 3</title>
  </head>
  <body>
  <h1>Exo 3 partie 3</h1>
  <p>
    <?php // Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 12; $numero++)
{
    echo $months[$numero] ?>
    p
  </p>
  </body>
</html>
