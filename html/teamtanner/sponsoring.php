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
    <meta name="theme-color" content="#8c1936" />
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
              <li><a href="team.php">Team</a></li>
              <li><a href="schedule.php">Saisonplan / Resultate</a></li>
              <li><a href="news.php">News</a></li>
              <li><a class="nav-active" href="sponsoring.php">Sponsoring</a></li>
            </ul>
            <a class="header--nav-link" href="https://facebook.com/Curling.LOMG" target="_blank">Unser Facebook</a>
';break; case 1: echo '
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="schedule.php">Programme de la saison / Résultats</a></li>
              <li><a href="news.php">Nouvelles</a></li>
              <li><a class="nav-active" href="sponsoring.php">Sponsors</a></li>
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
        <h2>sponsoring</h2>
      </div>

<?php switch($lang) { case 0: echo '
      <div class="main--sponsoring">
        <div class="sponsoring--principal">
          <h2>Hauptsponsor</h2>
          <a href="https://www.riederarchitektur.ch/de/" target="_blank">
            <img src="img/sponsors/rieder-architektur.png">
          </a>
        </div>

        <div class="sponsoring--others">
          <h2>Sponsoren</h2>
          <a href="https://www.garage-rochat.ch/" target="_blank">
            <img src="img/sponsors/rochat-et-fils.png">
          </a>

          <a href="http://www.git-cad.ch/" target="_blank">
            <img src="img/sponsors/gitcad.png">
          </a>

          <a href="https://www.tinline.ch/" target="_blank">
            <img src="img/sponsors/tinline.png">
          </a>

          <a href="https://www.gstaad.ch/gstaad/service-shopping-alt/service-shopping.html?objID=3984c8c9-23d4-49bf-9b0b-f6f1858011d3&structureID=37e72d90-8a40-4aae-a991-d5b676ac725d&cHash=c22c027fc773c5c8c5b3a0d119eeddbd" target="_blank">
            <img class="reichenbach" src="img/sponsors/reichenbach-holzbau.png">
          </a>
        </div>
      </div>
'; break; case 1: echo '
      <div class="main--sponsoring">
        <div class="sponsoring--principal">
          <h2>Sponsor principal</h2>
          <a href="https://www.riederarchitektur.ch/fr/" target="_blank">
            <img src="img/sponsors/rieder-architektur.png">
          </a>
        </div>

        <div class="sponsoring--others">
          <h2>Sponsors</h2>
          <a href="https://www.garage-rochat.ch/" target="_blank">
            <img src="img/sponsors/rochat-et-fils.png">
          </a>

          <a href="http://www.git-cad.ch/" target="_blank">
            <img src="img/sponsors/gitcad.png">
          </a>

          <a href="https://www.tinline.ch/" target="_blank">
            <img src="img/sponsors/tinline.png">
          </a>

          <a href="https://www.gstaad.ch/gstaad/service-shopping-alt/service-shopping.html?objID=3984c8c9-23d4-49bf-9b0b-f6f1858011d3&structureID=37e72d90-8a40-4aae-a991-d5b676ac725d&cHash=c22c027fc773c5c8c5b3a0d119eeddbd" target="_blank">
            <img class="reichenbach" src="img/sponsors/reichenbach-holzbau.png">
          </a>
        </div>
      </div>
'; break; } ?>
    </main>
    <div style="height: 200px;"></div>
  </body>
</html>
