window.onscroll = schongescrollt;
// window.onload = neuerinhalt

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
/*
function neuerinhalt() {
// erstellt neues p Element mit id zeit und mit inhalt Hallo Zäme
  var element = document.createElement('p');
  element.textContent = "Hallo Zäme";
  element.setAttribute('id', 'zeit');
  document.getElementById("neuerinhalt").appendChild(element);

// erstellt
  var elementZeit = document.createElement('p');
  var stundeJetzt = new Date().getHours();
  var greeting;

  if (stundeJetzt > 18) {
    greeting = 'Guete Abig!';
  }
  else if (stundeJetzt > 12) {
    greeting = 'Guete Tag!';
  }
  else if (stundeJetzt > 0) {
    greeting = 'Guete Morgen!'
  }
  else  {
    greeting = 'Willkommen!';
  }

  elementZeit.textContent = greeting;
  document.getElementById("neuerinhalt").appendChild(elementZeit);
}
*/
