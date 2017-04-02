<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
	<style>
		body {
			min-height: 100vh;
			overflow: hidden;
		}
		h1 {
			font-size: 5em;
			line-height: 100vh;
		}
	</style>
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Jan 20, 2021 12:00:00").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

			// Get todays date and time
			var now = new Date().getTime();

			// Find the distance between now an the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var years = Math.floor( days / 365 );
			days = Math.floor( days - ( years * 365 ) );
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Display the result in the element with id="demo"
			document.getElementById("years").innerHTML = years + " years ";
			document.getElementById("days").innerHTML = days + " years ";
			document.getElementById("hours").innerHTML = hours + " years ";
			document.getElementById("seconds").innerHTML = seconds + " years ";

			// If the count down is finished, write some text
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("countdown").innerHTML = "EXPIRED";
			}
		}, 1000);
	</script>
</head>

<body>
	<h1 class="text-center">
		<span id="years"></span>
		<span id="days"></span>
		<span id="hours"></span>
		<span id="seconds"></span>
	</h1>
</body>
</html>