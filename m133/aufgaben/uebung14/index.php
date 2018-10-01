<?php
  if (isset($_GET["farbe"])) {
    $farbauswahl = $_GET["farbe"];
    switch ($farbauswahl) {
      case 'tomato':
        $bgfarbe = "tomato";
        break;

      case "sienna":
        $bgfarbe = "sienna";
        break;

      case "rot":
        $bgfarbe = "red";
        break;

      case "gruen":
        $bgfarbe = "green";
        break;

      case "blau":
        $bgfarbe = "blue";
        break;
    }
  }
  else {
    echo "Es wurde keine Hintergrundfarbe verwendet.<br/>&nbsp;<br/>";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Übung 14</title>
    <style>
    body {
      width:100%;
      height:100vh;
      background: <?php echo $bgfarbe; ?>
    }
    </style>
  </head>
  <body>

    <form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <label for="farbe">Hintergrundfarbe: </label><br>
        <label><input type="radio" name="farbe" value="tomato"> Tomato</label><br>
        <label><input type="radio" name="farbe" value="sienna"> Sienna</label><br>
        <label><input type="radio" name="farbe" value="rot"> Rot</label><br>
        <label><input type="radio" name="farbe" value="gruen"> Grün</label><br>
        <label><input type="radio" name="farbe" value="blau"> Blau</label><br>
      <input type="submit"><br><br>
    </form>
  </body>
</html>
