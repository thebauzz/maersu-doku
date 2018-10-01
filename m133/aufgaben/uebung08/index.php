<?php
  $m_vorname  = "Marcel";
  $m_nachname = "Gertsch";
  $m_alter    = 19;
  $m_mail     = "marcel@gertsch.be";

  $persdaten = array($m_vorname, $m_nachname, $m_alter, $m_mail);
  foreach ($persdaten as $i) {
    echo "$i <br>";
  }
 ?>
<hr>
<?php

  $ausgabe = 2;

  $prelink  = "<a target=\"_blank\" href=\"https://github.com/";
  $midlink1 = "thebauzz";
  $midlink2 = "neeemoo";
  $midlink3 = "raphij";
  $endlink  = "\">Github Acc</a>";
  $git1 = $prelink.$midlink1.$endlink;
  $git2 = $prelink.$midlink2.$endlink;
  $git3 = $prelink.$midlink3.$endlink;

  $pers_id  = array("1"      , "2"       , "3");
  $vorname  = array("Marcel" , "Nemo"    , "Raphael");
  $nachname = array("Gertsch", "Luethold", "Schillig");
  $alter    = array("19"     , "16"      , "18");
  $gitlink  = array("$git1"  , "$git2"   , "$git3");

  echo "<strong>Personen ID:</strong> $pers_id[$ausgabe]<br>";
  echo "<strong>Vorname:</strong> $vorname[$ausgabe]<br>";
  echo "<strong>Nachname:</strong> $nachname[$ausgabe]<br>";
  echo "<strong>Alter:</strong> $alter[$ausgabe]<br>";
  echo "<strong>Github Link:</strong> $gitlink[$ausgabe]<br>";

?>
