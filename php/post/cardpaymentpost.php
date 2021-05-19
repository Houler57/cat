<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$rootDir = $_SERVER["HTTP_HOST"];
		$currentFilepath = rtrim(dirname($_SERVER["PHP_SELF"]));
		$hostServerUrl = "http://$rootDir/inte2047/TheKickbackers";
	?>
	<?php
	include("../../includes/header.php");
	?>
</head>
<body>
	<?php
	include("../../includes/navbar.php");
	?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto mt-5">
				<h1>Payment Success</h1>
				<p><?php $_GET["email-address"] ?></p>
				<p><?php $_GET["state-of-origin"] ?></p>
				<p><?php $_GET["region-postcode"] ?></p>
				<p><?php $_GET["country-of-occupation"] ?></p>
				<a class="btn btn-secondary" <?php echo "href=\"$hostServerUrl/index.php\"" ?> >Return to Homepage</a>
			</div>
		</div>
	</div>
</body>
</html>