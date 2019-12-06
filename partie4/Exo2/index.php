<?php
function test($par1, $par2){
  return $par1 . $par2;
};
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP partie 4 exo 2</title>
  </head>
  <body>
    <p><?php echo test('HE!', 'HO!') ?></p>
  </body>
</html>
