<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Übung 3 - Arrays</title>
    <style>
    *{font-family:courier;padding:0;margin:0;}
    body{width:90%;margin:0 auto;}
    th,td{text-align:center;width:150px;border-bottom:1px solid black;}
    h2{padding:60px 0 10px 0;}
    </style>
  </head>
  <body>
    <h2>Aufgabe 1</h2>
    <?php
      $farben = array("R" => "#CC2020",
                      "G" => "#12BC3D",
                      "B" => "#1B8AC1",);
      echo "<pre>";
      print_r($farben);
      echo "</pre>";
    ?>

    <h2>Aufgabe 2</h2>

    <?php
      $person = array(
        array("Vname" => "Marcel",
              "Nname" => "Gertsch",
              "Alter" => "19",
              "Uname" => "thebauzz"),

        array("Vname" => "Nemo",
              "Nname" => "Luethold",
              "Alter" => "16",
              "Uname" => "neeemoo"),

        array("Vname" => "Raphael",
              "Nname" => "Schillig",
              "Alter" => "18",
              "Uname" => "raphij"),
      );

      foreach ($person as $b){
        foreach ($b as $k => $v){
          echo $k." => ".$v."<br>";
        }
        echo "<br>";
      }

      echo $person[0]["Vname"];
    ?>

    <h2>Aufgabe 3</h2>

    <?php

    $orte = array( "Marcel"  => "Gertsch",
                   "Nemo"    => "Luethold",
                   "Raphael" => "Schillig");

      echo "<table><tr><th>Vorname</th><th>Nachname</th></tr>";
      foreach ($orte as $o => $i) {
        echo "<tr><td>$o</td>"."<td>$i</td></tr>";
      }
      echo "</table>";



      echo "<br><br><table>";
      foreach ($person as $p) {
      echo "<tr>";
        foreach ($p as $e => $v) {
          echo "<td>";
          echo $v;
          echo "</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    ?>
  </body>
</html>
