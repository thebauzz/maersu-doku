function switchtheme() {

  wechseln = document.getElementById("body");

  if (wechseln.classList.contains("darktheme")) {
    wechseln.classList.remove("darktheme");
  }
  else {
    wechseln.classList.add("darktheme");
  }
}
