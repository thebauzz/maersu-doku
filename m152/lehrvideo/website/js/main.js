window.onscroll = alreadyScrolled;

function alreadyScrolled() {
  var scrollposition = window.pageYOffset;
  var sticky = document.getElementById("titlebar");
  var height = document.getElementById("img--height").clientHeight;

  if (scrollposition >= height) {
    sticky.classList.add("navbar--fixed");
  }
  else {
    sticky.classList.remove("navbar--fixed");
  }
}
