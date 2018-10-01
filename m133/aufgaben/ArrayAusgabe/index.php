<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array Ausgabe</title>
  </head>
  <body>

    <?php
      $orte = array("Bern", "Wabern", "Zug", "Aarau", "Zug", "Langnau");

      echo "<p>Ausgabe vom zweiten Element</p>";
      echo $orte[1];

?><hr><?php //Das Dient nur als kleine Abtrennung

      echo "<p>Ausgabe der gesamten Anzahl Elemente im Array</p>";
      echo count($orte);

?><hr><?php

      echo "<p>Ausgabe Informationen aller Elemente</p>";
      echo print_r($orte);

?><hr><?php

      echo "<p>Ausgabe Informationen aller Elemente in einer Reihenfolge</p>";
      foreach ($orte as $e) {
        echo "$e <br>";
      }

?><hr><?php

      echo "<p>Ausgabe Orte in einer Liste</p>";
      echo "<ul>";
      foreach ($orte as $e) {
        echo "<li>$e</li>";
      }
      echo "</ul>";
?>
  </body>
</html>
