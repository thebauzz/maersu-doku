function fullSize() {
  var img = document.getElementById("img");
  var cvr = document.getElementById("cvr");
  var body= document.getElementsByTagName("body");

  img.classList.add("centered");
  cvr.classList.add("show");
  document.getElementsByTagName("BODY")[0].setAttribute("onkeydown", "escGedrueckt()");
}

function closeFullSize() {
  var img = document.getElementById("img");
  var cvr = document.getElementById("cvr");

  img.classList.remove("centered");
  cvr.classList.remove("show");
  document.getElementsByTagName("BODY")[0].removeAttribute("onkeydown", "escGedrueckt()");
}

function escGedrueckt(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
      closeFullSize();
    }
};
