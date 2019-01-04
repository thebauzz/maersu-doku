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
              <li><a class="nav-active" href="schedule.php">Saisonplan / Resultate</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="sponsoring.php">Sponsoring</a></li>
            </ul>
            <a class="header--nav-link" href="facebook.com/Curling.LOMG" target="_blank">Unser Facebook</a>
';break; case 1: echo '
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a class="nav-active" id="icon-to-high" href="schedule.php">Programme de la saison / Résultats</a></li>
              <li><a href="news.php">Nouvelles</a></li>
              <li><a href="sponsoring.php">Sponsors</a></li>
            </ul>
            <a class="header--nav-link" href="facebook.com/Curling.LOMG" target="_blank">Notre Facebook</a>
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
<?php switch($lang) { case 0: echo '
        <h2>saisonplan / resultate</h2>
';break; case 1: echo '
        <h2>programme de la saison / résultats</h2>
';break;}?>
      </div>

<?php switch($lang) { case 0: echo '
      <div class="main--saisonplan">
        <h2>Saisonplan</h2>
        <table>
          <tr>
            <th class="saisonplan--date">Datum</th>
            <th class="saisonplan--info">Turnier</th>
          </tr>
          <tr>
            <td class="saisonplan--date">04.08. - 05.08.18</td>
            <td class="saisonplan--info">Sommerturnier in Adelboden</td>
          </tr>
          <tr>
            <td class="saisonplan--date">15.09. - 16.09.18</td>
            <td class="saisonplan--info">Kaderweekend in Bern</td>
          </tr>
          <tr>
            <td class="saisonplan--date">22.09. - 23.09.18</td>
            <td class="saisonplan--info">Kaderweekend in Biel</td>
          </tr>
          <tr>
            <td class="saisonplan--date">02.10. - 05.10.18</td>
            <td class="saisonplan--info">Kaderwoche in Biel</td>
          </tr>
          <tr>
            <td class="saisonplan--date">12.10. - 14.10.18</td>
            <td class="saisonplan--info">Womens Masters in Basel</td>
          </tr>
          <tr>
            <td class="saisonplan--date">02.11. - 04.11.18</td>
            <td class="saisonplan--info">EJCT in Glasgow</td>
          </tr>
          <tr>
            <td class="saisonplan--date">22.11. - 25.11.18</td>
            <td class="saisonplan--info">EJCT in Thun</td>
          </tr>
          <tr>
            <td class="saisonplan--date">30.11. - 02.12.18</td>
            <td class="saisonplan--info">EJCT in Kitzbühel</td>
          </tr>
          <tr>
            <td class="saisonplan--date">15.12. - 16.12.18</td>
            <td class="saisonplan--info">1. Teil A-Liga in Gstaad</td>
          </tr>
          <tr class="saisonplan--last-event">
            <td class="saisonplan--date">22.12. - 23.12.18</td>
            <td class="saisonplan--info">Huus Turnier in Gstaad</td>
          </tr>
          <tr class="saisonplan--next-up">
            <td class="saisonplan--date">04.01. - 06.01.19</td>
            <td class="saisonplan--info">Junior Swiss Cup in St.Gallen</td>
          </tr>
          <tr>
            <td class="saisonplan--date">10.01. - 13.01.19</td>
            <td class="saisonplan--info">Ladies Cup in Bern</td>
          </tr>
          <tr>
            <td class="saisonplan--date">19.01. - 20.01.19</td>
            <td class="saisonplan--info">2. Teil A-Liga in Zug</td>
          </tr>
          <tr>
            <td class="saisonplan--date">02.02. - 03.02.19</td>
            <td class="saisonplan--info">3. Teil A-Liga in St.Gallen</td>
          </tr>
          <tr>
            <td class="saisonplan--date">08.03. - 10.03.19</td>
            <td class="saisonplan--info">1. Teil SM in Arlesheim</td>
          </tr>
          <tr>
            <td class="saisonplan--date">16.03. - 17.03.19</td>
            <td class="saisonplan--info">2. Teil SM in Arlesheim</td>
          </tr>
          <tr>
            <td class="saisonplan--date">11.05.19</td>
            <td class="saisonplan--info">Repas de soutien in Savigny</td>
          </tr>
        </table>
      </div>
'; break; case 1: echo '
      <div class="main--saisonplan">
        <h2>Programme de la saison</h2>
        <table>
          <tr>
            <th class="saisonplan--date">Dates</th>
            <th class="saisonplan--info">Tournois</th>
          </tr>
          <tr>
            <td class="saisonplan--date">04.08. - 05.08.18</td>
            <td class="saisonplan--info">Tournoi d&#039;été à Adelboden</td>
          </tr>
          <tr>
            <td class="saisonplan--date">15.09. - 16.09.18</td>
            <td class="saisonplan--info">weekend du cadre à Berne</td>
          </tr>
          <tr>
            <td class="saisonplan--date">22.09. - 23.09.18</td>
            <td class="saisonplan--info">weekend du cadre à Bienne</td>
          </tr>
          <tr>
            <td class="saisonplan--date">02.10. - 05.10.18</td>
            <td class="saisonplan--info">semaine du cadre à Bienne</td>
          </tr>
          <tr>
            <td class="saisonplan--date">12.10. - 14.10.18</td>
            <td class="saisonplan--info">Womens Masters à Bâle</td>
          </tr>
          <tr>
            <td class="saisonplan--date">02.11. - 04.11.18</td>
            <td class="saisonplan--info">EJCT à Glasgow</td>
          </tr>
          <tr>
            <td class="saisonplan--date">22.11. - 25.11.18</td>
            <td class="saisonplan--info">EJCT à Thoune</td>
          </tr>
          <tr>
            <td class="saisonplan--date">30.11. - 02.12.18</td>
            <td class="saisonplan--info">EJCT à Kitzbühel</td>
          </tr>
          <tr>
            <td class="saisonplan--date">15.12. - 16.12.18</td>
            <td class="saisonplan--info">1er tour A-Ligue à Gstaad</td>
          </tr>
          <tr class="saisonplan--last-event">
            <td class="saisonplan--date">22.12. - 23.12.18</td>
            <td class="saisonplan--info">Huus tournoi à Gstaad</td>
          </tr>
          <tr class="saisonplan--next-up">
            <td class="saisonplan--date">04.01. - 06.01.19</td>
            <td class="saisonplan--info">Junior Swiss Cup à Saint-Gall</td>
          </tr>
          <tr>
            <td class="saisonplan--date">10.01. - 13.01.19</td>
            <td class="saisonplan--info">Ladies Cup à Berne</td>
          </tr>
          <tr>
            <td class="saisonplan--date">19.01. - 20.01.19</td>
            <td class="saisonplan--info">2ème tour A-Ligue à Zoug</td>
          </tr>
          <tr>
            <td class="saisonplan--date">02.02. - 03.02.19</td>
            <td class="saisonplan--info">3ème tour A-Ligue à Saint-Gall</td>
          </tr>
          <tr>
            <td class="saisonplan--date">08.03. - 10.03.19</td>
            <td class="saisonplan--info">1er tour final à Arlesheim</td>
          </tr>
          <tr>
            <td class="saisonplan--date">16.03. - 17.03.19</td>
            <td class="saisonplan--info">2ème tour final à Arlesheim</td>
          </tr>
          <tr>
            <td class="saisonplan--date">11.05.19</td>
            <td class="saisonplan--info">Repas de soutien à Savigny</td>
          </tr>
        </table>
      </div>
'; break; } ?>

<?php switch($lang) { case 0: echo '
      <div class="main--results">
        <h2>Resultate</h2>
        <div class="results--content">
          <hr>
          <h3>Sommerturnier in Adelboden</h3>
          <strong>Turniersieg (5W / 0L)</strong><br>
          <p>W vs. Langenthal <i>//</i>&nbsp; 6-2</p>
          <p>W vs. Interlaken <i>//</i>&nbsp; 10-4</p>
          <p>W vs. Hoehne (GER) <i>//</i>&nbsp; 6-5</p>
          <p>W vs. Kapp (GER) <i>//</i>&nbsp; 9-5</p>
          <p>W vs. Bern <i>//</i>&nbsp; 10-6</p>
          <a href="docs/Ranking-Adelboden.pdf" target="_blank">Rangliste</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>Womens Masters in Basel</h3>
          <strong>DNQ (1W / 3L)</strong><br>
          <p>W vs. Hürlimann <i>//</i>&nbsp; 6-4</p>
          <p>L vs. Hegner <i>//</i>&nbsp; 3-6</p>
          <p>L vs. Wrana (SWE) <i>//</i>&nbsp; 3-6</p>
          <p>L vs. Yoshimura (JAP) <i>//</i>&nbsp; 3-6</p>
          <a href="http://www.curling-basel.ch/fileadmin/rinkmaster/WMB/m.html#Team19" target="_blank">Resultate</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>EJCT in Braehead</h3>
          <strong>Ausgeschieden nach QF (3W / 2L)</strong><br>
          <p>W vs. Fransson (SWE) <i>//</i>&nbsp; 8-7</p>
          <p>W vs. Farmer (SCO) <i>//</i>&nbsp; 7-5</p>
          <p>W vs. Dandie (SCO) <i>//</i>&nbsp; 6-5</p>
          <p>L vs. Fransson (SWE) <i>//</i>&nbsp; 5-6</p>
          <p>L vs. Davie (SCO) <i>//</i>&nbsp; 1-6</p>
          <a href="http://www.curlingzone.com/event.php?view=Team&eventid=5388&teamid=127041" target="_blank">Resultate</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>EJCT in Thun</h3>
          <strong>DNQ (3W / 2L)</strong><br>
          <p>W vs. Lee (KOR) <i>//</i>&nbsp; 9-4</p>
          <p>W vs. Klimova (CZE) <i>//</i>&nbsp; 8-2</p>
          <p>L vs. Keiser <i>//</i>&nbsp; 4-6</p>
          <p>L vs. Wüest <i>//</i>&nbsp; 5-7</p>
          <p>W vs. Lo Deserto (ITA) <i>//</i>&nbsp; 8-3</p>
          <a href="http://ccthunregio.ch/wp-content/uploads/veranstaltungen/7443/spielplan/m.html#Team8" target="_blank">Resultate</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>EJCT in Kitzbühel</h3>
          <strong>Turniersieg (5W / 1L)</strong><br>
          <p>W vs. Haidinger (AUT) <i>//</i>&nbsp; 11-5</p>
          <p>W vs. Gregori (SLO) <i>//</i>&nbsp; 12-2</p>
          <p>L vs. Hoehne (GER) <i>//</i>&nbsp; 4-5</p>
          <p>W vs. Schwaller <i>//</i>&nbsp; 6-5</p>
          <p>W vs. Schwaller <i>//</i>&nbsp; 7-3</p>
          <p>W vs. Hoehne (GER) <i>//</i>&nbsp; 13-3</p>
          <a href="http://www.curlingzone.com/event.php?view=Team&eventid=5652&teamid=128987#1" target="_blank">Resultate</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>1. Teil A-Liga in Gstaad</h3>
          <strong>0W / 3L</strong><br>
          <p>L vs. Interlaken <i>//</i>&nbsp; 4-5</p>
          <p>L vs. Bern 1 <i>//</i>&nbsp; 4-5</p>
          <p>L vs. Luzern <i>//</i>&nbsp; 2-7</p>
          <a href="http://www.curling-results.ch/resultat/jun/2018-19/juniorinnen/a-liga/m.html#Team7" target="_blank">Resultate</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>Huus Turnier in Gstaad</h3>
          <strong>8. Rang (2W / 2L / 1T)</strong>
          <p>W vs. White Star Basel <i>//</i>&nbsp; 9-5</p>
          <p>L vs. Solothurn-Regio <i>//</i>&nbsp; 4-7</p>
          <p>L vs. Langethal <i>//</i>&nbsp; 6-11</p>
          <p>W vs. eifachöppis <i>//</i>&nbsp; 8-3</p>
          <p>T vs. Gstaad Senioren <i>//</i>&nbsp; 5-5</p>
        </div>

    <!--
        <div class="results--content">
          <hr>
          <h3>Junior Swiss Cup in St. Gallen</h3>
          <strong>xW / xL</strong><br>
          <p>x vs. Luzern <i>//</i>&nbsp; x-x</p>
          <p>x vs. Biel-St.Gallen <i>//</i>&nbsp; x-x</p>
          <p>x vs. Dübendorf <i>//</i>&nbsp; x-x</p>
        </div>
    -->

    <!--    <div class="results--content">
          <hr>
          <h3>2. Teil A-Liga in Zug</h3>
          <strong>xW / xL</strong><br>
          <p>x vs. Baden-Limmattal <i>//</i>&nbsp; x-x</p>
          <p>x vs. Wetzikon <i>//</i>&nbsp; x-x</p>
          <p>x vs. Biel-Solothurn <i>//</i>&nbsp; x-x</p>
        </div>
    -->

    <!--    <div class="results--content">
          <hr>
          <h3>3. Teil A-Liga in St. Gallen</h3>
          <strong>xW / xL</strong><br>
          <p>x vs. Biel-St.Gallen <i>//</i>&nbsp; x-x</p>
          <p>x vs. Wallisellen <i>//</i>&nbsp; x-x</p>
          <p>x vs. Bern 2 <i>//</i>&nbsp; x-x</p>
        </div>
    -->

      </div>
'; break; case 1: echo '
      <div class="main--results">
        <h2>Résultats</h2>
        <div class="results--content">
          <hr>
          <h3>Tournoi d&#039;été à Adelboden</h3>
          <strong>Victoire du tournoi (5W / 0L)</strong><br>
          <p>W vs. Langenthal <i>//</i>&nbsp; 6-2</p>
          <p>W vs. Interlaken <i>//</i>&nbsp; 10-4</p>
          <p>W vs. Hoehne (GER) <i>//</i>&nbsp; 6-5</p>
          <p>W vs. Kapp (GER) <i>//</i>&nbsp; 9-5</p>
          <p>W vs. Berne <i>//</i>&nbsp; 10-6</p>
          <a href="docs/Ranking-Adelboden.pdf" target="_blank">Classement</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>Womens Masters à Bâle</h3>
          <strong>DNQ (1W / 3L)</strong><br>
          <p>W vs. Hürlimann <i>//</i>&nbsp; 6-4</p>
          <p>L vs. Hegner <i>//</i>&nbsp; 3-6</p>
          <p>L vs. Wrana (SWE) <i>//</i>&nbsp; 3-6</p>
          <p>L vs. Yoshimura (JAP) <i>//</i>&nbsp; 3-6</p>
          <a href="http://www.curling-basel.ch/fileadmin/rinkmaster/WMB/m.html#Team19" target="_blank">Résultats</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>EJCT à Braehead</h3>
          <strong>Eliminé après QF (3W / 2L)</strong><br>
          <p>W vs. Fransson (SWE) <i>//</i>&nbsp; 8-7</p>
          <p>W vs. Farmer (SCO) <i>//</i>&nbsp; 7-5</p>
          <p>W vs. Dandie (SCO) <i>//</i>&nbsp; 6-5</p>
          <p>L vs. Fransson (SWE) <i>//</i>&nbsp; 5-6</p>
          <p>L vs. Davie (SCO) <i>//</i>&nbsp; 1-6</p>
          <a href="http://www.curlingzone.com/event.php?view=Team&eventid=5388&teamid=127041" target="_blank">Résultats</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>EJCT à Thoune</h3>
          <strong>DNQ (3W / 2L)</strong><br>
          <p>W vs. Lee (KOR) <i>//</i>&nbsp; 9-4</p>
          <p>W vs. Klimova (CZE) <i>//</i>&nbsp; 8-2</p>
          <p>L vs. Keiser <i>//</i>&nbsp; 4-6</p>
          <p>L vs. Wüest <i>//</i>&nbsp; 5-7</p>
          <p>W vs. Lo Deserto (ITA) <i>//</i>&nbsp; 8-3</p>
          <a href="http://ccthunregio.ch/wp-content/uploads/veranstaltungen/7443/spielplan/m.html#Team8" target="_blank">Résultats</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>EJCT à Kitzbühel</h3>
          <strong>Victoire du tournoi (5W / 1L)</strong><br>
          <p>W vs. Haidinger (AUT) <i>//</i>&nbsp; 11-5</p>
          <p>W vs. Gregori (SLO) <i>//</i>&nbsp; 12-2</p>
          <p>L vs. Hoehne (GER) <i>//</i>&nbsp; 4-5</p>
          <p>W vs. Schwaller <i>//</i>&nbsp; 6-5</p>
          <p>W vs. Schwaller <i>//</i>&nbsp; 7-3</p>
          <p>W vs. Hoehne (GER) <i>//</i>&nbsp; 13-3</p>
          <a href="http://www.curlingzone.com/event.php?view=Team&eventid=5652&teamid=128987#1" target="_blank">Résultats</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>1er tour de A-Ligue à Gstaad</h3>
          <strong>0W / 3L</strong><br>
          <p>L vs. Interlaken <i>//</i>&nbsp; 4-5</p>
          <p>L vs. Berne 1 <i>//</i>&nbsp; 4-5</p>
          <p>L vs. Lucerne <i>//</i>&nbsp; 2-7</p>
          <a href="http://www.curling-results.ch/resultat/jun/2018-19/juniorinnen/a-liga/m.html#Team7" target="_blank">Résultats</a>
        </div>

        <div class="results--content">
          <hr>
          <h3>Huus tournoi à Gstaad</h3>
          <strong>8ème place (2W / 2L / 1T)</strong>
          <p>W vs. White Star Bâle <i>//</i>&nbsp; 9-5</p>
          <p>L vs. Soleure-Regio <i>//</i>&nbsp; 4-7</p>
          <p>L vs. Langethal <i>//</i>&nbsp; 6-11</p>
          <p>W vs. eifachöppis <i>//</i>&nbsp; 8-3</p>
          <p>T vs. Gstaad Senioren <i>//</i>&nbsp; 5-5</p>
        </div>

      <!--
        <div class="results--content">
          <hr>
          <h3>Junior Swiss Cup à Saint-Gall</h3>
          <strong>xW / xL</strong><br>
          <p>x vs. Lucerne <i>//</i>&nbsp; x-x</p>
          <p>x vs. Bienne-Saint-Gall <i>//</i>&nbsp; x-x</p>
          <p>x vs. Dübendorf <i>//</i>&nbsp; x-x</p>
        </div>
      -->

      <!--    <div class="results--content">
          <hr>
          <h3>2ème tour de A-Ligue à Zoug</h3>
          <strong>xW / xL</strong><br>
          <p>x vs. Baden-Limmattal <i>//</i>&nbsp; x-x</p>
          <p>x vs. Wetzikon <i>//</i>&nbsp; x-x</p>
          <p>x vs. Bienne-Soleure <i>//</i>&nbsp; x-x</p>
        </div>
      -->

      <!--    <div class="results--content">
          <hr>
          <h3>3ème tour de A-Ligue à Saint-Gall</h3>
          <strong>xW / xL</strong><br>
          <p>x vs. Biel-St.Gallen <i>//</i>&nbsp; x-x</p>
          <p>x vs. Wallisellen <i>//</i>&nbsp; x-x</p>
          <p>x vs. Bern 2 <i>//</i>&nbsp; x-x</p>
        </div>
      -->

      </div>
'; break; } ?>

    </main>
    <div style="height: 200px;"></div>
  </body>
</html>
