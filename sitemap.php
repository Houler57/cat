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
<body>
	<?php include("./includes/navbar.php");  ?>
	
	
	<div class="container-xl p-4">
		<div class="row">
			<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
				<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
					<h5 class="text-xl-left font-weight-bold">Get Around</h5>

					<ul class="list-unstyled mb-0">

					<li class="nav-item active">
						<a class="text-xl-left nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="text-xl-left nav-link" href="./productlisting.php">Products</a>
					</li>
					<li class="nav-item">
						<a class="text-xl-left nav-link" href="./aboutus.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="text-xl-left nav-link" href="./contactus.php">Contact Us</a>
					</li>

					<li class="nav-item">
						<a class="text-xl-left nav-link" href="./shoppingcart.php">Cart</a>
					</li>

					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container-sm">
		<img class="img-thumbnail float-left" src="./image/Doctor 2.jfif" alt="A Doctor taken in a landscape photo">
		<img class="img-thumbnail float-right" src="./image/Docter 1.jfif" alt="There's a Doctor who is an oral specialist too">
	</div>

</body>

</html>