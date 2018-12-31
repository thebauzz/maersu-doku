window.onscroll = schonGescrollt;

function schonGescrollt() {
  var scrollposition = window.pageYOffset;
  var sticky = document.getElementById("nav");
  var height = document.getElementById("img").clientHeight;

  if (scrollposition >= (height - 60)) {
    sticky.classList.add("header--nav-fixed");
  }
  else {
    sticky.classList.remove("header--nav-fixed");
  }
}

function toggleMenu() {
  document.getElementById("menu").classList.toggle("menu--clicked");
  document.getElementById("line1").classList.toggle("clicked1");
  document.getElementById("line2").classList.toggle("clicked2");
  document.getElementById("line3").classList.toggle("clicked3");
}
