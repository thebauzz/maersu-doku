window.onscroll = alreadyScrolled;

function alreadyScrolled() {
  var scrollposition = window.pageYOffset;
  var sticky = document.getElementById("navbar");
  var height = document.getElementById("img").clientHeight;

  if (scrollposition >= (height - 61)) {
    sticky.classList.add("header--navbar-fixed");
  }
  else {
    sticky.classList.remove("header--navbar-fixed");
  }
}

function toggleMenu() {
  document.getElementById("menu").classList.toggle("menu--clicked");
  document.getElementById("line1").classList.toggle("clicked1");
  document.getElementById("line2").classList.toggle("clicked2");
  document.getElementById("line3").classList.toggle("clicked3");

  var nav = document.getElementById("nav");
  nav.classList.toggle("nav-in-out");

  var main = document.getElementById("main-content");
  main.classList.toggle("main-right-left");
}
