<?php
  $guenstig = "Das kostet nicht viel..";
  $teuer = "Das ist mir zu teuer!";
  $fair = "Das ist ein fairer Preis";
  $preis = 17;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gruppenauftrag</title>
  </head>
  <body>

    <?php
    $guenstig = "Das kostet nicht viel..";
    $teuer = "Das ist mir zu teuer!";
    $fair = "Das ist ein fairer Preis";
    $preis = 17;
      if ($preis >= 20) {
        echo $teuer;
      }
      else {
        echo $guenstig;
      }

?><hr><?php

      if ($preis > 20) {
        echo $teuer;
      }
      elseif ($preis == 20) {
        echo $fair;
      }
      else {
        echo $guenstig;
      }

?><hr><?php

      if ($preis >= 20) { ?>
        <p>Das ist mir zu teuer</p> <?php
      }
      else { ?>
        <p>Das kostet nicht viel</p> <?php
      }
      ?>

  </body>
</html>
