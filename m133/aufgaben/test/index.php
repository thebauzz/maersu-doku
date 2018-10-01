<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dropdown auslesen</title>
  </head>
  <body>
    <form action="formular.php" method="get">
      <label>wer:<br>
        <select name="wer">
          <option value="marcel">Marcel</option>
          <option value="raphi" >Raphi</option>
          <option value="nemo"  >Nemo</option>
          <option value="yves"  >Yves</option>
        </select>
      </label><br>

      <label>Typ:<br>
        <input type="radio" name="typ" value="geil"> GEIL<br>
        <input type="radio" name="typ" value="ql"  > QL<br>
        <input type="radio" name="typ" value="mehh"> MEHH<br>
      </label><br>

      <input type="submit">
    </form>
  </body>
</html>
