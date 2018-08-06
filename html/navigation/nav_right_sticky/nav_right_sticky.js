window.onscroll = schongescrollt;

function schongescrollt() {

  var dasda = document.getElementById("dasda");
  var scrollposition = window.pageYOffset;

  if (scrollposition >= 100) {
    dasda.classList.add("blibdobe")
  }
  else {
    dasda.classList.remove("blibdobe")
  }
}
