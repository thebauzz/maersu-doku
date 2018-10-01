<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Scan Directory</title>
    <style>
      h2 {margin-top: 15px;}
    </style>
  </head>
  <body>
    <h1>Dateien und Verzeichnisse</h1>
    <h2>Verzeichnisse:</h2>
		<?php

      $dir = ".";

			$file_array = scandir($dir);
			foreach($file_array as $content) {
				if(is_dir($content)) {
					if(($content != ".") && ($content != "..")) {
            echo "<a href=\"$content\">$content</a><br>";
          }
        }
      }
    ?>
		<h2>Dateien:</h2>
		<?php
			$file_array = scandir($dir);
			foreach($file_array as $content) {
				if(is_file($content)) {
					if(($content != ".") && ($content != "..")) {
            echo "<a href=\"$content\">$content</a><br>";
					}
				}
			}
		?>
		<h2>Nur PHP Dateien ohne Endung:</h2>
		<?php
			$file_array = scandir($dir);
			foreach($file_array as $content) {
				if(is_file($content)) {
					if(substr($content,-4) == ".php") {
            echo "<a href=\"$content\">".substr($content,0,-4)."</a><br>";
					}
				}
			}
		?>
  </body>
</html>
