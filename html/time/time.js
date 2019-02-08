window.onload = currentTime;

function currentTime() {
  time = new Date();

  dNamen = ["mon", "tue", "wed", "thu", "fri", "sat", "sun"];
  mNamen = ["jan", "feb", "mar", "apr", "jun", "jul", "aug", "sep", "oct", "nov", "dec"]

  mIndex = time.getMonth();
  dIndex = time.getDay() - 1;

  ddd= dNamen[dIndex];
  dd = time.getDate();
  mm = mNamen[mIndex];

  h = time.getHours();
  m = time.getMinutes();
  s = time.getSeconds();

  dd = checkTime(dd);

  h = checkTime(h);
  m = checkTime(m);
  s = checkTime(s);

  document.getElementById('date-display').innerHTML = ddd+", "+dd+" "+mm;
  document.getElementById('time-display').innerHTML = h+":"+m+":"+s;
  var y = setTimeout(currentTime, 100);
}

function checkTime(x) {
  if (x < 10) {
    x = "0" + x;
  }
  return x;
}
