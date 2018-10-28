// bei jedem scrollen, soll die Function schongescrollt aufgeruft werden
window.onscroll = schongescrollt;

function schongescrollt() {
  var scrollposition = window.pageYOffset;
  var sticky = document.getElementById("fixednav");

// Bereits 300px gescrollt?
// Ja = .fixed wird geadded, Nein = .fixed wird entfernt
  if (scrollposition >= 300) {
    sticky.classList.add("fixed");
  }
  else {
    sticky.classList.remove("fixed");
  }
}

// Navigation kommt entweder raus oder rein
function toggleNavigation() {

// Hamburger wird zu X und wieder umgekehrt
  document.getElementById("linie1").classList.toggle("gedreht1");
  document.getElementById("linie2").classList.toggle("gedreht2");
  document.getElementById("linie3").classList.toggle("gedreht3");

// Navigation kommt nach links oder rechts
  var nav = document.getElementById("nav");
  nav.classList.toggle("nav-reinraus");

// ein 100vh & 100vw Container erscheint, damit man die Navigation ausserhalb des Menus wegklicken kann
  var unsichtbar = document.getElementById("leerecontainer");
  unsichtbar.classList.toggle("unsichtbar");
}

// Wechselt zwischen dem Loginformular und dem Signup Formular
function changeForm() {
  var login  = document.loginform;
  var signup = document.signupform;

  login.classList.toggle("invisible");
  signup.classList.toggle("invisible");

// Wurde gerade registriert & wechsel zwischen Formularen, soll der grüne Text verschwinden
  var loginText = document.getElementsByClassName("neuRegistriert")[0];
  if (loginText.classList.contains("visible")) {
    loginText.classList.remove("visible");
    document.getElementById("signuperrorusrname").innerHTML = "&nbsp;";
  }
}

// Ist das Passwortfeld ein type="text", wechseln zu type="password" und umgekehrt
function passwortToggle() {
  var signup = document.signupform.signuppasswd;
  if (signup.type == "text") {
    signup.type = "password";
  } else {
    signup.type = "text";
  }

  var login = document.loginform.loginpasswd;
  if (login.type == "text") {
    login.type = "password";
  } else {
    login.type = "text";
  }

}

// Wird ausgeführt, wenn keine Fehlermeldung bei registrieren aufkommt.
function erfolgreichRegistriert() {
// Sendet username + password an addUser.php, welches die beiden Daten in die "Datenbank" einfügt.
  var username = $("#signupusrname").val();
  var password = $("#signuppasswd").val();
  $.ajax({
    type: "POST",
    url: '../php/addUser.php',
    dataType: 'php',
    data: { username, password }
  });

// "Sie können sich jetzt anmelden" text erscheint.
  var loginText = document.getElementsByClassName("neuRegistriert")[0];
  loginText.classList.toggle("visible");

// Wechselt zum login Formular
  var login  = document.loginform;
  var signup = document.signupform;
  login.classList.toggle("invisible");
  signup.classList.toggle("invisible");

// zurücksetztn Formular + Fehlermedungen
  document.signupform.reset();
  document.getElementById("signuperrornname").innerHTML   = "&nbsp;";
  document.getElementById("signuperrorvname").innerHTML   = "&nbsp;";
  document.getElementById("signuperroremail").innerHTML   = "&nbsp;";
  document.getElementById("signuperrortelnr").innerHTML   = "&nbsp;";
  document.getElementById("signupusername").remove();
  document.getElementById("signuperrorpasswd").innerHTML  = "&nbsp;";
}
