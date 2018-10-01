<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Übung 6</title>
  </head>
  <body>

    <?php
      define("MWST", "0.08");
      $preis = 8;
      $abzug = $preis * MWST;
      $total = $preis - $abzug;

      echo "Vom Preis werden <strong>$abzug</strong> Franken abgezogen.<br>";
      echo "Das ergibt Total: <strong>$total</strong> Franken.";
    ?>
  </body>
</html>
