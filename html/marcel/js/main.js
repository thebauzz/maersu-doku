window.onresize = displayWindowSize;
window.onload = displayWindowSize;

function displayWindowSize() {
  Bildbreite = window.innerWidth;
  nav = document.getElementById("navigation");
  setting = document.getElementById("settings");

  if (Bildbreite > 470) {
    nav.classList.add("deskview");
    nav.classList.remove("mobileview");
    setting.classList.add("desksetting");
    setting.classList.remove("mobilesetting");
  }
  else {
    nav.classList.add("mobileview");
    nav.classList.remove("deskview");
    setting.classList.add("mobilesetting");
    setting.classList.remove("desksetting");
  }
}

window.onscroll = schongescrollt;

function schongescrollt() {
  var scrollposition = window.pageYOffset;
  var dasda = document.getElementById("navigation");
  var abstand = document.getElementById("section1");

  if (scrollposition >= 280) {
    dasda.classList.add("blibdobe");
    abstand.classList.add("abstandwegennav");
  }
  else {
    dasda.classList.remove("blibdobe");
    abstand.classList.remove("abstandwegennav");
  }
}

function chumAbe() {
  dropdown = document.getElementById("nav-dropdown");
  ddicon   = document.getElementById("dropdownicon");

  if (dropdown.classList.contains("dunde")){
    dropdown.classList.toggle("nope");
    dropdown.classList.remove("dunde");
    ddicon.classList.remove("drehen");
  }
  else {
    dropdown.classList.toggle("nope");
    dropdown.classList.add("dunde");
    ddicon.classList.add("drehen");
  }
}

function nav_ine_use() {
  nav = document.getElementById("nav-nachrechts");
  dropdown  = document.getElementById("nav-dropdown");
  leerecont = document.getElementById("leerecontainer");

  leerecont.classList.toggle("nope");

// mach das Hamburgermenu zum X und zurück
  document.getElementById("normal1").classList.toggle("gedreht1");
  document.getElementById("normal2").classList.toggle("gedreht2");
  document.getElementById("normal3").classList.toggle("gedreht3");

// entweder einfüge-animation oder entfern-animation der Navigation
  if (nav.classList.contains("inemitdem")) {
    nav.classList.remove("inemitdem");
    nav.classList.add("usemitdem");
  }
  else if (nav.classList.contains("usemitdem")){
    nav.classList.remove("usemitdem");
    nav.classList.add("inemitdem");
  }
  else {
    nav.classList.add("inemitdem");
  }
}

function unsichtbar() {

  menu = document.getElementById("menu");
  menustrich = document.getElementById("normal1");
  setting = document.getElementById("customsetting");
  settingicon = document.getElementById("sett-icon-one");

  if (menustrich.classList.contains("gedreht1")) {
    setting.classList.add("nope");
  }
  else {
    setting.classList.remove("nope");
  }

  if (settingicon.classList.contains("begone")) {
    menu.classList.add("nope");
  }
  else {
    menu.classList.remove("nope");
  }
}
