<!--Avant la déclaration du html mettre balise PHP ici pour tout se qui ne s affiche pas sur la page-->
<?php
//déclaration de la variable objet en utilisant le dollars
$object ='Objet du message';
//déclaration de la variable message
$message = 'contenu du message';
//déclaration de la variable text
$text = 'message';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP Partie 1 exo 1</title>
  </head>
  <body>
    <p>
      <h1>Exercice 1 avec PHP</h1>
      <!--commentaire html -->
      <!--pour afficher nos variables de PHP se trouve dans body-->
      <!-- fonction echo permet d afficher la variable-->
      <?php
      //commentaire pour php le préférer au html car plus sécurisé
      echo $object; ?>
    </p>
    <!-- fonction echo permet d afficher la variable text-->
    <p><?php echo $message;?></p>
    <p><?php echo $text;?></p>
  </body>
</html>
