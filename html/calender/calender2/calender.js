var addYear  = 0
var addMonth = 0
var date = new Date()
var thisMonth = date.getMonth()
var thisYear  = date.getFullYear()

function onLoad(int) {
  document.getElementById("cal--tage").remove()
  firstStep = document.createElement("div")
  firstStep.id = "cal--tage"
  document.getElementsByTagName("BODY")[0].appendChild(firstStep)

  if      (int == 0) { addYear-- }
  else if (int == 1) { addYear++ }
  else if (int == 2) { addMonth-- }
  else if (int == 3) { addMonth++ }
  if (thisMonth + addMonth == 12) {
    addYear++
    addMonth = 0;
    thisMonth = 0;
  }
  if (thisMonth + addMonth == -1) {
    addYear--
    addMonth = 11;
    thisMonth = 0;
  }
  newM = thisMonth + addMonth
  newY = thisYear + addYear

  var lastDay = new Date(newY, newM + 1, 0).getDate()
  var firstDay = new Date(newY, newM, 1)

  var months = ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"]
  var aktMonat = newM;
  document.getElementById("current-month").innerHTML = months[aktMonat]
  document.getElementById("current-year").innerHTML = date.getFullYear() + addYear

  var weekdays = ["SO", "MO", "DI", "MI", "DO", "FR", "SA"]
  var sd = weekdays.indexOf(weekdays[firstDay.getDay()])
  var weekdaycounter = 0
  while (sd != 1) {
    // Wenn der erste Tag im Monat ein Sonntag ist
    if (sd == 0) {
      var count = 1;
      while (count < 7) {
        var newDiv = document.createElement("div")
        newDiv.textContent = "&nbsp;"
        newDiv.classList.add("tag", "unused")
        document.getElementById("cal--tage").appendChild(newDiv)
        count++
        weekdaycounter++
      }
      break;
    }

    var newDiv = document.createElement("div")
    newDiv.textContent = "&nbsp;"
    newDiv.classList.add("tag", "unused")
    document.getElementById("cal--tage").appendChild(newDiv)
    weekdaycounter++
    sd--;
  }
  var x = 1;
  while (x <= lastDay) {
    var newDiv = document.createElement("div")
    newDiv.textContent = x
    newDiv.classList.add("tag", "used")
    document.getElementById("cal--tage").appendChild(newDiv)
    x++;
    weekdaycounter++;
    if (weekdaycounter %7 === 0) {
      newDiv.classList.add("sonntag")
      document.getElementById("cal--tage").appendChild(document.createElement("br"))
    }
  }
  while (!(weekdaycounter %7 === 0)) {
    var newDiv = document.createElement("div")
    newDiv.textContent = "&nbsp;"
    newDiv.classList.add("tag", "unused")
    document.getElementById("cal--tage").appendChild(newDiv)
    weekdaycounter++
  }
}
