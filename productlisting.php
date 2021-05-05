<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("./includes/header.php");
?>
</head>
<body>
<?php
include("./incudes/navbar.php");
?>

<div class="jumbotron text-center">
	<h1><small>Product </small>Listing</h1>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm">
			<img src="./image/tier1.jpg" alt="Tier 1 Bundle Image" class="img-thumbnail">
				<h3>Tier 1</h3>
				<p class="text-muted">Our flagship and most suitable tiered bundle</p>
				<a href="prod_desc_tier1.php" type="button" class="btn btn-default">Choose Bundle 1</a>
			</div>
			<div class="col-sm">
			<img src="./image/tier2.jpg" alt="Tier 2 Bundle Image" class="img-thumbnail">
				<h3>Tier 2</h3>
				<p class="text-muted">Tier 2 is most suitable for a small family</p>
				<a href="prod_desc_tier2.php" type="button" class="btn btn-default">Choose Bundle 2</a>
			</div>
			<div class="col-sm">
			<img src="./image/tier3.jpg" alt="Tier 3 Bundle Image" class="img-thumbnail">
				<h3>Tier 3</h3>
				<p class="text-muted">This tier is the most cost-effective choice for large families</p>
				<a href="prod_desc_tier3.php" type="button" class="btn btn-default">Choose Bundle 3</a>
		</div>
	</div>
</div>
	
</body>

<footer>
<?php
include("./includes/footer.php");
?>
</footer>
</html>