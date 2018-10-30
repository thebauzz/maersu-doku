<?php
  session_start();
  if (isset($_SESSION["login"]) && $_SESSION["login"] ) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Willkommen im geschützten Bereich</title>
  </head>

  <body>
    <?php
      echo "<h1>Hallo {$_SESSION['name']}</h1>";
    ?>
    <p>Willkommen im geschützten Bereich</p>
    <p>Hier stehen viele weitere interessante Informationen.</p>
    <p><a href="logout.php">Ausloggen</p>
  </body>
</html>

<?php
  } else {
    header("Location: index.php");
  }
?>
