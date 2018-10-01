<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Übung 1 - Funktionen</title>
  </head>
  <body>
    <?php
// Deklaration Funktion Brutto Berechnen
      function bruttoBerechnen($wert, $mwst) {
        $mwstwert = $wert * $mwst;
        $ergebnis = $wert + ($wert * $mwst);

        echo "Das Netto beträgt: $wert<br>";
        echo "Die MWST beläuft sich auf: $mwstwert<br>";
        echo "Das Brutto beträgt: $ergebnis<br>";
      }
// Ausgabe der Funktion mit Parametern
      bruttoBerechnen(8, 0.08);
    ?>
  </body>
</html>
