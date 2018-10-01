<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>list()</title>
    <style>p{font-family:courier;font-size:14px;}</style>
  </head>
  <body>

<pre>
&lt;?php
  $vornamen = array("Marcel","Nemo","Raphael");
  list($a, $b , $c) = $vornamen;

  echo "Zu meiner Auswahl gehören $a, $b und $c.";
?&gt;
</pre>
<?php
  $vornamen = array("Marcel","Nemo","Raphael");
  list($a, $b , $c) = $vornamen;

  echo "Zu meiner Auswahl gehören $a, $b und $c.<br/>";
?>

<hr>

<pre>
&lt;?php
  $nachname = array("Marcel","Nemo","Raphael");
  list($a, , $c) = $nachname;

  echo "Nun habe ich nur $a und $c zugewiesen.";
?&gt;
</pre>
<?php
    $nachname = array("Marcel","Nemo","Raphael");
    list($a, , $c) = $nachname;

    echo "Nun habe ich nur $a und $c zugewiesen.<br/>";
?>

  </body>
</html>
