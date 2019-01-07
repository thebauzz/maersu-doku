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
          <h3>6. Januar 2019</h3>
          <p>Nach zwei gewonnenen Spielen heute gegen Biel-St. Gallen und Dübendorf, qualifizierten wir uns für den Viertelfinal, welcher direkt anschliessend stattfand. Dirsen verloren wir leider knapp im Zusatzend.<br>
             Next up: Ladies Cup Bern 10-13 Januar<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-28.jpg" alt="News 28" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>4. Januar 2019</h3>
          <p>Dieses Wochenende nehmen wir am Swisscup in St.Gallen teil.<br>
             Den ersten Match spielten wir heute um 19:00 gegen Luzern. Leider konnten wir diesen nicht für uns entscheiden.<br>
             Morgen um 08:00 spielen wir gegen Biel-St.Gallen.<br>
             #LOMG 💪🏼
          </p>
        </div>

        <div class="news--content">
          <hr>
          <h3>25. Dezember 2018</h3>
          <p>Wir wünschen euch schöne Festtage! <br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-27.jpg" alt="News 27" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>23. Dezember 2018</h3>
          <p>Wir beenden dieses Wochenende mit einem Pils gegen Gstaad Senioren 5:5 und dem 8ten Schlussrang. <br>
             Wir bedanken uns beim Hotel Huus für die Organisation. <br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-26.jpg" alt="News 26" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>23. Dezember 2018</h3>
          <p>Nach zwei Niederlagen gestern, könnten wir heute Morgen den Match für uns entscheiden. Somit sind wir für die letzte Runde qualifiziert. Wir spielen um 14:00 gegen Gstaad Senioren.<br>
             #LOMG 💪🏼
          </p>
        </div>

        <div class="news--content">
          <hr>
          <h3>21. Dezember 2018</h3>
          <p>Wir gewinnen unseren ersten match 9:5 am Huus turnier in Gstaad !<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-25.jpg" alt="News 25" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>16. Dezember 2018</h3>
          <p>Nicht unser Wochenende. Wir beenden es mit drei verloreren Spielen. Wir sind zuversichtlich und motiviert für die kommenden Meisterschaftsrunden.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-24.jpg" alt="News 24" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>14. Dezember 2018</h3>
          <p>Dieses Wochenende bestreiten wir die erste Meisterschaftsrunde der A-Liga in Gstaad. Wir spielen:<br>
             Am Samstag um 12:30 gegen Interlaken, um 19:30 gegen Bern und am Sonntag um 11:30 gegen Luzern.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-23.jpg" alt="News 23" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>2. Dezember 2018</h3>
          <p>1. PLATZ!<br>
             Wir gewinnen den Final 13:3 gegen Deutschland (Höhne) <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/de.svg"> !! <br>
             Ausserdem gratulieren wir dem Team Mancini zu ihrem Sieg! <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg"> <br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-22.jpg" alt="News 22" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>2. Dezember 2018</h3>
          <p>Wir gewinnen den Halbfinale gegen die Schweiz <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg"> (Schwaller) somit sind wir für den Final um 13:30 gegen Deutschland <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/de.svg"> (Höhne) qualifiziert!!<br>
             #LOMG💪🏼
          </p>
          <img src="img/news/news-21.jpg" alt="News 21" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>1. Dezember 2018</h3>
          <p>Beide heutigen Matchs endeten im Zusatzend. Den ersten Match gegen Deutschland <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/de.svg"> (Höhne) konnten wir leider nicht für uns entscheiden. Im zweiten Match konnten wir uns jedoch gegen Schweiz <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg"> (Schwaller) nach einem schlechten Start 6:5 durchsetzen. <br>
             Somit sind wir für den Halbfinal morgen um 8:30 gegen Schweiz <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg"> (Schwaller) qualifiziert.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-20.jpg" alt="News 20" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>30. November 2018</h3>
          <p>Wir konnten unsere beiden Matchs heute am WCT Kitzbühl für uns entscheiden. Gegen Österreich <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/at.svg"> 11:5 und 12:2 gegen Slovenien <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/si.svg">. <br>
             Nächster Match morgen um 8:00 gegen Deutschland <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/de.svg"> <br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-19.jpg" alt="News 19" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>24. November 2018</h3>
          <p>Das letzten Round Robin Spiel gegen Italien können wir für uns entscheiden.<br>
             Da wir mit zwei anderen Teams Punktegleich waren, kam es auf den LSD drauf an, wobei uns gut 1 cm fehlt. Somit konnten wir uns leider nicht für die Viertelfinäle qualifizieren.<br>
             Next up: EJCT Kitzbühel 30.12 - 2.12<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-18.jpg" alt="News 18" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>23. November 2018</h3>
          <p>Unseren ersten Match konnten wir gegen Tschechien <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/cz.svg"> (Klimova) gewinnen. Leider konnten wir nicht an unsere Leistung anknüpfen und somit verloren wir gegen Schweiz <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg"> (Keiser) und Schweiz <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg"> (Wüest).<br>
             Nächster Match morgen um 13:30 gegen Italien <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/it.svg"> (Dolomite)<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-17.jpg" alt="News 17" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>22. November 2018</h3>
          <p>Wir gewinnen unseren ersten Match am EJCT Thun 9:4 gegen Korea <img class="news--flag jpn" src="https://lipis.github.io/flag-icon-css/flags/4x3/kr.svg"> (Lee) <br>
             Nächster Match morgen um 8:30 gegen Tschechien <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/cz.svg"> (Klimova) <br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-16.jpg" alt="News 16" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>15. November 2018</h3>
          <p>Letztes Wochenende und gestern Abend fanden unsere Sponsorenapéros in Gstaad und Lausanne statt.<br>
             Wir bedanken uns nochmals ganz herzlich bei unseren Sponsoren für die grossartige Unterstützung.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-15.jpg" alt="News 15" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>7. November 2018</h3>
          <p>Wir verbrachten ein grossartiges Wochenende in Glasgow. Ein paar Erinnerungsfotos sind in einem kurzen Video zusammengefasst, welches wir euch nicht vorenthalten möchten.<br>
             #LOMG 💪🏼
          </p>
          <video class="news--video" controls preload="metadata">
            <source src="img/news/news-14.mp4" type="video/mp4">
            Your Browser does not support the video element..
          </video>
        </div>

        <div class="news--content">
          <hr>
          <h3>4. November 2018</h3>
          <p>Leider verlieren wir den Viertelfinal gegen Davie <img class="news--flag" src="https://upload.wikimedia.org/wikipedia/commons/1/10/Flag_of_Scotland.svg">. Somit ist das EJCT in Glasgow für uns beendet. Die freie Zeit nutzen wir um Glasgow ein wenig zu erkunden. Morgen fliegen wir zurück in die Schweiz.<br>
             Next EJCT: Thun 22. - 25. November<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-13.jpg" alt="News 13" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>3. November 2018</h3>
          <p>Wir verlieren den heutigen Match gegen Fransson. Jedoch haben wir uns für den Viertelfinal qualifiziert. Um 08:00 spielen wir gegen Davie <img class="news--flag" src="https://upload.wikimedia.org/wikipedia/commons/1/10/Flag_of_Scotland.svg">!<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-12.jpg" alt="News 12" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>2. November 2018</h3>
          <p>Wir beenden den ersten Tag am EJCT Glasgow mit drei Siegen gegen Fransson <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/se.svg">, Farmer <img class="news--flag" src="https://upload.wikimedia.org/wikipedia/commons/1/10/Flag_of_Scotland.svg"󠁢󠁳󠁣󠁴󠁿> und Dandie <img class="news--flag" src="https://upload.wikimedia.org/wikipedia/commons/1/10/Flag_of_Scotland.svg"󠁧󠁢󠁳󠁣> <br>
             Nächster Match Morgen um 11:15 (Ortszeit).<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-11.jpg" alt="News 11" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>1. November 2018</h3>
          <p>Wir sind auf dem Weg nach Glasgow! <img class="news--flag" src="https://upload.wikimedia.org/wikipedia/commons/1/10/Flag_of_Scotland.svg"><br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-10.jpg" alt="News 10" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>1. November 2018</h3>
          <p>Letzten Sonntag haben wir den Morgen mit den Klubmitgliedern verbracht. Wir danken ihnen für die gute Laune und ihre Unterstützung.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-09.jpg" alt="News 9" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>14. Oktober 2018</h3>
          <p>Wir verlieren unseren letzten Match knapp gegen JPN <img class="news--flag jpn" src="https://lipis.github.io/flag-icon-css/flags/4x3/jp.svg" Yoshimura.<br>
             Dieses Wochenende haben wir enorm viel gelernt und wir sind stolz auf unsere Leistung.<br>
             Next up: EJCT Glasgow <img class="news--flag" src="https://upload.wikimedia.org/wikipedia/commons/1/10/Flag_of_Scotland.svg"> 2. - 4. November<br>
             #LOMG 💪🏼
          </p>
          <video class="news--video" controls preload="metadata">
            <source src="img/news/news-08.mp4" type="video/mp4">
            Your Browser does not support the video element..
          </video>
        </div>

        <div class="news--content">
          <hr>
          <h3>13. Oktober 2018</h3>
          <p>Den letzten Match verlieren wir trotz guter Leistung gegen SWE <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/se.svg"> Wranå.<br>
             Nächster Match um 19:00 gegen JPN <img class="news--flag jpn" src="https://lipis.github.io/flag-icon-css/flags/4x3/jp.svg"> Yoshimura live auf der Facebook Seite von Jean-Philippe Suter.<br>
             #LOMG💪🏼
          </p>
        </div>

        <div class="news--content">
          <hr>
          <h3>12. Oktober 2018</h3>
          <p>Der zweite Match verlief ausgeglichen, jedoch können wir ihn Schlussendlich nicht für uns entscheiden.<br>
             Nächster Match morgen um 15:30 gegen SWE <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/se.svg"> Wranå.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-07.jpg" alt="News 7" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>12. Oktober 2018</h3>
          <p>Wir gewinnen unseren ersten Match 6-4 gegen SUI <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg"> Hürlimann!<br>
             Nächster Match um 15:30 gegen SUI <img class="news--flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg"> Hegner.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-06.jpg" alt="News 6" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>10. Oktober 2018</h3>
          <p>Diese Woche fand die Kaderwoche in Biel statt.<br>
             Wir trainierten in den Bereichen Technik, Taktik, Kommunikation und Ausdauer. Wir möchten uns bei Swisscurling für die Organisation und bei Valentin Tanner für seine Unterstützung als Götti bedanken.<br><br>
            Next up: Basel Woman Masters 12.-14. Oktober<br>
            #LOMG 💪🏼
          </p>
          <img src="img/news/news-05.jpg" alt="News 5" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>30. September 2018</h3>
          <p>Dieses Wochenende fand in Biel das zweite Kaderwochenende statt. Wir konnten auf sowie neben dem Eis hart trainieren und profitieren (Sport, Taktik, Sportpsychologie)<br><br>
             Next up: Kaderwoche in Biel vom 7.- 10. Oktober<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-04.jpg" alt="News 4" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>27. September 2018</h3>
          <p>Gestern waren wir in Champéry. Dort haben wir ein intensives Training absolviert.<br><br>
             Next up: Kaderwochenende in Biel 29./30. September.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-03.jpg" alt="News 3" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>16. September 2018</h3>
          <p>Dieses Wochenende absolvierten wir unser erstes Kaderwochenende in Bern.<br>
             Auf sowie neben dem Eis waren es intensive Trainings. Wir sind zufrieden mit unserer Leistung des Wochenendes.<br><br>
             Next up: Kadertraining in Biel am 29. und 30. September<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-02.jpg" alt="News 2" class="news--img">
        </div>

        <div class="news--content">
          <hr>
          <h3>13. September 2018</h3>
          <p>Wir freuen uns Valentin Tanner als unseren Götti im Team wilkommen zu heissen. Wir sind sehr dankbar, dass er sich die Zeit für uns nimmt und wünschen ihm und seinem Team viel Erfolg in dieser Saison.<br>
             #LOMG 💪🏼
          </p>
          <img src="img/news/news-01.jpg" alt="News 1" class="news--img">
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
