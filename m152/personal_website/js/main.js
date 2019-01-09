window.onscroll = scrollIndikator;

function scrollIndikator() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("scrollIndikator").style.width = scrolled + "%";
}

// Navigation kommt rein und raus
function navReinRaus() {
// mach das Hamburgermenu zum X und zurück
  document.getElementById("nav--hamburger").classList.toggle("menudrehen");
  document.getElementById("linie1").classList.toggle("gedreht1");
  document.getElementById("linie2").classList.toggle("gedreht2");
  document.getElementById("linie3").classList.toggle("gedreht3");

// Navigation kommt rein oder raus
  var nav = document.getElementById("nav--menu");
  nav.classList.toggle("nav--rein");

// wurde Dropdown geöffnet, wird es geschlossen wenn die Navigation weg geht
  var dropdown = document.getElementById("nav--dropdown");
  if (dropdown.classList.contains("dropdown--rein")) {
    dropdown.classList.remove("dropdown--rein");
  }

// unsichbarer Container wird hinzugefügt
  var empty = document.getElementById("leerecontainer");
  empty.classList.toggle("unsichtbar");

  var ddicon = document.getElementById("dropdownicon");
  ddicon.classList.remove("drehen");

}

// Dropdownmenu entweder geöffnet oder geschlossen
function dropdownToggle() {
  var ddicon = document.getElementById("dropdownicon");
  var zeigen = document.getElementById("nav--dropdown");

  ddicon.classList.toggle("drehen");
  zeigen.classList.toggle("dropdown--rein")

}

// Funktion wird ausgelöst, die Nav geschlossen werden soll.
function wegMitAllem() {
  var ddicon = document.getElementById("dropdownicon");
  ddicon.classList.remove("drehen");

// wurde nav ausgelöst? dann wird dieses if getriggered
  var nav = document.getElementById("nav--menu");
  if (nav.classList.contains("nav--rein")) {
    navReinRaus();
  }
}
