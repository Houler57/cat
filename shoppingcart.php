<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include("./includes/header.php");
	?>
<?php
		include("./includes/functions.inc.php");
	?>

	<title>Shopping Cart</title>
</head>

<body>
<?php
	include("./includes/navbar.php");
	?>
</body>

	<div class="container-sm">

		<script src="./js/exts/simplecart-js-2.2.3/simpleCart.js"></script>
		<script>
			simpleCart({
				checkout: {
					type: "PayPal",
					email: "john.doe@example.com"
				},
				tax: 0.1,
				currency: "AUD"
			})
		</script>
		<form class="form-group" action="" method="POST">
			<div class="simpleCart_shelfItem">
				<h1 class="item_name">Shinesmile Bundle Tier</h1>
				<br>
				<div class="row">
					<select name="item_name" id="item_name">
						<option value="Tier 1">Tier 1</option>
						<option value="Tier 2">Tier 2</option>
						<option value="Tier 3">Tier 3</option>
					</select>

					<input type="text" value="1" class="item_quantity">

					<h4 class="item_price">$19.99</h4> &nbsp; &nbsp; &nbsp; &nbsp;

					<a class="btn btn-success item_add" href="./cardpayment.php">Purchase</a>
				</div>
				<br>
			</div>
		</form>
		
		<div class="text-left">
			<span>
				<h3>OR</h3>
				<p><i>You can pay via PayPal instead ...</i></p>
			</span>
		</div>
		<br>

		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<span>
				<h1>PayPal</h1>
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
				<img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
			</span>
		</form> <!--"HTML Form Basics for PayPal Payments Standard". [online] Available at: https://developer.paypal.com/docs/paypal-payments-standard/integration-guide/formbasics/#using-html-variables-with-saved-payment-buttons-->
	</div>
</body>
<footer>
	<div class="bg-dark text-center text-lg-start">
	<!-- Grid container -->
	<div class="container p-4">
	<!--Grid row-->
	<div class="row">
		<!--Grid column-->
		<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
		<h5 class="text-white">The Kickbackers</h5>

		<p class="text-white">The Kickbackers was founded in 2021</p>
		</div>
		<!--Grid column-->

		<!--Grid column-->
		<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
		<h5 class="text-white">Get Around</h5>

		<ul class="list-unstyled mb-0">
			<li>
			<a href="aboutus.php" class="text-white">About Us</a>
			</li>
			<li>
			<a href="productlisting.php" class="text-white"></i> Product</a>
			</li>
			<li>
			<a href="#!" class="text-white">Contact Us</a>
			</li>
			<li>
			<a href="#!" class="text-white">Gallery</a>
			</li>
		</ul>
		</div>
		<!--Grid column-->

		<!--Grid column-->
		<div class="text-white col-lg-3 col-md-6 mb-4 mb-md-0">
		<h5 class="text-white">We Accept</h5>
		<i id="payicon" class="fa fa-cc-visa" aria-hidden="true"></i>
		<i id="payicon"class="fa fa-cc-mastercard" aria-hidden="true"></i>
		<i id="payicon" class="fa fa-paypal" aria-hidden="true"></i>
		</div>

		<!--Grid column-->
	</div>
	<!--Grid row-->
		
	</div>
	<!-- Grid container -->


</div>
<!-- Copyright -->
</footer>
</html>