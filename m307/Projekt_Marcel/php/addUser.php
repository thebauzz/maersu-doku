<?php

// Öffnet ../datenbank/users.txt -- Einfügen von neuem Username -- schliessen
  $benutzername = strtolower($_POST["username"]);
  $userFile = fopen("../datenbank/users.txt", "a");
  $newUsr = "$benutzername\n";
  fwrite($userFile, $newUsr);
  fclose($userFile);

// Öffnet ../datenbank/passwds.txt -- Einfügen von neuem Passwort -- schliessen
  $passwort = $_POST["password"];
  $pwdFile = fopen("../datenbank/passwds.txt", "a");
  $newPwd = "$passwort\n";
  fwrite($pwdFile, $newPwd);
  fclose($pwdFile);

?>
