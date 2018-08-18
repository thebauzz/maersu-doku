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

  var menulinien = document.getElementById("menu-linien");
  var menuclose  = document.getElementById("menu-close");

  menulinien.classList.toggle("menu-weg");
   menuclose.classList.toggle("menu-weg");
}

function einst_icon_change() {

  var einstgear  = document.getElementById("einst-gear");
  var einstclose = document.getElementById("einst-close");

   einstgear.classList.toggle("einst-weg");
  einstclose.classList.toggle("einst-weg");
}
