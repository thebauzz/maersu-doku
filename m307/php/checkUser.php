<?php
// Um die Usernames nicht case sensitive zu machen
// -> Transformation vom Username input in Kleinbuchstaben
// damit Admin und admin das gleiche ist..
  $benutzername = strtolower($_POST["username"]);

// Konvertiert die Benutzerdatenbank in einen Array (für die Überpfrüfung ob Username bereits vorhanden)
  $fp = fopen("../datenbank/users.txt", 'r');
  $userlist = explode("\n", fread($fp, filesize("../datenbank/users.txt")));

// Überprfung (leer, ob Leerschläge vorhanden sind, ERFOLGREICH, bereits verwendet)
  if (empty($benutzername)) {
    echo "<span id=\"signupusername\" class=\"error\">Bitte geben Sie einen Benutzernamen ein.</span>";
  }
  else {
    if (count(explode(' ', $benutzername)) > 1) {
      echo "<span id=\"signupusername\" class=\"error\">Keine Leerschläge erlaubt.</span>";
    }
    else {
      $count = in_array($benutzername, $userlist);
      if ($count > 0) {
        echo "<span id=\"signupusername\" class=\"error\">Der Benutzername ist nicht verfügbar.</span>";
      }
      else {
        echo "<span id=\"signupusername\" class=\"success\" style=\"color:var(--success)\">&#10003;</span>";
      }
    }
  }

?>
