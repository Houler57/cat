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

	<form class="form-group" action="cardpaymentpost.php" method="post"></form>

	<?php


	$emailAddress = $_POST["email-address"]; // may need a ```verifyEmailAddr``` function
	if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
		$errEmailAddr = "Email address has encountered an error!";
	}
	?>
	<div class="col-md-6">
	Email Address: <input class="form-control" type="email" name="email-address" id="email-address"><br>
	</div>

	<div class="col-md-6">
	<label for="credit-card-fullname">Name (on card):</label> <input class="form-control" type="text" name="credit-card-fullname" id="credit-card-fullname"><br>
	<label for="credit-card-number">Credit Card (Number):</label> <input class="form-control" type="text" name="credit-card-number" id="credit-card-number"><br>

	<label for="credit-card-cvv">Card Verification Value (CVV):</label> <input class="form-control" type="text" name="credit-card-cvv" id="credit-card-cvv"><br>
	<label for="credit-card-date">Date of Expiration:</label> <input class="form-control" type="date" name="credit-card-date" id="credit-card-date"><br>
	</div>

	<div class="col-md-4">
	<label for="post-delivery-address">Address:</label> <input class="form-control" type="text" name="post-delivery-address" id="post-delivery-address">
	<label for="suburb-of-occupation">Suburb:</label> <input class="form-control" type="text" name="suburb-of-occupation" id="suburb-of-occupation">

	<label for="state-of-origin">State:</label> <input class="form-control" type="text" name="state-of-origin" id="state-of-origin">
	<label for="region-postcode">Postcode:</label> <input class="form-control" type="text" name="region-postcode" id="region-postcode">
	<label for="country-of-occupation">Country:</label> <input class="form-control" type="text" name="country-of-occupation" id="country-of-occupation">
	</div>
	
	<button class="btn btn-primary" type="submit">Submit</button>
</body>

<footer>
	<?php
	include("./includes/footer.php")
	?>
</footer>
</html>