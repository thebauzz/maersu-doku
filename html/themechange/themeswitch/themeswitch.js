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

/* Farb wechslet zu gruen */
function setgruen() {

/* setzt de wert vode Variable themefarbe_haupt uf gruen */
  document.documentElement.style.setProperty('--themefarbe_haupt', 'var(--gruen)');
  document.documentElement.style.setProperty('--themefarbe_sek', 'var(--dunkelgruen)');

/* welches element hat sich zu verändern? */
  standard = document.getElementById("default");
  gruen    = document.getElementById("gruen");
  rot      = document.getElementById("rot");
  blau     = document.getElementById("blau");

/* orangene rahme um s'gruene viereck */
  gruen.classList.add("selected");

/* isch vorher grau gsi? wenn ja, weg mit dem orangene balke */
  if (standard.classList.contains("selected")) {
    standard.classList.remove("selected");
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

/* Farb wechslet zu rot */
function setrot() {

/* setzt de wert vode Variable themefarbe_haupt uf rot */
  document.documentElement.style.setProperty('--themefarbe_haupt', 'var(--rot)');
  document.documentElement.style.setProperty('--themefarbe_sek', 'var(--dunkelrot)');

/* welches element hat sich zu verändern? */
  standard = document.getElementById("default");
  gruen    = document.getElementById("gruen");
  rot      = document.getElementById("rot");
  blau     = document.getElementById("blau");

/* orangene rahme um s'rote viereck */
  rot.classList.add("selected");

/* ischs vorher grau gsi? wenn, ja weg mit dem orangene balke */
  if (standard.classList.contains("selected")) {
    standard.classList.remove("selected");
  }
/* ischs vorher gruen gsi? wenn, ja weg mit dem orangene balke */
  if (gruen.classList.contains("selected")) {
    gruen.classList.remove("selected");
  }
/* ischs vorher blau gsi? wenn, ja weg mit dem orangene balke */
  if (blau.classList.contains("selected")) {
    blau.classList.remove("selected");
  }
}

/* Farb wechslet zu blau */
function setblau() {

/* setzt de wert vode Variable themefarbe_haupt uf blau */
  document.documentElement.style.setProperty('--themefarbe_haupt', 'var(--blau)');
  document.documentElement.style.setProperty('--themefarbe_sek', 'var(--dunkelblau)');

/* welches eleemnt hat sich zu verändern? */
  standard = document.getElementById("default");
  gruen    = document.getElementById("gruen");
  rot      = document.getElementById("rot");
  blau     = document.getElementById("blau");

/* orangene rahme um s'blaue viereck */
  blau.classList.add("selected");

/* ischs vorher grau gsi? wenn, ja weg mit dem orangene balke */
  if (standard.classList.contains("selected")) {
    standard.classList.remove("selected");
  }
/* ischs vorher gruen gsi? wenn, ja weg mit dem orangene balke */
  if (gruen.classList.contains("selected")) {
    gruen.classList.remove("selected");
  }
/* ischs vorher rot gsi? wenn, ja weg mit dem orangene balke */
  if (rot.classList.contains("selected")) {
    rot.classList.remove("selected");
  }
}
