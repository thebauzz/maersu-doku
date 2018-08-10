/* Farb wechslet zu grau */
function setdefault() {

/* setzt de wert vode Variable themefarbe_haupt uf mittelgrau */
  document.documentElement.style.setProperty('--themefarbe_haupt', 'var(--mittelgrau)');
  document.documentElement.style.setProperty('--themefarbe_sek', 'var(--grau)');

/* welches element hat sich zu verändern? */
  standard = document.getElementById("default");
  gruen    = document.getElementById("gruen");
  rot      = document.getElementById("rot");
  blau     = document.getElementById("blau");

/* orangene rahme um s'graue viereck */
  standard.classList.add("selected");

/* isch vorher grüen gsi? wenn ja, weg mit dem orangene balke */
  if (gruen.classList.contains("selected")) {
    gruen.classList.remove("selected");
  }

/* isch vorher rot gsi? wenn ja, weg mit dem orangene balke */
  if (rot.classList.contains("selected")) {
    rot.classList.remove("selected");
  }

/* isch vorher blau gsi? wenn ja, weg mit dem orangene balke */
  if (blau.classList.contains("selected")) {
    blau.classList.remove("selected");
  }
}

function setgruen() {
  document.documentElement.style.setProperty('--themefarbe_haupt', 'var(--gruen)');
  document.documentElement.style.setProperty('--themefarbe_sek', 'var(--dunkelgruen)');

  standard = document.getElementById("default");
  gruen    = document.getElementById("gruen");
  rot      = document.getElementById("rot");
  blau     = document.getElementById("blau");

  gruen.classList.add("selected");

  if (standard.classList.contains("selected")) {
    standard.classList.remove("selected");
  }
  if (rot.classList.contains("selected")) {
    rot.classList.remove("selected");
  }

  if (blau.classList.contains("selected")) {
    blau.classList.remove("selected");
  }
}

function setrot() {
  document.documentElement.style.setProperty('--themefarbe_haupt', 'var(--rot)');
  document.documentElement.style.setProperty('--themefarbe_sek', 'var(--dunkelrot)');

  standard = document.getElementById("default");
  gruen    = document.getElementById("gruen");
  rot      = document.getElementById("rot");
  blau     = document.getElementById("blau");

  rot.classList.add("selected");

  if (standard.classList.contains("selected")) {
    standard.classList.remove("selected");
  }
  if (gruen.classList.contains("selected")) {
    gruen.classList.remove("selected");
  }

  if (blau.classList.contains("selected")) {
    blau.classList.remove("selected");
  }
}

function setblau() {
  document.documentElement.style.setProperty('--themefarbe_haupt', 'var(--blau)');
  document.documentElement.style.setProperty('--themefarbe_sek', 'var(--dunkelblau)');

  standard = document.getElementById("default");
  gruen    = document.getElementById("gruen");
  rot      = document.getElementById("rot");
  blau     = document.getElementById("blau");

  blau.classList.add("selected");

  if (standard.classList.contains("selected")) {
    standard.classList.remove("selected");
  }
  if (gruen.classList.contains("selected")) {
    gruen.classList.remove("selected");
  }

  if (rot.classList.contains("selected")) {
    rot.classList.remove("selected");
  }
}
