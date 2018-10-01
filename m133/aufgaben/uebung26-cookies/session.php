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
    $_SESSION["name"]  = "Perfektissimo";
    $_SESSION["username"] = "neemauzz";
    echo "Dieses Mal werden Werte über Sessions gesetzt. ";
    echo "Hier können Sie sie auslesen <a href=\"session_auslesen.php\">session_auslesen.php</a>";
  ?>

  </body>
</html>
