<?php
  $text = "TOPOMEDICS: Messbar besser";

  function textumwandlung($input, $method) {
    if ($method == "g") {
      $input = mb_strtoupper($input);
    }
    elseif ($method == "k") {
      $input = mb_strtolower($input);
    }
    else{
      echo "InvalidArgumentException for ";
    }
    $result = $input;
    return $result;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>12</title>
  </head>
  <body>
    <?php
      echo textumwandlung($text, "k");
    ?>

  </body>
</html>
