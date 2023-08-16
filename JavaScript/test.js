// function validate(form) {

//     // validation code here ...


//     if(!valid) {
//         alert('Please correct the errors in the form!');
//         return false;
//     }
//     else {
//         return confirm('Do you really want to submit the form?');
//     }
// }

// function time() {
//     var col = Math.floor(Math.random() * 1000000);
//     document.getElementById("demo").innerHTML = new Date();;
//     document.getElementById("demo").style.color = "#"+col;
//     setTimeout("time()", 1000);
// }
// function clck(){
//     var now = new Date().getTime();
//     var target = new Date("Aug 16 2023 18:00").getTime();
//     var diff = target-now;

//     var sec = Math.floor((diff % (1000*60))/1000);
//     var min = Math.floor((diff % (1000*60*60))/1000*60);
//     var hour = Math.floor((diff % (1000*60*60*24))/1000*60*60);
//     var days = Math.floor(diff/(1000*60*60*24));
//     document.getElementById("dt").innerHTML = days+" days " + hour +" hours " + min +" minutes " +sec +" second ";
//     setTimeout("clck()",1000);
//     // document.write(now+"<br>"); // will be printed in ms, 1000ms is 1s
//     // document.write(diff);

// }
         
// Set the date we're counting down to
var countDownDate = new Date("Aug 25, 2023").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = "Next Keycap Design Drops In: "+ days + " days " + hours + " hours "
  + minutes + " minutes " + seconds + " seconds ";

  var col = Math.floor(Math.random() * 1000000);
  document.getElementById("demo").style.color = "#"+col;

    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);


