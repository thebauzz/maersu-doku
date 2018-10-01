<?php

  $employ = file("employees.csv");
  echo "<table border=1>";

  for($i=0;$i < count($employ);$i++){

    $ausgabe = explode(',',$employ[$i]);
    echo "<tr>";

    foreach ($ausgabe as $key) {
      echo "<td>$key</td>";
    }
    
    echo "<tr>";
  }
  echo "</table>";

?>
