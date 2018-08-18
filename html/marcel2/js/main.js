window.onscroll = schongescrollt;

function schongescrollt() {
  var scrollposition = window.pageYOffset;
  var sticky = document.getElementById("stickynav");

  if (scrollposition >= 300) {
    sticky.classList.add("fixednav");
  }
  else {
    sticky.classList.remove("fixednav");
  }
}
