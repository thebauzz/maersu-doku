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
    <title>Team Tanner</title>
  </head>
  <body>

    <header>
<!-- Section 1 // Header Image & Header Text -->
      <section>
        <div class="header--img" id="img"></div>
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
            <a href="?lang=fr">fr</a><i>//</i><a href="?lang=de" class="header--lang-active">de</a>';
break; case 1: echo '
            <a href="?lang=fr" class="header--lang-active">fr</a><i>//</i><a href="?lang=de">de</a>';
break;}?>
          </div>
          <div class="header--navigation" id="nav">
            <ul>
<?php switch($lang) { case 0: echo '
              <li><a class="nav-active" href="/">Home</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="schedule.php">Saisonplan / Resultate</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="sponsoring.php">Sponsoring</a></li>';
break; case 1: echo '
              <li><a class="nav-active" href="/">Home</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="schedule.php">Programme de la saison / Résultats</a></li>
              <li><a href="news.php">Nouvelles</a></li>
              <li><a href="sponsoring.php">Sponsors</a></li>';
break;}?>
            </ul>
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
      <div class="main--recent-news">
        <h2>Nächstes Turnier </h2>
        <p>04. - 06. Januar 2019<i>&nbsp;//&nbsp;</i>Junior Swiss Cup in St. Gallen</p>
        <a href="docs/Schedule-JuniorSwissCup.pdf" target="_blank">Spielplan Junior Swiss Cup</a>
        <p class="inbetween">&nbsp;</p>
        <a href="schedule.php">zum Saisonplan</a>
      </div>

      <div class="main--recent-news">
        <h2>Neueste Nachrichten </h2>
        <p>Wir wünschen euch schöne Festtage und alles Gute im Jahr 2019!</p>
        <p class="inbetween">&nbsp;</p>
        <a href="news.php">weitere Neuigkeiten</a>
        <img src="img/news/news-x.jpg" alt="News X" />
      </div>

      <div class="main--recent-news">
        <h2>Das Team </h2>
        <p>Mélissa Tanner, Celine Schwizgebel, Annaëlle Ciganek, Emma Suter</p>
        <p class="inbetween">&nbsp;</p>
        <a href="team.php">mehr über uns</a>
        <img src="img/team.jpg" alt="Team LOMG" />
      </div>
'; break; case 1: echo '
      <div class="main--recent-news">
        <h2>Prochain Tournois </h2>
        <p>04. - 06. Janvier 2019<i>&nbsp;//&nbsp;</i>Junior Swiss Cup à Saint-Gall</p>
        <a href="docs/Schedule-JuniorSwissCup.pdf" target="_blank">Plan des jeux Junior Swiss Cup</a>
        <p class="inbetween">&nbsp;</p>
        <a href="schedule.php">au programme de la saison</a>
      </div>

      <div class="main--recent-news">
        <h2>Dernières nouvelles </h2>
        <p>Nous vous souhaitons de joyeuses fêtes!</p>
        <p class="inbetween">&nbsp;</p>
        <a href="news.php">plus de nouvelles</a>
        <img src="img/news/news-x.jpg" alt="News X" />
      </div>

      <div class="main--recent-news">
        <h2>Notre Team </h2>
        <p>Mélissa Tanner, Celine Schwizgebel, Anaëlle Ciganek, Emma Suter</p>
        <p class="inbetween">&nbsp;</p>
        <a href="team.php">plus à propos de nous</a>
        <img src="img/team.jpg" alt="Team LOMG" />
      </div>
'; break; } ?>
    </main>
    <div style="height: 200px;"></div>
  </body>
</html>
