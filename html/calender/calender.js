// Holt aktuellen Monat
var today = new Date();
aktMonat = today.getMonth();

// 31. Dezember des vergangenen Jahres
var start = new Date(today.getFullYear(), 0, 0);
// Errechnet Anzahl vergangener Tage bis heute
var diff = today - start;
var day = Math.floor(diff / (1000 * 60 * 60 * 24)) - 1;

var alleTage = [];
var i = 0;
var weekday  = start.getDay() + 1; // 1. Januar des Jahres als Wochentag

var einJahr = 365
if (today.getFullYear() % 4 === 0) {
  einJahr = 366;
}
while (i < einJahr) {
  var days = ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"];
  alleTage[i] = days[weekday];
  i++;
  weekday++;
  if (weekday == 7) {
    weekday = 0;
  }
}

switch(aktMonat) {
  case 0:  m = 31; startDay =   0; break;
  case 1:  if (today.getFullYear() % 4 === 0) {m = 29; startDay =  31; } else {m = 28; startDay = 31;}; break;
  case 2:  m = 31; startDay =  59; break;
  case 3:  m = 30; startDay =  90; break;
  case 4:  m = 31; startDay = 120; break;
  case 5:  m = 30; startDay = 151; break;
  case 6:  m = 31; startDay = 181; break;
  case 7:  m = 31; startDay = 212; break;
  case 8:  m = 30; startDay = 243; break;
  case 9:  m = 31; startDay = 273; break;
  case 10: m = 30; startDay = 304; break;
  case 11: m = 31; startDay = 334; break;
}
// Bei einem Schaltjahr
if (aktMonat > 1 && (today.getFullYear() % 4 === 0)) {
  m + 1;
  startDay + 1;
}

var x = 1;
var f = 0;
while (x <= m) {
  if (alleTage[f] != days[0] ) {

  }
  f++;




      // var newDiv = document.createElement("div");
      // newDiv.textContent = x;
      // newDiv.classList.add("einzeltag");
      // document.getElementById("cal--tage").appendChild(newDiv);
      //
      // if (x %7 === 0 ) {
      //   newDiv.classList.add("sonntag");
      //   var br = document.createElement("br");
      //   document.getElementById("cal--tage").appendChild(br)
      // }




  x++
}
