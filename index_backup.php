<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/jquery-ui.css"/>	
    <link rel="stylesheet" href="css/bootstrap_3.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">

    
    <script src="js/jquery-3.2.1.js"></script>      
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap-3.3.7.js"></script>
    <script src="js/beruang.js"></script>

	<title>ARCUTRA</title>
</head>
<body>

	<div class="container banner">
  		<div class="col-lg-12 banner__content" style="text-align: center; padding-bottom: 5%; padding-top: 5%;">
		    <b><h1>ARCUTRA</h1></b>
		    <p>Our website is coming soon</p>
		</div>
<!-- style="padding-top: 50%;" -->
		<div class="banner__content cd100 col-lg-12 hidden-xs">

			<div class="col-lg-2">
				
			</div>
			<div class="col-lg-8 bg-mid">

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 js-tilt">
					<h1 class="days">50</h1>
					<h3>Days</h3>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 js-tilt">
					<h1 class="hours"></h1>
					<h3>Hours</h3>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 js-tilt">
					<h1 class="minutes"></h1>
					<h3>Minutes</h3>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 js-tilt">
					<h1 class="seconds"></h1>
					<h3>Seconds</h3>
				</div>
				
			</div>
			<div class="col-lg-2">
				
			</div>
			
		</div>

		<div class="banner__content cd100 col-xs-12 hidden-lg hidden-md hidden-sm" style="padding-top: 25%;">

			<div class="col-xs-12" style="text-align: center;">

				<h1 class="col-xs-1"></h1>
				<h1 class="col-xs-2 days"></h1>  
				<h1 class="col-xs-1">:</h1>
				<h1 class="col-xs-2 hours"></h1> 
				<h1 class="col-xs-1">:</h1>
				<h1 class="col-xs-2 minutes"></h1> 
				<h1 class="col-xs-1">:</h1>
				<h1 class="col-xs-2 seconds"></h1> 

			</div>

			<div class="col-xs-12" style="text-align: center;">

				<h6 class="col-xs-1"></h6>
				<h6 class="col-xs-2">DAYS</h6>  
				<h6 class="col-xs-1"></h6>
				<h6 class="col-xs-2">HOURS</h6> 
				<h6 class="col-xs-1"></h6>
				<h6 class="col-xs-2">MINUTES</h6> 
				<h6 class="col-xs-1"></h6>
				<h6 class="col-xs-2">SECONDS</h6> 

			</div>
			
		</div>


	</div>

	
	<script src="js/popper.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/moment-timezone.min.js"></script>
	<script src="js/moment-timezone-with-data.min.js"></script>
	<script src="js/countdowntime.js"></script>
	<script>
		
		$('.cd100').countdown100({
			/*Set Endtime here*/
			// Endtime must be > current time
			endtimeYear: 2019,
			endtimeMonth: 1,
			endtimeDate: 1,
			endtimeHours: 0,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});

		
	</script>
<!--===============================================================================================-->
	<script src="js/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1
		})

	</script>

</body>
</html>