var addYear  = 0
var addMonth = 0
var today = new Date()
var thisMonth = today.getMonth()
var thisYear  = today.getFullYear()

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
  document.getElementById("current-year").innerHTML = newY

  if (newY+","+newM == today.getFullYear()+","+today.getMonth()) {
    document.getElementById("current-month").classList.add("current-month")
  } else {
    document.getElementById("current-month").classList.remove("current-month")
  }

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
    var testHeute = today.getFullYear()+","+today.getMonth()+","+today.getDate()
    var istEsHeut = newY+","+newM+","+x
    if (testHeute == istEsHeut) {
      newDiv.classList.add("current-day")
    }
    var s = 0
    while (s != source.length) {
      var einTag = source[s].split(";")
      var terminHeut = einTag[0]+","+einTag[1]+","+einTag[2]
      if (istEsHeut == terminHeut) {
        var termin = document.createElement("div")
        termin.textContent = einTag[3]
        termin.classList.add("day--element")
        termin.style.background = einTag[4]
        document.getElementsByClassName("used")[x-1].appendChild(termin)
      }
      s++
    }
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
