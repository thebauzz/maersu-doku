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
              <li><a class="nav-active" href="/">Home</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="schedule.php">Saisonplan / Resultate</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="sponsoring.php">Sponsoring</a></li>
            </ul>
            <a class="header--nav-link" href="https://facebook.com/Curling.LOMG" target="_blank">Unser Facebook</a>
';break; case 1: echo '
            <ul>
              <li><a class="nav-active" href="/">Home</a></li>
              <li><a href="team.php">Team</a></li>
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
        <h2>home</h2>
      </div>

<?php switch($lang) { case 0: echo '
      <div class="main--preview">
        <h2>Nächstes Turnier </h2>
        <p>08. - 10. März 2019<i>&nbsp;//&nbsp;</i>1. Teil Schweizermeisterschaft in Arlesheim</p>
        <!-- <a href="docs/Schedule-StGallen.pdf" target="_blank">Spielplan</a><br> -->
        <p class="preview--inbetween-space">&nbsp;</p>
        <a href="schedule.php">zum Saisonplan</a>
      </div>

      <div class="main--preview">
        <h2>Neueste Nachrichten </h2>
        <p>Wir gewinnen den letzten Match 8:2 gegen Bern 2.<br>
           Somit sind wir für die Schweizermeisterschaft im März qualifiziert.<br>
           #LOMG 💪🏼
        </p>
        <p class="preview--inbetween-space">&nbsp;</p>
        <a href="news.php">weitere Neuigkeiten</a>
        <img src="img/news/news-34.jpg" alt="News 34" />
      </div>

      <div class="main--preview">
        <h2>Das Team </h2>
        <p>Mélissa Tanner, Celine Schwizgebel, Anaëlle Ciganek, Emma Suter</p>
        <p class="preview--inbetween-space">&nbsp;</p>
        <a href="team.php">mehr über uns</a>
        <img src="img/team.jpg" alt="Team LOMG" />
      </div>
'; break; case 1: echo '
      <div class="main--preview">
        <h2>Prochain Tournois </h2>
        <p>08 - 10 mars 2019<i>&nbsp;//&nbsp;</i>1er tour final à Arlesheim</p>
        <!-- <a href="docs/Schedule-StGallen.pdf" target="_blank">Plan des jeux</a><br> -->
        <p class="preview--inbetween-space">&nbsp;</p>
        <a href="schedule.php">au programme de la saison</a>
      </div>

      <div class="main--preview">
        <h2>Dernières nouvelles </h2>
        <p>Nous avons gagné notre dernier match du week-end 8-2 contre Bern 2!<br>
           Nous sommes donc qualifiées pour les championnats suisses en Mars!<br>
           #LOMG 💪🏼
        </p>
        <p class="preview--inbetween-space">&nbsp;</p>
        <a href="news.php">plus de nouvelles</a>
        <img src="img/news/news-34.jpg" alt="News 34" />
      </div>

      <div class="main--preview">
        <h2>Notre Team </h2>
        <p>Mélissa Tanner, Celine Schwizgebel, Anaëlle Ciganek, Emma Suter</p>
        <p class="preview--inbetween-space">&nbsp;</p>
        <a href="team.php">plus à propos de nous</a>
        <img src="img/team.jpg" alt="Team LOMG" />
      </div>
'; break; } ?>
    </main>
    <div style="height: 200px;"></div>
  </body>
</html>
