//hitung mundur

startTimer();
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[1];
  var s = checkSecond((timeArray[2] - 1));
  if(s==59){m=m-1}
  //if(m<0){alert('timer completed')}
  document.getElementById('timer').innerHTML =
  timeArray[0]+":" + m + ":" + s;


  if(!(m == 00 && s == 00)){
    
    setTimeout(startTimer, 1000);
    $("#waw").load("process/update_time.php", {timer:$("#timer").html()}, function (response, status, request) {
      this; // dom element
      
    });
  }
}
function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
// setTimeout()

// setInterval()