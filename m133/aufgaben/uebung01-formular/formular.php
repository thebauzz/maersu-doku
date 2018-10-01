<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Übung 1 - Funktionen</title>
  </head>
  <body>

    <?php
      echo "<h1>Welcome ".$_GET["vorname"]."</h1>";
      echo "<p><strong>Ihr Name: </strong>".$_GET["vorname"]."</p>";
      echo "<p><strong>Ihr Nachname: </strong>".$_GET["nachname"]."</p>";
      echo "<p><strong>Die Firma: </strong>".$_GET["firma"]."</p>";
      echo "<p><strong>Ihre Adresse: </strong>".$_GET["adresse"]."</p>";
      echo "<p><strong>PLZ und Wohnort: </strong>".$_GET["plz"]."</p>";
      echo "<p><strong>Ihre Telefonnummer: </strong>".$_GET["tel"]."</p>";
      echo "<p><strong>Ihre E-Mail: </strong>".$_GET["email"]."</p>";

      echo "<p><strong>Ihre Auswahl (Sortiment): </strong>";
      $sortiment = $_GET["sorti"];
      switch ($sortiment) {
        case 1:
          echo "Optische Kohärenztomographie</p>";
          break;
        case 2:
          echo "Sonografie</p>";
          break;
        case 3:
          echo "Magnetresonanztomographie</p>";
          break;
        case 4:
          echo "Computertomographie</p>";
          break;
        case 5:
          echo "Szintigraphie</p>";
          break;
        case 6:
          echo "Positions-Emissions-Tomographie</p>";
          break;
        default:
          echo "ungültig";
          break;
      }
      echo "<p><strong>Ihre Auswahl (Branche): </strong>".$_GET["branche"]."</p>";
      echo "<p><strong>Ihre Mitteilung: </strong>".$_GET["mitteilung"]."</p>";

      if (isset($_GET["newsletter"])) {
        echo "<p><strong>Sie wollen den Newsletter</strong></p>";
      }
      else {
        echo "nö.";
      }
    ?>
  </body>
</html>
