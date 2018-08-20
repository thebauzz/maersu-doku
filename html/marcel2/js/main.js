window.onscroll = schongescrollt;

function schongescrollt() {
  var scrollposition = window.pageYOffset;
  var sticky = document.getElementById("stickynav");

  if (scrollposition >= 300) {
    sticky.classList.add("nav-fixed");
  }
  else {
    sticky.classList.remove("nav-fixed");
  }
}

function menu_icon_change() {
  var einstgear  = document.getElementById("nav-einst-gear");
  var menulinien = document.getElementById("nav-menu-linien");
  var menuclose  = document.getElementById("nav-menu-close");

  einstgear.classList.toggle("unsichtbar");
  menulinien.classList.toggle("menu-weg");
  menuclose.classList.toggle("menu-weg");

  var nav = document.getElementById("nav-menu-nav");
  nav.classList.toggle("nav-rein");

  var dropdown = document.getElementById("nav-dropdown");
  if (dropdown.classList.contains("dropdown-rein")) {
    dropdown.classList.remove("dropdown-rein");
  }

  var empty = document.getElementById("leerecontainer");
  empty.classList.toggle("unsichtbar");
}

function einst_icon_change() {
  var menulinien = document.getElementById("nav-menu-linien");
  var einstgear  = document.getElementById("nav-einst-gear");
  var einstclose = document.getElementById("nav-einst-close");

  menulinien.classList.toggle("unsichtbar");
  einstgear.classList.toggle("einst-weg");
  einstclose.classList.toggle("einst-weg");

  var einst = document.getElementById("nav-einst-einst");

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

  var empty = document.getElementById("leerecontainer");
  empty.classList.toggle("unsichtbar");
}

function dropdown_aktiv() {
  var ddicon = document.getElementById("dropdownicon");
  var zeigen = document.getElementById("nav-dropdown");

  ddicon.classList.toggle("drehen");
  zeigen.classList.toggle("dropdown-rein")

}

function wegmitallem() {
  var nav = document.getElementById("nav-menu-nav");

  if (nav.classList.contains("nav-rein")) {
    nav.classList.remove("nav-rein");

    var einstgear = document.getElementById("nav-einst-gear");
    einstgear.classList.toggle("unsichtbar");

    var menulinien = document.getElementById("nav-menu-linien");
    menulinien.classList.toggle("menu-weg");

    var menuclose = document.getElementById("nav-menu-close");
    menuclose.classList.toggle("menu-weg");
  }

  var einst = document.getElementById("nav-einst-einst")

  if (einst.classList.contains("einst-rein")) {
    einst.classList.remove("einst-rein");
    einst.classList.add("unsichtbar");

    var navlinie = document.getElementById("nav-menu-linien");
    navlinie.classList.toggle("unsichtbar");

    var einstgear = document.getElementById("nav-einst-gear");
    einstgear.classList.toggle("einst-weg");

    var einstclose = document.getElementById("nav-einst-close");
    einstclose.classList.toggle("einst-weg");
  }

  var unsichtbar = document.getElementById("leerecontainer");
  unsichtbar.classList.toggle("unsichtbar")
}

function schriftwechsel() {
  document.getElementById("body").classList.toggle("font1");
  document.getElementById("body").classList.toggle("font2");
}

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
