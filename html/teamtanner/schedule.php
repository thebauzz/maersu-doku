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
              <li><a href="/">Home</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a class="nav-active" href="schedule.php">Saisonplan / Resultate</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="sponsoring.php">Sponsoring</a></li>';
break; case 1: echo '
              <li><a href="/">Home</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a class="nav-active" href="schedule.php">Programme de la saison / Résultats</a></li>
              <li><a href="news.php">Nouvelles</a></li>
              <li><a href="sponsoring.php">Sponsors</a></li>
';break;}?>
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
          <tr>
            <td class="saisonplan--date">22.12. - 23.12.18</td>
            <td class="saisonplan--info">Huus Turnier in Gstaad</td>
          </tr>
          <tr>
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

        <h2>Resultate</h2>
        <p>coming soon.. by the way, <strong>Emma</strong>, i <span style="color:#e40613">love</span> you.</p>
      </div>
';break; case 1: echo '
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
            <td class="saisonplan--info">Kaderweekend à Berne</td>
          </tr>
          <tr>
            <td class="saisonplan--date">22.09. - 23.09.18</td>
            <td class="saisonplan--info">Kaderweekend à Bienne</td>
          </tr>
          <tr>
            <td class="saisonplan--date">02.10. - 05.10.18</td>
            <td class="saisonplan--info">Kaderwoche à Bienne</td>
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
          <tr>
            <td class="saisonplan--date">22.12. - 23.12.18</td>
            <td class="saisonplan--info">Huus tournoi à Gstaad</td>
          </tr>
          <tr>
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

        <h2>Résultats</h2>
        <p>coming soon.. by the way, <strong>Emma</strong>, i <span style="color:#e40613">love</span> you.</p>
      </div>
';break;}?>

    </main>
    <div style="height: 200px;"></div>
  </body>
</html>
