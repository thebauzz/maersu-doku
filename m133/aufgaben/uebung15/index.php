<?php

  $status = "";
  $fokus = "";
  if (!isset($_POST['bname']) || !isset($_POST['passwd'])) {
  }
  else {
    $loginusrname = strtolower($_POST["bname"]);
    $fpUser = fopen("database/users.txt", 'r');
    $arrayUser = explode("\n", fread($fpUser, filesize("database/users.txt")));

    $loginpasswd  = $_POST["passwd"];
    $fpPswd = fopen("database/passwds.txt", 'r');
    $arrayPswd = explode("\n", fread($fpPswd, filesize("database/passwds.txt")));

    $keyUser = array_search($loginusrname, $arrayUser);
    $keyPswd = array_search($loginpasswd,  $arrayPswd);

    if ($keyUser == "" || $keyPswd == "") {
      $status = "Das Passwort oder der Benutzername wurde falsch eingegeben.";
      $fokus = "autofocus";
    }
    else if ($keyUser === $keyPswd) {
      header("Location: mitgliederbereich.html");
    }
    else {
      $status = "Das Passwort oder der Benutzername wurde falsch eingegeben.";
      $fokus = "autofocus";
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Übung 15</title>
    <style>
      label {
        display: block;
        margin: 20px 0;
      }
      input[type="password"],
      input[type="text"] {
        font-size: 15px;
      }
      i {
        font-style: normal;
        color: #cc2020;
      }
    </style>
  </head>
  <body>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" autocomplete="off">

      <label>Benutzername: <br>
        <input type="text" name="bname" <?php echo $fokus; ?>>
      </label>

      <label>Passwort: <br>
        <input type="password" name="passwd">
      </label>

      <input type="submit"><br><br>

      <?php echo "<i>".$status."</i>"; ?>

    </form>
  </body>
</html>
