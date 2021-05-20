<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include("./includes/functions.inc.php");
	?>
	<?php
	include("./includes/header.php");
	?>

	<title>Sitemap</title>
</head>
<style>

#otis ul{
 list-style-type: none;
 color:red;
 }
 #otis ul li{
 margin-bottom: 1rem;
 }
</style>
<body>
	<?php include("./includes/navbar.php");  ?>
	<main>

		<div class="container">
			<h1 class="mb-5">Shinesmile: Tiered Bundle Oral Hygiene Products and Services</h1>
			<ul class="ml-3 mb-5 nav nav-pills">
				<li role="presentation"><a href="./index.php">Homepage</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
				<li role="presentation"><a href="./productlisting.php">Product Listing</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
				<li role="presentation"><a href="./aboutus.php">About Us</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
				<li role="presentation"><a href="./contactus.php">Contact Us</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
				<li role="presentation"><a href="./sitemap.php">Sitemap</a></li> &nbsp; &nbsp; &nbsp; &nbsp;
			</ul>
			<div class="row">
				<div class="col-md-8 col-sm-6">
					<section id="sec1">
						<h2 class="mb-5">Sitemap</h2>
						<div id="otis" class="row">
							<div class="col-md-4">
								<ul class="ml-3">
									<li><a href="./index.php">Home</a></li>
									<li><a href="./productlisting.php">Product Listing</a></li>
									<li><a href="./aboutus.php">About Us</a></li>
									<li><a href="./contactus.php">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="ml-3">
									<li><a href="./register.php">Register</a></li>
									<li><a href="./login.php">Login</a></li>
									<li><a href="./shoppingcart.php">Shopping Cart</a></li>
									<li><a href="./cardpayment.php">Credit Card Payment</a></li>
								</ul>
							</div>
							<div class="col-md-4 ">
								<ul class="ml-3">
									<li><a href="./prod_desc_tier1.php">Product Description: Tier 1</a></li>
									<li><a href="./prod_desc_tier2.php">Product Description: Tier 2</a></li>
									<li><a href="./prod_desc_tier3.php">Product Description: Tier 3</a></li>
									<li><a href="./purchase.php">Purchase Page Us</a></li>
								</ul>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>

	</main>

	<?php include("./includes/footer.php");  ?>
</body>

</html>