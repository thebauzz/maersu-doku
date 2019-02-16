var addYear  = 0
var addMonth = 0
function onLoad(int) {
  document.getElementById("cal--tage").remove()
  firstStep = document.createElement("div")
  firstStep.id = "cal--tage"
  document.getElementsByTagName("BODY")[0].appendChild(firstStep)

  if      (int == 0) { addYear-- }
  else if (int == 1) { addYear++ }
  else if (int == 2) { addMonth-- }
  else if (int == 3) { addMonth++ }

  var date = new Date()
  var ld = new Date((date.getFullYear() + addYear), (date.getMonth() + addMonth) + 1, 0)
  var lastDay = ld.getDate()
  var firstDay = new Date((date.getFullYear() + addYear), (date.getMonth() + addMonth), 1)

  var months = ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"]
  var aktMonat = date.getMonth() + addMonth
  document.getElementById("current-month").innerHTML = months[aktMonat]

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
