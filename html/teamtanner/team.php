<?php
  session_start();
  if (isset($_GET["lang"])) {
    if ($_GET["lang"] == "de") { $_SESSION["language"] = "de"; }
    else { $_SESSION["language"] = "fr"; }
  }

  if ($_SESSION["language"] == "de" || !isset($_SESSION["language"])) {
    $lang = 0;
  }
  else {
    $lang = 1;
  }
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Marcel Gertsch" />
    <link href="img/favicon.ico" rel="icon" />
    <link href="css/main.css" rel="Stylesheet" />
    <script src="script/main.js" type="text/javascript"></script>
    <title>Team Tanner // LOMG</title>
  </head>
  <body>

    <header>
<!-- Section 1 // Header Image & Header Text -->
      <section>
        <div class="header--img" id="header--img"></div>
        <div class="header--text">Team Tanner</div>
      </section>
<!-- Section 2 // Navigation, Navbar with Nav-Icon and Language settings -->
      <section>
        <div class="header--navbar" id="navbar">
          <div class="header--icon" id="menu" onclick="toggleMenu()">
            <div id="line1"></div>
            <div id="line2"></div>
            <div id="line3"></div>
          </div>
          <div class="header--lang">

<?php switch($lang) { case 0: echo '
            <a href="?lang=fr">fr</a><i>//</i><a href="?lang=de" class="header--lang-active">de</a>
';break; case 1: echo '
            <a href="?lang=fr" class="header--lang-active">fr</a><i>//</i><a href="?lang=de">de</a>
';break;}?>
          </div>
          <div class="header--navigation" id="nav">
<?php switch($lang) { case 0: echo '
            <ul>
              <li><a href="/">Home</a></li>
              <li><a class="nav-active" href="team.php">Team</a></li>
              <li><a href="schedule.php">Saisonplan / Resultate</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="sponsoring.php">Sponsoring</a></li>
            </ul>
            <a class="header--nav-link" href="https://facebook.com/Curling.LOMG" target="_blank">Unser Facebook</a>
';break; case 1: echo '
            <ul>
              <li><a href="/">Home</a></li>
              <li><a class="nav-active" href="team.php">Team</a></li>
              <li><a href="schedule.php">Programme de la saison / Résultats</a></li>
              <li><a href="news.php">Nouvelles</a></li>
              <li><a href="sponsoring.php">Sponsors</a></li>
            </ul>
            <a class="header--nav-link" href="https://facebook.com/Curling.LOMG" target="_blank">Notre Facebook</a>
';break;}?>
          </div>
        </div>
        <div class="invisible" id="container" onclick="toggleMenu()"></div>
      </section>
    </header>

    <main id="main-content">
      <div class="main--welcome-text">
        <h1>Lausanne Olympique - Morges - Gstaad</h1>
        <hr>
        <h2>team</h2>
      </div>

<?php switch($lang) { case 0: echo '
      <div class="main--team">
        <div class="team--table">
          <table>
            <colgroup><col width="50%"><col width="50%"></colgroup>
            <tr>
              <td class="team--bild-links"><img src="img/MelissaTanner.jpeg" alt="Mélissa Tanner"></td>
              <td class="team--text-rechts"><strong>Mélissa Tanner</strong><br>Fourth (S)<br>20/02/1999</td>
            </tr>
          </table>
        </div>

        <div class="team--table">
          <table>
            <colgroup><col width="50%"><col width="50%"></colgroup>
            <tr>
              <td class="team--text-links"><strong>Celine Schwizgebel</strong><br>Third<br>12/10/1999</td>
              <td class="team--bild-rechts"><img draggable="false" src="img/CelineSchwizgebel.jpeg" alt="CelineSchwizgebel"></td>
            </tr>
          </table>
        </div>

        <div class="team--table">
          <table>
            <colgroup><col width="50%"><col width="50%"></colgroup>
            <tr>
              <td class="team--bild-links"><img src="img/AnaelleCiganek.jpeg" alt="Anaëlle Ciganek"></td>
              <td class="team--text-rechts"><strong>Anaëlle Ciganek</strong><br>Second<br>23/11/1999</td>
            </tr>
          </table>
        </div>

        <div class="team--table">
          <table>
            <colgroup><col width="50%"><col width="50%"></colgroup>
            <tr>
              <td class="team--text-links"><strong>Emma Suter</strong><br>Lead (V)<br>20/10/2000</td>
              <td class="team--bild-rechts"><img src="img/EmmaSuter.jpeg" alt="Emma Suter"></td>
            </tr>
          </table>
        </div>
      </div>
'; break; case 1: echo '
      <div class="main--team">
        <div class="team--table">
          <table>
            <colgroup><col width="50%"><col width="50%"></colgroup>
            <tr>
              <td class="team--bild-links"><img src="img/MelissaTanner.jpeg" alt="Mélissa Tanner"></td>
              <td class="team--text-rechts"><strong>Mélissa Tanner</strong><br>Fourth (S)<br>20/02/1999</td>
            </tr>
          </table>
        </div>

        <div class="team--table">
          <table>
            <colgroup><col width="50%"><col width="50%"></colgroup>
            <tr>
              <td class="team--text-links"><strong>Celine Schwizgebel</strong><br>Third<br>12/10/1999</td>
              <td class="team--bild-rechts"><img draggable="false" src="img/CelineSchwizgebel.jpeg" alt="CelineSchwizgebel"></td>
            </tr>
          </table>
        </div>

        <div class="team--table">
          <table>
            <colgroup><col width="50%"><col width="50%"></colgroup>
            <tr>
              <td class="team--bild-links"><img src="img/AnaelleCiganek.jpeg" alt="Anaëlle Ciganek"></td>
              <td class="team--text-rechts"><strong>Anaëlle Ciganek</strong><br>Second<br>23/11/1999</td>
            </tr>
          </table>
        </div>

        <div class="team--table">
          <table>
            <colgroup><col width="50%"><col width="50%"></colgroup>
            <tr>
              <td class="team--text-links"><strong>Emma Suter</strong><br>Lead (V)<br>20/10/2000</td>
              <td class="team--bild-rechts"><img src="img/EmmaSuter.jpeg" alt="Emma Suter"></td>
            </tr>
          </table>
        </div>
      </div>
'; break; } ?>
    </main>
    <div style="height: 200px;"></div>
  </body>
</html>
