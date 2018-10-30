<?php

// Falls eines der login Felder nicht ausgefüllt wurde
  if ($_POST["loginusrname"] === "" || $_POST["loginpasswd"] === "") {
    header('Location: ../pages/failedlogin.html'); exit;
  }

// Wenn beide login Felder ausgefüllt wurden
  else {
// Öffnet Benutzerdatenbank, nimmt jede Zeile & fügt sie in den Array $arrayUser
    $fpUser = fopen("../datenbank/users.txt", 'r');
    $arrayUser = explode("\n", fread($fpUser, filesize("../datenbank/users.txt")));

// Öffnet Passwörterdatenbank, nimmt jede Zeile & fügt sie in den Array $arrayPswd
    $fpPswd = fopen("../datenbank/passwds.txt", 'r');
    $arrayPswd = explode("\n", fread($fpPswd, filesize("../datenbank/passwds.txt")));

// Sucht Position im Array von Benutzername & Username
    $keyUser = array_search(strtolower($_POST["loginusrname"]), $arrayUser);
    $keyPswd = array_search($_POST["loginpasswd"],  $arrayPswd);

// Ist die Position vom Username die gleiche Position wie die vom Passwort?
    if ($keyUser == "" || $keyPswd == "") {
      header('Location: ../pages/failedlogin.html'); exit;
    }
    elseif ($keyUser === $keyPswd) {
      header('Location: ../pages/mitgliederbereich.html'); exit;
    }
    else {
      header('Location: ../pages/failedlogin.html'); exit;
    }
  }

?>
