window.onload = currentTime;

function currentTime() {
  time = new Date();

  dd = time.getDate();
  mm = time.getMonth() + 1;
  yy = time.getFullYear();

  h = time.getHours();
  m = time.getMinutes();
  s = time.getSeconds();

  dd = checkTime(dd);
  mm = checkTime(mm);

  h = checkTime(h);
  m = checkTime(m);
  s = checkTime(s);

  document.getElementById('date-display').innerHTML = dd + "/" + mm + "/" + yy;
  document.getElementById('time-display').innerHTML = h + ":" + m + ":" + s;
  var y = setTimeout(currentTime, 100);
}

function checkTime(x) {
  if (x < 10) {
    x = "0" + x;
  }
  return x;
}
