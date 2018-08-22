// bei jedem scrollen, soll die Function schongescrollt aufgeruft werden
window.onscroll = schongescrollt;

function schongescrollt() {
  var scrollposition = window.pageYOffset;
  var sticky = document.getElementById("stickynav");

// Bereits 300px gescrollt?
// Ja = .nav-fixed wird geadded, Nein = .nav-fixed wird entfernt
  if (scrollposition >= 300) {
    sticky.classList.add("nav-fixed");
  }
  else {
    sticky.classList.remove("nav-fixed");
  }
}

// Navigation kommt rein und raus
function menu_icon_change() {
  var einstgear  = document.getElementById("nav-einst-gear");
  var menulinien = document.getElementById("nav-menu-linien");
  var menuclose  = document.getElementById("nav-menu-close");

// einst wird unsichtbar gemacht, damit nicht beide gleichzeitig aktiv sein können
  einstgear.classList.toggle("unsichtbar");
// 3 Linien weg, das X erscheint
  menulinien.classList.toggle("menu-weg");
  menuclose.classList.toggle("menu-weg");

// Navigation kommt rein oder raus
  var nav = document.getElementById("nav-menu-nav");
  nav.classList.toggle("nav-rein");

// wurde Dropdown geöffnet, wird es geschlossen wenn die Navigation weg geht
  var dropdown = document.getElementById("nav-dropdown");
  if (dropdown.classList.contains("dropdown-rein")) {
    dropdown.classList.remove("dropdown-rein");
  }

// unsichbarer Container wird hinzugefügt
  var empty = document.getElementById("leerecontainer");
  empty.classList.toggle("unsichtbar");
}

// Einstellungsmenu wird geöffnet oder geschlossen
function einst_icon_change() {
  var menulinien = document.getElementById("nav-menu-linien");
  var einstgear  = document.getElementById("nav-einst-gear");
  var einstclose = document.getElementById("nav-einst-close");

// navigation wird unsichtbar gemacht, damit nicht beide gleichzeitig aktiv sein können
  menulinien.classList.toggle("unsichtbar");
// Zahnrad get weg, X erscheint
  einstgear.classList.toggle("einst-weg");
  einstclose.classList.toggle("einst-weg");

  var einst = document.getElementById("nav-einst-einst");

// Das Eingstellungsmenu wird für die Animation folgendermassen bearbeitet..
// reinkommen: sichtbar gemacht, animation zum reinkommen
// rauskommen: animation zum rauskommen, unsichtbar (Dafür braucht es die beiden delays)
  if (einst.classList.contains("unsichtbar")) {
    einst.classList.remove("unsichtbar");
    setTimeout(function(){
      einst.classList.add("einst-rein");
    }, 10);
  }
  else if (einst.classList.contains("einst-rein")) {
    einst.classList.remove("einst-rein");
    setTimeout(function(){
      einst.classList.add("unsichtbar");
    }, 300);
  }

// unsichbarer Container wird hinzugefügt
  var empty = document.getElementById("leerecontainer");
  empty.classList.toggle("unsichtbar");
}

// Dropdownmenu entweder geöffnet oder geschlossen
function dropdown_aktiv() {
  var ddicon = document.getElementById("dropdownicon");
  var zeigen = document.getElementById("nav-dropdown");

  ddicon.classList.toggle("drehen");
  zeigen.classList.toggle("dropdown-rein")

}

// Funktion wird ausgelöst, wenn Nav oder Einstellungsmenu geöffet wurde
function wegmitallem() {
// wurde nav ausgelöst? dann wird dieses if getriggered
  var nav = document.getElementById("nav-menu-nav");
  if (nav.classList.contains("nav-rein")) {
    nav.classList.remove("nav-rein");

// Zahnrad wieder sichtbar
    var einstgear = document.getElementById("nav-einst-gear");
    einstgear.classList.toggle("unsichtbar");

// drehen vom X zu den 3 Linien
    var menulinien = document.getElementById("nav-menu-linien");
    menulinien.classList.toggle("menu-weg");
    var menuclose = document.getElementById("nav-menu-close");
    menuclose.classList.toggle("menu-weg");
  }

// wurde einstellungsmenu ausgelöst? dann wird dieses if getriggered
  var einst = document.getElementById("nav-einst-einst")
  if (einst.classList.contains("einst-rein")) {

// 3 Linien wieder sichtbar
    var navlinie = document.getElementById("nav-menu-linien");
    navlinie.classList.toggle("unsichtbar");

// drehe vom X zum Zahnrad
    var einstgear = document.getElementById("nav-einst-gear");
    einstgear.classList.toggle("einst-weg");
    var einstclose = document.getElementById("nav-einst-close");
    einstclose.classList.toggle("einst-weg");

// Das Eingstellungsmenu wird für die Animation folgendermassen bearbeitet..
// reinkommen: sichtbar gemacht, animation zum reinkommen
// rauskommen: animation zum rauskommen, unsichtbar (Dafür braucht es die beiden delays)
    if (einst.classList.contains("unsichtbar")) {
      einst.classList.remove("unsichtbar");
      setTimeout(function(){
        einst.classList.add("einst-rein");
      }, 10);
    }
    else if (einst.classList.contains("einst-rein")) {
      einst.classList.remove("einst-rein");
      setTimeout(function(){
        einst.classList.add("unsichtbar");
      }, 300);
    }
  }

// unsichtbarer Container wieder weg
  var unsichtbar = document.getElementById("leerecontainer");
  unsichtbar.classList.toggle("unsichtbar")
}

// wenn die Schrift gewechselt wurde, die beiden Klassen einmal wechseln
function schriftwechsel() {
  document.getElementById("body").classList.toggle("font1");
  document.getElementById("body").classList.toggle("font2");
}

// dunkler mode aktiv/inaktiv
function themewechsel() {
  body = document.getElementById("body");

  body.classList.toggle("darkmode");

  if (body.classList.contains("rothover")) {
    body.classList.remove("rothover");
    body.classList.add("hellrothover");
  }
  else if (body.classList.contains("hellrothover")) {
    body.classList.remove("hellrothover");
    body.classList.add("rothover");
  }
}

// Farb wechslet zu blau
function setblau() {

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

// Farb wechslet zu gruen
function setgruen() {
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

// Farb wechslet zu blau
function setrot() {
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
