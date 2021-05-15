<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include("./includes/header.php")
	?>
</head>
<body>
	<?php
	include("./includes/navbar.php");
	?>

	<form class="form" action="cardpaymentpost.php" method="post"></form>

	<?php


	$emailAddress = $_POST["email-address"]; // may need a ```verifyEmailAddr``` function
	if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
		$errEmailAddr = "Email address has encountered an error!";
	}
	?>
	Email Address: <input class="form-control" type="email" name="email-address" id="email-address"><br>

	Name (on card): <input class="form-control" type="text" name="credit-card-fullname" id="credit-card-fullname"><br>
	Credit Card (Number): <input class="form-control" type="text" name="credit-card-number" id="credit-card-number"><br>

	Card Verification Value (CVV): <input class="form-control" type="text" name="credit-card-cvv" id="credit-card-cvv"><br>
	Date of Expiration: <input class="form-control" type="date" name="credit-card-date" id="credit-card-date"><br>

	Address: <input class="form-control" type="text" name="post-delivery-address" id="post-delivery-address">
	Suburb: <input class="form-control" type="text" name="suburb-of-occupation" id="suburb-of-occupation">

	State: <input class="form-control" type="text" name="state-of-origin" id="state-of-origin">
	Postcode: <input class="form-control" type="text" name="country-regional-postcode" id="region-postcode">
	Country: <input class="form-control" type="text" name="country-of-occupation" id="country-of-occupation">

	<button class="btn btn-primary" type="submit">Submit</button>
</body>

<footer>
	<?php
	include("./includes/footer.php")
	?>
</footer>
</html>