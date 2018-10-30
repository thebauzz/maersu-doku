<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modul 133</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <div class="content">
      <a href="..">zurück..</a>
      <?php
      
        $dirs = array_filter(glob('*'), 'is_dir');
        foreach ($dirs as $e) {
          echo "<a href=\"$e\">zu \"$e\"</a>";
        }

      ?>
    </div>
  </body>
</html>
