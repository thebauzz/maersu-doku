<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Cookies auslesen</title>
</head>
<body>
  <?php
  
    if (isset($_COOKIE["name"]) && isset($_COOKIE["farbe"])) {
      echo "Cookies wurden gesetzt<br />\n";
      echo "Name: " . htmlspecialchars($_COOKIE["name"]) . "<br />\n";
      echo "Farbe: " . htmlspecialchars($_COOKIE["farbe"]);
    }
    else {
      echo "keine Cookies gesetzt";
    }

  ?>
</body>
</html>
