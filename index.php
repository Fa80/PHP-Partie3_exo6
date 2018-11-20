<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie3_Exo6</title>
</head>
<body>

    <?php
//En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.

        $number = 20;
        while($number >=0){   ?>
          <?php $number--; ?>
            <p><?php echo  $number . " C'est presque bon ";
        }
    ?></p>
</body>
</html>
