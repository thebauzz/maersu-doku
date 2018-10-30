<?php
  session_start();

  if (isset($_POST["usrname"]) && $_POST["usrname"] == "test"
      &&isset($_POST["passwd"]) && $_POST["passwd"] == "test") {
    $_SESSION["name"] = $_POST["usrname"];
    $_SESSION["login"] = 1;
    $link = "geheim.php";
  } else {
    $link = "index.php?f=1";
  }
  header("Location: $link");
?>
