function chumabe() {

  dropdown  = document.getElementById("dasmuessabe")
  container = document.getElementById("leerecontainer")

  container.classList.toggle("nope");

  if (dropdown.classList.contains("dunde")) {
    dropdown.classList.remove("dunde");
  }
  else if (dropdown.classList.contains("dunde")){
    dropdown.classList.add("dunde");
  }
  else {
    dropdown.classList.add("dunde");
  }
}
