<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>How much time till Trump leaves office?</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
	<style>
		body {
			margin: 0;
			min-height: 100vh;
			overflow: hidden;
			padding: 0;
			position: relative;
		}
		h1 {
			font-size: 5em;
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			width: 100vw;
		}
		h1 span{
			display: inline-block;
		}
		#years {
			color: red;
		}
		#tweet-event {
			display: block;
			height: 40px;
			position: absolute;
			right: 40px;
			top: 20px;
			width: 40px;
		}
		#tweet-event svg{
			color: blue;
			fill: #00aced;
		}
	</style>
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Jan 20, 2021 12:00:00").getTime();
		var twitter_url;

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

			if ( 0 === seconds ) {
                document.getElementById('alert').innerHTML = ("Trump is gone in " + document.getElementById("spoken-time").innerText)
			}

			document.getElementById("toolong").innerHTML = '';
			document.getElementById("years").innerHTML = years + " years ";
			document.getElementById("days").innerHTML = days + " days ";
			document.getElementById("hours").innerHTML = hours + " hours ";
			document.getElementById("minutes").innerHTML = minutes + " minutes ";
			document.getElementById("seconds").innerHTML = seconds + " seconds";

			twitter_url = 'https://twitter.com/intent/tweet?text=' + years + ' years ' + days + ' days ' + hours + ' hours&hashtags=TrumpFinalCountdown+http%3A%2F%2Ftrumpfinalcountdown.com';
			console.log( twitter_url );
			var link = document.getElementById('tweet-event');
			link.setAttribute('href', twitter_url );

			// If the count down is finished, write some text
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("countdown").innerHTML = "EXPIRED";
			}
		}, 1000);

	</script>

	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="#FinalTrumpCountdown" />
	<meta name="twitter:description" content='Final Trump Countdown - Time till Trump is out!' />
	<meta name="twitter:image" content="http://trumpfinalcountdown.com/tweet-card.jpg" />
</head>

<body>
	<h1 class="text-center">
		<span id="toolong">Calculating...</span>
        <span id="spoken-time">
            <span id="years"></span>
            <span id="days"></span>
            <span id="hours"></span>
            <span id="minutes"></span>
        </span>
        <span id="seconds"></span>
	</h1>
    <div id="alert" role="alert" aria-live="assertive" style="position:absolute; width:0; height:0; clip: rect(0,0,0,0);"></div>
    <a id="tweet-event" href="#" target="_blank">
		<svg data-name="twitter-bird" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.78 25">
			<title>Twitter Bird</title>
			<path class="white" d="M30.78,3a13.23,13.23,0,0,1-3.16,3.26c0,0.18,0,.46,0,0.82a17.93,17.93,0,0,1-.74,5.07A18.33,18.33,0,0,1,24.64,17,19.05,19.05,0,0,1,21,21.08a16.06,16.06,0,0,1-5,2.85A18.45,18.45,0,0,1,9.69,25,17.52,17.52,0,0,1,0,22.17a13.37,13.37,0,0,0,1.52.08,12.36,12.36,0,0,0,7.83-2.69,6.32,6.32,0,0,1-5.9-4.38,7.93,7.93,0,0,0,1.19.1,6.5,6.5,0,0,0,1.66-.22,6.21,6.21,0,0,1-3.62-2.18,6.09,6.09,0,0,1-1.44-4V8.79a6.24,6.24,0,0,0,2.85.8A6.3,6.3,0,0,1,2.05,7.34a6.15,6.15,0,0,1-.76-3,6.19,6.19,0,0,1,.86-3.18A17.87,17.87,0,0,0,7.9,5.81a17.57,17.57,0,0,0,7.26,1.94A6.91,6.91,0,0,1,15,6.31a6.08,6.08,0,0,1,1.85-4.46A6.32,6.32,0,0,1,25.92,2a12.38,12.38,0,0,0,4-1.52,6.13,6.13,0,0,1-2.77,3.48A12.53,12.53,0,0,0,30.78,3Z"/>
		</svg>
	</a>
</body>
</html>