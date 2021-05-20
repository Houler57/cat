<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$rootDir = $_SERVER["HTTP_HOST"];
		$currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"]));
		$hostServerUrl = "$rootDir/inte2047/TheKickbackers";
	?>

	<?php	
		session_start();
		session_id();
	?>
	
	<?php
		include("./includes/header.php");
	?>
	<?php
		include("./includes/functions.inc.php");
	?>
</head>
<body>
	<?php
	include("./includes/navbar.php");
	?>

	<form class="form-group" <?php echo "action=\"$hostServerUrl/php/post/cardpaymentpost.php\"" ?> method="post">

		<div class="col-md-6">
			<label for="email-address">Email Address:</label> <input class="form-control" type="email" name="email-address" id="email-address" required><br>
		</div>

		<div class="col-md-6">
			<label for="credit-card-fullname">Name (on card):</label> <input class="form-control" type="text" name="credit-card-fullname" id="credit-card-fullname" required><br>
			<label for="credit-card-number">Credit Card (Number):</label> <input class="form-control" type="text" name="credit-card-number" id="credit-card-number" required><br>

			<label for="credit-card-cvv">Card Verification Value (CVV):</label> <input class="form-control" type="text" name="credit-card-cvv" id="credit-card-cvv" required><br>
			<label for="credit-card-date">Date of Expiration:</label> <input class="form-control" type="date" name="credit-card-date" id="credit-card-date" required><br>
		</div>

		<div class="col-md-4">
			<label for="post-delivery-address">Address:</label> <input class="form-control" type="text" name="post-delivery-address" id="post-delivery-address" required>
			<label for="suburb-of-occupation">Suburb:</label> <input class="form-control" type="text" name="suburb-of-occupation" id="suburb-of-occupation" required>

			<label for="state-of-origin">State:</label> <input class="form-control" type="text" name="state-of-origin" id="state-of-origin" required>
			<label for="region-postcode">Postcode:</label> <input class="form-control" type="text" name="region-postcode" id="region-postcode" required>
			<label for="country-of-occupation">Country:</label> <input class="form-control" type="text" name="country-of-occupation" id="country-of-occupation" required>
		</div>
		<br>

		<input class="btn btn-primary" type="submit" name="submit-card-payment" value="Submit Payment">
	</form>
</body>

<?php
	if (isset($_POST["action"])) {
		echo $_POST["submit"];
	}
?>

<footer>
	<?php
	include("./includes/footer.php")
	?>
</footer>
</html>

<script <?php echo "src=\"$hostServerUrl/js/exts/card-v.2.5.2/dist/jquery.card.js\"" ?> ></script>
<script>
$('form').card({container: '.card-wrapper',}) // "Card - check out the demo". [online] Available at: https://github.com/jessepollak/card
</script>