<?php
//déclaration de ma variable name
$name = 'Emilie';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP partie 1 Exercice 4</title>
</head>
<body>
  <h1>Exo 4 PHP</h1>
  <p>Bonjour <?php echo $name; ?>, comment vas tu ?</p>
  <!--Version concaténation : attention à ne pas utiliser cette version en HTML pas besoin d'analyser du texte-->
  <p><?php echo 'Bonjour ' . $name . ', comment vas tu ?'; ?></p>
</body>
</html>
