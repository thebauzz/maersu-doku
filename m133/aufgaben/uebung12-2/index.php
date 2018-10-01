<?php
  $text = "TOPOMEDICS: Messbar besser";
  function textumwandeln($a, $b){
    switch ($b) {
      case 'g':
        $a = strtoupper($a);
        return $a;
        break;
      case 'k':
        $a = strtolower($a);
        return $a;
        break;
      default:
        echo 'Achtung! Falscher Modifikationsparameter! Gültig sind nur "g" und "k"!';
        break;
    }
  }
  echo "es geht   ".textumwandeln($text, "l");
?>
