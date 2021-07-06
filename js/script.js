// Set the date we're counting down to
var countDownDate = new Date("July 12, 2021 01:31:10").getTime();
let form = document.querySelector("#form");
// Update the count down every 1 second
var x = setInterval(function () {
  // selection
  let counter = document.querySelector("#countdown");
  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element
  counter.innerHTML = days + "dagen " + hours + "uren " + minutes + "minuten " + seconds + "seconden ";
  // If the count down is finished, write some text.
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "Je bent te laat!";
   // win.style.display = 'block';
   // form.style.display = 'none';
  }
}, 1000);

