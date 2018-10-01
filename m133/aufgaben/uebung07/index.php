<?php
  mt_srand((double)microtime()*1000000);

  $zufallswert1 = mt_rand(0, 16777216);
  $color1 = "#".dechex($zufallswert1 );

  $zufallswert2 = mt_rand(0, 255);
  $color2 = "#".dechex($zufallswert2).dechex($zufallswert2).dechex($zufallswert2);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Übung 7</title>
    <style>
      .div1{width:100%;height:200px;background:<?php echo$color1 ?>}
      .div2{width:100%;height:200px;background:<?php echo$color2 ?>}
    </style>
  </head>
  <body>
    <div class="div1"></div>
    <hr>
    <div class="div2"></div>
  </body>
</html>
