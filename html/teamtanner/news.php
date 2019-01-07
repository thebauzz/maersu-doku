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
              <li><a href="team.php">Team</a></li>
              <li><a href="schedule.php">Saisonplan / Resultate</a></li>
              <li><a class="nav-active" href="news.php">News</a></li>
              <li><a href="sponsoring.php">Sponsoring</a></li>
            </ul>
            <a class="header--nav-link" href="https://facebook.com/Curling.LOMG" target="_blank">Unser Facebook</a>
';break; case 1: echo '
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="schedule.php">Programme de la saison / Résultats</a></li>
              <li><a class="nav-active" href="news.php">Nouvelles</a></li>
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
        <h2>news</h2>
      </div>

<?php switch($lang) { case 0: echo '
      <div class="main--news">

        <div class="news--content">
          <hr>
          <h3>12. Oktober 2018</h3>
          <p>Der zweite Match verlief ausgeglichen, jedoch können wir ihn Schlussendlich nicht für uns entscheiden.<br>
             Nächster Match morgen um 15:30 gegen SWE <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/se.svg"> Wranå.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-7.jpg" alt="News 7" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>12. Oktober 2018</h3>
          <p>Wir gewinnen unseren ersten Match 6-4 gegen SUI <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg"> Hürlimann!<br>
             Nächster Match um 15:30 gegen SUI<img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg"> Hegner.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-6.jpg" alt="News 6" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>10. Oktober 2018</h3>
          <p>Diese Woche fand die Kaderwoche in Biel statt.<br>
             Wir trainierten in den Bereichen Technik, Taktik, Kommunikation und Ausdauer. Wir möchten uns bei Swisscurling für die Organisation und bei Valentin Tanner für seine Unterstützung als Götti bedanken.<br><br>
            Next up: Basel Woman Masters 12.-14. Oktober<br>
            #LOMG 💪🏼
          </p>
          <img src="img/news/news-5.jpg" alt="News 5" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>30. September 2018</h3>
          <p>Dieses Wochenende fand in Biel das zweite Kaderwochenende statt. Wir konnten auf sowie neben dem Eis hart trainieren und profitieren (Sport, Taktik, Sportpsychologie)<br><br>
             Next up: Kaderwoche in Biel vom 7.- 10. Oktober<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-4.jpg" alt="News 4" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>27. September 2018</h3>
          <p>Gestern waren wir in Champéry. Dort haben wir ein intensives Training absolviert.<br><br>
             Next up: Kaderwochenende in Biel 29./30. September.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-3.jpg" alt="News 3" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>16. September 2018</h3>
          <p>Dieses Wochenende absolvierten wir unser erstes Kaderwochenende in Bern.<br>
             Auf sowie neben dem Eis waren es intensive Trainings. Wir sind zufrieden mit unserer Leistung des Wochenendes.<br><br>
             Next up: Kadertraining in Biel am 29. und 30. September<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-2.jpg" alt="News 2" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>13. September 2018</h3>
          <p>Wir freuen uns Valentin Tanner als unseren Götti im Team wilkommen zu heissen. Wir sind sehr dankbar, dass er sich die Zeit für uns nimmt und wünschen ihm und seinem Team viel Erfolg in dieser Saison.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-1.jpg" alt="News 1" class="news--img">
        </div>
      </div>
'; break; case 1: echo '
fr (working on it.. check the german part lol <3)
<div style="height: 300px"></div>
'; break; } ?>
    </main>
    <div style="height: 200px;"></div>
  </body>
</html>
