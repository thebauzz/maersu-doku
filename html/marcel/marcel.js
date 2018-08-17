window.onscroll = schongescrollt;
// window.onload = neuerinhalt

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

function sideSetting() {
  open  = document.getElementById("one");
  close = document.getElementById("two");

  close.classList.toggle("begone");
  open.classList.toggle("begone");
}

function nav_ine_use() {

  nav = document.getElementById("navfuerjs");

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

function chumAbe() {

  dropdown = document.getElementById("dasmuessabe");
  ddicon   = document.getElementById("dropdownicon");

  if (dropdown.classList.contains("dunde")){
    dropdown.classList.remove("dunde");
    ddicon.classList.remove("drehen");
  }
  else {
    dropdown.classList.add("dunde");
    ddicon.classList.add("drehen");
  }
}
