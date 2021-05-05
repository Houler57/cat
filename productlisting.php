<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("./includes/header.php");
?>
</head>
<body>

<div class="jumbotron text-center">
	<h1><small>Product </small>Listing</h1>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm">
			<img src="./image/tier1.jpg" alt="Tier 1 Bundle Image" class="img-thumbnail">
				<h3>Tier 1</h3>
				<p class="text-muted">Our flagship and most suitable tiered bundle</p>
				<button type="button" class="btn btn-default">Choose Bundle 1</button>
			</div>
			<div class="col-sm">
			<img src="./image/tier2.jpg" alt="Tier 2 Bundle Image" class="img-thumbnail">
				<h3>Tier 2</h3>
				<p class="text-muted">Tier 2 is most suitable for a small family</p>
				<button type="button" class="btn btn-default">Choose Bundle 2</button>
			</div>
			<div class="col-sm">
			<img src="./image/tier3.jpg" alt="Tier 3 Bundle Image" class="img-thumbnail">
				<h3>Tier 3</h3>
				<p class="text-muted">This tier is the most cost-effective choice for large families</p>
				<button type="button" class="btn btn-default">Choose Bundle 3</button>
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