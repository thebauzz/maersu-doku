/* direktes maniulieren des CSS */
function button1() {
  var txt = document.getElementById("button1");
  txt.style.color = "#47c2ff";
  txt.style.backgroundColor = "#333333";
  txt.style.fontWeight = "bold";
  txt.style.padding = "20px 0";
  txt.innerHTML = "Sie haben den Text mit dem ersten Button verändert.";

  var content = document.getElementsByClassName("content");
  content[0].style.paddingTop = "40px";
}

function button2() {
}

function reset() {
  window.location = "aufgabe5.html";
}
