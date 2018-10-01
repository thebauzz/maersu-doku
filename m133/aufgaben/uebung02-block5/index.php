<!DOCTYPE html>
<?php
  $Mann = "mann";
  $Frau = "frau";
  $personen = array(
    array("name" => "Gretsch",
          "vorname" => "Märsu",
          "alter" => "19",
          "geschlecht" => "mann"),

    array("name" => "Schillinger",
          "vorname" => "Riphraphraphaelloräfi",
          "alter" => "18",
          "geschlecht" => "frau"),

    array("name" => "Fisch",
          "vorname" => "Nemo",
          "alter" => "16",
          "geschlecht" => "mann"),
  );
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Übung 2 - Block 5</title>

    <style>
      td {
        width: 150px;
      }

      tr {
        border-bottom: 1px solid black;
      }

      table, th, td {
        border-collapse: collapse;
      }

      td:nth-child(3),
      td:nth-child(4){
        text-align: center;
      }

      select {
        width: 100px;
        margin-bottom: 50px;
        text-align: center;
      }
    </style>
  </head>
  <body>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
      Filter:<br>
      <select name="Filter">
        <option value="alle">Alle</option>
        <option value="mann">Mann</option>
        <option value="frau">Frau</option>
      </select>
      <input type="submit" name="submit" value="Suchen">
    </form>

    <?php
      if (!empty($_GET["Filter"])) {
        if ($_GET["Filter"]!= "Alle") {
          ?>

          <h2>Suchergebnisse:</h2>
          <table>
            <tr>
              <th>Nachname</th>
              <th>Vorname</th>
              <th>Alter</th>
              <th>Geschlecht</th>
            </tr>

            <?php
          $filter = $_GET["Filter"];
            foreach ($personen as $p) {
              echo "<tr>";
              if ($_GET["Filter"] == $p["geschlecht"]) {
                foreach ($p as $pe) {
                  echo "<td>";
                  echo $pe;
                  echo "</td>";
                }
              }
              else {
                echo "";
              }
              echo "</tr>";
            }
        }
      }
    ?>

    </table>

    <br>

    <h2>Alle:</h2>
    <table>
      <tr>
        <th>Nachname</th>
        <th>Vorname</th>
        <th>Alter</th>
        <th>Geschlecht</th>
      </tr>

        <?php
           foreach ($personen as $p) {
             echo "<tr>";
             foreach ($p as $e => $v) {
               echo "<td>";
               echo $v;
               echo "</td>";
             }
             echo "</tr>";
           }
         ?>
    </table>

  </body>
</html>
