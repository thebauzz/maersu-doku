<?php
  session_start();
  if (isset($_GET["lang"])) {
    if ($_GET["lang"] == "de") {
      $_SESSION["language"] = "de";
    }
    else {
      $_SESSION["language"] = "fr";
    }
  }

  if ($_SESSION["language"] == "de" || !isset($_SESSION["language"])) {
    $content = file_get_contents('src/de_index');
    echo $content;
  }
  else {
    $content = file_get_contents('src/fr_index');
    echo $content;
  }
?>
