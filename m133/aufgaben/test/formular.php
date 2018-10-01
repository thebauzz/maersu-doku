<?php

  echo $_GET["wer"]."<br>";

  if (!empty($_GET["typ"])) {
    echo $_GET["typ"];
  }
  else {
    echo "";
  }
?>
