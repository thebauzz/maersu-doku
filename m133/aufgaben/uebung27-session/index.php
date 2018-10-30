<html>
<head>
  <meta charset="UTF-8" />
  <title>Login mit Sessions</title>
  <style>
    .fehler { color: red; }
  </style>
</head>

<body>
  <?php
    if (isset($_GET["f"]) && $_GET["f"] == 1) {
      echo "<p class='fehler'>Login-Daten nicht korrekt</p>";
    }
  ?>
  <form method="post" action="login.php">
    Username:
    <input type="text" name="usrname" size="20" /><br /><br />

    Password:
    <input type="password" name="passwd" size="20" /><br /><br />
    <input type="submit" value="Login" />
  </form>
</body>
</html>
