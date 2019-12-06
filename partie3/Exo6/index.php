<?php
// On déclare un tableau avec un array et une variable $department
$departments= array (
  // On met des côtes pour les nombres sinon le zéro de s'affiche pas
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
    <title>PHP Partie 3 Exo 6</title>
    </head>
    <body>
      <h1>Exo 6 PHP</h1>
      <h2>1ere méthode</h2>
      <?php
      // Foreach (pour chaque éléments) on demande d'afficher l'index qui sont les numéros et les values qui sont les départements
      foreach($departments as $index => $value){ ?>
        <!-- On demande d'afficher les départements (value) avec la phrase en HTML et enfin les numéros (index) -->
        <p><?php echo $value; ?> a le numéro de département <?= $index; ?></p>
        <?php }; ?>
        <h2>Seconde méthode</h2>
        <!-- Autre méthode avec une phrase différente -->
        <?php
        foreach($departments as $index => $value){ ?>
          <p>Le Département <?php echo $value; ?> a le numéro <?php echo $index; ?></p>
        <?php }; ?>
      </body>
    </html>
