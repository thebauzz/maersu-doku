window.onload = currentTime;

function currentTime() {
  time = new Date();

  h = time.getHours();
  h = checkTime(h);

  m = time.getMinutes();
  m = checkTime(m);

  s = time.getSeconds();
  s = checkTime(s);

  document.getElementById('time-display').innerHTML = h + ":" + m + ":" + s;
  var y = setTimeout(currentTime, 10);
}

function checkTime(x) {
  if (x < 10) {
    x = "0" + x;
  }
  return x;
}
