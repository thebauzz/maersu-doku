/*
**
**
**  NEWSLETTER FORMULAR
*/

// Validieren vom Formular
function formularCheck() {
  var formular = document.news.email;
  var errText = document.getElementById("formErr");

  if (formular.value != "" ) {
// Falls das Muster stimmt - Mitteilung, dass es geklappt hat
    if (formular.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
      errText.innerHTML = "Sie haben sich erfolgreich angemeldet. Vielen Dank!";
      errText.style.color = "var(--success)";
      formular.value = "";
    }
// Bei falscher Eingabe kommt diese Fehlermeldung
    else {
      errText.innerHTML = "Ihre Eingabe entspricht nicht einer E-Mail Adresse.";
      errText.style.color = "var(--error)";
      formular.focus();
    }
  }
// Wurde nichts eingegeben, erscheint diese Nachricht
  else {
    errText.innerHTML = "<br class=\"mobile-br\"/>Bitte geben Sie Ihre E-Mail ein.";
    errText.style.color = "var(--error)";
    formular.focus();
  }
}

/*
**
**
** REGISTRIEREN FORMULAR
*/

// Überprüfung Nachnamen (leer, nicht leer)
function signupFormular() {

  var fehlerVorhanden = false;

  if (!$("#signupnname").val()) {
    $("#signuperrornname").html("Bitte geben Sie Ihren Nachnamen ein.");
    $("#signuperrornname").css("color", "var(--error)");
    fehlerVorhanden = true;
  }
  else {
    $("#signuperrornname").html("&#10003;");
    $("#signuperrornname").css("color", "var(--success)");
  }

// Überprüfung Vornamen (leer, nicht leer)
  if (!$("#signupvname").val()) {
    $("#signuperrorvname").html("Bitte geben Sie Ihren Vornamen ein.");
    $("#signuperrorvname").css("color", "var(--error)");
    fehlerVorhanden = true;
  }
  else {
    $("#signuperrorvname").html("&#10003;");
    $("#signuperrorvname").css("color", "var(--success)");
  }

// Überprüfung Telefonnummer (leer, falsches Muster, korrekt)
  if (!$("#signuptelnr").val()) {
    $("#signuperrortelnr").html("&nbsp;");
  }
  else if (!$("#signuptelnr").val().match(/[0-9 ]{10,20}/)) {
    $("#signuperrortelnr").html("Min 10, Max 20 Zahlen und Leerzeichen.");
    $("#signuperrortelnr").css("color", "var(--error)");
    fehlerVorhanden = true;
  }
  else {
    $("#signuperrortelnr").html("&#10003;");
    $("#signuperrortelnr").css("color", "var(--success)");
  }

// Überprüfung E-Mail (leer, falsches Muster, korrekt)
  if (!$("#signupemail").val()) {
    $("#signuperroremail").html("Bitte geben Sie Ihre E-Mail ein.");
    $("#signuperroremail").css("color", "var(--error)");
    fehlerVorhanden = true;
  }
  else if (!$("#signupemail").val().match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    $("#signuperroremail").html("Ihre Eingabe ist keine E-Mail Adresse.");
    $("#signuperroremail").css("color", "var(--error)");
    fehlerVorhanden = true;
  }
  else {
    $("#signuperroremail").html("&#10003;");
    $("#signuperroremail").css("color", "var(--success)");
  }

// senden des Usernames an PHP File + Analyse ob Benutzereingabe erfolgreich ist oder nicht
  var username = $("#signupusrname").val();
   $.ajax({
    url:"../php/checkUser.php",
    type:"POST",
    data:{username:username},
    success: function(data){
      $("#signuperrorusrname").html(data);
    },
   });
   if ($("span").hasClass("success")) {
     fehlerUsername = false;
   }
   else {
     fehlerUsername = true;
   }

// Überprüfung Passwort (leer, falsches Muster, korrekt)
  if (!$("#signuppasswd").val()) {
    $("#signuperrorpasswd").html("Bitte geben Sie ein Passwort ein.");
    $("#signuperrorpasswd").css("color", "var(--error)");
    fehlerVorhanden = true;
  }// min 8 Zeichen, min 1 Kleinbuchstaben, 1 Grossbuchstaben und 1 Zahl enthalten.
  else if (!$("#signuppasswd").val().match(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/)) {
    $("#signuperrorpasswd").html("1 Gross- &amp; Kleinbuchstaben, 1 Zahl und min 8 Zeichen.");
    $("#signuperrorpasswd").css("color", "var(--error)");
    fehlerVorhanden = true;
  }
  else {
    $("#signuperrorpasswd").html("&#10003;");
    $("#signuperrorpasswd").css("color", "var(--success)");
  }

// Falls IRGENDWO ein Fehler ist, wird das Formular abgebroche, ansonsten wird es ausgeführt.
  if (fehlerVorhanden == true || fehlerUsername == true) {
    return false;
  }
  else {
    erfolgreichRegistriert();
  }
}
