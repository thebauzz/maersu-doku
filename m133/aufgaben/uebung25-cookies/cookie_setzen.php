<?php

  setcookie("name", "Marie", time()+7200);
  setcookie("farbe", "rot", time()+7200);

?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Cookies setzen</title>
</head>
  <body>

    <p>In diesem Dokument sollten zwei Cookies gesetzt werden.</p>
    <p>Prüfen Sie, ob das geklappt hat, über<a href="cookie_auslesen.php"> cookie_auslesen.php</a></p>

  </body>
</html>
