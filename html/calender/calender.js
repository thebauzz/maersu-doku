// Holt aktuellen Monat
var today = new Date();
var aktMonat = today.getMonth();
var months = ["Januar", "Februar", "März", "April",
              "Mai", "Juni", "Juli", "August",
              "September", "Oktober", "November", "Dezember"];

document.getElementById("current-month").innerHTML = months[aktMonat];

// 31. Dezember des vergangenen Jahres
var start = new Date(today.getFullYear(), 0, 0);
// Errechnet Anzahl vergangener Tage bis heute
var todayDay = Math.floor((today - start) / (1000 * 60 * 60 * 24)) - 1;

var einJahr = 365
// Schaltjahr ja oder nein
if (today.getFullYear() % 4 === 0) {
  einJahr = 366;
  sJahr = true;
} else {
  sJahr = false;
}


var alleTage = [];
var i = 0;
var weekday  = start.getDay() + 1; // 1. Januar des Jahres als Wochentag
// Teilt jedem Tag im Jahr den Wochentag zu
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
  case 1:  if (sJahr) {m = 29; startDay =  31; } else {m = 28; startDay = 31;}; break;
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
// Bei einem Schaltjahr ist der Starttag jedes Monates nach dem Febrar + 1
if (aktMonat > 1 && sJahr) {
  startDay + 1;
}

var x = 1;
sd = days.indexOf(alleTage[startDay])
var weekdaycounter = 0;
while (sd != 1) {
  // Wenn der erste Tag im Monat ein Sonntag ist
  if (sd == 0) {
    var count = 1;
    while (count < 7) {
      var newDiv = document.createElement("div");
      newDiv.textContent = "&nbsp;";
      newDiv.classList.add("unused");
      newDiv.classList.add("tag");
      document.getElementById("cal--tage").appendChild(newDiv);
      count++;
      weekdaycounter++;
    }
    break;
  }

  var newDiv = document.createElement("div");
  newDiv.textContent = "&nbsp;";
  newDiv.classList.add("unused");
  newDiv.classList.add("tag");
  document.getElementById("cal--tage").appendChild(newDiv);
  weekdaycounter++;
  sd--;
}
while (x <= m) {
  var newDiv = document.createElement("div");
  newDiv.textContent = x;
  newDiv.classList.add("tag");
  document.getElementById("cal--tage").appendChild(newDiv);
  if (startDay - 1 + x == todayDay) {
    newDiv.classList.add("current-day");
  }
  x++;
  weekdaycounter++;
  if (weekdaycounter %7 === 0) {
    newDiv.classList.add("sonntag");
    document.getElementById("cal--tage").appendChild(document.createElement("br"));
  }
}
while (!(weekdaycounter %7 === 0)) {
  var newDiv = document.createElement("div");
  newDiv.textContent = "&nbsp;";
  newDiv.classList.add("unused");
  newDiv.classList.add("tag");
  document.getElementById("cal--tage").appendChild(newDiv);
  weekdaycounter++;
}
