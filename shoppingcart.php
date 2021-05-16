<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include("./includes/header.php");
	?>
</head>
<body>
	<?php
	include("./includes/navbar.php");
	?>

	<script src="../js/exts/simplecart-js-2.2.3/simpleCart.js">
		simpleCart({
			checkout: {
				type: "PayPal",
				email: "john.doe@example.com"
			},
			tax: 0.1,
			currency: "AUD"
		})
	</script>

	<div class="simpleCart_shelfItem">
		<h1 class="item_name">Shinesmile Bundle Tier</h1>
		<select name="item_name" id="">
			<option value="Tier 1">Tier 1</option>
			<option value="Tier 2">Tier 2</option>
			<option value="Tier 3">Tier 3</option>
		</select>
		<input type="text" value="1" class="item_Quantity">
		<span class="item_price">$19.99</span>
		<a class="item_add" href="javascript:;">Purchase</a>
	</div>
</body>
<footer>
	<?php
	include("./includes/footer.php");
	?>
</footer>
</html>