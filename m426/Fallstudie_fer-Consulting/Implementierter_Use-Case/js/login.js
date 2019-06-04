function login() {
  var uname=document.getElementById("benutzername").value;
  var pword=document.getElementById("passwort").value;

  if (uname=="test" && pword=="test") {
    window.location.href = "html/welcome.html";
  } else {
    document.getElementById("wrong-login").innerHTML="Wrong Login!";
  }
}
