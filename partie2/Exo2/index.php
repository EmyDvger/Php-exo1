<?php
$age = 13;
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Partie 2 Exo 2</title>
  </head>
  <body>
    <p>
      <?php
      //  Si c'est un homme et à 18 ans et +
      if ($gender == 'homme' &&  $age >= 18)
      {
        // Alors le message affichera ceux-ci :
        echo 'Vous êtes un homme et vous êtes majeur !';
      }
      //  Sinon si, c'est un homme et à -18 ans
      elseif ($gender == 'homme' &&  $age <= 18 )
      {
        // Alors le message affichera ceux-ci :
        echo 'Vous êtes un homme et vous êtes mineur !';
      }
      elseif ($gender == 'femme' &&  $age >= 18 )
      {
        echo 'Vous êtes une femme et vous êtes majeur !';
      }
      elseif ($gender == 'femme' &&  $age <= 18 )
      {
        echo 'Vous êtes une femme et vous êtes mineur !';
      }
      ?>
    </p>
  </body>
</html>
