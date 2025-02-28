<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booking</title>
	<link rel="stylesheet" href="reser_table.css">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
	<script src="table.js"></script>
</head>
<body>

<div class="wrapper">


	<div class="container">
		<div class="container-time">
				<h2 class="heading">Opening Time</h2>
				<h3 class="heading-days">Monday-Friday</h3>
				<p>11am - 10pm (lunch/dinner)</p>

				<h3 class="heading-days">Saturday and sunday</h3>
				<p>11am - 9pm (lunch/dinner)</p>

				<hr>

				<h4 class="heading-phone">Call Us: 9912852576</h4>
		</div>

		<div class="container-form">
				<form action="#">
					<h2 class="heading heading-yellow">Reserv Ur Table</h2>

					<div class="form-field">
						<p>Your Name</p>
						<input type="text" placeholder="Your Name">
					</div>
					<div class="form-field">
						<p>Your Number</p>
						<input type="number" placeholder="Your Number">
					</div>
					<div class="form-field">
						<p>Your email</p>
						<input type="email" placeholder="Your email">
					</div>
					<div class="form-field">
						<p>Date</p>
						<input type="date">
					</div>
					<div class="form-field">
						<p>Time</p>
						<input type="time">
					</div>
					<div class="form-field">
						<p>How many people?</p>
						<select name="select" id="#">
							<option value="1">1 person</option>
							<option value="2">2 persons</option>
							<option value="3">3 persosn</option>
							<option value="4">4 persons</option>
							<option value="5">5 persons</option>
							<option value="5+">5+ persons</option>
						</select>
					</div>
					<button class="btn" id="btn">Submit</button>
					<p id="para"></p>
				</form>
		</div>
	</div>
</div>	
	
</body>
</html>