document.getElementsByClassName('tablinks')[0].click()
function paymentMethod(url, methodName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(methodName).style.display = "block";
  url.currentTarget.className += " active";
}

	var dt = new Date();
	document.getElementById("date").innerHTML = (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (("0"+dt.getDate()).slice(-2)) +"/"+ (dt.getFullYear());
	
	var tm = new Date();
	document.getElementById("time").innerHTML = (("0"+tm.getHours()).slice(-2)) +":"+ (("0"+tm.getMinutes()).slice(-2));

function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        var end =setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = seconds + "..";

            if (--timer < 0) {
                window.location = "../home.html";
                clearInterval(end);
            }
        }, 1000);
    }

    function timer() {
        var thirtySeconds = 30,
            display = document.querySelector('#time');
        startTimer(thirtySeconds, display);
    };
	
$("#payNowBTN").click(function() {
    $.ajax({
        type: "POST",
        url: "http://www.localhost/ems/view/PaymentInterface/PaymentPage.php",
        data: $("paypal").serialize()
    });
    return true;
});