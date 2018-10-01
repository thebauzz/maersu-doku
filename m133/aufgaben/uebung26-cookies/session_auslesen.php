<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Session verwenden</title>
  </head>
  <body>
  <?php

    if (isset($_SESSION["name"]) && isset($_SESSION["username"])) {
      echo "Die geschriebenen Werte sind: <br>";
      echo "<b>Name</b>: {$_SESSION['name']} <br>";
      echo "<b>Farbe</b>: {$_SESSION['username']} <br>";
    }
    else {
      echo "Noch keine Session gesetzt";
    }

  ?>
  </body>
</html>
