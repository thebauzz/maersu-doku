function sideSetting() {
// erscheinen und verschwinden lassen der icons
  open   = document.getElementById("one");
  close = document.getElementById("two");

  close.classList.toggle("begone");
  open.classList.toggle("begone");

// erscheinen und verschwinden lassen des containers zum wegklicken der Navigation
  document.getElementById("leerecontainer").classList.toggle("nope");

// entweder einfüge-animation oder entfern-animation der Navigation
  setting = document.getElementById("settings")

  if (setting.classList.contains("inesettings")) {
    setting.classList.add("usesettings");
    setting.classList.remove("inesettings");
  }
  else if (setting.classList.contains("usesettings")){
    setting.classList.add("inesettings");
    setting.classList.remove("usesettings");
  }
  else {
    setting.classList.add("inesettings");
  }
}

function switchtheme() {}/*
// entfernen oder hinzufügen vom darkmode
  wechseln = document.getElementById("body");

  if (wechseln.classList.contains("darkmode")) {
    wechseln.classList.remove("darkmode");
  }
  else {
    wechseln.classList.add("darkmode");
  }

// darkmode hat ein helleres rothover.. daher: wenn rot gewählt - darkmode rein, rot weg & hellrot rein
  if (body.classList.contains("rothover")) {
    body.classList.remove("rothover");
    body.classList.add("hellrothover");
  }
  else if (body.classList.contains("hellrothover")) {
    body.classList.remove("hellrothover");
    body.classList.add("rothover");
  }
}
*/
function fontchange() {}/*
// wenn der wert wechselt ändern der beiden schriftarten
  body   = document.getElementById("body");
  select = document.getElementById("fontchange");

  body.classList.toggle("font1");
  body.classList.toggle("font2");

  select.classList.toggle("font1");
  select.classList.toggle("font2");
}
*/
// Farb wechslet zu blau
function setblau() {}/*

// welches element hat sich zu verändern?
  gruen = document.getElementById("gruen");
  rot   = document.getElementById("rot");
  blau  = document.getElementById("blau");
  body  = document.getElementById("body");

// anderi hoverklasse entferne
  if (body.classList.contains("gruenhover")) {
    body.classList.remove("gruenhover");
  }
  if (body.classList.contains("rothover")) {
    body.classList.remove("rothover");
  }
  if (body.classList.contains("hellrothover")) {
    body.classList.remove("hellrothover");
  }

// orangene rahme um s'blaue kreis
  blau.classList.add("selected");

// isch vorher gruen gsi? wenn ja, weg mit dem orangene balke
  if (gruen.classList.contains("selected")) {
    gruen.classList.remove("selected");
  }
// isch vorher rot gsi? wenn ja, weg mit dem orangene balke
  if (rot.classList.contains("selected")) {
    rot.classList.remove("selected");
  }
}
*/
// Farb wechslet zu gruen
function setgruen() {}/*
// welches element hat sich zu verändern?
  gruen = document.getElementById("gruen");
  rot   = document.getElementById("rot");
  blau  = document.getElementById("blau");
  body  = document.getElementById("body");

  body.classList.add("gruenhover");

// anderi hoverklasse entferne
  if (body.classList.contains("rothover")) {
    body.classList.remove("rothover");
  }
  if (body.classList.contains("hellrothover")) {
    body.classList.remove("hellrothover");
  }

// orangene rahme um s'gruene kreis
  gruen.classList.add("selected");

// isch vorher blau gsi? wenn ja, weg mit dem orangene balke
  if (blau.classList.contains("selected")) {
    blau.classList.remove("selected");
  }
// isch vorher rot gsi? wenn ja, weg mit dem orangene balke
  if (rot.classList.contains("selected")) {
    rot.classList.remove("selected");
  }
}
*/
// Farb wechslet zu blau
function setrot() {}/*
// welches element hat sich zu verändern?
  gruen = document.getElementById("gruen");
  rot   = document.getElementById("rot");
  blau  = document.getElementById("blau");
  body  = document.getElementById("body");

// darkmode aktiv = hellrothover; darkmode inaktiv = rothover
  if (body.classList.contains("darkmode")) {
    body.classList.add("hellrothover");
  }
  else {
    body.classList.add("rothover");
  }

// anderi hoverklasse entferne
  if (body.classList.contains("gruenhover")) {
    body.classList.remove("gruenhover");
  }

// orangene rahme um s'rote kreis
  rot.classList.add("selected");

// isch vorher blau gsi? wenn ja, weg mit dem orangene balke
  if (blau.classList.contains("selected")) {
    blau.classList.remove("selected");
  }
// isch vorher gruen gsi? wenn ja, weg mit dem orangene balke
  if (gruen.classList.contains("selected")) {
    gruen.classList.remove("selected");
  }
}
*/
